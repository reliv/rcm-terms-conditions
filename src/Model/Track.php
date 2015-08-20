<?php

namespace Reliv\RcmTermsConditions\Model;

use Reliv\RcmApiLib\Model\AbstractApiModel;

/**
 * Class Track
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Model
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright ${YEAR} Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class Track extends AbstractApiModel
{
    /**
     * @var Identity
     */
    protected $identity = null;

    /**
     * @var string
     */
    protected $termsConditionsAlias = null;

    /**
     * @var null|\DateTime
     */
    protected $viewed = null;

    /**
     * @var null|\DateTime
     */
    protected $accepted = null;

    /**
     * @return Identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param Identity $identity
     */
    public function setIdentity(Identity $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return string
     */
    public function getTermsConditionsAlias()
    {
        return $this->termsConditionsAlias;
    }

    /**
     * @param string $termsConditionsAlias
     */
    public function setTermsConditionsAlias($termsConditionsAlias)
    {
        $this->termsConditionsAlias = $termsConditionsAlias;
    }

    /**
     * @return mixed
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * @param mixed $viewed
     */
    public function setViewed(\DateTime $viewed)
    {
        $this->viewed = $viewed;
    }

    /**
     * getAccepted
     *
     * @return null|\DateTime
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * setAccepted
     *
     * @param \DateTime $accepted
     *
     * @return void
     */
    public function setAccepted(\DateTime $accepted)
    {
        $this->accepted = $accepted;
    }
}
