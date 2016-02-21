/**
 * Created by Anoxic on 021416
 *
 * Controls the interesting stuffs in members.html
 *
 * Maybe I'm supposed to do something else than coding at home? XD
 */

/**
 * Initializes the content of people. The data of members are stored in this function. Take a look at that
 * to modify the member info
 * @author Anoxic
 */
function initContents() {
    var data = {
        /**
         * Format of members:
         * profile: Do NOT add suffix of the file type at the end of `profile`. Please use jpg and name it as *.jpg
         * alt: whether there is a alternative picture when the user clicks the photo. The file name (without suffix)
         * should be `profile + "_alt.jpg/png"`. For example, if profile is `xxx.jpg`, the alternative picture
         * should be `xxx_alt.jpg`. This step will be done in this function
         * tags: The tag of this member. Use an array
         */
        members: [
            {
                profile: "img/members/eric_2016.jpg",
                alt: 1,
                name: "Eric Cheng",
                position: "President",
                tags: ["Founder"],
                desc: "\"Take it slow. Make it happen\" - Battlecruiser Captain"
            }, {
                profile: "img/members/michael_2016.jpg",
                alt: 1,
                name: "Michael Gonzalez",
                position: "Vice President"
            }, {
                profile: "img/members/gavin_2016.jpg",
                alt: 1,
                name: "Gavin Badillo",
                position: "Treasurer"
            }, {
                profile: "img/members/Isabelle.png",
                name: "Isabelle Cabana",
                position: "Secretary"
            }, {
                profile: "img/members/runjie_2016.jpg",
                alt: 1,
                name: "Runjie Guan",
                position: "Historian"
            }, {
                profile: "img/members/sher.jpg",
                name: "Sher Zahed",
            }, {
                profile: "img/members/anhquan_2016.jpg",
                alt: 1,
                name: "AnhQuan Nguyen",
            }, {
                profile: "img/members/steven_2016.jpg",
                alt: 1,
                name: "Steven Lee",
                position: "Development Manager"
            }, {
                profile: "img/members/alec_2016.jpg",
                alt: 1,
                name: "Alec Brickner",
                position: "Development Manager"
            }, {
                profile: "img/members/mai_2016.jpg",
                alt: 1,
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
            }, {
                name: "Julian Al-Haddad"
            }, {
                name: "Richard Wan"
            }, {
                profile: "img/members/james_2016.jpg",
                alt: 1,
                name: "James Allen"
            }, {
                profile: "img/members/kalan_2016.jpg",
                alt: 1,
                name: "Kalan Miurrelle"
            }, {
                profile: "img/members/guyue_2016.jpg",
                alt: 1,
                name: "Guyue Zhou"
            }, {
                profile: "img/members/nadia_2016.jpg",
                alt: 1,
                name: "Nadia Kurihara"
            }, {
                profile: "img/members/hilary_2016.jpg",
                alt: 1,
                name: "Hilary Ng"
            }, {
                profile: "img/members/daniel_2016.jpg",
                alt: 1,
                name: "Daniel Griffiths"
            }
        ]
    };

    // Add elements to this data
    for (var i = 0; i !== data.members.length; ++i) {
        // Complete the path of alternative picture
        var profile = data.members[i]["profile"];
        if (data.members[i]["alt"]) {
            // There is alternative picture
            var lastDot = profile.lastIndexOf(".");
            var alt = profile.substring(0, lastDot) + "_alt" + profile.substring(lastDot);
            data.members[i]["alt"] = alt;
        } else {
            data.members[i]["alt"] = profile;
        }

        // Add random layouts
        // People without images won't have larger sizes
        if (profile) {
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


        // Complete others
        data.members[i]["tags"] = data.members[i]["tags"] || [];
        data.members[i]["desc"] = data.members[i]["desc"] || "";
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

    $container.on('click', '.element-item', function() {
        // Tests if the user doesn't want to see this face for now
        if ($(this).hasClass("click")) {
            // Yep the user does
            $(".isotope").removeClass("focus");
            $(this).removeClass("click");
        } else {
            $(".isotope").addClass("focus");
            // Remove `click` from others
            $(".isotope .element-item").removeClass("click");
            $(this).addClass("click");
        }

        $container.isotope('layout');
    });
}

/**
 * Enables that the user can click on each head to see more details
 * @author Anoxic
 */
function enableMoreDetail() {
    $(".isotope .element-item").click(function () {
        // Tests if the user doesn't want to see this face for now
        if ($(this).hasClass("click")) {
            // Yep the user does
            $(".isotope").removeClass("focus");
            $(this).removeClass("click");
        } else {
            $(".isotope").addClass("focus");
            // Remove `click` from others
            $(".isotope .element-item").removeClass("click");
            $(this).addClass("click");
        }

         $(".isotope").isotope("layout");
    })
}

$(document).ready(function() {
    initContents();
    initIsotope();
    //enableMoreDetail();
})
