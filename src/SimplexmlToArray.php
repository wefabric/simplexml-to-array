<?php

namespace Wefabric\SimplexmlToArray;

use SimpleXMLElement;

class SimplexmlToArray
{

    /**
     * Recursive function to convert a SimpleXMLElement to array.
     * The opposite of Wefabric\ArrayToXML.
     * @param SimpleXMLElement|array $xml
     * @param array $data
     * @return array
     */
    static function convert(mixed $xml, array $data = []): array
    {
        foreach ((array) $xml as $index => $node ) {
            $data[$index] = (! is_string($node)) ? self::convert($node) : $node;
        }

        return $data;
    }

}