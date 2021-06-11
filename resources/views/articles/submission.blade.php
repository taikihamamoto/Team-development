<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <title>投稿ページ</title>
</head>

<body>
  <script src="{{ asset('js/script.js') }}"></script>
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
  <ul style="color: red;">
    @if ($errors->has('main_title'))
    <li>{{ $errors->first('main_title') }}</li>
    @endif
    @if ($errors->has('title_1'))
    <li>{{ $errors->first('title_1') }}</li>
    @endif
    @if ($errors->has('text_1'))
    <li>{{ $errors->first('text_1') }}</li>
    @endif
    @if ($errors->has('title_2'))
    <li>{{ $errors->first('title_2') }}</li>
    @endif
    @if ($errors->has('text_2'))
    <li>{{ $errors->first('text_2') }}</li>
    @endif
    @if ($errors->has('title_3'))
    <li>{{ $errors->first('title_3') }}</li>
    @endif
    @if ($errors->has('text_3'))
    <li>{{ $errors->first('text_3') }}</li>
    @endif
    @if ($errors->has('image'))
    <li>{{ $errors->first('image') }}</li>
    @endif
    @if ($errors->has('money_goals'))
    <li>{{ $errors->first('money_goals') }}</li>
    @endif
    @if ($errors->has('reception_deadline'))
    <li>{{ $errors->first('reception_deadline') }}</li>
    @endif
  </ul>
  <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label style="margin-left: 23px;">タイトル</label><br>
    <input style="margin-left: 23px;" name="main_title" type="text" value="">
    <div class="submission-border">
    <label>項目１</label><br>
      <input name="title_1" type="text" value=""><br>
      <label>内容１</label><br>
      <input name="text_1" type="text" value="">
    </div>
    <div class="submission-border">
    <label>項目２</label><br>
      <input name="title_2" type="text" value=""><br>
      <label>内容２</label><br>
      <input name="text_2" type="text" value="">
    </div>
    <div class="submission-border">
    <label>項目３</label><br>
      <input name="title_3" type="text" value=""><br>
      <label>内容３</label><br>
      <input name="text_3" type="text" value="">
    </div>
    <div class="submission-border">
    <label>画像</label><br>
      <input name="image" type="file" value="" accept="image/png, image/jpeg">
    </div>
    <div>
    <label style="margin-left: 23px;">目標金額</label>
      <input style="margin-left: 23px;" name="money_goals" type="number" value="">
    </div><br>
    <div>
    <label style="margin-left: 23px;">受付締め切り</label>
      <input style="margin-left: 23px;" name="reception_deadline" type="date" value="">
    </div>
    <input style="margin-left: 23px;" name="submit" type="submit" onclick="submissionChk()" value="投稿">
  </form>
</body>

</html>