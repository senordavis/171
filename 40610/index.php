<?
date_default_timezone_set("America/Detroit");
$currentDate = date("mdY");

$week01_begins = "08262018";
$week01_ends   = "09012018";

$week02_begins = "09022018";
$week02_ends   = "09082018";

$week03_begins = "09092018";
$week03_ends   = "09152018";

$week04_begins = "09162018";
$week04_ends   = "09222018";

$week05_begins = "09232018";
$week05_ends   = "09292018";

$week06_begins = "09302018";
$week06_ends   = "10062018";

$week07_begins = "10072018";
$week07_ends   = "10132018";

$week08_begins = "10142018";
$week08_ends   = "10202018";

$week09_begins = "10212018";
$week09_ends   = "10272018";

$week10_begins = "10282018";
$week10_ends   = "11032018";

$week11_begins = "11042018";
$week11_ends   = "11102018";

$week12_begins = "11112018";
$week12_ends   = "11172018";

$week13_begins = "11182018";
$week13_ends   = "11242018";

$week14_begins = "11252018";
$week14_ends   = "12012018";

$week15_begins = "12022018";
$week15_ends   = "12082018";

$week16_begins = "12092018";
$week16_ends   = "12152018";

$semester_ends = "12172018";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-01.html" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-04.html" );}

elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-08.html" );}

elseif ( $currentDate >= $springbreak_begins and $currentDate <= $springbreak_ends ){
    header( "Location: https://mdavis.in/171/d2l/40610/content/weeks/spring-break.html" );}

elseif ( $currentDate >= $week09_begins and $currentDate <= $week09_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-09.html" );}

elseif ( $currentDate >= $week10_begins and $currentDate <= $week10_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-10.html" );}

elseif ( $currentDate >= $week11_begins and $currentDate <= $week11_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-11.html" );}

elseif ( $currentDate >= $week12_begins and $currentDate <= $week12_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-12.html" );}

elseif ( $currentDate >= $week13_begins and $currentDate <= $week13_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-13.html" );}

elseif ( $currentDate >= $week14_begins and $currentDate <= $week14_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-14.html" );}

elseif ( $currentDate >= $week15_begins and $currentDate <= $week15_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-15.html" );}

elseif ( $currentDate >= $week16_begins and $currentDate <= $week16_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/week-16.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/40610/content/weeks/intro.html" );}

?>
