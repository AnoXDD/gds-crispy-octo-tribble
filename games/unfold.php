<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
    <title>Unfold | Game Development Studio</title>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav.php'; ?>

    <div class="page-content"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.7/jquery.fullPage.min.js"></script>
    <script type="text/template" id="underscore">
        <% _.each(data.sections, function(section) { %>
        <div class="section <% section.autoHeight? print('fp-auto-height'): print('') %>"
             style="<% section.background? print('background-image: url(\'' + section.background + '\');'): print('') %>">
            <% if (section.slides.titlePage) { %>
            <div class="slide">
                <div class="title">
                    <%= section.slides.titlePage.title %>
                    <% if (section.slides.titlePage.subTitle) { %>
                    <div class="sub-title"><%= section.slides.titlePage.subTitle %></div>
                    <% }
                    if (section.slides.titlePage.btn) {
                    if (section.slides.titlePage.btn.custom) { %>
                    <div><%= section.slides.titlePage.btn.title %></div>
                    <% } else { %>
                    <a class="btn" target="_blank"
                       href="<% section.slides.titlePage.btn.href? print(section.slides.titlePage.btn.href): print('javascript:;') %>">
                        <%= section.slides.titlePage.btn.title %>
                    </a>
                    <% }
                    } %>
                </div>
            </div>
            <% }
            if (section.slides.video) { %>
            <div class="slide">
                <div class="slide-inner">
                    <div class="slide-item-container">
                        <iframe width="100%" height="100%" src="<%= section.slides.video.src %>" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                    <div class="slide-item-desc"><%= section.slides.video.desc %></div>
                </div>
            </div>
            <% }
            if (section.slides.custom) { %>
            <div class="slide">
                <div class="slide-inner">
                    <div class="slide-item-container"><%= section.slides.custom.content %></div>
                    <div class="slide-item-desc"><%= section.slides.custom.desc %></div>
                </div>
            </div>

            <% }
            if (section.slides.contents) {
            _.each(section.slides.contents, function(content) { %>
            <div class="slide">
                <div class="slide-inner">
                    <div class="slide-item-container"><span></span><img src="<%= content.image %>" /></div>
                    <div class="slide-item-desc"><%- content.desc %></div>
                </div>
            </div>
            <% }); %>
            <% } %>
        </div>
        <% }); %>
    </script>
    <script>
        $(document).ready(function() {
            // Read the content from template
            _.templateSettings.variable = "data";
            var template = _.template($("#underscore").html());
            var data = {
                sections: [
                    {
                        background: "../img/unfold_logo.png",
                        slides: {
                            titlePage: {
                                title: "Unfold",
                                subTitle: "Our goal for Unfold is to create a unique origami themed multiplayer action game with randomly generated mazes. Solve the maze while fighting monsters, collecting powerful items, and racing your friends to the end!",
                                btn: {
                                    custom: 1,
                                    title: '<a href="https://play.google.com/store/apps/details?id=edu.ucsd.gds&hl=en_GB&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img height="50px" alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en-play-badge.png" /></a><a style="margin-left:20px" href="https://itunes.apple.com/us/app/unfold-game/id1003008772?mt=8"><img height="50px" src="https://devimages.apple.com.edgekey.net/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg"/></a>'
                                }
                            }
                        }
                    }, {
                        background: "../img/unfold_1.webp",
                        slides: {
                            titlePage: {
                                title: "Gallery",
                                subTitle: "Release Platform: Web, iPhone, and Android<br>Release Date: June 6, 2015",
                            },
                            contents: [{
                                image: "../img/unfold/bookintro.jpg",
                                desc: "Walk up to the pedestal to create a game!"
                            }, {
                                image: "../img/unfold/creategame.jpg",
                                desc: "4 different mazes to choose from!"
                            }, {
                                image: "../img/unfold/lobby.jpg",
                                desc: "Single-player and Multi-player modes!"
                            }, {
                                image: "../img/unfold/foreststartblock.jpg",
                                desc: "Amazing spooky forest theme!"
                            }, {
                                image: "../img/unfold/forestspinnystartblock.jpg",
                                desc: "Encounter all types of monsters!"
                            }, {
                                image: "../img/unfold/forestspider.jpg",
                                desc: "Defeat the Spider!"
                            }, {
                                image: "../img/unfold/forestendblockspinny.jpg",
                                desc: "Quickly get to the Finish before a monster gets you!"
                            }, {
                                image: "../img/unfold/cavesspider.jpg",
                                desc: "Original Cave maze still."
                            }, {
                                image: "../img/unfold/cavespiderfar.jpg",
                                desc: "Original Cave maze still."
                            }, {
                                image: "../img/unfold/cavekilled.jpg",
                                desc: "Killing monsters never looked more fun!"
                            }, {
                                image: "../img/unfold/updatedcave.png",
                                desc: "Check out our new Cave Maze"
                            }, {
                                image: "../img/unfold/cavewin.png",
                                desc: "Make your way past all of the monsters to get to the End!"
                            }, {
                                image: "../img/unfold/cornfog.jpg",
                                desc: "Wonderful Corn maze theme!"
                            }, {
                                image: "../img/unfold/cornbird.jpg",
                                desc: "Watch out for birds!"
                            }, {
                                image: "../img/unfold/cavesword.jpg",
                                desc: "Collect different types of weapons!"
                            }, {
                                image: "../img/unfold/mansionfog.jpg",
                                desc: "Want a challenge? Try the Mansion Maze!"
                            }, {
                                image: "../img/unfold/mansiontriangle.jpg",
                                desc: "Different monsters for different mazes!"
                            }, {
                                image: "../img/unfold/mansiontriangleattack.jpg",
                                desc: "Defeat the monster as fast as you can!"
                            }, {
                                image: "../img/unfold/mansionhealth.jpg",
                                desc: "Kill monsters to get powerups!"
                            }, {
                                image: "../img/unfold/mansionstart.jpg",
                                desc: "Instantly heal yourself by stepping on the Start Block!"
                            }, {
                                image: "../img/unfold/mansionendblock.jpg",
                                desc: "Make it to the Finish as fast as you can!"
                            }, {
                                image: "../img/unfold/2ndplayerwalking.png",
                                desc: "Play with up to 4 friends at a time!"
                            }, {
                                image: "../img/unfold/triangleheadattacks2ndplayer.png",
                                desc: "Make sure to help your friends from getting attacked!"
                            }, {
                                image: "../img/unfold/triangleheadlose.png",
                                desc: "Work together to kill monsters or else!"
                            }, {
                                image: "../img/unfold/cornmaze.jpg",
                                desc: "Corn maze as seen from above."
                            }, {
                                image: "../img/unfold/mansionmaze.jpg",
                                desc: "Mansion maze as seen from above."
                            }]
                        }
                    }, {
                        background: "../img/unfold_2.jpg",
                        slides: {
                            titlePage: {
                                title: "Early Work",
                                subTitle: "We started out UNFOLD from some basic sketches and have worked tirelessly through the 2014-2015 Academic school year, juggling classes and our daily lives to make this game a reality. Please take a look at our some of our Early work to see how far we have come"
                            },
                            contents: [{
                                image: "../img/unfold/withinMaze.jpg",
                                desc: "Maze Walls as seen within the maze"
                            }, {
                                image: "../img/unfold/mazeGame.jpg",
                                desc: "Maze as seen from above"
                            }, {
                                image: "../img/unfold/maze.jpg",
                                desc: "Maze as seen from above"
                            }, {
                                image: "../img/unfold/lightingDemo.jpg",
                                desc: "Light differences depending on origin of sunlight"
                            }, {
                                image: "../img/unfold/origamiConcept.jpg",
                                desc: "Art design concepts inspired by Origami theme"
                            }, {
                                image: "../img/unfold/monsterConcept2.jpg",
                                desc: "Origami theme inspired monster drawings"
                            }, {
                                image: "../img/unfold/monsterConcept.jpg",
                                desc: "Origami theme inspired monster drawings"
                            }, {
                                image: "../img/unfold/artConcept.jpg",
                                desc: "Origami theme inspired monster drawings"
                            }, {
                                image: "../img/unfold/sword.png",
                                desc: "Sword"
                            }, {
                                image: "../img/unfold/tape.png",
                                desc: "Tape (Healing)"
                            }, {
                                image: "../img/unfold/hammer.png",
                                desc: "Hammer"
                            }, {
                                image: "../img/unfold/spinner.png",
                                desc: "Spinner Monster"
                            }]
                        }
                    }
                ]
            };

            $(".page-content").html(template(data));

            $('.page-content').fullpage({});
        });
    </script>
    <script type="text/javascript" src="../js/main.js"></script>

</body>
</html>