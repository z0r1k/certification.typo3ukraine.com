<?php
# TYPO3 CVS ID: $Id: ext_localconf.php 176 2003-12-29 11:59:12Z kasper $

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::addPItoST43($_EXTKEY,'pi1/class.tx_automaketemplate_pi1.php','_pi1','',1);
?>