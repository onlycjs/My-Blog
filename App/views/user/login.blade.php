@extends('layout/master')

@section('maincontent')
    <section id="login">
        <div class="l-title"><h1>하찮지만 정성스럽게 만든 로그인 화면</h1></div>
        <form action="/login" method="post">
        <div class="l-content">
            <div class="l-write">
                <div class="form-group">
                    <label for="id">아이디</label>
                    <input name="userID" type="id" class="form-control" id="id" placeholder="아이디를 입력하세요.">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">비밀번호</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="비밀번호를 입력하세요.">
                </div>
                <div class="l-comment">
                    <a href="#">비밀번호를 잊어버리셨나요?</a>
                </div>
            </div>
        <div class="row">
            <div class="col-10 text-right">
                <button type="submit" class="btn btn-dark">로그인</button>
            </div>
        </div>
        </form>
        </div>
    </section>
@endsection