<script type="text/javascript">
	function Warning_new(){ 
	//return true;  
		var x = document.frmNew;
		
		if(x.txt_mid.value.length <1){ 
			alert("\"Mã số sản phẩm\" không được để trống!"); x.txt_mid.focus(); return false; 
		}
		
		if(x.txt_tenmh.value.length <1){ 
			alert("\"Tên sản phẩm\" không được để trống!"); x.txt_tenmh.focus(); return false; 
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
    > Quản lý thông tin sản phẩm
</div>

<div class="label_content">
	Thêm sản phẩm mới
</div>


<div class="form">
<form name="frmNew" onsubmit="return Warning_new()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=product&function=add_new" method="post"  enctype="multipart/form-data" >
		<table cellspacing="7px" >
        	<tr>
            	<td class="blue_info"><u>Thông tin</u></td>
            </tr>
            
        	<tr>
            	<td>Mã số sản phẩm</td>
                <td><input class="txt_tecspecs" type="text" name="txt_mid" /></td>
                <td>(Thông tin bắt buộc)</td>
            </tr>
            
            <tr>
            	<td>Tên sản phẩm</td>
                <td><input class="txt_tecspecs" type="text" name="txt_tenmh" /></td>
                <td>(Thông tin bắt buộc)</td>
            </tr>
            
            <tr>
            	<td>Hãng SX</td>
                <td><input class="txt_tecspecs" type="text" name="txt_hangsx" /></td>
                <td>(Thông tin bắt buộc)</td>
            </tr>
            
            <tr>
            	<td>Đơn giá</td>
                <td><input class="txt_tecspecs" type="text" name="txt_dongia" /></td>
            </tr>
            
            <tr>
            	<td>Hình ảnh</td>
                <td><input type="file" name="filesmall" style="width: 200px;" /></td>
            </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            
            <!------------------------------------------------>
                        
            <tr>
            	<td class="blue_info"><u>Tổng quan</u></td>
            </tr>            
                <tr>
                    <td>Mạng</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_mang" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                
                <tr>
                    <td> Màu sắc</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_mausac" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Kích thước / trọng lượng</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_kttl" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                    <td> <input class="txt_tecspecs" type="text" name="txt_ngonngu" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Loại màn hình</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_loaimanhinh" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Kích thước hiển thị</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_kichthuochienthi" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                    <td> <input class="txt_tecspecs" type="text" name="txt_kieuchuong" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Tin nhắn</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tinnhan" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Kết nối</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ketnoi" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr><tr>
                    <td> Camera</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_camera" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                    <td> <input class="txt_tecspecs" type="text" name="txt_danhba" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Bộ nhớ trong</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_bonhotrong" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thẻ nhớ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_thenho" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                    <td> <input class="txt_tecspecs" type="text" name="txt_tainhac" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Rung</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_rung" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> GPRS</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_gprs" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> HSCSD</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_hscsd" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> EDGE</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_edge" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> 3G</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ggg" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> WLAN</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_wlan" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Hệ điều hành</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_hedieuhanh" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Đồng hồ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_dongho" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Báo thức</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_baothuc" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Đài FM</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_fm" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Trò chơi</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_trochoi" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Trình duyệt</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_trinhduyet" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Java</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_java" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Quay phim</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_quayphim" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Ghi âm</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ghiam" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Nghe nhạc</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_nghenhac" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Xem phim</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_xemphim" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Ghi âm cuộc gọi</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_ghiamcuocgoi" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Loa ngoài</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_loangoai" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                    <td> <input class="txt_tecspecs" type="text" name="txt_loaipin" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thời gian chờ</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tgcho" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
                <tr>
                    <td> Thời gian đàm thoại</td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_tgdamthoai" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
                </tr>
            
            <tr>
            	<td><div style="height:5px;"></div></td>
            </tr> 
            <!------------------------------------------------>
            
            <tr>
                <td class="blue_info"><u>Quảng cáo</u></td>
            </tr>  
            
            	<tr>
                    <td> Hình ảnh </td> 
                    <td> <input type="file" name="file" id="file" style="width: 200px;" /></td>
                </tr>
                <tr>
                    <td> Video </td> 
                    <td> <input class="txt_tecspecs" type="text" name="txt_video" value="Đang cập nhật" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" /> </td>
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
                        <textarea id='tecspecs_des' rows="4" cols="55" style="border:1px solid #ccc; -webkit-border-radius: 3px;" onclick="this.value=''" onblur="if(this.value=='') this.value='Đang cập nhật'" name="txtr_mota">Đang cập nhật
                        </textarea>
                    </td>
                </tr>
            
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