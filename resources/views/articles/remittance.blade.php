<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="content-type" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>一覧ページ</title>
</head>

<body>
    <script src="js/script.js"></script>
    <header class="header-logo-menu">
        <div class="logo-area">
            <a href="/">Balloon Room</a>
        </div>
        <nav class="sp-only">
            <div class="gnav-toggle">
                <input id="gnav-input" type="checkbox" class="gnav-hidden">
                <label id="gnav-open" for="gnav-input"><span></span></label>
                <label class="gnav-unshown" id="gnav-close" for="gnav-input"></label>
                <div id="gnav-content">
                    <ul class="gnav-menu">
                        <li class="gnav-item">
                            <a href="#service">Service<br>サービス</a>
                        </li>
                        <li class="gnav-item">
                            <a href="#plan">Plan<br>プラン</a>
                        </li>
                        <li class="gnav-item">
                            <a href="{{ route('list_page') }}">List<br>一覧</a>
                        </li>
                        @guest
                        <li class="gnav-item">
                            <a href="{{ route('login') }}">Login<br>ログイン</a>
                        </li>
                        <li class="gnav-item">
                            <a href="{{ route('submission_page') }}">Sign up<br>アカウント作成</a>
                        </li>
                        @endif
                        @auth
                        <li class="gnav-item">
                            <a href="{{ route('submission_page') }}">Submission<br>新規投稿</a>
                        </li>
                        <li class="gnav-item">
                        <li class="gnav-item">
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="logoutChk();event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <br>{{ __('ログアウト') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="pc-only">
            <ul class="gnav-menu">
                <li class="gnav-item">
                    <a href="#service">Service<br>サービス</a>
                </li>
                <li class="gnav-item">
                    <a href="#plan">Plan<br>プラン</a>
                </li>
                <li class="gnav-item">
                    <a href="{{ route('list_page') }}">List<br>一覧</a>
                </li>
                @guest
                <li class="gnav-item">
                    <a href="{{ route('login') }}">Login<br>ログイン</a>
                </li>
                <li class="gnav-item">
                    <a href="{{ route('register') }}">Sign up<br>アカウント作成</a>
                </li>
                @endif
                @auth
                <li class="gnav-item">
                    <a href="{{ route('submission_page') }}">Submission<br>新規投稿</a>
                </li>
                <li class="gnav-item">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="logoutChk();event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <br>{{ __('ログアウト') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
                @endif
            </ul>
        </nav>

        </div>
    </header>
</body>

</html>