<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}


	function show_comfirm_edit_ddh(ddh)
	{
		window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=order&function=edit&ddh="+ddh;	
	}
	
	function show_comfirm_del_ddh_complete(ddh)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Đơn đặt hàng số: \""+ ddh +"\" không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=order&function=del_complete&ddh="+ddh;	
		}
	}

</script>


<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý đơn đặt hàng đã thanh toán
</div>

<div class="label_content">
	Tìm kiếm và điều chỉnh thông tin
</div>


<?php 
	if($show_order != FALSE){
		
?>
	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=order&function=search_complete" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="tennguoimua" checked /> Tên khách hàng &nbsp;
                        <input type="radio" name="rdo_search" value="email" /> Email &nbsp;
                        <input type="radio" name="rdo_search" value="cmnd" /> CMND &nbsp;
                        <input type="radio" name="rdo_search" value="dienthoai" /> Điện thoại &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br /><br /><br /><br />
        	<h3>DANH SÁCH ĐƠN ĐẶT HÀNG ĐÃ THANH TOÁN</h3>   
            <br />     
        </div>
	</form>
        
        
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 30px;'>MHD</td>
					<td style='width: 380px;'>Khách hàng</td>
					<td style='width: 90px;'>Sản phẩm</td>
					<td style='width: 100x;'>Ngày giao</td>
					<td style='width: 30px;'>Xóa</td>
				</tr>
                <?php
					
					foreach($show_order as $item){
						$stt = 1;
						echo "
						<tr  style='font-size:11px;'>
							<td style='background:#F3F3F3;'>$item[mahoadon]</td>
							
							<td>
								<div style='margin-bottom: 3px; padding-bottom: 3px; border-bottom: 1px solid #ccc;'>$item[tennguoimua]</div>
								<div style='margin-bottom: 3px; padding-bottom: 3px; border-bottom: 1px solid #ccc;''>$item[email]</div>
								<div style='margin-bottom: 3px; padding-bottom: 3px; border-bottom: 1px solid #ccc;''>$item[dienthoai]</div>
								<div>$item[diachi]</div>
							</td>
							
							<td style='text-align: left; padding: 0 15px 0 15px;'>";
								foreach($item['sanpham'] as $info){
									echo $stt++ . ". " .$info['mid'] ."<div style='float: right;'>". $info['soluong'] .  "</div><br />";
								}
							
							echo "</td>";
                ?>        
                		
                        <td>
                            <?php
                            	echo $item['ngaygiao'];
							?>
                        </td>
                        
                        <td>
                            <input class="btn_del_one" type="button" onclick="show_comfirm_del_ddh_complete('<?php echo $item['mahoadon']; ?>');" value="" title="Xóa đơn đặt hàng" />
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
		<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=search" method="post">
            <div id="master_search" style="text-align:center; color: #000;">
            	<br />
                <h3>DANH SÁCH ĐƠN ĐẶT HÀNG</h3>   
                <br />     
            </div>
		</form>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br />Không tìm thấy kết quả nào!</div>
<?php
	}
?>