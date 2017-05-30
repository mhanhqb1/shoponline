<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=list_user">Quản lý khách hàng</a>
    > Điều chỉnh thông tin
</div>

<div class="label_content">
	Kết quả xóa tài khoản
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Tài khoản đã được xóa khỏi cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang quản lý tài khoản sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý tài khoản nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_listuser.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=user&function=list_user' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ TÀI KHOẢN' />
        </form>
        
    </div>
</div>