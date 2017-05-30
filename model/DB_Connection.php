<?php
	class DATABASE{
		protected $_hostname = "mysql6.000webhost.com";
		protected $_hostuser = "a9565009_gradeus";
		protected $_hostpass = "CREATIVELIVE@";
		protected $_dbname = "a9565009_store";	
		protected $_connect;
		protected $_result;
		
		public function Connection(){
			$this->_connect = mysql_connect($this->_hostname, $this->_hostuser, $this->_hostpass);
			mysql_select_db($this->_dbname, $this->_connect);
			mysql_query("SET NAMES 'utf8'");
		}
		
		public function Disconnect(){
			if($this->_connect){
				mysql_close($this->_connect);
			}
		}
		
		public function Query($sql){
			$this->_result = mysql_query($sql);	
		}
		
		public function Num_rows(){
			if($this->_result){
				$rows = mysql_num_rows($this->_result);	
			}else{
				$rows = 0;	
			}
			return $rows;
		}
		
		public function Fetch(){
			if($this->_result){
				$rows = mysql_fetch_assoc($this->_result);	
			}else{
				$rows = 0;	
			}
			return $rows;
		}
	}

	function __autoload($class){
		require "model/".strtolower($class).".php";	
	}
?>