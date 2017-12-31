<?php
namespace GDO\Logo;
use GDO\Core\GDO_Module;
use GDO\File\GDT_ImageFile;
use GDO\UI\GDT_Bar;

final class Module_Logo extends GDO_Module
{
	public $module_priority = 2;
	
	public function getConfig()
	{
		return array(
			GDT_ImageFile::make('website_logo')->previewHREF(href('Logo', 'Preview', '&file=')),
		);
	}
	public function cfgLogoId() { return $this->getConfigVar('website_logo'); }
	
	public function hookTopBar(GDT_Bar $bar)
	{
		$this->templatePHP('logo.php', ['bar' => $bar]);
	}
}
