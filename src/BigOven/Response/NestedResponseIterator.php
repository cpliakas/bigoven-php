<?php

namespace BigOven\Response;

use BigOven\BigOvenClient;

class NestedResponseIterator extends \IteratorIterator
{
    /**
     * @var \BigOven\BigOvenClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $class;

    /**
     *
     * @param \Traversable $iterator
     * @param \BigOven\BigOvenClient $client
     * @param string $class
     */
    public function __construct(\Traversable $iterator, BigOvenClient $client, $class)
    {
        $this->client = $client;
        $this->class = $class;
        parent::__construct($iterator);
    }

    /**
     * {@inheritdoc}
     *
     * @return \BigOven\Response\NestedResponse
     */
    public function current()
    {
        return new $this->class($this->client, parent::current());
    }
}
