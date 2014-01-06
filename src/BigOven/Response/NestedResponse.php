<?php

namespace BigOven\Response;

use BigOven\BigOvenClient;

class NestedResponse extends Response
{
    /**
     * @param \BigOven\BigOvenClient $client
     * @param \SimpleXMLElement $xml
     */
    public function __construct(BigOvenClient $client, \SimpleXMLElement $xml)
    {
        $this->client = $client;
        $this->xml = $xml;
    }
}
