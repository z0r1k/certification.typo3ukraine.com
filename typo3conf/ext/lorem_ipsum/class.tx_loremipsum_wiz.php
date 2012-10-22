<?php
/***************************************************************
*  Copyright notice
*
*  (c) 1999-2004 Kasper Skaarhoj (kasper@typo3.com)
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
 * Lorem Ipsum dummy text wizard
 *
 * @author	Kasper Skaarhoj <kasper@typo3.com>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   61: class tx_loremipsum_wiz
 *   80:     function main($PA,$pObj)
 *  156:     function getHeaderTitleJS($varName, $type, $endSequence='', $add=FALSE, $count=10)
 *  212:     function getIcon($type, $backPath='')
 *  228:     function loadLoremIpsumArray()
 *
 * TOTAL FUNCTIONS: 4
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */







/**
 * Lorem Ipsum dummy text wizard
 *
 * @author	Kasper Skaarhoj <kasper@typo3.com>
 * @package TYPO3
 * @subpackage tx_loremipsum
 */
class tx_loremipsum_wiz {

		// Static variables:
	var $str_loremIpsum = 'Lorem ipsum dolor sit amet.';
	var $str_loremIpsum_extended = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';

		// Internal, static:
	var $loremIpsumSource = array();
	var $lindex = '';
	var $paragraphSentences = 5;


	/**
	 * Main function for TCEforms wizard.
	 *
	 * @param	array		Parameter array for "userFunc" wizard type
	 * @param	object		Parent object
	 * @return	string		HTML for the wizard.
	 */
	function main($PA,$pObj)	{
		#debug($PA);

			// Load Lorem Ipsum sources from text file:
		$this->loadLoremIpsumArray();

		switch($PA['params']['type'])	{
			case 'title':
			case 'header':
			case 'description':
			case 'word':
			case 'paragraph':
			case 'loremipsum':
				$onclick = $this->getHeaderTitleJS(
								"document.".$PA['formName']."['".$PA['itemName']."'].value",
								$PA['params']['type'],
								$PA['params']['endSequence'],
								$PA['params']['add'],
								t3lib_div::intInRange($PA['params']['count'],2,100,10)
							).';'.
							implode('',$PA['fieldChangeFunc']).		// Necessary to tell TCEforms that the value is updated.
							'return false;';

				$output.= '<a href="#" onclick="'.htmlspecialchars($onclick).'">'.
							$this->getIcon($PA['params']['type']).
							'</a>';
			break;
			case 'images':

				$ordA = ord('a');
				$extPath = t3lib_extMgm::extPath('lorem_ipsum');

				$tRows = array();
				for($a=0;$a<6;$a++)	{
					$tCells = array();
					for($b=0;$b<7;$b++)	{
						$absfile = $extPath.'images/'.chr($ordA+$a).($b+1).'.jpg';
						$onclick = "setFormValueFromBrowseWin('".$PA['itemName']."',unescape('".rawurlencode($absfile)."'),unescape('".rawurlencode(basename($absfile))."')); return false;";
						$tCells[].= '<a href="#" onclick="'.htmlspecialchars($onclick).'">'.
									t3lib_BEfunc::getThumbNail('thumbs.php', $absfile).
									'</a>';
					}

					$tdAttrib = ' style="width: 56px;" align="center" bgcolor="#cccccc"';
					$tRows[] = '
						<tr>
							<td'.$tdAttrib.'>
							'.implode('</td><td'.$tdAttrib.'>', $tCells).'
							</td>
						</tr>';
				}

				$output = '
					<table border="0" cellpadding="2" cellspacing="2" style="border: 1px solid black; margin-top: 5px; margin-bottom: 15px;">
						<tr><td colspan="7" bgcolor="#aaaaaa"><b>Click a dummy image to select it:</b></td></tr>
						'.implode('',$tRows).'
						<tr><td colspan="7"><em>All images are copyright &#169; Kasper Sk&#229;rh&#248;j 2001-2004 and licensed in these resolutions under Open Content License.</em></td></tr>
					</table>';

			break;
		}

		return $output;
	}

