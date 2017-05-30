<?php
	if(isset($_SESSION['ses_title'])){
		unset($_SESSION['ses_title']);	
	}
?>

<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}
	
	function show_comfirm_edit(id)
	{
		window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=news&function=edit_prod&id="+id;	
	}
	
	function show_comfirm_del(id)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Tin tức này không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=news&function=del_prod&id="+id;	
		}
	}
	
</script>
<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Điều chỉnh thông tin
</div>

<div class="label_content">
	Danh sách tin tức đã đăng
</div>

<?php 
	if($data != FALSE){
?>

<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=news&function=search_prod" method="post">
    <div id="master_search" style="text-align:center; color: #000;">
        <h3>Tìm kiếm</h3><br />
        <img src="templates/01/images/network_utility128.png" /><br /><br />
        <div class="rdo">
                    <input type="radio" name="rdo_search" value="name" checked /> Tên tin tức &nbsp;
        </div>  
        <br />
        <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
        <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
        
        <br /><br /><br /><br /><br />
        <h3>DANH SÁCH TIN ĐÃ ĐĂNG</h3>   
        <br />     
    </div>
</form>


		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 30px;'>Id</td>
					<td style='width: 470px;'>Tên tin tức</td>
					<td style='width: 120px;'>Tùy chọn</td>
				</tr>
                <?php
					
					foreach($data as $item){
						$stt = 1;
						echo "
						<tr>
							<td style='background:#F3F3F3;'>$item[id]</td>
							
							<td>
								$item[title]
							</td>
							";
                ?>        
         
                        
                        <td>                        
                        	<input class="btn_edit" type="button" onclick="show_comfirm_edit('<?php echo $item['id']; ?>');" value="" title="Điều chỉnh thông tin"  />
                            <input class="btn_del_one" type="button" onclick="show_comfirm_del('<?php echo $item['id']; ?>');" value="" title="Xóa" />
                        </td>
                        
                    </tr>
                    <?php
						}
					?>
			</table>
		</div>
   
<?php 
	}else{
?>
    <form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=news&function=search_prod" method="post">
        <div id="master_search" style="text-align:center; color: #000;">
            <h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
            <div class="rdo">
                        <input type="radio" name="rdo_search" value="name" checked /> Tên tin tức &nbsp;
            </div>  
            <br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
            <br /><br /><br /><br /><br />
            <h3>DANH SÁCH TIN ĐÃ ĐĂNG</h3>   
            <br />     
        </div>
    </form>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br />Không tìm thấy kết quả nào!</div>
<?php
	}
?>