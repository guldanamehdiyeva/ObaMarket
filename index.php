<?php require_once 'inc/head.php' ?>

<!--Advertising-->
<div class="img-advertising-bg bg-cornflower-blue w-100p bg-cover bg-center bg-xl-left advertising d-none d-lg-flex">
    <section class="container">
         <div class="row">
                <div class="col-lg-7">
                    <h2 class="color-white fs-lg-28 lh-lg-40 fw-600 my-5 py-1">Qeyri-qida və gigiyena vasitələrinə endirim!</h2>
                </div>
                <div class="col-lg-5 text-right pt-3">
                    <span class="bg-open-white pointer square-48 radius-50p d-inline-flex-xy  pos-absolute right-5 right-xl-0 delete">
                        <span class="icon icon-delete square-24 invert-1"></span>
                    </span>
                    
                </div>
         </div>
    </section>
</div>


<!--Desktop Header-->
<div class="d-none d-lg-flex">
    <section class="container">
        <div class="row  justify-content-between py-3">
            <div class="col-lg-7 d-inline-flex-y-center">
                 <ul class="d-inline-flex list-reset">
                    <?php
                        $strings = [
                            'haqqımızda' ,
                            'karyera' ,
                            'layihələrimiz',
                            'sual / cavab',
                            'mediada biz',
                            'reseptlər',
                            'bloq' 
                        ];
                    ?>

                    <?php foreach($strings as $string) : ?>
                        <li><a href="#" class="color-secondary-black fs-lg-13 lh-lg-20 underline-0 text-capitalize <?= ($string === 'haqqımızda') ? '' : 'ml-3 pl-1' ?>"><?= $string ?></a></li>
                    <?php endforeach ?>
                 </ul>
            </div>
            <div class="col-lg-5 d-none d-lg-flex-y-center justify-content-end">
                <div class="d-inline-flex-y-center mr-2 pointer">
                    <span class="icon icon-flag square-24"></span>
                    <span class="color-secondary-black fs-lg-13 lh-lg-24 ml-2">Azərbaycan dili</span>
                    <span class="icon icon-arrow-down square-24"></span>
                </div>

                <?php
                        $icons = [
                            'facebook' ,
                            'youtube' ,
                            'twitter',
                            'linkedin',
                            'instagram',
                            'tik-tok',
                            
                        ];
                ?>

                <?php foreach($icons as $icon) : ?>
                    <a href="#" class=" d-none d-xl-flex-xy square-32 radius-50p border border-E8E8E8 <?= ($icon === 'facebook') ? 'ml-4' : 'ml-2' ?> ">
                        <span class="icon icon-<?= $icon ?> filter-dusty-gray  <?= ($icon === 'linkedin') ? 'square-13' : 'square-16' ?>"></span>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>

<div class="d-none d-xl-flex bg-fun-green">
    <section class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex-y-center">
                        <a href="index.php" class="mr-2">
                            <figure class="mx-0 my-3 py-1">
                                    <img src="img/logo.svg" class="rect-108-55">
                            </figure>
                            
                        </a> 
                        <form action="" class="w-378 ml-4 py-1 pl-1 bg-fun-green2 radius-6">
                            <label class="w-100p  pos-relative ">
                                <input type="text" class="w-378 py-2 pl-3 bg-transparent border-0 outline-0" placeholder="Məhsul axtarırsınız ?" id="search">
                                <span class="ml-lg-4 pos-absolute top-0 right-12 square-24 opacity-4 search">
                                    <span class="icon icon-search invert-1 square-24"></span>
                                </span>
                                <button type="reset" class="mr-lg-4 pos-absolute top-0 right-0 border-0 outline-0 square-24 pointer bg-transparent opacity-0 hover" id="clear">
                                    <span class="icon icon-delete invert-1 opacity-4 square-24"></span>
                                </button>
                            </label>
                        </form>
                        

                        

                </div>

                <?php
                    $icons = [
                        'shop' => 'Ən yaxın OBA' ,
                        'bread'=> 'Məhsullar' ,
                        'discount' => 'Xüsusi təkliflər',
                        'phone' => 'Əlaqə',
                        'user' => 'Şəxsi kabinet'
                        
                    ];
                ?>

        
                <div class="col-lg-6 d-lg-flex-y-center justify-content-end">
                    <?php foreach($icons as $key => $icon) : ?>
                        <a href="#" class="text-center underline-0  <?= ($key === 'shop') ? '' : 'ml-4' ?> ">
                            <span class="icon icon-<?= $key ?> square-24 invert-1 d-inline-block "></span>
                            <span class="color-white fs-15 lh-24 d-block"><?= $icon ?></span>
                        </a>
                        <span class="border-right border-f9f9f96c  h-48  ml-4 <?= ($key === 'user') ? 'd-none' : 'd-inline-block' ?>"></span>
                    <?php endforeach ?>
                </div>
            </div>
    </section>
</div>


<!--Mobile Header-->
<div class="d-lg-none">
    <section class="container-fluid">
        <div class="row py-3">
            <div class="col-12">
                <ul class="d-inline-flex list-reset">
                    <?php
                        $strings = [
                            'haqqımızda' ,
                            'insan resursları' ,
                            'sual / cavab',
                            'bloq' 
                        ];
                    ?>

                    <?php foreach($strings as $string) : ?>
                        <li><a href="#" class="color-secondary-black fs-11 lh-20 underline-0 text-capitalize <?= ($string === 'haqqımızda') ? '' : 'ml-3 pl-1' ?>"><?= $string ?></a></li>
                    <?php endforeach ?>
                 </ul>
            </div>
        </div>
    </section>
