<div class="menu">
    <div class="menuContainer">

	<div class="menuBlock logo">
	    <a href="/"><img src="http://www.gnosisparadox.net/core/img/logo.png"/></a>
	</div><!--menuBlock-->

	<div class="menuBlock logoBlock">
            <h3><a href="/" class="name">Gnosis Paradox</a></h3>
        </div><!--menuBlock-->

	<div class="menuBlock tabs">
	    <h3><a href="/servers/">Servers</a></h3>
    	</div><!--menuBlock-->

	<div class="menuBlock tabs">
            <h3><a href="/people/">People</a></h3>
        </div><!--menuBlock-->

	<div class="menuBlock tabs">
	    <h3><a href="/portfolio/">Portfolio</a></h3>
	</div><!--menuBlock-->

	<div class="menuBlock tabs">
            <h3><a href="/about.php">About</a></h3>
        </div><!--menuBlock-->

	<div class="menuBlock menuButton">
	   <a href="#" onClick="menuPop()"><img name="menuButton" src="http://www.gnosisparadox.net/core/img/menuButton.png"/></a>
	</div><!--menyBlock-->

    </div><!--menuContainer-->
</div><!--menu-->
<script>
    var display;

    function menuPop() {

	display = $(".menuPop").css("display");

	if ( display === "block" ) {

	    $(".menuPop").css("display", "none");

	};
	if ( display === "none" ) {

	    $(".menuPop").css("display", "block");

	};
    }

</script>
