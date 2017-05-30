<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Tìm kiếm sản phẩm
</div>

<div class="label_content">
	Kết quả tìm kiếm
</div>

<div id="master_search" style="text-align:center; color: #000;">
    <h3>Tìm kiếm</h3><br />
    <img src="templates/01/images/network_utility128.png" /><br /><br />
    
    <h3>DANH SÁCH SẢN PHẨM</h3>   
    <br />     
</div>

<?php

	if($data != FALSE){
		echo "<div id='show_cart'><table>";
					echo "<tr id='head_showcart'>
						<td style='width: 80px;'>Hình ảnh</td>
						<td style='width: 200px;'>Tên sản phẩm</td>
						<td style='width: 150px;'>Đơn giá</td>
						<td style='width: 190px;'>Tùy chọn</td></tr>";
						foreach($data as $item){
							$tenmh = unicode_convert($item['tenmh']);
				echo "
						<tr>
							<td><div style='vertical-align: middle;' class='list_product_hinhanh'><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html' ;'><img src='$item[hinhanh]'  /></a></div></td>
							
							<td><div class='list_product_tenmh'  ><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html' style='color: #333;'>$item[tenmh]</a></div></td>
						
							<td><div class='list_product_gia' style='margin-top: -3px;'>".number_format($item['dongia'],0,'.','.')." VNĐ</div></td>
							
							<td>
							<div class='list_product_addtocart'  style='margin: 5px -40px 0 40px; color: #333;'><a href='".$url."them-san-pham-vao-gio/$tenmh/$item[mid].html' style='color: #333;'>Thêm vào giỏ &nbsp;</a></div>
							<div class='list_product_addtocart_img'  style='margin: -7px 0 0 0;'><a href='".$url."them-san-pham-vao-gio/$tenmh/$item[mid].html'><img src='templates/01/images/addtocart.png' /></a></div>
							<br />
							<a class='blue_info_details' href='so-sanh-san-pham/$item[mid].html'>So sánh sản phẩm</a>							
							</td>
						</tr>";	
		}
						
		echo "</table></div>";	
	}else{
		echo "
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br />Không tìm thấy kết quả nào!</div>";
	}
	
?>