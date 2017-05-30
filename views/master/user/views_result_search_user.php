<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}


	function show_comfirm_edit(username)
	{
		window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=user&function=edit&u="+username;	
	}
	
	function show_comfirm_del(username)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Tài khoản \""+ username +"\" không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=user&function=del&u="+username;	
		}
	}
	
	function show_comfirm_del_all(username)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Tài khoản \""+ username +"\" và toàn bộ thông tin giao dịch không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=user&function=del_all&u="+username;	
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > <a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=list_user">Quản lý khách hàng</a>
    > Tìm kiếm
</div>

<div class="label_content">
	Kết quả tìm kiếm
</div>

<?php 
	if($data != FALSE){
?>
	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=search" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="username" checked /> Tài khoản &nbsp;
                        <input type="radio" name="rdo_search" value="email" /> Email &nbsp;
                        <input type="radio" name="rdo_search" value="cmnd" /> CMND &nbsp;
                        <input type="radio" name="rdo_search" value="dienthoai" /> Điện thoại &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br /><br /><br /><br />
        	<h3>DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h3>   
            <br />     
        </div>
        </form>
        
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 30px;'>Id</td>
					<td style='width: 90px;'>Username</td>
					<td style='width: 130px;'>Họ tên</td>
					<td style='width: 140px;'>Email</td>
					<td style='width: 80px;'>Điện thoại</td>
					<td style='width: 130px;'>Tùy chọn</td>
				</tr>
				<?php 
					foreach($data as $item){
                        echo"
							<tr style='font-size: 11px;'>";
								if($item['level'] == 'MASTER'){
									echo "<td style='background:#F00; color: #fff; border: 1px solid #F00;'>$item[uid]</td>";	
								}else{
									echo "<td style='background:#F3F3F3;'>$item[uid]</td>";
								}
								echo "<td>$item[username]</td>
								<td>$item[ho]&nbsp;$item[ten]</td>
								<td>$item[email]</td>
								<td>$item[dienthoai]</td>
								<td>
									<div class='cp' style='margin: 3px 0 0 0;'>";
				?>
                                        <input class="btn_edit" type="button" onclick="show_comfirm_edit('<?php echo $item['username']?>');" value="" title="Chỉnh sửa thông tin" />
                                        <input class="btn_del" type="button" onclick="show_comfirm_del('<?php echo $item['username']?>');" value="" title="Xóa tài khoản" />
                                        <input class="btn_del_all" type="button" onclick="show_comfirm_del_all('<?php echo $item['username']?>');" value="" title="Xóa toàn bộ tài khoản và thông tin giao dịch" />
				
                <?php
						echo "</td></div></tr>";
					}
				?>				
			</table>
		</div>
   
<?php 
	}else{?>
		<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=user&function=search" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="username" checked /> Tài khoản &nbsp;
                        <input type="radio" name="rdo_search" value="email" /> Email &nbsp;
                        <input type="radio" name="rdo_search" value="cmnd" /> CMND &nbsp;
                        <input type="radio" name="rdo_search" value="dienthoai" /> Điện thoại &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br />
        </div>
        </form>
		<?php
		echo "<div class='empty_history'><img src='templates/01/images/not_found.png' />";
		echo "<br /><br /><br />Không tìm thấy kết quả nào!</div>";
	}
?>