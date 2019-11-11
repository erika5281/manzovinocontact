<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MANZOVINO</title>
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
    <div class="contact-form">
      <div class="form-title">ご予約</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">
        <div class="form-item">メールアドレス</div>
        <input type="text" name="e-mail">
        <div class="form-item">ご利用コース</div>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="menu">
          <option value="未選択">選択して下さい</option>
          <option value="カルト">アラカルト</option>
          <option value="４８００">４８００円カジュアルコース</option>
          <option value="６３００">６３００円ベーシックコース</option>
          <option value="８０００">８０００円プレミアムコース</option>
          <option value="１００００">１００００円肉刺し入りコース</option>
        </select>
        <div class="form-item">ご予約人数</div>
       <select name="number">
         <option value="未選択">選択してください</option>
         <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
         <?php
           for($i= 2; $i <=24; $i++){
             echo  "<option value='{$i}'>{$i}</option>";

           }
         ?>
       </select>
       <div class="form-item">ご利用時間</div>
        <?php
          $types = array('17:30', '18:00', '18:30', '19:00', '19:30', '20:00','20:30', '21:00', '21:30');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="category">
          <option value="未選択">選択してください</option>
          <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>
        </select>

        <div class="form-item">ご予約日</div>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="date">
          <option value="未選択">選択して下さい</option>

<option value="2019-11-11">TEL 2019年11月11日(月)</option>
<option value="2019-11-12">○ 2019年11月12日(火)</option>
<option value="2019-11-13">○ 2019年11月13日(水)</option>
<option value="2019-11-14">○ 2019年11月14日(木)</option>
<option value="2019-11-15">○ 2019年11月15日(金)</option>
<option value="2019-11-16">○ 2019年11月16日(土)</option>
<option value="2019-11-18">○ 2019年11月18日(月)</option>
<option value="2019-11-19">○ 2019年11月19日(火)</option>
<option value="2019-11-20">○ 2019年11月20日(水)</option>
<option value="2019-11-21">○ 2019年11月21日(木)</option>
<option value="2019-11-22">○ 2019年11月22日(金)</option>
<option value="2019-11-23">○ 2019年11月23日(土)</option>
<option value="2019-11-25">○ 2019年11月25日(月)</option>
<option value="2019-11-26">○ 2019年11月26日(火)</option>
<option value="2019-11-27">○ 2019年11月27日(水)</option>
<option value="2019-11-28">○ 2019年11月28日(木)</option>
<option value="2019-11-29">○ 2019年11月29日(金)</option>
<option value="2019-11-30">○ 2019年11月30日(土)</option>
<option value="2019-12-02">○ 2019年12月02日(月)</option>
<option value="2019-12-03">○ 2019年12月03日(火)</option>
<option value="2019-12-04">○ 2019年12月04日(水)</option>
<option value="2019-12-05">○ 2019年12月05日(木)</option>
<option value="2019-12-06">○ 2019年12月06日(金)</option>
<option value="2019-12-07">○ 2019年12月07日(土)</option>
<option value="2019-12-09">○ 2019年12月09日(月)</option>
<option value="2019-12-10">○ 2019年12月10日(火)</option>
<option value="2019-12-11">○ 2019年12月11日(水)</option>
<option value="2019-12-12">○ 2019年12月12日(木)</option>
<option value="2019-12-13">○ 2019年12月13日(金)</option>
<option value="2019-12-14">○ 2019年12月14日(土)</option>
<option value="2019-12-16">○ 2019年12月16日(月)</option>
<option value="2019-12-17">○ 2019年12月17日(火)</option>
<option value="2019-12-18">○ 2019年12月18日(水)</option>
<option value="2019-12-19">○ 2019年12月19日(木)</option>
<option value="2019-12-20">○ 2019年12月20日(金)</option>
<option value="2019-12-21">○ 2019年12月21日(土)</option>
<option value="2019-12-23">○ 2019年12月23日(月)</option>
<option value="2019-12-24">○ 2019年12月24日(火)</option>
<option value="2019-12-25">○ 2019年12月25日(水)</option>
<option value="2019-12-26">○ 2019年12月26日(木)</option>
<option value="2019-12-27">○ 2019年12月27日(金)</option>
<option value="2019-12-28">○ 2019年12月28日(土)</option>
<option value="2019-12-30">○ 2019年12月30日(月)</option>
<option value="2019-12-31">○ 2019年12月31日(火)</option>
<option value="2020-01-01">○ 2020年01月01日(水)</option>
<option value="2020-01-02">○ 2020年01月02日(木)</option>
<option value="2020-01-03">○ 2020年01月03日(金)</option>
<option value="2020-01-04">○ 2020年01月04日(土)</option>
<option value="2020-01-06">○ 2020年01月06日(月)</option>
<option value="2019-01-07">○ 2019年01月07日(木)</option>
</select>

        <div class="form-item">ご要望、質問（アレルギー、コースの飲み放題の有無、喫煙席希望など）</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
      <div id="fb-root"></div>
  </div>
    <div class="footer-right">
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
<div class="fb-like" data-href="https://www.facebook.com/&#x30de;&#x30f3;&#x30c4;&#x30a9;&#x30f4;&#x30a3;&#x30fc;&#x30ce;-Manzovino-127348104425090/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<a href= "https://www.instagram.com/manzovino_yakiniku_and_wine/" target="_blank"><img src=  "//badges.instagram.com/static/images/ig-badge-48.png" /></a>
</div>
  </div>
</body>
</html>
