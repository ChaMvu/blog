<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.mPg_grJ' shared service.

return $this->privates['.service_locator.mPg_grJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'builder' => ['privates', '.errored..service_locator.mPg_grJ.Symfony\\Component\\Form\\FormBuilderInterface', NULL, 'Cannot autowire service ".service_locator.mPg_grJ": it references interface "Symfony\\Component\\Form\\FormBuilderInterface" but no such service exists. Did you create a class that implements this interface?'],
]);
