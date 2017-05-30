<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=warehouse&function=new">Thêm sản phẩm mới vào kho</a>
</div>



<?php
	if($check == 'ok'){
?>
		<div class="label_content">
            Kết quả thêm sản phẩm mới
        </div>
        <div class='form'>
            <div class='result_form'>
                <div class='result_success'>Sản phẩm đã được thêm vào kho thành công!</div> <br />
                <div class="wait">
                    Bạn sẽ được chuyển đến trang Thêm sản phẩm mới vào kho sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Thêm sản phẩm mới vào kho nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_addnew_warehouse.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=warehouse&function=new' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='THÊM SẢN PHẨM MỚI VÀO KHO' />
                </form>
                
            </div>
        </div>
<?php
	}else{
?>
		<div class="label_content" style="color:#f00;">
            Kết quả thêm sản phẩm mới
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_err' style="color:#f00;">Mã sản phẩm đã tồn tại vui lòng kiểm tra lại!</div> <br />
                <div class="wait">
                    Bạn sẽ được chuyển đến trang Thêm sản phẩm mới vào kho sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Thêm sản phẩm mới vào kho nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_addnew_warehouse.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=warehouse&function=new' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='THÊM SẢN PHẨM MỚI VÀO KHO' />
                </form>
                
            </div>
        </div>

<?php
	}
?>