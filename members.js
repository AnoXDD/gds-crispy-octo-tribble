/**
 * Created by Anoxic on 021416
 * 
 * Controls the interesting stuffs in members.html
 * 
 * Maybe I'm supposed to do something else than coding at home? XD
 */

/**
 * Initializes the content of people
 * @author Anoxic
 */
function initContents() {
    var data = {
        members: [
            {
                profile: "img/members/angryeric.png",
                name: "Eric Cheng",
                position: "President"
            }, {
                profile: "img/members/michael.png",
                name: "Michael Gonzalez",
                position: "Vice President"
            }, {
                profile: "img/members/gavin.jpg",
                name: "Gavin Badillo",
                position: "Treasurer"
            }, {
                profile: "img/members/Isabelle.png",
                name: "Isabelle Cabana",
                position: "Secretary"
            }, {
                profile: "img/members/runjie.png",
                name: "Runjie Guan",
                position: "Historian"
            }, {
                profile: "img/members/sher.jpg",
                name: "Sher Zahed",
            }, {
                profile: "img/members/anhquan.png",
                name: "AnhQuan Nguyen",
            }, {
                profile: "img/members/steven.png",
                name: "Steven Lee",
                position: "Development Manager"
            }, {
                profile: "img/members/alec.png",
                name: "Alec Brickner",
                position: "Development Manager"
            }, {
                profile: "img/members/mai.png",
                name: "Mai Dinh",
            }, {
                profile: "img/members/peter.png",
                name: "Peter Vugia"
            }, {
                profile: "img/members/eric_luo.jpg",
                name: "Eric Luo"
            }, {
                profile: "img/members/fernando.jpg",
                name: "Fernando Granizo"
            }, {
                profile: "img/members/mehul.jpg",
                name: "Mehul Goel"
            }, 
            {
                name: "Julian Al-Haddad"
            }, {
                name: "Richard Wan"
            }, 
        ]
    };

    // Add random layouts
    for (var i = 0; i !== data.members.length; ++i) {
        var layout = undefined;
        switch (parseInt(5 * Math.random())) {
            case 0:
                layout = "element-item-width2";
                break;
            case 1:
                layout = "element-item-height2";
                break;
            case 2:
                layout = "element-item-height2 element-item-width2";
                break;
        }
        if (layout) {
            data.members[i]["layout"] = layout;
        }
    }

    // Initialize the template
    _.templateSettings.variable = "data";
    var template = _.template($("#underscore").html());
    $(".page-content .isotope").html(template(data));
}

/**
 * Initializes the isotope compartment
 * @author Anoxic
 */
function initIsotope() {
    // init Isotope
    var $container = $('.isotope').isotope({
        itemSelector: '.element-item',
        layoutMode: 'masonry',
        sortBy: 'random',
        masonry: {
            // DO NOT REMOVE THIS COMMENT!
            // #isotopeWidth
            // From `main.scss`: change the value here. The value should be ($isotope-margin * 2 + $isotope-element-width)
            columnWidth: 160
        }
    });
}

$(document).ready(function() {
    initContents();
    initIsotope();
})
