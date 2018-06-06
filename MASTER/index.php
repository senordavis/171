<? 
date_default_timezone_set("America/Detroit");
$currentDate = date("mdY");

$week01_begins = "08312017";
$week01_ends   = "09022017";

$week02_begins = "09032017";
$week02_ends   = "09092017";

$week03_begins = "09102017";
$week03_ends   = "09162017";

$week04_begins = "09172017";
$week04_ends   = "09232017";

$week05_begins = "09242017";
$week05_ends   = "09302017";

$week06_begins = "10012017";
$week06_ends   = "10072017";

$week07_begins = "10082017";
$week07_ends   = "10142017";

$week08_begins = "10152017";
$week08_ends   = "10212017";

$week09_begins = "10222017";
$week09_ends   = "10282017";

$week10_begins = "10292017";
$week10_ends   = "11042017";

$week11_begins = "11052017";
$week11_ends   = "11112017";

$week12_begins = "11122017";
$week12_ends   = "11182017";

$week13_begins = "11192017";
$week13_ends   = "11252017";

$week14_begins = "11262017";
$week14_ends   = "12022017";

$week15_begins = "12032017";
$week15_ends   = "12092017";

$week16_begins = "12102017";
$week16_ends   = "12162017";

$semester_ends = "12172017";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-01.html" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-04.html" );}

elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-08.html" );}

elseif ( $currentDate >= $springbreak_begins and $currentDate <= $springbreak_ends ){
    header( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/spring-break.html" );}

elseif ( $currentDate >= $week09_begins and $currentDate <= $week09_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-09.html" );}

elseif ( $currentDate >= $week10_begins and $currentDate <= $week10_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-10.html" );}

elseif ( $currentDate >= $week11_begins and $currentDate <= $week11_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-11.html" );}

elseif ( $currentDate >= $week12_begins and $currentDate <= $week12_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-12.html" );}

elseif ( $currentDate >= $week13_begins and $currentDate <= $week13_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-13.html" );}

elseif ( $currentDate >= $week14_begins and $currentDate <= $week14_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-14.html" );}

elseif ( $currentDate >= $week15_begins and $currentDate <= $week15_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-15.html" );}

elseif ( $currentDate >= $week16_begins and $currentDate <= $week16_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/week-16.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/MASTER/content/weeks/" );}

?>
