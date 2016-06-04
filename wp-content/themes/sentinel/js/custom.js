
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
        //$('.ui.sidebar').sidebar('attach events', '.toc.item');
        $('.masthead .white.button').transition('jiggle');

        //Initialize slick slider home page
        $('.home .projects .items').slick({
            fade: true,
            easing:'easeOutQuart',
            speed: 800,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            prevArrow: $('.prev-slide'),
            nextArrow: $('.next-slide')
        });

        //Initialize slick slider product page
        $('.project .slider .items').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });

        //Initialize testimonials tabs
        $('.testimonials .tabular.compact.menu .item').tab();


        //Initialize read more/less section
        $('.readmore').click(function(e) {
            e.preventDefault();
            $(this).prev(".more").toggle(200);
            $(this).text($(this).text() == 'READ MORE' ? 'READ LESS' : 'READ MORE');

        });

        /*$('.readmore').readmore({
            speed: 75,
            collapsedHeight: 100,
            moreLink: '<div class="link"><a href="">READ MORE</a></div>',
            lessLink: '<div class="link"><a href="">READ LESS</a></div>'
        });

        //Initialize hover on team member images
        if($('.our-team .image').length > 0){
            $('.our-team .image')
                .dimmer({
                    on: 'hover',
                    opacity: 0.5

                });
        }*/


    });
