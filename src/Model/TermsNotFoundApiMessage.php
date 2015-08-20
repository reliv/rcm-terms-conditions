<?php

namespace Reliv\RcmTermsConditions\Model;

use Reliv\RcmApiLib\Model\ApiMessage;

/**
 * Class TermsNotFountApiMessage
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   Reliv\RcmTermsConditions\Model
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class TermsNotFoundApiMessage extends ApiMessage
{
    /**
     * @var string
     */
    protected $type = 'rcmTermsConditions';

    /**
     * @var string|null
     */
    protected $source = 'default';

    /**
     * @var string|null
     */
    protected $code = 'notFound';

    /**
     * @var string
     */
    protected $value = 'Terms and Conditions could not be found';

    /**
     * @param string $source
     * @param null   $primary
     * @param array  $params
     */
    public function __construct(
        $source = 'default',
        $primary = null,
        $params = []
    ) {
        $this->setPrimary($primary);
        $this->setParams($params);
    }
}
