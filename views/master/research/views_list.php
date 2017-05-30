<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}


	function show_comfirm_edit_ddh(id)
	{
		window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=research&function=edit&id="+id;	
	}
	
	function show_comfirm_del_ddh(id)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn Xóa câu hỏi khảo sát này không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=research&function=del&id="+id	
		}
	}
	
	
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý thông tin khảo sát
     <?php if(isset($search)) echo "> Tìm kiếm"?>
</div>

<div class="label_content">
	<?php 
		if(isset($search)){ 
			echo "Kết quả tim kiếm";
		}else{
			echo "Tìm kiếm và điều chỉnh thông tin";
		}
	?>
	
</div>


<?php 
	if($data!= FALSE){
		
?>
	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=research&function=search" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="cauhoi" checked /> Câu hỏi &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br /><br /><br /><br />
        	<h3>DANH SÁCH NỘI DUNG KHẢO SÁT</h3>   
            <br />     
        </div>
	</form>
        
        
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 30px;'>Id</td>
					<td style='width: 350px;'>Câu hỏi</td>
					<td style='width: 120px;'>Ý kiến 1</td>
                    <td style='width: 120px;'>Ý kiến 2</td>
                    <td style='width: 120px;'>Ý kiến 3</td>
                    <td style='width: 120px;'>Bắt đầu</td>
					<td style='width: 120px;'>Tùy chọn</td>
				</tr>
                <?php
					
					foreach($data as $item){
						$stt = 1;
						echo "
						<tr  style='font-size:11px;'>
							<td style='background:#F3F3F3;'>$item[id]</td>
							
							<td>
								$item[question]
							</td>
							
							<td>
								$item[hight]:<br />$item[count_hight]
							</td>
							
							<td>
								$item[midium]:<br />$item[count_midium]
							</td>
							
							<td>
								$item[low]:<br />$item[count_low]
							</td>
								
							<td>
								$item[time]
							</td>";
                ?>        
         				
                        
                        <td>                        
                        	<input class="btn_edit" type="button" onclick="show_comfirm_edit_ddh('<?php echo $item['id']; ?>');" value="" title="Điều chỉnh thông tin"  />
                            <input class="btn_del_one" type="button" onclick="show_comfirm_del_ddh('<?php echo $item['id']; ?>');" value="" title="Xóa" />
                        </td>
                        
                    </tr>
                    <?php
						}
					?>
			</table>
		</div>
   
<?php 
	}else{
		if(isset($search)){
?>
			<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=research&function=search" method="post">
                <div id="master_search" style="text-align:center; color: #000;">
                    <h3>Tìm kiếm</h3><br />
                    <img src="templates/01/images/network_utility128.png" /><br /><br />
                    <div class="rdo">
                                <input type="radio" name="rdo_search" value="cauhoi" checked /> Câu hỏi &nbsp;
                    </div>  
                    <br />
                    <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
                    <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
                    
                    <br />  <br /><br /><br /> 
                </div>
            </form>
         <?php }?>
		<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=search" method="post">
            <div id="master_search" style="text-align:center; color: #000;">
            	<br />
                <h3>DANH SÁCH NỘI DUNG KHẢO SÁT</h3>   
                <br />     
            </div>
		</form>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br />Không tìm thấy kết quả nào!</div>
<?php
	}
?>