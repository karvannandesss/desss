<?php 


abstract class books{
	
	var $name = "";
	var $price = "";
	
	abstract function get_booklist();
	function set_booklist($a,$b){
		
	$this->name		= $a;
	$this->price	= $b;
		
		}
	function get_book(){
		
	$val['name'] 	= $this->name;
	$val['price'] 	= $this->price;	
	
	return $val;	
		}
				
	}
class java extends  books{
	
	function get_booklist(){
		
		
		
		}
	
	}	
	$data = new java();
	$data->get_booklist();
	$data->set_booklist('PHP','300');
	$data->set_booklist('Java','500');
	
	$res = $data->get_book();
	
	print_r($res);