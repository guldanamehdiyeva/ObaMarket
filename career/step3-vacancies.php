<?php require_once '../inc/header.php'  ?>

<div class="h-100-vh">
        <section class="container-fluid h-100p">
            <div class="row justify-content-between h-100p">
                <div class="col-lg-4 col-xl-3 bg-whisper pos-relative d-none  d-lg-flex-x-center pt-4 pl-xl-5">
                    <span class="bg-athens pos-absolute w-6 h-616  radius-12 step-bar-pos"><span class="bg-bright-sun radius-12-12-0-0 d-block w-6 h-176"></span><span class="bg-fun-green radius-12 d-block w-6 h-88"></span></span>
                    <div class="d-inline-block mt-5 ml-xl-5 pl-xl-2 mb-5">
                        <span>
                            <span class="color-manatee fs-14 lh-24 d-block">ADDIM 1</span>
                            <span class="color-ebony-clay fs-18 lh-24">Şəxsi məlumatlar</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block ">ADDIM 2</span>
                            <span class="color-ebony-clay fs-18 lh-24">Əlaqə məlumatları</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block">ADDIM 3</span>
                            <span class="color-ebony-clay fs-18 lh-24">Təhsil</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 4</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">İş təcrübəsi</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 5</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">Sahə</span>
                        </span>
                        <span class="d-block mt-4 pt-3"> 
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 6</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">Dil və kompyuter bilikləri</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 7</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">Sertifikat və CV</span>
                        </span>
                    </div>
                </div>
            
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        <form action="step4-vacancies.php" role="from" class="input-progress js-parsley-validate w-100p">
                            <div class="col-lg-12 border-bot border-D6DCE3 h-664">
                                <div class="d-flex justify-content-between">
                                    <div class="ml-3 pt-5">
                                        <h2 class="color-ebony-clay fs-24 lh-24 fs-lg-32 lh-lg-40 fw-400 ml-lg-4 mt-3 mb-0 mt-lg-0 pb-2">Təhsil</h2>
                                        <p class="color-ebony-clay fs-18  fs-md-20 lh-28 mt-4 mb-3 ml-lg-4">Hansı məktəbi və ya universiteti bitirmisiniz?</p>
                                    </div>
                                    <div id="progress-inputs" class="progress mt-4 pt-2">
                                        <div class="progress-bar progress-bar-success">
                                            <svg>
                                                <circle cx="36" cy="36" r="36"></circle>
                                                <circle class="two" cx="36" cy="36" r="36"></circle>
                                            </svg>
                                            <div class="number">
                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ml-lg-4">
                                    <div class="bg-alabaster radius-6 p-4 rect-270-188 rect-md-469-188 ml-3">
                                        <div class="d-flex mt-2 mx-2">
                                            <span class="color-ebony-clay fs-16 lh-20 fs-md-20 lh-md-28">Azərbaycan Memarlıq və İnşaat Universiteti</span>
                                            <span class="bg-alabas border border-D8DAE1 radius-6 rect-64-28 rect-md-50-40 d-flex-xy ml-4">
                                                <span class="icon icon-pen square-16"></span>
                                            </span>
                                            <span class="bg-alabas border border-D8DAE1 radius-6  rect-64-28 rect-md-50-40 d-flex-xy ml-2">
                                                <span class="icon icon-trash square-16"></span>
                                            </span>
                                        </div>

                                        <span class="color-manatee fs-16 lh-24 mt-3 ml-2 d-block">Bakalavr</span>
                                        <span class="color-ebony-clay fs-14 fs-md-18 lh-24 mt-1 ml-2 d-block">2015-2019</span>
                                    </div>

                                    <div class="border border-007332 radius-6 d-flex-xy ml-3 mt-3 w-270 w-md-469 h-48  pointer events-none" data-custom-open="modal-education">
                                        <span class="icon-plus icon square-20 "></span>
                                        <span class="color-fun-green fs-14 lh-20 ml-2">Təhsil müəssisəsini əlavə edin</span>
                                    </div>
                                   
                                
                                </div>
                            </div>
                            <div class="my-4 mr-4 pr-3 text-right">
                                <button type="submit"  class="progress-submit opacity-5 pointer color-ebony-clay radius-40 border-0 fs-lg-16 lh-lg-24 outline-0 bg-bright-sun py-2 px-5">
                                    <span class="d-block my-2 mx-1">Növbəti addım</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </div>



<?php require_once '../inc/modal.php' ?>
<?php require_once '../inc/foot.php' ?>