	/**
	 * Create rotating Lipsum text for JS variable
	 * Can be used by other non TCEform fields as well.
	 *
	 * @param	string		JavaScript variable name, eg. a form field value property reference.
	 * @param	string		Type = key from $this->lindex array
	 * @param	string		List of character numbers to end sequence with.
	 * @param	integer		Number of options to cycle through.
	 * @param	integer		Number of texts to cycle through
	 * @return	string		JavaScript applying a lipsum string to input javascript variable.
	 */
	function getHeaderTitleJS($varName, $type, $endSequence='', $add=FALSE, $count=10)	{

			// Load data:
		$this->loadLoremIpsumArray();

			// Type must exist:
		if (is_array($this->lindex[$type]))	{

				// Shuffle index:
			shuffle($this->lindex[$type]);

				// Init vars: Creates pointer. Currently random based on time value. Can it be cycling through 0-$count instead?
			if ($type == 'loremipsum')	{
				$code = "
				var lipsum_temp_pointer = 0;
				var lipsum_temp_strings = new Array();";
			} else {
				$code = "
				var lipsum_temp_date = new Date();
				var lipsum_temp_pointer = lipsum_temp_date.getTime()%".$count.";
				var lipsum_temp_strings = new Array();";
			}


				// End-sequence:
			$chars = t3lib_div::trimExplode(',',$endSequence,1);
			$addJS = '';
			foreach($chars as $charVal)	{
				if (intval($charVal)>0)	{
					$addJS.="+unescape('".rawurlencode(chr(intval($charVal)))."')";
				}
			}

				// Add Lipsum content to array:
			for ($a=0;$a<$count;$a++)	{
				$code.= "
				lipsum_temp_strings[".$a."]='".$this->lindex[$type][$a]."'".$addJS.";";
			}

				// Set variable value:
			$code.="
				".$varName.($add?'+':'')."=lipsum_temp_strings[lipsum_temp_pointer];
			";

				// Return:
			return $code;
		}
	}

	/**
	 * Return icon for Lipsum Wizard
	 *
	 * @param	string		Type (see keyword list in other functions)
	 * @param	string		Backpath.
	 * @return	string		Text/Icon
	 */
	function getIcon($type, $backPath='')	{
		switch($type)	{
			case 'loremipsum':
				return '<img src="'.$backPath.t3lib_extMgm::extRelPath('lorem_ipsum').'lorem_ipsum.gif" width="48" height="10" hspace="2" class="absmiddle" title="'.$this->str_loremIpsum.'..." alt="" />';
			break;
			default:
				return '<img src="'.$backPath.t3lib_extMgm::extRelPath('lorem_ipsum').'lipsum.gif" width="48" height="20" hspace="2" class="absmiddle" title="Insert dummy content." alt="" />';
			break;
		}
	}

	/**
	 * Initialize LoremIpsum sources.
	 *
	 * @return	void
	 */
	function loadLoremIpsumArray()	{
		global $T3_VAR;

		if (!is_array($T3_VAR['ext']['lorem_ipsum']['lindex']))	{
				// Init:
			$pCounter = 0;

				// Load text:
			$lipsumText = t3lib_div::getUrl(t3lib_extMgm::extPath('lorem_ipsum').'lorem_ipsum.txt');

				// Split into sentencies:
			$this->loremIpsumSource = t3lib_div::trimExplode('.',$lipsumText,1);

				// Make unique and sort:
			$this->loremIpsumSource = array_unique($this->loremIpsumSource);
			sort($this->loremIpsumSource);

				// Create index of title/header/sentence length strings:
			$this->lindex = array(
				'title' => array(),
				'header' => array(),
				'description' => array(),
				'word' => array(),
				'paragraph' => array(),
				'loremipsum' => array($this->str_loremIpsum)
			);
			foreach($this->loremIpsumSource as $lipsumStr)	{
				$strlen = strlen($lipsumStr);
				$lipsumStr = ereg_replace('['.chr(13).chr(10).']',' ',$lipsumStr);

				if ($strlen < 20)	{
					$this->lindex['title'][] = $lipsumStr;
					$this->lindex['word'][] = ereg_replace('^.*[ ]([[:alnum:]]+)$','\1',$lipsumStr);
				} elseif ($strlen < 60)	{
					$this->lindex['header'][] = $lipsumStr;
				} else {
					$this->lindex['description'][] = $lipsumStr;
					$this->lindex['paragraph'][round($pCounter/$this->paragraphSentences)].= $lipsumStr.'. ';
					$pCounter++;
				}
			}

			$this->lindex['word'] = array_unique($this->lindex['word']);

			$T3_VAR['ext']['lorem_ipsum']['lindex'] = $this->lindex;
		} else {
			$this->lindex = $T3_VAR['ext']['lorem_ipsum']['lindex'];
		}
	}
}

// Include extension?
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/lorem_ipsum/class.tx_loremipsum_wiz.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/lorem_ipsum/class.tx_loremipsum_wiz.php']);
}
?>