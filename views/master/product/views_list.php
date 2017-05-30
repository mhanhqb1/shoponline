<script type="text/javascript">
	function Warning_search(){ 
		var x = document.frmSearch;
		
		if(x.txt_search_content.value.length < 1) {
			alert("Vui lòng nhập thông tin cần tìm kiếm!"); x.txt_search_content.focus(); return false; 
		}
	}

	function show_comfirm_edit(mid)
	{
		window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=product&function=edit&mid="+mid;	
	}
	
	function show_comfirm_del(mid)
	{
		var comfirmBox;
		comfirmBox = confirm("Bạn có thật sự muốn xóa Sản phẩm: \""+ mid +"\" không?");
		
		if(comfirmBox == false){
			return false;
		}else{
			window.location="<?php echo $_SERVER['PHP_SELF']?>?controller=master&action=product&function=del&mid="+mid;	
		}
	}
</script>

<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    > Quản lý thông tin sản phẩm
</div>

<div class="label_content">
	TÌM KIẾM VÀ ĐIỀU CHỈNH THÔNG TIN
</div>


<?php 
	if($data != FALSE){
?>

	<form name="frmSearch" onsubmit="return Warning_search()" action="<?php echo $_SERVER['PHP_SELF'] ?>?controller=master&action=product&function=search" method="post">
        <div id="master_search" style="text-align:center; color: #000;">
            <h3>Tìm kiếm</h3><br />
            <img src="templates/01/images/network_utility128.png" /><br /><br />
            <div class="rdo">
                        <input type="radio" name="rdo_search" value="mid" checked /> Mã số &nbsp;
                        <input type="radio" name="rdo_search" value="tenmh" /> Tên sản phẩm &nbsp;
                        <input type="radio" name="rdo_search" value="hangsx" /> Hãng SX &nbsp;
            </div>  
            <br />
            <input type="text" name="txt_search_content" style="height: 21px; width: 350px;" />&nbsp;&nbsp;
            <input type="submit" class="button" name="btn_search" id="btn_search" value="Tìm" />
            
            <br /><br /><br /><br /><br />
            <h3>DANH SÁCH SẢN PHẨM</h3>   
            <br />     
        </div>
    </form>
        
    <div id='show_cart'>
        <table>
            <tr id='head_showcart'>
                <td style='width: 70px;'>Mid</td>
                <td style='width: 90px;'>Hình ảnh</td>
                <td style='width: 160px;'>Tên Sản phẩm</td>
                <td style='width: 100px;'>Hãng SX</td>
                <td style='width: 100px;'>Đơn giá</td>
                <td style='width: 80px;'>Tùy chọn</td>
            </tr>
            <?php 
                foreach($data as $item){
                    echo"
                        <tr>
							<td style='background: #f3f3f3;'>$item[mid]</td>
                            <td><img src='$item[hinhanh]' /></td>
                            <td>$item[tenmh]</td>
                            <td>$item[hangsx]</td>
							<td>".number_format($item['dongia'],0,'.','.')." VNĐ</td>
							
                            <td>
                                <div class='cp' style='margin: 3px 0 0 0;'>";
            ?>
                                    <input class="btn_edit" type="button" onclick="show_comfirm_edit('<?php echo $item['mid']?>');" value="" title="Điều chỉnh thông tin" />
                                    <input class="btn_del_one" type="button" onclick="show_comfirm_del('<?php echo $item['mid']?>');" value="" title="Xóa sản phẩm" />
            
            <?php
                    echo "</td></div></tr>";
                }
            ?>				
        </table>
    </div>
   
<?php 
	}else{
?>
		<div id="master_search" style="text-align:center; color: #000;">
        	<br />
        	<h3>DANH SÁCH SẢN PHẨM</h3>   
            <br />     
        </div>
		<div class='empty_history'><img src='templates/01/images/not_found.png' />
		<br /><br /><br />Không tìm thấy kết quả nào!</div>
<?php
    }
?>