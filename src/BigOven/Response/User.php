<?php

namespace BigOven\Response;

class User extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/User/UserID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('/User/ImageURL');
    }

    /**
     * @return string
     */
    public function imageUrlSmall()
    {
        return $this->getElementValue('/User/ImageURL48');
    }

    /**
     * @return string
     */
    public function imageUrlMedium()
    {
        return $this->getElementValue('/User/ImageURL64');
    }

    /**
     * @return string
     */
    public function imageUrlLarge()
    {
        return $this->getElementValue('/User/ImageURL128');
    }

    /**
     * @return bool
     */
    public function isPremium()
    {
        return $this->getElementValue('/User/IsPremium', self::BOOLEAN);
    }

    /**
     * @return int
     */
    public function creditBalance()
    {
        return $this->getElementValue('/User/CreditBalance', self::INTEGER);
    }

    /**
     * @return string
     */
    public function fullName()
    {
        return $this->getElementValue('/User/FullName');
    }

    /**
     * @return \DateTime
     */
    public function memberSince()
    {
        return $this->getElementValue('/User/MemberSince', self::DATE);
    }

    /**
     * @return string
     */
    public function aboutMe()
    {
        return $this->getElementValue('/User/AboutMe');
    }

    /**
     * @return int
     */
    public function trySoonCount()
    {
        return $this->getElementValue('/User/TrySoonCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function favoritesCount()
    {
        return $this->getElementValue('/User/FavoritesCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function addedCount()
    {
        return $this->getElementValue('/User/AddedCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function menusCount()
    {
        return $this->getElementValue('/User/MenusCount', self::INTEGER);
    }

    /**
     * @return \DateTime|null
     */
    public function premiumExpiryDate()
    {
        return $this->getElementValue('/User/PremiumExpiryDate', self::DATE);
    }

    /**
     * @return bool
     */
    public function isGroceryListFree()
    {
        return $this->getElementValue('/User/IsGroceryListFree', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isMenuPlanFree()
    {
        return $this->getElementValue('/User/IsMenuPlanFree', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function groceryListSponsor()
    {
        return $this->getElementValue('/User/GroceryListSponsor', self::STRING);
    }

    /**
     * @return string
     */
    public function menuPlanSponsor()
    {
        return $this->getElementValue('/User/MenuPlanSponsor', self::STRING);
    }

    /**
     * @return bool
     */
    public function adFreeEnabled()
    {
        return $this->getElementValue('/User/AdFreeEnabled', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function powerFeaturesEnabled()
    {
        return $this->getElementValue('/User/PowerFeaturesEnabled', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isCurator()
    {
        return $this->getElementValue('/User/IsCurator', self::BOOLEAN);
    }
}
