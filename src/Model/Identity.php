<?php

namespace Reliv\RcmTermsConditions\Model;

use Reliv\RcmApiLib\Model\AbstractApiModel;

/**
 * Class Identity
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
class Identity extends AbstractApiModel
{
    /**
     * @var string
     */
    protected $userId = null;

    /**
     * @var string
     */
    protected $sessionId;

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $clientIp;

    /**
     * getUserId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * setUserId
     *
     * @param string $userId
     *
     * @return void
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * getSessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * setSessionId
     *
     * @param string $sessionId
     *
     * @return void
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * getUserName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * setUserName
     *
     * @param string $userName
     *
     * @return void
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * getClientIp
     *
     * @return string
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    /**
     * setClientIp
     *
     * @param string $clientIp
     *
     * @return void
     */
    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
    }


}
