<?php if(!class_exists('Rain\Tpl')){exit;}?>   <footer>
      <div class="footer-copyright text-center py-3">
         Todos os direitos reservados. <?php echo date('Y'); ?> © <?php echo $sdata["meta"]["title"]; ?>
      </div>
   </footer>
   <script src="./res/site/vendor/jquery/jquery.min.js"></script>
   <script src="./res/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="./res/site/vendor/jquery.easing/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <script src="./res/site/vendor/php-email-form/validate.js"></script>
   <script>
      $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
   </script>
</body>
</html>