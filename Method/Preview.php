<?php
namespace GDO\Logo\Method;
use GDO\Core\Method;
use GDO\File\Method\GetFile;
use GDO\Logo\Module_Logo;

final class Preview extends Method
{
	public function execute()
	{
		if (!($id = Module_Logo::instance()->cfgLogoId()))
		{
		}
		return GetFile::make()->executeWithId($id);
	}

	
}
