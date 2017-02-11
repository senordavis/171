<? 
date_default_timezone_set("America/Detroit");
$currentDate = date("mdY");

$week01_begins = "01092017";
$week01_ends   = "01142017";

$week02_begins = "01152017";
$week02_ends   = "01212017";

$week03_begins = "01222017";
$week03_ends   = "01282017";

$week04_begins = "01292017";
$week04_ends   = "02042017";

$week05_begins = "02052017";
$week05_ends   = "02112017";

$week06_begins = "02122017";
$week06_ends   = "02182017";

$week07_begins = "02192017";
$week07_ends   = "02252017";

$week08_begins = "02262017";
$week08_ends   = "03042017";

$springbreak_begins = "03052017";
$springbreak_ends   = "03112017";

$week09_begins = "03122017";
$week09_ends   = "03182017";

$week10_begins = "03192017";
$week10_ends   = "03252017";

$week11_begins = "03262017";
$week11_ends   = "04012017";

$week12_begins = "04022017";
$week12_ends   = "04082017";

$week13_begins = "04092017";
$week13_ends   = "04152017";

$week14_begins = "04162017";
$week14_ends   = "04222017";

$week15_begins = "04232017";
$week15_ends   = "04292017";

$week16_begins = "04302017";
$week16_ends   = "05062017";

$semester_ends = "05072017";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-04.html" );}

elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-08.html" );}

elseif ( $currentDate >= $springbreak_begins and $currentDate <= $springbreak_ends ){
    header( "Location: https://mdavis.in/171/d2l/80319/content/weeks/spring-break.html" );}

elseif ( $currentDate >= $week09_begins and $currentDate <= $week09_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-09.html" );}

elseif ( $currentDate >= $week10_begins and $currentDate <= $week10_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-10.html" );}

elseif ( $currentDate >= $week11_begins and $currentDate <= $week11_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-11.html" );}

elseif ( $currentDate >= $week12_begins and $currentDate <= $week12_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-12.html" );}

elseif ( $currentDate >= $week13_begins and $currentDate <= $week13_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-13.html" );}

elseif ( $currentDate >= $week14_begins and $currentDate <= $week14_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-14.html" );}

elseif ( $currentDate >= $week15_begins and $currentDate <= $week15_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-14.html" );}

elseif ( $currentDate >= $week16_begins and $currentDate <= $week16_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/week-16.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/80319/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/80319/" );}

?>