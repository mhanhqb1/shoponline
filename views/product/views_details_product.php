<script type="text/javascript">
	function Warning_comment(){ 
	//return true;  
		var x = document.frmComment;
		
		if(x.txt_ten.value.length <6 || x.txt_ten.value.length > 15){ 
			alert("Vui lòng điền vào ô \"Họ tên\" từ  6-15 ký tự!"); x.txt_ten.focus(); return false; 
		}
		
		
		
		if(x.txt_email.value.length <1){ 
			alert("Email không được để trống!"); x.txt_email.focus(); return false; 
		}
		
		if((x.txta_content.value == "") || (x.txta_content.value == null)){
			alert("Nội dung không được để trống!"); x.txta_content.focus(); return false; 
		}
		
		if(x.code.value.length <1){ 
			alert("Mã an toàn không được để trống!"); x.code.focus(); return false; 
		}
	}
	
	function show_comfirm_del_comment(id)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Nhận xét này không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="xoa-nhan-xet/"+id;	
			//MASTER
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Chi tiết sản phẩm
</div>

<div class="label_content">
	Tổng quan & thông số kỹ thuật
</div>

<div id="detail_product">
<?php
	foreach($info as $mathang){
		$tenmh = $mathang['tenmh'];
	}
	
	if(isset($flag_rating)){
			echo "
			<div style='text-align: center;'><img src='templates/01/images/best.png' /><br /><br />
				<font style=' color: #000; font-size: 22px;'>Sản phẩm được yêu thích nhất</font>
			</div>
			
			<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0;' /></div>
			";	
	}
		
		

	foreach($data as $item){
		if($item['Image'] == "Đang Cập Nhật"){
			echo "<div  id='img_details_product'><img src='templates/01/images/update256.png' /></div>";
		}else{
			echo "<div  id='img_details_product'><img src='$item[Image]' /></div>";
		}
			$tenmh1 = unicode_convert($tenmh);
		echo "
		<br />
			<div style='text-align: center; margin-top: 10px;'>
			<img src='templates/01/images/details (2).png' />
			<img src='templates/01/images/wave.jpg' />
			<img src='templates/01/images/details (1).png' /><br /><br />
			<a class='blue_info_details' href='so-sanh-san-pham/$item[mid].html'>So sánh sản phẩm</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class='blue_info_details' href='them-san-pham-vao-gio/$tenmh1/$item[mid].html'>Thêm vào giỏ hàng</a>
		</div>";
			
		echo "	
			<br /><div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' /></div><br />
			<div class='info_tenmh'>$tenmh</div>
			<div id='clip_details_product'>$item[Video]</div><br />	
			<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 15px 0;' /></div><br />
		
			<div id='page-wrap'>
			
				 <div id='example-two'>
							
					<ul class='nav'>
						<li class='nav-one'><a href='#featured2' class='current'>Chi tiết sản phẩm</a></li>
						<li class='nav-two'><a href='#core2'>Thảo luận, đánh giá</a></li>
					</ul>
					
					<div class='list-wrap'>
					
						<ul id='featured2'>
							<div class='techspec'>
							<div class='tenmh'>$tenmh</div>
							<div class='thongsokythuat'>Thông số kỹ thuật</div>
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' /></div><br />
							<div class='techspec_small'>
								<div class='over_info'>Tổng quan</div>
								<table>
									<tr>
										<td class='dt_left'> Mạng</td> 
										<td class='dt_right_full'> $item[Network]</td>
									</tr>
									<tr>
										<td class='dt_left'> Màu sắc</td> 
										<td class='dt_right_full'> $item[Color]</td>
									</tr>
									<tr>
										<td class='dt_left'> Kích thước / trọng lượng</td> 
										<td class='dt_right_full'> $item[Dimensionsweight]</td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Hiển thị</div>
								<table>
									<tr>
										<td class='dt_left'> Ngôn ngữ</td> 
										<td class='dt_right_full'> $item[Language]</td>
									</tr>
									<tr>
										<td class='dt_left'> Loại màn hình</td> 
										<td class='dt_right_full'> $item[Typeofscreen]</td>
									</tr><tr>
										<td class='dt_left'> Kích thước hiển thị</td> 
										<td class='dt_right_full'> $item[Displaysize]</td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Đặc điểm</div>
								<table>
									<tr>
										<td class='dt_left'> Kiểu chuông</td> 
										<td class='dt_right_full'> $item[Ringingtone]</td>
									</tr><tr>
										<td class='dt_left'> Tin nhắn</td> 
										<td class='dt_right_full'> $item[Messages]</td>
									</tr><tr>
										<td class='dt_left'> Kết nối</td> 
										<td class='dt_right_full'> $item[Connect]</td>
									</tr><tr>
										<td class='dt_left'> Camera</td> 
										<td class='dt_right_full'> $item[Camera]</td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Lưu trữ</div>
								<table>
									<tr>
										<td class='dt_left'> Danh bạ</td> 
										<td class='dt_right_full'> $item[Contacts] </td>
									</tr>
									<tr>
										<td class='dt_left'> Bộ nhớ trong</td> 
										<td class='dt_right_full'> $item[Memory] </td>
									</tr>
									<tr>
										<td class='dt_left'> Thẻ nhớ</td> 
										<td class='dt_right_full'> $item[Memorycard] </td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Thông tin khác</div>
								<table>
									<tr>
										<td class='dt_left'> Tải nhạc</td> 
										<td class='dt_right_full'> $item[Downloadmusic] </td>
									</tr>
									<tr>
										<td class='dt_left'> Rung</td> 
										<td class='dt_right_full'> $item[Vibrate] </td>
									</tr>
									<tr>
										<td class='dt_left'> GPRS</td> 
										<td class='dt_right_full'> $item[GPRS] </td>
									</tr>
									<tr>
										<td class='dt_left'> HSCSD</td> 
										<td class='dt_right_full'> $item[HSCSD] </td>
									</tr>
									<tr>
										<td class='dt_left'> EDGE</td> 
										<td class='dt_right_full'> $item[EDGE] </td>
									</tr>
									<tr>
										<td class='dt_left'> 3G</td> 
										<td class='dt_right_full'>". $item['3G'] ."</td>
									</tr>
									<tr>
										<td class='dt_left'> WLAN</td> 
										<td class='dt_right_full'> $item[WLAN] </td>
									</tr>
									<tr>
										<td class='dt_left'> Hệ điều hành</td> 
										<td class='dt_right_full'> $item[OS] </td>
									</tr>
									<tr>
										<td class='dt_left'> Đồng hồ</td> 
										<td class='dt_right_full'> $item[Clock] </td>
									</tr>
									<tr>
										<td class='dt_left'> Báo thức</td> 
										<td class='dt_right_full'> $item[Alarms] </td>
									</tr>
									<tr>
										<td class='dt_left'> Đài FM</td> 
										<td class='dt_right_full'> $item[FM] </td>
									</tr>
									<tr>
										<td class='dt_left'> Trò chơi</td> 
										<td class='dt_right_full'> $item[Games] </td>
									</tr>
									<tr>
										<td class='dt_left'> Trình duyệt</td> 
										<td class='dt_right_full'> $item[Browser] </td>
									</tr>
									<tr>
										<td class='dt_left'> Java</td> 
										<td class='dt_right_full'> $item[Java] </td>
									</tr>
									<tr>
										<td class='dt_left'> Quay phim</td> 
										<td class='dt_right_full'> $item[Film] </td>
									</tr>
									<tr>
										<td class='dt_left'> Ghi âm</td> 
										<td class='dt_right_full'> $item[Recording] </td>
									</tr>
									<tr>
										<td class='dt_left'> Nghe nhạc</td> 
										<td class='dt_right_full'> $item[Listentomusic] </td>
									</tr>
									<tr>
										<td class='dt_left'> Xem phim</td> 
										<td class='dt_right_full'> $item[Watchingmovies] </td>
									</tr>
									<tr>
										<td class='dt_left'> Ghi âm cuộc gọi</td> 
										<td class='dt_right_full'> $item[Callrecording] </td>
									</tr>
									<tr>
										<td class='dt_left'> Loa ngoài</td> 
										<td class='dt_right_full'> $item[Speakerphone] </td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Pin</div>
								<table>
									<tr>
										<td class='dt_left'> Loại pin</td> 
										<td class='dt_right_full'> $item[Typeofbattery] </td>
									</tr>
									<tr>
										<td class='dt_left'> Thời gian chờ</td> 
										<td class='dt_right_full'> $item[Standbytime] </td>
									</tr>
									<tr>
										<td class='dt_left'> Thời gian đàm thoại</td> 
										<td class='dt_right_full'> $item[Talktime] </td>
									</tr>
								</table>
							</div>
							
							<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0; width: 350px;' /></div>
							
							<div class='techspec_small'>
								<div class='over_info'>Mô tả</div>
								<table>
									<tr>
										<td>
											<br /><i>$item[Description]</i><br /><br />
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						</ul>
						 
						 <ul id='core2' class='hide'>
							<div class='form' style='background: #E9E9EA; border: none;'>
								
								<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' /></div><br />
								
								";
										if($comment == FALSE){
											echo "
													<div style='margin: 0 25px 7px 30px; text-align: center;'>
													<div class='techspec_small'>
														<div class='comment'>	
															<b>Không có bài viết nào</b>
														</div>
													</div>
													</div>";
										}else{
											foreach($comment as $item){
												echo "	
													<div style='margin: 0 25px 7px 30px;'>
													<div class='techspec_small'>
														<div class='comment'>";
														
														if(isset($_SESSION['ses_level'])){
															if($_SESSION['ses_level']  == 'MASTER'){
																?>
                                                                <input style="float: right; margin-top: 17px;" class="btn_del_trash" type="button" onclick="show_comfirm_del_comment('<?php echo "$item[id]&mid=$item[mid]";?>');" value="" title="Xóa nhận xét này" />
                                                                <?php
																
																echo "<img src='templates/01/images/here.png' style='float: right;'>";
															}
														}
														
														echo"
															
															<b>Người gửi: </b><font style='color: #09F;'>$item[ten]</font> - $item[thoigian]
															<br />
															<b>Đánh giá: </b>";
																for($i = 0; $i < 5; $i++){
																	if($i >= $item['score']){
																		echo "<img src='templates/01/images/star-off-big.png'/>";
																	}else{
																		echo "<img src='templates/01/images/star-on-big.png'/>";
																	}
																}
												echo
															"
															<br /><div style='height: 7px;'></div>
															<b>Nội dung: </b>$item[noidung]<br />
															
															
														</div>
													</div>
													</div>";
											}
										}
									echo "
									
								
								<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' /></div><br />
								<form name='frmComment' onsubmit='return Warning_comment()' action='nhan-xet/$item[mid].html' method='post' >
								<div style='margin: 0 25px 0 30px;'>
								<div class='techspec_small'>
									<table cellspacing='7px' >
										<input type='text' class='input_text' id='txt_mid' name='txt_mid' style='display: none;' value='$item[mid]' />
										<tr>
											<td class='blue_info'><u>Gửi bài viết</u></td>
										</tr>
										
										<tr>
											<td><label>Họ và tên:</label></td>
											<td><input type='text' class='input_text' id='txt_ten' name='txt_ten' /></td>
										</tr>
										
										<tr>
											<td><label>Email:</label></td>
											<td><input type='text' class='input_text' id='txt_email' name='txt_email' /></td>
										</tr>
										
										<tr>
											<td><label>Đánh giá:</label></td>
											<td>
												<form action='' method='post'>
													<div id='precision'></div>
													<input type='text' id='precision-target' name='txt_score' style='display: none;' />
														
													<script type='text/javascript'>
														$(function() {			
															
															$('#precision').raty({
																click: function(score) {
																	document.getElementById('precision-target').value=score;
																}
															});
														});
													</script>
												</form>
											</td>
										</tr>
										
										<tr>
											<td><label>Nội dung:</label></td>
											<td>
												<textarea name='txta_content' id='tecspecs_des' rows='5' cols='45' style='border:1px solid #ccc; -webkit-border-radius: 3px;'></textarea>
											</td>
										</tr>";?>
										<tr>
                                            <td><label>Mã an toàn:</label></td>
                                            <td>
                                                <div style="width: 300px; float: left; height: 90px">
                                                <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="library/captcha/securimage_show.php?sid=<?php echo md5(time()) ?>" />
                                                
                                                <!-- pass a session id to the query string of the script to prevent ie caching -->
                                                <a tabindex="-1" style="border-style: none;" href="#" title="Đổi mã khác" onClick="document.getElementById('siimage').src = 'library/captcha/securimage_show.php?sid=' + Math.random(); return false"><img src="templates/01/images/Refresh (1).png" alt="Đổi mã khác" border="0" onClick="this.blur()" align="bottom" /></a>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label>Nhập mã an toàn:</label></td>
                                            <td>
                                                <input type="text" class='input_text' name="code" size="12" />
                                            </td>
                                        </tr>
										<?php
										echo "
										<tr>
											<td></td>
											<td><input type='submit' class='button' name='btn_confirm' id='btn_confirm' value='Xác nhận' style='float: right;' /></td>
										</tr> 
														   
									</table>
								</div>
								</div>
								</form>
							</div>
						 </ul>
						 
					 </div> <!-- END List Wrap -->
				 
				 </div> <!-- END Organic Tabs (Example One) -->
			
			</div>
			";
			
	}
?>
</div>
<br />