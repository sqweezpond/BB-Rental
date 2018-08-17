    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vandor/OwlCarousel/dist/owl.carousel.min.js"></script>



<script type="text/javascript">

  $('.nav-btn-lang').on('click' , function(){

      $(".nav-btn-lang").each(function( index ) {
        $(this).removeClass('nav-btn-active');
      });

    $(this).addClass('nav-btn-active');
  });

  $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })
</script>
