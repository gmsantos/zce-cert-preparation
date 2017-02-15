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
//$simpleXml = simplexml_load_file('XmlFileValid.xml');

//var_dump(get_class($simpleXml));

// Invalid XML file display warnings
//$invalidXml = simplexml_load_file('XmlFileInvalid.xml');

//echo $simpleXml->book->genre . PHP_EOL;

// Access the 2nd book element
//var_dump($simpleXml->book[1]->genre);

// Access element atribute
//echo $simpleXml->book[1]['id'] . PHP_EOL;
//var_dump($simpleXml->book[1]['id']);

$movie = $simpleXml->addChild('movie');
$movie->addChild('title', 'PHP2: More Parser Stories');
$movie->addChild('plot', 'This is all about the people who make it work.');

$characters = $movie->addChild('characters');
$character  = $characters->addChild('character');
$character->addChild('name', 'Mr. Parser');
$character->addChild('actor', 'John Doe');

$rating = $movie->addChild('rating', '5');
$rating->addAttribute('type', 'stars');
 
//var_dump($movie->children()[2]->asXml());

//echo $simpleXml->asXML();

// saveXml is an alias to asXml
$simpleXml->saveXml('new_xml');

/**
 * Xpath
 * 
 *  http://www.macoratti.net/vb_xpath.htm
 *  https://msdn.microsoft.com/en-us/library/ms256086(v=vs.110).aspx
 *
 * - Always return an Array
 * - Node full path (/<parentNode>/<childNode>)
 * - Can omit node match ( // is same as /* /) 
 */ 

$booksInTitleOrder = $simpleXml->xpath('//book/title');

foreach ($booksInTitleOrder as $title){
    echo $title . PHP_EOL;
}
