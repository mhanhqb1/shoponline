<div id="center_bar">
	Chào mừng bạn đến với GDS Store!
</div>

<div id = "logo"> 
    <div id="avatar"><img src="templates/01/images/green_logo.png" /></div> 
    <div id="slogan"> Với chúng tôi, hội đủ tất cả những gì bạn cần. <br> Với bạn, chọn lựa không còn là điều khó khăn! CEO. GDS-Store.</div>
    <!--<div id="rss"><img src="templates/01/images/rss.png" /></div>-->
</div>
<br />
<!--<div id="hello"><img src="templates/01/images/hello.jpg" /></div>-->

<!--<div class="left-banner" style="text-align: center;">
            <object  style="margin: 0;" type="application/x-shockwave-flash" data="library/swf/adv.swf" width="670px" height="256"> <param name="movie"/> <param name="quality" value="high"/> <param name="wmode" value="transparent"/> </object>
</div>-->
<?php
	for($i = 0; $i < 4; $i++){
		echo "<div class='type_product'>";
		
		if($i == 0){
			echo "
				<div class='level_product'>Sản phẩm siêu cấp</div>
				<div class='limit_price'>Giá từ 10tr trở lên</div>
				";
			$price_max = 100000000;
			$price_min = 10000000;
		}
		
		if($i == 1){
			echo "
				<div class='level_product'>Sản phẩm cao cấp</div>
				<div class='limit_price'>Giá từ 5tr đến 10tr</div>
				";
			$price_max = 10000000;
			$price_min = 5000000;
		}
		
		if($i == 2){
			echo "
				<div class='level_product'>Sản phẩm trung cấp</div>
				<div class='limit_price'>Giá từ 2tr đến 5tr</div>
				";
			$price_max = 5000000;
			$price_min = 2000000;
		}
		
		if($i == 3){
			echo "
				<div class='level_product'>Sản phẩm phổ thông</div>
				<div class='limit_price'>Giá dưới 2tr</div>
				";
			$price_max = 2000000;
			$price_min = 0000000;
		}
		echo "<input class='dotted_line_ngang' type='submit' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' />
			  </div>";
		  
		$gv_class_mathang = new MATHANG;
		$data = $gv_class_mathang->List_alls();
		$limit = 9;
		echo "<br /><table class='table_list_product'>";
		foreach($data as $item){
			if($item['dongia'] > $price_min && $item['dongia'] < $price_max){
				if($limit%3==0) 
					echo "<tr>";
				
				if($limit == 2 || $limit == 5 || $limit == 8)
					echo "<td class='list_product_center_item'>";
				else{
					echo "<td>";
				}
				$tenmh = unicode_convert($item['tenmh']);
				echo "
						
						<div class='list_product_tenmh'><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html'>$item[tenmh]</a></div>
						<div class='list_product_hinhanh'><a href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html'><img src='$item[hinhanh]' /></a></div>
						<div class='div_place' style='height:5px;'></div>
						<div class='list_product_gia_img'><img src='templates/01/images/price.png' /></div>
						<div class='list_product_gia'>".number_format($item['dongia'],0,'.','.')." VNĐ</div>
						<div class='div_place' style='height:10px;'></div>
						<div class='list_product_addtocart'><a href='".$url."them-san-pham-vao-gio/$tenmh/$item[mid].html'>Thêm vào giỏ &nbsp;</a></div>
						<div class='list_product_addtocart_img'><a href='".$url."them-san-pham-vao-gio/$tenmh/$item[mid].html'><img src='templates/01/images/addtocart.png' /></a></div>									
						
					</td>";	
				$limit--;
				
				if($limit%3==0){ 
					echo "</tr>
					<tr style='height:30px'>
					</tr>";			
				}
			}
			if($limit==0){
				break;
			}
		}
		echo "</table>";
	}
?>