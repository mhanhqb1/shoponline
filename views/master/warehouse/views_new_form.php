<script type="text/javascript">
	function Warning_new(){ 
	//return true;  
		var x = document.frmNew;
		
		if(x.txt_mid.value.length <1){ 
			alert("\"Mã số sản phẩm\" không được để trống!"); x.txt_mid.focus(); return false; 
		}
		
		if(x.txt_qt.value < 1) {
			alert("Vui lòng nhập số lượng sản phẩm nhập vào kho!"); x.txt_qt.focus(); return false; 
		}
    }
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý thông tin kho
</div>

<div class="label_content">
	Thêm sản phẩm mới vào kho
</div>

<div class="form">
	<form name="frmNew" onsubmit="return Warning_new()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=warehouse&function=add_new" method="post" >
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Sản phẩm</u></td>
            </tr>
            
        	<tr>
            	<td><label>Mã số sản phẩm:</label></td>
                <td><input type="text" class="input_text" id="txt_mid" name="txt_mid" /></td>
            </tr>
            
            <tr>
            	<td><label>Số lượng:</label></td>
                <td><input type="text" class="input_text" id="txt_qt" name="txt_qt" /></td>
                <td>(Thông tin bắt buộc)</td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td></td>
                <td><input type="submit" class="button" name="btn_confirm" id="btn_confirm" value="Xác nhận" style="float: right;" /></td>
            </tr> 
                               
        </table>
        
    </form>
</div>