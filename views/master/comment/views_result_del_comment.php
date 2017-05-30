<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=details&mid=<?php echo $mid;?>">Chi tiết sản phẩm</a>
    > Xóa nhận xét
</div>

<div class="label_content">
	Kết quả xóa bài nhận xét
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Bài nhận xét đã được xóa khỏi cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Quý khách sẽ được chuyển đến trang Chi tiết sản phẩm sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Chi tiết sản phẩm nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_details_prod.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=product&action=details&mid=<?php echo $mid;?>' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='CHI TIẾT SẢN PHẨM' />
        </form>
        
    </div>
</div>