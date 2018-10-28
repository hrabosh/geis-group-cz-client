<?php

namespace GoetasWebservices\Client\GeisGrouCz\DataContract\Manager;

/**
 * Class representing RequestOfRouteTableRequestHUsxwOXqType
 *
 *
 * XSD Type: RequestOfRouteTableRequestHUsxwOXq
 */
class RequestOfRouteTableRequestHUsxwOXqType
{

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RequestHeaderType $header
     */
    private $header = null;

    /**
     * @property \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableRequestType $requestObject
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
     * @return \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableRequestType
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Sets a new requestObject
     *
     * @param \GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableRequestType $requestObject
     * @return self
     */
    public function setRequestObject(\GoetasWebservices\Client\GeisGrouCz\DataContract\Manager\RouteTableRequestType $requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }


}

