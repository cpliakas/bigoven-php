<?php

namespace BigOven;

use Guzzle\Common\Collection;
use Guzzle\Common\Event;
use Guzzle\Http\Message\Request;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @see http://api.bigoven.com/documentation/authentication-process
 */
class BigOvenAuthPlugin implements EventSubscriberInterface
{
    /**
     * @var \Guzzle\Common\Collection
     */
    protected $config;

    /**
     * @param array $config Configuration array containing these parameters:
     *     - api_key
     *     - username
     *     - password
     */
    public function __construct($config)
    {
        $this->config = Collection::fromConfig($config, array(), array(
            'api_key',
            'username',
            'password',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => array('onRequestBeforeSend', -1000)
        );
    }

    /**
     * Request before-send event handler.
     *
     * @param \Guzzle\Common\Event $event
     */
    public function onRequestBeforeSend(Event $event)
    {
        $apiKey = $this->config->get('api_key');
        $username = $this->config->get('username');
        $password = $this->config->get('password');

        $this
            ->addApiKey($event['request'], $apiKey)
            ->addAuthorizationHeader($event['request'], $username, $password)
        ;
    }

    /**
     * @param \Guzzle\Http\Message\Request $request
     * @param string $apiKey
     *
     * @return \BigOven\BigOvenAuthPlugin
     */
    public function addApiKey(Request $request, $apiKey)
    {
        $request->getQuery()->set('api_key', $apiKey);
        return $this;
    }

    /**
     * @param \Guzzle\Http\Message\Request $request
     * @param string $username
     * @param string $password
     *
     * @return \BigOven\BigOvenAuthPlugin
     */
    public function addAuthorizationHeader(Request $request, $username, $password)
    {
        $encodedString = base64_encode($username . ':' . $password);
        $headerValue =  'Basic ' . $encodedString;
        $request->addHeader('Authorization', $headerValue);
        return $this;
    }
}
