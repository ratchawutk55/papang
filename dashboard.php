<!DOCTYPE html>
<html>
<title>สั่งออเดอร์</title>
<link rel="shortcut icon" href="image/logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/cssfamily=Amatic.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Kanit"}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("image/well.jpg");
    min-height: 90%;
}
.w3-xxlarge {
    font-size: 15px!important;
}


</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="http://www.med.nu.ac.th/volunteernu/Qr-Order/dashboard.php" class="w3-bar-item w3-button">หน้าแรก</a>
    <!-- <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#googleMap" class="w3-bar-item w3-button">CONTACT</a> -->
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 6pm to 12am</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">ประชาชื่น ปชช.</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>ประชาชื่น ปชช.</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">สั่งอาหาร</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">เมนู</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
        <a href="javascript:void(0)" onclick="openMenu(event, 'promotion');" id="myLink">
        <div class="w3-col s6 tablink w3-padding-large w3-hover-red"><br>โปรโมชั่น</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'alcohol');" >
        <div class="w3-col s6 tablink w3-padding-large w3-hover-red"><br>เหล้าเบียร์</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'ice');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">น้ำแข็งโซดา</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red"><br>อาหาร</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'glass');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">แก้ว-ช้อน</div>
      </a>
  
    </div>

    <div id="alcohol" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-size: 19px;"><b>Blend 285 1L</b> <span class="w3-right w3-tag w3-dark-grey w3-round">650 บ.</span></h1>
      <!-- <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p> -->
      <br><hr>
   
      <h1 style="font-size: 19px;"><b>Blend 285 (S)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">490 บ.</span></h1>
      <!-- <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p> -->
      <hr>
      
      <h1 style="font-size: 19px;"><b>แสงโสม</b> <span class="w3-right w3-tag w3-dark-grey w3-round">590 บ.</span></h1>
      <!-- <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p> -->
      <hr>

      <h1 style="font-size: 19px;"><b>Smirnoff(ถัง)</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">790 บ.</span></h1>
      <p class="w3-text-grey">สตรอเบอรรี์  แอปเปิ้ล  ลิ้นจี่  บลูฮาวาย </p>
      <hr>

      <h1 style="font-size: 19px;"><b>Asahi</b> <span class="w3-right w3-tag w3-dark-grey w3-round">150 บ.</span></h1>
      <!-- <p class="w3-text-grey">สตรอเบอรรี์  แอปเปิ้ล  ลิ้นจี่  บลูฮาวาย </p> -->
      <hr>


      <h1 style="font-size: 19px;"><b>U Beer</b> <span class="w3-tag w3-grey w3-round" style="background-color: #84efae!important;">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">130 บ.</span></h1>
      <!-- <p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p> -->
      <hr>
      <h1 style="font-size: 19px;"><b>LEO</b> <span class="w3-right w3-tag w3-dark-grey w3-round">110 บ.</span></h1>
      <!-- <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p> -->
      <hr>
    </div>

    <div id="ice" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-size: 19px;"><b>น้ำแข็ง (S)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">70 บ.</span></h1>
      <!-- <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p> -->
      <hr>
   
      <h1 style="font-size: 19px;"><b>น้ำแข็ง (M)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">120 บ.</span></h1>
      <!-- <p class="w3-text-grey">Ravioli filled with cheese</p> -->
      <hr>
      
      <h1 style="font-size: 19px;"><b>น้ำแข็ง (L)</b> <span class="w3-tag w3-grey w3-round" style="background-color: #ffc107!important;">Popular</span><span class="w3-right w3-tag w3-dark-grey w3-round">170 บ.</span></h1>
      <!-- <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p> -->
      <hr>

      <h1 style="font-size: 19px;"><b>Soda</b> <span class="w3-right w3-tag w3-dark-grey w3-round">30 บ.</span></h1>
      <!-- <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p> -->
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-size: 19px;"><b>ผัดกระเพรา</b> <span class="w3-tag w3-grey w3-round" style="background-color: #ffc107!important;">Popular</span><span class="w3-right w3-tag w3-dark-grey w3-round">40/50 บ.</span></h1>
      <p class="w3-text-grey"><input type="checkbox" name="vehicle" value=""> หมู,      <input type="checkbox" name="vehicle" value="">  ไก่,     <input type="checkbox" name="vehicle" value=""> ปลาหมึก </p>
      <hr>

       <h1 style="font-size: 19px;"><b>ผัดคะน้า</b><span class="w3-right w3-tag w3-dark-grey w3-round">40/50 บ.</span></h1>
      <p class="w3-text-grey"><input type="checkbox" name="vehicle" value=""> หมู,      <input type="checkbox" name="vehicle" value="">  ไก่,     <input type="checkbox" name="vehicle" value=""> ปลาหมึก </p>
      <hr>

      <h1 style="font-size: 19px;"><b>ต้มยำกุ้ง</b><span class="w3-right w3-tag w3-dark-grey w3-round">90 บ.</span></h1>
      <p class="w3-text-grey"><input type="checkbox" name="vehicle" value="">  น้ำข้น,     <input type="checkbox" name="vehicle" value=""> น้ำใส่ </p>
      <hr>

      <h1 style="font-size: 19px;"><b>ไข่เจียวหมูสับ</b><span class="w3-right w3-tag w3-dark-grey w3-round">30 บ.</span></h1>
      <hr>
    </div>

    <div id="promotion" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-size: 19px;"><b>ลีโอ 3 ขวด</b> <span class="w3-right w3-tag w3-dark-grey w3-round">219 บ.</span></h1>
      <!-- <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p> -->
      <hr>
   
      <h1 style="font-size: 19px;"><b>ช้าง 3 ขวด (M)</b> <span class="w3-right w3-tag w3-dark-grey w3-round">199 บ.</span></h1>
      <!-- <p class="w3-text-grey">Ravioli filled with cheese</p> -->
      <hr>
      
      <!-- <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p> -->
    </div>

    <div id="glass" class="w3-container menu w3-padding-32 w3-white">
      <h1 style="font-size: 19px;"><b>แก้ว</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> จำนวน </span></h1>
      <!-- <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p> -->
      <hr>
   
      <h1 style="font-size: 19px;"><b>จาน (M)</b> <span class="w3-right w3-tag w3-dark-grey w3-round"> จำนวน </span></h1>
      <!-- <p class="w3-text-grey">Ravioli filled with cheese</p> -->
      <hr>
      
      <!-- <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p> -->
    </div>
    
    
    <br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
    <p>The Pizza Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><strong>The Chef?</strong> Mr. Italiano himself<img src="/w3images/chef.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
    <p>We are proud of our interiors.</p>
    <img src="/w3images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="w3-col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Contact (with google maps) -->
<div id="googleMap" class="w3-grayscale-max" style="width:100%;height:400px;"></div>

<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p>Find us at some address at some place or call us at 05050515-122330</p>
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
