<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\CapsuleCssFileDependencyWatcher
 * - Autoload, application dependencies
 */
namespace Sammy\Packs\CapsuleCssFileDependencyWatcher {
  use Sammy\Packs\CapsuleCssFileDependencyWatcher;

  requires ('./autoload');


  $module->exports = new CapsuleCssFileDependencyWatcher;
}
