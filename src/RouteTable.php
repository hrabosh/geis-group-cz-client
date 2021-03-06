<?php

namespace GoetasWebservices\Client\GeisGroupCz;

/**
 * Class representing RouteTable
 */
class RouteTable
{

    /**
     * @property \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRouteTableRequestHUsxwOXqType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRouteTableRequestHUsxwOXqType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRouteTableRequestHUsxwOXqType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\GeisGroupCz\DataContract\Manager\RequestOfRouteTableRequestHUsxwOXqType $request)
    {
        $this->request = $request;
        return $this;
    }


}

