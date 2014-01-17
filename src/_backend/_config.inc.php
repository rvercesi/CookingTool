<?php
/**
 * _config.inc.php
 * 
 * @author Ricardo Vercesi <rvercesi@t2ws.biz>
 * @copyright Copyright (c) 2013, Ricardo Vercesi
 * @version 1.0
 * @category config
 */
 
 /**
  * define timezone, memory_limit and error_reporting
  */
 // For debugging purposes only -  comment while developing
 ini_set('display_errors','Off');
 error_reporting(0);
 
 date_default_timezone_set('Europe/Lisbon');
 ini_set('memory_limit','256M');
 ini_set('gd.jpeg_ignore_warning', 1);
 
 
 /**
  * @global array $cfg used for save configuration values
  */
 
 if($_SERVER['HTTP_HOST']=='localhost'){
 
   	$cfg['site']['url']			= 		'http://localhost/projectos/cookingtool';
   	$cfg['site']['path']		= 		$_SERVER['DOCUMENT_ROOT'].'/projectos/cookingtool';
   	
   	$cfg['media']['url']		= 		$cfg['site']['url'].'/media';
   	$cfg['media']['path']		= 		$cfg['site']['path'].'/media';
   	
   	$cfg['db']['host']			= 		'localhost';
   	$cfg['db']['type']			= 		'mysql';
   	$cfg['db']['name']			= 		'cookingtool';
   	$cfg['db']['user']			= 		'';
   	$cfg['db']['pass']			= 		'';
 	$cfg['db']['port']			= 		'3369';
 
 }else{
 
   	$cfg['site']['url']			= 		'http://'.$_SERVER['HTTP_HOST'].'';
   	$cfg['site']['path']		= 		$_SERVER['DOCUMENT_ROOT'].'';
   	 
   	$cfg['media']['url']		= 		$cfg['site']['url'].'/media';
   	$cfg['media']['path']		= 		$cfg['site']['path'].'/media';
   	 
  	$cfg['db']['host']			= 		'localhost';
  	$cfg['db']['type']			= 		'mysql';
  	$cfg['db']['name']			= 		'cookingtool';
  	$cfg['db']['user']			= 		'cookingtool_user';
  	$cfg['db']['pass']			= 		'cookingtool_password';
  	$cfg['db']['port']			= 		'3369';
 
 }
 
 
 /**
  * @global array $tbl used for save table name values
  */
$tbl['users'] = 'users';

 /**
  * include functions & classes
  */
 
 include('../lib/_db.inc.php');
 // include('../lib/_functions.inc.php');
 // include('../lib/_images.inc.php');
 // include('../lib/_pg.inc.php');
 
/**
 * instantiate data abstraction layer class
 */
 
$db = dbClass::open($cfg['db']['type'], $cfg['db']['name'], $cfg['db']['user'], $cfg['db']['pass'], $cfg['db']['host']);
?>
