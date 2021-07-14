<?php require_once '../inc/head.php'  ?>

<div class="bg-fun-green <?= (in_array($checkFileName, [ 'step1-vacancies.php', 'step2-vacancies.php','step3-vacancies.php','step4-vacancies.php','step5-vacancies.php','step6-vacancies.php', 'step7-vacancies.php'])) ? '' : 'd-none' ?>">
    <section class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-5 col-lg-3 text-lg-center">
                <a href="../index.php" >
                    <figure class="mx-0 my-3 py-1">
                        <img src="../img/logo.svg" class="rect-93-47 rect-lg-108-55">
                    </figure>
                </a>
            </div>
            <div class="col-5 col-lg-3 text-end my-4 pr-1">
                <a href="#" class="bg-fun-green2 underline-0 radius-6 d-inline-flex-xy w-100 h-48 mr-3">
                    <span class="icon icon-exit square-24"></span>
                    <span class="fs-15 lh-24 color-white ml-2">Çıxış</span>
                </a>
            </div>
        </div>
    </section>
</div>

<div class="bg-fun-green <?= (in_array($checkFileName, ['login.php','register.php'])) ? '' : 'd-none' ?>">
    <section class="container-fluid py-2 py-lg-3">
        <div class="row justify-content-between">
            <div class="col-7 d-inline-flex-y-center ">
                <a href="../index.php" class="mr-2 pr-1">
                    <figure>
                        <img src="../img/logo.svg" class="rect-9347 rect-lg-108-55">
                    </figure>
                </a>
                <span class="ml-4 d-none d-lg-inline-block">
                    <a href="index.php" class="color-white underline-0 text-capitalize fs-lg-15 lh-lg-24 mr-2">ana səhifə</a>
                    <a href="index.php" class="color-white underline-0 text-capitalize fs-lg-15 lh-lg-24 mr-2 ml-4">vakansiyalar</a>
                    <a href="index.php" class="color-white underline-0 fs-lg-15 lh-lg-24 ml-4">Yeni vakansiyalar</a>
                </span>
            </div>
            <div class="col-5 col-lg-5 d-inline-flex-y-center justify-content-end">
                <a href="#" class="underline-0 text-center d-lg-inline-flex-y-center mr-2">
                    <span class="icon icon-user square-24 invert-1"></span>
                    <span class="color-alabaster d-none d-lg-block fs-lg-15 lh-lg-24 ml-2">Şəxsi kabinet</span>
                    <span class="color-alabaster d-block d-lg-none fs-lg-15 lh-lg-24 ml-2">Daxil ol</span>
                </a>

                <span class="icon icon-menu js-menu filter-gallery square-32 ml-4 pl-1"></span>

                <a href="#" class="underline-0 d-none d-lg-inline-flex-y-center ml-4">
                    <span class="icon icon-flag square-24"></span>
                    <span class="color-white  fs-lg-13 lh-lg-24 mx-2">Azərbaycan dili</span>
                    <span class="icon icon-arrow-down square-24 invert-1"></span>
                </a>
            </div>
        </div>

    </section>
</div>