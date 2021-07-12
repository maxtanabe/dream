<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>
    DREAM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-wysiwyg.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magicsuggest-1.3.1.css') }}">
</head>
<body>
  <div class="container">
    <div class="wrapper">

      <!-- header start-->
      <header class="site-header"><div class="header-wrap">
        <h1 class="site-logo">
          <a href="/" title=""><img src="{{ asset('images/top.png') }}" alt=""></a>
        </h1>
        <div class="head-search group">
          <div class="input-append" style="float:left;">
            <form action="/" method="get" onsubmit="">
              <input style="height:28px;" class="span3" name="q" type="text" placeholder="キーワード検索" onfocus="" onblur="" value="">
              <button class="btn btn-glay" style="padding:8px;" type="submit"><i class="icon-search icon-white"></i></button>
            </form>
          </div>
          <div class="search-detail"><a class="btn btn-glay" href="/items/search_input">詳細検索</a></div>
        </div>
        <div class="user-info group">
          <div class="thumb"><a href="/"><img src="" style="width:38px;height:38px;"></a></div>
          <div class="data">
            <div class="user-name"><a class="blue" href="/" style="text-decoration:underline;">ニックネーム</a></div>
              <div class="option-menu">
                <a class="btn btn-mini" href="/users/premium">&nbsp;スライム&nbsp;</a>
                <a class="btn btn-glay btn-mini" href="#" data-toggle="dropdown">メニュー</a>
                <ul class="dropdown-menu">
                  <li><a href="https://pictbl-mf-gl.zendesk.com/hc/ja" target="_blank">質問・問い合わせ</a></li>
                  <li><a href="/static/help">遊び方ページ</a></li>
                  <li><a href="/users/logout">ログアウト</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <nav class="global-nav"><div class="global-nav-inner group">
        <ul class="nav-inner group" style="width:815px;">
          <li style="padding-right:15px;">&nbsp;<a href="/" title="ホーム">ホーム</a></li>
          <li style="padding-right:15px;">&nbsp;<a href="/items/add" title="投稿">投稿</a></li>
            <li style="padding-right:15px;">&nbsp;<a href="/bookmarks/index" title="ブクマ">ブックマーク</a></li>
            <li style="padding-right:15px;">&nbsp;<a href="/recv_messages/index" title="メッセージ">メッセージ</a></li>
        </ul>
        <div class="user-menu">
          <div class="settings">
            <a class="btn" href=""><span class="badge badge-important"></span>通知</a>&nbsp;
            <a class="btn" href="">設定</a></div>
          </div>
        </div>
      </nav>
        <!-- <header class="site-header"><div class="header-wrap">
        <h1 class="site-logo"><a href="/"  title=""><img src="" alt=""></a></h1>
        <p class="top-lead" style="margin-left:20px;">検索避けや鍵付き・除外タグなどの閲覧機能が充実した好きのための創作系ソーシャルネットワークサービス</p>
      </div></header>
      <nav class="global-nav"><div class="global-nav-inner group">
      <ul class="nav-inner top group">
          <li><a href="/static/about" title="">とは</a></li>
            <li><a href="/static/item" title="作品投稿に関するガイドライン">作品投稿に関するガイドライン</a></li>
            <li><a href="/informations/index" title="運営からのお知らせ">運営からのお知らせ</a></li>
            <li><a href="/users/premium" title="プレミアムサービスのご案内">プレミアムサービスのご案内</a></li>
            <li><a href="https://pictbl-mf-gl.zendesk.com/hc/ja" target="_blank" title="質問・問い合わせ">質問・問い合わせ</a></li>
          </ul>
        </div></nav> -->
      <!-- header end-->

      <!-- user start-->
      <div class="page-container group">
        <div class="left-column">
          <div class="user-data">
            <div class="thumb"><a href="/"><img src="" style="width:180px;height:180px;"></a></div>
            <div class="user-detail">
              <div class="user-name">ニックネーム<span class="label label-info">スライム</span></div>
              <div class="user-description-wrap"></div>
            </div>
            <div class="user-status group">
              <a href="/"><div class="status-info two-one">
            <div class="wrap"><p class="num"></p>
              <span class="small">投稿</span></div>
            </div></a>
            <a href="/"><div class="status-info two-one">
              <div class="wrap"><p class="num"></p>
              <span class="small">フォロー</span></div>
            </div></a>
          </div>
          <div class="text-center" style="margin-top:5px;">
            <span style="font-size:12px;"><i class="fa fa-check-circle"></i>&nbsp;あなたをフォローしています</span>
          </div>
          <div class="user-action">
            <a class="btn btn-block btn-info" href="/" title="プロフィール表示"><i class="icon-white  icon-info-sign"></i>&nbsp;プロフィール表示</a>
              <a class="btn btn-block btn-info" href="/" title="メッセージを送る"><i class="icon-white icon-envelope"></i>&nbsp;メッセージを送る</a>
              <a class="btn btn-block btn-info" href="/" title="フォローする"><i class="icon-white icon-user"></i>&nbsp;フォローする</a>
              <a href="" target="_blank" class="btn btn-success btn-block">活動サイト１</a>
              <!-- <div class="btn btn-block btn-success disabled">サイトなし</div> -->
              <a href="" target="_blank" class="btn btn-success btn-block">活動サイト２</a>
              <!-- <div class="btn btn-block btn-success disabled">サイトなし</div> -->
              <a href="" target="_blank" class="btn btn-success btn-block">活動サイト３</a>
              <!-- <div class="btn btn-block btn-success disabled">サイトなし</div> -->
          </div>
          <!-- 非ログイン状態で閲覧した場合 -->
          <!-- <div class="user-action">
            <a class="btn btn-block btn-info" href="/" title="プロフィール表示"><i class="icon-white  icon-info-sign"></i>&nbsp;プロフィール表示</a>
              <a class="btn btn-block btn-info" href="/" title="メッセージを送る">メッセージを送る</a>
            <a class="btn btn-block btn-info" href="/" title="フォローする">フォローする</a>
            <a class="btn btn-block" href="/" title="匿名でフォローする">匿名でフォローする</a>
          </div> -->
          <!-- 非ログイン状態で閲覧した場合 -->
        </div>
        <div class="sub-list">
          <h3>プロフィールタグ</h3>
          <div class="sub-list-content">
            <ul class="tag-list group">
              <li><a href="" title="">タグ</a></li>
            </ul>
          <!-- タグなし -->
            <!-- <div class="subtext" style="padding:10px;">
              まだプロフィールタグは設定されていません。<br />プロフィールタグを設定するとあなたのプロフィールタグを見た他のユーザーがあなたに興味を持ってくれるかもしれません！是非設定しましょう！
              <div style="text-align:center;"><a href="/users/tag_edit" class="btn btn-small">プロフィールタグ設定へ</a></div> -->
          <!-- タグなし -->
          </div>
        </div>
        <div class="sub-list">
          <h3>投稿</h3>
          <div class="sub-list-content">
            <dl class="fav-key group">
              <dd>
                <div class="subtext">&nbsp;<div class="badge"></div></div>
                <div><a href="/">テスト</a></div>
              </dd>
              <dd>
                <div class="subtext">&nbsp;<div class="badge"></div></div>
                <div><a href="/">テスト</a></div>
              </dd>
              <dd>
                <div class="subtext">&nbsp;<div class="badge"></div></div>
                <div><a href="/">テスト</a></div>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <!-- user end-->

      <!-- main start-->
      <div class="main-column">
        <div class="main-content">
          <nav class="userpage-tab">
            <ul class="group">
              <li class="active"><a href="/" title="/">ピックアップ</a></li>
              <li class=""><a href="/" title="/">新着</a></li>
              <li class=""><a href="/" title="/">タイムライン</a></li>
            </ul>
          </nav>
          <div class="main-content-detail">
            <form method="post">
              <div class="comment-input-wrap"style="margin-top:40px;padding-right:10px;padding-left:10px;">
                <select name="blog_id" class="input-block-level">
                  <option value="">関連タグ</option>
                </select>
                <textarea placeholder="タイトルを入力してください。" class="input-block-level margin-top" name="body" id="body_text" rows="3"></textarea>
                <textarea placeholder="内容を入力してください。" class="input-block-level margin-top" name="body" id="body_text" rows="3"></textarea>
                <div class="comment-menu">
                  <ul class="postitem-list group">
                    <li class="pull-right">
                      <div class="btn-group">
                        <a href="" class="btn btn-small">画像</a>
                      </div>
                      <button type="button" class="btn btn-inverse btn-small">投稿</button>
                    </li>
                  </ul>
                </div>
                <span class="help-block"></span>
                <input type="hidden" name="execute" value="on" />
                <input type="hidden" name="image_section" value="0" />
                <div class="hide well">
                  <p>作品IDを入力すると、作品を挿入することができます。</p>
                  <p><span class="label">作品ID</span></p>
                  <div><input type="text" placeholder="作品IDを指定" name="image_param_id" /></div>
                </div>
                <div class="hide margin-top well">
                  <p>画像を指定してください<br>画像は複数選択できます（一般会員：4枚まで　プレミアム会員：10枚まで）</p>
                  <input type="file" name="images[]" multiple enctype="multipart/form-data" />
                </div>
              </div>
            </form>
            <div class="stream-wrap">
              <div class="reload"><a>全??件</a></div>
              <div class="reload"><a href="javascript:void(0)" onclick="" title="再読み込み">再読み込み</a></div>
              <div class="post-data group">
                表示するデータはありません
              </div>
            </div>
          </div>
        </div>
        <!-- main-right start -->
        <div class="sub-content">
          <div class="sub-list">
            <div class="sub-list">
              <h3>トップランカー速報</h3>
              <div class="sub-list-content">
                <ul class="thread">
                  １位：まさお：ホーリーナイト<br>２位：じーく：マスターシーフ<br>３位：どん：キングスライム
                </ul>
              </div>
            </div>
            <h3>ギルドからのおしらせ</h3>
            <div class="sub-list-content">
              <dl class="news-topics">
                <div class="more-read">
                  テスト１<br>テスト２<br>テスト３
                </div>
              </div>
            </div>
            <div class="sub-list">
              <div class="sub-list-content text-center">
                <b>広告用のスペース</b><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/><p><p/>
              </div>
            </div>
          </div>
        </div>
        <!-- main-right end -->
      <!-- main end -->

      <!-- footer -->
      <p id="page-top"><a href="javascript:void(0);" onclick="javascript:$('body,html').animate({scrollTop: 0}, 500);">PAGE TOP</a></p>
      <div class="clearfix"></div>
      <footer class="site-footer" style="height:350px;">
        <div class="footer-content group">
          <div class="footer-item-detail">
            <h3>DREAMへようこそ！</h3>
            <p class="text">DREAMは○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○<br>そんな方にオススメするサービスです</p>
            <ul>
              <li><a href="/static/about" title="について">DREAMについてもっと知る</a></li>
            </ul>
          </div>
          <div class="footer-item-detail">
            <h3>DREAMについて</h3>
            <ul>
              <li><a href="" target="_blank" title="質問・問い合わせ">質問・問い合わせ</a></li>
              <li><a href="/functions/index" title="機能要望">機能要望</a></li>
              <li><a href="/static/rule" title="利用規約">利用規約</a></li>
              <li><a href="/static/item">投稿に関するガイドライン</a></li>
              <li><a href="/static/policy" title="プライバシーポリシー">プライバシーポリシー</a></li>
              <li><a href="/static/adocs" title="広告掲載について">広告掲載について</a></li>
              <li><a href="/static/company" title="運営会社">運営会社</a></li>
            </ul>
          </div>
          <div class="footer-item-detail" style="width:470px;">
            <h3>DREAM運営からのツイート</h3>
            <a class="twitter-timeline"  href="https://twitter.com/coxcoa2" data-widget-id="515442905738006528" data-chrome="noheader nofooter" height="220px">@ からのツイート</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
        <div class="ohter-service"></div>
      </footer>
      <!-- footer -->
    </div>
    <!-- wrapper end -->
  </div>
  <!-- container end -->
</body>
</html>
