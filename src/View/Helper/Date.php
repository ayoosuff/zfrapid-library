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

use DateTime;
use IntlDateFormatter;
use Zend\View\Helper\AbstractHelper;

/**
 * Date output
 * 
 * Simplifies the date output for the dateFormat view helper
 * 
 * @package    ZFrapidLibrary
 */
class Date extends AbstractHelper
{
    /**
     * get string date and output it
     * 
     * @param string $dateString
     * @param string $mode
     * @return boolean
     */
    public function __invoke($dateString, $mode = 'medium')
    {
        if ($dateString == '0000-00-00 00:00:00') {
            return '-';
        }
        
        switch ($mode) {
            case 'long':
                $dateType = IntlDateFormatter::LONG;
                $timeType = IntlDateFormatter::LONG;
                break;

            case 'short':
                $dateType = IntlDateFormatter::SHORT;
                $timeType = IntlDateFormatter::SHORT;
                break;

            case 'dateonly':
                $dateType = IntlDateFormatter::MEDIUM;
                $timeType = IntlDateFormatter::NONE;
                break;

            default:
            case 'medium':
                $dateType = IntlDateFormatter::MEDIUM;
                $timeType = IntlDateFormatter::MEDIUM;
                break;
        }
        
        $dateTime = new DateTime($dateString);
        
        return $this->getView()->dateFormat($dateTime, $dateType, $timeType);
    }
}
