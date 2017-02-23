<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $__env->yieldContent('titre'); ?></title>

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/override.css')); ?>" rel="stylesheet">
  </head>

  <body>
      <div class="scrollUp hidden-xs">
	  <a href="#top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
      </div>

      <div class="menu-fixed">

      </div>

      <?php echo $__env->yieldContent('contenu'); ?>

      <script src="<?php echo e(asset('js/jquery-1.11.3.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

      <script type="text/javascript">
       if($(window).height() > 600 && $(window).height() < 1080)
	   $('.cover').css('height', $(window).height()+'px');
       else if($(window).height() > 1080)
	   $('.cover').css('height', 1080);
       else
	   $('.cover').css('height', 600);

       $(window).on("scroll", function() {
	   var scrollPos = $(window).scrollTop();
	   if (scrollPos <= 0) {
               $(".scrollUp").fadeOut();
	   } else {
               $(".scrollUp").fadeIn();
	   }
       });

       $("a[href='#top']").click(function() {
	   $("html, body").animate({ scrollTop: 0 }, "slow");
	   return false;
       });
       
       $(document).on('click', 'a', function(event){
	   event.preventDefault();

	   $('html, body').animate({
               scrollTop: $( $.attr(this, 'href') ).offset().top
	   }, 1500);
       });
      </script>
  </body>
</html>
