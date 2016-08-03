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
 * @package   Dhl\Versenden\Webservice\Soap
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Webservice\Adapter\Soap;
use Dhl\Bcs\Api as VersendenApi;
use Dhl\Versenden\Webservice\RequestData;

/**
 * ReceiverAddressType
 *
 * @category Dhl
 * @package  Dhl\Versenden\Webservice\Soap
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class ReceiverAddressType implements RequestType
{
    /**
     * @param RequestData\ShipmentOrder\Receiver $requestData
     * @return VersendenApi\ReceiverNativeAddressType
     */
    public static function prepare(RequestData $requestData)
    {
        $countryType = new VersendenApi\CountryType();
        $countryType->setCountry($requestData->getCountry());
        $countryType->setCountryISOCode($requestData->getCountryISOCode());
        $countryType->setState($requestData->getState());

        $requestType = new VersendenApi\ReceiverNativeAddressType(
            $requestData->getName2(),
            $requestData->getName3(),
            $requestData->getStreetName(),
            $requestData->getStreetNumber(),
            $requestData->getZip(),
            $requestData->getCity(),
            $countryType
        );

        return $requestType;
    }
}