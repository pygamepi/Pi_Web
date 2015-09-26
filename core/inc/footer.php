<div class="footer">
    <div class="footerContainer">
	<div class="footerBlock">
	    <strong><h3>Pygamepi.com</h3></strong>
	</div><!--footerBlock-->
	<div class="footerBlock">
            <h3>Contact: derekhoyt1@gmail.com OR derek@gnosisparadox.net</h3>
        </div><!--footerBlock-->
    </div><!--footerContainer-->
</div><!--footer-->

<script type="application/javascript">
function load() {
    $(".menuPop").css("display", "none");

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

	conatainerBottomPaddingAddon = "15";

	$(".logo img").css("width", "150px");
	$(".logo img").css("height", "150px");
	$(".logoBlock h3").css("font-size", "65px");

	var menuPopMarginTop = $(".menu").height();
	$(".menuPop").css("margin-top", parseInt(menuPopMarginTop) + "px");

	$(".menuButton img").css("width", "150px");
	$(".menuButton img").css("height", "150px");
	$(".menuButton").css("margin", "5px 0px 0px 0px");

	$(".tabs").css("display", "none");
	$(".menuButton").css("display", "block");

	$(".menu").addClass("blockLengthFull");
	$(".footer").addClass("blockLengthFull");

	$(".row").css("width", "100%");
        $(".row").css("margin", "0px 0px 0px 0px");
        $(".block").css("margin", "5px 0px 0px 0px");
        $(".block").css("padding", "5px 0px 5px 0px");
	$(".block h1").css("font-size", "90px");
	$(".block h3").css("font-size", "90px");
	$(".block p").css("font-size", "60px");

	$(".footer h3").css("font-size", "40px");

	$(".blockLength1").addClass("blockLengthFull");
	$(".blockLength1").removeClass("blockLength1");

	$(".blockLength2").addClass("blockLengthFull");
        $(".blockLength2").removeClass("blockLength2");

	$(".blockLength3").addClass("blockLengthFull");
        $(".blockLength3").removeClass("blockLength3");

        $(".blockLength4").addClass("blockLengthFull");
        $(".blockLength4").removeClass("blockLength4");

        $(".blockLength5").addClass("blockLengthFull");
        $(".blockLength5").removeClass("blockLength5");

        $(".blockLength6").addClass("blockLengthFull");
        $(".blockLength6").removeClass("blockLength6");

        $(".blockLength7").addClass("blockLengthFull");
        $(".blockLength7").removeClass("blockLength7");

        $(".blockLength8").addClass("blockLengthFull");
        $(".blockLength8").removeClass("blockLength8");

	$(".blockLength9").addClass("blockLengthFull");
	$(".blockLength9").removeClass("blockLength9");

	$(".status").css("font-size", "65px");
	$(".output").css("font-size", "65px");
    }
    else {
	var divs = $("div");
    	var hasClassFull = $(divs).is(".blockLengthFull");
    	if ( hasClassFull === true){
            $(".row").css("width", "100%");
            $(".row").css("margin", "0px 0px 0px 0px");
            $(".row").css("padding", "0px 0px 0px 0px");
            $(".block").css("margin", "5px 0px 0px 0px");
            $(".block").css("padding", "5px 0px 5px 0px");
	    $(".block").css("text-align", "center");
    	};
    };

    var rowCount = $(".row").length;
    console.log(rowCount);
    if ( rowCount <= 1 ) {
	var width = $(".block").css("width");
	$(".row").css("width",width); 
	$(".row").css("float", "none");
	$(".row").css("margin-right", "auto");
	$(".row").css("margin-left", "auto");
	$(".row").css("display", "block");
    }

    var conatainerBottomPaddingAddon = "10";
    var paddingBottomContainer = parseInt($(".footer").height()) + parseInt(conatainerBottomPaddingAddon);
    $(".container").css("padding-bottom", paddingBottomContainer + "px");
    $(".container").css("padding-top", parseInt($(".menu").height()) + parseInt("5") + "px");
}
</script>
