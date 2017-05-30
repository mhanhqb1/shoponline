<?php
	class MATHANG extends DATABASE{
		protected $_mid;
		protected $_hangsx;
		protected $_tenmh;
		protected $_hinhanh;
		protected $_thongsokythuat;
		protected $_dongia;
		
		public function __construct(){
			$this->Connection();	
		}
		
		public function set_Mid($mid){
			$this->_mid = $mid;	
		}
		public function get_Mid(){
			return $this->_mid;	
		}
		
		public function set_Hangsx($hangsx){
			$this->_hangsx = $hangsx;	
		}
		public function get_Hangsx(){
			return $this->_hangsx;	
		}
		
		public function set_Tenmh($tenmh){
			$this->_tenmh = $tenmh;	
		}
		public function get_(){
			return $this->_tenmh;	
		}
		
		public function set_Hinhanh($hinhanh){
			$this->_hinhanh = $hinhanh;	
		}
		public function get_Hinhanh(){
			return $this->_hinhanh;	
		}
		
		public function set_Thongsokythuat($thongsokythuat){
			$this->_thongsokythuat = $thongsokythuat;	
		}
		public function get_Thongsokythuat(){
			return $this->_thongsokythuat;	
		}
		
		public function set_Dongia($dongia){
			$this->_dongia = $dongia;	
		}
		public function get_Dongia(){
			return $this->_dongia;	
		}
		
		//distinct tenmh << ngăn trùng lặp khi list
		public function List_hangsx(){
			$sql = "SELECT distinct hangsx FROM mathang ORDER BY hangsx";
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
		
		public function List_mh($hangsx){
			$sql = "SELECT * FROM mathang WHERE hangsx='$hangsx'";
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
		
		
		public function List_alls(){	
			$sql = "SELECT * FROM mathang";	
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
		
		public function List_hot(){	
			$sql = "SELECT * FROM mathang WHERE hot='1'";	
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
		
		public function List_bestbuy(){	
			$sql = "SELECT * FROM mathang WHERE bestbuy='1'";	
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
		
		public function List_tenmh(){	
			$sql = "SELECT tenmh FROM mathang";	
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
		
		public function List_alls_techspec(){	
			$sql = "SELECT * FROM techspec";	
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
		
		public function Info(){	
			$mid = $this->get_Mid();
			$sql = "SELECT * FROM mathang WHERE mid='$mid'";		
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
		
		
		public function Details(){	
			$mid = $this->get_Mid();
			$sql = "SELECT * FROM techspec WHERE mid='$mid'";	
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
		
		public function Search_custom($key){	
			$sql = "SELECT * FROM mathang WHERE tenmh LIKE '%$key%'";	
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
		
		
		public function Master_search($type, $content){	
			$sql = "SELECT * FROM mathang WHERE $type LIKE '%$content%'";	
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
		
		public function Search_default($key){	
			if($key == 0){
				$price_max = 2000000;	$price_min = 0;	
			}
			
			if($key == 2){
				$price_max = 4000000;	$price_min = 2000000;	
			}
			
			if($key == 4){
				$price_max = 8000000;	$price_min = 4000000;	
			}
			
			if($key == 8){
				$price_max = 12000000;	$price_min = 8000000;	
			}
			
			if($key == 12){
				$price_max = 1000000000;	$price_min = 12000000;	
			}
			
			$sql = "SELECT * FROM mathang WHERE dongia>'$price_min' AND dongia<'$price_max'";	
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
		
		public function Update($mid, $tenmh, $hangsx, $dongia, $hinhanh, $Network, $Color, $Dimensionsweight, $Language, $Typeofscreen, $Displaysize, $Ringingtone, $Messages, $Connect, $Camera, $Contacts, $Memory, $Memorycard, $Downloadmusic, $Vibrate, $GPRS, $HSCSD, $EDGE, $GGG, $WLAN, $OS, $Clock, $Alarms, $FM, $Games, $Browser, $Java, $Film, $Recording, $Listentomusic, $Watchingmovies, $Callrecording, $Speakerphone, $Typeofbattery, $Standbytime, $Talktime, $Description, $Image, $Video){
			
			$sql = "
					UPDATE techspec SET Network = '$Network', Color = '$Color', Dimensionsweight = '$Dimensionsweight', Language = '$Language', Typeofscreen = '$Typeofscreen', Displaysize = '$Displaysize', Ringingtone = '$Ringingtone', Messages = '$Messages', Connect = '$Connect', Camera = '$Camera', Contacts = '$Contacts', Memory = '$Memory', Memorycard = '$Memorycard', Downloadmusic = '$Downloadmusic', Vibrate = '$Vibrate', GPRS = '$GPRS', HSCSD = '$HSCSD', EDGE = '$EDGE', 3G = '$GGG', WLAN = '$WLAN', OS = '$OS', Clock = '$Clock', Alarms = '$Alarms', FM = '$FM', Games = '$Games', Browser = '$Browser', Java = '$Java', Film = '$Film', Recording = '$Recording', Listentomusic = '$Listentomusic', Watchingmovies = '$Watchingmovies', Callrecording = '$Callrecording', Speakerphone = '$Speakerphone', Typeofbattery = '$Typeofbattery', Standbytime = '$Standbytime', Talktime = '$Talktime', Description = '$Description', Image = '$Image', Video = '$Video' WHERE mid = '$mid';
			";
			$this->Query($sql);	
			
			$sql = "UPDATE mathang SET hangsx='$hangsx', tenmh='$tenmh', hinhanh='$hinhanh', dongia='$dongia' WHERE mid='$mid'";				
			$this->Query($sql);	
		}
		
		public function Add_new($mid, $tenmh, $hangsx, $dongia, $hinhanh, $Network, $Color, $Dimensionsweight, $Language, $Typeofscreen, $Displaysize, $Ringingtone, $Messages, $Connect, $Camera, $Contacts, $Memory, $Memorycard, $Downloadmusic, $Vibrate, $GPRS, $HSCSD, $EDGE, $GGG, $WLAN, $OS, $Clock, $Alarms, $FM, $Games, $Browser, $Java, $Film, $Recording, $Listentomusic, $Watchingmovies, $Callrecording, $Speakerphone, $Typeofbattery, $Standbytime, $Talktime, $Description, $Image, $Video){
			$sql = "INSERT INTO techspec (mid, Network, Color, Dimensionsweight, Language, Typeofscreen, Displaysize, Ringingtone, Messages, Connect, Camera, Contacts, Memory, Memorycard, Downloadmusic, Vibrate, GPRS, HSCSD, EDGE, 3G, WLAN, OS, Clock, Alarms, FM, Games, Browser, Java, Film, Recording, Listentomusic, Watchingmovies, Callrecording, Speakerphone, Typeofbattery, Standbytime, Talktime, Description, Image, Video) VALUES ('$mid', '$Network', '$Color', '$Dimensionsweight', '$Language', '$Typeofscreen', '$Displaysize', '$Ringingtone', '$Messages', '$Connect', '$Camera', '$Contacts', '$Memory', '$Memorycard', '$Downloadmusic', '$Vibrate', '$GPRS', '$HSCSD', '$EDGE', '$GGG', '$WLAN', '$OS', '$Clock', '$Alarms', '$FM', '$Games', '$Browser', '$Java', '$Film', '$Recording', '$Listentomusic', '$Watchingmovies', '$Callrecording', '$Speakerphone', '$Typeofbattery', '$Standbytime', '$Talktime', '$Description', '$Image', '$Video')";				
			$this->Query($sql);	
			
			$sql = "INSERT INTO mathang (mid, hangsx, tenmh, hinhanh, dongia) VALUES ('$mid', '$hangsx', '$tenmh', '$hinhanh', '$dongia');";				
			$this->Query($sql);	
		}
		
		public function Del($mid){	
			$sql = "DELETE FROM mathang WHERE mid='$mid'";	
			$this->Query($sql);
			
			$sql = "DELETE FROM techspec WHERE mid='$mid'";	
			$this->Query($sql);
			
			$sql = "DELETE FROM kho WHERE mid='$mid'";	
			$this->Query($sql);
		}	
		
		public function Info_search(){	
			$mid = $this->get_Mid();
			$sql = "SELECT * FROM mathang WHERE mid='$mid'";		
			$this->Query($sql);
			if($this->Num_rows() != 0){
				return $this->Fetch();
			}else{
				return FALSE;
			}
		}
		
		public function Search_techspec($key){	
			$sql = "SELECT mid FROM techspec WHERE $key!='-' AND $key!='Đang cập nhật'";	
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
		
		public function Search_os($key){	
			$sql = "SELECT mid FROM techspec WHERE OS LIKE '%$key%'";	
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
		
		public function Search_typeofscreen($key){	
			$sql = "SELECT mid FROM techspec WHERE Typeofscreen LIKE '%Cảm ứng%'";	
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
		
		public function Max_rating(){	
			$sql = "SELECT MAX(score) as 'max' FROM rating";	
			$this->Query($sql);
			if($this->Num_rows() != 0){
				$data = $this->Fetch();
				$sql = "SELECT mid FROM rating WHERE score='$data[max]'";	
				$this->Query($sql);
				if($this->Num_rows() != 0){
					return $this->Fetch();
				}else{
					return FALSE;
				}
			}else{
				return FALSE;
			}
		}
		
		public function Set_clear_hot(){	
			$sql = "UPDATE mathang SET hot='0'";				
			$this->Query($sql);	
		}		
		public function Set_clear_bestbuy(){	
			$sql = "UPDATE mathang SET bestbuy='0'";				
			$this->Query($sql);	
		}
		
		public function Set_hot($mid){	
			$sql = "UPDATE mathang SET hot='1' WHERE mid='$mid'";				
			$this->Query($sql);	
		}
		public function Set_bestbuy($mid){	
			$sql = "UPDATE mathang SET bestbuy='1' WHERE mid='$mid'";				
			$this->Query($sql);	
		}
	}
?>