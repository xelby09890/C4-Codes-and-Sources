<?php 
    $banner = '';
    if ($page === 'index.php') {
        $banner = '';
    }else if ($page === 'about-us.php'){
        $banner = 'banner-none';
    }else if ($page === 'c4-faqs.php'){
        $banner = 'banner-2-2';
    }else if ($page === 'specialty-programs.php'){
        $banner = 'banner-4';
    }else if ($page === 'contact-us.php'){
        $banner = 'banner-5';
    }else{
        $banner = 'plain-vector';
    }
?>
<div id="banner" class="<?php echo $banner; ?> <?php if($active == 'index'){ echo 'ybo-full-size-banner'; }else{ echo ''; }?> banner elementToFadeInAndOut position-relative <?php if($active == 'index'){ echo 'ybo-full-size-banner'; }else{ echo ''; }?>">
    <!-- <div id="ybo-banner-icons">
        <img src="images/icon.png" class="img-fluid rounded" alt="">
    </div> -->
    <!-- <img id="banner-sub-image" class="img-fluid d-flex float-end" src="images/apple.png" alt="Flat-price cab transportation in Sherwood Park, Fort Saskatchewan"> -->

    <!-- <div class="container-fluid content ybo-mask-black"> -->
    <div class="container-fluid content d-flex align-items-center px-0 <?php if($active == 'index'){ echo 'ybo-full-size-banner'; }else{ echo ''; }?>">
        <a id="btn-prev-img" class="btn-prev-img">
            <i class="fa fa-angle-left fa-4x"></i>
            
        </a>
        <div class="row ybo-frame w-100">
            <div class="col banner-content d-flex align-items-center ">
                <div class="row mt-0">
                    <div class="col-12 mt-0 d-none">
                        <div class="row  text-center mx-auto" id="banner-ad">
                            <div class="col-12 pt-2">
                            <sub id="ybo-sub-title" class="h5"></sub>
                            <h1 id="ybo-head-sub" class="p-2 ybo-head-sub ybo-move-up text-light ">
                            </h1>
                            </div>


                            <!-- <img id="banner-sub-image" class="img-fluid" src="images/apple.png" alt="Flat-price cab transportation in Sherwood Park, Fort Saskatchewan"> -->
                        </div>
                    </div>
                    <div class="col-6 text-start mt-2 w-100">
                        <?php 
                            if ($page === 'index.php') {
                                $head_sub = 'Connect & Convert College Consulting';
                                $sub_title = 'Because your future<br>career matters';
                            }else if ($page === 'c4-faqs.php'){
                                $head_sub = 'Connect & Convert College Consulting';
                                $sub_title = 'FAQS';
                            }else if ($page === 'about-us.php'){
                                $head_sub = 'About Us';
                                $sub_title = 'Learn more about us';
                            }else if ($page === 'specialty-programs.php'){
                                $head_sub = 'Connect & Convert College Consulting';
                                $sub_title = 'Specialty Programs';
                            }else if ($page === 'contact-us.php'){
                                $head_sub = 'Contact Us'; 
                                // $head_sub = '<h1>Contact Us</h1>'; 
                                $sub_title = 'We are happy to serve you.';   
                                // $sub_title = '<p class="w-50">We are happy to serve you.</p>';  
                            }

                        ?>
                        <span id="ybo-head-sub" class="ybo-head-sub ybo-move-up rounded d-inline ">
                        <?php echo $head_sub; ?>
                        </span>
                        <br>
                        <span id="ybo-sub-title" class="h3">
                        <?php echo $sub_title; ?>
                        </span>
                        <div class="col-12 mt-5">
                            <a class="ybo-bg-frame-rounded-btn d-inline-block" href="about-us">
                                <button  class="btn" id="btn-dicsover">Discover More</button>                               
                            </a>
                        </div>
                        <?php 
                           if ($page === 'index.php') {
                        ?>
                        <!-- <h3 class="ybo-text-light-blue mt-3 ybo-text-shadow-black2">At 1Health we are Covid compliant we supply PPE to our patients and our staff.</h3> -->
                        <?php 
                            }
                        ?>                        
                    </div>
                </div>
                
                <!-- <img id="banner-sub-image" class="img-fluid" src="images/apple.png" alt="Flat-price cab transportation in Sherwood Park, Fort Saskatchewan"> -->

            </div>
        </div>
        <a id="btn-next-img" class="btn-next-img align-self-right">
            <i class="fa fa-angle-right fa-4x"></i>
        </a>
    </div>

</div>
