<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Sản Phẩm Mới Nhất
</div>

<div class="label_content">
	Gửi bài viết
</div>
	<div class='black_color_form'>
	<?php
    	if(isset($_GET['err'])){
			echo "<br /><div class='red_info' style='text-align:center; font-size: 18px;'><b>Nội dung không được để trống!</b></div>";
		}
		if(isset($letdo)){
			echo "
				<div class='form' style='padding: 5px; width: 656px; background: #fff;'>";
					echo $_POST['txta'];
			echo "</div>
			";
		}
		if(!isset($_GET['err']) && !isset($letdo)){
			if($data == FALSE){
				echo "
					<div class='form' style='padding: 5px; width: 656px; text-align: center; background: #fff;'>
						<br /><b>Không có bài viết nào</b><br /><br />
					</div>
					";	
			}else{
				echo "<div style='font-size: 16px; text-align: center;'>
						<b class='red_info'>Bài viết hiện tại</b><br /><br />
					</div>";	
				echo "
					<div class='form' style='padding: 5px; width: 656px; background: #fff;'>
						$data[content]
					</div>
					
					";	
			}	
		}
	?>
	</div>
    
    <br />
    <div style='text-align:center;'>
    <input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0;'>
    </div>
    
	<div style='font-size: 16px; text-align: center;'>
        <b>Trình soạn thảo văn bản</b>
    </div><br />

	<form name="frmWrite" onsubmit="return Warning()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=news&function=send_wr_new_prod" method="post">
    <div style="width: 100%;">
        <textarea name="txta" id="txta" cols="45" rows="5"><?php if(isset($letdo)){echo $_POST['txta'];}if(!isset($_GET['err']) && !isset($letdo)){
			if($data != FALSE){ echo $data['content']; }}?></textarea> 
        <?php 
            $ckeditor = new CKEditor( ) ; 
            $ckeditor->basePath = 'library/ckeditor/' ; 
            CKFinder::SetupCKEditor( $ckeditor, 'library/ckfinder/' ) ; 
            $ckeditor->replace("txta"); 
        ?>
    </div>
    <br /> 
    <input type="submit" class="button" name="btn_comfirm" id="btn_comfirm" value="Xác nhận">
    <div style="float:right;">&nbsp;&nbsp;</div>
    <input type="submit" class="button" name="btn_view" id="btn_comfirm" value="Xem trước">
    </form>