</div>

<div class="d-xl-none bg-fun-green pos-relative">
    <section class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex-y-center">
                <a href="index.php" class="mr-2">
                    <figure class="mx-0 my-2 py-1">
                        <img src="img/logo.svg" class="rect-93-47">
                    </figure>
                                    
                </a> 
            </div>
            <div class="col-8 d-flex-y-center justify-content-end">
                <?php
                    $icons = [
                        'phone' => 'Əlaqə',
                        'user' => 'Kabinet'
                        
                    ];
                ?>

                
                
                <?php foreach($icons as $key => $icon) : ?>
                    <a href="#" class="text-center underline-0  <?= ($key === 'phone') ? '' : 'ml-4 pl-2' ?> ">
                        <span class="icon icon-<?= $key ?> square-24 invert-1 d-inline-block "></span>
                        <span class="color-white fs-13 lh-20 d-block"><?= $icon ?></span>
                    </a>
                    <span class="border-right border-f9f9f96c  h-32  ml-4  <?= ($key === 'user') ? 'd-none' : 'd-inline-block' ?>"></span>
                <?php endforeach ?>

                <span class="hamburger hamburger--squeeze events-none ml-4">
                    <span class="hamburger-box mt-1">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                
            </div>
        </div>

        
    </section>

    <div class="w-100p pos-fixed top-53 top-lg-240 z-200 hover-node h-100-vh bg-fun-green left-100p overflow-x-hidden js-menu-mobile">
        <section class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex-y-center justify-content-between">
                    <a href="index.php" class="mr-2">
                        <figure class="mx-0 my-2 py-1">
                            <img src="img/logo.svg" class="rect-93-47">
                        </figure>
                                            
                    </a>

                    <span class="hamburger hamburger--squeeze events-none">
                        <span class="hamburger-box mt-1">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                </div>


            </div>

            <div class="row justify-content-center ">
                <div class="col-12 mt-2">
                    <form action="" class="w-100p mt-2 mt-lg-4 py-1 pl-1 bg-fun-green2 radius-6  pos-relative ">
                        <label class="w-100p ">
                            <input type="text" class="w-378 py-2 pl-3 bg-transparent border-0 outline-0" placeholder="Məhsul axtarırsınız ?">
                            <span class="ml-lg-4 pos-absolute top-10 right-12 square-24 opacity-4">
                                <span class="icon icon-search invert-1 square-24"></span>
                            </span>
                            <button type="reset" class="mr-lg-4 pos-absolute top-10 right-12 border-0 outline-0 square-24 pointer bg-transparent opacity-0 hover">
                                <span class="icon icon-delete invert-1 opacity-4 square-24"></span>
                            </button>
                        </label>
                    </form>

                    <?php
                            $icons = [
                                'shop' => 'Ən yaxın OBA' ,
                                'bread'=> 'Məhsullar' ,
                                'discount' => 'Xüsusi təkliflər',
                                'phone' => 'Əlaqə',
                                'user' => 'Şəxsi kabinet'
                                
                            ];
                    ?>

                
                    
                    <?php foreach($icons as $key => $icon) : ?>
                        <a href="#" class="d-flex-y-center underline-0 mb-2 mb-lg-4  <?= ($key === 'shop') ? 'mt-lg-5 mt-3' : 'mt-2 mt-lg-4' ?> ">
                            <span class="icon icon-<?= $key ?> square-32 invert-1"></span>
                            <span class="color-white fs-18 lh-24 ml-2 pl-1"><?= $icon ?></span>
                        </a>
                        <span class="border-bot border-f9f9f96c w-100p  <?= ($key === 'user') ? 'd-none' : 'd-inline-block' ?>"></span>
                    <?php endforeach ?>
                    
                
                </div>

                <div class="col-12 pos-absolute bot-10p d-flex-x-center mt-4 pt-1">
                    <div class="d-inline-flex-y-center d-lg-none mr-2 pointer border border-f9f9f96c radius-100 py-2 px-3">
                            <span class="icon icon-flag square-24"></span>
                            <span class="color-white fs-lg-13 lh-lg-24 ml-2">Azərbaycan dili</span>
                            <span class="icon icon-arrow-down invert-1 square-24"></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<!--Slider1-->
