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
</script>

<div id="center_bar">
	<a href="<?php echo $url;?>gdsstore.html">GDS-Store</a> 
    > Liên hệ
</div>

<div class="label_content">
	Gửi ý kiến
</div>
<div class="form">
  <form name='frmComment' onsubmit='return Warning_comment()' action='<?php echo $url;?>gui-y-kien-den-gdsstore.html' method='post' >
        <div style="text-align:center; margin-left: -108px;">
          
          <table width="650" border="0" cellspacing="5">
            <tr>
              <td width="315" height="0">
              <br />
              <img src="templates/01/images/lienhe.png" /><br /><br />
              	<b class="blue_info">Quý khách có thể liên hệ trực tiếp với GDS-Store thông qua:</b><br /><br />
				- Người đại diện: Huỳnh Thanh Tùng<br /><br />
                - Điện thoại: 0937.271.290<br /><br />
                - Email: gds@gradeus.comyr.com<br /><br />
                - Địa chỉ: 178 Bình lợi, P.13, Q.Bình Thạnh, TP.HCM<br /><br />
                </td>
              <td width="316">
              	<div style='box-shadow: 1px 1px 7px 1px rgba(0, 0, 0, .5); margin-left:10px; width: 300px;'>
                	<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201209843317916904651.0004d04fd00108bbfe07a&amp;gl=vn&amp;hl=vi&amp;ie=UTF8&amp;t=m&amp;ll=10.833095,106.704723&amp;spn=0.003161,0.003219&amp;z=17&amp;output=embed"></iframe>
                    </div>
              </td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>
            <input class="dotted_line_ngang" value="" style="background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x; margin: 20px 0 20px 100px;">
          </p>
    </div>
        
        
        
    <table cellspacing="7px" >
            <tr>
                <td class='blue_info'><u>Hoặc gửi thông tin</u></td>
            </tr>
            <tr>
                <td style="height: 5px;"></td>
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
                    <textarea name='txta_content' id='tecspecs_des' rows='5' cols='33' style='border:1px solid #ccc; -webkit-border-radius: 3px;'></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Mã an toàn:</label></td>
                <td>
                    <div style="width: 300px; float: left; height: 90px">
                    <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="library/captcha/securimage_show.php?sid=<?php echo md5(time());?>" />
                    
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
            <tr>
                <td></td>
                <td><input type='submit' class='button' name='btn_confirm' id='btn_confirm' value='Xác nhận' style='float: right;' /></td>
            </tr> 
    </table>
  </form>
</div>