<?php require_once '../inc/head.php'  ?>

<div class="bg-fun-green <?= (in_array($checkFileName, [ 'step1-vacancies.php', 'step2-vacancies.php','step3-vacancies.php','step4-vacancies.php','step5-vacancies.php','step6-vacancies.php', 'step7-vacancies.php'])) ? '' : 'd-none' ?>">
    <section class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-5 col-lg-3 text-lg-center">
                <a href="index.php" >
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