<div>
   
    <div class="swiper-container slider1" id="js-swiper-basic">
        <div class="swiper-wrapper">
            <div class="swiper-slide img-main-banner bg-bottom w-100p bg-cover">
                    <section class="container">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-8 col-md-7 col-lg-5 mt-md-3 z-100">
                                <h2 class="color-ebony-clay fw-600 fs-16 lh-20 fs-md-40 lh-md-52 mt-4 mt-md-5 pt-2 pt-md-5 mb-0">Müştərilərimiz üçün ən keyfiyyətli məhsullar</h2>
                                <p class="color-secondary-black fs-10 lh-16 fs-md-16 lh-md-28 mt-2 pt-1 pt-md-0 mt-md-4 mb-0">OBA marketlər şəbəkəsində satılan məhsulların qiyməti ilə yanaşı, keyfiyyətinə də həssaslıqla yanaşırıq</p>
                                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node d-inline-block fs-11 lh-24 fs-md-16  underline-0 radius-40 py-1 py-md-3 px-4 px-md-5 mt-3 mt-md-5 mb-5">
                                    <span class="mx-md-3">Daha ətraflı</span>
                                </a>
                                </div>
                            </div>
                    </section>
            </div>

            <?php for($i = 0; $i < 4; $i++) : ?>
                <div class="swiper-slide bg-radial">
                    <span class="img-milk-bg bg-cover  pos-absolute w-100p h-100p d-none d-lg-flex"></span>
                    <span class="img-mobile-milk-bg bg-cover  pos-absolute w-100p h-100p  d-lg-none"></span>
                    <section class="container">
                        <div class="row ">
                            <div class="col-lg-1"></div>
                            <div class="col-7 col-lg-5 mt-md-3 z-100">
                                <h2 class="color-ebony-clay fw-600 fs-16 lh-20 fs-md-40 lh-md-52 mt-4 mt-md-5 pt-2 pt-md-5 mb-0">Bütün Süd və Süd məhsullarına endirim!</h2>
                                <p class="color-secondary-black fs-9 lh-16 fs-md-16 lh-md-28 mt-2 pt-1 pt-md-0 mt-md-4 mb-0">OBA marketlər şəbəkəsində satılan məhsulların qiyməti ilə yanaşı, keyfiyyətinə də həssaslıqla yanaşırıq</p>
                                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node d-inline-block fs-11 lh-24 fs-md-16  underline-0 radius-40 py-1 py-md-3 px-4 px-md-5 mt-3 mt-md-5 mb-5">
                                    <span class="mx-md-3">Daha ətraflı</span>
                                </a>
                            </div>
                            <div class="col-5 col-lg-6 ">
                                <figure class="img-malaco pos-absolute right-md-58p right-lg-25p mx-0 my-0 d-none d-md-flex">
                                    <img src="img/milk.png">
                                </figure>
                                <figure class="img-mobile-malaco pos-absolute right-10p mx-0 my-0 d-md-none">
                                    <img src="img/mobile-milk.png">
                                </figure>
                            </div>
                        </div>
                    </section>
                    
                </div>
            <?php endfor ?>
        </div>
    </div>    
                
            
    
    <!-- Add Pagination -->
        
    <section class="container pos-relative">
        <div class="pos-absolute z-100 bottom-300 d-none d-lg-flex">
            <div class="swiper-pagination-my"></div>
        </div>
    </section>
        

</div>



<!--Slider2-->
<div class="pos-relative">

     <!-- Add Pagination -->
    <section class="container">
        <div class="pos-absolute z-100 pagination-pos bottom-md-12p ">
            <div class="swiper-pagination-my2"></div>
        </div>
    </section>

    <div class="swiper-container slider2" id="js-swiper-basic2">
        <div class="swiper-wrapper">
              
            <?php for($i = 1; $i < 6; $i++) : ?>
                <div class="swiper-slide ">
                    <span class="img-discount-food bg-no-repeat bg-top bg-xl-right pos-absolute right-0 h-100p w-lg-470 w-xl-700 d-none d-lg-flex"></span>
                    <section class="container">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 mt-lg-5 pt-2">
                                <span class="bg-solitude color-dodger-blue radius-30 d-inline-block fs-11 lh-20 fs-lg-14 lh-lg-28 mt-4 mt-lg-5  py-2 px-3">Təkliflər bütün OBA Marketlər şəbəkəsində keçərlidir</span>
                                <span class="img-mobile-food bg-no-repeat h-200 d-flex mt-3 pt-1 mb-4 d-lg-none"></span>
                                <h2 class="color-ebony-clay fw-600 fs-20 lh-28 fs-lg-36 lh-lg-48 mt-0 mb-2 pb-1 pb-lg-0 my-lg-4">Həftəsonu endirimləri</h2>
                                <p class="color-ebony-clay fs-15 lh-24 fs-lg-24 lh-lg-40 mt-0 mb-2 pb-1 pb-lg-0 mb-lg-3 pr-3">8 yanvar - 10 yanvar tarixləri üçün keçərli olan endirimləri sizə təqdim edirik. </p>
                                <p class="color-secondary-black fs-13 lh-20 fs-lg-16 lh-lg-28 pr-md-4 pr-lg-0 mt-0 mb-4 mb-lg-4 pb-lg-2">OBA Marketlər şəbəkəsində hər həftənin son 3 günü yəni: Cümə, Şənbə və Bazar günləri "Həftəsonu Endirimləri"ndən yararlana bilərsiniz.</p>

                                <div class="countdown mb-4 mb-lg-5 pb-2"></div>
                            
                                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node d-inline-block fs-11 lh-24 fs-md-16  underline-0 radius-40 py-2 py-md-3 px-4 px-md-5">
                                    <span class="mx-2 mx-md-3 px-1 px-lg-0">Daha ətraflı</span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>

            <?php endfor ?>
             
        </div>
    </div>
        
     
    <!--Add next prev buttun-->
    <div class="pos-absolute swiper-button-pos z-100 d-none d-lg-flex">
        <div class="swiper-button-prev-my pointer outline-0 bg-manatee square-52 radius-50p d-inline-flex-xy mr-2">
            <div class="icon icon-right-arrow filter-right-arrow square-24"></div>
        </div>
                    
        <div class="swiper-button-next-my pointer outline-0 bg-fun-green3 square-52 radius-50p d-inline-flex-xy ">
            <div class="icon icon-left-arrow filter-left-arrow square-24"></div>
        </div>
    </div>
        
   
</div>



