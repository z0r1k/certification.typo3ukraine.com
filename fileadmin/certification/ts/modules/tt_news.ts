# ==============================================================================
# Plugin configuration: tt_news
# ==============================================================================
plugin.tt_news {
  displayList {
    content_stdWrap.parseFunc < lib.parseFunc_RTE
    content_stdWrap.parseFunc.nonTypoTagStdWrap.encapsLines.addAttributes.P >
  }
}