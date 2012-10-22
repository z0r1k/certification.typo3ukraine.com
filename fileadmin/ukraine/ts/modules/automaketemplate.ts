# ==============================================================================
# Plugin configuration: automaketemplate
# ==============================================================================
plugin.tx_automaketemplate_pi1 {
  ## Read the template file:
  content = FILE
  
  ## Define tag (subpart-comments):
  elements {
    BODY.all = 1
    BODY.all.subpartMarker = DOCUMENT_BODY

    DIV.all = 1
    DIV.subnavi.includeWrappingTag = 1
  }

  ## Apply to all relative path:
  relPathPrefix = fileadmin/templates/main/
}