<!--App-->
<div class="bg-green-radial h-510 h-lg-708">
    
    <section class="container pos-relative h-100p">
        <span class="img-mobile-iphone left-pos bg-no-repeat bg-center h-100p w-298 pos-absolute d-lg-none"></span>
        <span class="img-iphone-bg bg-no-repeat h-100p pos-absolute w-100p h-100p left-13p left-xl-6p d-none d-lg-block"></span>
        <div class="row h-lg-100p justify-content-center align-items-lg-center justify-content-lg-between">
            <div class="col-10 col-lg-6 h-100p text-center d-lg-flex align-items-lg-end">
                <h2 class="color-white fw-600 fs-20 lh-28 mt-4 pt-2 mb-3 d-lg-none"><span class="color-bright-sun">OBA Market</span> mobil tətbiqini yüklə və faydalan!</h2>
                <figure class="mx-0 my-0 d-none d-lg-block">
                    <img src="img/iphone.png" class="object-fit-none h-626 h-xl-670 ">
                </figure>
            </div>
            <div class="col-lg-5 h-363 h-md-410 d-flex-x-center align-items-end d-lg-block">
                <div class="d-none d-lg-block">
                    <h2 class="color-white fw-600 fs-lg-36 lh-lg-48 mt-0 mb-4 pb-2"><span class="color-bright-sun">OBA Market</span> mobil tətbiqini yüklə və faydalan!</h2>
                    <p class="color-white fs-lg-16 lh-lg-28 mt-0 mb-4 pb-3">Leo quis tristique urna lorem in ultricies at cras. Elit, ut dui non nunc felis, sed euismod. At nulla dolor dolor venenatis sed molestie.</p>
                    <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node d-inline-block fs-11 lh-24 fs-md-16  underline-0 radius-40 py-3 px-4 mb-5">
                        <span class="mx-2 ">Daha ətraflı</span>
                    </a>
                </div>

                <div class="d-inline-flex-y-center mt-4 pt-2">
                    <a href="#" class="mr-4">
                        <figure class="mx-0 my-0">
                            <img src="img/playstore.svg" class="w-135 w-md-156">
                        </figure>
                    </a>
                    <a href="#">
                        <figure class="mx-0 my-0">
                            <img src="img/appstore.svg" class="w-135 w-md-156">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
</div>


