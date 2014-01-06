<?php

namespace BigOven\Response;

class RecipeImages extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function imageUrl()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageURL');
    }

    /**
     * @return string
     */
    public function imageUrl64()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageUR64L');
    }

    /**
     * @return string
     */
    public function imageUrl120()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageURL120');
    }

    /**
     * @return string
     */
    public function imageUrl128()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageURL128');
    }

    /**
     * @return string
     */
    public function imageUrl200()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageURL200');
    }

    /**
     * @return string
     */
    public function imageUrl256()
    {
        return $this->getElementValue('/ArrayOfImage/Image/ImageURL256');
    }

    /**
     * @return string
     */
    public function caption()
    {
        return $this->getElementValue('/ArrayOfImage/Image/Caption');
    }

    /**
     * @return boolean
     */
    public function IsPrimary()
    {
        return $this->getElementValue('/ArrayOfImage/Image/IsPrimary', self::BOOLEAN);
    }
}