<?php
/**
 * ZF2rapid library
 *
 * @package    ZFrapidLibrary
 * @link       https://github.com/ZFrapid/zfrapid-library
 * @copyright  Copyright (c) 2014 - 2016 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace ZFrapidLibrary\View\Helper;

use Zend\View\Helper\HeadTitle;

/**
 * Helper for setting and retrieving h1 element titles
 *
 * @package    ZFrapidLibrary
 */
class H1 extends HeadTitle
{
    /**
     * Registry key for placeholder
     *
     * @var string
     */
    protected $regKey = 'ZFrapidLibrary_View_Helper_H1';

    /**
     * Flag whether to automatically escape output, must also be
     * enforced in the child class if __toString/toString is overridden
     *
     * @var bool
     */
    protected $autoEscape = false;

    /**
     * What string to use between individual items in the placeholder when rendering
     *
     * @var string
     */
    protected $separator = ' &raquo; ';

    /**
     * Turn helper into string
     *
     * @param  string|null $indent
     *
     * @return string
     */
    public function toString($indent = null)
    {
        $output = parent::toString($indent);
        $output = str_replace(
            ['<title>', '</title>'], ['<h1>', '</h1>'], $output
        );

        return $output;
    }
}
