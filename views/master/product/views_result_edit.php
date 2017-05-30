<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=product&function=list">Quản lý thông tin sản phẩm</a>
    > Tìm kiếm và điều chỉnh TT
</div>


<div class="label_content">
    Kết quả điều chỉnh thông tin
</div>
<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Sản phẩm đã được cập nhật thông tin vào cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Quản lý thông tin sản phẩm sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý thông tin sản phẩm nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_product.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=product&function=list' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ THÔNG TIN SẢN PHẨM' />
        </form>
        
    </div>
</div>