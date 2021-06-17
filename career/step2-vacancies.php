<?php require_once '../inc/header.php'  ?>


    

    <div class="h-100-vh">
        <section class="container-fluid h-100p">
            <div class="row justify-content-between h-100p">
                <div class="col-lg-4 col-xl-3 bg-whisper pos-relative d-none  d-lg-flex-x-center pt-4 pl-xl-5">
                    <span class="bg-athens pos-absolute w-6 h-616  radius-12 step-bar-pos"><span class="bg-bright-sun radius-12-12-0-0 d-block w-6 h-88"></span><span class="bg-fun-green radius-12 d-block w-6 h-88"></span></span>
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
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 3</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">Təhsil</span>
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
                        <form action="step3-vacancies.php" role="from" class="input-progress js-parsley-validate w-100p">
                            <div class="row m-0 border-bot border-D6DCE3">
                                <div class="col-md-6 col-lg-5 pr-md-5 border-0 border-md-right border-md-D6DCE3">
                                    <div class="d-flex justify-content-between">
                                        <div class=" pt-5">
                                            <h2 class="color-ebony-clay fs-24 lh-24 fs-lg-32 lh-lg-40 fw-400 ml-lg-4 mt-3 mb-0 mt-lg-0 pb-2">Əlaqə məlumatları</h2>
                                        </div>
                                        <div id="progress-inputs" class="progress mt-4 pt-2 text-right d-md-none">
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
                                    <label for="" class="color-manatee fs-13 lh-16 step step2 w-100p  d-block mt-4 ml-lg-4" data-row-container="tel">Telefon nömrəsi
                                        <span class="d-flex  mt-2 pos-relative" data-row-clone="tel">
                                            
                                            <label class="pos-relative mr-2 mr-lg-0  w-91 w-lg-56 w-xl-91 mr-1">
                                                <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                                <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                    <option value="" class="d-none">050</option>
                                                    <option value="1">051</option>
                                                    <option value="2">070</option>
                                                    <option value="3">077</option>
                                                    <option value="4">055</option>
                                                    
                                                </select>
                                            </label>
                                            <input type="tel" required  class="outline-0 d-block radius-6 border border-E5E8ED w-199 w-lg-70p w-xl-199 h-48 ml-2 p-3 ">
                                            
                                            <div class="d-none square-48 radius-6 bg-carnation input-delete pointer events-none pos-absolute right-0" data-row-delete="tel">
                                                <span class="icon icon-trash-bin square-24" ></span>
                                            </div>
                                        </span>
                                    </label>

                                    <div class="ml-lg-4 mt-3  w-i5-286 w-306 w-lg-100p w-xl-302">
                                        <div class="border border-007332 radius-6 d-flex-xy h-48  pointer events-none" data-row-add="tel">
                                            <span class="icon-plus icon square-20 "></span>
                                            <span class="color-fun-green fs-14 lh-20 ml-2">Yeni nömrə əlavə et</span>
                                        </div>
                                    </div>

                                    <label for="" class="color-manatee fs-13 lh-16 mt-4 ml-lg-4 d-block w-i5-286  w-306 w-lg-100p w-xl-302">Ev telefonu
                                        <input type="tel" required  id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 input" placeholder = "000 000 00 00">
                                    </label>

                                    <label for="" class="color-manatee fs-13 lh-16 mt-4 ml-lg-4 d-block w-i5-286  w-306 w-lg-100p w-xl-302">Təcili hallarda əlaqə saxlanılacaq şəxs
                                        <input type="tel" required  id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 input" placeholder = "Ad və Soyad">
                                    </label>

                                    <label for="" class="color-manatee fs-13 lh-16 step step2 w-100p d-block mt-4 ml-lg-4">Təcili hallarda əlaqə saxlanılacaq şəxsin nömrəsi
                                        <span class="d-flex  mt-2 pos-relative">
                                            
                                            <label class="pos-relative mr-2 mr-lg-0  w-91 w-lg-56 w-xl-91 mr-1">
                                                <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                                <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                    <option value="" class="d-none">050</option>
                                                    <option value="1">051</option>
                                                    <option value="2">070</option>
                                                    <option value="3">077</option>
                                                    <option value="4">055</option>
                                                    
                                                </select>
                                            </label>
                                            <input type="tel" required  class="outline-0 d-block radius-6 border border-E5E8ED w-199 w-lg-70p w-xl-199 h-48 ml-2 p-3 ">
                                            
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-6 col-lg-7 pl-md-5 mt-4 mt-md-0">
                                    <div id="progress-inputs" class="progress mt-4 pt-2 justify-content-end d-none d-md-flex">
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
                                    <label for="" class="color-manatee fs-13 lh-16 ml-lg-5 d-block w-i5-286  w-306 w-lg-220 w-xl-302">Linkedin url
                                        <input type="text" required  id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 input" placeholder = "www.linkedin.com/in/...">
                                    </label>
                                    <label for="" class="color-manatee fs-13 lh-16 burn d-block mt-4 ml-lg-5">Yaşadığınız şəhər / rayon
                                        <span class="d-flex  mt-2 pos-relative" >
                                            
                                            <label class="pos-relative mr-2 mr-lg-0 mr-1 step w-i5-286 w-306 w-lg-220 w-xl-302">
                                                <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                                <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                    <option value="" class="d-none">Baki</option>
                                                    <option value="1">Sumqayit</option>
                                                    <option value="2">Abseron</option>
                                                    <option value="3">Mingecevir</option>
                                                    <option value="4">Naxcivan</option>
                                                    
                                                </select>
                                            </label>
                                            
                                        </span>
                                    </label>
                                    <label for="" class="color-manatee fs-13 lh-16 burn d-block mt-4 ml-lg-5">Rayon
                                        <span class="d-flex  mt-2 pos-relative" >
                                            
                                            <label class="pos-relative mr-2 mr-lg-0 mr-1 step w-i5-286 w-306 w-lg-220 w-xl-302">
                                                <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                                <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                    <option value="" class="d-none">Xətai</option>
                                                    <option value="1">Suraxani</option>
                                                    <option value="2">Nerimanov</option>
                                                    <option value="3">Yasamal</option>
                                                    <option value="4">Sabuncu</option>
                                                    
                                                </select>
                                            </label>
                                            
                                        </span>
                                    </label>
                                    <label for="" class="color-manatee fs-13 lh-16 ml-lg-5 mt-4 d-block w-i5-286  w-306 w-lg-220 w-xl-302">Qeydiyyat ünvanı
                                        <input type="text" required  id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 input" placeholder = "Ünvan">
                                    </label>
                                    <div class="d-inline-flex-y-center w-i5-286  w-306 w-lg-220 w-xl-302 ml-lg-5 mt-3">

                                        <div class="checkbox-wrapper">
                                            <input type="checkbox"  id="check" class="d-none">
                                            <label for="check" class="checkmark  d-block square-20 border border-007332 pointer  radius-3 pos-relative"></label>
                                        </div>
                                    
                                        <span class="ml-2 color-ebony-clay  fs-13 lh-16">Qeydiyyat ünvanı faktiki ünvanla eynidir?</span>
                                    
                                    </div>
                                    <label for="" class="color-manatee fs-13 lh-16 ml-lg-5 mt-4 d-block w-i5-286  w-306 w-lg-220 w-xl-302 mb-5 pb-md-5">Faktiki ünvan
                                        <input type="text" required  id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 input" placeholder = "Ünvan">
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-end mx-0 mb-4 mt-4">
                                <div class="mr-4 pr-3">
                                    <button type="submit"  class="progress-submit opacity-5 pointer color-ebony-clay radius-40 border-0 fs-lg-16 lh-lg-24 outline-0 bg-bright-sun py-2 px-5">
                                        <span class="d-block my-2 mx-1">Növbəti addım</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </div>






          



<?php require_once '../inc/foot.php' ?>
