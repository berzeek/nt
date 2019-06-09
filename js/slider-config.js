(function($) {

    $(document).ready(function(){
        function slickify() {
            $('.img-slider').slick({
                autoplay: true,
                prevArrow:"<img class='a-left control-c prev slick-prev-lg' src='http://brandonzeek.com/nt/wp-content/themes/prhacker-theme/img/prev-button.png'>",
                nextArrow:"<img class='a-right control-c next slick-next-lg' src='http://brandonzeek.com/nt/wp-content/themes/prhacker-theme/img/next-button.png'>",
            });
        }

        slickify();

        let logo = $('#logo');
        logo.addClass('spinner');
        logo.on("click", function() {
            $(this).toggleClass("infinite-spinner");
        });

        // Menu Active Link
        $('#menu-item-8 a').addClass("orange-text");
        $(".nav-link").on("click", function() {
            $(".nav-link").removeClass("orange-text");
            $(this).addClass("orange-text");
        });
        $(".list-inline-item").on("click", function() {
            $(".list-inline-item").removeClass("orange-text");
            $(this).addClass("orange-text");
        });

        // Icon Animation
        $('#search-toggle, #user-icon').click(function(){
            $(this).effect( "bounce", {times:3}, 500 );
        });

        $('#all-sort, #surv-sort, #list-sort, #quiz-sort').click(function(){
            $('.quiz-container').fadeOut();
            $('#home-col').toggleClass('order-last');
            $('#c-day-row').addClass('order-first');
            $('#cookie-col').addClass('order-first');
            $('#cyber-row').addClass('order-last');
            $('#chan-row').addClass('order-first');
            $('#singles-row').addClass('order-first');
            $('#giving-row').addClass('order-last');
            $('#cake-row').addClass('order-last');
            $('.quiz-container').fadeIn();
        });

        $('.card').on("click", function() {
            $(this).effect( "bounce", {times:3}, 2000 );
        });

        $('.more-button').on("click", function() {
            $(this).effect( "bounce", {times:5}, 500 );
        });
    });



})( jQuery );

function splitDate(str, day) {
    let Date = new Object();
    Date['day'] = str.substr(0,str.indexOf(' '));
    Date['dayMonth'] = str.substr(str.indexOf(' ')+1);

    HTML = '<h4 class="day">'+Date['day']+'</h4>\n' +
            '<h2 class="day-month">'+Date['dayMonth']+'</h2>';

    document.getElementById(day).innerHTML = HTML;
}