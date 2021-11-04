<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />


  <script>
    $(document).ready(function(){

      $(".owl-carousel").owlCarousel({    
        loop:true,
        items:1,
        margin:0,
        stagePadding: 0,
        autoplay:false  
      });

      dotcount = 1;

      jQuery('.owl-dot').each(function() {
        jQuery( this ).addClass( 'dotnumber' + dotcount);
        jQuery( this ).attr('data-info', dotcount);
        dotcount=dotcount+1;
      });

      slidecount = 1;

      jQuery('.owl-item').not('.cloned').each(function() {
        jQuery( this ).addClass( 'slidenumber' + slidecount);
        slidecount=slidecount+1;
      });

      jQuery('.owl-dot').each(function() {  
        grab = jQuery(this).data('info');   
        slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
        jQuery(this).css("background-image", "url("+slidegrab+")");   
      });

      amount = $('.owl-dot').length;
      gotowidth = 100/amount;     
      jQuery('.owl-dot').css("height", gotowidth+"%");

    });

  </script>

  <style>
    .content-carousel {
      width: 600px;
      display: block;
      margin: 0 auto;
    }
    .owl-carousel {
      width: calc(100% - 75px);
    }
    .owl-carousel div {
      width: 100%;
    }
    .owl-carousel .owl-controls .owl-dot {
      background-size: cover;
      margin-top: 10px;
    }
    .owl-carousel .owl-dots {
      position: absolute;
      top: 0;
      left: -75px;
      width: 70px;
      height: 100%;
    }
    .owl-carousel .owl-dot {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;  
    }
  </style>


</head>
<body>

  <div class="container my-5 p-5">	

    <div id='calendar'></div>
  </div>


  <div class="content-carousel">
    <div class="owl-carousel">
      <div> <img src="https://dummyimage.com/600x400/ef3e3e/231f20.png&text=Carousel"> </div>
      <div> <img src="https://dummyimage.com/600x400/16c1f3/231f20.png&text=Carousel"> </div>
      <div> <img src="https://dummyimage.com/600x400/fff200/231f20.png&text=Carousel"> </div>
      <div> <img src="https://dummyimage.com/600x400/f48480/231f20.png&text=Carousel"> </div>
      <div><img src="https://dummyimage.com/600x400/8dd8f8/231f20.png&text=Carousel"> </div>
      <div><img src="https://dummyimage.com/600x400/fffac2/231f20.png&text=Carousel"> </div>
    </div>
  </div>

</body>
</html>