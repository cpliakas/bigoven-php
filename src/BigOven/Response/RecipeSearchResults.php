<?php

namespace BigOven\Response;

class RecipeSearchResults extends Response implements \IteratorAggregate
{
    /**
     * @return \BigOven\Response\NestedResponseIterator
     */
    public function getIterator()
    {
        return $this->getNestedReponseIterator(
            '/RecipeSearchResult/Results/RecipeInfo',
            '\BigOven\Response\RecipeSearchResult'
        );
    }

    /**
     * @return int
     */
    public function resultCount()
    {
        return $this->getElementValue('/RecipeSearchResult/ResultCount', self::INTEGER);
    }
}
