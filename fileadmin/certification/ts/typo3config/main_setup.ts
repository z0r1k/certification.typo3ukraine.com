# ==============================================================================
# Configurations
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/typo3config/lang.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/typo3config/config.ts">

# ==============================================================================
# tt_content tweaks
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/tt_content/elements.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/tt_content/tt_content_tweaks.ts">

# ==============================================================================
# Modules
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/modules/automaketemplate.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/modules/tt_news.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/modules/irfaq.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/modules/analytics.ts">

# ==============================================================================
# Layout
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/menu.ts">
#<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/sitemap.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/logo.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/copyright.ts">
#<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/language_selector.ts">

# ==============================================================================
# Localization
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/i18n/irfaq_i18n.ts">

# ==============================================================================
# Page generation goes here
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/subparts.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/layout/page.ts">

# ==============================================================================
# Domain management for config.baseURL
# ==============================================================================
<INCLUDE_TYPOSCRIPT: source="FILE: fileadmin/ts/typo3config/domains.ts">