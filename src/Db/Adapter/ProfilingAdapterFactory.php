<?php
/**
 * ZF2rapid library
 *
 * @package    ZFrapidLibrary
 * @link       https://github.com/ZFrapid/zfrapid-library
 * @copyright  Copyright (c) 2014 - 2016 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace ZFrapidLibrary\Db\Adapter;

use BjyProfiler\Db\Adapter\ProfilingAdapter;
use BjyProfiler\Db\Profiler\Profiler;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Profiling adapter controller factory
 *
 * Factory to create the Profiling adapter
 *
 * @package    ZFrapidLibrary
 */
class ProfilingAdapterFactory implements FactoryInterface
{
    /**
     * Create Service Factory
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return ProfilingAdapter
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        $adapter = new ProfilingAdapter($config['db']);
        $adapter->setProfiler(new Profiler());
        $adapter->injectProfilingStatementPrototype(
            ['buffer_results' => true]
        );

        return $adapter;
    }
}
