<?php 
namespace Concrete\Package\ThemeKisoFoundation;

use Package;
use PageTheme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

	protected $pkgHandle = 'theme_kiso_foundation';
	protected $appVersionRequired = '5.7.3';
	protected $pkgVersion = '0.9.0';
	protected $pkgAllowsFullContentSwap = true;

	public function getPackageDescription()
	{
    	return t("Basic starter theme using Foundation 6.");
	}

	public function getPackageName()
	{
    	return t("Kiso for Foundation");
	}

	public function install()
	{
    	$pkg = parent::install();
		PageTheme::add('kiso_foundation', $pkg);
	}

}
?>