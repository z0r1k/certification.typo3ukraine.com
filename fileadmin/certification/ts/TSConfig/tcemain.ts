# ==============================================================================
# TCEMAIN backend configuration
# See: http://ben.vantende.net/t3docs/tsconfig/page/12/
# ==============================================================================
TCEMAIN {

  table {

    pages {
      ## Disable (Copy 1) and (Hidden) while copying
      #disablePrependAtCopy = 1
      #disableHideAtCopy = 0
    }

  }

  permissions {
    ## Set default user / group for new pages
    #userid = 2
    #groupid = 2

    ## Set default rights
    #user = show, edit, delete, new, editcontent
    #group = show, edit, new, editcontent
    #everybody = show
  }

  ## Clear page cache for child / parent if current page was saved
  #clearCache_pageSiblingChildren = 1
  #clearCache_pageGrandParent = 1

  ## Disable automatical cache clearing
  #clearCache_disable = 1

  ## Show this message if a dataset was copied in another language
  #translateToMessage = Please translate to "%s"

}