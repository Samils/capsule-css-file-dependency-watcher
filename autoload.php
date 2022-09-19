<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @namespace Sammy\Packs\CapsuleCssFileDependencyWatcher
 * - Autoload, application dependencies
 */
namespace Sammy\Packs\CapsuleCssFileDependencyWatcher {
  $autoloadFile = __DIR__ . '/vendor/autoload.php';

  if (is_file ($autoloadFile)) {
    include_once $autoloadFile;
  }
}
