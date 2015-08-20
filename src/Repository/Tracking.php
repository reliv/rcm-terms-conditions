<?php

namespace Reliv\RcmTermsConditions\Repository;

use Reliv\RcmTermsConditions\Model\Track;

/**
 * Interface Tracking
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Repository
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright ${YEAR} Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
interface Tracking
{
    /**
     * getTracking
     *
     * @param $alias
     *
     * @return array of Track Models
     */
    public function getTracking($alias);


}
