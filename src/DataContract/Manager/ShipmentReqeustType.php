<?php

namespace GoetasWebservices\Client\GeisGroupCz\DataContract\Manager;

/**
 * Class representing ShipmentReqeustType
 *
 *
 * XSD Type: ShipmentReqeust
 */
class ShipmentReqeustType extends RequestObjectBaseType
{

    /**
     * @property int $distributionChannel
     */
    private $distributionChannel = null;

    /**
     * @property string $shipmentNumber
     */
    private $shipmentNumber = null;

    /**
     * Gets as distributionChannel
     *
     * @return int
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * Sets a new distributionChannel
     *
     * @param int $distributionChannel
     * @return self
     */
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        return $this;
    }

    /**
     * Gets as shipmentNumber
     *
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * Sets a new shipmentNumber
     *
     * @param string $shipmentNumber
     * @return self
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }


}

