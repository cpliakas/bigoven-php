<?php

namespace BigOven\Response;

class Recipe extends Response implements \IteratorAggregate
{
    /**
     * @return \BigOven\Response\NestedResponseIterator
     */
    public function getIterator()
    {
        return $this->ingredients();
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/Recipe/RecipeID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->getElementValue('/Recipe/Title');
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->getElementValue('/Recipe/Description');
    }

    /**
     * @return string
     */
    public function category()
    {
        return $this->getElementValue('/Recipe/Category');
    }

    /**
     * @return string
     */
    public function subCategory()
    {
        return $this->getElementValue('/Recipe/Subcategory');
    }

    /**
     * @return string
     */
    public function primaryIngredient()
    {
        return $this->getElementValue('/Recipe/PrimaryIngredient');
    }

    /**
     * @return int
     */
    public function starRating()
    {
        return $this->getElementValue('/Recipe/StarRating', self::INTEGER);
    }

    /**
     * @return string
     */
    public function webUrl()
    {
        return $this->getElementValue('/Recipe/WebURL');
    }

    /**
     * @return int
     */
    public function reviewCount()
    {
        return $this->getElementValue('/Recipe/ReviewCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function medalCount()
    {
        return $this->getElementValue('/Recipe/MedalCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function favoriteCount()
    {
        return $this->getElementValue('/Recipe/FavoriteCount', self::INTEGER);
    }

    /**
     * @return \BigOven\Response\Poster
     *
     * @throws \UnexpectedValueException
     */
    public function poster()
    {
        return $this->getNestedReponse('/Recipe/Poster', '\BigOven\Response\Poster');
    }

    /**
     * @return string
     */
    public function instructions()
    {
        return $this->getElementValue('/Recipe/Instructions');
    }

    /**
     * @return int
     */
    public function yieldNumber()
    {
        return $this->getElementValue('/Recipe/YieldNumber', self::INTEGER);
    }

    /**
     * @return int
     */
    public function yieldUnit()
    {
        return $this->getElementValue('/Recipe/YieldUnit', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalMinutes()
    {
        return $this->getElementValue('/Recipe/TotalMinutes', self::INTEGER);
    }

    /**
     * @return int
     */
    public function activeMinutes()
    {
        return $this->getElementValue('/Recipe/ActiveMinutes', self::INTEGER);
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->getElementValue('/Recipe/IsPrivate', self::BOOLEAN);
    }

    /**
     * @return \DateTime
     */
    public function creationDate()
    {
        return $this->getElementValue('/Recipe/CreationDate', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function lastModified()
    {
        return $this->getElementValue('/Recipe/LastModified', self::DATE);
    }

    /**
     * @return boolean
     */
    public function isBookmark()
    {
        return $this->getElementValue('/Recipe/IsBookmark', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function bookmarkUrl()
    {
        return $this->getElementValue('/Recipe/BookmarkURL');
    }

    /**
     * @return string
     */
    public function bookmarkSiteLogo()
    {
        return $this->getElementValue('/Recipe/BookmarkSiteLogo');
    }

    /**
     * @return string
     */
    public function bookmarkImageURL()
    {
        return $this->getElementValue('/Recipe/BookmarkImageURL');
    }

    /**
     * @return string
     */
    public function isRecipeScan()
    {
        return $this->getElementValue('/Recipe/IsRecipeScan');
    }

    /**
     * @return int
     */
    public function menuCount()
    {
        return $this->getElementValue('/Recipe/MenuCount', self::INTEGER);
    }

    /**
     * @return int
     */
    public function notesCount()
    {
        return $this->getElementValue('/Recipe/NotesCount', self::INTEGER);
    }

    /**
     * @return boolean
     */
    public function isSponsored()
    {
        return $this->getElementValue('/Recipe/IsSponsored', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function variantOfRecipeID()
    {
        return $this->getElementValue('/Recipe/VariantOfRecipeID');
    }

    /**
     * @return \BigOven\Response\NestedResponseIterator
     */
    public function ingredients()
    {
        return $this->getNestedReponseIterator(
            '/Recipe/Ingredients/Ingredient',
            '\BigOven\Response\Ingredient'
        );
    }

    /** NUTRUTION INFO **/

    /**
     * @return string
     */
    public function singularYieldUnit()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SingularYieldUnit');
    }

    /**
     * @return int
     */
    public function totalCalories()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCalories', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function caloriesFromFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/CaloriesFromFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalFatPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalFatPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function satFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SatFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function satFatPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SatFatPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function monoFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/MonoFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function polyFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/PolyFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function transFat()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TransFat', self::INTEGER);
    }

    /**
     * @return int
     */
    public function cholesterol()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Cholesterol', self::INTEGER);
    }

    /**
     * @return int
     */
    public function cholesterolPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/CholesterolPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sodium()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Sodium', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sodiumPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/SodiumPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function potassium()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Potassium', self::INTEGER);
    }

    /**
     * @return int
     */
    public function potassiumPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/PotassiumPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalCarbs()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCarbs', self::INTEGER);
    }

    /**
     * @return int
     */
    public function totalCarbsPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/TotalCarbsPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function dietaryFiber()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/DietaryFiber', self::INTEGER);
    }

    /**
     * @return int
     */
    public function dietaryFiberPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/DietaryFiberPct', self::INTEGER);
    }

    /**
     * @return int
     */
    public function sugar()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Sugar', self::INTEGER);
    }

    /**
     * @return int
     */
    public function protein()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/Protein', self::INTEGER);
    }

    /**
     * @return int
     */
    public function proteinPct()
    {
        return $this->getElementValue('/Recipe/NutritionInfo/ProteinPct', self::INTEGER);
    }
}
