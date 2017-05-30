<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=order&function=list_order">Quản lý đơn đặt hàng</a>
    > Tìm kiếm và điều chỉnh thông tin
</div>

<div class="label_content">
	Kết quả xác nhận thông tin đặt hàng
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Đơn đặt hàng đã được xác định thông tin thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Quản lý đơn đặt hàng sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý đơn đặt hàng nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_listorder.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=order&function=list_order' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ ĐƠN ĐẶT HÀNG' />
        </form>
        
    </div>
</div>