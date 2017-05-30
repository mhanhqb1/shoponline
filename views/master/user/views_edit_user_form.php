
<script type="text/javascript">
	function Warning_edit(){ 
	//return true;  
		var x = document.frmRegister;
		
		if(x.input_text_password.value.length < 4) {
			alert("Vui lòng điền vào ô \"Mật khẩu\" từ 4 ký tự trở lên!"); x.input_text_password.focus(); return false; 
		}
		
		if(x.input_text_email.value.length < 1) {
			alert("\"Email\" không được để trống!"); x.input_text_email.focus(); return false; 
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
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=list_user">Quản lý khách hàng</a>
    > Điều chỉnh thông tin
</div>

<div class="label_content">
	Cập nhật thông tin tài khoản
</div>

<div class="form">
	<form name="frmRegister" onsubmit="return Warning_edit()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=edit_confirm" method="post" >
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Tài khoản</u></td>
            </tr>
            
        	<tr>
            	<td><label>Tên đăng nhập:</label></td>
                <td>
                	<input type="text" class="input_text" id="input_text_username" value="<?php echo $data['username']?>" disabled="disabled" />
                    <input type="text" class="input_text" id="input_text_username" name="input_text_username" value="<?php echo $data['username']?>" style="display: none;" />
                    	
                    </td>
            </tr>
            
            <tr>
            	<td><label>Cấp bậc:</label></td>
                <td>
                	<select name="select_level">
                        <?php 
							if($data['level'] == 'MASTER'){
								echo "
									<option value='MASTER' selected='selected'>Master</option>
									<option value=''>User</option>
								";
							}else{
								echo "
									<option value='MASTER' >Master</option>
									<option value='' selected='selected'>User</option>
								";	
							}
						?>
                    </select>
                </td>
            </tr>
            
            <tr>
            	<td><label>Mật khẩu:</label></td>
                <td><input type="password" class="input_text" id="input_text_password" name="input_text_password" value="<?php echo $data['password']?>" /></td>
                <td>(Nhập 4 - 32 ký tự)</td>
            </tr>
            
            
            <tr>
            	<td><label>Email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email" name="input_text_email" value="<?php echo $data['email']?>" /></td>
                <td>(VD: abc@hostname.com)</td>
            </tr>
            
            
            <tr>
            	<td>&nbsp;</td>
            </tr>
            
            <tr>
            	<td class="blue_info"><u>Cá nhân</u></td>
            </tr>
            
        	<tr>
            	<td><label>Tên:</label></td>
                <td><input type="text" class="input_text" id="input_text_firstname" name="input_text_firstname" value="<?php echo $data['ten']?>" /></td>
            </tr>
            
            <tr>
            	<td><label>Họ:</label></td>
                <td><input type="text" class="input_text" id="input_text_lastname" name="input_text_lastname" value="<?php echo $data['ho']?>" /></td>
            </tr>
            
            <tr>
            	<td><label>Số CMND:</label></td>
                <td><input type="text" class="input_text" id="input_text_idnum" name="input_text_idnum" value="<?php echo $data['cmnd']?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <?php 
				$ngaysinh = explode('-',$data['ngaysinh']);
			?>
            
            <tr>
            	<td><label>Ngày sinh:</label></td>
            	<td>
                    <select name="select_day" class="select_day">                    
                        <option value="none" >Ngày</option>
                        <?php 
							for($d=1; $d<=31; $d++){
								if($d == $ngaysinh[0]){
                        			echo "<option selected='selected' value='$d'>$d</option>";
								}else{
									echo "<option value='$d'>$d</option>";
								}
                    		}
						?>
                    </select>
                    <select name="select_month" class="select_month">
                        <option value="none" >Tháng</option>
                        <?php 
							for($m=1; $m<=12; $m++){
								if($m == $ngaysinh[1]){
                        			echo "<option selected='selected' value='$m'>Tháng $m</option>";
								}else{
									echo "<option value='$m'>Tháng $m</option>";
								}                        		
                    		}
						?>
                    </select>
                    <input class="input_text" type="text" name="input_text_year" id="input_text_year" style=" width: 36px;" onclick="this.value=''" onblur="if(this.value=='') this.value='Năm'" value="<?php echo $ngaysinh[2]; ?>" onkeydown='return chinhapso(event)' />
                </td>
            </tr>
            
            <tr>
            	<td><label>Giới tính:</label></td>
                <td> 
                	<div class="rdo">
                        <input type="radio" name="rdo_sex" value="Male" <?php if($data['gioitinh']=='Male') echo "checked"; ?> /> Nam
                        <input type="radio" name="rdo_sex" value="Female" <?php if($data['gioitinh']=='Female') echo "checked"; ?> /> Nữ
                    </div>
                </td>
            </tr>
            <tr> 
            	<td><label>Địa chỉ:</label></td>
                <td><input class="input_text" type="text" name="input_text_address" id="input_text_address" value="<?php echo $data['diachi']?>" /></td>
            </tr>
            <tr>	
            	<td><label>Số điện thoại:</label></td>
                <td><input class="input_text" type="text" name="input_text_phonenumber" id="input_text_phonenumber" value="<?php echo $data['dienthoai']?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td></td>
                <td><input type="submit" class="button" name="btn_comfirm" id="btn_comfirm" value="Xác nhận" /></td>
            </tr>                                    
        </table>
        
    </form>
</div>