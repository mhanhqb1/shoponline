<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Thông tin cá nhân
</div>



<?php			
	if($result == "Done!"){	?>
        <div class="label_content">
            Kết quả thay đổi mật khẩu
        </div>
        <div class='form'>
            <div class='result_form'>
                <div class='result_success'>Mật khẩu đã được cập nhật thành công!</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến GDS-Store sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Trang chủ nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_storepage.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $url;?>gdsstore.html' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
                </form>
                
            </div>
        </div>
<?php			
	}
	if($result == "Error!"){?>
		<div class="label_content" style="color: #f00;">
            Kết quả thay đổi mật khẩu
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'  style="color: #f00;">Mật khẩu hiện tại không chính xác, xin vui lòng thử lại!</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến trang Đổi mật khẩu sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Đổi mật khẩu nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_changepass.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <a href="javascript:history.go(-1)">
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='ĐỔI MẬT KHẨU' />
                </a>
                
            </div>
        </div>	
<?php	
	}
	
	if($result == "False_email!"){?>
		<div class="label_content" style="color: #f00;">
            Kết quả lấy lại mật khẩu
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'  style="color: #f00;">Email không chính xác, xin vui lòng thử lại!</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến trang Lấy lại mật khẩu sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Lấy lại mật khẩu nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_forgot_password.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <a href="javascript:history.go(-1)">
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='LẤY LẠI MẬT KHẨU' />
                </a>
                
            </div>
        </div>			
<?php          
	}
?>


<?php	
	if($result == "not_exist"){?>
		<div class="label_content" style="color: #f00;">
            Kết quả lấy lại mật khẩu
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'  style="color: #f00;">Tài khoản không tồn tại!
                <br />Hãy thử lại một lần nữa hoặc bạn có thể đăng ký mới với tên đăng nhập này.</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến trang Lấy lại mật khẩu sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Lấy lại mật khẩu nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_forgot_password.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <a href="javascript:history.go(-1)">
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='LẤY LẠI MẬT KHẨU' />
                </a>
                
            </div>
        </div>			
<?php          
	}
?>
