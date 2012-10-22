# ==============================================================================
# Config subpart
# ==============================================================================

# Default
temp.templateDefault = TEMPLATE
temp.templateDefault {
  template =< plugin.tx_automaketemplate_pi1
  template.content.file = {$t3ua.template.file}
  workOnSubpart = DOCUMENT_BODY

  subparts {
    # Logo
    blogname < temp.logo

    # Main navi
    topnavdiv = COA
    topnavdiv {
      5 < lib.menu_main
      #10 =
      20 = HTML
      20.value = <div class="clearer"></div>
    }

    # subnavi
    subnavi < lib.menu_subnavi

    # Bottom navi
    fl = COA
    fl {
      10 < lib.menu_bottom
      20 = HTML
      20.value = <div class="clearer"></div>
    }

    # Homepage image (left)
    epic = COA
    epic {
      10 < plugin.tx_kbcontslide_pi1
      10.content.select.where = colPos=1
    }

    # Homepage text (right)
    post = COA
    post {
      10 < plugin.tx_kbcontslide_pi1
      10.content.select.where = colPos=2
    }

    # Twitter
    twitter = TEXT
    twitter.value (
      <script src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
        new TWTR.Widget({
          version: 2,
          type: 'search',
          search: '#t3certua',
          interval: 6000,
          title: '#t3certua',
          subject: '',
          width: 290,
          height: 258,
          theme: {
            shell: {
              background: '#d2d2d2',
              color: '#ffffff'
            },
            tweets: {
              background: '#ffffff',
              color: '#444444',
              links: '#1985b5'
            }
          },
          features: {
            scrollbar: false,
            loop: true,
            live: true,
            hashtags: true,
            timestamp: true,
            avatars: true,
            behavior: 'default'
          }
        }).render().start();
      </script>
    )

    # Partners
    adspotdiv2 = COA
    adspotdiv2 {
      5 = TEXT
      5 {
        value = Наши партнеры
        wrap = <h2>|</h2>
      }

      10 = COA
      10 {
        wrap = <div class="bg"><div class="adspot">|</div></div>

        5 = COA
        5 {
          wrap = <div class="adspot2">|<div class="clearer"></div></div>
          
          5 = TEXT
          5 {
            value = {$t3ua.ad.t3camp.file}
            typolink {
              parameter = {$t3ua.ad.t3camp.link}
              ATagParams = class="ad1"
              ATagBeforeWrap = 1
              wrap = <img src="fileadmin/templates/main/images/|" alt="Advertise here">
            }
          }

          10 = TEXT
          10 {
            value = {$t3ua.ad.udk.file}
            typolink {
              parameter = {$t3ua.ad.udk.link}
              ATagParams = class="ad2"
              ATagBeforeWrap = 1
              wrap = <img src="fileadmin/templates/main/images/|" alt="Advertise here">
            }
          }
        }

        10 = COA
        10 {
          wrap = <div class="adspot3">|<div class="clearer"></div></div>

          5 = TEXT
          5 {
            value = {$t3ua.ad.fallback.file}
            wrap = <a href="#" class="ad3"><img src="fileadmin/templates/main/images/|" alt="Advertise here"></a>
          }

          10 = TEXT
          10 {
            value = {$t3ua.ad.fallback.file}
            wrap = <a href="#" class="ad4"><img src="fileadmin/templates/main/images/|" alt="Advertise here"></a>
          }
        }
      }
    }

    # Copytights
    fr < temp.copyright
  }
}

## Home template
temp.templateHome < temp.templateDefault
temp.templateHome {
  subparts {
    # News
    entries = COA
    entries {
      10 < styles.content.get
    }
  }
}

## Inner template
temp.templateInner < temp.templateDefault
temp.templateInner {
  template.content.file = {$t3ua.template.fileInner}
  subparts {
    main_content < styles.content.get
  }
}