<?php
	class NEWS extends DATABASE{
		protected $_id;
		protected $_type;
		protected $_content;
		protected $_time;
		
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Id($id){
			$this->_id = $id;	
		}
		public function get_Id(){
			return $this->_id;	
		}
		
		public function set_Type($type){
			$this->_type = $type;	
		}
		public function get_Type(){
			return $this->_type;	
		}
		
		
		public function set_Content($content){
			$this->_content = $content;	
		}
		public function get_Content(){
			return $this->_content;	
		}
		
		
		public function set_Time($time){
			$this->_time = $time;	
		}
		public function get_time(){
			return $this->_time;	
		}
		
		
		public function List_new_prod(){
			$sql = "SELECT * FROM news WHERE type='new_prod' ORDER BY id DESC LIMIT 0,1";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function List_new_sale(){
			$sql = "SELECT * FROM news WHERE type='sale' ORDER BY id DESC";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function List_news_sale(){
			$sql = "SELECT * FROM news WHERE type='sale' ORDER BY id DESC";
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
		
		public function List_news_prod(){
			$sql = "SELECT * FROM news WHERE type='new_prod' ORDER BY id DESC";
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
		
		public function List_id_sale($id){
			$sql = "SELECT * FROM news WHERE id='$id'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function List_id_new_prod($id){
			$sql = "SELECT * FROM news WHERE id='$id'";
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function List_other_sale(){
			$sql = "SELECT id, title, time FROM news WHERE type='sale' ORDER BY id DESC";
			$this->Query($sql);
			if($this->Num_rows() == 1){
				return FALSE;
			}
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		
		public function List_other_prod(){
			$sql = "SELECT id, title, time FROM news WHERE type='new_prod' ORDER BY id DESC";
			$this->Query($sql);
			if($this->Num_rows() == 1){
				return FALSE;
			}
			if($this->Num_rows() != 0){
				while($row = $this->Fetch()){
					$data[] = $row;	
				}
				return $data;
			}else{
				return FALSE;
			}
		}
		
		
		public function Add_new_prod($title, $content, $time){
			$sql = "INSERT INTO news(type, title, content, time) VALUES ('new_prod', '$title', '$content', '$time') ";
			//$sql = "UPDATE news SET content='$content', time='$time' WHERE type='new_prod'";						
			$this->Query($sql);	
		}
		
		public function Edit_new_sale($id, $title, $content, $time){
			//$sql = "INSERT INTO news(type, content, time) VALUES ('new_prod', '$content', '$time') ";
			$sql = "UPDATE news SET title='$title', content='$content', time='$time' WHERE id='$id'";						
			$this->Query($sql);	
		}
		
		public function Edit_new_prod($id, $title, $content, $time){
			//$sql = "INSERT INTO news(type, content, time) VALUES ('new_prod', '$content', '$time') ";
			$sql = "UPDATE news SET title='$title', content='$content', time='$time' WHERE id='$id'";						
			$this->Query($sql);	
		}
		
		public function Add_new_sale($title, $content, $time){
			//$sql = "INSERT INTO news(type, content, time) VALUES ('new_prod', '$content', '$time') ";
			$sql = "INSERT INTO news (type, title, content, time) VALUES ('sale', '$title', '$content', '$time');";						
			$this->Query($sql);	
		}
		
		
		public function Del_sale($id){	
			$sql = "DELETE FROM news WHERE id='$id'";			
			$this->Query($sql);
		}
		
		public function Del_prod($id){	
			$sql = "DELETE FROM news WHERE id='$id'";			
			$this->Query($sql);
		}
		
		public function Search($key){	
			$sql = "SELECT * FROM news WHERE title LIKE '%$key%'";	
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
		
		public function Search_prod($key){	
			$sql = "SELECT * FROM news WHERE type='new_prod' AND title LIKE '%$key%'";	
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
		
		public function List_comment_sale($nid){	
			$sql = "SELECT * FROM comment_sale WHERE nid=$nid ORDER BY id DESC";	
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
		
		public function List_comment_prod($pid){	
			$sql = "SELECT * FROM comment_prod WHERE pid=$pid ORDER BY id DESC";	
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
		
		public function Del_comment_sale($id){	
			$sql = "DELETE FROM comment_sale WHERE id='$id'";			
			$this->Query($sql);
		}
		
		public function Del_comment_prod($id){	
			$sql = "DELETE FROM comment_prod WHERE id='$id'";			
			$this->Query($sql);
		}
		
		public function Send_comment_sale($nid, $ten, $email, $noidung, $today){
			$sql = "INSERT INTO comment_sale (nid, ten, email, noidung, thoigian) VALUES ('$nid', '$ten', '$email', '$noidung', '$today');";						
			$this->Query($sql);	
		}
		
		public function Send_comment_prod($pid, $ten, $email, $noidung, $today){
			$sql = "INSERT INTO comment_prod (pid, ten, email, noidung, thoigian) VALUES ('$pid', '$ten', '$email', '$noidung', '$today');";						
			$this->Query($sql);	
		}
	}
?>