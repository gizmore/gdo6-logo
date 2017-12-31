<?php
namespace GDO\Logo\Method;
use GDO\Core\Method;
use GDO\File\Method\GetFile;
use GDO\Logo\Module_Logo;
use GDO\File\FileUtil;

final class Preview extends Method
{
	public function execute()
	{
		if (!($id = Module_Logo::instance()->cfgLogoId()))
		{
			header('Content-Type: image/png');
			echo file_get_contents(Module_Logo::instance()->filePath('img/gdo6-logo.png'));
			die();
		}
		return GetFile::make()->executeWithId($id);
	}

	
}