<!--Brend-->
<div>
    <section class="container">
        <!--Slider3-->
        <div class="row my-4 pt-3 mb-lg-0">
            <div class="col-7 col-lg-10 d-flex-y-center">
                <h2 class="color-ebony-clay fw-600 fs-20 lh-28 fs-lg-36 lh-lg-48 my-0 mt-lg-5 mb-lg-4 pb-lg-3 ">Yalnız “OBA” da</h2>
            </div>
            <div class="col-5  text-end d-lg-none">
                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node fs-12 lh-24  underline-0 radius-40 py-2 px-3 d-inline-block">
                    <span>Hamısına bax</span>
                </a>
            </div>
        </div>
        <div class="row justify-content-between mb-4 pb-lg-2">
            <div class="col-lg-4">
                <span class="radius-6 border border-D6D8DC d-flex-y-center justify-content-between py-1 pointer pos-relative">
                    <span class="icon icon-filter pos-absolute left-5p square-24 z-200"></span>
                    
                        
                        <select class="selectric-custom color-ebony-clay fs-14 fs-lg-16 lh-24" required>
                            <option value="" class="d-none">Brendi seçin</option>
                            <option value="1">Tess</option>
                            <option value="2">Pinar</option>
                            <option value="3">Pringles</option>
                            <option value="4">Tide</option>
                            <option value="5">Colgate</option>
                        </select>
                   
                    <span class="icon icon-arrow-down pos-absolute right-5p square-24 z-200"></span>
                </span>
            </div>

            <div class="col-lg-5 d-flex justify-content-end">
                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node fs-11 lh-24 fs-md-16  underline-0 radius-40 py-3 px-4 mr-3 d-none d-lg-block">
                    <span class="mx-2 ">Hamısına bax</span>
                </a>

                <!--Add next prev buttun-->
                <div class="swiper-button-pos z-100 d-none d-lg-flex ml-1">
                    <div class="swiper-button-prev-my3 pointer outline-0 bg-manatee square-52 radius-50p d-inline-flex-xy mr-2">
                        <div class="icon icon-right-arrow filter-right-arrow square-24"></div>
                    </div>
                    
                    <div class="swiper-button-next-my3 pointer outline-0 bg-fun-green3 square-52 radius-50p d-inline-flex-xy ">
                        <div class="icon icon-left-arrow filter-left-arrow square-24"></div>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="row mb-5 ">
            <div class="col-lg-12 mb-2">
                <div class="swiper-container slider3" id="js-swiper-basic3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/tea.svg" class="h-lg-164 object-fit-lg-none rect-120-110 object-fit-cover">
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Tess</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Pleasure Atma çay</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">1 kq</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">8  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.30</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">9.30</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/labne.svg" class="h-lg-164 w-lg-100p object-fit-lg-none rect-120-110 object-fit-cover" >
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pınar</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Labne pendir</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">200 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.49</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.75</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center  mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/chips.svg" class="h-lg-164 object-fit-lg-none of-contain rect-120-110 ">
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pringles</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Çipsi çeşidləri </span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">165 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.70</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">4.15</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/tide.svg"  class="h-lg-164 object-fit-lg-none of-contain rect-120-110">
                                </figure>

                                <span class="d-inline-block mx-1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Tide</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Avtomat rəngli yuyucu toz</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">1 kq</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">9 <sup class="fw-600 fs-13 fs-lg-14 lh-18">.99</sup> <span class="fs-19 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">13.49</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/mayonnaise.svg" class="h-lg-164 object-fit-lg-none rect-120-110 of-contain" >
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Meçta Xozyayki</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Klassik mayonez</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">55% 200 ml</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">0<sup class="fw-600 fs-13 fs-lg-14 lh-18">.75</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">0.95</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/labne.svg" class="h-lg-164 w-lg-100p object-fit-lg-none rect-120-110 object-fit-cover" >
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pınar</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Labne pendir</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">200 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.49</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.75</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center  mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/chips.svg" class="h-lg-164 object-fit-lg-none of-contain rect-120-110 ">
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pringles</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Çipsi çeşidləri </span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">165 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.70</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">4.15</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/tide.svg"  class="h-lg-164 object-fit-lg-none of-contain rect-120-110">
                                </figure>

                                <span class="d-inline-block mx-1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Tide</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Avtomat rəngli yuyucu toz</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">1 kq</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">9 <sup class="fw-600 fs-13 fs-lg-14 lh-18">.99</sup> <span class="fs-19 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">13.49</del></sup> </span>
                                </span>
                            </a>
                        </div>
                    
                    </div>
                    <!-- Add Pagination -->
                    <div class="pos-absolute z-100  bottom-0 left-pos d-lg-none">
                        <div class="swiper-pagination-my3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Desktop food-->
        <div class="row mb-5 d-none d-xl-flex">
            <div class="col-lg-4 mb-4 pb-3">
                <a href="#" class="bg-purple-radial radius-6 underline-0 h-154 d-inline-flex-y-center">
                    <figure class="mx-0 my-0 h-100p">
                        <img src="img/candy.svg">
                    </figure>

                    <span class="color-white fw-600 fs-lg-24 lh-lg-32">Şirniyyat və konfetlər</span>
                </a>
            </div>
            <div class="col-lg-4 mb-4 pb-3">
                <a href="#" class="bg-emerald-radial radius-6 underline-0 h-154 d-inline-flex-y-center">
                    <figure class="mx-0 my-0 h-100p">
                        <img src="img/broccoli.svg">
                    </figure>

                    <span class="color-white fw-600 fs-lg-24 lh-lg-32">Meyvə və tərəzlər</span>
                </a>
            </div>
            <div class="col-lg-4 mb-4 pb-3">
                <a href="#" class="bg-red-radial radius-6 underline-0 h-154 d-flex-y-center">
                    <figure class="mx-0 my-0 h-100p">
                        <img src="img/cola.svg" class="h-100p w-230">
                    </figure>

                    <span class="color-white fw-600 fs-lg-24 lh-lg-32">İçkilər</span>
                </a>
            </div>
        </div>


        <!--Mobile food slider4-->
        <div class="row mb-5 d-xl-none">
            <div class="col-md-12">
                <div class="swiper-container slider4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="w-100p bg-purple-radial radius-6 underline-0 h-120 d-inline-flex-y-center">
                                <figure class="mx-0 my-0 h-100p">
                                    <img src="img/candy.svg" class="h-100p">
                                </figure>

                                <span class="color-white fw-600 fs-18 lh-24">Şirniyyat və konfetlər</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="w-100p bg-emerald-radial radius-6 underline-0 h-120 d-inline-flex-y-center">
                                <figure class="mx-0 my-0 h-100p">
                                    <img src="img/broccoli.svg" class="h-100p">
                                </figure>

                                <span class="color-white fw-600 fs-18 lh-24 pr-2 mr-1">Meyvə və tərəzlər</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="w-100p bg-red-radial radius-6 underline-0 h-120 d-flex-y-center">
                                <figure class="mx-0 my-0 h-100p">
                                    <img src="img/cola.svg" class="h-100p w-230">
                                </figure>

                                <span class="color-white fw-600 fs-18 lh-24">İçkilər</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!--Slider5-->
        <div class="row mb-4  mb-lg-0">
            <div class="col-7 col-lg-10 d-flex-y-center">
                <h2 class="color-ebony-clay fw-600 fs-20 lh-28 fs-lg-36 lh-lg-48 my-0 mt-lg-5 mb-lg-4 pb-lg-3 ">Məhsullar</h2>
            </div>
            <div class="col-5  text-end d-lg-none">
                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node fs-12 lh-24  underline-0 radius-40 py-2 px-3 d-inline-block">
                    <span>Hamısına bax</span>
                </a>
            </div>
        </div>

        <div class="row justify-content-between mb-4 pb-lg-2">
            <div class="col-lg-4">
                
                <span class="radius-6 border border-D6D8DC d-flex-y-center justify-content-between py-1 pointer pos-relative">
                    <span class="icon icon-filter pos-absolute left-5p square-24 z-200"></span>
                    
                        <select class="selectric-custom border-0 color-ebony-clay fs-14 fs-lg-16 lh-24 " required>
                            <option value="" class="d-none">Kateqoriya seçin</option>
                            <option value="1">Ət və ət məhsulları</option>
                            <option value="2">Meyvə və tərəvəz</option>
                            <option value="3">Süd və süd məhsulları</option>
                            <option value="4">Quru qida</option>
                            <option value="5">Şirniyyat və konfetlər</option>
                        </select>
                    
                    <span class="icon icon-arrow-down pos-absolute right-5p square-24 z-200"></span>
                </span>
                
            </div>

            <div class="col-lg-5 d-flex justify-content-end">
                <a href="#" class="bg-bright-sun color-ebony-clay hover-darkest hover-node fs-11 lh-24 fs-md-16  underline-0 radius-40 py-3 px-4 mr-3 d-none d-lg-block">
                    <span class="mx-2 ">Hamısına bax</span>
                </a>

                <!--Add next prev buttun-->
                <div class="swiper-button-pos z-100 d-none d-lg-flex ml-1">
                    <div class="swiper-button-prev-my5 pointer outline-0 bg-manatee square-52 radius-50p d-inline-flex-xy mr-2">
                        <div class="icon icon-right-arrow filter-right-arrow square-24"></div>
                    </div>
                    
                    <div class="swiper-button-next-my5 pointer outline-0 bg-fun-green3 square-52 radius-50p d-inline-flex-xy ">
                        <div class="icon icon-left-arrow filter-left-arrow square-24"></div>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="row mb-3 mb-lg-5 ">
            <div class="col-lg-12 mb-4 pb-3">
                <div class="swiper-container slider5" id="js-swiper-basic5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/colgate.svg" class="w-lg-175 h-lg-164 of-contain rect-120-110 ">
                                </figure>

                                <span class="d-inline-block ml-2 mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Colgate</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Diş məcunu</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">50 ml</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">0  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.89</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">1.15</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="box hover-node border border-D6D8DC radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/labne.svg" class="h-lg-164 w-lg-100p object-fit-lg-none rect-120-110 object-fit-cover" >
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pınar</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Labne pendir</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">200 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.49</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.75</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center  mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/danone.svg" class="w-lg-175 h-lg-164 of-contain rect-120-110 ">
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Danone rastişka</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Çiyələkli yoqurt</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">400 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">4 <sup class="fw-600 fs-13 fs-lg-14 lh-18">.34</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">4.92</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/beta.svg"  class="w-lg-175 h-lg-164 of-contain rect-120-110">
                                </figure>

                                <span class="d-inline-block mx-1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Beta Tea</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Qara çay</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">25 ədəd</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2<sup class="fw-600 fs-13 fs-lg-14 lh-18">.20</sup> <span class="fs-19 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.65</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/president.svg" class="h-lg-164 rect-120-110 of-contain" >
                                </figure>

                                <span class="d-inline-block ml-2  mx-lg--1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">President</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Kərə yağı</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">200 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">4<sup class="fw-600 fs-13 fs-lg-14 lh-18">.90</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">5.10</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="box hover-node border border-D6D8DC radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/labne.svg" class="h-lg-164 w-lg-100p object-fit-lg-none rect-120-110 object-fit-cover" >
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Pınar</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Labne pendir</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">200 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2  <sup class="fw-600 fs-13 fs-lg-14 lh-18">.49</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.75</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center  mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/danone.svg" class="w-lg-175 h-lg-164 of-contain rect-120-110 ">
                                </figure>

                                <span class="d-inline-block mx-lg-1 mb-3  mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Danone rastişka</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Çiyələkli yoqurt</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">400 qr</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">4 <sup class="fw-600 fs-13 fs-lg-14 lh-18">.34</sup> <span class="fs-18 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">4.92</del></sup> </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="border border-D6D8DC box hover-node radius-6 px-3 underline-0 d-flex d-lg-block pos-relative">
                                <span class="bg-violet color-white radius-3 pos-absolute top-6p d-lg-none fs-11 lh-16 px-1">Endirim</span>
                                <figure class="text-center mx-0 my-4 pt-lg-3 mb-lg-0">
                                    <img src="img/beta.svg"  class="w-lg-175 h-lg-164 of-contain rect-120-110">
                                </figure>

                                <span class="d-inline-block mx-1 mb-3 mb-lg-4 pb-1">
                                    <h2 class="color-ebony-clay fw-600 fs-14 lh-20 fs-lg-18 lh-lg-24 mt-3 pt-1  mt-lg-4 pt-lg-0 mb-1">Beta Tea</h2>
                                    <span class="color-secondary-black fs-13 lh-18 fs-lg-16 lh-lg-24 d-block mb-2">Qara çay</span>
                                    <span class="color-manatee fs-13 lh-20 fs-lg-16 lh-lg-24 d-block mb-4 pb-1 pb-lg-2">25 ədəd</span>
                                    <span class="color-ebony-clay fs-20 fs-lg-24 lh-24">2<sup class="fw-600 fs-13 fs-lg-14 lh-18">.20</sup> <span class="fs-19 lh-22 lh-lg-24 fs-lg-22">AZN</span> <sup><del class="color-alizarin fs-13 fs-lg-14 lh-18 mr-2">2.65</del></sup> </span>
                                </span>
                            </a>
                        </div>
                    
                    </div>
                    <!-- Add Pagination -->
                    <div class="pos-absolute z-100  bottom-0 left-pos d-lg-none">
                        <div class="swiper-pagination-my5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!--Desktop human resources, rent-->
