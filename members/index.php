<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
    <title>Members | Game Development Studio</title>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav.php'; ?>


<div class="options">

</div>
<div class="page-content member">
    <div class="isotope"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>


<script type="text/javascript" src="members.js"></script>
<script type="text/template" id="underscore">
    <% _.each(data.members, function(member) { %>
    <div class="element-item <% member.layout? print(member.layout): print('') %>"
         style="background-image: url('<%= member.profile %>')">
        <div class="element-item-inner">
            <img class="alt" src="<%= member.alt %>"/>

            <p class="name"><%= member.name %></p>
            <% if (member.tags) { %>
            <div class="tags">
                <% _.each(member.tags, function(tag) { %>
                <span><%= tag %></span>
                <% }); %>
            </div>
            <% } %>
            <div class="desc"><%= member.desc %></div>
            <p class="position"><%= member.position %></p>
        </div>
    </div>
    <% }); %>
</script>
<script type="text/javascript" src="/js/main.js"></script>


</body>
</html>