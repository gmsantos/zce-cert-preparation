<?php

// Third parameter if is a file/path
$simpleXml = new SimpleXMLElement('XmlFileValid.xml', 0, true);

// procedural call
$simpleXml = simplexml_load_file('XmlFileValid.xml');

// Invalid XML file display warnings
//$invalidXml = simplexml_load_file('XmlFileInvalid.xml');

/**
 * Xpath
 * 
 * - Always return an Array
 * - Node full path (/<parentNode>/<childNode>)
 * - Can omit node match ( // is same as /* /) 
 */ 

$booksInTitleOrder = $simpleXml->xpath('///title');

foreach ($booksInTitleOrder as $title){
    echo $title . PHP_EOL;
}
