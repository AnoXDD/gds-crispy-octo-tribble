/**
 * Created by Anoxic on 112115.
 */

///**
// * Enables the basic functions of navbar (animation)
// * @author Anoxic
// */
//function enableNavBar() {
//    $(".nav").hover(function() {
//        // Mousein
//        $(this).removeClass("hidden");
//    }, function() {
//        // Mouseout
//        $(this).addClass("hidden");
//    });
//}

/**
 * Enables the slider and the animation
 * @author Anoxic
 */
function enableSlider() {
    initSlider();
    // Click to expand
    $(".content-slider .toggle").click(function() {
        var $parent = $(this).parent();

        if ($parent.hasClass("expand")) {
            // Go to leftmost
            $parent.animate({
                scrollLeft: 0
            });
        } else {
            // Go to expand
            $parent.animate({
                scrollLeft: window.innerWidth - $(this).outerWidth()
            });
        }
    });
}

/**
 * Initiates the slider on the webpage
 * @author Anoxic
 */
function initSlider() {

}

$(document).ready(function() {
    enableNavBar();
})