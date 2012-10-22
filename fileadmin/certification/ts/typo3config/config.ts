# ==============================================================================
# Default Configuration
# ==============================================================================
config {

  ## Links
  extTarget = _blank
  intTarget = _self
  ATagParams = 
  
  ## Cache
  no_cache = 0
  cache_period = 172800
  cache_clearAtMidnight = 1
  #sendCacheHeaders = 1

  ## Disable TYPO3 Debugging (<!-- Parsetime: 0 ms-->)
  debug = 0

  ## Disable Admin Panel
  admPanel = 0

  ## SEO: Show Pagetitle first
  pageTitleFirst = 1

  ## SEO: Use first 100 Signs of the real Filename for Temp-File
  meaningfulTempFilePrefix = 100

  ## SEO: Replace default Page Title
  noPageTitle = 2
  
  ## Cleanup
  doctype = xhtml_strict
  xhtmlDoctype = xhtml_strict  
  xmlprologue = none
  xhtml_cleaning = all
  disablePrefixComment = 1

  ## Remove the complete head
  disableAllHeaderCode = 0

  ## Externalize Inline Code
  removeDefaultJS = external
  inlineStyle2TempFile = 1

  ## Configure RealURL
  simulateStaticDocuments = 0
  tx_realurl_enable = 1
  uniqueLinkVars = 1
  linkVars = L
  prefixLocalAnchors = all

  # Default value
  baseURL = {$t3ua.domain}

  ## Protect Mail Addresses from Spammers
  spamProtectEmailAddresses = 3
  spamProtectEmailAddresses_atSubst = (at)
  
  ## Site indexing (indexed_search)
  index_enable = 1
  index_externals = 0

  ## Header comment  
  headerComment (
    {$t3ua.meta.company}
    Reference: {$t3ua.meta.reference}
  )
}

# ==============================================================================
# Doctype Configuration
# ==============================================================================
[browser = msie] && [version =< 7]
  doctypeSwitch = 1
[else]
  doctypeSwitch = 0
[global]