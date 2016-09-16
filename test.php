<?php
$p1 = array( "Copier", "Laser", "Inkjer", "Photo" );

echo "p1 element:" . $p1[2] . "<br>";

$sp2 = array( 'copier' => "copier & Multipurpose",
    'injket' => "Inkjet Printer",
    'laser' => "Laser Pirnter",
    'photo' => "Photographic Paper" );

echo "p2 element:" . $sp2['injket'] . "<br>";

foreach( $sp2 as $item => $description )
    echo "$item: $$description<br>";

$paper = array( "copier", "Injket", "laser","photo" );
$j = 0;

foreach( $paper as $item )
{
    echo "$j:$item<br>";
    ++$j;
}

$paper1[] = "yangyu";
$paper1[] = "guanguan";
$paper1[] = "aman";

print_r( $paper1 );
echo "<br>";

$fred = array(
    array( '9', '6', '7', '8' ) ,
    array( '1', '2', '3', '4' ),
    array( ' ', ' ', ' ', ' ' ),
);

shuffle( $fred[1] );

echo "<pre>";

foreach( $fred as $row ){
    foreach( $row as $element )
        echo $element . ' ';
    echo "<br>";
}

echo "</pre>";

echo count( $fred ) . "<br>";
echo count( $fred, 1 );

sort( $fred );

echo "<pre>";

foreach( $fred as $row ){
    foreach( $row as $element )
        echo $element . ' ';
    echo "<br>";
}

echo "</pre>";


$temp = explode( ' ', "I fall in love with you the first time i see you" );

print_r( $temp );
$temp1 = explode( '***', "I*** fall*** in ***love*** with*** you " );

print_r( $temp1 );

?>