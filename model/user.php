<?php
	class USER extends DATABASE{
		protected $_username;
		protected $_password;
		protected $_level;
		protected $_email;
		protected $_firstname;
		protected $_lastname;
		protected $_idnum;
		protected $_birthday;
		protected $_sex;
		protected $_address;
		protected $_phone;
		
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Username($user){
			$this->_username = $user;	
		}
		public function get_Username(){
			return $this->_username;	
		}
		
		public function set_Password($pass){
			$this->_password = $pass;	
		}
		public function get_Password(){
			return $this->_password;	
		}
		
		
		public function set_Level($level){
			$this->_level = $level;	
		}
		public function get_Level(){
			return $this->_level;	
		}
		
		
		public function set_Email($email){
			$this->_email = $email;	
		}
		public function get_Email(){
			return $this->_email;	
		}
		
		
		public function set_firstname($fname){
			$this->_firstname = $fname;	
		}
		public function get_Firstname(){
			return $this->_firstname;	
		}
		
		
		public function set_lastname($lname){
			$this->_lastname = $lname;	
		}
		public function get_Lastname(){
			return $this->_lastname;	
		}
		
		
		public function set_Idnum($idnum){
			$this->_idnum = $idnum;	
		}
		public function get_Idnum(){
			return $this->_idnum;	
		}
		
		
		public function set_Birthday($birthday){
			$this->_birthday = $birthday;	
		}
		public function get_Birthday(){
			return $this->_birthday;	
		}
		
		
		public function set_Sex($sex){
			$this->_sex = $sex;	
		}
		public function get_Sex(){
			return $this->_sex;	
		}
		
		
		public function set_Address($address){
			$this->_address = $address;	
		}
		public function get_Address(){
			return $this->_address;	
		}
		
		
		public function set_Phone($phone){
			$this->_phone = $phone;	
		}
		public function get_Phone(){
			return $this->_phone;	
		}
		
		public function Check_login(){
			$sql = "SELECT * FROM account WHERE username='".$this->get_Username()."' AND password='".$this->get_Password()."'";
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
		
		public function List_all(){
			$sql = "SELECT * FROM account ORDER BY uid ASC";
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
		
		public function Check_user_exist(){
			$sql = "SELECT * FROM account WHERE username='".$this->get_Username()."'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				$row = FALSE; // Username đã tồn tại
			}else{
				$row = TRUE; // Username chưa đăng ký
			}
			return $row;
		}
		
		public function Check_register(){
			if($this->Check_user_exist() == TRUE){
				$sql = "INSERT INTO account(username, level, password, email, ten, ho, cmnd, ngaysinh, gioitinh, diachi, dienthoai) values('".$this->get_Username()."', '".$this->get_Level()."', '".$this->get_Password()."', '".$this->get_Email()."', '".$this->get_Firstname()."', '".$this->get_Lastname()."', '".$this->get_Idnum()."', '".$this->get_Birthday()."', '".$this->get_Sex()."', '".$this->get_Address()."', '".$this->get_Phone()."')";
				$this->Query($sql);
				return TRUE;
			}else{
				return FALSE;	
			}
		}
		
		public function Get_user_info($username){ //Lấy thông tin 1 user theo username
			$sql = "SELECT * FROM account WHERE username='$username'";	
			$this->Query($sql);
			return $this->Fetch();			
		}
		
		public function Change_password($username, $new_password){			
			$sql = "UPDATE account SET password='".$new_password."' WHERE username='$username'";				
			$this->Query($sql);			
		}
		
		public function Update_personal(){
			$sql = "UPDATE account SET email='".$this->get_Email()."', ten='".$this->get_Firstname()."', ho='".$this->get_Lastname()."', cmnd='".$this->get_Idnum()."', ngaysinh='".$this->get_Birthday()."', gioitinh='".$this->get_Sex()."', diachi='".$this->get_Address()."', dienthoai='".$this->get_Phone()."' WHERE username='".$this->get_Username()."'";
			
			$this->Query($sql);
		}		
		
		public function Delete($username){
			$sql = "DELETE FROM account WHERE username='$username'";
			$this->Query($sql);	
		}
		
		
		public function Check_username($id=""){
			if($id != ""){
				$sql="select * from user where username='".$this->get_Username()."' and id !='$id'";	
			}else{
				$sql="select * from user where username='".$this->get_Username()."'";
			}
			$this->query($sql);
			if($this->num_rows() != 0){
				return FALSE;	
			}else{
				return TRUE;	
			}
		}
		
		public function Edit_user($id){
			if($this->get_Password() != 'none'){
				$sql = "UPDATE user SET password='".$this->get_Password()."', level='".$this->get_Level()."' WHERE id='$id'";		
			}else{
				$sql = "UPDATE user SET level='".$this->get_Level()."' WHERE id='$id'";		
			}			
			$this->Query($sql);			
		}
		
		public function Master_edit(){
			$sql = "UPDATE account SET level = '".$this->get_Level()."', password = '".$this->get_Password()."', email='".$this->get_Email()."', ten='".$this->get_Firstname()."', ho='".$this->get_Lastname()."', cmnd='".$this->get_Idnum()."', ngaysinh='".$this->get_Birthday()."', gioitinh='".$this->get_Sex()."', diachi='".$this->get_Address()."', dienthoai='".$this->get_Phone()."' WHERE username='".$this->get_Username()."'";
			
			$this->Query($sql);
		}
		public function Master_search($type, $content){
			$sql = "SELECT * FROM account WHERE $type LIKE '%$content%'";
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
		
		public function Contact_send($ten, $email, $noidung, $today){
			$sql = "INSERT INTO contact(name, email, time, content) values('$ten', '$email', '$today', '$noidung')";
			$this->Query($sql);
		}
		
		public function List_contact(){
			$sql = "SELECT * FROM contact";
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
		
		public function Del_contact($id){
			$sql = "DELETE FROM contact WHERE id = $id";
			$this->Query($sql);
		}
		
		public function Search_contact($type, $content){	
			$sql = "SELECT * FROM contact WHERE $type LIKE '%$content%'";	
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
	}
?>