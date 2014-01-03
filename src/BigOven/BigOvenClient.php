<?php

namespace BigOven;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;

class BigOvenClient extends Client
{
    const BASE_URL = 'http://api.bigoven.com';

    /**
     * {@inheritdoc}
     *
     * @return \BigOven\BigOvenClient
     */
    public static function factory($config = array())
    {
        $defaults = array(
            'base_url' => self::BASE_URL,
        );

        $required = array(
            'base_url',
            'api_key',
            'username',
            'password',
        );

        $config = Collection::fromConfig($config, $defaults, $required);

        $client = new static($config->get('base_url'), $config);
        $client->addSubscriber(new BigOvenAuthPlugin($config->toArray()));

        return $client;
    }

    /**
     * @return \BigOven\Response\User
     *
     * @see http://api.bigoven.com/documentation/user-profile
     */
    public function getUserProfile()
    {
        $request = $this->get('/profile');
        return new Response\User($request);
    }

    /**
     * @param int $recipeId
     *
     * @return \BigOven\Response\Recipe
     *
     * @see http://api.bigoven.com/documentation/recipes
     */
    public function getRecipe($recipeId)
    {
        $request = $this->get(array('/recipe/{id}', array('id' => $recipeId)));
        return new Response\Recipe($request);
    }

    /**
     * @param int $recipeId
     *
     * @return \SimpleXMLElement
     *
     * @see http://api.bigoven.com/documentation/recipe-images
     */
    public function getRecipeImages($recipeId)
    {
        $query = array(
            'rid' => $recipeId
        );

        return $this
            ->get('/images', array(), array('query' => $query))
            ->send()
            ->xml();
    }

    /**
     * @param string $title
     * @param array $options
     *     - pg: Page number, starting with 1
     *     - rpp: Number of results per page, defaults to 10, max of 50
     *     - uid: BigOven user primary key (ID) being searched for
     *
     * @see http://api.bigoven.com/documentation/recipe-search-results
     *
     * @return \SimpleXMLElement
     */
    public function findRecipesByTitle($title, array $options = array())
    {
        $query = $options + array(
            'title_kw' => $title,
            'pg'       => 1,
            'rpp'      => 10,
        );

        return $this
            ->get('/recipes', array(), array('query' => $query))
            ->send()
            ->xml()
        ;
    }

    /**
     * @param string $title
     * @param string $keyword
     *     - pg: Page number, starting with 1
     *     - rpp: Number of results per page, defaults to 10, max of 50
     *     - uid: BigOven user primary key (ID) being searched for
     *
     * @see http://api.bigoven.com/documentation/recipe-search-results
     *
     * @return \SimpleXMLElement
     */
    public function findRecipesByKeyword($keyword, array $options = array())
    {
        $query = $options + array(
            'any_kw'   => $keyword,
            'pg'       => 1,
            'rpp'      => 10,
        );

        return $this
            ->get('/recipes', array(), array('query' => $query))
            ->send()
            ->xml()
        ;
    }

    /**
     * @param int $entryId
     *
     * @return \BigOven\Response\GlossaryEntry
     *
     * @see http://api.bigoven.com/documentation/food-glossary
     */
    public function getGlossaryEntry($entryId)
    {
        $request = $this->get(array('/glossary/{id}', array('id' => $entryId)));
        return new Response\GlossaryEntry($request);
    }
}
