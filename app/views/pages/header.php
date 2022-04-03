<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../assests/css/style.css" />


  <link rel="stylesheet" type="text/css" href="../assests/css/mediaquiry.css" />
  <!-- fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body id="body">

  <!-- nav -->
  <nav>
    <!-- start burger menu -->
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">

      </div>

    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    <!-- end burger menu -->

    <!-- start menu -->
    <div class="nav-links  changeDirection">
      <ul class="all_list">
        <!-- login model -->

        <li class=" list login">
          <a href="#" onclick="showloginModal()"> <img src="../assests/img/logos/humen.svg " alt="Avatar ">ادخل لحسابك أو سجل الآن </a>
        </li>
        <li class="list ">
          <a href="../index.html " target="_self "> <img src="../assests/img/logos/star.svg " alt="Avatar ">الرئيسية</a>
        </li>
        <li class="list ">
          <a href="#About " target="_self "><img src="../assests/img/logos/star.svg " alt="Avatar "> من نحن </a>
        </li>
        <li class="list ">
          <a href="#call " target="_self "> <img src="../assests/img/logos/call.svg " alt="Avatar ">اتصل بنا</a>
        </li>
        <li class="list dropdown ">
          <a href="#help " target="_self "> <img src="../assests/img/logos/help.svg " alt="Avatar ">المساعدة </a>
        </li>
        <li class="list ">
          <a href="#security " target="_self "> <img src="../assests/img/logos/security.svg " alt="Avatar ">سياسة الخصوصية </a>
        </li>
        <li class="list national-icon ">
          <a href="#yemen " target="_self "><img src="../assests/img/logos/ye.svg " alt="Avatar "> YER اليمن</a>
        </li>
        <li class=" list english "><a href="#translate " target="_self ">English <img src="../assests/img/logos/translate.svg " alt="Avatar "></a></li>
      </ul>


      <!-- end menu -->

  </nav>
  <!-- end nav -->
  <!-- start header -->
  <header>
    <section class="serch_heder">
      <a href="../index.html"> <img src=" ../assests/img/catigory/step3.png " alt="logo " /></a>
      <div class="search-container ">
        <form action="/action_page.php ">
          <div class="input-icons ">
            <i class="fa fa-search icon "></i>
            <input class="input-field " type="search " placeholder="ابحث ">

          </div>
        </form>
      </div>
      <div class="cart ">
        <a href="pages/checkout.html " target=" "> <i class=" fa fa-cart-plus " aria-hidden="true "></i>
        </a>
      </div>
      <div class="changeDir ">
        <button type="button " onclick="document.getElementById( 'body').style.direction='ltr' ">
          left to right
        </button>
        <button type="button " onclick="document.getElementById( 'body').style.direction='rtl' ">
          right to left
        </button>
      </div>
    </section>
    <!-- start slider -->

    <!-- Slideshow container -->

    <section class="slideshow-container ">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade ">

        <img src="../assests/img/catigory/category.png ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/juicy.jpg ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/A2Z.png ">

      </div>
      <div class="mySlides fade ">

        <img src="../assests/img/catigory/category.png ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/juicy.jpg ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/A2Z.png ">

      </div>
      <div class="mySlides fade ">

        <img src="../assests/img/catigory/category.png ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/juicy.jpg ">

      </div>

      <div class="mySlides fade ">

        <img src="../assests/img/catigory/A2Z.png ">

      </div>
      <div class="mySlides fade ">

        <img src="../assests/img/catigory/category.png ">

      </div>



      <!-- Next and previous buttons -->
      <a class="prev " onclick="plusSlides(-1) ">&#10095;</a>
      <a class="next " onclick="plusSlides(1) ">&#10094;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div class="doot ">
        <span class="dot " onclick="currentSlide(1) "></span>
        <span class="dot " onclick="currentSlide(2) "></span>
        <span class="dot " onclick="currentSlide(3) "></span>
        <span class="dot " onclick="currentSlide(4) "></span>
        <span class="dot " onclick="currentSlide(5) "></span>
        <span class="dot " onclick="currentSlide(6) "></span>
        <span class="dot " onclick="currentSlide(7) "></span>
        <span class="dot " onclick="currentSlide(8) "></span>
        <span class="dot " onclick="currentSlide(9) "></span>
        <span class="dot " onclick="currentSlide(10) "></span>
        <span class="dot " onclick="currentSlide(11) "></span>
        <span class="dot " onclick="currentSlide(12) "></span>
      </div>
    </section>
    <!-- end container slider -->
  </header>
  <!-- end header -->
  <script>
    var noti = document.querySelector('.cart');
    var select = document.querySelector('.catigories');
    var button = document.getElementsByClassName('addTOcart');
    for (but of button) {
      but.addEventListener('clicl', (e) => {
        var add = Number(noti.getAttribute('data-count') || 0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero ');
      })
    }
  </script>