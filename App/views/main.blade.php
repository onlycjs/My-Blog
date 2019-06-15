@extends('layout/master')

@section('maincontent')
    <section id="slider" class="mt-4">
        <div class="container">
            <!-- 슬라이더 섹션 -->
            <div class="slider">
                <div class="btn">
                    <span class="left">&lt;</span>
                    <span class="right">&gt;</span>
                </div>
                @foreach($list_slide as $item_slide)
                    <div class="slide-image">
                        <div class="slide-img">
                            {!! $item_slide -> thumbnail !!}
                        </div>
                        <div class="filter"></div>
                        <div class="slide-content">
                            <h1>{{$item_slide->title}}</h1>
                            <p>{{$item_slide->content}}</p>
                        </div>
                    </div>
                @endforeach
                <!--<div class="slide-image active" style="background-image:url('/imgs/ogu.png')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>반가워요</h1>
                    <p>하찮은 블로그에 오신걸 환영해요</p>
                </div>
                </div>
                <div class="slide-image" style="background-image:url('/imgs/arazzi.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>이 블로그는</h1>
                    <p>다양한 하찮고 쓸모없는 정보를 공유하는 블로그에요</p>
                </div>
                </div>
                <div class="slide-image" style="background-image:url('/imgs/webarebears.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>여러분들도</h1>
                    <p>알고있는 하찮은 정보를 공유해주세요</p>
                </div>
                </div>-->
            </div>
            <div class="indicator">
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <section id="editorPick">
            @foreach($list as $item)
            <div class="item">
                <div class="img-box">
                   <a href="/view?id={{$item->id}}">{!! $item->thumbnail !!}</a>
                </div>
                <div class="info-box">
                    <h3><a href="/view?id={{$item->id}}">{{$item->title}} <hr> {{date("Y년 m월 d일", strtotime($item->wdate))}} <hr> </a></h3>
                    <p>{{$item->content}}</p>
                </div>
                @if(isset($_SESSION['user']))
                <div class="i-button">
                    <div class="col-11 text-right">
                        <button type="submit" class="btn btn-info mr-3">
                            <a class="text-decoration-none text-light" href="/edit?id={{ $item->id }}">수정하기</a>
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <a class="text-decoration-none text-light" href="/remove?id={{ $item->id }}">삭제하기</a>
                        </button>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </section>
        <ul class="pagination pagination-lg justify-content-center mt-5">
            @if($p->prev)
            <li class="page-item"><a href="/?p={{$p->start - 1}}" class="page-link">이전</a></li>
            @endif
            @for($i = $p->start; $i <= $p->end; $i++)
                @if($i == $p->current)
                <li class="page-item"><a href="/?p={{$i}}" class="page-link">{{$i}}</a></li>
                @else
                <li class="page-item"><a href="/?p={{$i}}" class="page-link">{{$i}}</a></li>
                @endif
            @endfor
            @if($p->next)
            <li class="page-item"><a href="/?p={{$p->end + 1}}" class="page-link">다음</a></li>
            @endif
        </ul>
    </div>
@endsection