<?php

namespace BigOven\Response;

class Ingredient extends NestedResponse
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('IngredientID', self::INTEGER);
    }

    /**
     * @return int
     */
    public function displayIndex()
    {
        return $this->getElementValue('DisplayIndex', self::INTEGER);
    }

    /**
     * @return boolean
     */
    public function isHeading()
    {
        return $this->getElementValue('IsHeading', self::BOOLEAN);
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->getElementValue('Name');
    }

    /**
     * @return string
     */
    public function htmlName()
    {
        return $this->getElementValue('HTMLName');
    }

    /**
     * @return int
     */
    public function quantity()
    {
        return $this->getElementValue('Quantity', self::INTEGER);
    }

    /**
     * @return int
     */
    public function displayQuantity()
    {
        return $this->getElementValue('DisplayQuantity', self::INTEGER);
    }

    /**
     * @return string
     */
    public function unit()
    {
        return $this->getElementValue('Unit');
    }

    /**
     * @return int
     */
    public function metricQuantity()
    {
        return $this->getElementValue('MetricQuantity', self::INTEGER);
    }

    /**
     * @return int
     */
    public function metricDisplayQuantity()
    {
        return $this->getElementValue('MetricDisplayQuantity', self::INTEGER);
    }

    /**
     * @return string
     */
    public function metricUnit()
    {
        return $this->getElementValue('MetricUnit');
    }

    /**
     * @return string
     */
    public function ingredientName()
    {
        return $this->getElementValue('IngredientInfo/Name');
    }

    /**
     * @return string
     */
    public function ingredientDepartment()
    {
        return $this->getElementValue('IngredientInfo/Department');
    }
}
