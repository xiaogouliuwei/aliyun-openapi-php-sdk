<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListUmengPagePermission4Root
 *
 * @method string getOrderCol()
 * @method string getLength()
 * @method string getSearchEmail()
 * @method string getPageIndex()
 * @method string getOrderDir()
 */
class ListUmengPagePermission4RootRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cloudwf',
            '2017-03-28',
            'ListUmengPagePermission4Root',
            'cloudwf'
        );
    }

    /**
     * @param string $orderCol
     *
     * @return $this
     */
    public function setOrderCol($orderCol)
    {
        $this->requestParameters['OrderCol'] = $orderCol;
        $this->queryParameters['OrderCol'] = $orderCol;

        return $this;
    }

    /**
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->requestParameters['Length'] = $length;
        $this->queryParameters['Length'] = $length;

        return $this;
    }

    /**
     * @param string $searchEmail
     *
     * @return $this
     */
    public function setSearchEmail($searchEmail)
    {
        $this->requestParameters['SearchEmail'] = $searchEmail;
        $this->queryParameters['SearchEmail'] = $searchEmail;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $orderDir
     *
     * @return $this
     */
    public function setOrderDir($orderDir)
    {
        $this->requestParameters['OrderDir'] = $orderDir;
        $this->queryParameters['OrderDir'] = $orderDir;

        return $this;
    }
}
