<!doctype html>
<html lang="en">
 <head>
   <!-- START HEADER -->
   <?php include_once('inc/header.php'); ?>
   <!-- END HEADER -->
 </head>

 <body>
 <!-- START NAVBAR -->
   <?php include_once('inc/navbar.php'); ?>
 <!-- END NAVBAR -->

               <div class="wrapper fadeIn animated">
                  <!-- CONTENT -->
                  <div class="container">
                    <div class="row">
                      <!-- ข้อความแสดง -->
                      <div class="col-lg-12 col-12 mt-4">
                        <div class="home-font text-center">"บริการดี ตรงต่อเวลา ราคาประหยัด ซื่อสัตย์ต่อลูกค้า "</div>
                      </div>
                      <!-- จบข้อความแสดง -->
                      <div class="col-lg-12 col-12 my-4">
                        <div>
                          <p >เครื่องจักรสำหลับเช่า > รถกระบะแบบกรรไกร > Genie Gs-3246</p>
                        </div>
                      </div>
                      <!-- slide -->
                      <div class="col-xl-6 col-lg-6 col-12">

                            <div class="product-overlay-slide">
                                  <img class="mySlides w-100" src="assets/images/product/product-10.png">
                                  <img class="mySlides w-100" src="assets/images/product/product-11.png">
                                  <img class="mySlides w-100" src="assets/images/product/product-12.png">
                                  <img class="mySlides w-100" src="assets/images/product/product-13.png">
                                  <img class="mySlides w-100" src="assets/images/product/product-14.png">
                                  <img class="mySlides w-100" src="assets/images/product/product-15.png">
                            </div>

                            <div class="row mx-0 owl-carousel owl-theme slide-img">
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-10.png" class="product-image-coulasel demo" onclick="currentDiv(1)">
                                        </div>
                                    </div>
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-11.png" class="product-image-coulasel demo" onclick="currentDiv(2)">
                                        </div>
                                    </div>
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-12.png" class="product-image-coulasel demo" onclick="currentDiv(3)">
                                        </div>
                                    </div>
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-13.png" class="product-image-coulasel demo" onclick="currentDiv(4)">
                                        </div>
                                    </div>
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-14.png" class="product-image-coulasel demo" onclick="currentDiv(5)">
                                        </div>
                                    </div>
                                    <div class="item p-1">
                                        <div class="product-overlay-coulasel">
                                            <img src = "assets/images/product/product-15.png" class="product-image-coulasel demo" onclick="currentDiv(6)">
                                        </div>
                                    </div>
                            </div>
                      </div>

                      <!-- end slide -->
                      <div class="col-xl-6 col-lg-6 col-12">
                        <div>
                          <p class="text-detail">รถกระเช้าแบบกรรไกร</p>
                        </div>
                        <div>
                          <p>- รถกระเช้าแบบกรรไกรมีความมั่นคงสูง มีพื้นที่ในการทำงานกว้าง</p>
                        </div>
                        <div>
                          <p>- รับน้ำหนักได้ถึง 318 กิโลกรัม</p>
                        </div>
                        <div>
                          <p>- มีระบบควบคุมอัตโนมัติ ป้องกันอัตรายจากการชน</p>
                        </div>
                        <div>
                          <p>- ควบคุมด้วยกระแฟไฟฟ้า</p>
                        </div>
                        <div>
                          <p>- มั่นใจในคุณภาพด้วยการใช้ชิ้นส่วนจากผู้ผลิตชั้นนำจากทั่วโลก</p>
                        </div>
                        <div class="col-6">
                          <div class="pro-bg-1">
                            <p class="pro_text-1">Platform height<span class="pro-m-1">457m</span></p>
                          </div>
                          <div class="pro-bg-0">
                            <p class="pro_text-1">Platform Length<span class="pro-m-2">2.26m</span></p>
                          </div>
                          <div class="pro-bg-1">
                            <p class="pro_text-1">width<span class="pro-m-3">0.18m</span></p>
                          </div>
                          <div class="pro-bg-0">
                            <p class="pro_text-1">Lift capacity<span class="pro-m-4">363kg</span></p>
                          </div>
                          <div class="pro-bg-1">
                            <p class="pro_text-1">Power souece<span  class="pro-m-5">Betterries</span></p>
                          </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-lg-12">
                          <a class="btn btn-primary pro-btn-1" href="#" role="button"><i class="far fa-arrow-alt-circle-down mr-2"></i>Download <p class="mb-0">Spec Sheep</p></a>
                        </div>
                      </div>
                    </div>
                  </div>



















              <!-- CONTENT END-->
              </div>

<!-- START FOOTER -->
<?php include_once('inc/footer.php'); ?>
<!-- END FOOTER -->

<!-- START FOOTER SCRIPT -->
<?php include_once('inc/footer-script.php'); ?>
<!-- END FOOOTER SCRIPT -->


</body>
</html>


<script type="text/javascript">
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function currentDiv(n) {
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
           dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
</script>
