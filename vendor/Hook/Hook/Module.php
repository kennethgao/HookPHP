<?php
namespace Hook\Hook;

use Hook\Cache\Cache;

class Module extends Cache
{
    public $module;

    public function __construct($module)
    {
        require APP_PATH.'/hooks/'.$module.'/'.$module.'.php';
        $this->module = new $module;
    }
}