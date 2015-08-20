<?php

namespace Reliv\RcmTermsConditions\Repository;

use Reliv\RcmTermsConditions\Model\TermsConditions as TermsConditionsModel;

/**
 * Interface TermsConditions
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
interface TermsConditions
{
    public function getTermsConditions($alias);

    public function createTermsConditions(TermsConditionsModel $termsConditions);

    public function updateTermsConditions(TermsConditionsModel $termsConditions);

    public function deleteTermsConditions(TermsConditionsModel $termsConditions);
}
