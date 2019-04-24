jQuery(function () {

    jQuery('.navbar-nav > li > a').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        window.location.href = jQuery(this).attr('href');
    });

    jQuery('.js-video-modal').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });

    jQuery('.blocks-gallery-item a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    // Accommodation carousel
    jQuery('.owl-carousel').owlCarousel({
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        dots: false,
        loop: true,
        responsiveClass: true,
        navContainer: '#customNav',
        margin: 30,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            700: {
                items: 2,
                nav: true,
                loop: true
            },
            1200: {
                items: 3,
                nav: true,
                loop: true
            },
            1600: {
                items: 4,
                nav: true,
                loop: true
            }

        }
    });

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name
        });
    }
};