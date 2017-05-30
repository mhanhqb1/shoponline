<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Giỏ hàng của bạn
</div>

<div class="label_content">
	Thêm sản phẩm vào giỏ
</div>

<div id="detail_product">
<?php
	if($warehouse != FALSE){
		foreach($warehouse as $wh){
			$slc = $wh['soluongcon'];
		}
	}else{
		$slc = -99999999;	
	}
		
	
	foreach($info as $mathang){
		$tenmh = $mathang['tenmh'];
		$dongia = $mathang['dongia'];
		$mid = $mathang['mid'];
	}
	
	echo "<script type='text/javascript'>
		function Warning_add(){ 
		//return true;  
			var x = document.frmAddtocart;
					
			if(x.txt_atc_qt.value < 1) {
				alert('Số lượng ít nhất là 1 sản phẩm!'); x.txt_atc_qt.focus(); return false; 
			}
			
			if(x.txt_atc_qt.value > 10 && x.txt_slc.value != -99999999) {
				alert('Bạn có nhu cầu mua sản phẩm này với số lượng lớn? \\nHãy liên hệ trực tiếp với chúng tôi, bạn sẽ nhận được những ưu đãi vượt cả mong đợi đấy!'); x.txt_atc_qt.focus(); return false; 
			}
			
			if(x.txt_slc.value == -99999999) {
				alert('Số lượng sản phẩm hiện tại chưa được cập nhật, vui lòng liên hệ trực tiếp với GDS-Store để biết thêm thông tin. \\nXin lỗi quý khách vì sự bất tiện này!'); return false; 
			}
		}
	</script>";
	
	foreach($data as $item){
		echo "
			<div  id='img_details_product'><img src='$item[Image]' /></div><br />
			<div  class='line_details_product'><input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' /></div><br />
			<div class='info_tenmh'>$tenmh</div>	
			<br />
			<div id='atc_left'>
			<div style='height: 60px;'></div>
				<b><u class='atc_ttsp'>Thông tin sản phẩm</u></b><br />
				<div id='atc_price_img'><img src='templates/01/images/price_big.png' /></div>
				<div id='atc_price'>" .number_format($dongia,0,',',',')." VNĐ</div><br />
				<div class='atc_ttsp'>
					Mã số sản phẩm: $mid<br /><br />
					Tình trạng: ";
					if($slc > 0){
						echo 'Còn hàng.';
					}else{
						if($slc !=  -99999999){
							echo 'Hết hàng.';	
						}
					}
					if($slc ==  -99999999){
						echo "Chưa có hàng.";
					}
					echo "
				</div>
				
			</div>
			
			
			<div class='dotted_line_doc' style='height: 200px; margin-top: 35px;'></div>
			
			
			<div id='atc_right'>
				<img src='templates/01/images/starthere.png' /><br />
				<img src='templates/01/images/input_qt.png' /><br /><br />
				<form name='frmAddtocart' onsubmit='return Warning_add()' action='".$url."chap-nhan-them-san-pham-vao-gio/$mid.html'"; echo "method='post' >				
					<div class='atc_ttsp'>Số lượng: <input type='text' name='txt_atc_qt' id='txt_atc_qt' value='1' onkeydown='return chinhapso(event)' /></div><br />
					<input type='text' name='txt_atc_mid' id='txt_atc_mid' value='$mid' style='display: none;'/>			
					<img src='templates/01/images/click_here.png' /><br />
					<input type='submit' class='button' id='atc_confirm' name='atc_confirm' value='' />
					<input type='text' id='txt_slc' name='txt_slc' value='$slc' style='display: none;' />
				</form>
			</div>
			";
			
	}
?>
</div>
<br />