<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Thông tin cá nhân
</div>



<?php			
	if($result == "Done!"){	?>
    	<div class="label_content" style="color: #f00;">
            Kết quả cập nhật thông tin
        </div>
			<div class='form'>
				<div class='result_form'>
                	<div class='result_success'>Thông tin đã được cập nhật thành công!</div> <br />
                    <div class="wait">
                        Quý khách sẽ được chuyển đến GDS-Store sau <b id="container" style="color:#F00"></b> giây...<br><br>
                        Hoặc nhấp vào nút Trang chủ nếu bạn không muốn chờ!
                        <br><br>
                    </div>
                    <script type="text/javascript" src="library/load_storepage.js"></script>
                    <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                    <br /><br />
                    
					<a href="<?php echo $url;?>gdsstore.html">
						<input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
					</a>
                    
				</div>
			</div>
<?php			
	}
	if($result == "Error!"){	?>	
    	<div class="label_content" style="color: #f00;">
            Kết quả cập nhật thông tin
        </div>
		<div class='form'>
				<div class='result_form'>
                	<div class='result_success' style="color: #f00;">Mật khẩu không chính xác, vui lòng kiểm tra lại!</div> <br />
                    <div class="wait">
                        Quý khách sẽ được chuyển đến trang Thông tin cá nhân sau <b id="container" style="color:#F00"></b> giây...<br><br>
                        Hoặc nhấp vào nút trang Thông tin cá nhân nếu bạn không muốn chờ!
                        <br><br>
                    </div>
                    <script type="text/javascript" src="library/load_storepage.js"></script>
                    <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                    <br /><br />
                    
					<a href="javascript:history.go(-1)">
						<input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='THÔNG TIN CÁ NHÂN' />
					</a>
                    
				</div>
			</div>
	<?php 
	}
?>