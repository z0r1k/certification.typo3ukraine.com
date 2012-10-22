# ==============================================================================
# Module configuration
# See: http://ben.vantende.net/t3docs/tsconfig/page/11/
# ==============================================================================
mod {

  web_info {
    menu.function {
      ## Remove options from info module
      #tx_infopagetsconfig_webinfo = 0
      #tx_realurl_modfunc1 = 0
      #tx_ttnewscatmanager_modfunc1 = 0
    }
  }

  web_func {
    menu.wiz {
      ## Remove options from functions module
      #tx_wizardcrpages_webfunc_2 = 0
      #tx_wizardsortpages_webfunc_2 = 0
    }
  }

  web_ts {
    menu.function {
      ## Remove options from template module
      #tx_tstemplateanalyzer = 0
    }

  }

  web_layout {
    ## Disable some unused functionality
    #disableAdvanced = 1
    #disableSearchBox = 1
    #disableBigButtons = 0
    totalWidth = 100
    editIconMode = 0
  }

  web_list {
    ## Specify which types of new elements are allowed in "New"-Wizard
    #allowedNewTables (
    #  pages,
    #  tt_content,
    #  tt_news,
    #  tx_cal_event,
    #  tx_cal_category,
    #  tx_cal_calendar,
    #  tx_cal_location,
    #  tx_cal_organizer,
    #  tx_cal_attendee,
    #  tx_21torrfisslerevents_events
    #)
  }

  SHARED {
    ## Specify which columns are visible (hide border column)
    #colPos_list = 1,0,2

    ## Set default Language Label / Image
    defaultLanguageFlag = ru.gif
    defaultLanguageLabel = Russian
  }

  xMOD_alt_doc {
    ## Beautify the backend
    # disableDocSelector = 1
    # disableCacheSelector = 1
  }

}