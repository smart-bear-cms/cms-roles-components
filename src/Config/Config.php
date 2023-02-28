<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\RolesAndPermission\Components\Config;

class Config
{
    public static function init()
    {
        return DataRepository::getData('config');
    }

    public static function item($item)
    {
        $config = self::init();
        if (isset($config[$item])) {
            return $config[$item];
        }

        return null;
    }
}
