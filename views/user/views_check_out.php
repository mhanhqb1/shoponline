
<script type="text/javascript">	 
	function Warning_edit_qt(){ 
	//return true;  
		var x = document.frmSave;
		
		if(x.txt_soluong_mh.value < 1) {
			alert("Số lượng mua ít nhất là 1 sản phẩm!"); x.txt_soluong_mh.focus(); return false; 
		}
		
		if(x.txt_soluong_mh.value > 10) {
			alert('Bạn có nhu cầu mua sản phẩm này với số lượng lớn? \nHãy liên hệ trực tiếp với chúng tôi, bạn sẽ nhận được những ưu đãi vượt cả mong đợi đấy!'); x.txt_soluong_mh.focus(); return false; 
		}
    }
	
	function show_comfirm_del_product_in_cart(mid)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Sản phẩm này không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $url; ?>xoa-san-pham/"+mid+".html";
		}
	}
	
</script>

<div id="center_bar">
	<a href="<?php echo $url; ?>gdsstore.html">GDS-Store</a> 
    > Thông tin cá nhân
</div>

<div class="label_content">
	Giỏ hàng của quý khách
</div>
		
    	<?php 
			if($note == "empty_cart" || $note == "guest_no_ses_cart" || $show_cart == NULL){
				echo "
					<div style='text-align: center;'>
						<img src='templates/01/images/empty_cart.jpg' /><br /><br />
						Hiện tại không có sản phẩm nào trong giỏ hàng!<br /><br />
						Rất mong nhận được sử ủng hộ từ quý khách đối với GDS-Store.
					</div>";
			}
			if(($note == "something" || $note == "guest_has_cart") && $show_cart != NULL){				
				echo "<div id='show_cart'><table>";
				echo "<tr id='head_showcart'><td>Hình ảnh</td><td>Tên và giá sản phẩm</td><td>Số lượng mua</td><td>Tùy chọn</td></tr>";
				$total = 0;
				foreach($show_cart as $item){
					$tenmh = unicode_convert($item['tenmh']);
					echo "<tr>";
					echo "
							<td class='hinhanh'><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html' ><img src='$item[hinhanh]'  /></a></td>
							<td class='tenmh'>
								<div class='checkout_item_name'><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html' >$item[tenmh]</a></div><br />
								<div class='checkout_item_price'>Giá: " .number_format($item['dongia'],0,',',',')." VNĐ</div><br />
							</td>
							<td class='soluong'>
								<form name='frmSave' onsubmit='return Warning_edit_qt()' action='".$url."luu-thay-doi-so-luong-san-pham-trong-gio.html' method='post'>
								
									<input type='text' value='$item[mid]' class='txt_mid' name='txt_mid' style='display: none;' />
									<input type='text' value='$item[soluong]' name='txt_soluong_mh' class='txt_soluong_mh' onkeydown='return chinhapso(event)' />
									<div class='btn_luu'><input type='submit' title='Cập nhật số lượng sản phẩm sau khi thay đổi' class='button' value='Lưu' /></div>
								</form>
							</td>
							
							<td class='tuychon'>";?>
								<input class='btn_del_trash' type='button' onclick="show_comfirm_del_product_in_cart('<?php echo $item['mid']; ?>');" value='' title='Xóa sản phẩm khỏi đơn đặt hàng' />
								
                            </td>
                    <?php
					echo "</tr>";	
					$total = $total + $item['dongia']*$item['soluong'];
					$_SESSION['ses_total_price'] = $total;
				}				
				echo "</table></div>
				<div id='thanhtoan' style='float:right;'>
					<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 25px 3px 20px 0; float:right; width:268px;' /><br /><br />
					
					<div style='clear:right;'></div>
					
					<div id='show_cart'>
						<table>
							<tr id='head_showcart'><td style='width: 262px;'>Tổng cộng</td></tr>
							<tr><td style='line-height: 50px; font-weight: bold; color: #333;'>".number_format($total,0,',',',')." VNĐ	</td></tr>
						</table>
					</div>
					
					<a href='".$url."dat-mua-san-pham.html'><input type='submit' title='Đặt mua sản phẩm' name='btn_thanhtoan' class='btn_thanhtoan' value='' /></a>
				</div>";					
			}
			
		?>
</div>