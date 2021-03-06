<?php
require_once("../../class/class.sqlserver.php");
require_once("../../class/basic_function.php");
$profile ="";
$_SESSION["config_system"]["GD2_IP_FileZila"]=get_system_one_config("GD2_IP_FileZila"); //$_SERVER['SERVER_ADDR'];//

if(isset($_REQUEST["profile"])){$profile = $_REQUEST["profile"];};
/* if($profile=="tcd"){
	$_SESSION["config_system"]["GD2_UserName_FileZila"]=get_system_one_config("GD2_TCD_FPT_USER");
	$_SESSION["config_system"]["GD2_Pass_FileZila"]=get_system_one_config("GD2_TCD_FPT_PASSWORD");	
}else{ */
	$_SESSION["config_system"]["GD2_UserName_FileZila"]=get_system_one_config("GD2_UserName_FileZila"); 
	$_SESSION["config_system"]["GD2_Pass_FileZila"]=get_system_one_config("GD2_Pass_FileZila");	 
/* } */
$action ="";
define('STRING_PATH', str_ireplace("/","\\\\", $_SERVER['DOCUMENT_ROOT'])."\\medsmart\\file_manager\\php\\tmp_images\\"); 
$string_path=str_ireplace("/","\\\\", $_SERVER['DOCUMENT_ROOT'])."\\medsmart\\file_manager\\php\\tmp_images\\"; 
if(isset($_REQUEST["action"])){$action = $_REQUEST["action"];}; 
switch ($action) {	
	case "custom_images":
        custom_images();
        break;
	case "tcd":
		kill_process("winword.exe");
		com_load_typelib('Word.Application');
		$Wrd = new COM("word.application", NULL, CP_UTF8);  
		tcd($Wrd,$action);		 
		return;	
		break;
	case "tcd_read":
		kill_process("winword.exe");
		load_mht($action);			 
		return;	
		break;	
	case "edit_tcd":
		kill_process("winword.exe");
		com_load_typelib('Word.Application');
		$Wrd = new COM("word.application", NULL, CP_UTF8); 			 
	 	edit_tcd($Wrd);		 
		//return;	
		break;			
	case "single_image":
		single_image();
		break;	
	case "mht":
		kill_process("winword.exe");
		load_mht($action);
		return;
		break; 	
	case "ecg_pdf":
		load_ecg_pdf();
		return;
		break;		
	case "upload_module":
		upload_module(); 
		break; 
	case "delete":
		delete_image(); 
		break; 
	case "pdf_ecg":
		save_ecg_pdf(); 
		break;
	case "edit_pdf_ecg":
		edit_pdf_ecg(); 
	break;
	case "pdf_holter":
		save_holter_pdf(); 
	break;
	case "edit_pdf_holter":
		edit_pdf_holter(); 
	break;
	case "edit_pdf_holter_new":
		edit_pdf_holter_new(); 
	break;
	case "pdf_do_luongnhi":
		save_pdf_do_luongnhi(); 
	break;
	case "edit_pdf_do_luongnhi":
		edit_pdf_do_luongnhi(); 
	break;
	case "edit_pdf_do_thinhluc":
		edit_pdf_do_thinhluc(); 
	break;
	case "edit_pdf_do_aoe":
		edit_pdf_do_aoe(); 
	break;
	case "custom_images_pttt":
        custom_images_pttt();
    break;
	case "custom_images_signs":
        custom_images_signs();
    break;
}
/*
PDF phai them 2 cai nay
case "pdf_do_luongnhi": // up
		save_pdf_do_luongnhi(); 
case "edit_pdf_do_luongnhi": edit
		edit_pdf_do_luongnhi(); 
*/


set_time_limit(0); // just in case it too long, not recommended for production
error_reporting(E_ALL | E_STRICT); // Set E_ALL for debuging
// error_reporting(0);
ini_set('max_file_uploads', 50);   // allow uploading up to 50 files at once

// needed for case insensitive search to work, due to broken UTF-8 support in PHP
//ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.func_overload', 2);

