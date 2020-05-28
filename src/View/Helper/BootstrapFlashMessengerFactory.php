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

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * BootstrapFlashMessenger view helper factory
 *
 * Generates the BootstrapFlashMessenger view helper object
 *
 * @package    ZFrapidLibrary
 */
class BootstrapFlashMessengerFactory implements FactoryInterface
{
    /**
     * Create Service Factory
     *
     * @param ServiceLocatorInterface $viewHelperManager
     *
     * @return BootstrapFlashMessenger
     */
    public function createService(ServiceLocatorInterface $viewHelperManager)
    {
        $serviceManager          = $viewHelperManager->getServiceLocator();
        $controllerPluginManager = $serviceManager->get(
            'ControllerPluginManager'
        );

        $plugin = $controllerPluginManager->get('flashMessenger');

        $helper = new BootstrapFlashMessenger($plugin);

        return $helper;
    }
}
