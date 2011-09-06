<?php

namespace app\models;

class Maintance extends \lithium\data\Model {
	
	protected $_meta = array(
		'name' => null,
		'title' => null,
		'class' => null,
		'source' => 'vm_maintance_log',
		'connection' => 'default',
		'initialized' => false
	);
	
	public $name;
	public $surname;
	public $mark;
	public $model;
	public $vehicle_reg_number;
	public $maintance_date;
	public $maintance_length;
	public $milage;
	public $maintance_comment;
	public $phone;
	public $price;
	public $timestamp;
	
	
}
?>