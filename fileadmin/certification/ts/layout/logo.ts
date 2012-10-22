# ==============================================================================
# Logo
# ==============================================================================
temp.logo = COA
temp.logo {
  10 = TEXT
  10 {
    value = {$t3ua.logo.file}
    wrap = |

    typolink {
      parameter = {$t3ua.template.introUid}
      title = {$t3ua.logo.slogan}
      ATagBeforeWrap = 1
      wrap = <img src="|" id="logo" alt="{$t3ua.logo.slogan}">
    }
  }
}