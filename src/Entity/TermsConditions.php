<?php

namespace Reliv\RcmTermsConditions\Entity;

/**
 * Class TermsConditions
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Entity
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright ${YEAR} Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class TermsConditions extends \Reliv\RcmTermsConditions\Model\TermsConditions
{
    /**
     * @var string
     */
    protected $alias = null;

    /**
     * @var string
     */
    protected $locale = 'en_US';

    /**
     * @var string
     */
    protected $title = "Terms and Conditions";

    /**
     * @var string
     */
    protected $content = "";

    /**
     * @var null
     */
    protected $modified = null;

    /**
     * @var null
     */
    protected $created = null;
}
