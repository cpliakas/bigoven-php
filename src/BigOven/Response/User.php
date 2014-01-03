<?php

namespace BigOven\Response;

class User extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/User/UserID[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('/User/ImageURL[1]');
    }

    /**
     * @return string
     */
    public function imageUrlSmall()
    {
        return $this->getElementValue('/User/ImageURL48[1]');
    }

    /**
     * @return string
     */
    public function imageUrlMedium()
    {
        return $this->getElementValue('/User/ImageURL64[1]');
    }

    /**
     * @return string
     */
    public function imageUrlLarge()
    {
        return $this->getElementValue('/User/ImageURL128[1]');
    }

    /**
     * @return bool
     */
    public function isPremium()
    {
        return $this->getElementValue('/User/IsPremium[1]', self::BOOLEAN);
    }

    /**
     * @return int
     */
    public function creditBalance()
    {
        return $this->getElementValue('/User/CreditBalance[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function fullName()
    {
        return $this->getElementValue('/User/FullName[1]');
    }

    /**
     * @return \DateTime
     */
    public function memberSince()
    {
        return $this->getElementValue('/User/MemberSince[1]', self::DATE);
    }

    /**
     * @return string
     */
    public function aboutMe()
    {
        return $this->getElementValue('/User/AboutMe[1]');
    }

    /**
     * @return int
     */
    public function trySoonCount()
    {
        return $this->getElementValue('/User/TrySoonCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function favoritesCount()
    {
        return $this->getElementValue('/User/FavoritesCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function addedCount()
    {
        return $this->getElementValue('/User/AddedCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function menusCount()
    {
        return $this->getElementValue('/User/MenusCount[1]', self::INTEGER);
    }

    /**
     * @return \DateTime|null
     */
    public function premiumExpiryDate()
    {
        return $this->getElementValue('/User/PremiumExpiryDate[1]', self::DATE);
    }

    /**
     * @return bool
     */
    public function isGroceryListFree()
    {
        return $this->getElementValue('/User/IsGroceryListFree[1]', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isMenuPlanFree()
    {
        return $this->getElementValue('/User/IsMenuPlanFree[1]', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function groceryListSponsor()
    {
        return $this->getElementValue('/User/GroceryListSponsor[1]', self::STRING);
    }

    /**
     * @return string
     */
    public function menuPlanSponsor()
    {
        return $this->getElementValue('/User/MenuPlanSponsor[1]', self::STRING);
    }

    /**
     * @return bool
     */
    public function adFreeEnabled()
    {
        return $this->getElementValue('/User/AdFreeEnabled[1]', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function powerFeaturesEnabled()
    {
        return $this->getElementValue('/User/PowerFeaturesEnabled[1]', self::BOOLEAN);
    }

    /**
     * @return bool
     */
    public function isCurator()
    {
        return $this->getElementValue('/User/IsCurator[1]', self::BOOLEAN);
    }
}
