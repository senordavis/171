<?
date_default_timezone_set("America/Detroit");
$currentDate = date("mdY");

$week01_begins = "01092018";
$week01_ends   = "01132018";

$week02_begins = "01142018";
$week02_ends   = "01202018";

$week03_begins = "01212018";
$week03_ends   = "01272018";

$week04_begins = "01282018";
$week04_ends   = "02032018";

$week05_begins = "02042018";
$week05_ends   = "02102018";

$week06_begins = "02112018";
$week06_ends   = "02172018";

$week07_begins = "02182018";
$week07_ends   = "02242018";

$week08_begins = "02252018";
$week08_ends   = "03032018";

$springbreak_begins = "03042018";
$springbreak_ends   = "03102018";

$week09_begins = "03112018";
$week09_ends   = "03172018";

$week10_begins = "03182018";
$week10_ends   = "03242018";

$week11_begins = "03252018";
$week11_ends   = "03312018";

$week12_begins = "04012018";
$week12_ends   = "04072018";

$week13_begins = "04082018";
$week13_ends   = "04142018";

$week14_begins = "04152018";
$week14_ends   = "04212018";

$week15_begins = "04222018";
$week15_ends   = "04282018";

$week16_begins = "04292018";
$week16_ends   = "05052018";

$semester_ends = "05072018";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-01.html" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-04.html" );}

elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-08.html" );}

elseif ( $currentDate >= $springbreak_begins and $currentDate <= $springbreak_ends ){
    header( "Location: https://mdavis.in/171/d2l/20240/content/weeks/spring-break.html" );}

elseif ( $currentDate >= $week09_begins and $currentDate <= $week09_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-09.html" );}

elseif ( $currentDate >= $week10_begins and $currentDate <= $week10_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-10.html" );}

elseif ( $currentDate >= $week11_begins and $currentDate <= $week11_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-11.html" );}

elseif ( $currentDate >= $week12_begins and $currentDate <= $week12_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-12.html" );}

elseif ( $currentDate >= $week13_begins and $currentDate <= $week13_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-13.html" );}

elseif ( $currentDate >= $week14_begins and $currentDate <= $week14_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-14.html" );}

elseif ( $currentDate >= $week15_begins and $currentDate <= $week15_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-15.html" );}

elseif ( $currentDate >= $week16_begins and $currentDate <= $week16_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/week-16.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/20240/content/weeks/" );}

?>
