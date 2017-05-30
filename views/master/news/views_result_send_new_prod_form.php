<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>controller=master&action=news&function=wr_new_prod">Tin tức mới nhất</a> 
    > Gửi bài viết
</div>

<div class="label_content">
	Kết quả
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Bài viết đã được cập nhật vào cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Tin tức mới nhất sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút tin tức mới nhất nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_new_prod.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=new_prod&action=list' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TIN TỨC MỚI NHẤT' />
        </form>
        
    </div>
</div>