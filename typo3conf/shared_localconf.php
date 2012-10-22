<?php
# ==============================================================================
# Main configuration
# ==============================================================================

    $typo_db_host = 'localhost';
    $TYPO3_CONF_VARS['SYS']['sitename'] = 'TYPO3 Украина';

# ==============================================================================
# Backend configuration
# ==============================================================================

    ## Level for frontend-compression (uses PHP-module "zlib")
    $TYPO3_CONF_VARS['BE']['compressionLevel'] = '3';

    ## Force this charset for backend
    $TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';

    ## Session timeout
    $TYPO3_CONF_VARS['BE']['sessionTimeout'] = '10800';

    ## Access rights of new created files
    $TYPO3_CONF_VARS['BE']['fileCreateMask'] = '0775';

    ## Access rights of new created folders
    $TYPO3_CONF_VARS['BE']['folderCreateMask'] = '0775';

    ## Denied file extensions
    $TYPO3_CONF_VARS['BE']['fileExtensions']['webspace']['deny'] = 'php,php3,php4,php5,svn';


# ==============================================================================
# Frontend configuration
# ==============================================================================

    ## Clean the HTML-output
    $TYPO3_CONF_VARS['FE']['tidy'] = '0';

    ## Use tidy only while caching (all | cached | output)
    $TYPO3_CONF_VARS['FE']['tidy_option'] = 'cached';

    ## Path and parameters for tidy
    $TYPO3_CONF_VARS['FE']['tidy_path'] = 'tidy -i --quiet true --tidy-mark false -wrap 0 -utf8 --output-xhtml true';

    ## Enable the parameter "NoCache" for extensions
    $TYPO3_CONF_VARS['FE']['disableNoCacheParameter'] = '0';

    ## Acitvate to show an error-file where the markers ###CURRENT_URL### and ###REASON### are filled with current data
    ## @todo add i18n here
    #$TYPO3_CONF_VARS['FE']['pageNotFound_handling'] = '/404.html';

    ## This string will be written as header if "pageNotFound_handling" is activated
    $TYPO3_CONF_VARS['FE']['pageNotFound_handling_statheader'] = 'HTTP/1.1 404 Not Found';

    ## Use this to hide not translated pages by default
    #$TYPO3_CONF_VARS['FE']['hidePagesIfNotTranslatedByDefault'] = '1';


# ==============================================================================
# System configuration
# ==============================================================================

    ## Encryption-key for hashes
    $TYPO3_CONF_VARS['SYS']['encryptionKey'] = '1593ed3714a7292da9503e779bf3375e59383136ed704895137e8de8493f806da9e91578d34f966e2a068af9fdc98283';

    ## Installation Tool password
    $TYPO3_CONF_VARS['BE']['installToolPassword'] = 'ef88dff9e6557a1577a0b250eadd3372';

    ## Compatibility (for older Versions)
    $TYPO3_CONF_VARS['SYS']['compat_version'] = '4.3';

    ## Date-format
    $TYPO3_CONF_VARS['SYS']['ddmmyy'] = 'd.m.Y';

    ## Show SQL debug messages in frontend
    $TYPO3_CONF_VARS['SYS']['sqlDebug'] = '0';

    ## Which files could be edited in backend
    $TYPO3_CONF_VARS['SYS']['textfile_ext'] = 'txt,html,htm,css,inc,php,php3,tmpl,js,sql,ts';

    ## Show error messages only users with one of this IPs
    $TYPO3_CONF_VARS['SYS']['devIPmask'] = '192.168.*,127.0.0.1';

    ## Use the PHP-module "mbstring" for multibyte encoding (it's faster then typo3)
    $TYPO3_CONF_VARS['SYS']['t3lib_cs_utils'] = 'mbstring';

    ## Use this if UTF-8 is used (DB-fields are to short for UTF-8)
    #$TYPO3_CONF_VARS['SYS']['multiplyDBfieldSize'] = '2';

    ## Show error messages (0 = no PHP errors | 1 = all errors | -1 default)
    $TYPO3_CONF_VARS['SYS']['displayErrors'] = '-1';

    ## Initial DB script
    $TYPO3_CONF_VARS['SYS']['setDBinit'] = "SET NAMES utf8";

    ## Do not show version in copyright (security !!!)
    $TYPO3_CONF_VARS['SYS']['loginCopyrightShowVersion'] = '0';

    ## Copyright provider
    $TYPO3_CONF_VARS['SYS']['loginCopyrightWarrantyProvider'] = 'Michael Leibenson';

    ## Copyright URL
    $TYPO3_CONF_VARS['SYS']['loginCopyrightWarrantyURL'] = 'http://michaelleibenson.org.ua/';


