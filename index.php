<?php include 'connect.php'; session_start(); ob_start();

 

function insert($id,$username,$pass,$mail,$ad,$soyad)

                {

                               mysql_query("INSERT INTO users (id, uname, pass, email, ad, soyad) VALUES ('".$id."', '".$username."', '".$pass."', '".$mail."', '".$ad."', '".$soyad."')");

                }

 

$p = $_GET["p"];

$uname = $_SESSION["uname"];

if ($_GET["p"] == "login")

{

                $xxx = mysql_query("SELECT uname, pass FROM users WHERE uname='".$name."' AND pass='".$pass."'");

                if(mysql_num_rows($xxx) != 0)

                {

                               $_SESSION["uname"] = $_POST["uname"];

                               $k_adi = $_POST["uname"];

                }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Robert Şiir</title>

 

<script language="javascript">

function toggle() {

                var ele = document.getElementById("loginwindow");

                var text = document.getElementById("loginlink");

                if(ele.style.display == "block") {

                ele.style.display = "none";

                }

                else {

                               ele.style.display = "block";

                }

}

 

function toggle2() {

                var ele = document.getElementById("signupwindow");

                var text = document.getElementById("signuplink");

                if(ele.style.display == "block") {

                ele.style.display = "none";

                }

                else {

                               ele.style.display = "block";

                }

}

</script>

 

 

<style type="text/css">

<!--

@font-face {font-family:"title";src:url("../font.ttf") format("truetype");font-weight:normal;font-style:normal;}

@font-face {font-family:"Calibri";src:url("calibri.ttf") format("truetype");font-weight:normal;font-style:normal;}

 

body {

                font-family: Calibri;

                /*   100%/1.4 Verdana, Arial, Helvetica, sans-serif;  */

                background: #DDFFD9;

                /* #4E5869 */

                margin: 0;

                padding: 0;

                color: #000;

                /*

                background-image:url(bg.jpg);

                background-repeat: no-repeat;

    background-position: top left;

    background-attachment: fixed;

                background-size: 100%;

                */

}

 

/* ~~ Element/tag selectors ~~ */

ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */

                padding: 0;

                margin: 0;

}

h1, h2, h3, h4, h5, h6, p {

                margin-top: 0;   /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */

                padding-right: 15px;

                padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */

}

a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */

                border: none;

}

 

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */

a:link {

                color:#414958;

                text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */

}

a:visited {

                color: #4E5869;

                text-decoration: underline;

}

a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */

                text-decoration: none;

}

 

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */

.container {

                width: 80%;

                max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */

                min-width: 450px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */

                background:#DDFDFF;

                margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */

                position:relative;

                top:30px;

}

 

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */

.header {

                background:#FFC;

                /* #6F7D94 */

}

 

/* ~~ These are the columns for the layout. ~~

 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

 

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

 

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

 

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

 

*/

.sidebar1 {

                float: left;

                width: 25%;

                padding-bottom: 10px;

                background-color: #CCFFFF;

}

.content {

                padding: 10px 0;

                width: 75%;

                float: left;

               

}

 

/* ~~ This grouped selector gives the lists in the .content area space ~~ */

.content ul, .content ol {

                padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */

}

 

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */

ul.nav {

                list-style: none; /* this removes the list marker */

                border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */

                margin-bottom: 15px; /* this creates the space between the navigation on the content below */

}

ul.nav li {

                border-bottom: 1px solid #666; /* this creates the button separation */

}

ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */

                padding: 5px 5px 5px 15px;

                display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */

                text-decoration: none;

                background: #00FFFF;

                color: #000;

}

ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */

                background: #00FFCC;

                color: #000;

}

 

/*--------------------------Üst menüdekiler-----------------------------------------*/

 

ul.nav2 {

                list-style: none; /* this removes the list marker */

                border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */

                margin-bottom: 15px; /* this creates the space between the navigation on the content below */

}

ul.nav2 li {

                border-bottom: 1px solid #666; /* this creates the button separation */

}

ul.nav2 a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */

                padding: 5px 5px 5px 15px;

                display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */

                text-decoration: none;

                background: #FFCCCC;

                color: #000;

}

ul.nav2 a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */

                background: #EAFBC4;

                color: #000;

}

 

/* ~~ The footer ~~ */

.footer {

                padding: 10px 0;

                background: #FFC;

                position: relative;/* this gives IE6 hasLayout to properly clear */

                width:100%;

                clear: both; /* this clear property forces the .container to understand where the columns end and contain them */

}

 

/* ~~ miscellaneous float/clear classes ~~ */

.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */

                float: right;

                margin-left: 8px;

}

.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */

                float: left;

                margin-right: 8px;

}

.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */

                clear:both;

                height:0;

                font-size: 1px;

                line-height: 0px;

}

 

.baslik {

                font-size:72px;

                font-family: title;

                text-decoration: none

}

-->

</style><!--[if lte IE 7]>

<style>

