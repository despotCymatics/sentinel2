
$(document)
    .ready(function() {
        $('a.hamburger').click(function(e){
            e.preventDefault();
            $('.ui.fixed.menu .right.menu').slideToggle();

            $('a.hamburger i').toggleClass('close')
        });
        // fix menu when passed
        $('.masthead')
            .visibility({
                once: false,
                onBottomPassed: function() {
                    console.log();
                    if( $('.masthead').width() > 991) $('.fixed.menu').transition('fade in');
                    else $('.fixed.menu').show();
                },
                onBottomPassedReverse: function() {
                    if( $('.masthead').width() > 991) $('.fixed.menu').transition('fade out');
                    else $('.fixed.menu').show();
                }
            })
        ;

        // create sidebar and attach to menu open
        $('.ui.sidebar').sidebar('attach events', '.toc.item');
        $('.masthead .white.button').transition('jiggle');

        //Initialize slick slider
        $('.projects .items').slick({
            fade: true,
            easing:'easeOutQuart',
            speed: 800,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            prevArrow: $('.prev-slide'),
            nextArrow: $('.next-slide')
        });

        //Initialize testimonials tabs
        $('.testimonials .tabular.compact.menu .item').tab();
    })
;