# ==============================================================================
# Graphic-manipulation configuration
# ==============================================================================

    ## Use image-processing
    $TYPO3_CONF_VARS['GFX']['image_processing'] = '1';

    ## Show thumbnails
    $TYPO3_CONF_VARS['GFX']['thumbnails'] = '1';

    ## Format of the thumbnails (0 = GIF exclude JPG | 1 = PNG exclude JPG | 2 = GIF | 3 = PNG)
    $TYPO3_CONF_VARS['GFX']['thumbnails_png'] = '2';

    ## Compression of generated GIF-files
    $TYPO3_CONF_VARS['GFX']['gif_compress'] = '1';

    ## File-types which are handled as image-files
    $TYPO3_CONF_VARS['GFX']['imagefile_ext'] = 'gif,png,jpeg,jpg';

    ## Activate this for using GDLib
    #$TYPO3_CONF_VARS['GFX']['gdlib'] = '1';

    ## Activate this for using GDLib 2
    $TYPO3_CONF_VARS['GFX']['gdlib_2'] = '1';

    ## Generate PNGs instead of GIFs
    $TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1';

    ## Use Image-Magic
    $TYPO3_CONF_VARS['GFX']['im'] = '1';

    ## Path to Image-Magic
    $TYPO3_CONF_VARS['GFX']['im_path'] = '/usr/local/bin/';

    ## If Image-Magic version is higher then 5 use "1" for GraphicsMagic use "gm"
    $TYPO3_CONF_VARS['GFX']['im_version_5'] = 'im6';

    ## Use effects of version 5
    $TYPO3_CONF_VARS['GFX']['im_v5effects'] = '1';

    ## No effects
    $TYPO3_CONF_VARS['GFX']['im_no_effects'] = '1';

    $TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';

    ## DPI of server-resolution (72 | 96)
    $TYPO3_CONF_VARS['GFX']['TTFdpi'] = '96';

    ## JPG quality of generated image-files
    $TYPO3_CONF_VARS['GFX']['jpg_quality'] = '90';

    ## Saves all generated files in DB, if used no dublicates will be generated
    #$TYPO3_CONF_VARS['GFX']['enable_typo3temp_db_tracking'] = '1';


# ==============================================================================
# Extension configuration
# ==============================================================================

    ## Use this to make extension-files editable in backend
    #$TYPO3_CONF_VARS['EXT']['noEdit'] = '1';

    ## Allow the installation of extensions in typo3conf/ext
    #$TYPO3_CONF_VARS['EXT']['allowLocalInstall'] = '1';

    ## Allow the installation of extensions in typo3/ext
    $TYPO3_CONF_VARS['EXT']['allowGlobalInstall'] = '0';

    ## Allow the installation of extensions in typo3/sysext
    $TYPO3_CONF_VARS['EXT']['em_systemInstall'] = '0';
    $TYPO3_CONF_VARS['EXT']['allowSystemInstall'] = '0';

    ## Use this to allways download extension-manuals from this server
    $TYPO3_CONF_VARS['EXT']['em_alwaysGetOOManual'] = '1';

    ## Required extensions - this extensions couldn't be removed
    #$TYPO3_CONF_VARS['EXT']['requiredExt'] = 'cms,lang,sv';

    ## Use this if extenion-configuration (ext_localconf.php, ext_tables.php) shouldn't be cached
    #$TYPO3_CONF_VARS['EXT']['extCache'] = '1';

    # Scheduler
    $TYPO3_CONF_VARS['EXT']['extConf']['scheduler'] = 'a:2:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";}';

    # Open Docs extenion
    $TYPO3_CONF_VARS['EXT']['extConf']['opendocs'] = 'a:1:{s:12:"enableModule";s:1:"1";}';

    # RSA auth and saltedpasswords configuration 
    //$TYPO3_CONF_VARS['BE']['loginSecurityLevel'] = 'rsa';
    //$TYPO3_CONF_VARS['FE']['loginSecurityLevel'] = 'rsa';
    //$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:5:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}s:3:"BE.";a:5:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}}';
    
# ==============================================================================
# TS-Config configuration
# ==============================================================================

    ## Add Default Page TS-Config (!!! include by hand instead !!!)
    #t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/ts/TSConfig/main_page_ts.ts">');

    ## Add Default User TS-Config
    t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/ts/TSConfig/main_user_ts.ts">');

# ==============================================================================
# XClass configuration
# ==============================================================================

    ###########################################
    ## RealURL
    ## Show NEVER appear on production system
    ## It's for DEV/QA only
    ###########################################
    # $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurl/class.tx_realurl_advanced.php'] = PATH_site . '/fileadmin/ts/functions/class.ux_tx_realurl_advanced.php';
    

