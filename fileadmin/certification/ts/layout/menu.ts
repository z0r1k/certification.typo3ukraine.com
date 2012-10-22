# ==============================================================================
# Navigation
# ==============================================================================
lib.menu_main = HMENU
lib.menu_main {
  entryLevel = 0
  wrap = <ul>|</ul>

  1 = TMENU
  1 {
    noBlur = 1
    
    NO {
      allWrap = <li>|</li>
    }

    ACT  < .NO
    ACT = 1
    ACT {
      allWrap = <li class="active">|</li>
    }
  }
}

lib.menu_subnavi = HMENU
lib.menu_subnavi {
  entryLevel = 1
  includeNotInMenu = 0

  1 = TMENU
  1 {
    wrap = <div class="widget"><h2>Дополнительно</h2><div class="bg"><div class="w"><ul>|</ul></div></div></div>

    NO = 1
    NO {
      allWrap = <li>|</li>
    }

    ACT  < .NO
    ACT = 1
    ACT {
      allWrap = <li class="active">|</li>
    }
  }  
}

# bottom navigation
lib.menu_bottom = HMENU
lib.menu_bottom {
  entryLevel = 0

  1 = TMENU
  1 {
    wrap = <ul>|</ul>  
    noBlur = 1
    
    NO {
      allWrap = <li class="first"> |*| <li>|</li>
    }

    ACT  < .NO
    ACT = 1
    ACT {
      ATagParams = class="active"
    }
  }
}