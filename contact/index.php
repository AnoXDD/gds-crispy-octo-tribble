<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
    <title>Contact | Game Development Studio</title>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav.php'; ?>


<div class="page-content"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.7/jquery.fullPage.min.js"></script>
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
                if (section.slides.titlePage.btn) { %>
                <a class="btn" target="_blank"
                   href="<% section.slides.titlePage.btn.href? print(section.slides.titlePage.btn.href): print('javascript:;') %>">
                    <%= section.slides.titlePage.btn.title %>
                </a>
                <% } %>
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
                <div class="slide-item-container"><span></span><img src="<%= content.image %>"/></div>
                <div class="slide-item-desc"><%= content.desc %></div>
            </div>
        </div>
        <% }); %>
        <% } %>
    </div>
    <% }); %>
</script>
<script>
    $(document).ready(function () {
        // Read the content from template
        _.templateSettings.variable = "data";
        var template = _.template($("#underscore").html());
        var data = {
            sections: [
                {
                    background: "img/contact_1.jpg",
                    slides: {
                        titlePage: {
                            title: "Contact",
                            subTitle: "We always post our activities and future events on Facebook",
                            btn: {
                                title: "Like us!",
                                href: "https://www.facebook.com/groups/681538205261067"
                            }
                        }
                    }
                }, {
                    background: "img/contact_2.jpg",
                    slides: {
                        titlePage: {
                            title: "Blog",
                            subTitle: "We have an offical blog that updates weekly based on our activity. Check that out if you missed any of those",
                            btn: {
                                title: "Our Blogspot",
                                href: "https://ucsdgds.blogspot.com/"
                            }
                        }
                    }
                }, {
                    background: "img/contact_3.jpg",
                    slides: {
                        titlePage: {
                            title: "Calendar",
                            subTitle: "Subscribe to our calendar about our formal meetings and other activities"
                        },
                        custom: {
                            content: '<iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=1&amp;height=400&amp;wkst=1&amp;bgcolor=%23DDDDDD&amp;src=ucsdgds%40gmail.com&amp;color=%232F6309&amp;ctz=America%2FLos_Angeles" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>'
                        }
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