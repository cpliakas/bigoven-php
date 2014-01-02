<?php

namespace BigOven\Test;

use BigOven\BigOvenAuthPlugin;

class BigOvenAuthPluginTest extends \PHPUnit_Framework_TestCase
{
    const DUMMY_API_KEY  = 'dummyapikey';
    const DUMMY_USERNAME = 'Aladdin';
    const DUMMY_PASSWORD = 'open sesame';

    public function testAuth()
    {
        $request = new \Guzzle\Http\Message\Request('get', 'http://api.bigoven.com');
        $event = new \Guzzle\Common\Event(array('request' => $request));

        $pluigin = new BigOvenAuthPlugin(array(
            'api_key' => self::DUMMY_API_KEY,
            'username' => self::DUMMY_USERNAME,
            'password' => self::DUMMY_PASSWORD,
        ));
        $pluigin->onRequestBeforeSend($event);

        $this->assertEquals(self::DUMMY_API_KEY, $request->getQuery()->get('api_key'));

        // @see http://api.bigoven.com/documentation/authentication-process
        $expected = 'Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==';
        $this->assertEquals($expected, $request->getHeader('Authorization'));
    }
}
