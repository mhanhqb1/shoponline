<?php
	class RESEARCH extends DATABASE{
		
		public function List_all(){
			$sql = "SELECT * FROM research ORDER BY id DESC";
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
		
		public function Show_current(){
			$sql = "SELECT question, hight, midium, low FROM research WHERE status='1'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function Show_id($id){
			$sql = "SELECT id, question, hight, midium, low, status FROM research WHERE id='$id'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function Get_count(){
			$sql = "SELECT * FROM research WHERE status='1'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function Send($result, $count){	
			$sql = "UPDATE research SET count_$result='$count' WHERE status='1'";			
			$this->Query($sql);
		}
		
		public function Deactivate(){
			$sql = "UPDATE research SET status='0' WHERE status='1'";				
			$this->Query($sql);			
		}
		
		public function New_research($quest, $hight, $midium, $low, $status, $time){
			$sql = "INSERT INTO research(question, hight, midium, low, status, time) VALUES ('$quest', '$hight', '$midium', '$low', '$status', '$time')";				
			$this->Query($sql);	
		}
		
		public function Edit_research($id, $quest, $hight, $midium, $low, $status){
			$sql = "UPDATE research SET question='$quest', hight='$hight', midium='$midium', low='$low', status='$status'  WHERE id='$id'";				
			$this->Query($sql);	
		}
		
		public function Del($id){	
			$sql = "DELETE FROM research WHERE id='$id'";			
			$this->Query($sql);
		}
		
		public function Search($key){	
			$sql = "SELECT * FROM research WHERE question LIKE '%$key%'";	
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