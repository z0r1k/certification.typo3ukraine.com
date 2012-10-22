<?php

########################################################################
# Extension Manager/Repository config file for ext "scriptmerger".
#
# Auto generated 10-02-2010 19:18
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'CSS/Javascript Minificator, Compressor And Merger',
	'description' => 'You need more speed? If you can answer with question with "Sure!", then this extension is made for you! It minimizes the http requests by minifiing, compressing and merging of the css and javascript files on your site. The extension make usage of the "minify" project.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '3.0.6',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => 'bottom',
	'loadOrder' => 'tstidy',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Stefan Galinski',
	'author_email' => 'stefan.galinski@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.1-5.2.99',
			'typo3' => '4.2.0-4.3.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:48:{s:25:"class.tx_scriptmerger.php";s:4:"034b";s:31:"class.tx_scriptmerger_cache.php";s:4:"bd77";s:16:"example.htaccess";s:4:"0dc3";s:12:"ext_icon.gif";s:4:"2cfb";s:17:"ext_localconf.php";s:4:"2b24";s:14:"ext_tables.php";s:4:"fa00";s:27:"configuration/constants.txt";s:4:"ca23";s:23:"configuration/setup.txt";s:4:"b13b";s:14:"doc/manual.sxw";s:4:"0e3a";s:23:"resources/jsminplus.php";s:4:"48ed";s:27:"resources/minify/README.txt";s:4:"703c";s:27:"resources/minify/config.php";s:4:"9bb7";s:33:"resources/minify/groupsConfig.php";s:4:"54db";s:26:"resources/minify/index.php";s:4:"c1d9";s:26:"resources/minify/utils.php";s:4:"bd62";s:34:"resources/minify/builder/_index.js";s:4:"c7a6";s:30:"resources/minify/builder/bm.js";s:4:"b68a";s:34:"resources/minify/builder/index.php";s:4:"f492";s:36:"resources/minify/builder/ocCheck.php";s:4:"0fc7";s:39:"resources/minify/builder/rewriteTest.js";s:4:"c4ca";s:32:"resources/minify/lib/FirePHP.php";s:4:"f619";s:30:"resources/minify/lib/JSMin.php";s:4:"5716";s:34:"resources/minify/lib/JSMinPlus.php";s:4:"9d98";s:31:"resources/minify/lib/Minify.php";s:4:"091d";s:44:"resources/minify/lib/HTTP/ConditionalGet.php";s:4:"f976";s:37:"resources/minify/lib/HTTP/Encoder.php";s:4:"71d0";s:37:"resources/minify/lib/Minify/Build.php";s:4:"6e32";s:35:"resources/minify/lib/Minify/CSS.php";s:4:"a392";s:48:"resources/minify/lib/Minify/CommentPreserver.php";s:4:"86ba";s:36:"resources/minify/lib/Minify/HTML.php";s:4:"e774";s:47:"resources/minify/lib/Minify/ImportProcessor.php";s:4:"5ce5";s:37:"resources/minify/lib/Minify/Lines.php";s:4:"80b2";s:38:"resources/minify/lib/Minify/Logger.php";s:4:"b284";s:38:"resources/minify/lib/Minify/Packer.php";s:4:"25e6";s:38:"resources/minify/lib/Minify/Source.php";s:4:"f705";s:45:"resources/minify/lib/Minify/YUICompressor.php";s:4:"1384";s:46:"resources/minify/lib/Minify/CSS/Compressor.php";s:4:"b514";s:47:"resources/minify/lib/Minify/CSS/UriRewriter.php";s:4:"5ab5";s:41:"resources/minify/lib/Minify/Cache/APC.php";s:4:"2766";s:42:"resources/minify/lib/Minify/Cache/File.php";s:4:"26d0";s:46:"resources/minify/lib/Minify/Cache/Memcache.php";s:4:"fa20";s:47:"resources/minify/lib/Minify/Controller/Base.php";s:4:"7661";s:48:"resources/minify/lib/Minify/Controller/Files.php";s:4:"18a4";s:49:"resources/minify/lib/Minify/Controller/Groups.php";s:4:"12c1";s:49:"resources/minify/lib/Minify/Controller/MinApp.php";s:4:"88a6";s:47:"resources/minify/lib/Minify/Controller/Page.php";s:4:"02bc";s:51:"resources/minify/lib/Minify/Controller/Version1.php";s:4:"4369";s:34:"resources/minify/lib/Solar/Dir.php";s:4:"6c88";}',
);

?>