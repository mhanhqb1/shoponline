<script type="text/javascript">
	function show_read_more(id)
	{
		window.location="<?php echo $url;?>thong-tin-khuyen-mai/"+id+".html";	
	}
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Thông tin khuyến mãi mới nhất
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
			
			$gds=$result[0];			
			$start='src=\"';
			$end='g\"';
			$rule="/$start(.*)$end/";
			preg_match($rule,$gds,$result);
			
			?>
			<div class='form' style='padding: 10px; width: 646px; background:#fff;'>
				  		<table width="100%" border="0" cellspacing="5">
                          <tr>
                            <td style="text-align:center; width:150px; border:1px solid whitesmoke;"><img <?php echo $result[0]; ?> style="width:auto; max-width:150px; height: 100px;" /></td>
                            <td>
                                <div style="margin: 5px 0; float: left;">
                                
        
                                 </div>
                                
                                <?php
                                    $tenctkm = unicode_convert($item['title']);
                                    echo "
                                        <a href='".$url."thong-tin-khuyen-mai/$tenctkm/$item[id].html'>
                                            <span style='font-size: 24px; color: #09f;'>
                                                $item[title]
                                            </span>
                                        </a>
                                            ";
                                ?>
                            
                            <div style="height: 5px;"></div>
                            <b style='border-left: 2px solid black; padding-left: 5px; color: black;'>Đăng lúc: </b><?php echo $item['time']; ?><br />				
                            
                            <div class="clear"></div><br />
                            <img src="templates/01/images/line_wave.png" /><br />
                            <input onclick="show_read_more('<?php echo $tenctkm."/".$item['id']; ?>');" style="float: left; margin-left:45px;" type="submit" class="button" id="btn_more" name="btn_more" value="Xem tiếp">
                            <br /><div style="height: 5px; clear:left;"></div>
                            
							</td>
                          </tr>
                        </table>
                        </div>
				<br /><br />
	<?php }
	}else{
		echo "<b>Không có bài viết nào</b>";	
	}
	
	?>

