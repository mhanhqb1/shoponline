<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=news&function=list_news_sale">Quản lý thông tin khuyến mãi</a>
    > Xóa chương trình
</div>


<div class="label_content">
    Kết quả xóa chương trình
</div>
<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Chương trình khuyến mãi đã được xóa thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Quản lý thông tin khuyến mãi sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý thông tin khuyến mãi nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_config_sale.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=news&function=list_news_sale' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ THÔNG TIN KHUYẾN MÃI' />
        </form>
        
    </div>
</div>