<?php
	class CART extends DATABASE{
		protected $_uid;
		protected $_mid;
		protected $_soluong;
		protected $_mahoadon;
		protected $_tinhtrang;
		protected $_ngaygiao;
		protected $_diachi;
		protected $_cmnd;
		protected $_dienthoai;
		protected $_pttt;
		protected $_email;
		protected $_tennguoimua;	
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Uid($uid){
			$this->_uid = $uid;	
		}
		public function get_Uid(){
			return $this->_uid;	
		}	
		
		
		public function set_Mid($mid){
			$this->_mid = $mid;	
		}
		public function get_Mid(){
			return $this->_mid;	
		}	
		
		
		public function set_Soluong($soluong){
			$this->_soluong = $soluong;	
		}
		public function get_Soluong(){
			return $this->_soluong;	
		}	
		
		
		public function set_Mahoadon($mahoadon){
			$this->_mahoadon = $mahoadon;	
		}
		public function get_Mahoadon(){
			return $this->_mahoadon;	
		}	
		
		
		public function set_Tinhtrang($tinhtrang){
			$this->_tinhtrang = $tinhtrang;	
		}
		public function get_Tinhtrang(){
			return $this->_tinhtrang;	
		}	
		
		
		public function set_Ngaygiao($ngaygiao){
			$this->_ngaygiao = $ngaygiao;	
		}
		public function get_Ngaygiao(){
			return $this->_ngaygiao;	
		}	
		
		
		public function set_Diachi($diachi){
			$this->_diachi = $diachi;	
		}
		public function get_Diachi(){
			return $this->_diachi;	
		}	
		
		
		public function set_Cmnd($cmnd){
			$this->_cmnd = $cmnd;	
		}
		public function get_Cmnd(){
			return $this->_cmnd;	
		}	
		
		
		public function set_Dienthoai($dienthoai){
			$this->_dienthoai = $dienthoai;	
		}
		public function get_Dienthoai(){
			return $this->_dienthoai;	
		}	
		
		
		public function set_Pttt($pttt){
			$this->_pttt = $pttt;	
		}
		public function get_Pttt(){
			return $this->_pttt;	
		}	
		
		
		public function set_Email($email){
			$this->_email = $email;	
		}
		public function get_Email(){
			return $this->_email;	
		}	
		
		
		public function set_Tennguoimua($tennguoimua){
			$this->_tennguoimua = $tennguoimua;	
		}
		public function get_Tennguoimua(){
			return $this->_tennguoimua;	
		}
		
		/*--------------------------FUNCTION--------------------------*/
		
		public function List_all(){
			$sql = "SELECT * FROM giohang ORDER BY mahoadon DESC";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		public function List_cart(){
			$sql = "SELECT * FROM giohang WHERE uid='".$this->get_Uid()."'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}	
		
		public function Addtocart($mhd, $mid, $uid, $qt){	
			$sql = "INSERT INTO giohang(mahoadon, uid, mid, soluong, tinhtrang) VALUES ('$mhd', '$uid', '$mid', '$qt', 'cart')";
			$this->Query($sql);
		}
		
		public function Updatetocart($mhd, $mid, $uid, $qt){
			$sql = "UPDATE giohang SET soluong='$qt' WHERE mahoadon='$mhd' AND mid='$mid' AND uid='$uid'";				
			$this->Query($sql);	
		}
		
		public function Get_max_mhd(){
			$sql = "SELECT * FROM giohang ORDER BY mahoadon DESC";	
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		public function Order_for_guest($mhd, $uid, $mid, $soluong, $tinhtrang, $ngaygiao, $diachi, $dienthoai, $email, $cmnd, $tennguoimua, $pt_thanhtoan){	
			$sql = "INSERT INTO giohang(mahoadon, uid, mid, soluong, tinhtrang, diachi, dienthoai, email, cmnd, tennguoimua, pt_thanhtoan) VALUES ('$mhd', '$uid', '$mid', '$soluong', '$tinhtrang', '$diachi', '$dienthoai', '$email', '$cmnd', '$tennguoimua', '$pt_thanhtoan')";
			$this->Query($sql);
		}
		
		public function Order_for_user($uid, $diachi, $dienthoai, $email, $cmnd, $tennguoimua, $pt_thanhtoan){
			$sql = "UPDATE giohang SET tinhtrang='order', diachi='$diachi', dienthoai='$dienthoai', email='$email', cmnd='$cmnd', tennguoimua='$tennguoimua', pt_thanhtoan='$pt_thanhtoan' WHERE uid='$uid' AND tinhtrang='cart'";				
			$this->Query($sql);	
		}
		
		public function Delete_mid(){	
			$sql = "DELETE FROM giohang WHERE mid='".$this->get_Mid()."' AND uid='".$this->get_Uid()."' AND tinhtrang='cart'";			
			$this->Query($sql);
		}
		
		public function Delete_mid_order(){	
			$sql = "DELETE FROM giohang WHERE mid='".$this->get_Mid()."' AND tinhtrang='order'";			
			$this->Query($sql);
		}
		
		public function Save_change($mid, $uid, $qt, $status){
			$sql = "UPDATE giohang SET soluong='$qt' WHERE mid='$mid' AND uid='$uid' AND tinhtrang='$status'";				
			$this->Query($sql);	
		}
		
		public function Master_save_change($mahoadon, $mid, $qt){
			$sql = "UPDATE giohang SET soluong='$qt' WHERE mid='$mid' AND mahoadon='$mahoadon' AND tinhtrang='order'";				
			$this->Query($sql);	
		}
		
		public function Master_edit_info_in_order(){
			$sql = "UPDATE giohang SET email='".$this->get_Email()."', tennguoimua='".$this->get_Tennguoimua()."', cmnd='".$this->get_Cmnd()."', diachi='".$this->get_Diachi()."', dienthoai='".$this->get_Dienthoai()."' WHERE mahoadon='".$this->get_Mahoadon()."'";				
			$this->Query($sql);	
		}
		
		public function Delete_all_uid($uid){
			$sql = "DELETE FROM giohang WHERE uid='$uid'";
			$this->Query($sql);	
		}
		
		public function Master_list_mhd(){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd FROM giohang WHERE tinhtrang='order' ORDER BY mahoadon ASC";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		public function Master_list_mhd_shipping(){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd FROM giohang WHERE tinhtrang='shipping' ORDER BY mahoadon ASC";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		public function Master_list_mhd_complete(){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd, ngaygiao FROM giohang WHERE tinhtrang='complete' ORDER BY mahoadon ASC";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		
		public function Master_list_mhd_order($mhd){
			$sql = "SELECT * FROM giohang WHERE mahoadon='$mhd'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		public function Delete_ddh($ddh){	
			$sql = "DELETE FROM giohang WHERE mahoadon='$ddh' AND tinhtrang='order'";			
			$this->Query($sql);
		}
		
		public function Delete_ddh_shipping($ddh){	
			$sql = "DELETE FROM giohang WHERE mahoadon='$ddh' AND tinhtrang='shipping'";			
			$this->Query($sql);
		}
		
		public function Delete_ddh_complete($ddh){	
			$sql = "DELETE FROM giohang WHERE mahoadon='$ddh' AND tinhtrang='complete'";			
			$this->Query($sql);
		}
		
		public function Set_date($mahoadon, $date){
			$sql = "UPDATE giohang SET ngaygiao='$date', tinhtrang='complete' WHERE mahoadon='$mahoadon' AND tinhtrang='shipping'";				
			$this->Query($sql);	
		}
		
		public function Set_shipping($mahoadon){
			$sql = "UPDATE giohang SET tinhtrang='shipping' WHERE mahoadon='$mahoadon' AND tinhtrang='order'";				
			$this->Query($sql);	
		}
		
		public function Master_search_order($type, $content){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd FROM giohang WHERE $type LIKE '%$content%' AND tinhtrang='order'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE; // Không có thông tin
			}		
		}
		
		public function Master_search_shipping($type, $content){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd FROM giohang WHERE $type LIKE '%$content%' AND tinhtrang='shipping'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE; // Không có thông tin
			}		
		}
		
		public function Master_search_complete($type, $content){
			$sql = "SELECT distinct mahoadon, tennguoimua, email, dienthoai, diachi, cmnd, ngaygiao FROM giohang WHERE $type LIKE '%$content%' AND tinhtrang='complete'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE; // Không có thông tin
			}		
		}
		
		public function Master_get_mahoadon($uid){
			$sql = "SELECT distinct mahoadon FROM giohang WHERE tinhtrang='cart'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE; // Không có thông tin
			}		
		}
	}
?>