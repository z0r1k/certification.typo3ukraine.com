<?php
$TYPO3_CONF_VARS['SYS']['sitename'] = 'New TYPO3 site';

// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';
$TYPO3_CONF_VARS['EXT']['extList'] = 'version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports';
$typo_db_extTableDef_script = 'extTables.php';

$localconf_addition_file = dirname(__FILE__) . '/shared_localconf.php';
if (is_file($localconf_addition_file)) {
  include($localconf_addition_file);
}

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$typo_db_username = '';
$typo_db_password = '';
$typo_db_host = '';
$typo_db = '';

$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,tt_news,about,cshmanual,recycler,opendocs,sys_action,fluid,scheduler,automaketemplate,feeditadvanced,realurl,kb_cont_slide,lorem_ipsum,irfaq';	// Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,install,rtehtmlarea,t3skin,tt_news,fluid,automaketemplate,feeditadvanced,realurl,kb_cont_slide,lorem_ipsum,irfaq';	// Modified or inserted by TYPO3 Extension Manager.

$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 11.03.2010 08:34:20
?>