if (function_exists('date_default_timezone_set')) {
	//date_default_timezone_set('Europe/Moscow');
}
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderConnector.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinder.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeDriver.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeLocalFileSystem.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeMySQL.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeFTP.class.php';

function debug($o) {
	echo '<pre>';
	print_r($o);
}
 
//print_r($_POST);
//print_r($GLOBALS);
/*if(isset($_POST["action"])){
	//print_r($_POST);
	echo "";
}*/

/*$Wrd->ActiveDocument->Close(true);
			$Wrd->Application->Quit();
			$Wrd = null;	*/
/**
 * Smart logger function
 * Demonstrate how to work with elFinder event api
 *
 * @param  string   $cmd       command name
 * @param  array    $result    command result
 * @param  array    $args      command arguments from client
 * @param  elFinder $elfinder  elFinder instance
 * @return void|true
 * @author Troex Nevelin
 **/
function logger($cmd, $result, $args, $elfinder) {	
	$log = sprintf("[%s] %s: %s \n", date('r'), strtoupper($cmd), var_export($result, true));
	$logfile = '../files/temp/log.txt';
	$dir = dirname($logfile);
	if (!is_dir($dir) && !mkdir($dir)) {
		return;
	}
	if (($fp = fopen($logfile, 'a'))) {
		fwrite($fp, $log);
		fclose($fp);
	}
	return;

	foreach ($result as $key => $value) {
		if (empty($value)) {
			continue;
		}
		$data = array();
		if (in_array($key, array('error', 'warning'))) {
			array_push($data, implode(' ', $value));
		} else {
			if (is_array($value)) { // changes made to files
				foreach ($value as $file) {
					$filepath = (isset($file['realpath']) ? $file['realpath'] : $elfinder->realpath($file['hash']));
					array_push($data, $filepath);
				}
			} else { // other value (ex. header)
				array_push($data, $value);
			}
		}
		$log .= sprintf(' %s(%s)', $key, implode(', ', $data));
	}
	$log .= "\n";

	$logfile = '../files/temp/log.txt';
	$dir = dirname($logfile);
	if (!is_dir($dir) && !mkdir($dir)) {
		return;
	}
	if (($fp = fopen($logfile, 'a'))) {
		fwrite($fp, $log);
		fclose($fp);
	}
}


/**
 * Simple logger function.
 * Demonstrate how to work with elFinder event api.
 *
 * @package elFinder
 * @author Dmitry (dio) Levashov
 **/
class elFinderSimpleLogger {
	
	/**
	 * Log file path
	 *
	 * @var string
	 **/
	protected $file = '';
	
	/**
	 * constructor
	 *
	 * @return void
	 * @author Dmitry (dio) Levashov
	 **/
	public function __construct($path) {
		$this->file = $path;
		$dir = dirname($path);
		if (!is_dir($dir)) {
			mkdir($dir);
		}
	}
	
	/**
	 * Create log record
	 *
	 * @param  string   $cmd       command name
	 * @param  array    $result    command result
	 * @param  array    $args      command arguments from client
	 * @param  elFinder $elfinder  elFinder instance
	 * @return void|true
	 * @author Dmitry (dio) Levashov
	 **/
	public function log($cmd, $result, $args, $elfinder) {
		$log = $cmd.' ['.date('d.m H:s')."]\n";
		
		if (!empty($result['error'])) {
			$log .= "\tERROR: ".implode(' ', $result['error'])."\n";
		}
		
		if (!empty($result['warning'])) {
			$log .= "\tWARNING: ".implode(' ', $result['warning'])."\n";
		}
		
		if (!empty($result['removed'])) {
			foreach ($result['removed'] as $file) {
				// removed file contain additional field "realpath"
				$log .= "\tREMOVED: ".$file['realpath']."\n";
			}
		}
		
		if (!empty($result['added'])) {
			foreach ($result['added'] as $file) {
				$log .= "\tADDED: ".$elfinder->realpath($file['hash'])."\n";
			}
		}
		
		if (!empty($result['changed'])) {
			foreach ($result['changed'] as $file) {
				$log .= "\tCHANGED: ".$elfinder->realpath($file['hash'])."\n";
			}
		}
		
		$this->write($log);
	}
	
