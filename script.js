$(document).ready(function(){
    let request = new XMLHttpRequest();
    request.open("GET", "https://api.github.com/users/oliv6000/repos");
    request.send();
    request.onload = () => {
        if (request.status == 200) {
            console.log(JSON.parse(request.response));
        } else {
            console.log(`erroe ${request.status} ${request.statusText}`)
        }
    }

    $(window).scroll(function(){
        
        // sticky navbar on scroll script
        if(this.scrollY > 150){
            $('.navbar').addClass("sticky");
        }
        else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }
        else{
            $('.scroll-up-btn').removeClass("show");
        }

    });

    // slide-up script
    $('.scroll-up-btn').click(function(){

        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");

    });

    $('.navbar .menu li a').click(function(){

        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");

    });
    
    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
        
    });
    
    // Open mailer with data
    $("#Mailer").on("submit", function() {

        var sender_name = $('#sender_name').val(); 
        var subject = $('#subject').val();
        var message = $('#message').val();

        window.location.href = "mailto:OliverOlesen@outlook.com?subject=" + sender_name + " || " + subject + "&body=" + message;
     });

    // typing text animation script
    var typed = new Typed(".typing", {

        strings: ["Developer", "Data technician", "It enthusiast"],
        typeSpeed: 50,
        backSpeed: 40,
        loop: true

    });

    var typed = new Typed(".typing-2", {

        strings: ["Developer", "Student"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true

    });

    // owl carousel script
    $('.carousel').owlCarousel({

        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });

});