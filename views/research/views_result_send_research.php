<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Khảo sát thông tin
</div>
<img src="templates/01/images/research.png" style="position: relative; top: -4px; left: 465px; margin-bottom: -160px;" />
<div class="label_content">
    Kết quả khảo sát
</div>

<?php
	if(isset($_POST['research']) && !isset($_SESSION['ses_research'])){
				
	}
?>

<div class='form'>
    <div class='result_form'>
    	
        <?php
        	echo "<div class='blue_info'>".$count['question']."</div><div style='height: 10px;'></div>";
			echo "<span class='black_info'>Khảo sát bắt đầu lúc: </span>".$count['time']."<div style='height: 10px;'></div>";
			echo "<div class='black_info' >Tổng lượt đánh giá: ".$total."</div><div style='height: 20px;'></div>";
		?>
        
        <table width="600" border="0">
          <tr>
            <td width="130" class='black_info'><?php echo $count['hight'];?></td>
            <td>
				<?php
                	echo "<div style='box-shadow: 1px 1px 7px 1px rgba(255, 0, 0, .5); float: left; border-radius: 2px; background: url(templates/01/images/bg_floatingbar.png); height: 12px; width: ".($hight*4)."px;'>";
                    for($i = 1; $i < $hight; $i+=1){
                        echo " ";	
                    }
				echo "</div>&nbsp;&nbsp;&nbsp;".$hight."%";	
                ?>
            </td>
          </tr>
          <tr style="height: 10px;"></tr>
          <tr>
            <td class='black_info'><?php echo $count['midium'];?></td>
            <td>
                <?php
                	echo "<div style='box-shadow: 1px 1px 7px 1px rgba(0, 0, 255, .5); float: left; border-radius: 2px; background: url(templates/01/images/bg_floatingbar.png); height: 12px; width: ".($midium*4)."px;'>";
                    for($i = 1; $i < $midium; $i+=1){
                        echo " ";	
                    }
				echo "</div>&nbsp;&nbsp;&nbsp;".$midium."%";	
                ?>
            </td>
          </tr>
          <tr style="height: 10px;"></tr>
          <tr>
            <td class='black_info'><?php echo $count['low'];?></td>
            <td>
                <?php
                	echo "<div style='box-shadow: 1px 1px 7px 1px rgba(0, 255, 0, .5); float: left; border-radius: 2px; background: url(templates/01/images/bg_floatingbar.png); height: 12px; width: ".($low*4)."px;'>";
                    for($i = 1; $i < $low; $i+=1){
                        echo " ";	
                    }
				echo "</div>&nbsp;&nbsp;&nbsp;".$low."%";	
                ?>
            </td>
          </tr>
        </table>
            
        <br />
        
        <a href="<?php echo $url;?>gdsstore.html">
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
        </a> 
        
                
                
    </div>
</div>
