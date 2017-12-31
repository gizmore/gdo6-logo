<?php
/** @var $bar \GDO\UI\GDT_Bar **/
use GDO\Logo\Module_Logo;
use GDO\UI\GDT_HTML;

$fileId = Module_Logo::instance()->cfgLogoId();
$href = href('Logo', 'Preview', '&file='.$fileId);
$sitename = sitename();

$html = <<<EOC
<a href="/" title="$sitename">
  <img
   src="$href"
   alt="Logo" />
</a>
EOC;

$bar->addField(GDT_HTML::withHTML($html));
