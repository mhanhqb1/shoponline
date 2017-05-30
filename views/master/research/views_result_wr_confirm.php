<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=research&function=wr">Khảo sát thông tin</a>
    > Khảo sát mới
</div>

<div class="label_content">
	Kết quả đăng bài khảo sát
</div>

<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Câu hỏi đã được cập nhật vào cơ sở dữ liệu thành công!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Khảo sát thông tin sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Khảo sát thông tin nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_current_research.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=research&action=send' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='KHẢO SÁT THÔNG TIN' />
        </form>
        
    </div>
</div>