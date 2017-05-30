
<script type="text/javascript">
	function Warning_edit(){ 
	//return true;  
		var x = document.frmEditorder;
		
		if(x.input_text_email.value.length < 1) {
			alert("\"Email\" không được để trống!"); x.input_text_email.focus(); return false; 
		}
		
		if(x.input_text_firstname.value.length < 1) {
			alert("\"Tên\" không được để trống!"); x.input_text_firstname.focus(); return false; 
		}
	
		if(x.input_text_idnum.value.length < 1) {
			alert("\"Số CMND\" không được để trống!"); x.input_text_idnum.focus(); return false; 
		}
		
		if(x.input_text_address.value.length < 1) {
			alert("\"Địa chỉ\" không được để trống!"); x.input_text_address.focus(); return false; 
		}
		
		if(x.input_text_phonenumber.value.length < 1) {
			alert("\"Số điện thoại\" không được để trống!"); x.input_text_phonenumber.focus(); return false; 
		}
    }
	
	function Warning_edit_qt(){ 
	//return true;  
		var x = document.frmSave;
		
		if(x.txt_qt.value < 1) {
			alert("Số lượng sản phẩm ít nhất là 1!"); x.txt_qt.focus(); return false; 
		}
    }
	
	function show_comfirm_del_item_in_order(mid, uid, mahoadon)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Sản phẩm: \"" + mid +"\" không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=order&function=del_item_in_order&mid="+mid+"&uid="+uid+"&ddh="+mahoadon;	
		}
	}
	
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=order&function=list_order">Quản lý đơn đặt hàng</a>
    > Điều chỉnh thông tin
</div>

<div class="label_content">
	Cập nhật thông tin đơn đặt hàng
</div>

<?php
	if($data != FALSE){
?>
<div class="form">

	<form name="frmEditorder" onsubmit="return Warning_edit()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=order&function=edit_confirm" method="post" >
    	<input type='text' value='<?php echo $mahoadon;?>' class='txt_mid' name='txt_mhd' style='display: none;' />
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Thông tin khách hàng</u></td>
            </tr>
            
            <tr>
            	<td><label>Tên:</label></td>
                <td><input type="text" class="input_text" id="input_text_firstname" name="input_text_firstname" value="<?php echo $tennguoimua;?>" /></td>
            </tr>
            
            <tr>
            	<td><label>Số CMND:</label></td>
                <td><input type="text" class="input_text" id="input_text_idnum" name="input_text_idnum" value="<?php echo $cnmd;?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <?php 
				//$ngaysinh = explode('-',$data['ngaysinh']);
			?>
            
            
            <tr> 
            	<td><label>Địa chỉ:</label></td>
                <td><input class="input_text" type="text" name="input_text_address" id="input_text_address" value="<?php echo $diachi;?>" /></td>
            </tr>
            <tr>	
            	<td><label>Số điện thoại:</label></td>
                <td><input class="input_text" type="text" name="input_text_phonenumber" id="input_text_phonenumber" value="<?php echo $dienthoai;?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <tr>
            	<td><label>Email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email" name="input_text_email" value="<?php echo $email;?>" /></td>
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
<br />
<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 15px 0;' /></div>
<div class="label_content">
	Đơn đặt hàng
</div>

<?php
	
	echo "<div id='show_cart'><table>";
	echo "<tr id='head_showcart'><td>Hình ảnh</td><td>Tên và giá sản phẩm</td><td>Số lượng mua</td><td>Tùy chọn</td></tr>";
	$total = 0;
	foreach($info as $item){
		echo "<tr>";
		echo "
				<td class='hinhanh'><a href='".$_SERVER['PHP_SELF']."?controller=product&action=details&mid=$item[mid]' ><img src='$item[hinhanh]'  /></a></td>
				<td class='tenmh'>
					<div class='checkout_item_name' style='margin: 15px 0 -25px 0;'><a href='".$_SERVER['PHP_SELF']."?controller=product&action=details&mid=$item[mid]' >$item[mid]</a></div><br />
				
					<div class='checkout_item_name'><a href='".$_SERVER['PHP_SELF']."?controller=product&action=details&mid=$item[mid]' >$item[tenmh]</a></div><br />
					<div class='checkout_item_price'>Giá: " .number_format($item['dongia'],0,',',',')." VNĐ</div><br />
				</td>
				<td class='soluong'>
					<form name='frmSave' action='".$_SERVER['PHP_SELF']."?controller=master&action=order&function=edit_item_in_order' onsubmit='return Warning_edit_qt()' method='post'>
						<input type='text' value='$mahoadon' class='txt_mid' name='txt_mhd' style='display: none;' />
						<input type='text' value='$item[mid]' class='txt_mid' name='txt_mid' style='display: none;' />
						<input type='text' value='$item[soluong]' name='txt_qt' class='txt_soluong_mh' onkeydown='return chinhapso(event)' />
						<div class='btn_luu'><input type='submit' title='Cập nhật số lượng sản phẩm sau khi thay đổi' class='button' value='Lưu' /></div>
					</form>
				</td>
				<td class='tuychon'>";?>
					<input class="btn_del_trash" type="button" onclick="show_comfirm_del_item_in_order(<?php echo "'$item[mid]', '$uid', '$mahoadon'"; ?>);" value="" title="Xóa đơn đặt hàng" />
		<?php	
		echo "</tr>";	
		$total = $total + $item['dongia']*$item['soluong'];
		
	}				
	echo "</table></div>
	<div id='thanhtoan' style='float:right;'>
		<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 25px 3px 20px 0; float:right; width:268px;' /><br /><br />
		
		<div style='clear:right;'></div>
		
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'><td style='width: 262px;'>Tổng cộng</td></tr>
				<tr><td style='line-height: 50px; font-weight: bold; color: #333;'>".number_format($total,0,',',',')." VNĐ	</td></tr>
			</table>
		</div>
		
	</div>";	
	}else{
?>
		
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'>Đơn đặt hàng đã được xóa khỏi cơ sở dữ liệu thành công!</div> <br />
                <div class="wait">
                    Bạn sẽ được chuyển đến trang Quản lý đơn đặt hàng sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Quản lý đơn đặt hàng nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_listorder.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=order&function=list_order' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ ĐƠN ĐẶT HÀNG' />
                </form>
                
            </div>
        </div>	
<?php
	}
?>