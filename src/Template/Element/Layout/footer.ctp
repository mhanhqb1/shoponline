<div id="BOT">
    <div class="bot-i">
        <p class="cty-name">CÔNG TY CỔ PHẦN ELISE</p>
        <p>Tel: 043-946-0368</p>
        <p>Email: support@elise.vn</p>
        <p>Số 33 Thái Hà - Đống Đa - Hà Nội</p>
    </div>
</div>

<script src="<?php echo $BASE_URL;?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery-ui-1.10.2.custom.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/foundation.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.hoverIntent.js"></script>
<script src="<?php echo $BASE_URL;?>/js/superfish.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.transit.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.carouFredSel-6.2.1.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.flexslider.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/jquery.BlackAndWhite.js"></script>
<!--<script src="<?php echo $BASE_URL;?>/js/retina.js"></script>-->
<script src="<?php echo $BASE_URL;?>/js/kose.js?<?php echo VERSION_DATE;?>"></script>

<script language="javascript">
    document.getElementById('play_id').innerHTML = "<img src=\"<?php echo $BASE_URL;?>/images/icon-pause.png\">";
    function stop() {

        if ($("#chkplay").val() == 1) {
            document.getElementById('player').pause();
            $("div#playing").hide();
            $('#chkplay').val(2);
            document.getElementById('play_id').innerHTML = "<img src=\"<?php echo $BASE_URL;?>/images/icon-play.png\">";
        } else {
            document.getElementById('player').play();
            $("div#playing").show();
            $('#chkplay').val(1);
            document.getElementById('play_id').innerHTML = "<img src=\"<?php echo $BASE_URL;?>/images/icon-pause.png\">";
        }

    }
    document.querySelector("#player").addEventListener("ended", yourFunction, false);

    function yourFunction() {
        document.getElementById('player').pause();
        $("div#playing").hide();
        $('#chkplay').val(2);
        document.getElementById('play_id').innerHTML = "<img src=\"<?php echo $BASE_URL;?>/images/icon-play.png\">";

    }
</script>