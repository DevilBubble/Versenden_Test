<?php
/**
 * Dhl Versenden
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 5
 *
 * @category  Dhl
 * @package   Dhl\Versenden\Bcs\Api\Webservice\RequestData
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Bcs\Api\Webservice\RequestData\ShipmentOrder\Receiver;
/**
 * Packstation
 *
 * @category Dhl
 * @package  Dhl\Versenden\Bcs\Api\Webservice\RequestData
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Packstation extends PostalFacility
{
    /** @var string */
    private $packstationNumber;
    /** @var string */
    private $postNumber;

    /**
     * Packstation constructor.
     * @param string $zip
     * @param string $city
     * @param string $country
     * @param string $countryISOCode
     * @param string $state
     * @param string $packstationNumber
     * @param string $postNumber
     */
    public function __construct($zip, $city, $country, $countryISOCode, $state,
                                $packstationNumber, $postNumber)
    {
        $this->packstationNumber = $packstationNumber;
        $this->postNumber = $postNumber;

        parent::__construct($zip, $city, $country, $countryISOCode, $state);
    }

    /**
     * @return string
     */
    public function getPackstationNumber()
    {
        return $this->packstationNumber;
    }

    /**
     * @return string
     */
    public function getPostNumber()
    {
        return $this->postNumber;
    }
}
