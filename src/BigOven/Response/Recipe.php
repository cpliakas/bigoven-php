<?php

namespace BigOven\Response;

class Recipe extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/Recipe/RecipeID[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->getElementValue('/Recipe/Title[1]');
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->getElementValue('/Recipe/Description[1]');
    }

    /**
     * @return string
     */
    public function category()
    {
        return $this->getElementValue('/Recipe/Category[1]');
    }

    /**
     * @return string
     */
    public function subCategory()
    {
        return $this->getElementValue('/Recipe/Subcategory[1]');
    }

    /**
     * @return string
     */
    public function primaryIngredient()
    {
        return $this->getElementValue('/Recipe/PrimaryIngredient[1]');
    }

    /**
     * @return int
     */
    public function starRating()
    {
        return $this->getElementValue('/Recipe/StarRating[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function webUrl()
    {
        return $this->getElementValue('/Recipe/WebURL[1]');
    }

    /**
     * @return int
     */
    public function reviewCount()
    {
        return $this->getElementValue('/Recipe/ReviewCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function medalCount()
    {
        return $this->getElementValue('/Recipe/MedalCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function favoriteCount()
    {
        return $this->getElementValue('/Recipe/FavoriteCount[1]', self::INTEGER);
    }

    /**
     * @return \BigOven\Response\Poster
     */
    public function poster()
    {
        return new Poster($this->client, $this->xml, '/Recipe');
    }

    /**
     * @return string
     */
    public function instructions()
    {
        return $this->getElementValue('/Recipe/Instructions[1]');
    }

    /**
     * @return int
     */
    public function yieldNumber()
    {
        return $this->getElementValue('/Recipe/YieldNumber[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function yieldUnit()
    {
        return $this->getElementValue('/Recipe/YieldUnit[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalMinutes()
    {
        return $this->getElementValue('/Recipe/TotalMinutes[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function activeMinutes()
    {
        return $this->getElementValue('/Recipe/ActiveMinutes[1]', self::INTEGER);
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->getElementValue('/Recipe/IsPrivate[1]', self::BOOLEAN);
    }

    /**
     * @return \DateTime
     */
    public function creationDate()
    {
        return $this->getElementValue('/Recipe/CreationDate[1]', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function lastModified()
    {
        return $this->getElementValue('/Recipe/LastModified[1]', self::DATE);
    }

    /**
     * @return boolean
     */
    public function isBookmark()
    {
        return $this->getElementValue('/Recipe/IsBookmark[1]', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function bookmarkUrl()
    {
        return $this->getElementValue('/Recipe/BookmarkURL[1]');
    }

    /**
     * @return string
     */
    public function bookmarkSiteLogo()
    {
        return $this->getElementValue('/Recipe/BookmarkSiteLogo[1]');
    }

    /**
     * @return string
     */
    public function bookmarkImageURL()
    {
        return $this->getElementValue('/Recipe/BookmarkImageURL[1]');
    }

    /**
     * @return string
     */
    public function isRecipeScan()
    {
        return $this->getElementValue('/Recipe/IsRecipeScan[1]');
    }

    /**
     * @return int
     */
    public function menuCount()
    {
        return $this->getElementValue('/Recipe/MenuCount[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function notesCount()
    {
        return $this->getElementValue('/Recipe/NotesCount[1]', self::INTEGER);
    }

    /**
     * @return boolean
     */
    public function isSponsored()
    {
        return $this->getElementValue('/Recipe/IsSponsored[1]', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function variantOfRecipeID()
    {
        return $this->getElementValue('/Recipe/VariantOfRecipeID[1]');
    }

    /** NUTRUTION INFO **/

    /**
     * @return string
     */
    public function singularYieldUnit()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SingularYieldUnit[1]');
    }

    /**
     * @return int
     */
    public function totalCalories()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCalories[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function caloriesFromFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/CaloriesFromFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalFatPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalFatPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function satFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SatFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function satFatPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SatFatPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function monoFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/MonoFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function polyFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/PolyFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function transFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TransFat[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function cholesterol()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Cholesterol[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function cholesterolPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/CholesterolPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sodium()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Sodium[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sodiumPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SodiumPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function potassium()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Potassium[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function potassiumPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/PotassiumPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalCarbs()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCarbs[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalCarbsPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCarbsPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function dietaryFiber()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/DietaryFiber[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function dietaryFiberPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/DietaryFiberPct[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sugar()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Sugar[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function protein()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Protein[1]', self::INTEGER);
    }

    /**
     * @return int
     */
    public function proteinPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/ProteinPct[1]', self::INTEGER);
    }
}
