<?php

namespace Reliv\RcmTermsConditions\Factory;

use Interop\Container\ContainerInterface;
use Reliv\RcmTermsConditions\Repository\DoctrineTermsConditions;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class RepositoryTermsConditions
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class RepositoryDoctrineTermsConditions
{
    /**
     * __invoke
     *
     * @param $container ContainerInterface|ServiceLocatorInterface
     *
     * @return DoctrineTermsConditions
     */
    public function __invoke($container)
    {
        /** @var \Doctrine\ORM\EntityManagerInterface $entityManager */
        $entityManager = $container->get('Doctrine\ORM\EntityManager');

        return $entityManager->getRepository(\Reliv\RcmTermsConditions\Entity\DoctrineTermsConditions::class);
    }
}
