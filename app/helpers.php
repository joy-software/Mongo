<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 22/12/2016
 * Time: 02:16
 */

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}