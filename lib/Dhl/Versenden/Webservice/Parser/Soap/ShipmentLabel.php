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
namespace Dhl\Versenden\Webservice\Parser\Soap;
use \Dhl\Bcs\Api as VersendenApi;
use \Dhl\Versenden\Webservice\Parser;
use \Dhl\Versenden\Webservice\ResponseData;

/**
 * ShipmentLabel
 *
 * @category Dhl
 * @package  Dhl\Versenden\Webservice\Soap
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
abstract class ShipmentLabel extends Shipment implements Parser
{
    /**
     * @param VersendenApi\LabelData $labelData
     * @return ResponseData\Label
     */
    protected function parseLabel(VersendenApi\LabelData $labelData)
    {
        $labelStatus = new ResponseData\Status(
            $labelData->getStatus()->getStatusCode(),
            $labelData->getStatus()->getStatusText(),
            $labelData->getStatus()->getStatusMessage()
        );

        $label = new ResponseData\Label(
            $labelStatus,
            $labelData->getShipmentNumber(),
            $labelData->getLabelData(),
            $labelData->getReturnLabelData(),
            $labelData->getExportLabelData(),
            $labelData->getCodLabelData()
        );

        return $label;
    }

    /**
     * @param VersendenApi\LabelData[] $labelData
     * @return ResponseData\LabelCollection
     */
    protected function parseLabels(array $labelData)
    {
        $labelCollection = new ResponseData\LabelCollection();
        foreach ($labelData as $label) {
            $labelCollection->addItem($this->parseLabel($label));
        }
        return $labelCollection;
    }
}
