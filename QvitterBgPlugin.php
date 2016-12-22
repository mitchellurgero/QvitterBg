<?php
/*
Qvitter Random Background plugin
Changes the variable for qvitter's sitebackground $config option to a file in a folder.
Add to config(After Qvitter!!):
	addPlugin('QvitterBg');
	$config['site']['qvitterbg']['folder'] = "bg";

*/

if (!defined('STATUSNET')) {
    // This check helps protect against security problems;
    // your code file can't be executed directly from the web.
    exit(1);
}
class QvitterBgPlugin extends Plugin
{
	public function initialize()
    {
    	$this->runBg();
    	return true;
    }
    function cleanup()
	{
	    return true;
	}
    function runBg(){
    	global $config;
    	$configphpsettings = common_config('site','qvitterbg') ?: array();
		foreach($configphpsettings as $configphpsetting=>$value) {
			$settings[$configphpsetting] = $value;
		}
    	$folder = $settings['folder'];
		$dir = "./".$folder;
		$files = glob($dir . '/*.*');
	    $file = array_rand($files);
	    $base =  basename($files[$file]);
	    $config['site']['qvitter']['sitebackground'] = $dir."/$base";
	    return true;
    }
}
