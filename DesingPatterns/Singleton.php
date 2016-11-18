<?php

class Singleton {

    //存放实例的变量
	private static $instance = null;

    //实例化对象的静态方法
	public static function getInstance()
    {
		if(null == self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}

	//静止调用new
	private function __construct()
	{
		
	}

	private function __clone()
    {
	
	}

	private function __wakeup()
	{

	}

}

$singletonObj = Singleton::getInstance();
var_dump($singletonObj);