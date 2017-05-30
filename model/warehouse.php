<?php
	class WAREHOUSE extends DATABASE{
		protected $_mid;
		protected $_soluongcon;
		
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Mid($mid){
			$this->_mid = $mid;	
		}
		public function get_Mid(){
			return $this->_mid;	
		}
		
		public function set_Soluongcon($slc){
			$this->_soluongcon = $slc;	
		}
		public function get_Soluongcon(){
			return $this->_soluongcon;	
		}
		
		public function Check_warehouse(){
			$sql = "SELECT * FROM kho WHERE mid LIKE '%".$this->get_Mid()."%'";
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
		
		
		public function List_warehouse(){
			$sql = "SELECT * FROM kho ORDER BY mid ASC";
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
		
		public function Giamsoluong(){
			$sql = "UPDATE kho SET soluongcon='".$this->get_Soluongcon()."' WHERE mid='".$this->get_Mid()."'";				
			$this->Query($sql);	
		}
		
		public function Add_new($mid, $qt){
			$sql = "INSERT INTO kho(mid, soluongcon) VALUES ('$mid', '$qt') ";				
			$this->Query($sql);	
		}
		
		
		public function Del(){	
			$sql = "DELETE FROM kho WHERE mid='".$this->get_Mid()."'";			
			$this->Query($sql);
		}
		
		public function Update(){	
			$sql = "UPDATE kho SET soluongcon='".$this->get_Soluongcon()."' WHERE mid='".$this->get_Mid()."'";			
			$this->Query($sql);
		}
		
	}
?>