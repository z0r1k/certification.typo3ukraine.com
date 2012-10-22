<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Stefan Galinski (stefan.galinski@gmail.com)
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
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * This class contains a class which contains a hook method
 * for the "clear all cache" action in the TYPO3 backend.
 *
 * @author Stefan Galinski <stefan.galinski@gmail.com>
 */

/**
 * This class contains a hook method for the "clear all cache" action in the TYPO3 backend.
 *
 * @author Stefan Galinski <stefan.galinski@gmail.com>
 */
class tx_scriptmerger_cache {
	/* @var $tempDirectories array holds directories which should be checked */
	private $tempDirectories = array();

	/**
	 * CONSTRUCTOR
	 * 
	 * Initializes some class variables...
	 * 
	 * @return void
	 */
	public function __construct() {
		// define temporary directories
		$this->tempDirectories = array (
			'main' => PATH_site . 'typo3temp/scriptmerger/',
			'temp' => PATH_site . 'typo3temp/scriptmerger/temp/',
			'minified' => PATH_site . 'typo3temp/scriptmerger/minified/',
			'compressed' => PATH_site . 'typo3temp/scriptmerger/compressed/',
			'merged' => PATH_site . 'typo3temp/scriptmerger/merged/'
		);
	}

	/**
	 * Clear cache post processor.
	 *
	 * This method deletes all pdf files which are older than one month. The deletion
	 * prevents an in
	 *
	 * @param object $params parameter array
	 * @param object $pObj partent object
	 * @return void
	 */
	public function clearCachePostProc(&$params, &$pObj) {
		// only if the cache command is available
		if ($params['cacheCmd'] !== 'all') {
			return;
		}

		// remove any files in the directories array which are older than one month
		$now = time();
		foreach ($this->tempDirectories as $tempDirectory) {
			if (!is_dir($tempDirectory)) {
				continue;
			}

			$handle = opendir($tempDirectory);
			while (false !== ($file = readdir($handle))) {
				if ($file == '.' || $file == '..') {
					continue;
				}

				if (is_file($tempDirectory . $file)) {
					// get last modification time
					$lastAccess = fileatime($tempDirectory . $file);
					$age = $now - $lastAccess;

					if ($age >= 1209600) {
						unlink($tempDirectory . $file);
					}
				}
			}
		}
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/scriptmerger/class.tx_scriptmerger_cache.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/scriptmerger/class.tx_scriptmerger_cache.php']);
}

?>
