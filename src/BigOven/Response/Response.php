<?php

namespace BigOven\Response;

use Guzzle\Http\Message\Request;

class Response
{
    const BOOLEAN = 'boolean';
    const DATE    = 'date';
    const INTEGER = 'integer';
    const STRING  = 'string';

    /**
     * @var \BigOven\BigOvenClient
     */
    protected $client;

    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @var array
     */
    protected $cache = array();

    /**
     * @param \Guzzle\Http\Message\Request $xml
     */
    public function __construct(Request $request)
    {
        $this->client = $request->getClient();
        $this->xml = $request->send()->xml();
    }

    /**
     * @return \BigOven\BigOvenClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return \SimpleXMLElement
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Returns the value of the first element matched in the XPath query.
     *
     * @param string $path
     * @param string $dataType
     *
     * @return string
     *
     * @throws \UnexpectedValueException
     */
    public function getElementValue($path, $dataType = self::STRING)
    {
        if (!array_key_exists($path, $this->cache)) {

            $result = $this->xml->xpath($path);
            $element = reset($result);

            if ($element instanceof \SimpleXMLElement) {

                $value = (string) $element;
                if ($this->isNullable($element) && !strlen($value)) {
                    $this->cache[$path] = null;
                } else {
                    $this->cache[$path] = $this->typeCastValue($value, $dataType);
                }

            } else {
                $this->cache[$path] = null;
            }
        }

        return $this->cache[$path];
    }

    /**
     * Returns true if the "xsi:nil" attribute is "true".
     *
     * @param \SimpleXMLElement
     *
     * @return boolean
     */
    public function isNullable(\SimpleXMLElement $element)
    {
        $attributes = $element->attributes('xsi', true);
        return isset($attributes['nil']) && 'true' == $attributes['nil'];
    }

    /**
     * Type casts the value extracted from the XML document.
     *
     * @param string $value
     * @param string $dataType
     *
     * @return mixed
     *
     * @throws \UnexpectedValueException
     */
    public function typeCastValue($value, $dataType)
    {
        switch ($dataType) {
            case self::BOOLEAN;
                return ('true' == $value);

            case self::DATE;
                return new \DateTime($value);

            case self::INTEGER:
                return (int) $value;

            case self::STRING;
                return $value;

            default:
                throw new \UnexpectedValueException('Data type not valid: ' . $dataType);
        }
    }

    /**
     * Returns the raw XML response.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->xml->asXML();
    }
}
