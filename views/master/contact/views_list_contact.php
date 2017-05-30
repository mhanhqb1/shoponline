<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}
	function show_comfirm_del(id)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa ý kiến này không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=contact&function=del&id="+id;	
		}
	}
	
	
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý ý kiến khách hàng 
	<?php 
		if(isset($flag_search)){
			echo "> Tìm kiếm";	
		}
	?>
</div>

<div class="label_content">
	
    <?php 
		if(isset($flag_search)){
			echo "Kết quả tìm kiếm";	
		}else{
			echo "Tìm kiếm và duyệt thông tin";	
		}
	?>
</div>


<?php 
	if($data != FALSE){
		
?>
	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=contact&function=search" method="post">
		<div id="master_search" style="text-align:center; color: #000;">
        	<h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
			<div class="rdo">
                        <input type="radio" name="rdo_search" value="name" checked /> Tên khách hàng &nbsp;
                        <input type="radio" name="rdo_search" value="email" /> Email &nbsp;
            </div>  
			<br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
			<br /><br /><br /><br /><br />
        	<h3>DANH SÁCH Ý KIẾN KHÁCH HÀNG</h3>   
            <br />     
        </div>
	</form>
        
        
		<div id='show_cart'>
			<table>
				<tr id='head_showcart'>
					<td style='width: 20px;'>Id</td>
					<td style='width: 200px;'>Thông tin khách hàng</td>
                    <td style='width: 400px;'>Nội dung</td>
					<td style='width: 50px;'>Xóa</td>
				</tr>
                <?php
					
					foreach($data as $item){
						echo "
							<tr>
								<td>$item[id]</td>
								<td>$item[name]<br />$item[email]</td>
								<td>$item[content]</td>
                       		 	";?>
                                <td>
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
        <div id="master_search" style="text-align:center; color: #000;">
            <br />
            <h3>DANH SÁCH Ý KIẾN KHÁCH HÀNG</h3>   
            <br />     
        </div>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br /><br /><br />Không tìm thấy kết quả nào!</div>
<?php
	}
?>