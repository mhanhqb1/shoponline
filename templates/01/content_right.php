<script type="text/javascript">	
	function Warning_login(){   
		var x = document.frm_Login;
		
		if(x.txt_username.value.length <6 || x.txt_username.value.length > 15){ 
			alert("Tên truy cập không hợp lệ!"); x.txt_username.focus(); return false; 
		}
		
		if(x.txt_password.value.length < 4) {
			alert("Mật khẩu không hợp lệ!"); x.txt_password.focus(); return false; 
		}
    }
	
	
	function Warning_research(){   
		var x = document.frmResearch;
			alert("Rất cám ơn bạn đã đóng góp ý kiến của mình!"); 
    }
</script>

<div id="content_right" style='float: right;'>
	<div class="sidebox"> 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Đăng nhập</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt">  
				<?php
					if(isset($_SESSION['ses_username']) && isset($_SESSION['ses_level'])){
						$u = $_SESSION['ses_username'];
						$l = $_SESSION['ses_level']; 
						echo "<div class='hello_member'>Xin chào, $u!</div>";?>
                        
                        <div class="user_space"><a href="<?php echo $url;?>thong-tin-ca-nhan.html"> Thông tin cá nhân </a></div>
                        <div class="user_space"><a href="<?php echo $url;?>lich-su-giao-dich.html"> Lịch sử giao dịch </a></div>
                        <div class="user_space"><a href="<?php echo $url;?>doi-mat-khau.html">Đổi mật khẩu </a></div>
                        
						<form onsubmit="return Warning_log_out()" action="<?php echo $url;?>dang-xuat.html" method="post" >                            
                            <input type="submit" class="button" id="btn_login_out" name="btn_logout" value="Đăng xuất" />
                        </form>
					<?php	
					}else{						
						echo "<div class='hello_member'>Xin chào, quý khách!</div>";?> 
                        <form name="frm_Login" action="<?php echo $url;?>dang-nhap.html" method="post" onsubmit="return Warning_login()">
                        
                            <input class="search_text" id="txt_username" type="text" name="txt_username" value="Tên tài khoản" onclick="this.value=''" onblur="if(this.value=='') this.value='Tên tài khoản'" />             
                            
                            <input class="search_text" id="txt_password" type="password" name="txt_password" value="@#$!@#$!@#" onclick="this.value=''" onblur="if(this.value=='') this.value='@#$!@#$!@#'" />
                            <a href="quen-mat-khau.html"> Quên mật khẩu? </a>
                            <div id="ketqua_login"></div>  
                            <input type="submit" class="button" id="btn_login_out" name="btn_login" value="Đăng nhập" />
                        </form>
				<?php
                	}
                ?>              

                       
                
                <div style="height:36px;"></div>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    
    <?php
        	$gv_class_research = new RESEARCH;
			$data = $gv_class_research->Show_current();
			if($data != FALSE){
		?>
     <div class="sidebox" > 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Khảo sát thông tin</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt">
            <form <?php if(!isset($_SESSION['ses_research'])){ ?>onsubmit="return Warning_research()"<?php }?> name="frmResearch" action="<?php echo $url;?>khao-sat.html" method="post">
            	<b class="blue_info" style="text-align: justify;"><?php echo $data['question'];?></b><br><div style="height: 10px;"></div>
                <?php if(!isset($_SESSION['ses_research'])){?>
                	<input type="radio" name="research" value="hight" checked>&nbsp;<?php echo $data['hight'];?><br><div style="height: 5px;"></div>
                    <input type="radio" name="research" value="midium">&nbsp;<?php echo $data['midium'];?><br><div style="height: 5px;"></div>
                    <input type="radio" name="research" value="low">&nbsp;<?php echo $data['low'];?><br>
                <?php }else{echo "<div style='text-align: left; margin-bottom: 0px;'>Cám ơn ý kiến đóng góp của bạn!</div>";}?>
                    <input type="submit" class="button" id="btn_login_out" name="btn_send_result_reseach" value="<?php if(isset($_SESSION['ses_research'])){echo "Xem kết quả";}else{echo "Đánh giá";}?>" /><br><br>
			</form>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    	<?php
			}
			$gv_class_mathang = new MATHANG;
			$data = $gv_class_mathang->List_hot();
			$stop = 0;
			if($data != FALSE){
		?>
        
        
     <div class="sidebox" > 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Sản phẩm nổi bật</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt" style="text-align: center; font-weight: bold;">
            	<MARQUEE DIRECTION="DOWN">
            	<?php					
					foreach($data as $item){
						$tenmh =  unicode_convert($item['tenmh']);
						if($stop < 5){
							echo "<a class='search_techspec' href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html'><img src='$item[hinhanh]' /><br />";
							echo "$item[tenmh]</a><br /><br />";
						}
						$stop++;							
					}                	
				?>
                </MARQUEE>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
    <?php
		}
		$gv_class_mathang = new MATHANG;
		$data = $gv_class_mathang->List_bestbuy();
		$stop = 0;
		if($data != FALSE){?>    
            <div class="sidebox" > 
                <!--Header Sidebox-->
                <div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
                <div class="sidebox-head-cnt">Sản phẩm bán chạy</div></div></div></div>
                <!--Finish Header Sidebox-->
                
                <!--Content Sidebox-->
                <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
                    <div class="sidebox-body-cnt" style="text-align: center; font-weight: bold;">
                    	<MARQUEE DIRECTION="UP">
                        <?php					
							foreach($data as $item){
								$tenmh =  unicode_convert($item['tenmh']);
								if($stop < 5){
									echo "<a class='search_techspec' href='".$url."chi-tiet-san-pham/$tenmh/$item[mid].html'><img src='$item[hinhanh]' /><br />";
									echo "$item[tenmh]</a><br /><br />";
								}
								$stop++;                                        
							}                      
                        ?>
                        </MARQUEE>
                </div></div></div></div>
                <!--Finish Content Sidebox-->
                
                <!--Footer Sidebox-->
                <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
                <!--Finish Footer Sidebox-->
            </div>
    <?php
		}
    ?>
    
    <div class="sidebox" > 
    	<!--Header Sidebox-->
    	<div class="sidebox-head-r"> <div class="sidebox-head-l"> <div class="sidebox-head-c"> 
		<div class="sidebox-head-cnt">Liên hệ quảng cáo</div></div></div></div>
        <!--Finish Header Sidebox-->
        
        <!--Content Sidebox-->
        <div class="sidebox-body-r"><div class="sidebox-body-l"><div class="sidebox-body-c"> 
        	<div class="sidebox-body-cnt" id="adv_img_right_side">
            	<a href="http://facebook.com"><img src="templates/01/images/adv/fb.jpg"></a>
        </div></div></div></div>
        <!--Finish Content Sidebox-->
        
        <!--Footer Sidebox-->
        <div class="sidebox-foot-r"> <div class="sidebox-foot-l"> <div class="sidebox-foot-c"></div></div></div>
        <!--Finish Footer Sidebox-->
	</div>
</div>