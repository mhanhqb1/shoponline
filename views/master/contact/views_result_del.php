<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=contact&function=list">Quản lý ý kiến khách hàng</a>
    > Xóa ý kiến
</div>


<div class="label_content">
    Kết quả xóa 
</div>
<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Ý kiến đã được xóa khỏi cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Quản lý ý kiến khách hàng sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý ý kiến khách hàng nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_contact.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=contact&function=list' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ Ý KIẾN KHÁCH HÀNG' />
        </form>
        
    </div>
</div>