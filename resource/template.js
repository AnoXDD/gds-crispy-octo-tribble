/**
 * Created by Anoxic on 112915.
 * A template for loading underscore template
 */

<% _.each(data.sections, function(section) { %>
    <div class="section <% section.autoHeight? print('fp-auto-height'): print('') %>" style="<% section.background? print('background-image: url(\'' + section.background + '\');'): print('') %>">
        <% if (section.slides.titlePage) { %>
    <div class="slide">
            <div class="title">
            <%- section.slides.titlePage.title %>
            <% if (section.slides.titlePage.subTitle) { %>
        <div class="sub-title"><%- section.slides.titlePage.subTitle %></div>
                <% }
        if (section.slides.titlePage.btn) { %>
        <a class="btn" target="_blank"
            href="<% section.slides.titlePage.btn.href? print(section.slides.titlePage.btn.href): print('javascript:;') %>">
                <%- section.slides.titlePage.btn.title %>
                </a>
                <% } %>
    </div>
        </div>
        <% }
    if (section.slides.video) { %>
    <div class="slide">
            <div class="slide-inner">
            <div class="slide-item-container">
            <iframe width="100%" height="100%" src="<%= section.slides.video.src %>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="slide-item-desc"><%- section.slides.video.desc %></div>
            </div>
            </div>
            <% }
    if (section.slides.custom) { %>
    <div class="slide">
            <div class="slide-inner">
            <div class="slide-item-container"><%- section.slides.custom.content %></div>
            <div class="slide-item-desc"><%- section.slides.custom.desc %></div>
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
