<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing ResponseOfOrderRequestOrderpMtQ0fwNType
 *
 *
 * XSD Type: ResponseOfOrderRequestOrderpMtQ0fwN
 */
class ResponseOfOrderRequestOrderpMtQ0fwNType
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
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfOrderRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderType $responseObject
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfOrderRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfOrderRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestOfOrderRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as responseObject
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderType
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * Sets a new responseObject
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderType $responseObject
     * @return self
     */
    public function setResponseObject(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderType $responseObject)
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