.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */

ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */

</style>

<![endif]--></head>

 

<body>

<div class="container">

  <div class="header" style="position:relative;"><a href="/"><span class="baslik" onclick="#" style="color: #99CCCC; text-decoration:none;">RobertSiir.tk</span></a>

  <div id="loginwindow" style="float:right; position:absolute; right:180px; top:10px; border:solid thin #0099FF; background-color:#CCFFFF; text-align:center; padding: 3px 3px 3px 3px; width:200px; display: none;">

 

  

  <div style="position:absolute; top:5px; right:5px;"><a id="loginlink" href="javascript:toggle();"><strong><span style="color:red;">X</span></strong></a></div>

  <strong><span style="color:#339933;">Oturum Aç</span></strong><br /><br />

  <form action="/?p=login" method="post">

  Kullanıcı Adı<br /><input name="uname" type="text" size="20" /><br />

  Şifre<br /><input name="pass" type="password" size="20"/><br />

  <input name="send" type="submit" value="Giriş"/>

  </form>

  </div>

 

  

  <div id="signupwindow" style="float:right; position:absolute; right:-220px; top:10px; border:solid thin #0099FF; background-color:#CCFFFF; text-align:center; padding: 3px 3px 3px 3px; width:200px; display: none;">

  <div style="position:absolute; top:5px; right:5px;"><a id="signuplink" href="javascript:toggle2();"><strong><span style="color:red;">X</span></strong></a></div>

  <strong><span style="color:#9966FF;">Üye Ol</span></strong><br /><br />

  <form action="/?p=signup" method="post">

  Kullanıcı Adı<br /><input name="uname" type="text" size="20" /><br />

  Şifre<br /><input name="pass" type="password" size="20"/><br />

  Şifre (Tekrar)<br /><input name="pass2" type="password" size="20"/><br />

  Ad<br /><input name="ad" type="text" size="20" /><br />

  Soyad<br /><input name="soyad" type="text" size="20" /><br />

  E-posta<br /><input name="email" type="text" size="20" /><br />

  <input name="send" type="submit" value="Üye Ol"/>

  </form>

  </div>

 

  <div style="float:right; position:absolute; right:10px; top:10px; border:solid thin #0099FF; background-color:#CCFFFF; text-align:center; padding: 3px 3px 3px 3px; width:150px;">

    <?php

                $uname = $_SESSION["uname"];

    if ($_SESSION["uname"] == '') {

                               echo 'Hoşgeldin, Ziyaretçi!<br /><br />';

                               echo '<a id="loginlink" href="javascript:toggle();" style="text-decoration:none;">Giriş Yap!</a> | <a id="signuplink" href="javascript:toggle2();" style="text-decoration:none;">Üye Ol!</a>';

                }

                elseif($k_adi != '')

                {

                               echo 'Hoşgeldin, '.$k_adi.'!<br /><br />';

                               echo '<a href="/?p=siirlerim" style="text-decoration:none;">Şiirlerim</a> | <a href="/?p=ekle" style="text-decoration:none;">Şiir Ekle!</a>';

                               echo '<br><a href="/?p=cikis" style="text-decoration:none;">Çıkış</a>';

                }

                else

                {

                               echo 'Hoşgeldin, '.$_SESSION["uname"].'!<br /><br />';

                               echo '<a href="/?p=siirlerim" style="text-decoration:none;">Şiirlerim</a> | <a href="/?p=ekle" style="text-decoration:none;">Şiir Ekle!</a>';

                               echo '<br><a href="/?p=cikis" style="text-decoration:none;">Çıkış</a>';

                }

                ?>

  </div>

    <div><table align="center" width="100%" style="text-align:center;"><tr>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="/">Tema1</a></li></ul></td>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="#">Tema2</a></li></ul></td>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="#">Tema3</a></li></ul></td>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="#">Tema4</a></li></ul></td>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="#">Tema5</a></li></ul></td>

    <td width="16.666666666666%"><ul class="nav2"><li><a href="#">Kendi Şiirini Gönder!</a></li></ul></td>

    </tr></table></div>

 

    <!-- end .header --></div>

    <?php

               

                if ($_GET["t"] != '' OR $_GET["s"] != '')

                //$_GET["p"] == 'siir' OR $_GET["p"] == 'tema' OR

                {

                               $result = mysql_query('SELECT id,isim FROM siir WHERE tema="'.$_GET["t"].'"');

                                               echo '

  <div class="sidebar1">

    <ul class="nav">

                ';

                               if(mysql_num_rows($result) != 0)

                               {

                                               while($row = mysql_fetch_array($result))

                                               {

                                                               echo '<li><a href="/?p=siir&s='.$row['id'].'&t='.$_GET["t"].'">'.$row['isim'].'</a></li>';

                                               }

                               }

                               else

                               {

                                               echo 'no data!';

                               }

 

                echo '<li><a href="#">Şiir Ekle!</a></li></ul>';

                echo '

    <p><strong>Nasıl Kullanılır?</strong> </p>

    <p>Önce en yukarıdaki menüden bir kategori seçin. Daha sonra yukarıdaki menüden bir şiir seçin. Sağda seçtiğiniz şiiri ve o şiirle ilgili bilgileri görebilirsiniz.</p>

    <!-- end .sidebar1 --></div>';

                }

                ?>

  <div class="content">

  <?php

  if ($_GET["p"] == "signup")

  {

                  $name = $_POST["uname"];

                  $pass = $_POST["pass"];

                  $pass2 = $_POST["pass2"];

                  $ad = $_POST["ad"];

                  $soyad = $_POST["soyad"];

                  $mail = $_POST["email"];

                 

                  $register = true;

                 

$result = mysql_query("SELECT * FROM users WHERE uname='".$name."'");

                 

                  if ($name == '' or $pass == '' or $pass2 == '' or $mail == '' or $ad == '' or $soyad == '')

{

                echo '<span style="color:red"><strong>Bütün alanları doldurmalısınız!</strong></span><br />';

                $register=false;

}

if (strlen($pass) <= 5)

{

                echo '<span style="color:red"><strong>Şifre en az 6 karakter içermelidir!</strong></span><br />';

                $register=false;

}

 

if ($pass != $pass2)

{

                echo '<span style="color:red"><strong>Şifreler eşleşmiyor!</strong></span><br />';

                $register=false;

}

if(mysql_num_rows($result) != 0)

{

                echo '<span style="color:red"><strong>Kullanıcı zaten mevcut!</strong></span><br />';

                $register=false;

}

if (!ereg('@', $mail))

{

                echo '<span style="color:red"><strong>E-mail adresi geçersiz.</strong></span><br />';

                $register=false;

}

if (strlen($name) < 5)

{

                echo '<span style="color:red"><strong>Kullanıcı adı 5 karakter içermelidir.</strong></span><br />';

                $register=false;

}

if (strlen($mail) < 7)

{

                echo '<span style="color:red"><strong>E-mail adresi geçersiz.</strong></span><br />';

                $register=false;

}

if ($register == true)

{

                $pass1 = md5($pass);

                $id = rand(10000, 99999);

                if (!insert($id, $name, $pass1, $mail, $ad, $soyad))

                {

                               echo '<p><center>Kayıt olduğunuz için teşekkürler! Şimdi giriş yapabilirsiniz.</center></p>';

                }

                else

                {

                               echo('Mysql hatası oluştu. Lütfen bu hata metnini Oktay ŞEN\'e yollayınız:<br><br>'.mysql_error());

                }

}

  }

  elseif($_GET["p"] == "login")

  {

                $name = $_POST["uname"];

                $pass = md5($_POST["pass"]);

                $xxx = mysql_query("SELECT uname, pass FROM users WHERE uname='".$name."' AND pass='".$pass."'");

                //if(mysql_num_rows($xxx) != 0)

                //if ($xxx == $pass)

                if(mysql_num_rows($xxx) != 0)

                {

                               $_SESSION["uname"] = $name;

                               echo '<p><center>Başarıyla giriş yaptınız! Şimdi şiirlerinizi düzenleyebilir veya yenisini ekleyebilirsiniz.</center></p>';

                }

                else

                {

                               echo '<p><center>Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyin.</center></p>';

                }

  }

  elseif($_GET["p"] == "siir" && $_GET["s"] !='')

  {

                  $sayfa = mysql_fetch_array(mysql_query('SELECT * FROM siir WHERE id="'.$_GET['s'].'"'));

                  echo "<h2><center>".$sayfa['isim']."</center></h2><br /><i><center>Gönderen: ".$sayfa['sahip']."</center></i><br /><center>".$sayfa['siir'].'</center><br /><span style="text-align:right;"><i>'.$sayfa["sair"]."</i></span><br /><br /><hr><br />".$sayfa['yorum']."";

  }

  elseif($_GET["p"] == 'cikis')

  {

                  session_destroy();

                  header("Location: /");

  }

  else

  {

                  echo "

    <h1>Robert Şiir'e hoşgeldiniz!</h1>

    <p>Bu site Robert Kolejdeki 2016 dönemi L9-5 sınıfının dünyaya hediyesidir!</p>

    <p>Sitemizde bulunan bütün şiirler ve yapılan yorumlar herkese açıktır. Eğer sitemizi çok beğendiyseniz üye olup kendiniz de şiir ekleyebilirsiniz.</p>

                <p>Önce yukarudaki menüden bir tema, sonra soldaki menüden bir şiir seçin.</p>

                ";

  }

                ?>

</div>

  <div class="footer">

      <p><center>

          Robert College&trade; 2012 - Tüm hakkı saklıdır.

      </center></p>

      <p><center>

      Yazan/Kodlayan/Tasarımını Yapan/Uğraşan : Oktay ŞEN

      </center></p>

    <!-- end .footer --></div>

  <!-- end .container --></div>

</body>

</html>

<?php ob_end_flush(); ?>