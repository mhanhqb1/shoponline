<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Đăng nhập
</div>




<?php
	
	if($result == 'ok'){ ?>
    	<div class="label_content">
            Kết quả đăng nhập
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'>Đăng nhập thành công!</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến GDS-Store sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Trang chủ nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_storepage.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $url;?>gdsstore.html' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
                </form>
                
            </div>
        </div>

<?php
	}else{?>
    	<div class="label_content" style="color: #f00;">
            Kết quả đăng nhập
        </div>
		<div class='form'>
            <div class='result_form'>
                <div class='result_success'  style="color: #f00;">Đăng nhập thất bại, tên đăng nhập hoặc mật khẩu không chính xác!</div> <br />
                <div class="wait">
                    Quý khách sẽ được chuyển đến GDS-Store sau <b id="container" style="color:#F00"></b> giây...<br><br>
                    Hoặc nhấp vào nút Trang chủ nếu bạn không muốn chờ!
                    <br><br>
                </div>
                <script type="text/javascript" src="library/load_storepage.js"></script>
                <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
                <br /><br />
                
                <form action='<?php echo $url;?>gdsstore.html' method='post'>
                    <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='TRANG CHỦ' />
                </form>
                
            </div>
        </div>	
<?php
	}
?>