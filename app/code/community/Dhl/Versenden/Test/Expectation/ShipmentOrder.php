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

/**
 * Dhl_Versenden_Test_Expectation_ShipmentOrder
 *
 * @category Dhl
 * @package  Dhl_Versenden
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Dhl_Versenden_Test_Expectation_ShipmentOrder
{
    /** @var string */
    protected $shipperAccountUser;
    /** @var string */
    protected $shipperAccountSignature;
    /** @var string */
    protected $shipperAccountEkp;
    /** @var string */
    protected $shipperAccountGoGreen;
    /** @var string */
    protected $shipperAccountParticipationDefault;
    /** @var string */
    protected $shipperAccountParticipationReturn;

    /** @var string */
    protected $shipperBankDataAccountOwner;
    /** @var string */
    protected $shipperBankDataBankName;
    /** @var string */
    protected $shipperBankDataIban;
    /** @var string */
    protected $shipperBankDataBic;
    /** @var string */
    protected $shipperBankDataNote1;
    /** @var string */
    protected $shipperBankDataNote2;
    /** @var string */
    protected $shipperBankDataAccountReference;

    protected $shipperContactName1;
    /** @var string */
    protected $shipperContactName2;
    /** @var string */
    protected $shipperContactName3;
    /** @var string */
    protected $shipperContactStreetName;
    /** @var string */
    protected $shipperContactStreetNumber;
    /** @var string */
    protected $shipperContactAddressAddition;
    /** @var string */
    protected $shipperContactDispatchingInformation;
    /** @var string */
    protected $shipperContactZip;
    /** @var string */
    protected $shipperContactCity;
    /** @var string */
    protected $shipperContactCountry;
    /** @var string */
    protected $shipperContactCountryISOCode;
    /** @var string */
    protected $shipperContactState;
    /** @var string */
    protected $shipperContactPhone;
    /** @var string */
    protected $shipperContactEmail;
    /** @var string */
    protected $shipperContactContactPerson;

    protected $shipperReturnReceiverName1;
    /** @var string */
    protected $shipperReturnReceiverName2;
    /** @var string */
    protected $shipperReturnReceiverName3;
    /** @var string */
    protected $shipperReturnReceiverStreetName;
    /** @var string */
    protected $shipperReturnReceiverStreetNumber;
    /** @var string */
    protected $shipperReturnReceiverAddressAddition;
    /** @var string */
    protected $shipperReturnReceiverDispatchingInformation;
    /** @var string */
    protected $shipperReturnReceiverZip;
    /** @var string */
    protected $shipperReturnReceiverCity;
    /** @var string */
    protected $shipperReturnReceiverCountry;
    /** @var string */
    protected $shipperReturnReceiverCountryISOCode;
    /** @var string */
    protected $shipperReturnReceiverState;
    /** @var string */
    protected $shipperReturnReceiverPhone;
    /** @var string */
    protected $shipperReturnReceiverEmail;
    /** @var string */
    protected $shipperReturnReceiverContactPerson;

    protected $receiverName1;
    /** @var string */
    protected $receiverName2;
    /** @var string */
    protected $receiverName3;
    /** @var string */
    protected $receiverStreetName;
    /** @var string */
    protected $receiverStreetNumber;
    /** @var string */
    protected $receiverAddressAddition;
    /** @var string */
    protected $receiverDispatchingInformation;
    /** @var string */
    protected $receiverZip;
    /** @var string */
    protected $receiverCity;
    /** @var string */
    protected $receiverCountry;
    /** @var string */
    protected $receiverCountryISOCode;
    /** @var string */
    protected $receiverState;
    /** @var string */
    protected $receiverPhone;
    /** @var string */
    protected $receiverEmail;
    /** @var string */
    protected $receiverContactPerson;

    /** @var string */
    protected $packstationZip;
    /** @var string */
    protected $packstationCity;
    /** @var string */
    protected $packstationCountry;
    /** @var string */
    protected $packstationCountryISOCode;
    /** @var string */
    protected $packstationState;
    /** @var string */
    protected $packstationPackstationNumber;
    /** @var string */
    protected $packstationPostNumber;

    /** @var bool */
    protected $globalSettingsPrintOnlyIfCodable;
    /** @var string  */
    protected $globalSettingsUnitOfMeasure;
    /** @var float */
    protected $globalSettingsProductWeight;
    /** @var string[] */
    protected $globalSettingsShippingMethods;
    /** @var string[] */
    protected $globalSettingsCodPaymentMethods;
    /** @var float */
    protected $globalSettingsCodCharge;
    /** @var string */
    protected $globalSettingsLabelType;

    /** @var string */
    protected $shipmentSettingsDate;
    /** @var string */
    protected $shipmentSettingsReference;
    /** @var float */
    protected $shipmentSettingsWeight;
    /** @var string */
    protected $shipmentSettingsProduct;

    protected $serviceSettingsDayOfDelivery;
    /** @var bool|string false or time */
    protected $serviceSettingsDeliveryTimeFrame;
    /** @var bool|string false or location */
    protected $serviceSettingsPreferredLocation;
    /** @var bool|string false or neighbour address */
    protected $serviceSettingsPreferredNeighbour;
    /** @var int yes/no/optional */
    protected $serviceSettingsParcelAnnouncement;
    /** @var bool|string false or A16 or A18 */
    protected $serviceSettingsVisualCheckOfAge;
    /** @var bool false or true */
    protected $serviceSettingsReturnShipment;
    /** @var bool|string false or A or B */
    protected $serviceSettingsInsurance;
    /** @var bool false or true */
    protected $serviceSettingsBulkyGoods;

    /** @var int */
    protected $sequenceNumber;
    /** @var string */
    protected $labelResponseType;

    /**
     * Dhl_Versenden_Test_Expectation_ShipmentOrder constructor.
     * @param string $shipperAccountUser
     * @param string $shipperAccountSignature
     * @param string $shipperAccountEkp
     * @param string $shipperAccountGoGreen
     * @param string $shipperAccountParticipationDefault
     * @param string $shipperAccountParticipationReturn
     * @param string $shipperBankDataAccountOwner
     * @param string $shipperBankDataBankName
     * @param string $shipperBankDataIban
     * @param string $shipperBankDataBic
     * @param string $shipperBankDataNote1
     * @param string $shipperBankDataNote2
     * @param string $shipperBankDataAccountReference
     * @param $shipperContactName1
     * @param string $shipperContactName2
     * @param string $shipperContactName3
     * @param string $shipperContactStreetName
     * @param string $shipperContactStreetNumber
     * @param string $shipperContactAddressAddition
     * @param string $shipperContactDispatchingInformation
     * @param string $shipperContactZip
     * @param string $shipperContactCity
     * @param string $shipperContactCountry
     * @param string $shipperContactCountryISOCode
     * @param string $shipperContactState
     * @param string $shipperContactPhone
     * @param string $shipperContactEmail
     * @param string $shipperContactContactPerson
     * @param $shipperReturnReceiverName1
     * @param string $shipperReturnReceiverName2
     * @param string $shipperReturnReceiverName3
     * @param string $shipperReturnReceiverStreetName
     * @param string $shipperReturnReceiverStreetNumber
     * @param string $shipperReturnReceiverAddressAddition
     * @param string $shipperReturnReceiverDispatchingInformation
     * @param string $shipperReturnReceiverZip
     * @param string $shipperReturnReceiverCity
     * @param string $shipperReturnReceiverCountry
     * @param string $shipperReturnReceiverCountryISOCode
     * @param string $shipperReturnReceiverState
     * @param string $shipperReturnReceiverPhone
     * @param string $shipperReturnReceiverEmail
     * @param string $shipperReturnReceiverContactPerson
     * @param $receiverName1
     * @param string $receiverName2
     * @param string $receiverName3
     * @param string $receiverStreetName
     * @param string $receiverStreetNumber
     * @param string $receiverAddressAddition
     * @param string $receiverDispatchingInformation
     * @param string $receiverZip
     * @param string $receiverCity
     * @param string $receiverCountry
     * @param string $receiverCountryISOCode
     * @param string $receiverState
     * @param string $receiverPhone
     * @param string $receiverEmail
     * @param string $receiverContactPerson
     * @param string $packstationZip
     * @param string $packstationCity
     * @param string $packstationCountry
     * @param string $packstationCountryISOCode
     * @param string $packstationState
     * @param string $packstationPackstationNumber
     * @param string $packstationPostNumber
     * @param bool $globalSettingsPrintOnlyIfCodable
     * @param string $globalSettingsUnitOfMeasure
     * @param float $globalSettingsProductWeight
     * @param string[] $globalSettingsShippingMethods
     * @param string[] $globalSettingsCodPaymentMethods
     * @param float $globalSettingsCodCharge
     * @param string $globalSettingsLabelType
     * @param string $shipmentSettingsDate
     * @param string $shipmentSettingsReference
     * @param float $shipmentSettingsWeight
     * @param string $shipmentSettingsProduct
     * @param $serviceSettingsDayOfDelivery
     * @param bool|string $serviceSettingsDeliveryTimeFrame
     * @param bool|string $serviceSettingsPreferredLocation
     * @param bool|string $serviceSettingsPreferredNeighbour
     * @param int $serviceSettingsParcelAnnouncement
     * @param bool|string $serviceSettingsVisualCheckOfAge
     * @param bool $serviceSettingsReturnShipment
     * @param bool|string $serviceSettingsInsurance
     * @param bool $serviceSettingsBulkyGoods
     * @param int $sequenceNumber
     * @param string $labelResponseType
     */
    public function __construct(
        $shipperAccountUser, $shipperAccountSignature, $shipperAccountEkp,
        $shipperAccountGoGreen, $shipperAccountParticipationDefault,
        $shipperAccountParticipationReturn,

        $shipperBankDataAccountOwner, $shipperBankDataBankName, $shipperBankDataIban,
        $shipperBankDataBic, $shipperBankDataNote1, $shipperBankDataNote2,
        $shipperBankDataAccountReference,

        $shipperContactName1, $shipperContactName2, $shipperContactName3,
        $shipperContactStreetName, $shipperContactStreetNumber, $shipperContactAddressAddition,
        $shipperContactDispatchingInformation, $shipperContactZip,
        $shipperContactCity, $shipperContactCountry, $shipperContactCountryISOCode,
        $shipperContactState, $shipperContactPhone, $shipperContactEmail,
        $shipperContactContactPerson, $shipperReturnReceiverName1,

        $shipperReturnReceiverName2, $shipperReturnReceiverName3,
        $shipperReturnReceiverStreetName, $shipperReturnReceiverStreetNumber,
        $shipperReturnReceiverAddressAddition,
        $shipperReturnReceiverDispatchingInformation, $shipperReturnReceiverZip,
        $shipperReturnReceiverCity, $shipperReturnReceiverCountry,
        $shipperReturnReceiverCountryISOCode, $shipperReturnReceiverState,
        $shipperReturnReceiverPhone, $shipperReturnReceiverEmail,
        $shipperReturnReceiverContactPerson,

        $receiverName1, $receiverName2, $receiverName3, $receiverStreetName,
        $receiverStreetNumber, $receiverAddressAddition,
        $receiverDispatchingInformation, $receiverZip, $receiverCity,
        $receiverCountry, $receiverCountryISOCode, $receiverState,
        $receiverPhone, $receiverEmail, $receiverContactPerson, $packstationZip,
        $packstationCity, $packstationCountry, $packstationCountryISOCode,
        $packstationState, $packstationPackstationNumber, $packstationPostNumber,

        $globalSettingsPrintOnlyIfCodable, $globalSettingsUnitOfMeasure, $globalSettingsProductWeight,
        array $globalSettingsShippingMethods, array $globalSettingsCodPaymentMethods,
        $globalSettingsCodCharge, $globalSettingsLabelType,

        $shipmentSettingsDate, $shipmentSettingsReference, $shipmentSettingsWeight, $shipmentSettingsProduct,

        $serviceSettingsDayOfDelivery, $serviceSettingsDeliveryTimeFrame,
        $serviceSettingsPreferredLocation, $serviceSettingsPreferredNeighbour,
        $serviceSettingsParcelAnnouncement, $serviceSettingsVisualCheckOfAge,
        $serviceSettingsReturnShipment, $serviceSettingsInsurance,
        $serviceSettingsBulkyGoods,

        $sequenceNumber, $labelResponseType
    ) {
        $this->shipperAccountUser = $shipperAccountUser;
        $this->shipperAccountSignature = $shipperAccountSignature;
        $this->shipperAccountEkp = $shipperAccountEkp;
        $this->shipperAccountGoGreen = $shipperAccountGoGreen;
        $this->shipperAccountParticipationDefault = $shipperAccountParticipationDefault;
        $this->shipperAccountParticipationReturn = $shipperAccountParticipationReturn;
        $this->shipperBankDataAccountOwner = $shipperBankDataAccountOwner;
        $this->shipperBankDataBankName = $shipperBankDataBankName;
        $this->shipperBankDataIban = $shipperBankDataIban;
        $this->shipperBankDataBic = $shipperBankDataBic;
        $this->shipperBankDataNote1 = $shipperBankDataNote1;
        $this->shipperBankDataNote2 = $shipperBankDataNote2;
        $this->shipperBankDataAccountReference = $shipperBankDataAccountReference;
        $this->shipperContactName1 = $shipperContactName1;
        $this->shipperContactName2 = $shipperContactName2;
        $this->shipperContactName3 = $shipperContactName3;
        $this->shipperContactStreetName = $shipperContactStreetName;
        $this->shipperContactStreetNumber = $shipperContactStreetNumber;
        $this->shipperContactAddressAddition = $shipperContactAddressAddition;
        $this->shipperContactDispatchingInformation = $shipperContactDispatchingInformation;
        $this->shipperContactZip = $shipperContactZip;
        $this->shipperContactCity = $shipperContactCity;
        $this->shipperContactCountry = $shipperContactCountry;
        $this->shipperContactCountryISOCode = $shipperContactCountryISOCode;
        $this->shipperContactState = $shipperContactState;
        $this->shipperContactPhone = $shipperContactPhone;
        $this->shipperContactEmail = $shipperContactEmail;
        $this->shipperContactContactPerson = $shipperContactContactPerson;
        $this->shipperReturnReceiverName1 = $shipperReturnReceiverName1;
        $this->shipperReturnReceiverName2 = $shipperReturnReceiverName2;
        $this->shipperReturnReceiverName3 = $shipperReturnReceiverName3;
        $this->shipperReturnReceiverStreetName = $shipperReturnReceiverStreetName;
        $this->shipperReturnReceiverStreetNumber = $shipperReturnReceiverStreetNumber;
        $this->shipperReturnReceiverAddressAddition = $shipperReturnReceiverAddressAddition;
        $this->shipperReturnReceiverDispatchingInformation = $shipperReturnReceiverDispatchingInformation;
        $this->shipperReturnReceiverZip = $shipperReturnReceiverZip;
        $this->shipperReturnReceiverCity = $shipperReturnReceiverCity;
        $this->shipperReturnReceiverCountry = $shipperReturnReceiverCountry;
        $this->shipperReturnReceiverCountryISOCode = $shipperReturnReceiverCountryISOCode;
        $this->shipperReturnReceiverState = $shipperReturnReceiverState;
        $this->shipperReturnReceiverPhone = $shipperReturnReceiverPhone;
        $this->shipperReturnReceiverEmail = $shipperReturnReceiverEmail;
        $this->shipperReturnReceiverContactPerson = $shipperReturnReceiverContactPerson;
        $this->receiverName1 = $receiverName1;
        $this->receiverName2 = $receiverName2;
        $this->receiverName3 = $receiverName3;
        $this->receiverStreetName = $receiverStreetName;
        $this->receiverStreetNumber = $receiverStreetNumber;
        $this->receiverAddressAddition = $receiverAddressAddition;
        $this->receiverDispatchingInformation = $receiverDispatchingInformation;
        $this->receiverZip = $receiverZip;
        $this->receiverCity = $receiverCity;
        $this->receiverCountry = $receiverCountry;
        $this->receiverCountryISOCode = $receiverCountryISOCode;
        $this->receiverState = $receiverState;
        $this->receiverPhone = $receiverPhone;
        $this->receiverEmail = $receiverEmail;
        $this->receiverContactPerson = $receiverContactPerson;
        $this->packstationZip = $packstationZip;
        $this->packstationCity = $packstationCity;
        $this->packstationCountry = $packstationCountry;
        $this->packstationCountryISOCode = $packstationCountryISOCode;
        $this->packstationState = $packstationState;
        $this->packstationPackstationNumber = $packstationPackstationNumber;
        $this->packstationPostNumber = $packstationPostNumber;
        $this->globalSettingsPrintOnlyIfCodable = $globalSettingsPrintOnlyIfCodable;
        $this->globalSettingsUnitOfMeasure = $globalSettingsUnitOfMeasure;
        $this->globalSettingsProductWeight = $globalSettingsProductWeight;
        $this->globalSettingsShippingMethods = $globalSettingsShippingMethods;
        $this->globalSettingsCodPaymentMethods = $globalSettingsCodPaymentMethods;
        $this->globalSettingsCodCharge = $globalSettingsCodCharge;
        $this->globalSettingsLabelType = $globalSettingsLabelType;
        $this->shipmentSettingsDate = $shipmentSettingsDate;
        $this->shipmentSettingsReference = $shipmentSettingsReference;
        $this->shipmentSettingsWeight = $shipmentSettingsWeight;
        $this->shipmentSettingsProduct = $shipmentSettingsProduct;
        $this->serviceSettingsDayOfDelivery = $serviceSettingsDayOfDelivery;
        $this->serviceSettingsDeliveryTimeFrame = $serviceSettingsDeliveryTimeFrame;
        $this->serviceSettingsPreferredLocation = $serviceSettingsPreferredLocation;
        $this->serviceSettingsPreferredNeighbour = $serviceSettingsPreferredNeighbour;
        $this->serviceSettingsParcelAnnouncement = $serviceSettingsParcelAnnouncement;
        $this->serviceSettingsVisualCheckOfAge = $serviceSettingsVisualCheckOfAge;
        $this->serviceSettingsReturnShipment = $serviceSettingsReturnShipment;
        $this->serviceSettingsInsurance = $serviceSettingsInsurance;
        $this->serviceSettingsBulkyGoods = $serviceSettingsBulkyGoods;
        $this->sequenceNumber = $sequenceNumber;
        $this->labelResponseType = $labelResponseType;
    }

    /**
     * @return string
     */
    public function getShipperAccountUser()
    {
        return $this->shipperAccountUser;
    }

    /**
     * @return string
     */
    public function getShipperAccountSignature()
    {
        return $this->shipperAccountSignature;
    }

    /**
     * @return string
     */
    public function getShipperAccountEkp()
    {
        return $this->shipperAccountEkp;
    }

    /**
     * @return string
     */
    public function getShipperAccountGoGreen()
    {
        return $this->shipperAccountGoGreen;
    }

    /**
     * @return string
     */
    public function getShipperAccountParticipationDefault()
    {
        return $this->shipperAccountParticipationDefault;
    }

    /**
     * @return string
     */
    public function getShipperAccountParticipationReturn()
    {
        return $this->shipperAccountParticipationReturn;
    }

    /**
     * @return string
     */
    public function getShipperBankDataAccountOwner()
    {
        return $this->shipperBankDataAccountOwner;
    }

    /**
     * @return string
     */
    public function getShipperBankDataBankName()
    {
        return $this->shipperBankDataBankName;
    }

    /**
     * @return string
     */
    public function getShipperBankDataIban()
    {
        return $this->shipperBankDataIban;
    }

    /**
     * @return string
     */
    public function getShipperBankDataBic()
    {
        return $this->shipperBankDataBic;
    }

    /**
     * @return string
     */
    public function getShipperBankDataNote1()
    {
        return $this->shipperBankDataNote1;
    }

    /**
     * @return string
     */
    public function getShipperBankDataNote2()
    {
        return $this->shipperBankDataNote2;
    }

    /**
     * @return string
     */
    public function getShipperBankDataAccountReference()
    {
        return $this->shipperBankDataAccountReference;
    }

    /**
     * @return mixed
     */
    public function getShipperContactName1()
    {
        return $this->shipperContactName1;
    }

    /**
     * @return string
     */
    public function getShipperContactName2()
    {
        return $this->shipperContactName2;
    }

    /**
     * @return string
     */
    public function getShipperContactName3()
    {
        return $this->shipperContactName3;
    }

    /**
     * @return string
     */
    public function getShipperContactStreetName()
    {
        return $this->shipperContactStreetName;
    }

    /**
     * @return string
     */
    public function getShipperContactStreetNumber()
    {
        return $this->shipperContactStreetNumber;
    }

    /**
     * @return string
     */
    public function getShipperContactAddressAddition()
    {
        return $this->shipperContactAddressAddition;
    }

    /**
     * @return string
     */
    public function getShipperContactDispatchingInformation()
    {
        return $this->shipperContactDispatchingInformation;
    }

    /**
     * @return string
     */
    public function getShipperContactZip()
    {
        return $this->shipperContactZip;
    }

    /**
     * @return string
     */
    public function getShipperContactCity()
    {
        return $this->shipperContactCity;
    }

    /**
     * @return string
     */
    public function getShipperContactCountry()
    {
        return $this->shipperContactCountry;
    }

    /**
     * @return string
     */
    public function getShipperContactCountryISOCode()
    {
        return $this->shipperContactCountryISOCode;
    }

    /**
     * @return string
     */
    public function getShipperContactState()
    {
        return $this->shipperContactState;
    }

    /**
     * @return string
     */
    public function getShipperContactPhone()
    {
        return $this->shipperContactPhone;
    }

    /**
     * @return string
     */
    public function getShipperContactEmail()
    {
        return $this->shipperContactEmail;
    }

    /**
     * @return string
     */
    public function getShipperContactContactPerson()
    {
        return $this->shipperContactContactPerson;
    }

    /**
     * @return mixed
     */
    public function getShipperReturnReceiverName1()
    {
        return $this->shipperReturnReceiverName1;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverName2()
    {
        return $this->shipperReturnReceiverName2;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverName3()
    {
        return $this->shipperReturnReceiverName3;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverStreetName()
    {
        return $this->shipperReturnReceiverStreetName;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverStreetNumber()
    {
        return $this->shipperReturnReceiverStreetNumber;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverAddressAddition()
    {
        return $this->shipperReturnReceiverAddressAddition;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverDispatchingInformation()
    {
        return $this->shipperReturnReceiverDispatchingInformation;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverZip()
    {
        return $this->shipperReturnReceiverZip;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverCity()
    {
        return $this->shipperReturnReceiverCity;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverCountry()
    {
        return $this->shipperReturnReceiverCountry;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverCountryISOCode()
    {
        return $this->shipperReturnReceiverCountryISOCode;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverState()
    {
        return $this->shipperReturnReceiverState;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverPhone()
    {
        return $this->shipperReturnReceiverPhone;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverEmail()
    {
        return $this->shipperReturnReceiverEmail;
    }

    /**
     * @return string
     */
    public function getShipperReturnReceiverContactPerson()
    {
        return $this->shipperReturnReceiverContactPerson;
    }

    /**
     * @return mixed
     */
    public function getReceiverName1()
    {
        return $this->receiverName1;
    }

    /**
     * @return string
     */
    public function getReceiverName2()
    {
        return $this->receiverName2;
    }

    /**
     * @return string
     */
    public function getReceiverName3()
    {
        return $this->receiverName3;
    }

    /**
     * @return string
     */
    public function getReceiverStreetName()
    {
        return $this->receiverStreetName;
    }

    /**
     * @return string
     */
    public function getReceiverStreetNumber()
    {
        return $this->receiverStreetNumber;
    }

    /**
     * @return string
     */
    public function getReceiverAddressAddition()
    {
        return $this->receiverAddressAddition;
    }

    /**
     * @return string
     */
    public function getReceiverDispatchingInformation()
    {
        return $this->receiverDispatchingInformation;
    }

    /**
     * @return string
     */
    public function getReceiverZip()
    {
        return $this->receiverZip;
    }

    /**
     * @return string
     */
    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    /**
     * @return string
     */
    public function getReceiverCountry()
    {
        return $this->receiverCountry;
    }

    /**
     * @return string
     */
    public function getReceiverCountryISOCode()
    {
        return $this->receiverCountryISOCode;
    }

    /**
     * @return string
     */
    public function getReceiverState()
    {
        return $this->receiverState;
    }

    /**
     * @return string
     */
    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * @return string
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * @return string
     */
    public function getReceiverContactPerson()
    {
        return $this->receiverContactPerson;
    }

    /**
     * @return string
     */
    public function getPackstationZip()
    {
        return $this->packstationZip;
    }

    /**
     * @return string
     */
    public function getPackstationCity()
    {
        return $this->packstationCity;
    }

    /**
     * @return string
     */
    public function getPackstationCountry()
    {
        return $this->packstationCountry;
    }

    /**
     * @return string
     */
    public function getPackstationCountryISOCode()
    {
        return $this->packstationCountryISOCode;
    }

    /**
     * @return string
     */
    public function getPackstationState()
    {
        return $this->packstationState;
    }

    /**
     * @return string
     */
    public function getPackstationPackstationNumber()
    {
        return $this->packstationPackstationNumber;
    }

    /**
     * @return string
     */
    public function getPackstationPostNumber()
    {
        return $this->packstationPostNumber;
    }

    /**
     * @return boolean
     */
    public function isGlobalSettingsPrintOnlyIfCodable()
    {
        return $this->globalSettingsPrintOnlyIfCodable;
    }

    /**
     * @return string
     */
    public function getGlobalSettingsUnitOfMeasure()
    {
        return $this->globalSettingsUnitOfMeasure;
    }

    /**
     * @return float
     */
    public function getGlobalSettingsProductWeight()
    {
        return $this->globalSettingsProductWeight;
    }

    /**
     * @return string[]
     */
    public function getGlobalSettingsShippingMethods()
    {
        return $this->globalSettingsShippingMethods;
    }

    /**
     * @return string[]
     */
    public function getGlobalSettingsCodPaymentMethods()
    {
        return $this->globalSettingsCodPaymentMethods;
    }

    /**
     * @return float
     */
    public function getGlobalSettingsCodCharge()
    {
        return $this->globalSettingsCodCharge;
    }

    /**
     * @return string
     */
    public function getGlobalSettingsLabelType()
    {
        return $this->globalSettingsLabelType;
    }

    /**
     * @return string
     */
    public function getShipmentSettingsDate()
    {
        return $this->shipmentSettingsDate;
    }

    /**
     * @return string
     */
    public function getShipmentSettingsReference()
    {
        return $this->shipmentSettingsReference;
    }

    /**
     * @return float
     */
    public function getShipmentSettingsWeight()
    {
        return $this->shipmentSettingsWeight;
    }

    /**
     * @return string
     */
    public function getShipmentSettingsProduct()
    {
        return $this->shipmentSettingsProduct;
    }

    /**
     * @return mixed
     */
    public function getServiceSettingsDayOfDelivery()
    {
        return $this->serviceSettingsDayOfDelivery;
    }

    /**
     * @return bool|string
     */
    public function getServiceSettingsDeliveryTimeFrame()
    {
        return $this->serviceSettingsDeliveryTimeFrame;
    }

    /**
     * @return bool|string
     */
    public function getServiceSettingsPreferredLocation()
    {
        return $this->serviceSettingsPreferredLocation;
    }

    /**
     * @return bool|string
     */
    public function getServiceSettingsPreferredNeighbour()
    {
        return $this->serviceSettingsPreferredNeighbour;
    }

    /**
     * @return int
     */
    public function getServiceSettingsParcelAnnouncement()
    {
        return $this->serviceSettingsParcelAnnouncement;
    }

    /**
     * @return bool|string
     */
    public function getServiceSettingsVisualCheckOfAge()
    {
        return $this->serviceSettingsVisualCheckOfAge;
    }

    /**
     * @return boolean
     */
    public function isServiceSettingsReturnShipment()
    {
        return $this->serviceSettingsReturnShipment;
    }

    /**
     * @return bool|string
     */
    public function getServiceSettingsInsurance()
    {
        return $this->serviceSettingsInsurance;
    }

    /**
     * @return boolean
     */
    public function isServiceSettingsBulkyGoods()
    {
        return $this->serviceSettingsBulkyGoods;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @return string
     */
    public function getLabelResponseType()
    {
        return $this->labelResponseType;
    }
}