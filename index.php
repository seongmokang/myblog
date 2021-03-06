<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/myblog/common/dbconfig.php");
    $db = mysqli_connect($db_host,$db_user,$db_passwd);
    if($db){
        echo 'success';
    }else{
        echo 'fail';
    }
    echo "end";
    $sql ="CREATE TABLE Persons(FirstName char(30), LastName char(30), Age INT)";
    if(mysqli_query($db,$sql)){
        echo 'success';
    }else{
        echo 'fail';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mo's blog</title>
  <link rel="icon" href="img/mainlogo.png" type="image/png"> <!--상위 태그에 "MO"이미지-->

  <link href="css/style.css" rel="stylesheet" type="text/css"> <!--내가 직접 설정한 CSS-->
  <link href="css/animations.css" rel="stylesheet" type="text/css"> <!-- animation 동작들이 모여있는 다운받은 CSS-->
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> <!--폰트 설정을 위한 URL-->
  <!--Javascript-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script> <!--jquery 기본 동작을 위한 Js URL-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="./js/vue.js"></script>
  <script type="text/javascript">
  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
  </script>
  <script type="text/x-template" id="grid-template">
    <table>
      <thead>
      <tr>
        <th v-for="key in columns"
            @click="sortBy(key)"
            :class="{ active: sortKey == key }">
          {{ key | capitalize }}
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
          </span>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="entry in filteredData">
        <td v-for="key in columns">
          {{entry[key]}}
        </td>
      </tr>
      </tbody>
    </table>
  </script>
</head>

<body>
<div id="demo">
    <form id="search">
        Search <input name="query" v-model="searchQuery">
    </form>
    <demo-grid
        :data="gridData"
        :columns="gridColumns"
        :filter-key="searchQuery">
    </demo-grid>
</div>
<!--Top_section // 타이틀과 메뉴-->
<header id="top_outer">
    <div class="top_content">
      <div class="logo"><a href="#"><img src="img/logo2.png" alt=""></a> <!-- 제일 맨 위 로고 누르면 새로고침-->
      </div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#home" class="nav-button">Home</a></li>
          <li><a href="#life" class="nav-button">Life</a></li>
          <li><a href="#photo" class="nav-button">Photo</a></li>
          <li><a href="#board" class="nav-button">Board</a></li>
          <li><a href="#contact" class="nav-button">Contact</a></li>
        </ul>
      </nav>
    </div>
</header>

<!--Home_section-->
<section id="home" class="slide" >
  <div class="container animatedParent">
    <div class="home_content animated flipInY">
      <h3>Hello!!!</h3>
      <h2>welcome to my blog</h2>
      <p>in my blog you can see me &amp; my life</p>
      <a title="facebook" href="https://www.facebook.com/KanG.0610" class="facebook">facebook</a>
      <a title="instagram" href="https://www.instagram.com/mo_0610" class="instagram">instagram</a> 
    </div>
  </div>
</section>

<!--Life_section-->
<section  id="life" clss="slide">
  <div class="container">
    <h2>Life</h2>
    <div class="life_content">
      <div class="life_block">
        <table>
          <tr>
            <td>
            <img class="image" src='img/univ.png' width=50%>
            </td>
            <td>
            <img src='img/hobby.png' width=50%>
            </td>
            <td>
            <img src='img/tour.png' width=50%>
            </td>
            <td>
            <img src='img/work.png' width=50%>
            </td>
            <td>
            <img src='img/dream.png' width=50%>
            </td>
          </tr>
          <tr>
            <td>
              <h3 class="title">University</h3>
              <a title="kmu page" href="http://eecs.kookmin.ac.kr/" target="_blank" >Kookmin Univ.</a>
              <p>Electronical Engieenering</p>
              <p>Bachelor degree</p>
            </td>
            <td>
              <h3>Hobby</h3>
              <a>Riding</a>
              <p>Marida Scultra 400</p>
              <p>한강 라이딩</p>
            </td>
            <td>
              <h3>Tour</h3>
              <p>North Amerca - Sanfransico</p>
              <p>Japan - Tokyo</p>
              <p>Turkey - Istanbul</p>
              <p>Greece - Athene</p>
            </td>
            <td>
              <h3>Work Experience</h3>
              <p>FeelingTV.inc - 16.07~16.08</p>
              <p>Rgpkroea.Ltd - 16.09~now</p>
            </td>
            <td>
              <h3>Dream</h3>
              <p>Developer</p>
              <p>World Travel</p>
              <p>Preasent Life</p>
            </td>
          </tr> 
        </table>
      </div>
    </div>
  </div>
</section>

<!--/photo --> 
<section id="photo" class="slide"> 
  <div class="container">
    <h2>Photo</h2>
    <div class="photo_content">
      <video height=300px controls loop>
        <source title="flymovie" src="img/IMG_6181.m4v" type="video/mp4">
      </video>
      <img class="item" title="brice cannon" src="img/IMG_6143.jpg" height=300px ></img>
      <img class="item" title="myimage"src="img/스캔 3.jpg" height=300px ></img>
      <img class="item" title="fjords"src="img/img_fjords.jpg" height=300px ></img>
      <img class="item" title="forest"src="img/img_forest.jpg" height=300px ></img>
      <img class="item" title="lights"src="img/img_lights.jpg" height=300px ></img>
      <img class="item" title="mountains"src="img/img_mountains.jpg" height=300px ></img>
    </div>
  </div>
</section>

<!--/Contact --> 
<section id="contact" class="slide"> 
  <div class="container">
    <h2>Contact</h2>
    <div class="contact_content">
      <div class="contact_block">
        <table width=80%>
          <tr>
            <td width=20%>
              <img class="flip" src="img/home.png" width=100px>
            </td>
            <td width=20%>
              <img class="flip2" src="img/phone.png" width=100px>
            </td>
            <td width=20%>
              <img class="flip3" src="img/mail.png" width=100px>
            </td>
          </tr>
          <tr>
            <td><p class="panel">HOME</p></td>
            <td><p class="panel2">PHONE</p></td>
            <td><p class="panel3">E-mail</p></td>
          </tr>
          <tr>
            <td><p class="panel1">Mapo, Seoul Korea</p></td>
            <td><p class="panel12">010-2905-7915</p></td>
            <td><p class="panel13">sungmo1992@naver.com</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="bottom">
  <span>Copyright © 2016 | edit by Seongmokang</span>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="Vue.js"></script>
<script type="text/javascript" src="js/css3-animate-it.js"></script> <!-- css3의 각종 애니메이션 동작을 위한 js파일-->

</body>
</html>
