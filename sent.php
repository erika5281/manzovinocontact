<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">MANZOVINO</div>
    <div class="header-right">
      <ul>
        <li>メニュー</li>
        <li>地図</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>
      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['e-mail']; ?>

      <div class="form-item">■ ご利用コース</div>
      <!-- ageを受け取りechoしましょう -->
      <?php echo $_POST['menu']; ?>
      <div class="form-item">■ ご予約人数</div>
      <?php echo $_POST['number']; ?>
      <div class="form-item">■ ご利用時間</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
      <?php echo$_POST['category'] ?>
      <div class="form-item">ご予約日</div>
      <?php echo$_POST['date'] ?>
      <div class="form-item">■ ご要望、質問（アレルギー、コースの飲み放題の有無、喫煙席希望など）</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="footer-right">
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
<div class="fb-like" data-href="https://www.facebook.com/&#x30de;&#x30f3;&#x30c4;&#x30a9;&#x30f4;&#x30a3;&#x30fc;&#x30ce;-Manzovino-127348104425090/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<a href= "https://www.instagram.com/manzovino_yakiniku_and_wine/" target="_blank"><img src=  "//badges.instagram.com/static/images/ig-badge-48.png" /></a>
</div>
  </div>
</body>
</html>
