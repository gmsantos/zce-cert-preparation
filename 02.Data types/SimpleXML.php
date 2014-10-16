<?php

/**
 * Creates a new SimpleXMLElement object
 * @link http://php.net/manual/en/simplexmlelement.construct.php
 * @param $data
 * @param $options [optional]
 * @param $data_is_url [optional] True if is a file/path, False is is a string
 * @param $ns [optional]
 * @param $is_prefix [optional]
 */
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
