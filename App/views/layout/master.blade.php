<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if( isset($_SESSION['flash_msg']))
        <script>
            let msg = "{{$_SESSION['flash_msg']['msg']}}";
        </script>

        @php
            unset ($_SESSION['flash_msg']);
        @endphp
    @endif
    <script src="/js/app.js"></script>
    @yield('scriptsection')
    <title>My Blog</title>
</head>
<body>
    <aside id="submenu">
        <h2 class="my-3 text-center">하찮은 서브메뉴</h2>
        @if(isset($_SESSION['user']))
            <div class="sub-btn">
                <a href="/logout" class="logout">로그아웃</a>
                <a href="/post" class="post">포스팅</a>
            </div>
        @else
            <div class="sub-btn">
                <a href="/login" class="login">로그인</a>
            </div>
        @endif
    </aside>

    <div id="toastList">

    </div>

    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="logo">
                    <h1>하찮은 블로그</h1>
                </div>
                <div class="icon-bar">
                    <span><i class="fas fa-search"></i></span>
                    <span id="btnSubmenu"><i class="fas fa-bars"></i></span>
                </div>
            </header>
        </div>
    </section>
    
    @yield('maincontent')
    
    <footer>
        <div class="container text-center">
            <p>© 2019 My-Blog. All right reserved. <br>
            TEL : 010-1234-5678</p>
            <div class="icon-box">
                <span><i class="fab fa-facebook-square"></i></span>
                <span><i class="fab fa-instagram"></i></span>
                <span><i class="fab fa-github-square"></i></span>
            </div>
        </div>
    </footer>
</body>
</html>