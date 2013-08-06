<?php
class db{
	private $host;
	private $user;
	private $pass;
	private $db_name;
	
	public function __construct($host,$user,$pass,$db_name){
		//初始化对象的属性的
		$this -> host = $host;
		$this -> user = $user;
		$this -> pass = $pass;
		$this -> db_name = $db_name;
		$this -> connect();
	}
	
	public function connect(){
		mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->db_name);
		mysql_query("set names utf8");
	}
	public function query($sql)
	{
		if(mysql_query($sql))
		{return mysql_affected_rows();}
		else {return false;}
	}

	public function getRow($sql)
	{
	   //再根据sql查询出一行记录
		$result=mysql_query($sql);
		if($row=mysql_fetch_array($result)){
			return $row;
		}else{
			return array();
			}
	}
	public function getAll($sql){
		
	    $result=mysql_query($sql);
		$return = array();
	    while($row=mysql_fetch_array($result)){
			$return[] =  $row;
			
			}
		return $return;
    }
	
	public function getOne($sql){
		$result=mysql_query($sql);
		
		while($row = mysql_fetch_array($sql)){
			return $row[0];
			
			}
	}
	public function getColumn($sql)
    {
	    $result=mysql_query($sql);
		$return=array();
	    while($row=mysql_fetch_array($result,MYSQL_NUM))
	    {$return[]= $row[0];}
		return $return;
    }
	
		
		
		}
