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
     * @param int $id
     *
     * @return \SimpleXMLElement
     *
     * @see http://api.bigoven.com/documentation/recipes
     */
    public function getRecipe($id)
    {
        $variables = array('id' => $id);
        return $this->get(array('/recipe/{id}', $variables))->send()->xml();
    }
}
