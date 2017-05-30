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
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=comment_sale&function=del_comment_sale&id="+id;	
			//MASTER
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Khuyến mãi
</div>

<div class="label_content">
	Thông tin mới nhất
</div>
<div class='black_color_form'>
	
    
	<?php
        if($data != FALSE){
            echo "<b style='border-left: 2px solid black; padding-left: 5px; color: black;'>Đăng lúc: </b>" . $data['time']."<br /><br />";
        }
        echo "<div class='form' style='padding: 5px; width: 656px; background: #fff;'>";
        if($data == FALSE){
            echo "<b>Không có bài viết nào</b>";	
        }else{
            echo "<br /><div style='font-size: 20px; text-align: center;'>".$data['title']."</div><br />";
            echo $data['content'];
        }
        echo "</div>";
    ?>
    <br />
			<div style='text-align:center;'><br />
			<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 10px 0 20px 0;'>
			</div><br />    
    <div class="form">
        
    <?php
	if(isset($comment)){
	if($comment != FALSE){
		
		
		foreach($comment as $item){
			echo "	
				<div style='margin: 0 25px 7px 25px;'>
				<div class='techspec_small'>
					<div class='comment'>";
					
					if(isset($_SESSION['ses_level'])){
						if($_SESSION['ses_level']  == 'MASTER'){
							?>
							<input style="float: right; margin-top: 17px;" class="btn_del_trash" type="button" onclick="show_comfirm_del_comment('<?php echo "$item[id]";?>');" value="" title="Xóa nhận xét này" />
							<?php
							
							echo "<img src='templates/01/images/here.png' style='float: right;'>";
						}
					}
					
					echo"
						
						<b>Người gửi: </b><font style='color: #09F;'>$item[ten]</font> - <span style='color: #82837F;'>$item[thoigian]</span>
						
						<br /><div style='height: 7px;'></div>
						<b>Nội dung: </b><span style='color: #82837F;'>$item[noidung]</span><br />
						
						
					</div>
				</div>
				</div>
				<div style='text-align:center;'>
				<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 10px 0 20px 0;'>
				</div>";
			}
		}
	}	
	echo "							
			<form name='frmComment' onsubmit='return Warning_comment()' action='". $url."gui-y-kien-chuong-trinh-khuyen-mai.html' method='post' >
				<div style='margin: 0 25px 0 25px;'>
				<div class='techspec_small'>
					<table cellspacing='7px' >
						<input type='text' class='input_text' id='txt_id' name='txt_id' style='display: none;' value='$data[id]' />
						<tr>
							<td class='blue_info'><u>Ý kiến của bạn?</u></td>
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
			</div>";
	?>
     </div>  
        
<?php

	if($data_other != FALSE){
		echo "
			<br />
			<div style='text-align:center;'><br />
			<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 10px 0 20px 0;'>
			</div><br />
			<div  style='margin: 0 0 5px 0; color: black;'>
			<b>Các thông tin khuyến mãi khác:</b></div>";
			$flag = 0;
			foreach($data_other as $item){
				if($flag >= 0 && $flag < 10 && $item['id'] != $data['id']){
					$tenctkm = unicode_convert($item['title']);
					echo "<img src='templates/01/images/bullet_green.png'>
						<a href='".$url."thong-tin-khuyen-mai/$tenctkm/$item[id].html'>$item[title]</a> 
						<span style='color: #82837f;'>($item[time])</span>
						<br /><div  style='margin: 0 0 5px 0;'></div>";
						$flag++;	
				}
			}
	}
	
	?>
    
    

</div>