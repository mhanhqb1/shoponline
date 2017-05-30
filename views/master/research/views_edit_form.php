
<script type="text/javascript">
	function Warning_reg(){ 
	//return true;  
		var x = document.frmRegister;
				
		if(x.txt_quest.value.length < 1 || x.txt_idea1.value.length < 1 || x.txt_idea2.value.length < 1 || x.txt_idea3.value.length < 1) {
			alert("Vui lòng điền đầy đủ thông tin!"); return false; 
		}
    }
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Khảo sát thông tin
</div>

<div class="label_content">
	Khảo sát mới
</div>

<div class="form">
	<form name="frmRegister" onsubmit="return Warning_reg()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=research&function=edit_confirm" method="post" >
    	<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Thông tin</u></td>
            </tr>
                        
            <tr>
            	<td><label>Nội dung câu hỏi:</label></td>
                <td><input type="text" class="input_text" id="txt_name" name="txt_quest" value="<?php echo $data['question'] ?>" /></td>
                
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td class="blue_info"><u>Mức độ</u></td>
            </tr>
            
            <tr>
            	<td><label>Ý kiến 1:</label></td>
                <td><input type="text" class="input_text" id="txt_name" name="txt_idea1" value="<?php echo $data['hight'] ?>" /></td>
                <td>Vd: Tốt</td>
            </tr>
            
            <tr>
            	<td><label>Ý kiến 2:</label></td>
                <td><input type="text" class="input_text" id="txt_name" name="txt_idea2" value="<?php echo $data['midium'] ?>" /></td>
                <td>Vd: Khá</td>
            </tr>
            
            <tr>
            	<td><label>Ý kiến 3:</label></td>
                <td><input type="text" class="input_text" id="txt_name" name="txt_idea3" value="<?php echo $data['low'] ?>" /></td>
                <td>Vd: Trung bình</td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td class="blue_info"><u>Tình trạng</u></td>
            </tr>
            
            <tr>
            	<td><label>Thực hiện khảo sát?&nbsp;&nbsp;&nbsp;</label></td>
                <td><p>
                  <label>
                    <input name="rdo_status" type="radio" id="rdo_status_0" value="1" <?php if($data['status'] == 1){?>checked="checked" <?php }?> />
                    Tiến hành</label>&nbsp;&nbsp;
                  <label>
                    <input type="radio" name="rdo_status" value="0" id="rdo_status_1" <?php if($data['status'] == 0){?>checked="checked" <?php }?> />
                    Dự thảo</label>
                  <br />
                </p></td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr>  
            
            <tr>
            	<td><input type="text" class="input_text" id="txt_name" name="txt_id" value="<?php echo $data['id'] ?>" style="display:none;" /></td>
                <td><input type="submit" class="button" name="btn_comfirm" id="btn_comfirm" value="Xác nhận" /></td>
            </tr>  
            
                               
        </table>        
    </form>
    
</div>