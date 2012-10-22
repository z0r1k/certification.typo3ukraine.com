# ==============================================================================
# Language Configuration
# ==============================================================================
config {
  ## Set default language always to German
  htmlTag_langKey = ru
  sys_language_uid = 0
  language = ru
  locale_all = ru_RU.UTF-8
}

# ==============================================================================
# German
# ==============================================================================
[globalVar = GP:L = 0]

  ## Default
  config {
    htmlTag_langKey = ru
    sys_language_uid = 0
    language = ru
    locale_all = ru_RU.UTF-8
  }

  ## tt_news
  #plugin.tt_news {
  #  displaySingle {
  #    date_stdWrap.strftime = %d.%m.%Y, %H:%M
  #    time_stdWrap.strftime = %H:%m
  #    age_stdWrap.age = Minute(n)| Stunde(n)| Tag(e)| Jahr(e)
  #  }
    
  #  displayList {
  #    date_stdWrap.strftime = %d.%m.%Y, %H:%M
  #    time_stdWrap.strftime = %H:%m
  #    age_stdWrap.age = Minute(n)| Stunde(n)| Tag(e)| Jahr(e)
  #  }
  #}

[global]

# ==============================================================================
# English
# ==============================================================================
#[globalVar = GP:L = 1]
#
  ## Default
#  config {
#    htmlTag_langKey = en
#    sys_language_uid = 1
#    language = en
#    locale_all = en_US.UTF-8
#  }
  
  ## tt_news
#  plugin.tt_news {
#    displaySingle {
#      date_stdWrap.strftime = %d.%m.%Y, %H:%M
#      time_stdWrap.strftime = %g:%m %p
#      age_stdWrap.age = Minute(s)| Hour(s)| Day(s)| Year(s)
#    }
    
#    displayList {
#      date_stdWrap.strftime = %d.%m.%Y, %H:%M
#      time_stdWrap.strftime = %g:%m %p
#      age_stdWrap.age = Minute(s)| Hour(s)| Day(s)| Year(s)
#    }
#  }
#[global]