<?php

use Wefabric\SimplexmlToArray\SimplexmlToArray;

require __DIR__.'/../vendor/autoload.php';

$string = '<breakfast_menu>
    <food>
        <name>Belgian Waffles</name>
        <price>€5.95</price>
        <description>Two of our famous Belgian Waffles with plenty of real maple syrup</description>
        <calories>650</calories>
    </food>
    <food>
        <name>Strawberry Belgian Waffles</name>
        <price>€7.95</price>
        <description>Light Belgian waffles covered with strawberries and whipped cream</description>
        <calories>900</calories>
    </food>
    <food>
        <name>Homestyle Breakfast</name>
        <price>€6.95</price>
        <description>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</description>
        <calories>950</calories>
    </food>
</breakfast_menu>';
$xml = new SimpleXMLElement($string);
//Copied from: https://www.w3schools.com/xml/xml_examples.asp > View an XML food menu

echo '<h2>Input</h2>';
dump($string);
dump($xml);

echo '<h2>Output</h2>';
$data = SimplexmlToArray::convert($xml);
dump($data);
