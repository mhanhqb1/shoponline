<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Tin tức mới nhất
    > Thảo luận
</div>

<div class="label_content"><div class="red_info">
	Kết quả gửi ý kiến nhận xét
</div></div>

<div class='form'>
    <div class='result_form'>
    	<?php
        	if(isset($email_err)){
				echo "<div class='result_success'><div class='red_info'>Email không hợp lệ, vui lòng nhập lại!</div></div> <br />";	
			}
			
			if(isset($code_err)){
				echo "<div class='result_success'><div class='red_info'>Mã an toàn không chính xác, vui lòng nhập lại!</div></div> <br />";	
			}
		?>
        
        <div class="wait">
            Quý khách sẽ được chuyển đến trang Tin tức mới nhất sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Tin tức mới nhất nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_back_page.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
         <a href="javascript:history.go(-1)"><input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TIN TỨC MỚI NHẤT' /></a>
       
        
    </div>
</div>