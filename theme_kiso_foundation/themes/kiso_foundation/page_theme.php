<?php
namespace Concrete\Package\ThemeKisoFoundation\Theme\KisoFoundation;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
  public function registerAssets()
  {
    $this->providesAsset('javascript', 'jquery');
    $this->providesAsset('javascript', 'foundation-js');
    $this->providesAsset('motion-ui');
  }

  protected $pThemeGridFrameworkHandle = 'foundation';

  public function getThemeName()
  {
    return 'Kiso for Foundation';
  }

  public function getThemeDescription()
  {
    return 'The starter theme of Foundation 6, CSS framework';
  }

}
