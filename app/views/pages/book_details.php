<!-- header -->

<?php include("header.php"); ?>
<!-- / header -->

<!--start catigory page -->
<!--  breadcamb -->

<!-- تتبع مسار الروابط  -->
<ul class="breadcrumb">
    <li><a href="#">الرئسية</a></li>
    <li><a href="#">الكتب العربية</a></li>
    <li><a href="#"> كتب إلكترونية</a></li>

</ul>


<section class="book_details">

    <div class="card_catigories">

        <img src="../assests/img/logos/ar-book1.svg ">


        <div class="book_imgs">

            <div class="row">
                <div class="column">
                    <img src="../assests/img/catigory/A2Z.png" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../assests/img/catigory/ar-book2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../assests/img/catigory/ar-book3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../assests/img/catigory/ar-book4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                </div>
            </div>

            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img class="modal_img" src="../assests/img/catigory/A2Z.png">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 4</div>
                        <img class="modal_img" src="../assests/img/catigory/ar-book2.jpg">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 4</div>
                        <img class="modal_img" src="../assests/img/catigory/ar-book3.jpg">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 4</div>
                        <img class="modal_img" src="../assests/img/catigory/ar-book4.jpg">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10095;</a>

                    <a class="next" onclick="plusSlides(1)">&#10094;</a>


                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>



                    <img class="demo cursor" src="../assests/img/catigory/A2Z.png" onclick="currentSlide(1)" alt="Nature and sunrise">


                    <img class="demo cursor" src="../assests/img/catigory/ar-book2.jpg" onclick="currentSlide(2)" alt="Snow">


                    <img class="demo cursor" src="../assests/img/catigory/ar-book3.jpg" onclick="currentSlide(3)" alt="Mountains and fjords">


                    <img class="demo cursor" src="../assests/img/catigory/ar-book4.jpg" onclick="currentSlide(4)" alt="Northern Lights">

                </div>
            </div>

        </div>
    </div>
    <div class="details">
        <div class="detail">
            <p class=" book_name "> لأنك الله (كتاب إلكتروني)</p>
            <a>عرض المزيد <i class="fa fa-arrow-down " aria-hidden="true "></i></a>
            <p class="price_right "> 12.99 ر.س</p>
        </div>
        <div class="det_left ">
            <p class=""> وحدة البيع :Each</p>
            <div class="stars ">
                <p class="blue_rev"> (15 المراجعات ) </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>

            </div>
            <div class="inline ">
                <p class=" ">رقم الصنف
                    <span> JBB410156</span>
                </p>
                <p class=" ">رقم المنتج <span> 4</span></p>
            </div>
        </div>
        <div class="formula ">

            <form>
                <label> الصيغ المتوفرة </label>
                <div class="det_between ">

                    <input type="radio ">كتاب مطبوع
                    <p class="price_left "> 12.99 ر.س</p>
                </div>
                <div class="det_between ">
                    <input type="radio ">كتاب إلكتروني
                    <p class="price_left ">17.25 ر.س</p>
                </div>
            </form>
        </div>
    </div>

    <div class="bill_warp  ">
        <div class="">
            <div class="bill ">


                <div class=" note ">
                    <p>
                        <span>ملاحظة</span>هذا الكتاب رقمي وسيتم توصيله من خلال البريد الإلكتروني
                    </p>
                    <a href="# ">كيفية الحصول على المنتج</a>
                </div>
                <div class="counnter ">
                    <input type="number " min="0 " max="10 " value="1 ">
                    <!-- الشرط ان المدخل يكون رقم ظمن المحدد
                                 واذا دخل المستخدم عدد غير موجوديشر احمر ويمنع الكتابة
                                 ( advance html ,css &js تطبيق اخر درس في ) -->
                    <!--
                                or div with on click +&- for each one
                                <button class="plus " onclick=" ">+</button>
                            <button class="minus " onclick=" ">-</button> -->

                    <a href="checkout_stepper.html">
                        <div class="fenish ">
                            تحديث سلة التسوق
                        </div>
                    </a>
                </div>
                <div class="procedures ">
                    <div class="procedures_card ">
                        المقارنة
                        <img src="../assests/img/logos/return.svg ">
                    </div>
                    <div class="procedures_card ">
                        المشاركة
                        <img src="../assests/img/logos/ask.svg ">
                    </div>

                    <div class="procedures_card ">
                        المفضلة
                        <img src="../assests/img/logos/ask.svg ">
                    </div>
                </div>
            </div>
        </div>
        <div class=" bill ">
            <div class="bill_cart ">
                <div class="procedures ">
                    <div class="procedures_card ">
                        المقارنة
                        <img src="../assests/img/logos/return.svg ">
                    </div>
                    <div class="procedures_card ">
                        المشاركة
                        <img src="../assests/img/logos/ask.svg ">
                    </div>

                    <div class="procedures_card ">
                        المفضلة
                        <img src="../assests/img/logos/ask.svg ">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="disc">
    <p>كتاب يتحدث عن بعض اسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف ان يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم </p>