	/**
	 * Write log into file
	 *
	 * @param  string  $log  log record
	 * @return void
	 * @author Dmitry (dio) Levashov
	 **/
	protected function write($log) {
		
		if (($fp = @fopen($this->file, 'a'))) {
			fwrite($fp, $log."\n");
			fclose($fp);
		}
	}
	
	
} // END class 


/**
 * Simple function to demonstrate how to control file access using "accessControl" callback.
 * This method will disable accessing files/folders starting from  '.' (dot)
 *
 * @param  string  $attr  attribute name (read|write|locked|hidden)
 * @param  string  $path  file path relative to volume root directory started with directory separator
 * @return bool|null
 **/
function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0       // if file/folder begins with '.' (dot)
		? !($attr == 'read' || $attr == 'write')    // set read+write to false, other (locked+hidden) set to true
		:  null;                                    // else elFinder decide it itself
}

/**
 * Access control example class
 *
 * @author Dmitry (dio) Levashov
 **/
class elFinderTestACL {
	
	/**
	 * make dotfiles not readable, not writable, hidden and locked
	 *
	 * @param  string  $attr  attribute name (read|write|locked|hidden)
	 * @param  string  $path  file path. Attention! This is path relative to volume root directory started with directory separator.
	 * @param  mixed   $data  data which seted in 'accessControlData' elFinder option
	 * @param  elFinderVolumeDriver  $volume  volume driver
	 * @return bool
	 * @author Dmitry (dio) Levashov
	 **/
	public function fsAccess($attr, $path, $data, $volume) {
		
		if ($volume->name() == 'localfilesystem') {
			return strpos(basename($path), '.') === 0
				? !($attr == 'read' || $attr == 'write')
				: $attr == 'read' || $attr == 'write';
		}
		
		return true;
	}
	
} // END class 

$acl = new elFinderTestACL();

function validName($name) {
	return strpos($name, '.') !== 0;
}


$logger = new elFinderSimpleLogger('../files/temp/log.txt');



