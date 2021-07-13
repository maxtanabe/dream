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
