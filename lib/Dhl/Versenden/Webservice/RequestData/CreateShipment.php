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
 * @package   Dhl\Versenden\Webservice\RequestData
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Webservice\RequestData;
use Dhl\Versenden\Webservice\RequestData;

/**
 * ShipmentOrder
 *
 * @category Dhl
 * @package  Dhl\Versenden\Webservice\RequestData
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
final class CreateShipment extends RequestData
{
    /** @var Version */
    private $version;
    /** @var ShipmentOrder[] */
    private $shipmentOrders;

    /**
     * CreateShipment constructor.
     * @param Version $version
     * @param ShipmentOrderCollection $shipmentOrders
     */
    public function __construct(Version $version, ShipmentOrderCollection $shipmentOrders)
    {
        $this->version = $version;
        $this->shipmentOrders = $shipmentOrders;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return ShipmentOrderCollection
     */
    public function getShipmentOrders()
    {
        return $this->shipmentOrders;
    }
}
