<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <title>Balloon Room</title>
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
            <a class="dropdown-item" href="" onclick="logoutChk();event.preventDefault();document.getElementById('logout-form').submit();">
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
  <main>
    <section id="mv" class="mv-area">
      <h1 class="mv-title">各地のお祭りを支援できる<br class="sp-only">クラウドファウンディングサイト</h1>
      <!--ボタン押したらログインフォームに飛ぶように-->
      @guest
      <button type="button" onclick="location.href='/login'" class="btn btn-reserve">ログインはこちら</button>
      @endif
      @auth
      <button type="button" onclick="location.href='list_page'" class="btn btn-reserve">募集一覧はこちら</button>
      @endif
    </section>

    <section id="info" class="info-area">
      <div class="inner info-content">
        <div class="info-txt">
          <h2>興味のあるお祭りを<br class="sp-only">支援することができます。</h2>
          <p>日本では少子高齢化・地方の人口過疎化等の社会問題から各地に存在している日本古来の伝統行事存続が困難になっております。本サイトでは日本古来の伝統行事を守るためのクラウドファウンディングを実施することができます。

          </p>
        </div>
        <img src="{{ asset('/img/img-info.jpg') }}" alt="地方写真">
      </div>
    </section>

    <section id="service" class="service-area">
      <div class="inner">
        <h2 class="h2-title">Service</h2>
        <h3>サービス</h3>
        <p class="txt-center">すべてのイベントでご利用いただけるサービスです。<br class="pc-only"></p>
      </div>
      <ul class="service-content">
        <li class="service-item">
          <h4>自由な金額設定が可能</h4>
          <p>１口当たりの金額設定はございません。皆様の投資へのお気持ちを率直に御反映ください。</p>
        </li>
        <li class="service-item">
          <h4>チャットサービス</h4>
          <p>ご興味のあるイベントがございましたら、各イベントの「チャット」ボタンよりメッセージを現地イベント担当者に送信できます。<br class="pc-only">応援メッセージを送信いただけると関係者がHAPPYになります。</p>
        </li>
        <!--
            <li class="service-item">
              <h4></h4>
              <p></p>
            </li>
            -->
      </ul>
    </section>
    <section id="plan" class="plan-area">
      <div class="inner">
        <h2 class="h2-title">Plan</h2>
        <h3>ご利用プラン</h3>
        <p class="txt-center">様々なイベントをご用意しております。</p>
        <ul class="plan-content">
      @foreach($submission as $submission)
          <li class="plan-item">
            <img src="{{ $submission->image_path }}" alt="Aプラン">
            <div class="plan-info">
              <h4 class="plan-title">{{ $submission->main_title }}</h4>
              <p>{{ $submission->money_goals }}円</p>
              <ul class="plan-list">
                <li>{{ $submission->title_1 }}</li>
                <li>{{ $submission->title_2 }}</li>
              </ul>
              <div class="btn-div">
                        <button type="button" class="detail-btn" onclick="location.href='/detail/{{ $submission->id }}'">支援</button>
                    </div>
            </div>
          </li>
      @endforeach
        </ul>
        <!--ボタン押したらログインフォームに飛ぶように-->
        @guest
        <button type="button" onclick="location.href='/login'" class="btn btn-reserve">ログインはこちら</button>
        @endif
      </div>
    </section>

  </main>
  <footer class="foot-area">
    <div class="inner">
      <p class="txt-center">日本の伝統文化を<br class="sp-only">存続しましょう。</p>
    </div>
  </footer>
</body>

</html>