# ==============================================================================
# Get "last change" date for meta tags
# ==============================================================================
temp.changeDate = TEXT
temp.changeDate {
  field = SYS_LASTCHANGED
  date = Y-m-d
}

# ==============================================================================
# Generate a part of content for description
# ==============================================================================
temp.descriptionContent = CONTENT
temp.descriptionContent {
  table = tt_content

  select {
    orderBy = sorting
    where = colPos=0
    languageField = sys_language_uid
    max = 5
    selectFields = bodytext
  }

  renderObj = TEXT
  renderObj {
    required = 1
    field = bodytext
    crop = 130 | ... | 1
    stdWrap.stripHtml = 1
  }

  ## If nothing to show...
  stdWrap.ifEmpty = {$t3ua.meta.description}
}

# ==============================================================================
# Text of header
# ==============================================================================
lib.text_header = TEXT
lib.text_header {
  value = {$t3ua.title.company}
  wrap = &nbsp;-&nbsp;|
  reqired = 1
}

[treeLevel = 1]
  lib.text_header.value = {$t3ua.meta.company}
[end]

# ==============================================================================
# BODY-tag
# ==============================================================================
temp.bodytag > 
temp.bodytag = TEXT
temp.bodytag.value = <body id="home">

# ==============================================================================
# Page setup
# ==============================================================================
page = PAGE
page {
  typeNum = 0
  shortcutIcon = fileadmin/templates/main/favicon.ico

  # SEO
  meta {
    robots = index,follow
    rating = general
    revisit = 3 days
    revisit-after = 7 days
    includeglobal = 1
    date < temp.changeDate
    
    company = {$t3ua.meta.company}
    copyright = {$t3ua.meta.copyright}
    
    author.field = author
    author.ifEmpty = {$t3ua.meta.author}
    
    title.field = title
    subtitle.field = nav_title // title // subtitle
    
    description.field = description
    description.ifEmpty.cObject < temp.descriptionContent
    
    keywords.field = keywords
  }

  headerData {
    ## Create new title
    1 = COA
    1 {
      # News title if it's news detail page
      5 = RECORDS
      5 {
        dontCheckPid = 1
        
        source.data = GP:tx_ttnews|tt_news
        source.insertData = 1
        
        tables = tt_news
        conf.tt_news = TEXT
        conf.tt_news.field = title
        conf.tt_news.required = 1
        
        stdWrap {
          preCObject = TEXT
          preCObject.stdWrap.char = 32
  
          postCObject = TEXT
          postCObject.stdWrap.char = 32
  
          wrap = |-&nbsp;
          required = 1
          
          htmlSpecialChars = 1
        }
      }
    
      10 = TEXT
      10 {
        field = nav_title // title // subtitle
        wrap = |
      }
      
      20 < lib.text_header
      
      wrap = <title> | </title>
    }

    5 = TEXT
    5.value (
      <!--[if lte IE 7]>
        <link rel="stylesheet" href="text/css" href="fileadmin/templates/main/css/ie7.css" type="text/css" media="screen" />
      <![endif]-->

      <!--[if lte IE 6]>
        <link rel="stylesheet" href="text/css" href="fileadmin/templates/main/css/ie6.css" type="text/css" media="screen" />
      <![endif]-->
    )

    ## RTE styles
    10 = TEXT
    10 {
      data = path:EXT:rtehtmlarea/res/contentcss/default.css
      wrap = <link rel="stylesheet" type="text/css" href="|" />
    }
  }
 
  ## Stylesheet file
  includeCSS {
    style  = fileadmin/templates/main/css/style.css
  }
  
  includeJS {
  }
  
  ## Special background at "dev" environment
  bodyTagCObject > 
  bodyTagCObject < temp.bodytag

  ###########################################
  ## baseURL hack
  ## Show NEVER appear on production system
  ## It's for DEV/QA only
  ###########################################
  # config.pageGenScript = fileadmin/ts/functions/func.alternative_pagegen.php

  ## Output generation goes here
  10 < temp.templateInner

  ## Google Analytics
  99 < lib.analytics
}

[globalVar = TSFE:id = {$t3ua.template.introUid}]
  page.10 < temp.templateHome
[else]
  page.10 < temp.templateInner
[global]