  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'trLocale',
  });
    calendar.render();
});

$(document).ready(function() {




  $('.owl1').owlCarousel({

    loop:true,
    nav:true,
    dots:false,
    items:1,
    responsiveClass:true,
    navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],

    responsive:{
        0:{
            items:1,
            nav:false,
        },

        750:{
            items:1,
            nav:false,

        },

        1300:{
            items:1,
            nav:true,

        },

    }

});


  $('.owl2').owlCarousel({

    loop:true,
    dots:false,
    items:4,
    margin:10,
    responsiveClass:true,
    nav:true,
    navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],

    responsive:{
        0:{
            items:1,
        },

        750:{
            items:3,

        },

        1300:{
            items:4,

        },

    },

});


  $('.owl3').owlCarousel({

    loop:true,
    dots:false,
    items:4,
    margin:20,
    responsiveClass:true,
    nav:true,
    navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],

    responsive:{
        0:{
            items:1,
        },

        500: {

            items:2
        },

        768:{
            items:3,

        },

        1300:{
            items:4,

        },

    }

});


  $('.owl4').owlCarousel({

    loop:true,
    nav:false,
    dots:false,
    items:1,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:3000,
    navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],

    responsive:{
        0:{
            items:1,
            nav:false,
        },

        750:{
            items:1,
            nav:false,

        },

        1300:{
            items:1,
            nav:false,

        },

    },

});





});

