<div id="nav">
    <a href="/">
        <div id="nav-logo">
            <img src="/img/logo.png"/>
        </div>
    </a>
    <div id="nav-menu">
        <div class="scroll-hide">
            <div class="scroll-fix">
                <a class="nav-item" data-hash="about" href="/about">About</a>
                <a class="nav-item" data-hash="games" href="/games">Games</a>
                <div id="logo-filler"></div>
                <a class="nav-item" data-hash="members" href="/members">Members</a>
                <a class="nav-item" data-hash="contact" href="/contact">Contact</a>
            </div>
        </div>
    </div>
</div>

<script>
    //Highlight active nav
    [].forEach.call(document.getElementsByClassName("nav-item"), function(el){
        if (el.dataset.hash == <?php echo "'".$_SESSION["curr_page"]."'"; ?>){
            el.classList.add('selected');
        }
    });
</script>