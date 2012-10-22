# ==============================================================================
# Opening DIV for all frames
# ==============================================================================
temp.tt_content >
temp.tt_content.5 = CASE
temp.tt_content.5 {
  key.field = section_frame

  1 = TEXT
  1.value =

  50 < .1
  50 {
    value = <div>
  }
 
  default < .1
  default {
    stdWrap.dataWrap = <div class="Default">
  }
}

# ==============================================================================
# Closing DIV for all frames
# =============================================================================
temp.tt_content.255 = CASE
temp.tt_content.255 {
  key.field = section_frame

  1 = TEXT
  1.value = </div>
    
  default < .1
}

# ==============================================================================
# Content element: HEADER
# ==============================================================================
tt_content.header.5 < temp.tt_content.5
tt_content.header.255 < temp.tt_content.255

# ==============================================================================
# Content element: TEXT
# ==============================================================================
tt_content.text.5 < temp.tt_content.5
tt_content.text.255 < temp.tt_content.255

# ==============================================================================
# Content element: IMAGE
# ==============================================================================
tt_content.image.5 < temp.tt_content.5
tt_content.image.255 < temp.tt_content.255

# ==============================================================================
# Content element: TEXTPIC
# ==============================================================================
tt_content.textpic.5 < temp.tt_content.5
tt_content.textpic.255 < temp.tt_content.255

# ==============================================================================
# Content element: BULLETS
# ==============================================================================
tt_content.bullets.5 < temp.tt_content.5
tt_content.bullets.255 < temp.tt_content.255

# ==============================================================================
# Content element: TABLE
# ==============================================================================
tt_content.table.5 < temp.tt_content.5
tt_content.table.255 < temp.tt_content.255

# ==============================================================================
# Content element: UPLOADS
# ==============================================================================
tt_content.uploads.5 < temp.tt_content.5
tt_content.uploads.255 < temp.tt_content.255

# ==============================================================================
# Content element: MULTIMEDIA
# ==============================================================================
tt_content.multimedia.5 < temp.tt_content.5
tt_content.multimedia.255 < temp.tt_content.255

# ==============================================================================
# Content element: MAILFORM
# ==============================================================================
tt_content.mailform.5 < temp.tt_content.5
tt_content.mailform.255 < temp.tt_content.255

# ==============================================================================
# Content element: SEARCH
# ==============================================================================
tt_content.search.5 < temp.tt_content.5
tt_content.search.255 < temp.tt_content.255

# ==============================================================================
# Content element: LOGIN
# ==============================================================================
tt_content.login.5 < temp.tt_content.5
tt_content.login.255 < temp.tt_content.255

# ==============================================================================
# Content element: SPLASH
# ==============================================================================

# ==============================================================================
# Content element: MENU
# ==============================================================================
tt_content.menu.5 < temp.tt_content.5
tt_content.menu.255 < temp.tt_content.255

# ==============================================================================
# Content element: SHORTCUT
# ==============================================================================
tt_content.shortcut.5 < temp.tt_content.5
tt_content.shortcut.255 < temp.tt_content.255

# ==============================================================================
# Content element: LIST
# ==============================================================================
tt_content.list.5 < temp.tt_content.5
tt_content.list.255 < temp.tt_content.255

# ==============================================================================
# Content element: SCRIPT
# ==============================================================================

# ==============================================================================
# Content element: DIV
# ==============================================================================
tt_content.div >
tt_content.div = COA
tt_content.div.5 < temp.tt_content.5
tt_content.div.10 = TEXT
tt_content.div.10.value =
tt_content.div.10.wrap = <div class="divider"> | </div>
tt_content.div.10.prefixComment = 2 | Div element
tt_content.div.255 < temp.tt_content.255

# ==============================================================================
# Content element: HTML
# ==============================================================================
tt_content.html >
tt_content.html = COA
tt_content.html.5 < temp.tt_content.5
tt_content.html.10 = TEXT
tt_content.html.10.field = bodytext
tt_content.html.10.editIcons = tt_content: pages
tt_content.html.10.editIcons.iconTitle.data = LLL:EXT:css_styled_content/pi1/locallang.php:eIcon.html
tt_content.html.10.prefixComment = 2 | Raw HTML content:
tt_content.html.255 < temp.tt_content.255

# ==============================================================================
# Divider frame wraping
# ==============================================================================