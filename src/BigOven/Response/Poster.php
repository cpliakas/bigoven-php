<?php

namespace BigOven\Response;

class Poster extends NestedResponse
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('UserID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function userName()
    {
        return $this->getElementValue('UserName');
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('ImageURL48');
    }

    /**
     * @return string
     */
    public function imageUrlSmall()
    {
        return $this->getElementValue('ImageURL48');
    }

    /**
     * @return bool
     */
    public function isPremium()
    {
        return $this->getElementValue('IsPremium', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isKitchenHelper()
    {
        return $this->getElementValue('IsKitchenHelper', self::BOOLEAN);
    }

    /**
     * @return \DateTime|null
     */
    public function premiumExpiryDate()
    {
        return $this->getElementValue('PremiumExpiryDate', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function memberSince()
    {
        return $this->getElementValue('MemberSince', self::DATE);
    }

    /**
     * @return bool
     */
    public function isUsingRecurly()
    {
        return $this->getElementValue('IsUsingRecurly', self::BOOLEAN);
    }
}