</div>
<section class="descriptions ">

    <h3>المواصفات </h3>
    <div class="desrcip ">

        <p class="desrcip_name ">رقم الصنف</p>
        <p class="desc ">JBB410156</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">رقم المنتج</p>
        <p class="desc ">4</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">المؤلف </p>
        <p class="desc ">علي جابر الفيفي</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">الناشر </p>
        <p class="desc ">دار الحضارة للنشر والتوزيع</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">تاريخ النشر </p>
        <p class="desc ">2016</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name "> صيغة الكتاب</p>
        <p class="desc ">Ebook</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">عدد الصفحات </p>
        <p class="desc ">182</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">وزن الشحن</p>
        <p class="desc ">0.0100</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">صيغة الملف</p>
        <p class="desc ">epub</p>
    </div>
    <div class="desrcip ">

        <p class="desrcip_name ">اللغة </p>
        <p class="desc ">عربي</p>
    </div>
    <p class="show_less "> عرض اقل</p>
</section>
<section class="cus_reviews ">
    <hr>
    <div class="cus-title ">
        <h3>مراجعات العملاء </h3>
        <button class="add-review ">اكتب مراجعتك +</button>
    </div>
    <div class="reviews ">

        <div class="gray ">
            <p class="review ">good</p>
            <p class="cus_name "> باسم امين</p>
            <p class="date ">2022/1/22</p>
        </div>
        <p class="evalution ">جيد جدا</p>

    </div>
    <div class="reviews ">

        <div class="gray ">
            <p class="review ">good</p>
            <p class="cus_name "> باسم امين</p>
            <p class="date ">2022/1/22</p>
        </div>
        <p class="evalution ">جيد جدا</p>

    </div>
    <div class="reviews ">

        <div class="gray ">
            <p class="review ">good</p>
            <p class="cus_name "> باسم امين</p>
            <p class="date ">2022/1/22</p>
        </div>
        <p class="evalution ">جيد جدا</p>

    </div>
    <div class="reviews ">

        <div class="gray ">
            <p class="review ">good</p>
            <p class="cus_name "> باسم امين</p>
            <p class="date cus_name ">2022/1/22</p>
        </div>
        <p class="evalution ">جيد جدا</p>

    </div>
    <p class="show_less "> عرض اقل</p>

</section>

<section class="catigories ">
    <hr> <br>
    <h2 class="type_name ">كتب مشابهة</h2>
    <br> <br>
    <div class="card_catigories ">
        <a href=" ">
            <img src="../assests/img/catigory/ar-book3.jpg ">
            <p class="book_name ">الله</p>
            <p class="price "> 29.99 ر.س</p>
        </a>
    </div>
    <div class="card_catigories ">
        <a href=" ">
            <img src="../assests/img/catigory/ar-book3.jpg ">


            <p class="book_name ">الله</p>
            <p class="price "> 29.99 ر.س</p>
        </a>
    </div>
    <div class="card_catigories ">
        <a href=" ">
            <img src="../assests/img/catigory/ar-book3.jpg ">


            <p class="book_name ">الله</p>
            <p class="price "> 29.99 ر.س</p>
        </a>
    </div>
    <div class="card_catigories ">
        <a href=" ">
            <img src="../assests/img/catigory/ar-book3.jpg ">


            <p class="book_name ">الله</p>
            <p class="price "> 29.99 ر.س</p>
        </a>
    </div>
    <div class="card_catigories ">
        <a href=" ">
            <img src="../assests/img/catigory/ar-book3.jpg ">


            <p class="book_name ">الله</p>
            <p class="price "> 29.99 ر.س</p>
        </a>
    </div>
</section>

<!-- footer -->

<?php include("footer.php"); ?>
<!-- / footer -->