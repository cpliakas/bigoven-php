<?php

namespace BigOven\Response;

use BigOven\BigOvenClient;

class Poster extends Response
{
    /**
     * @var string
     */
    protected $rootElement;

    /**
     * @param \BigOven\BigOvenClient $client
     * @param \SimpleXMLElement $xml
     * @param string $rootElement
     */
    public function __construct(BigOvenClient $client, \SimpleXMLElement $xml, $rootElement = '')
    {
        $this->client = $client;
        $this->xml = $xml;
        $this->rootElement = $rootElement;
    }

    /**
     * {@inheritdoc}
     *
     * Prefixes XPath query with root element.
     */
    public function getElementValue($path, $dataType = self::STRING)
    {
        $path = $this->rootElement . $path;
        return parent::getElementValue($path, $dataType);
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/Poster/UserID[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function userName()
    {
        return $this->getElementValue('/Poster/UserName[1]');
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('/Poster/ImageURL48[1]');
    }

    /**
     * @return string
     */
    public function imageUrlSmall()
    {
        return $this->getElementValue('/Poster/ImageURL48[1]');
    }

    /**
     * @return bool
     */
    public function isPremium()
    {
        return $this->getElementValue('/Poster/IsPremium[1]', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isKitchenHelper()
    {
        return $this->getElementValue('/Poster/IsKitchenHelper[1]', self::BOOLEAN);
    }

    /**
     * @return \DateTime|null
     */
    public function premiumExpiryDate()
    {
        return $this->getElementValue('/Poster/PremiumExpiryDate[1]', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function memberSince()
    {
        return $this->getElementValue('/Poster/MemberSince[1]', self::DATE);
    }

    /**
     * @return bool
     */
    public function isUsingRecurly()
    {
        return $this->getElementValue('/Poster/IsUsingRecurly[1]', self::BOOLEAN);
    }
}
