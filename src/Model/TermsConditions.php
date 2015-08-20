<?php

namespace Reliv\RcmTermsConditions\Model;

use Reliv\RcmApiLib\Model\AbstractApiModel;

/**
 * Class TermsConditions
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
class TermsConditions extends AbstractApiModel
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

    /**
     * getAlias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * setAlias
     *
     * @param string $alias
     *
     * @return void
     */
    public function setAlias($alias)
    {
        $alias = (string) $alias;
        $alias = str_replace(' ', '_', $alias);
        $alias = preg_replace("/[^a-zA-Z0-9]/", "", $alias);
        $this->alias = $alias;
    }

    /**
     * getLocale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * setLocale
     *
     * @param string $locale
     *
     * @return void
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setTitle
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * getContent
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * setContent
     *
     * @param string $content
     *
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * getModified
     *
     * @return null|\DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * setModified
     *
     * @param \DateTime $modified
     *
     * @return void
     */
    public function setModified(\DateTime $modified)
    {
        $this->modified = $modified;
    }

    /**
     * getCreated
     *
     * @return null|\DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * setCreated
     *
     * @param $created
     *
     * @return void
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }
}
