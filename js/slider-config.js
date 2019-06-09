(function($) {

    $(document).ready(function(){
        $('.img-slider').slick({
            prevArrow:"<img class='a-left control-c prev slick-prev' src='http://brandonzeek.com/nt/wp-content/themes/prhacker-theme/img/prev-button.png'>",
            nextArrow:"<img class='a-right control-c next slick-next' src='http://brandonzeek.com/nt/wp-content/themes/prhacker-theme/img/next-button.png'>"
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