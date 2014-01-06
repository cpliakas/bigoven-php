<?php

namespace BigOven\Response;

class RecipeSearchResult extends NestedResponse
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('RecipeID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->getElementValue('Title');
    }

    /**
     * @return string
     */
    public function cuisine()
    {
        return $this->getElementValue('Cuisine');
    }

    /**
     * @return string
     */
    public function category()
    {
        return $this->getElementValue('Category');
    }

    /**
     * @return string
     */
    public function subCategory()
    {
        return $this->getElementValue('Subcategory');
    }

    /**
     * @return float
     */
    public function starRating()
    {
        return $this->getElementValue('StarRating', self::FLOAT);
    }

    /**
     * @return string
     */
    public function starRatingImage()
    {
        return $this->getElementValue('StarRatingIMG');
    }

    /**
     * @return string
     */
    public function webUrl()
    {
        return $this->getElementValue('WebURL');
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('ImageURL');
    }

    /**
     * @return string
     */
    public function imageUrl120()
    {
        return $this->getElementValue('ImageURL120');
    }

    /**
     * @return int
     */
    public function reviewCount()
    {
        return $this->getElementValue('ReviewCount', self::INTEGER);
    }

    /**
     * @return \BigOven\Response\Poster
     *
     * @throws \UnexpectedValueException
     */
    public function poster()
    {
        return $this->getNestedReponse('Poster', '\BigOven\Response\Poster');
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->getElementValue('IsPrivate', self::BOOLEAN);
    }

    /**
     * @return boolean
     */
    public function isBookmark()
    {
        return $this->getElementValue('IsBookmark', self::BOOLEAN);
    }

    /**
     * @return int
     */
    public function yieldNumber()
    {
        return $this->getElementValue('YieldNumber', self::INTEGER);
    }

    /**
     * @return int
     */
    public function qualityScore()
    {
        return $this->getElementValue('QualityScore', self::INTEGER);
    }

    /**
     * @return \DateTime|null
     */
    public function creationDate()
    {
        return $this->getElementValue('CreationDate', self::DATE);
    }
}
