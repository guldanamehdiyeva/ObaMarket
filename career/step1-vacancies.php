<?php require_once '../inc/header.php'  ?>


    

    <div class="h-100-vh">
        <section class="container-fluid h-100p">
            <div class="row justify-content-between h-100p">
                <div class="col-lg-4 col-xl-3 bg-whisper pos-relative d-none  d-lg-flex-x-center pt-4 pl-xl-5">
                    <span class="bg-athens pos-absolute w-6 h-616  radius-12 step-bar-pos"><span class="bg-fun-green radius-12 d-block w-6 h-88"></span></span>
                    <div class="d-inline-block mt-5 ml-xl-5 pl-xl-2 mb-5">
                        <span>
                            <span class="color-manatee fs-14 lh-24 d-block">ADDIM 1</span>
                            <span class="color-ebony-clay fs-18 lh-24">Şəxsi məlumatlar</span>
                        </span>
                        <span class="d-block mt-4 pt-3">
                            <span class="color-manatee fs-14 lh-24 d-block opacity-5">ADDIM 2</span>
                            <span class="color-ebony-clay fs-18 lh-24 opacity-5">Əlaqə məlumatları</span>
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
            
                <div class="col-lg-8 col-xl-9 ">
                    <div class="d-flex-y-center justify-content-between mt-3 mt-lg-5">
                        <h2 class="color-ebony-clay fs-24 lh-24 fs-lg-32 lh-lg-40 fw-400 ml-lg-4 my-0 pb-2">Şəxsi məlumatlar</h2>
                        <div id="progress-inputs" class="progress">
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
                    <form action="step2-vacancies.php" role="form" class="input-progress js-parsley-validate w-100p " data-parsley-trigger="change input">
                        <div class="row pl-lg-4">
                        
                            <div class="col-lg-4 ">
                                <label for="" class="color-manatee fs-13 lh-16 ">Ad
                                    <input type="text" required name="" id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 js-mask-letter" minlength="3">
                                </label>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <label for="" class="color-manatee fs-13 lh-16 ">Soyad
                                    <input type="text" required name="" id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 js-mask-letter"  minlength="3">
                                </label>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <label for="" class="color-manatee fs-13 lh-16 ">Ata adı
                                    <input type="text" required name="" id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 js-mask-letter" minlength="3">
                                </label>
                            </div>
                        
                        </div>
                        <div class="row pl-lg-4">
                            <div class="col-md-4"> 
                                <label for="" class="color-manatee fs-13 lh-16 step1 step d-block mt-4">Doğum tarixi
                                    <span class="d-flex justify-content-lg-between mt-2">
                                        <label class="pos-relative  mr-2 mr-lg-0 w-90 w-lg-56 w-xl-90 w-ext-130">
                                            <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                            <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                <option value="" class="d-none">Gün</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">05</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
                                                <option value="9">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="23">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </label>
                                        <label class="pos-relative mr-2 mr-lg-0  w-90 w-lg-56 w-xl-90 w-ext-130">
                                            <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                            <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                <option value="" class="d-none">Ay</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">05</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
                                                <option value="9">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </label>
                                        <label class="pos-relative w-90 w-lg-56 w-xl-90 w-ext-130">
                                            <span class="icon icon-arrow-down pos-absolute top-pos right-5p square-24 z-200"></span>
                                            <select class="selectric-custom border color-ebony-clay fs-14 fs-lg-16 lh-16" required>
                                                <option value="" class="d-none">İl</option>
                                                <option value="1">1981</option>
                                                <option value="2">1982</option>
                                                <option value="3">1983</option>
                                                <option value="4">1984</option>
                                                <option value="5">1985</option>
                                                <option value="6">1986</option>
                                                <option value="7">1987</option>
                                                <option value="8">1988</option>
                                                <option value="9">1989</option>
                                                <option value="10">1990</option>
                                                <option value="11">1991</option>
                                                <option value="12">1992</option>
                                                <option value="13">1993</option>
                                                <option value="14">1994</option>
                                                <option value="15">1995</option>
                                                <option value="16">1996</option>
                                                <option value="17">1997</option>
                                                <option value="18">1998</option>
                                                <option value="19">1999</option>
                                                <option value="20">2000</option>
                                                <option value="21">2001</option>
                                                <option value="22">2002</option>
                                                <option value="23">2003</option>
                                                <option value="23">2004</option>
                                                <option value="25">2005</option>
                                                <option value="26">2006</option>
                                                <option value="27">2007</option>
                                                <option value="28">2008</option>
                                                <option value="29">2009</option>
                                                <option value="30">2010</option>
                                                <option value="11">2011</option>
                                                <option value="12">2012</option>
                                                <option value="13">2013</option>
                                                <option value="14">2014</option>
                                                <option value="15">2015</option>
                                                <option value="16">2016</option>
                                                <option value="17">2017</option>
                                                <option value="18">2018</option>
                                                <option value="19">2019</option>
                                                <option value="20">2020</option>
                                                <option value="21">2021</option>
                                                
                                            </select>
                                        </label>
                                    </span>
                                </label>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="" class="color-manatee fs-13 lh-16 d-block mt-4">Cins
                                    <span class="d-flex justify-content-lg-between">
                                        <input type="radio" required name="chck"  id="check1"  class="d-none"  >
                                        <label for="check1" class="d-flex radio-btn radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2 mr-2 mr-lg-0 "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Kişi</span></label>
                                        <input type="radio" required name="chck" id="check2" class="d-none" >
                                        <label for="check2" class="d-flex radio-btn1 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2 "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Qadın</span></label>

                                    </span>
                                </label>
                            </div> 
                    
                            <div class="col-md-4">
                                <label for="" class="color-manatee fs-13 lh-16 d-block mt-4">Ailə vəziyyəti
                                    <span class="d-flex justify-content-lg-between">
                                
                                        <input type="radio" required name="chck2"  id="check3" class="d-none">
                                        <label for="check3" class="d-flex radio-btn3 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2 mr-2 mr-lg-0 "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Subay</span></label>
                                        <input type="radio" required name="chck2" id="check4" class="d-none">
                                        <label for="check4" class="d-flex radio-btn4 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2  "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Evli</span></label>
                                        
                                    </span>
                                </label>
                            </div> 
                           
                        </div>
                        <div class="row pl-lg-4">
                            <div class="col-md-4">
                                <label for="" class="color-manatee fs-13 lh-16 d-block mt-4">Hərbi mükəlləfiyyət
                                    <span class="d-flex justify-content-lg-between">
                                
                                        <input type="radio" required name="chck3"  id="check5"  class="d-none">
                                        <label for="check5" class="d-flex radio-btn5 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2 mr-2 mr-lg-0 "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Bəli</span></label>
                                        <input type="radio" required name="chck3" id="check6" class="d-none">
                                        <label for="check6" class="d-flex radio-btn6 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2  "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Xeyr</span></label>
                                        
                                    </span>
                                </label>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="" class="color-manatee fs-13 lh-16 d-block mt-4">Sürücülük vəsiqəsi
                                    <span class="d-flex justify-content-lg-between">
                                
                                        <input type="radio" required name="chck4"  id="check7"  class="d-none">
                                        <label for="check7" class="d-flex radio-btn7 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2 mr-2 mr-lg-0 "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Var</span></label>
                                        <input type="radio" required name="chck4" id="check8" class="d-none">
                                        <label for="check8" class="d-flex radio-btn8 radius-6 border border-E5E8ED py-3 w-143 w-xl-143 w-lg-90 w-ext-210 mt-2  "><span class="ml-4 ml-lg-1 ml-xl-4 color-ebony-clay fs-16 lh-16">Yoxdur</span></label>
                                        
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="color-manatee fs-13 lh-16 d-block mt-4">Vətəndaşlıq
                                    <input type="text" required name="" id="" class="outline-0 d-block radius-6 border border-E5E8ED h-48 w-100p mt-2 p-3 js-mask-letter"  minlength="3">
                                </label>
                            </div>
                        </div>
                        
                        <!--Picture adding-->
                        <div class="row border-bot border-D6DCE3 pb-5 pl-lg-4">
                            <div class="js-preview-template mt-3 d-none">
                                <div class="square-60 square-lg-80 d-flex-xy  bg-file-upload pos-relative dz-preview dz-file-preview mt-2  mr-3">
                                    <div class="dz-progress overlay d-flex-xy">
                                        <span class="dz-upload" data-dz-uploadprogress>Yüklənir...</span>
                                        <div class="dz-error-message d-none">Xəta baş verdi</div>
                                    </div>
                                    <figure class="dz-details m-0 w-100p h-100p hover-trash pointer pos-relative ">
                                        <span class="pos-absolute d-flex-xy hover-node radius-6 overlay w-100p h-100p bg-green opacity-0 dz-delete d-none">
                                            <span class="icon icon-trash-bin square-24"></span>
                                        </span>
                                        <img src="" data-dz-thumbnail class="d-none h-100p w-100p obj-cover radius-6" alt="" />
                                        
                                    </figure>
                                </div>
                            </div>

                            <div class="col-12 mb-lg-5 pb-5">
                                <span class="color-manatee fs-13 lh-16 d-block mt-4" >Şəkil</span>
                                <div class="w-100p d-flex-y-center flex-wrap">
                                   <label for='file' class="square-60 square-lg-80 pointer events-none border border-007332 radius-6 d-flex-xy bg-file-upload mt-2 mr-3 js-dropzone">
                                        
                                        <input type="file"  name="file" multiple class="d-none">
                                        <span class="icon icon-camera square-24 square-lg-40"></span>
                                    
                                    </label>
                                   
                                    <span class="mt-2 w-206">
                                        <span class="color-ebony-clay fs-lg-15 lh-lg-24 d-block">Şəkil yükləmək üçün klikləyin</span>
                                        <span class="color-manatee fs-lg-13 lh-lg-20 mt-1">JPG, PNG, Bitmak, 3 MB-dən çox olmayan</span>
                                    </span>
                                </div>
                                    
                                <div  class="js-preview dropzone-previews d-none"></div>
                                
                            </div>
                        </div>

       
                        
                        
                        <div class="row justify-content-end mb-4 mt-4">
                            <div class="mr-4 pr-3">
                                <button type="submit"  class="progress-submit opacity-5 pointer color-ebony-clay radius-40 border-0 fs-lg-16 lh-lg-24 outline-0 bg-bright-sun py-2 px-5">
                                    <span class="d-block my-2 mx-1">Növbəti addım</span>
                                </button>
                            </div>
                        </div>
                       
                        
                    </form>
                </div>
            </div>
        </section>
    </div>






          



<?php require_once '../inc/foot.php' ?>
