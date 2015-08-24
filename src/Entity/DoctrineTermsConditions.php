<?php

namespace Reliv\RcmTermsConditions\Entity;

use Doctrine\ORM\Mapping as ORM;
use Reliv\RcmTermsConditions\Model\TermsConditions;

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
 *
 * @ORM\Entity (repositoryClass="Reliv\RcmTermsConditions\Repository\DoctrineTermsConditions")
 * @ORM\Table(name="rcm_terms_conditions_terms_conditions")
 */
class DoctrineTermsConditions extends TermsConditions
{
    /**
     * @var int Auto-Incremented Primary Key
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    protected $alias = null;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    protected $locale = 'en_US';

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false, options={"default":"Terms and Conditions"})
     */
    protected $title = "Terms and Conditions";

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    protected $content = "";

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true, options={"default":null})
     */
    protected $modified = null;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true, options={"default":null})
     */
    protected $created = null;

    /**
     * __construct
     */
    public function __construct()
    {
        if (empty($this->created)) {
            $this->setCreated(new \DateTime());
        }

        if (empty($this->modified)) {
            $this->setModified(new \DateTime());
        }
    }
}
