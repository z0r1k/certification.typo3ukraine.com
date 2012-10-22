# ==============================================================================
# RTE configuration
# See: http://ben.vantende.net/t3docs/rte/
# ==============================================================================
RTE {
  ## Define alignment classes
  classes {

    align-left {
      name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifyleft
      value = text-align: left;
    }
    
    align-center {
      name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifycenter
      value = text-align: center;
    }
    
    align-right {
      name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifyright
      value = text-align: right;
    }

  }

  ## Remove alt- and title-tag from links
  classesAnchor {
  
    externalLink {
      altText >
      titleText >
      image >
    }
    
    externalLinkInNewWindow {
      altText >
      titleText >
      image >
    }
    
    internalLink {
      altText >
      titleText >
      image >
    }
    
    internalLinkInNewWindow {
      altText >
      titleText >
      image >
    }
    
    download {
      altText >
      titleText >
      image >
    }
    
    mail {
      altText >
      titleText >
      image >
    }
  
  }

  ## Default configuration
  default {
  
    ## Hide infrequently used paragraph types in the paragraph type selector (formatblock button)
    hidePStyleItems = pre, address, H1, H2

    ## Disable magic images and color picker
    disableColorPicker = 1
    blindImageOptions = magic, dragdrop

    ## Use own CSS for RTE
    useCSS = 1
    #contentCSS = fileadmin/templates/rte/style.css
    #ignoreMainStyleOverride = 1

    ## Cleanup
    enableWordClean = 1
    enableWordClean.HTMLparser = 1
    
    ## Use same filter to clean pasted content
    enableWordClean.HTMLparser < RTE.default.proc.entryHTMLparser_db
    
    removeTrailingBR = 1
    removeComments = 1
    removeTags = center,sdfield,u,o:p,font
    removeTagsAndContents = style,script

    ## Keep icon groups
    keepButtonGroupTogether = 1

    ## Hide statusbar
    showStatusBar = 1

    ## Define inline styles
    inlineStyle.text-alignment (
      p.align-left,
      h3.align-left,
      h4.align-left,
      h5.align-left,
      h6.align-left,
      td.align-left { text-align: left; }
      
      p.align-center,
      h3.align-center,
      h4.align-center,
      h5.align-center,
      h6.align-center,
      td.align-center { text-align: center; }
      
      p.align-right,
      h3.align-right,
      h4.align-right,
      h5.align-right,
      h6.align-right,
      td.align-right { text-align: right; }
    )

    proc {
    
      ## Allowed tags
      allowTags (
        table, tbody, tr, th, td, h3, h4, h5, h6, div, p, br,
        span, ul, ol, li, strong, b, i, em, a, img, hr, sub, sup
      )
      
      ## Denied tags
      denyTags (
        h1, h2, re, blockquote, u, strike, nobr,
        tt, q, cite, abbr, acronym, center, small, font
      )

      ## Do not convert BR to P
      dontConvBRtoParagraph = 1

      ## Allowed tags outside of P and DIV
      allowTagsOutside = img, hr, span

      ## Allowed tags for P and DIV
      keepPDIVattribs = align, class, style, id

      ## List of all allowed classes while writing into DB
      allowedClasses (
        external-link,
        external-link-new-window,
        internal-link,
        internal-link-new-window,
        download,mail,
        align-left,
        align-center,
        align-right,
        rte_image
      )

      ## Configure HTML parser
      HTMLparser_rte {
      
        ## Allow / deny tags
        allowTags < RTE.default.proc.allowTags
        denyTags < RTE.default.proc.denyTags

        ## Remove not allowed tags
        removeTags = font

        ## Remove comments
        removeComments = 1

        ## Remove single tags
        keepNonMatchedTags = 0
      }

      ## Configure writing into DB
      entryHTMLparser_db = 1
      entryHTMLparser_db {
      
        ## Allow / deny tags
        allowTags < RTE.default.proc.allowTags
        denyTags  < RTE.default.proc.denyTags

        ## Remove attributes
        noAttrib (
          b, i, u, strike, sub, sup, strong, em, quote,
          blockquote, cite, tt, br, center, table, tr, td
        )

        ## Remove clear tags
        rmTagIfNoAttrib = div, font
        
        ## Remove not allowed tags
        removeTags = font

        ## Remove HTML chars
        htmlSpecialChars = 0

        ## Allow / remap attributes
        tags {
          p.allowedAttribs = class,style,align
          p.fixAttrib.style.unset = 1
          p.fixAttrib.align.unset = 1
          
          span.fixAttrib.style.unset >
          span.rmTagIfNoAttrib = 1          
          span.allowedAttribs = class
          
          div.fixAttrib.align.unset = 1
          hr.allowedAttribs = class
          b.remap = strong
          i.remap = em
          img >
        }        
        keepNonMatchedTags = 1
        
      } # parser entry

      ## Configure writing into DB with exit
      exitHTMLparser_db = 1
      exitHTMLparser_db {     
        ## Remove not allowed tags
        removeTags = font
        
        ## Allow / remap attributes
        tags {
          b.remap = strong
          i.remap = em
        }
        keepNonMatchedTags = 1
        ## Remove HTML chars
        htmlSpecialChars = 0
        
      } # parser exit
      
    } # proc

    ## Configure classes
    classesImage = rte_image
    classesParagraph = align-left, align-center, align-right

    ## Show / hide toolbar buttons
    hideButtons = *
    
    showButtons (
      formatblock,
      bold, italic, subscript, superscript,
      orderedlist, unorderedlist, outdent, indent,
      textindicator,
      insertcharacter, link, image, table,
      findreplace,
      chMode, removeformat,
      copy, cut, paste,
      undo, redo,
      showhelp,
      toggleborders, tableproperties, rowproperties, rowinsertabove, rowinsertunder,
      rowdelete, rowsplit, columninsertbefore, columninsertafter, columndelete,
      columnsplit, cellproperties, cellinsertbefore, cellinsertafter,
      celldelete, cellsplit, cellmerge,
      left, center, right
    )

    ## Remove formats
    # Bug: h1 = h2  &  h2 = h3  &  ...
    buttons.formatblock.removeItems = h1, pre, address, blockquote, div, p

    ## Do not allow tags
    hideTags < RTE.default.proc.denyTags

    ## Table operations in toolbar
    #hideTableOperationsInToolbar = 0
    #keepToggleBordersInToolbar = 1

    ## Disable some table operations
    disableSpacingFieldsetInTableOperations = 1
    disableAlignmentFieldsetInTableOperations = 1
    disableColorFieldsetInTableOperations = 1
    disableLayoutFieldsetInTableOperations = 1
    disableBordersFieldsetInTableOperations = 0

    ## Maximal image size
    #buttons.image.options.plain.maxWidth = 252
    #buttons.image.options.plain.maxHeight = 168

    FE < RTE.default
    FE {
      userElements >
      userLinks >
    }
  }
}