<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Đăng ký thông tin
</div>



<?php			
	if($result == TRUE){		
		$_SESSION['ses_username'] = $_POST['input_text_username'];
		$_SESSION['ses_level'] = "user";
		echo "
			<div class='label_content'>
				Kết quả đăng ký
			</div>
			<div class='form'>
				<div class='result_form'>
					<div class='result_success'><b>Đăng ký thông tin thành công.</b></div><br />
										
					<div class='hello_new_mem'><b>Xin chào, " . $gv_class_user->get_Lastname() . $gv_class_user->get_Firstname() . "!</b></div><br />
					
					Giờ đây, bạn đã sẵn sàng tìm kiếm, đặt mua và chia sẻ trên nhiều sản phẩm của GDS-Store. <br /><br />
					
					Hãy kiểm tra tài khoản mới của bạn ở phía trên bên phải, bằng cách nhấp vào các liên kết: <br />
					- Giỏ hàng để kiểm tra những sản phẩm bạn đặt mua.<br />
					- Thông tin cá nhân để xem và điều chỉnh thông tin của bạn, điều này sẽ thuận tiện hơn khi giao dịch với chúng tôi. <br />
					- Đổi mật khẩu nếu bạn muốn thay đổi mật khẩu hiện tại, bạn nên thường xuyên thay đổi mật khẩu để đảm bảo tính bảo mật và an toàn cho bạn.
					<br />
					<br />
					Tài khoản mới của bạn là: <b class='new_account'>". $gv_class_user->get_Username() ."</b>.</br>
					<br />
					Cảm ơn bạn đã tạo tài khoản. Chúc bạn vui vẻ!<br /><br />";
					?>
					<a href="<?php echo $url;?>gdsstore.html">
						<input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
					</a>
				</div>
			</div>
<?php			
	}else{?>
		<div class="label_content" style="color: #f00;">
            Kết quả đăng ký
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'  style="color: #f00;">Tài khoản đã tồn tại!
                <br />Hãy thử lại một lần nữa với tên đăng nhập khác.</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến trang Đăng ký sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Đăng ký nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_reg.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <a href="javascript:history.go(-1)">
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='Đăng ký' />
                </a>
                
            </div>
        </div>		

<?php
	}
?>