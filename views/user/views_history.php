<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Lịch sử giao dịch
</div>

<div class="label_content">
	Thông tin đơn hàng
</div>
		
    	<?php 
			$flag1 = $flag2 = 0;
			if($data == TRUE){
				foreach($data as $item){
					if($item['tinhtrang'] == "order"){
						$flag1 = 1;
					}
					if($item['tinhtrang'] == "complete"){
						$flag2 = 1;	
					}
				}
				
				echo "<div id='title_history'>Các sản phẩm đang được đặt mua</div><br />";
				if($flag1 == 1){
					echo "<div id='show_cart'><table>";
					echo "<tr id='head_showcart'>
						<td style='width: 80px;'>Hình ảnh</td>
						<td style='width: 120px;'>Tên sản phẩm</td>
						<td style='width: 20px;'>SL</td>
						<td style='width: 160px;'>Thông tin khách hàng</td>
						<td style='width: 212px;'>Thông tin giao dịch</td></tr>";
					$total = 0;
					$dongia = 0;
					foreach($data as $item){
						if($item['tinhtrang'] == "order"){	
							echo "<tr>";							
							foreach($product as $prod){
								if($prod['mid'] == $item['mid']){
									echo "<td><img src='$prod[hinhanh]' /></td>";
									echo "<td>$prod[tenmh]</td>";
									$dongia = $prod['dongia'];
								}
							}
							echo "
									<td>$item[soluong]</td>
									<td>
										<b>$item[tennguoimua]</b><br /><br />
										<b>CMND:</b> $item[cmnd]<br /><br />
										<b>ĐT:</b> $item[dienthoai]									
									</td>
									<td>	
										<b>Địa chỉ:</b> $item[diachi]<br /><br />
										<b>";
											if($item['pt_thanhtoan'] == 'home'){
												echo "Thanh toán tại nhà";
											}else{
												echo "Chuyển khoản";
											}
										echo "</b>
									</td>
								";
							echo "</tr>";
							$total = $total + ($dongia*$item['soluong']);
						}
					}
					echo "</table></div><br />";
					echo "
						<div id='show_cart' style='float: right;'>
							<table>
								<tr id='head_showcart'><td style='width: 215px;'>Tổng cộng</td></tr>
								<tr><td style='line-height: 50px; font-weight: bold; color: #333;'>".number_format($total,0,',',',')." VNĐ	</td></tr>
							</table>
						</div>
					";
				}else{
					echo "<div class='empty_history'><img src='templates/01/images/empty_cart.jpg' />";
					echo "<br />Không có sản phẩm nào đang được đặt mua!</div>";	
				}
				
				echo "<div style='clear: right; height:15px; '></div><br /><br /><br />";
				echo "<div id='title_history'>Lịch sử giao dịch</div><br />";
				if($flag2 == 1){
					echo "<div id='show_cart'><table>";
					echo "<tr id='head_showcart'>
						<td style='width: 80px;'>Hình ảnh</td>
						<td style='width: 120px;'>Tên sản phẩm</td>
						<td style='width: 20px;'>SL</td>
						<td style='width: 160px;'>Thông tin khách hàng</td>
						<td style='width: 220px;'>Thông tin giao dịch</td></tr>";
					$total = 0;
					$dongia = 0;
					foreach($data as $item){
						if($item['tinhtrang'] == "complete"){	
							echo "<tr>";							
							foreach($product as $prod){
								if($prod['mid'] == $item['mid']){
									echo "<td><img src='$prod[hinhanh]' /></td>";
									echo "<td>$prod[tenmh]</td>";
									$dongia = $prod['dongia'];
								}
							}
							echo "
									<td>$item[soluong]</td>
									<td>
										<b>$item[tennguoimua]</b><br /><br />
										<b>CMND:</b> $item[cmnd]<br /><br />
										<b>ĐT:</b> $item[dienthoai]									
									</td>
									<td>	
										<b>Ngày giao: </b>$item[ngaygiao]<br /><br />
										<b>Địa chỉ:</b> $item[diachi]<br /><br />
										<b>";
											if($item['pt_thanhtoan'] == 'home'){
												echo "Thanh toán tại nhà";
											}else{
												echo "Chuyển khoản";
											}
										echo "</b>
									</td>
								";
							echo "</tr>";
							$total = $total + ($dongia*$item['soluong']);
						}
					}
					echo "</table></div><br />";
					echo "
						<div id='show_cart' style='float: right;'>
							<table>
								<tr id='head_showcart'><td style='width: 219px;'>Tổng số tiền đã giao dịch</td></tr>
								<tr><td style='line-height: 50px; font-weight: bold; color: #333;'>".number_format($total,0,',',',')." VNĐ	</td></tr>
							</table>
						</div><br />
					";
				}else{
					echo "Hiện tại chưa có thông tin giao dịch giữa quý khách và GDS-Store!";	
				}
			}else{
				echo "
					<div style='text-align: center;'>
						<img src='templates/01/images/empty_note.png' /><br /><br />
						Hiện tại không có thông tin nào về lịch sử giao dịch giữa quý khách và GDS-Store!<br /><br />
						Rất mong nhận được sử ủng hộ từ quý khách đối với chúng tôi.
					</div>";	
			}
		?>