<?php

########################################################################
# Extension Manager/Repository config file for ext "kb_cont_slide".
#
# Auto generated 20-02-2010 20:53
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'KB Content Slide',
	'description' => 'Shows the content of a column. If the column is empty it shows its parent and so on.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Bernhard Kraft',
	'author_email' => 'kraftb@kraftb.at',
	'author_company' => 'think-open',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"fa2b";s:24:"ext_typoscript_setup.txt";s:4:"3fd4";s:14:"doc/manual.sxw";s:4:"192a";s:19:"doc/wizard_form.dat";s:4:"5a97";s:20:"doc/wizard_form.html";s:4:"508d";s:32:"pi1/class.tx_kbcontslide_pi1.php";s:4:"bef3";}',
);

?>