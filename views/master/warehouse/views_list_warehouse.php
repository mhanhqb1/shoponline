<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}
	function show_comfirm_del(mid)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Sản phẩm có mã số: \""+ mid +"\" không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=warehouse&function=del&mid="+mid;	
		}
	}
	
	
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý kho
</div>

<div class="label_content">
	Tìm kiếm và điều chỉnh thông tin
</div>


<?php 
	if($data != FALSE){
		
?>
	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=warehouse&function=search" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="mid" checked /> Mã sản phẩm &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br /><br /><br /><br />
        	<h3>DANH SÁCH ĐƠN ĐẶT HÀNG</h3>   
            <br />     
        </div>
	</form>
        
        
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 300px;'>Mã sản phẩm</td>
					<td style='width: 300px;'>Số lượng</td>
					<td style='width: 70px;'>Tùy chọn</td>
				</tr>
                <?php
					
					foreach($data as $item){
						echo "
							<tr>
								<td>$item[mid]</td>
								<td>";
                ?>        
                					<form name="frmEdit" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=warehouse&function=edit" method="post"  >                            	
                                        <input class="input_text" type="text" name="txt_mid" style="display: none;" value="<?php echo $item['mid'];?>" />
                                        <input style="text-align:center; width: 50px; height: 22px; line-height: 12px;" class="input_text" type="text" name="txt_qt" value="<?php echo $item['soluongcon'];?>" onkeydown='return chinhapso(event)' />
                                        
                                        <input style="height: 22px; line-height: 12px;" type="submit" title="Điều chỉnh số lượng" class="button" value="Lưu">
                                        
                                    </form>
         						</td>
                        
                                <td>
                                    <input class="btn_del_one" type="button" onclick="show_comfirm_del('<?php echo $item['mid']; ?>');" value="" title="Xóa" />
                                </td>
                        
                   			</tr>
                    <?php
						}
					?>
			</table>
		</div>
   
<?php 
	}else{
?>
        <div id="master_search" style="text-align:center; color: #000;">
            <br />
            <h3>DANH SÁCH SẢN PHẨM TRONG KHO</h3>   
            <br />     
        </div>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br /><br /><br />Không tìm thấy kết quả nào!</div>
<?php
	}
?>