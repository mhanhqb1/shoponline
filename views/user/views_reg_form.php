
<script type="text/javascript">
	function Warning_reg(){ 
	//return true;  
		var x = document.frmRegister;
		
		if(x.input_text_username.value.length <6 || x.input_text_username.value.length > 15){ 
			alert("Vui lòng điền vào ô \"Tên đăng nhập\" từ 6-15 ký tự!"); x.input_text_username.focus(); return false; 
		}
		
		if(x.input_text_password.value.length < 4) {
			alert("Vui lòng điền vào ô \"Mật khẩu\" từ 4 ký tự trở lên!"); x.input_text_password.focus(); return false; 
		}
		
		if(x.input_text_password.value != x.input_text_password2.value) {
			alert("2 ô \"Mật khẩu\" không giống nhau, vui lòng kiểm tra lại!"); x.input_text_password2.focus(); return false; 
		}
		
		if(x.input_text_email.value.length < 1) {
			alert("\"Email\" không được để trống!"); x.input_text_email.focus(); return false; 
		}
		
		if(x.input_text_email.value != x.input_text_email2.value) {
			alert("2 ô \"Email\" không giống nhau, vui lòng kiểm tra lại!"); x.input_text_email2.focus(); return false; 
		}
		
		if(x.input_text_firstname.value.length < 1) {
			alert("\"Tên\" không được để trống!"); x.input_text_firstname.focus(); return false; 
		}
		
		if(x.input_text_lastname.value.length < 1) {
			alert("\"Họ\" không được để trống!"); x.input_text_lastname.focus(); return false; 
		}
		
		if(x.input_text_idnum.value.length < 1) {
			alert("\"Số CMND\" không được để trống!"); x.input_text_idnum.focus(); return false; 
		}
		
		if(x.select_day.value == "none") {
			alert("Vui lòng chọn \"Ngày sinh\"!"); x.select_day.focus(); return false; 
		}
		
		if(x.select_month.value == "none") {
			alert("Vui lòng chọn \"Tháng sinh\"!"); x.select_month.focus(); return false; 
		}
		
		if(x.input_text_year.value.length < 4 || x.input_text_year.value == "Năm") {
			alert("Vui lòng nhập lại \"Năm sinh\"!"); x.input_text_year.focus(); return false; 
		}
		
		if(x.input_text_address.value.length < 1) {
			alert("\"Địa chỉ\" không được để trống!"); x.input_text_address.focus(); return false; 
		}
		
		if(x.input_text_phonenumber.value.length < 1) {
			alert("\"Số điện thoại\" không được để trống!"); x.input_text_phonenumber.focus(); return false; 
		}
    }
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Đăng ký thông tin
</div>

<div class="label_content">
	Đăng ký thông tin
</div>

<div class="form">
	<form name="frmRegister" onsubmit="return Warning_reg()" action="<?php echo $url; ?>gui-thong-tin-dang-ky-tai-khoan.html" method="post" >
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Tài khoản</u></td>
            </tr>
            
        	<tr>
            	<td><label>Tên đăng nhập:</label></td>
                <td><input type="text" class="input_text" id="input_text_username" name="input_text_username" /></td>
                <td>(Nhập 6 - 15 ký tự, trừ ký tự đặc biệt)</td>
            </tr>
            
            <tr>
            	<td><label>Mật khẩu:</label></td>
                <td><input type="password" class="input_text" id="input_text_password" name="input_text_password" /></td>
                <td>(Nhập 4 - 32 ký tự)</td>
            </tr>
            
            <tr>
            	<td><label>Nhập lại mật khẩu:</label></td>
                <td><input type="password" class="input_text" id="input_text_password2" name="input_text_password2" /></td>
            </tr>
            
            <tr>
            	<td><label>Email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email" name="input_text_email" /></td>
                <td>(VD: abc@hostname.com)</td>
            </tr>
            
            <tr>
            	<td><label>Nhập lại email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email2" name="input_text_email2" /></td>
            </tr>
            
            
            <tr>
            	<td>&nbsp;</td>
            </tr>
            
            <tr>
            	<td class="blue_info"><u>Cá nhân</u></td>
            </tr>
            
        	<tr>
            	<td><label>Tên:</label></td>
                <td><input type="text" class="input_text" id="input_text_firstname" name="input_text_firstname" /></td>
            </tr>
            
            <tr>
            	<td><label>Họ:</label></td>
                <td><input type="text" class="input_text" id="input_text_lastname" name="input_text_lastname" /></td>
            </tr>
            
            <tr>
            	<td><label>Số CMND:</label></td>
                <td><input type="text" class="input_text" id="input_text_idnum" name="input_text_idnum" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <tr>
            	<td><label>Ngày sinh:</label></td>
            	<td>
                    <select name="select_day" class="select_day">
                        <option selected="selected" value="none">Ngày</option>
                        <?php 
							for($d=1; $d<=31; $d++){
                        		echo "<option value='$d'>$d</option>";
                    		}
						?>
                    </select>
                    <select name="select_month" class="select_month">
                        <option selected="selected" value="none" >Tháng</option>
                        <?php 
							for($m=1; $m<=12; $m++){
                        		echo "<option value='$m'>Tháng $m</option>";
                    		}
						?>
                    </select>
                    <input class="input_text" type="text" name="input_text_year" id="input_text_year" style=" width: 36px;" onclick="this.value=''" onblur="if(this.value=='') this.value='Năm'" value="Năm" onkeydown='return chinhapso(event)' />
                </td>
            </tr>
            
            <tr>
            	<td><label>Giới tính:</label></td>
                <td> 
                	<div class="rdo">
                        <input type="radio" name="rdo_sex" value="Male" checked /> Nam
                        <input type="radio" name="rdo_sex" value="Female" /> Nữ
                    </div>
                </td>
            </tr>
            <tr> 
            	<td><label>Địa chỉ:</label></td>
                <td><input class="input_text" type="text" name="input_text_address" id="input_text_address" /></td>
            </tr>
            <tr>	
            	<td><label>Số điện thoại:</label></td>
                <td><input class="input_text" type="text" name="input_text_phonenumber" id="input_text_phonenumber" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td></td>
                <td><input type="submit" class="button" name="btn_reg_username" id="btn_reg_username" value="Đăng ký" /></td>
            </tr>                     
        </table>
        
    </form>
</div>