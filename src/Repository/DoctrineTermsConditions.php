<?php

namespace Reliv\RcmTermsConditions\Repository;

use Doctrine\ORM\EntityRepository;
use Reliv\RcmTermsConditions\Model\TermsConditions;
use Reliv\RcmTermsConditions\Repository\TermsConditions as TermsConditionsRepository;

/**
 * Class DoctrineTermsConditions
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Repository
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class DoctrineTermsConditions extends EntityRepository implements TermsConditionsRepository
{
    /**
     * getTermsConditions
     *
     * @param $alias
     *
     * @return TermsConditions
     */
    public function getTermsConditions($alias, $locale = 'en_us')
    {
        return $this->findOneBy(['alias' => $alias, 'locale' => $locale]);
    }

    /**
     * getTermsConditionsList
     *
     * @param array $search
     *
     * @return void
     * @throws \Exception
     */
    public function getTermsConditionsList($search = [])
    {
        throw new \Exception('Feature do yet available');
    }

    /**
     * createTermsConditions
     *
     * @param TermsConditions $termsConditions
     *
     * @return void
     * @throws \Exception
     */
    public function createTermsConditions(TermsConditions $termsConditions)
    {
        throw new \Exception('Feature do yet available');
    }

    /**
     * updateTermsConditions
     *
     * @param TermsConditions $termsConditions
     *
     * @return void
     * @throws \Exception
     */
    public function updateTermsConditions(TermsConditions $termsConditions)
    {
        throw new \Exception('Feature do yet available');
    }

    /**
     * deleteTermsConditions
     *
     * @param TermsConditions $termsConditions
     *
     * @return void
     * @throws \Exception
     */
    public function deleteTermsConditions(TermsConditions $termsConditions)
    {
        throw new \Exception('Feature do yet available');
    }
}
