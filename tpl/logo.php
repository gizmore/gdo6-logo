<?php
/** @var $bar \GDO\UI\GDT_Bar **/
use GDO\Logo\Module_Logo;
use GDO\UI\GDT_HTML;

$module = Module_Logo::instance();
$fileId = $module->cfgLogoId();
$href = href('Logo', 'Preview', '&file='.$fileId);
$sitename = sitename();
$width = $module->cfgLogoWidth();
$height = $module->cfgLogoHeight();
$html = <<<EOC
<a href="/" title="$sitename">
  <img
   src="$href"
   alt="Logo"
   width="$width"
   height="$height" />
</a>
EOC;

$bar->addField(GDT_HTML::withHTML($html));
