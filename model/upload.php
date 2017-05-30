<?php
class UPLOAD extends DATABASE{
	protected $_filename;
	protected $_filetype;
	protected $_filetmp;
	protected $_filesize;
	/*
	public function __construct($data){
		$this->Set_name($data['name']);
		$this->Set_type($data['type']);
		$this->Set_tmp($data['tmp']);
		$this->Set_size($data['size']);
	}*/
	
	public function __construct($name, $type, $tmp, $size){
		$this->Set_name($name);
		$this->Set_type($type);
		$this->Set_tmp($tmp);
		$this->Set_size($size);
	}
	
	public function Set_name($name){
		$this->_filename = $name;	
	}
	public function Get_name(){
		return $this->_filename;	
	}
	
	
	public function Set_type($type){
		$this->_filetype = $type;	
	}
	public function Get_type(){
		return $this->_filetype;	
	}
	
	
	public function Set_tmp($tmp){
		$this->_filetmp = $tmp;	
	}
	public function Get_tmp(){
		return $this->_filetmp;	
	}
	
	
	public function Set_size($size){
		$this->_filesize = $size;	
	}
	public function Get_size(){
		return $this->_filesize;	
	}
	
	//upload/
	public function Do_upload_details($prod_name){
		move_uploaded_file($this->Get_tmp(), "library/images/phones/details/" . $prod_name. "." .$this->_filetype);
	}
	
	public function Do_upload_small($prod_name){
		move_uploaded_file($this->Get_tmp(), "library/images/phones/" . $prod_name. "." .$this->_filetype);
	}
}