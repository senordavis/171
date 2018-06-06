<? 
date_default_timezone_set("America/Detroit");
$currentDate = date("m-d-Y");

$week01_begins = "06-06-2018";
$week01_ends   = "06-09-2018";

$week02_begins = "06-10-2018";
$week02_ends   = "06-16-2018";

$week03_begins = "06-17-2018";
$week03_ends   = "06-23-2018";

$week04_begins = "06-24-2018";
$week04_ends   = "06-30-2018";

$week05_begins = "07-01-2018";
$week05_ends   = "07-07-2018";

$week06_begins = "07-08-2018";
$week06_ends   = "07-14-2018";

$week07_begins = "07-15-2018";
$week07_ends   = "07-21-2018";

$week08_begins = "07-22-2018";
$week08_ends   = "08-01-2018";

$semester_ends = "08-02-2018";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-01.html" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-04.html" );}


elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/week-08.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/30145/content/weeks/" );}

?>