<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RequestOfOrderRequestHUsxwOXqType
 *
 *
 * XSD Type: RequestOfOrderRequestHUsxwOXq
 */
class RequestOfOrderRequestHUsxwOXqType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestHeaderType $header
     */
    private $header = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderRequestType $requestObject
     */
    private $requestObject = null;

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestHeaderType
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestHeaderType $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestHeaderType $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as requestObject
     *
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderRequestType
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Sets a new requestObject
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderRequestType $requestObject
     * @return self
     */
    public function setRequestObject(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\OrderRequestType $requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }


}
