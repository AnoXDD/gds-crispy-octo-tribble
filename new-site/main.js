/**
 * Created by Anoxic on 112115.
 */

/**
 * Enables the basic functions of navbar (animation)
 * @author Anoxic
 */
function enableNavBar() {
    $(".nav").hover(function() {
        // Mousein
        $(this).removeClass("hidden");
    }, function() {
        // Mouseout
        $(this).addClass("hidden");
    });
}

/**
 * Enables the slider and the animation
 * @author Anoxic
 */
function enableSlider() {
    initSlider();
    // Click to expand
    $(".content-slider .toggle").click(function() {
        $(this).parent().toggleClass("expand");
    });
}

/**
 * Initiates the slider on the webpage
 * @author Anoxic
 */
function initSlider() {
    $(".content-slider").prepend('<a class="toggle" href="#"><svg width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375 "/></svg></a>').addClass("processed");
}

$(document).ready(function() {
    enableNavBar();
    enableSlider();
})