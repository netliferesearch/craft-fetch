<?php
namespace Craft;

class CraftFetchService extends BaseApplicationComponent
{
  function prepValue($value)
  {
    return TemplateHelper::getRaw($value);
  }
  public function fetch($url = null)
  {
    $file = file_get_contents($url);
    return $this->prepValue($file);
  }
}

 ?>
