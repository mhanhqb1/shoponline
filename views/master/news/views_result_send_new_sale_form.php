<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>controller=master&action=news&function=wr_new_sale">Thông tin khuyến mãi</a> 
    > Gửi bài viết
</div>

<div class="label_content">
	Kết quả
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Bài viết đã được cập nhật vào cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Thông tin khuyến mãi sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Thông tin khuyến mãi nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_new_sale.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=sale&action=list' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='THÔNG TIN KHUYẾN MÃI' />
        </form>
        
    </div>
</div>