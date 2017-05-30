<script type="text/javascript">
	function Warning_password(){ 
		var x = document.frmRegister;
		
		if(x.input_text_username.value.length < 1){ 
			alert("Vui lòng điền vào ô \"Tên đăng nhập\", thông tin này là bắt buộc để chúng tôi biết tài khoản của bạn có tồn tại hay không!"); x.input_text_username.focus(); return false; 
		}
				
		if(x.input_text_email.value.length < 1) {
			alert("\"Email\" không được để trống, điều này là bắt buộc để chúng tôi bảo đảm an toàn cho tài khoản!"); x.input_text_email.focus(); return false; 
		}
				
		if(x.input_text_password.value.length < 4) {
			alert("Vui lòng nhập vào ô \"Mật khẩu mới\" từ 4 ký tự trở lên!"); x.input_text_password.focus(); return false; 
		}
		
		if(x.input_text_password.value != x.input_text_password2.value) {
			alert("Hãy nhập chính xác \"Mật khẩu mới\" vào ô \"Nhập lại mật khẩu\"!"); x.input_text_password2.focus(); return false; 
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Thông tin cá nhân
</div>

<div class="label_content">
	Lấy lại mật khẩu
</div>

<div class="form">
	<form name="frmRegister" onsubmit="return Warning_password()" action="<?php echo $url;?>lay-lai-mat-khau.html" method="post" >
    	<input type="password" class="input_text" id="input_text_id" name="input_text_id" value="<?php echo $_SESSION['ses_id']; ?>" style="display: none;" />
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Kiểm tra</u></td>
            </tr>
            
            <tr>
            	<td><label>Tên tài khoản:</label></td>
                <td><input type="text" class="input_text" id="input_text_username" name="input_text_username" /></td>
            </tr>
            
            <tr>
            	<td><label>Email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email" name="input_text_email" /></td>
                <td>(Thông tin này giúp bảo vệ tài khoản.)</td>
            </tr>
            
            <tr>
            	<td>&nbsp;</td>
            </tr>
            
            <tr>
            	<td class="blue_info"><u>Cập nhật</u></td>
            </tr>
            
        	<tr>
            	<td><label>Mật khẩu mới:</label></td>
                <td><input type="password" class="input_text" id="input_text_password" name="input_text_password" /></td>
                <td>(Nhập 4 - 32 ký tự)</td>
            </tr>
            
            <tr>
            	<td><label>Nhập lại mật khẩu:</label></td>
                <td><input type="password" class="input_text" id="input_text_password2" name="input_text_password2" /></td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>
            
            <tr>
            	<td></td>
                <td><input type="submit" class="button" name="btn_confirm" id="btn_comfirm" value="Xác nhận" /></td>
            </tr> 
		</table>
	</form>
</div>