<div class="d-none d-xl-flex">
    <section class="container">
        <div class="row mb-5 pb-5">
            <div class="col-xl-4">
                <div class="bg-orange hover-darkest hover-node radius-6 pointer  pos-relative  pl-4 pb-3">
                        <span class="img-vector pos-absolute right-0 w-100p h-100p bg-no-repeat bg-bottom"></span>
                        <span class="icon icon-play square-48 mt-4 pt-3 mb-4 ml-3"></span>
                        <h2 class="color-white fw-400 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-4">Mediada və biz</h2>

                        <a href="#" class="bg-white-01 radius-50p square-52 d-flex-xy mt-5 mb-4 ml-3">
                            <span class="icon icon-left-arrow invert-1 square-24"></span>
                        </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-carnation hover-darkest hover-node radius-6 pointer  pos-relative  pl-4 pb-3">
                        <span class="img-vector pos-absolute right-0 w-100p h-100p bg-no-repeat bg-bottom"></span>
                        <span class="icon icon-team square-48 mt-4 pt-3 mb-4 ml-3"></span>
                        <h2 class="color-white fw-400 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-4">İnsan resursları</h2>

                        <a href="#" class="bg-white-01 radius-50p square-52 d-flex-xy mt-5 mb-4 ml-3">
                            <span class="icon icon-left-arrow invert-1 square-24"></span>
                        </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-malibu hover-darkest hover-node radius-6  pos-relative pointer pl-4 pb-3" data-custom-open="modal-rent">
                    <span class="img-vector pos-absolute right-0 w-100p h-100p bg-no-repeat bg-bottom"></span>
                    <span class="icon icon-rent square-48 mt-4 pt-3 mb-4 ml-3"></span>
                    <h2 class="color-white fw-400 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-4">İcarəyə yeriniz var ?</h2>

                    <a href="#" class="bg-white-01 radius-50p square-52 d-flex-xy mt-5 mb-4 ml-3">
                        <span class="icon icon-left-arrow invert-1 square-24"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Mobile human resources, rent-->
