<!DOCTYPE html>
<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="content-type" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Balloon Room</title>
</head>
<body>
    <header class="header-logo-menu">
      <div class="logo-area">
      <p>Balloon Room</p>
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
                    <a href="#contact">Contact<br>コンタクト</a>
                  </li>
                  <li class="gnav-item">
                    <a href="#login">Login<br>ログイン</a>
                  </li>
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
                <a href="#contact">Contact<br>コンタクト</a>
              </li>
              <li class="gnav-item">
                <a href="#login">Login<br>ログイン</a>
              </li>
            </ul>
          </nav>
    
        </div>
      </header>      
      <main>
        <section id="mv" class="mv-area">
          <h1 class="mv-title">各地のお祭りを支援できる<br class="sp-only">クラウドファウンディングサイト</h1>
          <button type="button" onclick="location.href='#'" class="btn btn-reserve">ログインはこちら</button>
          <!--ボタン押したらログインフォームに飛ぶように-->
        </section>
    
        <section id="info" class="info-area">
          <div class="inner info-content">
            <div class="info-txt">
              <h2>興味のあるお祭りを<br class="sp-only">支援することができます。</h2>
              <p>日本では少子高齢化・地方の人口過疎化等の社会問題から各地に存在している日本古来の伝統行事存続が困難になっております。本サイトでは日本古来の伝統行事を守るためのクラウドファウンディングを実施することができます。

              </p>
            </div>
            <img src="{{ asset('/img/img-info.jpg') }}"alt="地方写真">
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
              <li class="plan-item">
                <img src="//img/img-plan_01.jpg" alt="Aプラン">
                <div class="plan-info">
                  <h4 class="plan-title">Aプラン</h4>
                  <p>Aプランです。</p>
                  <ul class="plan-list">
                    <li>詳細1</li>
                    <li>詳細２</li>
                  </ul>
                  <p class="plan-price">支援</p>
                </div>
              </li>
              <li class="plan-item">
                <img src="//img/img-plan_02.jpg" alt="Bプラン">
                <div class="plan-info">
                  <h4 class="plan-title">Bプラン</h4>
                  <p>Bプランです。</p>
                  <ul class="plan-list">
                    <li>詳細1</li>
                    <li>詳細2</li>
                  </ul>
                  <p class="plan-price">支援</p>
                </div>
              </li>
              <li class="plan-item">
                <img src="//img/img-plan_03.jpg" alt="Cプラン">
                <div class="plan-info">
                  <h4 class="plan-title">Cプラン</h4>
                  <p>Cプランです。</p>
                  <ul class="plan-list">
                    <li>詳細1</li>
                    <li>詳細2</li>
                  </ul>
                  <p class="plan-price">支援</p>
                </div>
              </li>
    
            </ul>
            <button type="button" onclick="location.href='#'" class="btn btn-reserve">ログインはこちら</button>
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
