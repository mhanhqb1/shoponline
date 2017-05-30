<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > <a href="<?php echo $url; ?>lien-he.html">Liên hệ</a>
    > Gửi ý kiến
</div>

<div class="label_content"><div class="red_info">
	Kết quả
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
            Quý khách sẽ được chuyển đến trang Liên hệ sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Liên hệ nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_back_page.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
         <a href="javascript:history.go(-1)"><input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='LIÊN HỆ' /></a>
       
        
    </div>
</div>