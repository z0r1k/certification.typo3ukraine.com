# ==============================================================================
# TCEFROM backend configuration
# See: http://ben.vantende.net/t3docs/tsconfig/page/9/
# ==============================================================================
TCEFORM {
  ## Page configurartion
  pages {
    doktype {
    }

    ## Very important for the generated page title !!!
    subtitle {
      config {
      }
    }

    ## Remove subparts selector for templateselector
    #tx_rlmptmplselector_ca_tmpl.disabled = 1

    ## Disable page fields (alphabetical)
    #abstract.disabled                = 1
    #alias.disabled                   = 1
    #author.disabled                  = 1
    #author_email.disabled            = 1
    #cache_timeout.disabled           = 1
    #content_from_pid.disabled        = 1
    #description.disabled             = 1
    #editlock.disabled                = 1
    #email.disabled                   = 1
    #endtime.disabled                 = 1
    #extendToSubpages.disabled        = 1
    #fe_group.disabled                = 1
    #fe_login_mode.disabled           = 1
    #keywords.disabled                = 1
    #is_siteroot.disabled             = 1
    #l18n_cfg.disabled                = 1
    #lastUpdated.disabled             = 1
    #layout.disabled                  = 1
    #media.disabled                   = 1
    #module.disabled                  = 1
    #nav_title.disabled               = 1
    #newUntil.disabled                = 1
    #no_cache.disabled                = 1
    #no_search.disabled               = 1
    #php_tree_stop.disabled           = 1
    #starttime.disabled               = 1
    #storage_pid.disabled             = 1
    #target.disabled                  = 1
    #TSconfig.disabled                = 1
    #tx_realurl_pathsegment.disabled  = 1
    #tx_realurl_exclude.disabled      = 1
  }

  ## Language specific page configuration
  pages_language_overlay < TCEFORM.pages

  ## Content configuration
  tt_content {
    CType {
      ## Remove datasets
      #removeItems (
      #  uploads, splash, script, bullets, html, shortcut, mailform, search, login, image, table
      #)

      ## Add Divider (!!! Do not use this while using configuration above !!!)
      removeItems >

      ## Rename datasets
      altLabels {
        #header       = Header
        #text         = Text
        #textpic      = Text w/image
        #image        = Image
        #bullets      = Bullet list
        #table        = Table
        #uploads      = Filelinks
        #mailform     = Form
        #search       = Search
        #login        = Login
        #multimedia   = Multimedia
        #menu         = Menu/Sitemap
        #shortcut     = Insert records
        #list         = Insert plugin
        #html         = HTML
        #div          = Divider
        #iframe2_pi1  = Inline Frame
      }
    }

    ## Remove border column if no need
    #colPos.removeItems = 3

    ## Set default image orientation
    #imageorient = 9
    #imageorient.disableNoMatchingValueElement = 1

    ## Disable content fields (alphabetical)
    #altText.disabled                  = 1
    #colPos.disabled                   = 1
    #date.disabled                     = 1
    #editlock.disabled                 = 1
    #endtime.disabled                  = 1
    #header_link.disabled              = 1
    #header_position.disabled          = 1
    #imageborder.disabled              = 1
    #imagecaption_position.disabled    = 1
    #imagecols.disabled                = 1
    #image_compression.disabled        = 1
    #image_effects.disabled            = 1
    #image_frames.disabled             = 1
    #image_link.disabled               = 1
    #image_noRows.disabled             = 1
    #l18n_parent.disabled              = 1
    #layout.disabled                   = 1
    #longdescURL.disabled              = 1
    #rte_enabled.disabled              = 1
    #spaceAfter.disabled               = 1
    #spaceBefore.disabled              = 1
    #starttime.disabled                = 1
    #sectionIndex.disabled             = 1
    #sys_language_uid.disabled         = 1
    text_align.disabled                = 1
    text_color.disabled                = 1
    text_face.disabled                 = 1
    text_properties.disabled           = 1
    text_size.disabled                 = 1
    #titleText.disabled                = 1

    section_frame {
      ## Remove Content Frames
      #removeItems = 1,5,6,10,11,12,20,21

      ## Add own Content Frames
      addItems {
        #50 = LLL:fileadmin/i18n/locallang.xml:tt_content.section_frame.image.bigImage
      }
      
      types {
        ## Remove content frames specific to each content element
        header.removeItems      = 1,5,6,10,11,12,20,21
        text.removeItems        = 1,5,6,10,11,12,20,21
        image.removeItems       = 1,5,6,10,11,12,20,21
        textpic.removeItems     = 1,5,6,10,11,12,20,21
        bullets.removeItems     = 1,5,6,10,11,12,20,21
        table.removeItems       = 1,5,6,10,11,12,20,21
        uploads.removeItems     = 1,5,6,10,11,12,20,21
        multimedia.removeItems  = 1,5,6,10,11,12,20,21
        search.removeItems      = 1,5,6,10,11,12,20,21
        login.removeItems       = 1,5,6,10,11,12,20,21
        menu.removeItems        = 1,5,6,10,11,12,20,21
        shortcut.removeItems    = 1,5,6,10,11,12,20,21
        list.removeItems        = 1,5,6,10,11,12,20,21
        script.removeItems      = 1,5,6,10,11,12,20,21
        div.removeItems         = 1,5,6,10,11,12,20,21
        html.removeItems        = 1,5,6,10,11,12,20,21

        ## Remove content elements
        #header.disabled       = 1
        #shortcut.disabled     = 1
        #list.disabled         = 1
        #script.disabled       = 1
      }
    }

    header_layout {
      ## Remove content headers
      #removeItems = 0,1,2

      ## Rename content header types
      #altLabels.1    = Header 1
      #altLabels.2    = Header 2
      #altLabels.3    = Header 3
      #altLabels.4    = Header 4
      #altLabels.5    = Header 5
      #altLabels.100  = Hidden
    }
  }

  ## News dataset configuration
  tt_news {
    ## Disable news fields (alphabetical)
    #archivedate.disabled     = 1
    #author.disabled          = 1
    #author_email.disabled    = 1
    #category.disabled        = 1
    #editlock.disabled        = 1
    #fe_group.disabled        = 1
    #imagealttext.disabled    = 1
    #imagetitletext.disabled  = 1
    #keywords.disabled        = 1
    #no_auto_pb.disabled      = 1
  }

}