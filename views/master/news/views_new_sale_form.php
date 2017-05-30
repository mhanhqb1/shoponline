
<script type="text/javascript">
	function Warning(){ 
	//return true;  
		var x = document.frmWrite;
		if(x.txt_title.value.length < 1) {
			alert("Vui lòng nhập tên chương trình khuyến mãi!"); x.txt_title.focus(); return false; 
		}
	}
</script>

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
			echo "<br /><div class='red_info' style='text-align:center; font-size: 18px;'><b>Nội dung không được để trống!</b></div>
				<br />
			<div style='text-align:center;'>
			<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0;'>
			</div>
			";
		}
		if(isset($letdo)){
			echo "
				<div class='form' style='padding: 5px; width: 656px; background: #fff;'>";
					echo "<br /><div style='font-size: 20px; text-align: center;'>".$_SESSION['ses_title']."</div><br />";
					echo $_POST['txta'];
			echo "</div>
			<br />
			<div style='text-align:center;'>
			<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 0;'>
			</div>
			";
		}
		
	?>
	</div>
    
    
    
	<div style='font-size: 16px; text-align: center;'>
        <b>Trình soạn thảo văn bản</b>
    </div><br />

	<form name="frmWrite" onsubmit="return Warning()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=news&function=send_wr_new_sale&id=<?php echo $id;?>" method="post">
    Tên chương trình: <input type="text" name="txt_title" id="txt_title" style="height:25px; width: 350px;" <?php if(isset($_SESSION['ses_title'])){echo "value='".$_SESSION['ses_title']."'";}?>/><br /><br />
    <div style="width: 100%;">
        <textarea name="txta" id="txta" cols="45" rows="5"><?php if(isset($letdo)){echo $_POST['txta'];}?></textarea> 
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
