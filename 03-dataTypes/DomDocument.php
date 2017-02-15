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

// "Create" the document.
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create some elements.
$xml_album = $dom->createElement( "Album" );
$xml_track = $dom->createElement( "Track", "The ninth symphony" );

// Set the attributes.
$xml_track->setAttribute( "length", "0:01:15" );
$xml_track->setAttribute( "bitrate", "64kb/s" );
$xml_track->setAttribute( "channels", "2" );

// Create another element, just to show you can add any (realistic to computer) number of sublevels.
$xml_note = $dom->createElement( "Note", "The last symphony composed by Ludwig van Beethoven." );

// Append the whole bunch.
$xml_track->appendChild( $xml_note );
$xml_album->appendChild( $xml_track );

// Repeat the above with some different values..
$xml_track = $dom->createElement( "Track", "Highway Blues" );

$xml_track->setAttribute( "length", "0:01:33" );
$xml_track->setAttribute( "bitrate", "64kb/s" );
$xml_track->setAttribute( "channels", "2" );
$xml_album->appendChild( $xml_track );

$dom->appendChild( $xml_album );

// Parse the XML.
print $dom->saveXML();

$dom->save('files/DomXml.xml');
