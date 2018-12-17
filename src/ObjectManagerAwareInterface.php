<?php
/**
 *
 */

declare(strict_types=1);

namespace Zend\Expressive\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Interface ObjectManagerAwareInterface
 *
 * @package Zend\Expressive\Doctrine
 */
interface ObjectManagerAwareInterface
{
    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager);

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager();
}