# ==============================================================================
# Real-URL configuration
# ==============================================================================

  switch(strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0, 2))) {
    case 'ru':
      $defaultLanguage = 'ru';
      break;
    case 'en':
      $defaultLanguage = 'en';
      break;
    case 'de':
      $defaultLanguage = 'de';
      break;          
    default:
      $defaultLanguage = 'ru';
      break;
  }
  
  if(isset($_GET['id'])) {
    // for the sake of the backend preview
    $defaultLanguage = 'en';
  }

  /**
   * Root pages list
   * Domains only
   * For back compatibility: you can specify domains here if you have no "domains" in typo3
   */
  $aRootPIDs = array(
    'default' => 1,
    'typo3ukraine.local' => 1,
    'certification.typo3ukraine.local' => 2,  
  );

  /**
   * Root pages list
   * Domains only
   * For backward compatibility: you can specify domains here if you have no "domains" in typo3
   */
  $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array (
    '_DEFAULT' => array(
        'init' => array(
          'enableCHashCache' => 1,
          'appendMissingSlash' => 'ifNotFile',
          'enableUrlDecodeCache' => 1,
          'enableUrlEncodeCache' => 1,
        ),
        'redirects' => array(
        ),
        'pagePath' => array(
          'type' => 'user',
          'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
          'spaceCharacter' => '-',
          'languageGetVar' => 'L',
          'segTitleFieldList' => 'tx_realurl_pathsegment,nav_title,title',
          'disablePathCache' => 0,
          'autoUpdatePathCache' => 1,
          'expireDays' => 3 ,
          'rootpage_id' => 1, // default value: will be overridden by typo3 "domains" or $aRootPIDs if not empty
          // '21torr_domains' => $aRootPIDs,
        ),
        'preVars' => array(
          array(
            'GETvar' => 'L',
            'valueMap' => array(
              'ru' => 0,
              // 'en' => 1,
            ),
            'valueDefault' => $defaultLanguage,
            'noMatch' => 'bypass',
            ),
          array(
            'GETvar' => 'type',
            'valueMap' => array(
              'rss.xml' => 100,
            ),
            'noMatch' => 'bypass',
          ),
        ),
        'fixedPostVars' => array (
        ),
        'postVarSets' => array (
          '_DEFAULT' => array (
            'archive' => array (
              '0' => array (
                'GETvar' => 'tx_ttnews[year]'
              ),
              '1' => array (
                'GETvar' => 'tx_ttnews[month]',
                 'valueMap' => array (
                   'january' => '01',
                   'february' => '02',
                   'march' => '03',
                   'april' => '04',
                   'may' => '05',
                   'june' => '06',
                   'july' => '07',
                   'august' => '08',
                   'september' => '09',
                   'october' => '10',
                   'november' => '11',
                   'december' => '12',
                        ),
                    ),
                  '2' => array(
                    'condPrevValue' => -1,
                      'GETvar' => 'tx_ttnews[pS]',
                        'valueMap' => array(
                      ),
                    'noMatch' => 'bypass'
                  ),
                  '3' => array(
                    'GETvar' => 'tx_ttnews[pL]',
                      'valueMap' => array(
                    ),
                    'noMatch' => 'bypass'
                  ),
                  '4' => array(
                    'GETvar' => 'tx_ttnews[arc]',
                      'valueMap' => array(
                        'archived' => 1,
                        'non-archived' => -1,
                      ),
                      'noMatch' => 'bypass'
                  ),
                ),
                'browse' => array (
                  '0' => array (
                    'GETvar' => 'tx_ttnews[pointer]'
                  ),
                ),
                'select_category' => array (
                  '0' => array (
                    'GETvar' => 'tx_ttnews[cat]'
                  ),
                ),
                'back' => array(
                  array(
                    'GETvar' => 'tx_ttnews[backPid]',
                  )
                ),
                'read' => array (
                  '0' => array (
                    'GETvar' => 'tx_ttnews[tt_news]',
                      'lookUpTable' => array (
                        'table' => 'tt_news',
                        'id_field' => 'uid',
                        'alias_field' => 'title',
                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => '1',
                        'useUniqueCache_conf' => array (
                          'strtolower' => '1',
                          'spaceCharacter' => '-'
                        ),
                        'autoUpdate' => '1',
                        'expireDays' => '3',
                      ),
                    ),
                  '1' => array (
                    'GETvar' => 'tx_ttnews[swords]'
                  ),
               ),               
               'uid' => array(
                   array(
                     'GETvar' => 'uid',
                   ),
               ),
               'action' => array(
                   array(
                     'GETvar' => 'action',
                   ),
               ),
               'hash' => array(
                   array(
                     'GETvar' => 'hash',
                   ),
               ),
               'password' => array(
                   array(
                     'GETvar' => 'tx_felogin_pi1[forgot]',
                      'valueMap' => array (
                         'forgot' => '1',
                      ),
                   ),
               ),               
            ),
        ),
        'fileName' => array(
          'index' => array(
            'rss.xml' => array(
              'keyValues' => array(
                'type' => 100,
              )
            ),
            'sitemap.xml' => array(
              'keyValues' => array(
                'type' => 200,
              )
            ),
          ),
          'defaultToHTMLsuffixOnPrev' => 1,
        ),
    ),
    'typo3ukraine.local' => '_DEFAULT',
  );
  $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['certification.typo3ukraine.local'] = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['_DEFAULT'];
  $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['certification.typo3ukraine.local']['pagePath']['rootpage_id'] = 2;
?>