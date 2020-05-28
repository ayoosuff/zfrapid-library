<?php
/**
 * ZF2rapid library
 *
 * @package    ZFrapidLibrary
 * @link       https://github.com/ZFrapid/zfrapid-library
 * @copyright  Copyright (c) 2014 - 2016 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace ZFrapidLibrary;

/**
 * Class ConfigProvider
 *
 * @package ZFrapidLibrary
 */
class ConfigProvider
{
    /**
     * Retrieve configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}