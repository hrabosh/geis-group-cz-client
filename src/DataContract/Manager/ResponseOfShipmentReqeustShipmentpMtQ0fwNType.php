<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ResponseOfShipmentReqeustShipmentpMtQ0fwNType
 *
 *
 * XSD Type: ResponseOfShipmentReqeustShipmentpMtQ0fwN
 */
class ResponseOfShipmentReqeustShipmentpMtQ0fwNType
{

    /**
     * @property string $errorCode
     */
    private $errorCode = null;

    /**
     * @property string $errorMessage
     */
    private $errorMessage = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentType $responseObject
     */
    private $responseObject = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfShipmentReqeustHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as responseObject
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentType
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * Sets a new responseObject
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentType $responseObject
     * @return self
     */
    public function setResponseObject(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\ShipmentType $responseObject)
    {
        $this->responseObject = $responseObject;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}
