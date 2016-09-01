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
 * @package   Dhl_Versenden
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
use \Dhl\Versenden\Webservice\RequestData\ShipmentOrder\PackageCollection;
use \Dhl\Versenden\Webservice\RequestData\ShipmentOrder\Package;
/**
 * Dhl_Versenden_Test_Model_Webservice_Builder_PackageTest
 *
 * @category Dhl
 * @package  Dhl_Versenden
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Dhl_Versenden_Test_Model_Webservice_Builder_PackageTest
    extends EcomDev_PHPUnit_Test_Case
{
    protected $minWeight = 0.5;

    /**
     * @test
     * @expectedException Mage_Core_Exception
     */
    public function constructorArgUnitOfMeasureMissing()
    {
        Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'min_weight' => $this->minWeight,
        ));

    }

    /**
     * @test
     * @expectedException Mage_Core_Exception
     */
    public function constructorArgUnitOfMeasureWrongType()
    {
        Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'unit_of_measure' => new stdClass(),
            'min_weight'      => $this->minWeight,
        ));
    }

    /**
     * @test
     * @expectedException Mage_Core_Exception
     */
    public function constructorArgMinWeightMissing()
    {
        Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'unit_of_measure' => 'G',
        ));
    }

    /**
     * @test
     * @expectedException Mage_Core_Exception
     */
    public function constructorArgMinWeightWrongType()
    {
        Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'unit_of_measure' => 'G',
            'min_weight'      => new stdClass(),
        ));
    }

    /**
     * @test
     */
    public function getPackages()
    {
        $sequenceNumberOne = '303';
        $weightInKGOne = $this->minWeight + 0.05;
        $lengthInCMOne = '30';
        $widthInCMOne = '40';
        $heightInCMOne = '50';

        $sequenceNumberTwo = '808';
        $weightInKGTwo = $this->minWeight - 0.05;

        $packageOne = array(
            'params' => array(
                'weight' => $weightInKGOne,
                'length' => $lengthInCMOne,
                'height' => $heightInCMOne,
                'width'  => $widthInCMOne,
            ),
        );

        $packageTwo = array(
            'params' => array(
                'weight' => $weightInKGTwo,
            ),
        );
        $packageInfo = array(
            $sequenceNumberOne => $packageOne,
            $sequenceNumberTwo => $packageTwo,
        );

        /** @var Dhl_Versenden_Model_Webservice_Builder_Package $builder */
        $builder = Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'unit_of_measure' => 'KG',
            'min_weight'      => $this->minWeight,
        ));

        $packageCollection = $builder->getPackages($packageInfo);
        $this->assertInstanceOf(PackageCollection::class, $packageCollection);
        $this->assertCount(count($packageInfo), $packageCollection);

        $this->assertInstanceOf(Package::class, $packageCollection->getItem($sequenceNumberOne));
        $this->assertEquals($sequenceNumberOne, $packageCollection->getItem($sequenceNumberOne)->getPackageId());
        $this->assertEquals($weightInKGOne, $packageCollection->getItem($sequenceNumberOne)->getWeightInKG());
        $this->assertEquals($lengthInCMOne, $packageCollection->getItem($sequenceNumberOne)->getLengthInCM());
        $this->assertEquals($widthInCMOne, $packageCollection->getItem($sequenceNumberOne)->getWidthInCM());
        $this->assertEquals($heightInCMOne, $packageCollection->getItem($sequenceNumberOne)->getHeightInCM());

        $this->assertInstanceOf(Package::class, $packageCollection->getItem($sequenceNumberTwo));
        $this->assertEquals($sequenceNumberTwo, $packageCollection->getItem($sequenceNumberTwo)->getPackageId());
        $this->assertEquals($this->minWeight, $packageCollection->getItem($sequenceNumberTwo)->getWeightInKG());
        $this->assertNull($packageCollection->getItem($sequenceNumberTwo)->getLengthInCM());
        $this->assertNull($packageCollection->getItem($sequenceNumberTwo)->getWidthInCM());
        $this->assertNull($packageCollection->getItem($sequenceNumberTwo)->getHeightInCM());
    }

    /**
     * @test
     */
    public function getPackagesGram()
    {
        $sequenceNumber = '808';
        $weightInKG = 450;
        $minWeight = $this->minWeight * 1000;

        $package = array(
            'params' => array(
                'weight' => $weightInKG,
            ),
        );
        $packageInfo = array(
            $sequenceNumber => $package,
        );

        /** @var Dhl_Versenden_Model_Webservice_Builder_Package $builder */
        $builder = Mage::getModel('dhl_versenden/webservice_builder_package', array(
            'unit_of_measure' => 'G',
            'min_weight'      => $this->minWeight,
        ));

        $packageCollection = $builder->getPackages($packageInfo);
        $this->assertInstanceOf(PackageCollection::class, $packageCollection);
        $this->assertCount(count($packageInfo), $packageCollection);

        $this->assertInstanceOf(Package::class, $packageCollection->getItem($sequenceNumber));
        $this->assertEquals($sequenceNumber, $packageCollection->getItem($sequenceNumber)->getPackageId());
        $this->assertEquals($minWeight, $packageCollection->getItem($sequenceNumber)->getWeightInKG());
        $this->assertNull($packageCollection->getItem($sequenceNumber)->getLengthInCM());
        $this->assertNull($packageCollection->getItem($sequenceNumber)->getWidthInCM());
        $this->assertNull($packageCollection->getItem($sequenceNumber)->getHeightInCM());
    }
}