$opts = array(
	'locale' => 'en_US.UTF-8',
	'bind' => array(
		// '*' => 'logger',
		'mkdir mkfile rename duplicate upload rm paste' => 'logger'
	),
	'debug' => true,
	'roots' => array(
	/*	array(
			'driver'     => 'LocalFileSystem',
			'path'       => '../files/',
			'startPath'  => '../files/test/',
			'URL'        => dirname($_SERVER['PHP_SELF']) . '/../files/',
			// 'treeDeep'   => 3,
			// 'alias'      => 'File system',
			'mimeDetect' => 'internal',
			'tmbPath'    => '.tmb',
			'utf8fix'    => true,
			'tmbCrop'    => false,
			'tmbBgColor' => 'transparent',
			'accessControl' => 'access',
			'acceptedName'    => '/^[^\.].*$/',
			// 'disabled' => array('extract', 'archive'),
			// 'tmbSize' => 128,
			'attributes' => array(
				array(
					'pattern' => '/\.js$/',
					'read' => true,
					'write' => false
				),
				array(
					'pattern' => '/^\/icons$/',
					'read' => true,
					'write' => false
				)
			)
			// 'uploadDeny' => array('application', 'text/xml')
		),*/
		// array(
		// 	'driver'     => 'LocalFileSystem',
		// 	'path'       => '../files2/',
		// 	// 'URL'        => dirname($_SERVER['PHP_SELF']) . '/../files2/',
		// 	'alias'      => 'File system',
		// 	'mimeDetect' => 'internal',
		// 	'tmbPath'    => '.tmb',
		// 	'utf8fix'    => true,
		// 	'tmbCrop'    => false,
		// 	'startPath'  => '../files/test',
		// 	// 'separator' => ':',
		// 	'attributes' => array(
		// 		array(
		// 			'pattern' => '~/\.~',
		// 			// 'pattern' => '/^\/\./',
		// 			'read' => false,
		// 			'write' => false,
		// 			'hidden' => true,
		// 			'locked' => false
		// 		),
		// 		array(
		// 			'pattern' => '~/replace/.+png$~',
		// 			// 'pattern' => '/^\/\./',
		// 			'read' => false,
		// 			'write' => false,
		// 			// 'hidden' => true,
		// 			'locked' => true
		// 		)
		// 	),
		// 	// 'defaults' => array('read' => false, 'write' => true)
		// ),
		
		// array(
		// 	'driver' => 'FTP',
		// 	'host' => '192.168.1.38',
		// 	'user' => 'dio',
		// 	'pass' => 'hane',
		// 	'path' => '/Users/dio/Documents',
		// 	'tmpPath' => '../files/ftp',
		// 	'utf8fix' => true,
		// 	'attributes' => array(
		// 		array(
		// 			'pattern' => '~/\.~',
		// 			'read' => false,
		// 			'write' => false,
		// 			'hidden' => true,
		// 			'locked' => false
		// 		),
		// 		
		// 	)
		// ),
		array(
			'driver' => 'FTP',
			'host' =>  $_SESSION["config_system"]["GD2_IP_FileZila"],
			'user' => $_SESSION["config_system"]["GD2_UserName_FileZila"],
			'pass' =>   $_SESSION["config_system"]["GD2_Pass_FileZila"],
			'path' => '../'.$_REQUEST["tenthumuc"],
			'tmpPath' => '../',
			'imgLib'     => 'gd',
			'alias'      => $_REQUEST["tenthumuc"],
			'tmpPath' => 'tmp',			 
		),


		// array(
		// 	'driver' => 'FTP',
		// 	'host' => '10.0.1.3',
		// 	'user' => 'frontrow',
		// 	'pass' => 'frontrow',
		// 	'path' => '/',
		// 	'tmpPath' => '../files/ftp',
		// ),
		
		// array(
		// 	'driver'     => 'LocalFileSystem',
		// 	'path'       => '../files2/',
		// 	'URL'        => dirname($_SERVER['PHP_SELF']) . '/../files2/',
		// 	'alias'      => 'Files',
		// 	'mimeDetect' => 'internal',
		// 	'tmbPath'    => '.tmb',
		// 	// 'copyOverwrite' => false,
		// 	'utf8fix'    => true,
		// 	'attributes' => array(
		// 		array(
		// 			'pattern' => '~/\.~',
		// 			// 'pattern' => '/^\/\./',
		// 			// 'read' => false,
		// 			// 'write' => false,
		// 			'hidden' => true,
		// 			'locked' => false
		// 		),
		// 	)
		// ),
		
		// array(
		// 	'driver' => 'MySQL',
		// 	'path' => 1,
		// 	// 'treeDeep' => 2,
		// 	// 'socket'          => '/opt/local/var/run/mysql5/mysqld.sock',
		// 	'user' => 'root',
		// 	'pass' => 'hane',
		// 	'db' => 'elfinder',
		// 	'user_id' => 1,
		// 	// 'accessControl' => 'access',
		// 	// 'separator' => ':',
		// 	'tmbCrop'         => true,
		// 	// thumbnails background color (hex #rrggbb or 'transparent')
		// 	'tmbBgColor'      => '#000000',
		// 	'files_table' => 'elfinder_file',
		// 	// 'imgLib' => 'imagick',
		// 	// 'uploadOverwrite' => false,
		// 	// 'copyTo' => false,
		// 	// 'URL'    => 'http://localhost/git/elfinder',
		// 	'tmpPath' => '../filesdb/tmp',
		// 	'tmbPath' => '../filesdb/tmb',
		// 	'tmbURL' => dirname($_SERVER['PHP_SELF']) . '/../filesdb/tmb/',
		// 	// 'attributes' => array(
		// 	// 	array(),
		// 	// 	array(
		// 	// 		'pattern' => '/\.jpg$/',
		// 	// 		'read' => false,
		// 	// 		'write' => false,
		// 	// 		'locked' => true,
		// 	// 		'hidden' => true
		// 	// 	)
		// 	// )
		// 	
		// )
	)
		
);



// sleep(3);
header('Access-Control-Allow-Origin: *');
$connector = new elFinderConnector(new elFinder($opts), true);
$connector->run();

// echo '<pre>';
// print_r($connector);
