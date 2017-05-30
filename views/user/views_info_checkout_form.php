
<script type="text/javascript">
	function Warning_order(){ 
	//return true;  
		var x = document.frmRegister;
						
		
		if(x.input_text_firstname.value.length < 1) {
			alert("\"Họ Tên\" không được để trống!"); x.input_text_firstname.focus(); return false; 
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
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > <a href="<?php echo $url;?>gio-hang.html">Giỏ hàng của bạn</a> 
    > Thanh toán hóa đơn
</div>

<div class="label_content">
	Thông tin giao dịch
</div>

<div class="form">
	<form name="frmRegister" onsubmit="return Warning_order()" action="<?php echo $url; ?>mua-san-pham.html" method="post" >
    	
        <table cellspacing="7px" >
        	            
            <tr>
            	<td class="blue_info"><u>Khách hàng</u></td>
            </tr>
            
            
        	<tr>
            	<td><label>Tên người nhận:</label></td>
                <td><input type="text" class="input_text" id="input_text_firstname" name="input_text_firstname" value="<?php echo $hoten; ?>" /></td>
            </tr>
                        
            <tr>
            	<td><label>Email:</label></td>
                <td><input type="text" class="input_text" id="input_text_email" name="input_text_email" value="<?php echo $email; ?>" /></td>
                <td>(Có thể bỏ qua mục này)</td>
            </tr>
            
            <tr>
            	<td><label>Số CMND:</label></td>
                <td><input type="text" class="input_text" id="input_text_idnum" name="input_text_idnum" value="<?php echo $cmnd; ?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
                                    
            <tr> 
            	<td><label>Địa chỉ:</label></td>
                <td><input class="input_text" type="text" name="input_text_address" id="input_text_address" value="<?php echo $diachi; ?>" /></td>
            </tr>
            <tr>	
            	<td><label>Số điện thoại:</label></td>
                <td><input class="input_text" type="text" name="input_text_phonenumber" id="input_text_phonenumber" value="<?php echo $dienthoai; ?>" onkeydown='return chinhapso(event)' /></td>
            </tr>
            
            <tr>
            	<td><div style="height:10px;"></div></td>
            </tr>  
            
            <tr>
            	<td class="blue_info"><u>Thanh toán tại nhà</u></td>
            </tr>
            
            <tr>
            	<td></td>
                <td> 
                	<div class="rdo">
                        <input type="radio" name="rdo_pttt" value="home" checked /> &nbsp; 
                        <img src="templates/01/images/home.png" style="margin:0 0 -20px 0;" />
                        <br /><br /><br />
                        <input type="submit" class="button" name="btn_confirm_checkout" id="btn_confirm_checkout" value="Xác nhận" style="float:left; margin-left: 30px;" />
                        
                        
                        <!--<input type="radio" name="rdo_pttt" value="card" /> &nbsp;&nbsp; <img src="templates/01/images/creditcard.png" style="margin:0 0 -20px 0;" /> Chuyển khoản-->
                    </div>                    
                </td>
            </tr>        
                        
            
            <tr>
            	<td class="blue_info"><u>Thanh toán trực tuyến</u></td>
            </tr>
            
            <tr>
            	<td></td>
                <td> 
                	<a href="https://www.nganluong.vn/button_payment.php?receiver=gds.gradeus@gmail.com&product_name=Nokia N9&price=2000&return_url=http://gradeus.comyr.com/&comments=Test!" onclick="return Warning_order();" ><img src="https://www.nganluong.vn/data/images/buttons/11.gif"  border="0" /></a>                  
                </td>
            </tr>      
            
            
                               
        </table>
        
    </form>
</div>