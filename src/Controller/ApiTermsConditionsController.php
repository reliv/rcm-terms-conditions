<?php

namespace Reliv\RcmTermsConditions\Controller;

use Reliv\RcmApiLib\Controller\AbstractRestfulJsonController;
use Reliv\RcmApiLib\Model\ApiMessage;
use Reliv\RcmApiLib\Model\HttpStatusCodeApiMessage;
use Reliv\RcmTermsConditions\Model\TermsNotFoundApiMessage;

/**
 * Class TermsConditionsController
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   moduleNameHere
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class ApiTermsConditionsController extends AbstractRestfulJsonController
{
    /**
     * getRepository
     *
     * @return \Reliv\RcmTermsConditions\Repository\TermsConditions
     */
    protected function getRepository()
    {
        return $this->getServiceLocator()->get(
            \Reliv\RcmTermsConditions\Repository\TermsConditions::class
        );
    }

    /**
     * getSite
     *
     * @return \Rcm\Entity\Site
     */
    protected function getSite()
    {
        return $this->getServiceLocator()->get(
            \Rcm\Service\CurrentSite::class
        );
    }

    /**
     * getConfig
     *
     * @return array
     */
    protected function getConfig()
    {
        $config =  $this->getServiceLocator()->get(
            'config'
        );

        return $config['Reliv\RcmTermsConditions'];
    }

    /**
     * getDefaultLocal
     *
     * @return string
     */
    protected function getDefaultLocal()
    {
        $config = $this->getConfig();
        return $config['defaultLocale'];
    }

    /**
     * get
     *
     * @param mixed $alias
     *
     * @return \Reliv\RcmApiLib\Http\ApiResponse
     */
    public function get($alias)
    {
        // @todo Make input filter
        $alias = (string)$alias;
        $alias = str_replace(' ', '_', $alias);
        $alias = preg_replace("/[^a-zA-Z0-9_-]/", "", $alias);

        // @todo allow this to also come form url query string
        $locale = $this->getSite()->getLocale();

        $result = $this->getRepository()->getTermsConditions($alias, $locale);

        // Try default locale if not found
        if (empty($result)) {
            $defaultLocale = $this->getDefaultLocal();
            $result = $this->getRepository()->getTermsConditions($alias, $defaultLocale);
        }

        if (empty($result)) {
            $this->addApiMessage(new TermsNotFoundApiMessage('apiTermsConditions'));
            return $this->getApiResponse(null, 400);
        }

        return $this->getApiResponse($result);
    }
}
