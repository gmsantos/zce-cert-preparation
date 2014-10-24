<?php

/*
 * 
 * DOM save methods is not so intuitive:
 * 
 *   DomDocument::loadHtmlFile();       // and DomDocument::loadHTML()
 *   DomDocument::save();               // (to a file)
 *   DomDocument::saveXML();            // (to a string)
 *   DomDocument::saveHTML();           // (also to a string, but saves an HTML document instead of an XML file)
 *   DomDocument::saveHTMLFile();       // (to a file in HTML format).
 * 
 */

// Set the content type to be XML, so that the browser will   recognise it as XML.
header( "content-type: application/xml; charset=UTF-8" );

// "Create" the document.
$xml = new DOMDocument( "1.0", "UTF-8" );

// Create some elements.
$xml_album = $xml->createElement( "Album" );
$xml_track = $xml->createElement( "Track", "The ninth symphony" );

// Set the attributes.
$xml_track->setAttribute( "length", "0:01:15" );
$xml_track->setAttribute( "bitrate", "64kb/s" );
$xml_track->setAttribute( "channels", "2" );

// Create another element, just to show you can add any (realistic to computer) number of sublevels.
$xml_note = $xml->createElement( "Note", "The last symphony composed by Ludwig van Beethoven." );

// Append the whole bunch.
$xml_track->appendChild( $xml_note );
$xml_album->appendChild( $xml_track );

// Repeat the above with some different values..
$xml_track = $xml->createElement( "Track", "Highway Blues" );

$xml_track->setAttribute( "length", "0:01:33" );
$xml_track->setAttribute( "bitrate", "64kb/s" );
$xml_track->setAttribute( "channels", "2" );
$xml_album->appendChild( $xml_track );

$xml->appendChild( $xml_album );

// Parse the XML.
print $xml->saveXML();

$xml->save('files/DomXml.xml');
