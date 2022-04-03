<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assests/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assests/css/mediaquiry.css" />
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
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
                    <a href="#" onclick="showloginModal()"> <img src="assests/img/logos/humen.svg " alt="Avatar ">ادخل لحسابك أو سجل الآن </a>
                </li>
                <li class="list ">
                    <a href="# " target="_self "> <img src="assests/img/logos/star.svg " alt="Avatar ">الرئيسية</a>
                </li>
                <li class="list ">
                    <a href="#About " target="_self "><img src="assests/img/logos/star.svg " alt="Avatar "> من نحن </a>
                </li>
                <li class="list ">
                    <a href="#call " target="_self "> <img src="assests/img/logos/call.svg " alt="Avatar ">اتصل بنا</a>
                </li>
                <li class="list dropdown ">
                    <a href="#help " target="_self "> <img src="assests/img/logos/help.svg " alt="Avatar ">المساعدة </a>
                </li>
                <li class="list ">
                    <a href="#security " target="_self "> <img src="assests/img/logos/security.svg " alt="Avatar ">سياسة الخصوصية </a>
                </li>
                <li class="list national-icon ">
                    <a href="#yemen " target="_self "><img src="assests/img/logos/ye.svg " alt="Avatar "> YER اليمن</a>
                </li>
                <li class=" list english "><a href="#translate " target="_self ">English   <img src="assests/img/logos/translate.svg " alt="Avatar "></a></li>
            </ul>


            <!-- end menu -->

    </nav>
    <!-- end nav -->
    <!-- start header -->
    <header>
        <section class="serch_heder">
            <a href="#"> <img src="assests/img/catigory/step3.png " alt="logo " /></a>
            <div class="search-container ">
                <form action="/action_page.php ">
                    <div class="input-icons ">
                        <i class="fa fa-search icon "></i>
                        <input class="input-field " type="search " placeholder="ابحث ">

                    </div>
                </form>
            </div>
            <div class="cart">
                <a href="pages/checkout.html" target=""> <i class=" fa fa-cart-plus " aria-hidden="true "></i>
                </a>
            </div>
            <div class="changeDir">
                <button type="button" onclick="document.getElementById('body').style.direction= 'ltr'">
                    left to right
                    </button>
                <button type="button" onclick="document.getElementById('body').style.direction = 'rtl'">
                    right to left
                    </button>
            </div>
        </section>
        <!-- start slider -->

        <!-- Slideshow container -->

        <section class="slideshow-container ">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade ">

                <img src="assests/img/catigory/category.png ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/juicy.jpg ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/A2Z.png ">

            </div>
            <div class="mySlides fade ">

                <img src="assests/img/catigory/category.png ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/juicy.jpg ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/step1.png ">

            </div>
            <div class="mySlides fade ">

                <img src="assests/img/catigory/category.png ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/juicy.jpg ">

            </div>

            <div class="mySlides fade ">

                <img src="assests/img/catigory/A2Z.png ">

            </div>
            <div class="mySlides fade ">

                <img src="assests/img/catigory/category.png ">

            </div>



            <!-- Next and previous buttons -->
            <a class="prev " onclick="plusSlides(-1) ">&#10095;</a>
            <a class="next " onclick="plusSlides(1) ">&#10094;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div class="doot">
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
    <!--start all books categoris  -->
    <section class="all_categories">

        <h2 class="type_name ">تصفح حسب القسم </h2>

        <div class="card_catigories ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/religion.png ">
                    <h3>دين</h3>
                </div>

            </a>
        </div>
        <div class="card_catigories ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/history.png">
                    <h3>تاريخ</h3>
                </div>

            </a>
        </div>
        <div class="card_catigories ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/policy.png ">
                    <h3>سياسة</h3>
                </div>

            </a>
        </div>
        <div class="card_catigories ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/economy.png">
                    <h3>اقتصاد</h3>
                </div>

            </a>
        </div>
        <div class="card_catigories ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/cooking-book.svg ">
                    <h3>طبخ</h3>
                </div>

            </a>
        </div>
        <div class="card_catigories  .displayNone ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/story.png ">
                    <h3>روايات </h3>
                </div>

            </a>
        </div>
        <div class="card_catigories  .displayNone ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/story.png ">
                    <h3>روايات </h3>
                </div>

            </a>
        </div>
        <div class="card_catigories  .displayNone ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/education.png ">
                    <h3>تربية </h3>
                </div>

            </a>
        </div>
        <div class="card_catigories  .displayNone ">
            <a href="pages/catigory.html">
                <div class="book_type ">
                    <img src="assests/img/logos/ar-book.svg ">
                    <h3>روايات </h3>
                </div>

            </a>
        </div>
    </section>
    <!-- end all books categoris  -->
    <!-- start ADS -->
    <!-- end ADS -->
    <!-- start copons cards -->
    <section class="coupons ">

        <h2 class="type_name ">العروض الحالية </h2>
        <div class="card_catigories ">
            <img src=" assests/img/catigory/ar-book4.jpg ">
            <div class="book_type ">
                <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
            </div>
            <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>

            <p class="price "> 29.99 ر.س</p>
            <div class="coupon_container ">

                <p class="expire ">متبقي للعرض
                    <br> <span class="days ">يوم </span> <span class="hours ">ساعات </span> <span class="minutes ">دقائق</span> <span class="second ">ثواني </span>
                </p>
            </div>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>
        </div>
        <div class="card_catigories ">
            <img src="assests/img/catigory/ar-book2.jpg ">
            <div class="book_type ">
                <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
            </div>
            <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>

            <p class="price "> 29.99 ر.س</p>

            <div class="coupon_container ">

                <p class="expire ">متبقي للعرض

                    <br>
                    <span class="days2 ">يوم </span> <span class="hours2 ">ساعات </span> <span class="minutes2 ">دقائق</span> <span class="second2 ">ثواني </span>
                </p>
            </div>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>
        </div>
        <div class="card_catigories ">
            <img src="assests/img/catigory/ar-book4.jpg ">
            <div class="book_type ">
                <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
            </div>
            <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>



            <p class="price "> 29.99 ر.س</p>

            <div class="coupon_container ">

                <p class="expire ">متبقي للعرض

                    <br>
                    <span class="days2 ">يوم </span> <span class="hours2 ">ساعات </span> <span class="minutes2 ">دقائق</span> <span class="second2 ">ثواني </span>
                </p>
            </div>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>
        </div>

        <div class="card_catigories ">
            <img src="assests/img/catigory/ar-book4.jpg ">
            <div class="book_type ">
                <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
            </div>
            <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>



            <p class="price "> 29.99 ر.س</p>

            <div class="coupon_container ">

                <p class="expire ">متبقي للعرض
                    <br> <span class="days ">يوم </span> <span class="hours ">ساعات </span> <span class="minutes ">دقائق</span> <span class="second ">ثواني </span>
                </p>
            </div>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>
        </div>
        <div class="card_catigories ">
            <img src="assests/img/catigory/ar-book4.jpg ">
            <div class="book_type ">
                <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
            </div>
            <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>



            <p class="price "> 29.99 ر.س</p>

            <div class="coupon_container ">

                <p class="expire ">متبقي للعرض
                    <br> <span class="days ">يوم </span> <span class="hours ">ساعات </span> <span class="minutes ">دقائق</span> <span class="second ">ثواني </span>
                </p>
            </div>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>
        </div>

    </section>
    <!-- end copons -->
    <!-- start catigories -->
    <section class=" catigories  ">
        <h2 class="type_name ">الكتب الدينية</h2>
        <br> <br>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name"> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <!--  -->
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
    </section>
    <!--  -->
    <section class=" catigories changeDirection ">
        <h2 class="type_name ">الكتب التاريخية</h2>
        <br> <br>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <!--  -->
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>

    </section>
    <!--  -->
    <section class=" catigories changeDirection ">
        <h2 class="type_name ">كتب سياسية</h2>
        <br> <br>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <!--  -->
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>


            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>

    </section>
    <section class=" catigories changeDirection ">
        <h2 class="type_name ">كتب اقتصاد</h2>
        <br> <br>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <!--  -->
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>

                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>

        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
    </section>
    <section class=" catigories ">
        <h2 class="type_name ">كتب طبخ</h2>
        <br> <br>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>

            </a>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>

            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart" src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg ">
            </div>

        </div>
        <!--  -->
        <div class="card_catigories ">
            <a href="pages/book_details.html ">

                <img src="assests/img/catigory/ar-book1 (1).jpg ">
                <div class="book_type ">
                    <h3>كتاب إلكتروني</h3> <img src="assests/img/logos/ar-book1.svg ">
                </div>
                <p class="book_name "> كتاب لأنك الله (كتاب إلكتروني)</p>


                <p class="price "> 29.99 ر.س</p>
            </a>
            <span class=" "></span>
            <div class="process ">
                <img src="assests/img/logos/return.svg ">
                <img class="addTOcart " src=" assests/img/logos/red-cart.svg ">
                <img src="assests/img/logos/star.svg "></div>

        </div>


    </section>

    <!-- end categories -->
    <!-- start footer  -->
    <section class="foot ">
        <div class="foo ">
            <div class="foo1 ">
                <h2>انظم الى نشرتنا البريدية</h2>
                <div class="send ">
                    <input type="email " name="email " placeholder="ادخل بريدك الإلكتروني ">
                    <svg class="email-icon " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24 " width="24 " height="24 ">
                                        <path fill="none " d="M0 0h24v24H0z " />
                                        <path
                                            d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zm-7 7.732V18h2v-2.268a2 2 0 1 0-2 0zM16 8V7a4 4 0 1 0-8 0v1h8z " />
                                    </svg>
                    <button type="submit " name="submit "> اشتراك</button>

                </div>
                <br><br>

            </div>
            <div class="foo1 ">
                <h2>خدمة العملاء</h2>
                <ul>
                    <li>مبيعات الشركة</li>
                    <li>الاسئلة المتكرر</li>
                    <li>دليل التسوق والمطبوعات</li>
                    <li>مواقع المعارض</li>
                    <li>سياسة الضمان</li>
                    <li> سياسة الإسترجاع والللإستبدال </li>
                    <li>تواصل بنا </li>>
                    <p>77777777777777</p>
                </ul>
            </div>

            <div class="foo1 ">
                <h2>خدمات جرير</h2>
                <ul>
                    <li>مبيعات الشركة</li>
                    <li>الاسئلة المتكرر</li>
                    <li>دليل التسوق والمطبوعات</li>
                    <li>مواقع المعارض</li>
                    <li>سياسة الضمان</li>
                    <li> سياسة الإسترجاع والللإستبدال </li>

                </ul>
            </div>
            <div class="foo1 ">

                <h2>روابط سريعة</h2>
                <ul>
                    <li>مبيعات الشركة</li>
                    <li>الاسئلة المتكرر</li>
                    <li>دليل التسوق والمطبوعات</li>
                    <li>مواقع المعارض</li>


                </ul>

            </div>
            <div class="foo1 ">

                <h2>عن جرير</h2>
                <ul>
                    <li>مبيعات الشركة</li>
                    <li>الاسئلة المتكرر</li>
                    <li>دليل التسوق والمطبوعات</li>
                    <li>مواقع المعارض</li>
                    <li>سياسة الضمان</li>
                    <li> سياسة الإسترجاع والللإستبدال </li>
                    <li>تواصل بنا </li>

                </ul>

            </div>
        </div>
        <div class="sociality ">
            <h2>تواصل معنا </h2>
            <div class="social "><img src="assests/img/logos/facbook.svg " alt="Avatar ">
                <img src="assests/img/logos/twiter.svg " alt="Avatar ">
                <img src="assests/img/logos/youtup.svg " alt="Avatar ">
                <img src="assests/img/logos/instagram.svg " alt="Avatar ">
                <img src="assests/img/logos/linkedIn.svg " alt="Avatar ">
                <img src="assests/img/logos/snapshat.svg " alt="Avatar ">
                <img src="assests/img/logos/tiktok.svg " alt="Avatar ">
            </div>
        </div>
    </section>
    <footer class="changeDirection ">
        <div class="copy-right ">
            <a href=" ">شروط الخدمة</a> <a href=" ">|  سياسة الخصوصية</a>
            <p>
                .جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264.
            </p>
        </div>
        <div class="visaCard ">
            <a>
                <img src="assests/img/logos/american-ex.svg " alt="Avatar "></a>
            <a>
                <img src="assests/img/logos/master.svg " alt="Avatar "></a>
            <a>
                <img src="assests/img/logos/visa.svg " alt="Avatar "></a>
            <a>
                <img src="assests/img/logos/mada.svg " alt="Avatar ">
            </a>
            <a>
                <img src="assests/img/logos/qitaf.svg " alt="Avatar ">
            </a>
            <a>
                <img src="assests/img/logos/payinShop.svg " alt="Avatar ">
            </a>


        </div>
    </footer>
    <!-- login &creatAcount models -->

    <section>
        <div class="login-modal-container" id="login-modal-container">

            <div class="login-modal-content">
                <button class="close-login-modal" onclick="hideloginModal()">x</button>
                <h3 class="login-caption">تسجيل الدخول</h3>
                <hr class="form-hr">
                <form id="login" action="#">
                    <div class="login-input-container">
                        <input class="login-email" type="email" placeholder="البريد الإلكتروني أو رقم الجوال">
                    </div>
                    <div class="login-input-container">
                        <input type="password" class="login-pass" placeholder="كلمة السر"><button class="forgot-pass">نسيت ؟</button>
                    </div>
                    <div class="login-input-container">
                        <button class="login-btn">تسجيل الدخول</button>
                    </div>
                    <div class="dont-have-account-container">
                        <span class="dont-have-account">ليس لديك حساب؟</span>
                        <button class="create-new-account" onclick="showSigninModal()">إنشاء حساب جديد</button>
                    </div>
                </form>


            </div>
        </div>

        <div class="signin-modal-container" id="signin-modal-container">
            <div class="signin-content-container">
                <button class="close-signin-modal" onclick="hidesigninModal()">x</button>
                <h3 class="register-caption">إنشاء حساب</h3>
                <hr class="form-hr">

                <div class="signin-form-container">
                    <form class="signin-form" id="signin-form">

                        <div class="signin-row-container">
                            <input type="number" class="signin-phonenumber" type="number" placeholder="رقم الجوال">
                            <select class="signin-countrycode">
                                        <option value="">
                                           
                                        رمز البلد

                                        </option>

                                        <option>
                                            +967
                                        </option>

                                    </select>
                        </div>

                        <span style="margin-right: 5px;">سوف نرسل لك <span style="font-weight: 600;">رمز التحقق عن طريق رسالة نصية</span></span>

                        <div class="signin-input-container" style="margin-top: 8px;">

                            <input id="#signin-register-code" type="number" placeholder="إرسال رمز التحقق" class="">
                            <br>

                            <input id="#signin-first-name" type="text" placeholder="الاسم الاول" class="">
                            <br>

                            <input id="#signin-last-name" type="text" placeholder="اسم العائلة" class="">
                            <br>

                            <input id="#signin-email" type="email" placeholder="البريد الإلكتروني" class="">
                            <br>

                            <input id="#signin-pass" type="password" placeholder="كلمة السر" class="">
                            <br>
                            <input id="#signin-retype-pass" type="password" placeholder="تأكيد كلمة السر" class="">

                        </div>

                        <label class="signin-checkbox-container">
                                            <span class="signin-agree">أوافق على  </span><a href="" style="text-decoration: none;font-size: 15px;">الشروط والأحكام</a>
                                            <input type="checkbox">
                                      
                                            <br>
                                            <span class="signin-checkmark"></span>
                                          </label>

                        <label class="signin-checkbox-container">
                                            <span class="signin-register-news">التسجيل للانظمام للنشرة البريدية</span>
                                            <input type="checkbox">
                                          
                                            <span class="signin-checkmark"></span>
                                          </label>



                        <button type="submit" class="signin-create-account">إنشاء حساب</button>
                        <div class="signin-have-account">
                            <span>لديك حساب؟</span><a href="#" onclick="showloginModalAgain()"> تسجيل الدخول </a>
                        </div>
                </div>
                </form>
            </div>
        </div>

        </div>

    </section>
</body>
<!-- js calling -->
<script src="assests/js/main.js "></script>



</html>