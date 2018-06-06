<? 
date_default_timezone_set("America/Detroit");
$currentDate = date("mdY");

$week01_begins = "06062017";
$week01_ends   = "06102017";

$week02_begins = "06112017";
$week02_ends   = "06172017";

$week03_begins = "06182017";
$week03_ends   = "06242017";

$week04_begins = "06252017";
$week04_ends   = "07012017";

$week05_begins = "07022017";
$week05_ends   = "07082017";

$week06_begins = "07092017";
$week06_ends   = "07152017";

$week07_begins = "07162017";
$week07_ends   = "07222017";

$week08_begins = "07232017";
$week08_ends   = "08012017";

$semester_ends = "08022017";

if     ( $currentDate >= $week01_begins and $currentDate <= $week01_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-01.html" );}

elseif ( $currentDate >= $week02_begins and $currentDate <= $week02_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-02.html" );}

elseif ( $currentDate >= $week03_begins and $currentDate <= $week03_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-03.html" );}

elseif ( $currentDate >= $week04_begins and $currentDate <= $week04_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-04.html" );}


elseif ( $currentDate >= $week05_begins and $currentDate <= $week05_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-05.html" );}

elseif ( $currentDate >= $week06_begins and $currentDate <= $week06_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-06.html" );}

elseif ( $currentDate >= $week07_begins and $currentDate <= $week07_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-07.html" );}

elseif ( $currentDate >= $week08_begins and $currentDate <= $week08_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/week-08.html" );}

elseif ( $currentDate >= $semester_ends ){
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/thank-you.html" );}

else{
    header ( "Location: https://mdavis.in/171/d2l/90213/content/weeks/" );}

?>