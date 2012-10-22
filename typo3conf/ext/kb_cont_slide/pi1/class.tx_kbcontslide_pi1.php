<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2004 Bernhard Kraft (kraftb@mokka.at)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Plugin 'KB Content Slide' for the 'kb_cont_slide' extension.
 *
 * This extension enables the administrator to show content from a specific
 * column of the Typo3 BE. It returns the contents of the selected column
 * of the actual page. If there isn't content in the column on the actual
 * page it returns the contents of the previous page (previous means the
 * page before in the rootline). If the column of the previous page is also
 * empty it shows the contents of the column of their previous and so on
 * until it finds content. If no content is found in the complete rootline
 * nothing is returned.
 *
 * @author	Bernhard Kraft <kraftb@mokka.at>
 */


require_once(PATH_tslib."class.tslib_pibase.php");

class tx_kbcontslide_pi1 extends tslib_pibase {
	var $prefixId = "tx_kbcontslide_pi1";		// Same as class name
	var $scriptRelPath = "pi1/class.tx_kbcontslide_pi1.php";	// Path to this script relative to the extension dir.
	var $extKey = "kb_cont_slide";	// The extension key.
	
	/**
	 * The "main" method
	 * This method walks back the rootline and generates the CONTENT element
	 * for each PID. If content is found (cObjGetSingle retunred something)
	 * the loop breaks and the found content gets returned.
	 */
	function main($content,$conf)	{
		$this->conf = $conf;

		$this->cont = $this->conf["content"];
		$this->cont_conf = $this->conf["content."];

		$this->orig_contentPid = $GLOBALS["TSFE"]->contentPid;

		$rootLine = $GLOBALS["TSFE"]->rootLine;
		$cont_id = 0;
		while ($page = array_shift($rootLine)) {
			$GLOBALS["TSFE"]->contentPid = $page["uid"];
			$content = $this->cObj->cObjGetSingle($this->cont, $this->cont_conf);
			if (strlen($content)) break;
		}
		$GLOBALS["TSFE"]->contentPid = $this->orig_contentPid;
		return $content;	
	}
}



if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/kb_cont_slide/pi1/class.tx_kbcontslide_pi1.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/kb_cont_slide/pi1/class.tx_kbcontslide_pi1.php"]);
}

?>
