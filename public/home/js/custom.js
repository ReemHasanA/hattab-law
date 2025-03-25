$(document).ready(function () {
    $(".clients-carousel").owlCarousel({
        rtl: $("html").attr("dir") === "rtl", 
        loop: true,               
        margin: 30,               
        nav: false,               
        dots: false,              
        autoplay: true,           
        autoplayTimeout: 3000,   
        autoplaySpeed: 2000,     
        autoplayHoverPause: false,
        slideBy: 1,               
        smartSpeed: 2000,        
        stagePadding: 10,         
        responsive: {
            0: { items: 2 },       
            600: { items: 3 },     
            1000: { items: 5 }     
        }
    });
});

$('#datepicker').datepicker({
    iconsLibrary: 'fontawesome',
});
$('#datepicker2').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
     rightIcon: '<span class="fa fa-caret-down"></span>'
}

});
var timepicker = $('#timepicker').timepicker({
 format: 'HH.MM'
});