<div class="d-xl-none">
    <section class="container">
        <div class="row mb-5 pb-3 pb-lg-5">
            <div class="col-12">
                <div class="swiper-container slider6 js-swiper" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-orange right-0 hover-node hover-darkest radius-6  pos-relative pl-3  pl-lg-4 pb-2 pb-lg-3">
                                <span class="img-vector right-0 pos-absolute w-100p h-100p bg-no-repeat bg-bottom"></span>
                                <span class="icon icon-play square-40 square-lg-48 mt-4 pt-2 pt-lg-3 mb-3 mb-lg-4 ml-3"></span>
                                <h2 class="color-white fw-400 fs-20 lh-28 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-1 mb-lg-4">Mediada və biz</h2>

                                <a href="#" class="bg-white-01 radius-50p square-40 square-lg-52 d-flex-xy mt-4 mt-lg-5 mb-4 ml-3">
                                    <span class="icon icon-left-arrow invert-1 square-18 square-lg-24"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-carnation hover-node hover-darkest radius-6  pos-relative pl-3  pl-lg-4 pb-2 pb-lg-3">
                                <span class="img-vector right-0 pos-absolute w-100p h-100p bg-no-repeat bg-bottom"></span>
                                <span class="icon icon-team square-40 square-lg-48 mt-4 pt-2 pt-lg-3 mb-3 mb-lg-4 ml-3"></span>
                                <h2 class="color-white fw-400 fs-20 lh-28 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-1 mb-lg-4">İnsan resursları</h2>

                                <a href="#" class="bg-white-01 radius-50p square-40 square-lg-52 d-flex-xy mt-4 mt-lg-5 mb-4 ml-3">
                                    <span class="icon icon-left-arrow invert-1 square-18 square-lg-24"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-malibu hover-node hover-darkest radius-6  pos-relative pl-3  pl-lg-4 pb-2 pb-lg-3" data-custom-open="modal-rent">
                                <span class="img-vector right-0 pos-absolute w-100p h-100p bg-no-repeat bg-bottom"></span>
                                <span class="icon icon-rent square-40 square-lg-48 mt-4 pt-2 pt-lg-3 mb-3 mb-lg-4 ml-3"></span>
                                <h2 class="color-white fw-400 fs-20 lh-28 fs-lg-32 lh-lg-40 mt-0 ml-3 mb-1 mb-lg-4">İcarəyə yeriniz var ?</h2>

                                <a href="#" class="bg-white-01 radius-50p square-40 square-lg-52 d-flex-xy mt-4 mt-lg-5 mb-4 ml-3">
                                    <span class="icon icon-left-arrow invert-1 square-18 square-lg-24"></span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
</div>


<!--Oba market-->
<div class="bg-fun-green pos-relative mb-5">
    <span class="img-yellow-vector pos-absolute bg-no-repeat w-1440 h-100p right-0 d-none d-lg-flex"></span>
    <section class="container">
        <div class="row ">
            <div class="col-lg-6 d-flex-y-center">
                <figure class="mx-0 my-0 d-flex">
                    <img src="img/logo.svg" class="w-154 w-lg-246">
                </figure>
                <figure class="ml-lg-5 pl-4 mx-0 my-0">
                    <img src="img/market.svg" class="w-112 w-lg-100p">
                </figure>
            </div>
            <div class="col-lg-6 d-none d-lg-flex-xy">
                <span class="color-white fw-600 fs-lg-24 lh-lg-24">08:00 - 22:00</span>
            </div>
        </div>
    </section>
</div>


