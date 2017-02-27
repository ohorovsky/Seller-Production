$(document).ready(function () {
    var didScroll;
    // on scroll, let the interval function know the user has scrolled
    $(window).scroll(function (event) {
        didScroll = true;
    });
    // run hasScrolled() and reset didScroll status
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        // do stuff here...

        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop) {
            // Scroll Down
            $('nav').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('nav').removeClass('nav-up').addClass('nav-down');
            }

        }
        if ($(window).scrollTop() == 0) {

            $('nav').removeClass('nav-down');

        }

        lastScrollTop = st;
    };

    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $("nav").outerHeight();


    $('.menuBtn').click(function () {
        $('.menu').toggleClass("showMenu");
        $('.menuBtn').toggleClass("open");
    });
    $('.menuItems a').click(function () {
        $('.menu').toggleClass("showMenu");
        $('.menuBtn').toggleClass("open");
    })
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            var animation = 'easeOutCubic';
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1500, animation, function () {
                window.location.hash = hash;
            });
        }
    })
    $('.play').click(function () {
        $('.play .up').toggleClass("switchUp");
        $('.play .down').toggleClass("switchDown");
        $('.play .lineBreak').toggleClass("shrinkLine");
        $('.audio-icons').toggleClass("expand");

    })
    $('.buy').click(function () {
        $('.buy .up').toggleClass("switchUp");
        $('.buy .down').toggleClass("switchDown");
        $('.buy .lineBreak').toggleClass("shrinkLine");
        $('.buy-icons').toggleClass("expand");
    })

    $(window).scroll(function () {
        var wScroll = $(this).scrollTop();

        $(".fade-left").css({
            'left': '-' + wScroll / 3 + 'px',
            'opacity': 1 - (wScroll / 400),
        })

        $(".fade-right").css({
            'right': '-' + wScroll / 3 + 'px',
            'opacity': 1 - (wScroll / 400),

        })

        $(".layer .portfolioBtn").css({
            'transform': 'translate(0px, -' + wScroll / 11 + '%)',
            'opacity': 1 - (wScroll / 600),

        })


    });

    //MODAL BEHAVIOUR

    var modal = document.getElementById('myModal');

    var btn = document.getElementById("contactBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    //Prevent bootstrap form from submiting.. Not reloading on submit..

    $("#form").submit(function () {
        return false;
    });

    //Email validation

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $("#submitButton").click(function () {

        if (isEmail($("#email").val()) == false) {

            $(".danger").fadeIn();

        } else {

            $(".danger").fadeOut();
            $("#form").unbind("submit").submit(); //Enable form to submit when correct email is entered..

        };

    });

    $("#resetButton").click(function () {

        $(".danger").fadeOut();

    });

})