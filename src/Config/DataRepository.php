<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\RolesAndPermission\Components\Config;

class DataRepository
{
    public static function getData($configName)
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . trim($configName) . '.php';
        if (is_file($path) && file_exists($path)) {
            return require $path;
        }

        return array();
    }
}