<!--Footer-->
<div>
    <section class="container">
        <div class="row justify-content-between mb-lg-5 mb-4 pb-2">
            <div class="col-lg-7">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-4">
                        <div class="border-bot border-DDDDDD border-lg-none  pb-3 pb-lg-0">
                            <?php
                                $icons = [
                                    'shop' => 'Ən yaxın OBA',
                                    'bread' => 'Məhsullar',
                                    'discount' => 'Xüsusi təkliflər',
                                    'phone' => 'Əlaqə',
                                    'user' => 'Şəxsi kabinet',
                                ];
                            ?>

                            <?php foreach($icons as $key => $icon) : ?>
                                <a href="#" class="underline-0 d-inline-flex d-lg-flex-y-center mb-4 ml-lg-0 <?= ($key === 'shop') ? 'pt-1' : '' ?> <?= ($key === 'bread') ? 'ml-4' : '' ?> <?= ($key === 'phone') ? 'ml-4' : '' ?> <?= ($key === 'discount') ? 'ml-md-5' : '' ?>">
                                    <span class="icon icon-<?= $key ?> square-24"></span>
                                    <span class="color-ebony-clay fw-600 fs-16 fs-lg-18 lh-24 ml-3"><?= $icon ?></span>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <h2 class="color-ebony-clay fw-600 fs-lg-24 lh-lg-32 mt-0 mb-4">Məhsul kateqoriyaları</h2>
                        <?php
                            $strings = [
                                'Ət və ət məhsulları', 
                                'Meyvə və tərəvəz' ,
                                'Süd və süd məhsulları' ,
                                'Quru qida' ,
                                'Şirniyyat və konfetlər' ,
                                'Şirniyyat və konfetlər' ,
                                'Qeyri-qida və gigiyena vasitələri' 
                                
                            ];
                        ?>
                        <?php foreach($strings as $string) : ?>
                            <a href="#" class="color-manatee underline-0 fs-lg-16 lh-lg-24 d-flex mb-3"><?= $string ?></a>
                        <?php endforeach ?>
                    </div>

                    <div class="col-lg-2">
                        <div class="border-bot border-DDDDDD border-lg-none mt-4 pt-2 mt-lg-0 pt-lg-0 pb-3 pb-lg-0">
                            <h2 class="color-ebony-clay fw-600 fs-lg-24 lh-lg-32 mt-0 mb-4 d-none d-lg-block">Digər</h2>
                            <?php
                                $strings = [
                                    'Haqqımızda', 
                                    'Karyera' ,
                                    'Layihələrimiz' ,
                                    'Sual / Cavab' ,
                                    'Mediada biz' ,
                                    'Reseptlər' ,
                                    'Bloq' 
                                    
                                ];
                            ?>
                            <?php foreach($strings as $string) : ?>
                                <a href="#" class="underline-0 d-inline-flex d-lg-flex color-manatee fs-16 lh-24 d-flex mr-3 pr-2 mr-lg-0 pr-lg-0 mb-3 <?= ($string === 'Reseptlər') ? 'pr-md-0' : '' ?>"><?= $string ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="color-ebony-clay fw-600 fs-24 lh-32 mt-4 pt-2 pt-lg-0 mt-lg-0 mb-0 mb-lg-3">OBA Market mobil tətbiqini yüklə və faydalan!</h2>
                <span class="color-secondary-black fs-lg-14 lh-lg-24 d-none d-lg-block">Leo quis tristique urna lorem in ultricies at cras. Elit, ut dui non nunc felis, sed euismod. At nulla dolor dolor venenatis sed molestie.</span>
                
                <div class="d-flex mt-4 pt-3">
                    <a href="#">
                        <figure class="mx-0 my-0">
                            <img src="img/playstore.svg" class="w-143">
                        </figure>
                    </a>
                    
                    <a href="#" class="ml-3">
                        <figure class="mx-0 my-0">
                            <img src="img/appstore.svg" class="w-143">
                        </figure>
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="row justify-content-between  mb-4 pb-3 pb-lg-0 mb-lg-5">
             <div class="col-lg-6 d-none d-lg-block">
                <span class="color-secondary-black fs-lg-14 lh-lg-24 mr-3">Copyright © 2021. Bütün hüquqlar qorunur</span>
                <span class="color-black roboto fs-lg-14 lh-lg-24 d-inline-flex-y-center ml-xl5 pl-xl-4">Site by <span class="icon icon-jimanovstudio square-24 mx-2"></span>Jeykhun Imanov Studio</span>
             </div>
             <div class="col-md-6 col-xl-5 d-flex-y-center justify-content-lg-end mb-3 pb-1 mb-md-0 pb-md-0">
                <div class="d-none d-lg-inline-flex-y-center mr-2 pointer">
                    <span class="icon icon-flag square-24"></span>
                    <span class="color-secondary-black fs-lg-13 lh-lg-24 ml-2">Azərbaycan dili</span>
                    <span class="icon icon-arrow-down square-24"></span>
                </div>

                <?php
                    $icons = [
                        'facebook' ,
                        'youtube' ,
                        'twitter',
                        'linkedin',
                        'instagram',
                        'tik-tok',
                        
                    ];
                ?>

                <?php foreach($icons as $icon) : ?>
                    <a href="#" class=" d-flex-xy square-48 square-lg-32 radius-50p border border-E8E8E8 <?= ($icon === 'facebook') ? 'ml-lg-4' : 'ml-2' ?> ">
                        <span class="icon icon-<?= $icon ?> filter-dusty-gray square-24 <?= ($icon === 'linkedin') ? 'square-lg-13' : 'square-lg-16' ?>"></span>
                    </a>
                <?php endforeach ?>
             </div>
             <div class="col-md-6 d-lg-none">
                <span class="color-secondary-black fs-lg-14 lh-lg-24 d-block mr-3 mb-3 mb-lg-0">Copyright © 2021. Bütün hüquqlar qorunur</span>
                <span class="color-black roboto fs-lg-14 lh-lg-24 d-inline-flex-y-center ml-xl5 pl-xl-4">Site by <span class="icon icon-jimanovstudio square-24 mx-2"></span>Jeykhun Imanov Studio</span>
             </div>
        </div>
    </section>
</div>





<?php require_once 'inc/modal.php' ?>
<?php require_once 'inc/foot.php' ?>