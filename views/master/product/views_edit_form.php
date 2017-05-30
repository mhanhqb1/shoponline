<script type="text/javascript">
	function Warning_new(){ 
	//return true;  
		var x = document.frmNew;
		
		if(x.txt_tenmh.value.length <1){ 
			alert("\"Tên mặt hàng\" không được để trống!"); x.txt_tenmh.focus(); return false; 
		}
		
		if(x.txt_hangsx.value.length <1){ 
			alert("\"Hãng sản xuất\" không được để trống!"); x.txt_hangsx.focus(); return false; 
		}
		
		if(x.txt_dongia.value.length <1){ 
			alert("\"Đơn giá\" không được để trống!"); x.txt_dongia.focus(); return false; 
		}
    }
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=product&function=list">Quản lý thông tin sản phẩm</a> 
</div>

<div class="label_content">
	ĐIỀU CHỈNH THÔNG TIN SẢN PHẨM
</div>



<div class="form">
<form name="frmNew" onsubmit="return Warning_new()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=product&function=edit_comfirm"  method="post"  enctype="multipart/form-data" >
		<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Thông tin</u></td>
            </tr>
            <?php 
				foreach($info as $item){
			?>
        	<tr>
            	<td>Mã số sản phẩm</td>
                <td><input class="txt_tecspecs" type="text" name="txt_mid" value='<?php echo $item['mid'];?>' disabled="disabled" /></td>
                <input class="txt_tecspecs" type="text" name="txt_mid" value='<?php echo $item['mid'];?>' style="display:none;" />
                
            </tr>
            
            <tr>
            	<td>Tên sản phẩm</td>
                <td><input class="txt_tecspecs" type="text" name="txt_tenmh" value='<?php echo $item['tenmh'];?>' /></td>
            </tr>
            
            <tr>
            	<td>Hãng SX</td>
                <td><input class="txt_tecspecs" type="text" name="txt_hangsx" value='<?php echo $item['hangsx'];?>' /></td>
            </tr>
            
            <tr>
            	<td>Đơn giá</td>
                <td><input class="txt_tecspecs" type="text" name="txt_dongia" value='<?php echo $item['dongia'];?>' /></td>
            </tr>
            
            <tr>
            	<td>Hình ảnh hiện tại</td>
                <td><div style="text-align:center; width: 200px;"><img src="<?php echo $item['hinhanh'];?>"></div></td>
            </tr>
            
            <tr>
            	<td>Hình ảnh</td>
                <td><input type="file" name="filesmall" style="width: 200px;" /></td>
                <input class="txt_tecspecs" type="text" name="txt_imagesmall" value='<?php echo $item['hinhanh'];?>' style="display:none;" />
            </tr>
            
            
            <?php
				}
			?>
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
             
             <?php 
				foreach($techspec as $item){
			?>
                        
            <tr>
            	<td class="blue_info"><u>Tổng quan</u></td>
            </tr>            
                <tr>
                    <td>Mạng</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_mang" value="<?php echo $item['Network'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                
                <tr>
                    <td> Màu sắc</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_mausac" value="<?php echo $item['Color'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Kích thước / trọng lượng</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_kttl" value="<?php echo $item['Dimensionsweight'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Hiển thị</u></td>
            </tr>             	
                <tr>
                    <td> Ngôn ngữ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ngonngu" value="<?php echo $item['Language'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Loại màn hình</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_loaimanhinh" value="<?php echo $item['Typeofscreen'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Kích thước hiển thị</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_kichthuochienthi" value="<?php echo $item['Displaysize'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Đặc điểm</u></td>
            </tr>   
            	<tr>
                    <td> Kiểu chuông</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_kieuchuong" value="<?php echo $item['Ringingtone'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Tin nhắn</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tinnhan" value="<?php echo $item['Messages'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Kết nối</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ketnoi" value="<?php echo $item['Connect'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Camera</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_camera" value="<?php echo $item['Camera'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                        
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Lưu trữ</u></td>
            </tr>  
            
            	<tr>
                    <td> Danh bạ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_danhba" value="<?php echo $item['Contacts'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Bộ nhớ trong</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_bonhotrong" value="<?php echo $item['Memory'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thẻ nhớ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_thenho" value="<?php echo $item['Memorycard'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Thông tin khác</u></td>
            </tr>  
            
            	<tr>
                    <td> Tải nhạc</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tainhac" value="<?php echo $item['Downloadmusic'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Rung</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_rung" value="<?php echo $item['Vibrate'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> GPRS</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_gprs" value="<?php echo $item['GPRS'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> HSCSD</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_hscsd" value="<?php echo $item['HSCSD'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> EDGE</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_edge" value="<?php echo $item['EDGE'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> 3G</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ggg" value="<?php echo $item['3G'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> WLAN</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_wlan" value="<?php echo $item['WLAN'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Hệ điều hành</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_hedieuhanh" value="<?php echo $item['OS'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Đồng hồ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_dongho" value="<?php echo $item['Clock'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Báo thức</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_baothuc" value="<?php echo $item['Alarms'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Đài FM</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_fm" value="<?php echo $item['FM'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Trò chơi</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_trochoi" value="<?php echo $item['Games'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Trình duyệt</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_trinhduyet" value="<?php echo $item['Browser'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Java</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_java" value="<?php echo $item['Java'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Quay phim</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_quayphim" value="<?php echo $item['Film'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Ghi âm</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ghiam" value="<?php echo $item['Recording'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Nghe nhạc</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_nghenhac" value="<?php echo $item['Listentomusic'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Xem phim</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_xemphim" value="<?php echo $item['Watchingmovies'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Ghi âm cuộc gọi</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ghiamcuocgoi" value="<?php echo $item['Callrecording'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Loa ngoài</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_loangoai" value="<?php echo $item['Speakerphone'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Pin</u></td>
            </tr>  
            
            	<tr>
                    <td> Loại pin</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_loaipin" value="<?php echo $item['Typeofbattery'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thời gian chờ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tgcho" value="<?php echo $item['Standbytime'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thời gian đàm thoại</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tgdamthoai" value="<?php echo $item['Talktime'];?>" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Quảng cáo</u></td>
            </tr>  
            	
                <tr>
                    <td>Hình ảnh hiện tại</td>
                    <td><div style="text-align:center; width: 200px;"><img src="<?php echo $item['Image'];?>" width="200px" height="130px"></div></td>
                </tr>
                
            	<tr>
                    <td> Hình ảnh </td> 
                    <td> <input type="file" name="file" id="file" style="width: 200px;" /></td>
                    <input class="txt_tecspecs" type="text" name="txt_image" value='<?php echo $item['Image'];?>' style="display:none;" />
                </tr>
                <tr>
                    <td> Video </td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_video" value='<?php echo $item['Video'];?>' onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Mô tả</u></td>
            </tr>  
            
            	<tr>
                    <td colspan="2">
                        <textarea id='tecspecs_des' rows="4" cols="55" style="border:1px solid #ccc; -webkit-border-radius: 3px;" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" name="txtr_mota"><?php echo $item['Description'];?></textarea>
                    </td>
                </tr>
            <?php
				}
			?>
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
            <tr>
            	<td></td>
                <td><input type="submit" class="button" name="btn_confirm" id="btn_confirm" value="Xác nhận" style="float: right;" /></td>
            </tr> 
                               
        </table>
	</form>
</div>