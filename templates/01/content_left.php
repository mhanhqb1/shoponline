<?php
	
	if(isset($_POST['left_search_tenmh'])){
		if($_POST['left_search_tenmh'] != NULL){
			$key = $_POST['left_search_tenmh'];
			$key = unicode_convert($key);
			echo "<script>window.location='tim-kiem-theo-ten/$key.html';</script>";
		}else{
			echo "<script type=\"text/javascript\">window.alert('Vui lòng nhập tên sản phẩm cần tìm!')</script>";	
		}
	}
	
	if(isset($_POST['left_search_dongia'])){
		$key = $_POST['left_search_dongia'];
		echo "<script>window.location='tim-kiem-theo-gia/$key.html';</script>";
	}
?>

<div id="content_left">
	<?php 
    	if(isset($_SESSION['ses_level'])){
			if($_SESSION['ses_level'] == 'MASTER'){
	?>
        <div class="sidebox"> 
            <!--Header Sidebox-->
            <div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
            <div class="sidebox-head-cnt">Công cụ quản lý</div></div></div></div>
            <!--Finish Header Sidebox-->
            
            <!--Content Sidebox-->
            <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
                <div class="sidebox-body-cnt">
                			<div class='hello_member'><img src="templates/01/images/tools48.png" /></div>
							<div class='menu_hangsx' id="master_control">
                            <ul>
                                <li><div class='search_list_mathang'><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=user&function=list_user'>Thông tin khách hàng</a></div></li>
                                
                                
                                <li>
                                	<div class='search_list_mathang'>Thông tin đơn đặt hàng</div>
                                    <ul class='sub_item'>
                                    	<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=order&function=list_order'>Duyệt đơn đặt hàng</a></li>
                                        <li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=order&function=list_shipping'>ĐĐH đang giao</a></li>
                                 
                                 		<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=order&function=list_complete'>ĐĐH đã thanh toán</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li>
                                	<div class='search_list_mathang'>Thông tin kho hàng</div>
                                    <ul class='sub_item'>
                                    	 <li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=warehouse&function=list'>Tìm kiếm, chỉnh sửa</a></li>
                                         <li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=warehouse&function=new'>Thêm sản phẩm mới</a></li>
                                    </ul>
                                </li>
                                 
                                
                               
                                
                                <li>
                                	<div class='search_list_mathang'>Thông tin sản phẩm</div>
                                    <ul class='sub_item'>
                                    	<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=product&function=list'>Tìm kiếm, chỉnh sửa</a></li>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=product&function=new'>Thêm sản phẩm mới</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                	<div class='search_list_mathang'>Tin tức mới</div>
                                    <ul class='sub_item'>
                                    	<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=news&function=wr_new_prod'>Thêm tin mới</a></li>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=news&function=list_news_prod'>Điều chỉnh bài viết</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                	<div class='search_list_mathang'>Thông tin khuyến mãi</div>
                                    <ul class='sub_item'>
                                    	<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=news&function=wr_new_sale'>Chương trình mới</a></li>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=news&function=list_news_sale'>Điều chỉnh thông tin</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                	<div class='search_list_mathang'>Khảo sát thông tin</div>
                                    <ul class='sub_item'>
                                    	<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=research&function=wr'>Chương trình mới</a></li>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=research&function=list'>Điều chỉnh thông tin</a></li> 
                                    </ul>
                                </li>
                                
                                <li>
                                	<div class='search_list_mathang'>Ý kiến khách hàng</div>
                                    <ul class='sub_item'>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=contact&function=list'>Duyệt thông tin</a></li> 
                                    </ul>
                                </li>
                                
                                <li>
                                	<div class='search_list_mathang'>Sản phẩm nổi bật</div>
                                    <ul class='sub_item'>
										<li><a href='<?php $_SERVER['PHP_SELF']?>?controller=master&action=product&function=list_hot'>Duyệt thông tin</a></li> 
                                    </ul>
                                </li>
                                
                                
                            </ul>
                            <div style="height:10px"></div>
						</div>
            </div></div></div></div>
            <!--Finish Content Sidebox-->
            
            <!--Footer Sidebox-->
            <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
            <!--Finish Footer Sidebox-->
        </div>
    <?php 
		}
		}
	?>

	<div class="sidebox"> 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Giỏ hàng của bạn</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt" style="text-align:center; margin: 0 0 0 -8px;">
				<a href="<?php echo $url; ?>gio-hang.html"><img  src="templates/01/images/shopping_trolleyx.png" /></a> <br />
                
                <?php
					if(isset($_SESSION['ses_id'])){
						$gv_class_cart = new CART;
						$gv_class_cart->set_Uid($_SESSION['ses_id']);
						$datacart = $gv_class_cart->List_cart();
											
						if($datacart != FALSE){
							$count = 0; // Đếm dố lượng sản phẩm có trong giỏ
							foreach($datacart as $item){
								if($item['tinhtrang'] == 'cart'){
									$count = $count + $item['soluong'];
								}
							}				
						}else{
							$count = 0;
						}
					}else{
						if(isset($_SESSION['ses_qt_in_cart'])){
							$count = $_SESSION['ses_qt_in_cart'];		
						}else{
							$_SESSION['ses_cart'] = NULL;
							$count = 0;
						}	
						
					}
				?>  
                
                Sản phẩm trong giỏ: <font style="color: #F00;"><b><?php echo $count; ?></b></font><br />

                <tr>
                    <td><div style="height:8px;"></div></td>
                </tr>
				<a href="<?php echo $url; ?>gio-hang.html"><img  style="margin: 7px 0 8px 0;" src="templates/01/images/buy.png" /></a> <br />
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    
    <div class="sidebox"> 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Tìm kiếm</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt">
                <div class="search_type">Tìm theo sản phẩm</div>
                
                <script>
					$(function() {
						var availableTags = [	
							<?php 
								$gv_class_mathang = new MATHANG;
								$data = $gv_class_mathang->List_tenmh();
								$flag = 0;
								if($data != FALSE){
									$dataforright = $data;
									foreach($data as $item){
										if($flag > 0){
											echo ",";
										}
										echo "\"$item[tenmh]\"";
										$flag++;
									}
								}
							?>
						];
						$( "#left_search_tenmh" ).autocomplete({
							source: availableTags
						});
					});
				</script>

                
                <div style="height:5px;"></div>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <input class="search_text" type="text" name="left_search_tenmh" id="left_search_tenmh" />
                    <input title="Tìm" type="submit" onclick="return Warning()" class="btn_left_search" name="left_search_tenmh_btn" value="" />
                <div style="height:50px;"></div>
                </form>
                
                <div class="search_type">Tìm theo mức giá</div>
                
                <div style="height:5px;"></div>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <select name="left_search_dongia" id="left_search_dongia">               
                    <option selected="selected" value="0">0tr - 2tr VNĐ</option>
                    <option value="2">2tr - 4tr VNĐ</option> 
                    <option value="4">4tr - 8tr VNĐ</option>
                    <option value="8">8tr - 12tr VNĐ</option>
                    <option value="12">12tr - Max VNĐ</option>
                </select>
                <input title="Tìm" type="submit" class="btn_left_search" name="left_search_dongia_btn" value="" />
                </form>  
                <div style="height:45px;"></div>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>

	
    <div class="sidebox"> 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Tìm theo tính năng</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt">
                            
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/android.html'>Android</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/ios.html'>iOS</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/windowsphone.html'>Windows Phone</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/blackberry.html'>Black Berry</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/typeofscreen.html'>Cảm ứng</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/camera.html'>Camera</a></div>
                      
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/wlan.html'>Wifi</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/fm.html'>FM</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/3G.html'>3G</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/gprs.html'>GPRS</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/java.html'>Java</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/film.html'>Quay phim</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/listentomusic.html'>Nghe nhạc</a></div>
                
                <div class="border_bot">
                <a class="search_techspec" href='tim-kiem-theo-chuc-nang/recording.html'>Ghi âm</a></div>
				
                <div style="height:5px;"></div>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    
	
	<?php
		$gv_class_mathang = new MATHANG;
		$data = $gv_class_mathang->List_hangsx();
    	if($data != FALSE){
			
	?>
    <div class="sidebox"> 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Danh mục điện thoại</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt">
        		<?php
					echo "<div class='menu_hangsx'>";
					echo "<ul>";
					foreach($data as $item){
						echo "<li>";
						echo "<div class='search_list_mathang'>$item[hangsx]</div>";
						$sub_data = $gv_class_mathang->List_mh($item['hangsx']);
							echo "<ul class='sub_item'>";
							$flag = 0;
							foreach($sub_data as $sub_item){
								if($flag < 5){
									echo "<li>";
									$tenmh = unicode_convert($sub_item['tenmh']);
									echo "<a href='chi-tiet-san-pham/$tenmh/$sub_item[mid].html'>".$sub_item['tenmh']."</a>";
									echo "</li>";
									$flag++;
								}
							}
							echo "</ul>";
						echo "</li><br />";
					}
					echo "</ul>";
					echo "</div>";
		?>        
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    <?php
		}
	?>
</div>