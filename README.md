# simplexml-to-array

Tiny PHP 7.1+ package that converts a SimpleXML object to an array.

## Usage

```
$xml = new SimpleXMLElement('<Object xmlns:xs="http://www.w3.org/2001/XMLSchema" />');
$data = SimplexmlToArray::convert($xml);
```

## Remarks

If you instead are looking for a package that converts an array to a SimpleXML, consider the package [wefabric\array-to-simplexml](https://github.com/wefabric/array-to-simplexml).
