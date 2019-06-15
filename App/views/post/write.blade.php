@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<div class="memo">
<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="f-title">
            <h2 class="my-1 text-center">하찮은 글쓰기</h2>
        </div>
        <form action="/post" method="post">
            <div class="f-content">
                <div class="f-write">
                    <div class="form-group">
                        <div class="p-title"><p>글 제목</p></div>
                        <input class="form-control" type="text" name="title" placeholder="제목을 입력하세요.">
                    </div>
                    <div class="form-group">
                        <div class="p-content"><p>글 내용</p></div>
                        <textarea id="editor" rows="10" class="form-control" name="content" placeholder="제목을 입력하세요."></textarea>
                    </div>
                </div>
                <div class="f-btn">
                    <div class="row">
                        <div class="col-10 text-right">
                            <button type="submit" class="btn btn-outline-primary">글쓰기</button>
                            <button type="reset" class="btn btn-outline-danger">취소</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection