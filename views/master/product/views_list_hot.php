

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý thông tin sản phẩm
</div>

<div class="label_content">
	ĐIỀU CHỈNH THÔNG TIN
</div>


<?php 
	if($data != FALSE){
?>
  	<div class="red_info">*Lưu ý:<br /> 
    						- Chỉ 5 sản phẩm nổi bật và 5 sản phẩm bán chạy được liệt kê. <br />
    						- Vui lòng chọn ít hơn hoặc bằng 5 sản phẩm mỗi loại.</div><br />      
    <div id='show_cart'>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=product&function=set_hot_bsb" method="post">
        <table>
            <tr id='head_showcart'>
                <td style='width: 70px;'>Mid</td>
                <td style='width: 90px;'>Hình ảnh</td>
                <td style='width: 260px;'>Tên Sản phẩm</td>
                <td style='width: 100px;'>Nổi bật</td>
                <td style='width: 100px;'>Bán chạy</td>
            </tr>
            <?php 
                foreach($data as $item){?>
                    	<tr>
							
							<td style='background: #f3f3f3;'><?php echo $item['mid'];?></td>
                            <td><img src='<?php echo $item['hinhanh'];?>' /></td>
                            <td><?php echo $item['tenmh'];?></td>
							
                            <td><input type='checkbox' name='hot_prod[]' value='<?php echo $item['mid'];?>' title='Sản phẩm nổi bật' <?php if($item['hot'] == 1) {echo "checked='checked'";}?> /></td>
							<td><input type='checkbox' name='bsb_prod[]' value='<?php echo $item['mid'];?>' title='Sản phẩm bán chạy' <?php if($item['bestbuy'] == 1) {echo "checked='checked'";}?> /></td>
                            
                            
                            
					   </tr>
				<?php
					}
				?> 
        </table>
        <br /><br />
        <input type="submit" class="button" name="btn_sethot" value="Xác nhận" />
        </form>
    </div>
   
<?php 
	}else{
?>
		<div id="master_search" style="text-align:center; color: #000;">
        	<br />
        	<h3>DANH SÁCH SẢN PHẨM</h3>   
            <br />     
        </div>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br /><br /><br />Không tìm thấy kết quả nào!</div>
<?php
    }
?>