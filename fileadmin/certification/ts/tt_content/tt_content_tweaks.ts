# ==============================================================================
# Remove clear.gif
# ==============================================================================
tt_content.stdWrap.space = 0

# ==============================================================================
# Break header with PIPE "|"
# ==============================================================================
lib.stdheader.10 {
  3 {
    split {
      token = |
      cObjNum =  1 |*| 1 |*| 2

      1 = TEXT
      1.current = 1
      1.wrap = <strong>|</strong>

      2 = TEXT
      2.current = 1
      2.wrap = |
    }
  }

  4.split < lib.stdheader.10.3.split
  5.split < lib.stdheader.10.3.split
}


# ==============================================================================
# Use filename splitted by underscore as alt attribute for images if empty
# ==============================================================================
tt_content.image.20.1.altText {
  ifEmpty.cObject = TEXT
  ifEmpty.cObject {
    field = image
    split {
      token.char = 95
      cObjNum = 1 |*| 1 |*| 2
      1.current = 1
      1.noTrimWrap = || |
      2.cObject = TEXT
      2.cObject.current = 2
      2.cObject.split {
        token.char = 46
        cObjNum = 1 |*| 2
        1.current = 1
      }
    }
  }
}
# ==============================================================================
# Add to header wrapper information about header level
# ==============================================================================
lib.stdheader.stdWrap.dataWrap = <div class="csc-header csc-header-h{field:header_layout} csc-header-n{cObj:parentRecordNumber}">|</div>