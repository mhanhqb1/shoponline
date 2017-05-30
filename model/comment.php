<?php
	class COMMENT extends DATABASE{
		protected $_mid;
		protected $_ten;
		protected $_email;
		protected $_thoigian;
		protected $_noidung;
		
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Mid($mid){
			$this->_mid = $mid;	
		}
		public function get_Mid(){
			return $this->_mid;	
		}
		
		public function set_Ten($ten){
			$this->_ten = $ten;	
		}
		public function get_Ten(){
			return $this->_ten;	
		}
		
		public function set_Email($email){
			$this->_email = $email;	
		}
		public function get_Email(){
			return $this->_email;	
		}
		
		public function set_Thoigian($thoigian){
			$this->_thoigian = $thoigian;	
		}
		public function get_Thoigian(){
			return $this->_thoigian;	
		}
		
		public function set_Noidung($noidung){
			$this->_noidung = $noidung;	
		}
		public function get_Noidung(){
			return $this->_noidung;	
		}
		
		public function List_comment(){	
			$sql = "SELECT * FROM comment WHERE mid='".$this->get_Mid()."'";	
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
		
		public function Send($mid, $ten, $email, $noidung, $score, $today){
			$sql = "INSERT INTO comment(mid, ten, score, email, thoigian, noidung) VALUES ('$mid', '$ten', '$score', '$email', '$today', '$noidung') ";				
			$this->Query($sql);	
		}
		
		public function Check_exist($mid){	
			$sql = "SELECT * FROM rating WHERE mid='$mid'";	
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function Rating($mid, $score){
			$data = $this->Check_exist($mid);
			if($data == FALSE){
				$sql = "INSERT INTO rating(mid, score) VALUES ('$mid', '$score') ";				
				$this->Query($sql);	
			}else{
				$score = $data['score'] + $score;
				$sql = "UPDATE rating SET score = '$score' WHERE mid = '$mid'";
				$this->Query($sql);	
			}
		}
		
		public function Del($id){
			$sql = "DELETE FROM comment WHERE id='$id'";
			$this->Query($sql);	
		}
		
	}
?>