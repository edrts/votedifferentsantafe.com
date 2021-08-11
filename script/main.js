(function (root, $, undefined) {
    "use strict";

    $(function () {

        $(document.body).addClass('fade-in');
        $(document.body).removeClass('no-js');


        $(document).ready(function () {
            $('.slick-container').slick({
                dots: true,
                centerPadding: '60px',
            });
        });



        $('.toggle-nav').on('click', function() {
          $('#mobileNav').toggleClass('show');
        })


        $(".sticker").sticky({
            topSpacing:0,
            zIndex:1000
        });
        // Absentee Voting my Mail/In-Person starts January 30.
        // Early Voting starts February 14.Election day is March 6.


        console.log(voteLanguage);

        //Language Cookies
        var voteLanguage = Cookies.get('voteLanguage');


        if (voteLanguage == undefined || !voteLanguage) {
            Cookies.set('voteLanguage', 'english');
        }
        var voteLanguage = Cookies.get('voteLanguage');
        console.log(voteLanguage);

        if (voteLanguage === 'spanish') {
            $('.language .toggle.btn').removeClass('off');
            $('.spanish-content').show();
            $('.english-content').hide();
        }

        //Language Switcher
        var toggleOptions = ({
            easing: 'linear',
            duration: 0
        });

        $('#language-toggle').change(function () {
            if (voteLanguage === 'english' || voteLanguage === undefined) {
                Cookies.set('voteLanguage', 'spanish');
                $('.english-content').fadeToggle({
                    easing: 'linear',
                    duration: 0
                });
                $('.spanish-content').fadeToggle(toggleOptions);

            } else if (voteLanguage === 'spanish') {
                // console.log(voteLanguage);
                Cookies.set('voteLanguage', 'english');
                $('.spanish-content').fadeToggle({
                    easing: 'linear',
                    duration: 0
                });
                $('.english-content').fadeToggle(toggleOptions);

            }

        });



    });

}(this, jQuery));
