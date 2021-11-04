$('.owl1').owlCarousel({
    loop:false,
    margin:30,
    navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        900:{
            items:3,
            nav:true
        },
        1100:{
            items:4,
            nav:true,
            loop:false
        }
    }
})

$('.owl2').owlCarousel({
    loop:false,
    margin:10,
    padding:20,
    nav:true,
    dots:false,
    navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },

        700:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})

$('.owl3').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        900:{
            items:3,
            nav:true
        },
        1100:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

$(document).ready(function(){

    $(".owl5").owlCarousel({    
        loop:true,
        items:1,
        margin:0,
        stagePadding: 0,
        autoplay:false,
        
    });

    dotcount = 1;

    jQuery('.owl5 .owl-dot').each(function() {
        jQuery( this ).addClass( 'dotnumber' + dotcount);
        jQuery( this ).attr('data-info', dotcount);
        dotcount=dotcount+1;
    });

    slidecount = 1;

    jQuery('.owl5 .owl-item').not('.cloned').each(function() {
        jQuery( this ).addClass( 'slidenumber' + slidecount);
        slidecount=slidecount+1;
    });

    jQuery('.owl5 .owl-dot').each(function() {  
        grab = jQuery(this).data('info');       
        slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
        jQuery(this).css("background-image", "url("+slidegrab+")");     
    });

    amount = $('.owl5 .owl-dot').length;
    gotowidth = 100/amount;         
    jQuery('.owl5 .owl-dot').css("height", gotowidth+"%");

});



var lightbox = $('.gallery a').simpleLightbox({ /* options */ });
