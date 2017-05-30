<script type="text/javascript">
	function show_comfirm_del(id)
	{
		window.location="<?php echo $url;?>tin-tuc-moi-nhat/"+id+".html";	
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Thông tin mới nhất về thị trường di động
</div>

<div class="label_content">
	Các bài viết mới
</div>

<?php

	if($data != FALSE){
		
		foreach($data as $item){
			$gds=$item['content'];			
			$start='<img';
			$end='>';
			$rule="/$start(.*)$end/";
			preg_match($rule,$gds,$result);
			
			$openimgtag = strpos($item['content'],"<p");
			$closeimgtag = strpos($item['content'],"</p>");
			$len = $closeimgtag - $openimgtag;
			$content = substr($item['content'],$openimgtag, $len);
			
			?>
			<div class='form' style='padding: 10px; width: 646px; background:#fff;'>
				  		<div style="height: 5px;"></div>
                        
						<?php
							echo "<div style='text-align:center;'>".$result[0]."<br /></div>";
							
							$tenctkm = unicode_convert($item['title']);
                        	echo "
								<a href='".$url."tin-tuc-moi-nhat/$tenctkm/$item[id].html'>
									<span style='font-size: 24px; color: #09f;'>
										$item[title]
									</span>
								</a>
									";
						?>
					<div style="height: 5px;"></div>
					<b style='border-left: 2px solid black; padding-left: 5px; color: black;'>Đăng lúc: </b><?php echo $item['time']; ?><br />				
					
					<input class='dotted_line_ngang' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;'>
                    <div class='black_info' style="margin: 10px 0;">
					<?php echo $content;?>
                    </div>
					<div class="clear"></div>
                    <img src="templates/01/images/line_wave.png" /><br />
                    <input onclick="show_comfirm_del('<?php echo $tenctkm."/".$item['id']; ?>');" style="float: left; margin-left: 45px;" type="submit" class="button" id="btn_more" name="btn_more" value="Xem tiếp">
                    <br /><div style="height: 5px; clear:left;"></div>
                    </div>
					
				<br /><br />
	<?php }
	}else{
		echo "<b>Không có bài viết nào</b>";	
	}
	
	?>

