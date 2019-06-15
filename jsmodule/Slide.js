import $ from 'jquery';

export default class Slide {
    constructor() {
        this.current = 0;
        this.sList = $(".slide-image"); //
        this.indiList = $(".indicator li"); //인디케이터 버튼
        this.slideBtn = $(".btn > span"); //이전 이후 버튼

        this.slideBtn.each((idx, target)=>{
            $(target).data("idx", idx);
        });
        this.slideBtn.on("click", (e)=>{
            let idx = $(e.target).data("idx");
            if(idx == 1){ //다음
                this.slide(this.current + 1);
            }else { //이전
                this.slide(this.current - 1);
            }
        });

        this.indiList.each((idx, target) => {
            $(target).data("idx", idx);
        });

        this.endSlide();

        this.indiList.on("click", (e) => {
            let idx = $(e.target).data("idx");
            this.slide(idx);
        });

        this.sList.eq(0).css({left:0});

        this.easing = "linear";
        this.slideTime = 500;
    }


    slide(idx) {
        if (this.current == idx || this.sliding) return;
        if(idx < 0 || idx >= this.sList.length) return;

        this.indiList.removeClass("active");
        this.indiList.eq(idx).addClass("active");

        this.sliding = true;
        if (this.current < idx) { //오른쪽으로 이동
            this.sList.eq(idx).css({ "left": "100%" });
            this.sList.eq(idx).animate({ left: "0%" }, this.slideTime, this.easing, () => {
                this.endSlide();
            });
            this.sList.eq(this.current).animate({ left: "-100%" }, this.slideTime, this.easing);
        } else { //왼쪽으로 이동
            this.sList.eq(idx).css({ "left": "-100%" });
            this.sList.eq(idx).animate({ left: "0%" }, this.slideTime, this.easing, () => {
                this.endSlide();
            });
            this.sList.eq(this.current).animate({ "left": "100%" }, this.slideTime, this.easing);
        }
        this.current = idx;
    }

    endSlide(){
        this.sliding = false;
        this.current == 0 ? 
            this.slideBtn.eq(0).attr("disabled", true) : 
            this.slideBtn.eq(0).attr("disabled", false);

        this.current == this.sList.length - 1 ? 
            this.slideBtn.eq(1).attr("disabled", true) : 
            this.slideBtn.eq(1).attr("disabled", false);
    }
}