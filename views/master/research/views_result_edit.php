<div id="center_bar">
	<a href="<?php echo $_SERVER['PHP_SELF'] ?>?controller=product&action=list_product">GDS-Store</a> 
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?ontroller=master&action=research&function=list"> > Quản lý thông tin khảo sát</a>
</div>

<div class="label_content">
    Điều chỉnh thông tin
</div>
<div class='form'>
    <div class='result_form'>
        <div class='result_success'>Câu hỏi khảo sát đã được điều chỉnh!</div> <br />
        <div class="wait">
            Bạn sẽ được chuyển đến trang Quản lý thông tin khảo sát sau <b id="container" style="color:#F00"></b> giây...<br><br>
            Hoặc nhấp vào nút Quản lý thông tin khảo sát nếu bạn không muốn chờ!
            <br><br>
        </div>
        <script type="text/javascript" src="library/load_config_research.js"></script>
        <img style="margin: 0 0 0 -5px;" src="templates/01/images/loading.gif">
        <br /><br />
        
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>?controller=master&action=research&function=list' method='post'>
            <input type='submit' class='button' id='btn_homepage' name='btn_homepage' value='QUẢN LÝ THÔNG TIN KHẢO SÁT' />
        </form>
        
    </div>
</div>