<script type="text/javascript">
	function show_comfirm_del_product_in_compare(no)
	{
		var comfirmBox;
		comfirmBox = confirm("Không so sánh sản phẩm này nữa?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $url;?>xoa-so-sanh-san-pham/"+no+".html";	
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > So sánh
</div>

<div class="label_content">
	So sánh sản phẩm
</div>


<div id="detail_product">
<?php
	if($info != FALSE && $data != FALSE){
	foreach($info as $mathang){
		$tenmh = $mathang['tenmh'];		
		$hinhanh = $mathang['hinhanh'];
		$dongia = $mathang['dongia'];
	}
	
	foreach($data as $item){
		?>
							<div class='techspec'>							
							
							<div class='compare'>
                            
                            <div class='techspec_small' style='text-align:center; background: #fff;'>
								<table>
									<tr>
										<td class='dt_left'></td> 
										<td class='dt_right' style='font-weight: bold; font-style: normal;'>
											<?php 
												$tenmh1 = unicode_convert($tenmh);
												echo "<a style='color: #09f;' href='".$url."chi-tiet-san-pham/$tenmh1/$item[mid].html'>$tenmh</a>";
												?>                                        
                                        </td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($info1 as $item1){
														$item11['tenmh'] = unicode_convert($item1['tenmh']);
														echo "<td class='dt_right' style='font-weight: bold; font-style: normal;'>
																<a style='color: #09f;' href='".$url."chi-tiet-san-pham/$item11[tenmh]/$item1[mid].html'>$item1[tenmh]</a>
																</td>";
													}
												}
											}
										?>
									</tr>
                                    
                                    <tr>
                                    	<td class='dt_left' style='text-align: center;'>
											<img src='templates/01/images/scales.png' />
                                        </td>
                                        
										<td class='dt_right'>
                                        	<?php 
												$tenmh1 = unicode_convert($tenmh);
												echo "<a style='color: #09f;' href='".$url."chi-tiet-san-pham/$tenmh1/$item[mid].html'>";?>
                                        		<img src='<?php echo $hinhanh;?>' />
                                        	<?php echo "</a>";?>
                                        </td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($info1 as $item1){
														$item11['tenmh'] = unicode_convert($item1['tenmh']);
														echo "<td class='dt_right'><a style='color: #09f;' href='".$url."chi-tiet-san-pham/$item11[tenmh]/$item1[mid].html'><img src='$item1[hinhanh]' /></a></td>";
													}
												}
											}
										?>
									</tr>
                                    
                                    <tr>
                                    	<td class='dt_left'></td>
										<td class='dt_right' style='color: red; font-style: normal;'>Giá: <?php echo number_format($dongia,0,',',',');?> VNĐ </td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($info1 as $item1){
														echo "<td class='dt_right' style='color: red; font-style: normal;'>Giá: ".number_format($item1['dongia'],0,',',',')." VNĐ</td>";
													}
												}
											}
										?>
									</tr>
                                    
                                    <tr>
                                    	<td class='dt_left'></td>
										<td class='dt_right' style='color: red; font-style: normal;'>
											<input class="btn_del_trash" type="button" onclick="show_comfirm_del_product_in_compare('1');" value="" title="Không so sánh với sản phẩm này nữa">		
                                        </td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($info1 as $item1){
														echo "<td class='dt_right'>";?>
															<input class="btn_del_trash" type="button" onclick="show_comfirm_del_product_in_compare('2');" value="" title="Không so sánh với sản phẩm này nữa">		
														<?php
                                                        echo "</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 500px;' /></div>
                            
							<div class='techspec_small'>
								<div class='over_info'>Tổng quan</div>
								<table>
									<tr>
										<td class='dt_left'> Mạng</td> 
										<td class='dt_right'><?php echo $item['Network'];?> </td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Network]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Màu sắc</td> 
										<td class='dt_right'><?php echo $item['Color'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Color]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Kích thước / trọng lượng</td> 
										<td class='dt_right'><?php echo $item['Dimensionsweight'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Dimensionsweight]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Hiển thị</div>
								<table>
									<tr>
										<td class='dt_left'> Ngôn ngữ</td> 
										<td class='dt_right'><?php echo $item['Language'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Language]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Loại màn hình</td> 
										<td class='dt_right'><?php echo $item['Typeofscreen'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Typeofscreen]</td>";
													}
												}
											}
										?>
									</tr><tr>
										<td class='dt_left'> Kích thước hiển thị</td> 
										<td class='dt_right'><?php echo $item['Displaysize'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Displaysize]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Đặc điểm</div>
								<table>
									<tr>
										<td class='dt_left'> Kiểu chuông</td> 
										<td class='dt_right'><?php echo $item['Ringingtone'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Ringingtone]</td>";
													}
												}
											}
										?>
									</tr><tr>
										<td class='dt_left'> Tin nhắn</td> 
										<td class='dt_right'><?php echo $item['Messages'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Messages]</td>";
													}
												}
											}
										?>
									</tr><tr>
										<td class='dt_left'> Kết nối</td> 
										<td class='dt_right'><?php echo $item['Connect'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Connect]</td>";
													}
												}
											}
										?>
									</tr><tr>
										<td class='dt_left'> Camera</td> 
										<td class='dt_right'><?php echo $item['Camera'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Camera]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Lưu trữ</div>
								<table>
									<tr>
										<td class='dt_left'> Danh bạ</td> 
										<td class='dt_right'><?php echo $item['Contacts'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Contacts]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Bộ nhớ trong</td> 
										<td class='dt_right'><?php echo $item['Memory'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Memory]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Thẻ nhớ</td> 
										<td class='dt_right'><?php echo $item['Memorycard'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Memorycard]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Thông tin khác</div>
								<table>
									<tr>
										<td class='dt_left'> Tải nhạc</td> 
										<td class='dt_right'><?php echo $item['Downloadmusic'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Downloadmusic]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Rung</td> 
										<td class='dt_right'><?php echo $item['Vibrate'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Vibrate]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> GPRS</td> 
										<td class='dt_right'><?php echo $item['GPRS'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[GPRS]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> HSCSD</td> 
										<td class='dt_right'><?php echo $item['HSCSD'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[HSCSD]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> EDGE</td> 
										<td class='dt_right'><?php echo $item['EDGE'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[EDGE]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> 3G</td> 
										<td class='dt_right'><?php echo $item['3G'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>".$item1['3G']."</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> WLAN</td> 
										<td class='dt_right'><?php echo $item['WLAN'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[WLAN]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Hệ điều hành</td> 
										<td class='dt_right'><?php echo $item['OS'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[OS]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Đồng hồ</td> 
										<td class='dt_right'><?php echo $item['Clock'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Clock]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Báo thức</td> 
										<td class='dt_right'><?php echo $item['Alarms'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Alarms]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Đài FM</td> 
										<td class='dt_right'><?php echo $item['FM'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[FM]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Trò chơi</td> 
										<td class='dt_right'><?php echo $item['Games'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Games]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Trình duyệt</td> 
										<td class='dt_right'><?php echo $item['Browser'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Browser]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Java</td> 
										<td class='dt_right'><?php echo $item['Java'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Java]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Quay phim</td> 
										<td class='dt_right'><?php echo $item['Film'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Film]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Ghi âm</td> 
										<td class='dt_right'><?php echo $item['Recording'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Recording]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Nghe nhạc</td> 
										<td class='dt_right'><?php echo $item['Listentomusic'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Listentomusic]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Xem phim</td> 
										<td class='dt_right'><?php echo $item['Watchingmovies'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Watchingmovies]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Ghi âm cuộc gọi</td> 
										<td class='dt_right'><?php echo $item['Callrecording'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Callrecording]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Loa ngoài</td> 
										<td class='dt_right'><?php echo $item['Speakerphone'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Speakerphone]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Pin</div>
								<table>
									<tr>
										<td class='dt_left'> Loại pin</td> 
										<td class='dt_right'><?php echo $item['Typeofbattery'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Typeofbattery]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Thời gian chờ</td> 
										<td class='dt_right'><?php echo $item['Standbytime'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Standbytime]</td>";
													}
												}
											}
										?>
									</tr>
									<tr>
										<td class='dt_left'> Thời gian đàm thoại</td> 
										<td class='dt_right'><?php echo $item['Talktime'];?></td>
                                        <?php
                                        	if(isset($data1)){
												if($data1 != FALSE){
													foreach($data1 as $item1){
														echo "<td class='dt_right'>$item1[Talktime]</td>";
													}
												}
											}
										?>
									</tr>
								</table>
							</div>
							
						</div>
						</ul>
			</div></div>
            <?php
			
	}
	}else{
		echo "
		<div class='techspec'>
			<div class='techspec_small' style='text-align: center;'>
				<img src='templates/01/images/not_found.png'>
				<div class='over_info' style='margin: 10px;'>Không có sản phẩm nào được lựa chọn</div>
			</div>
		</div>
			";
	}
?>
</div>
<br />