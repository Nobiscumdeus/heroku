<?php
error_reporting(0);
//not including anything e.g include('config.php');
//require 'domdf/autoload.inc.php';
require 'vendor/autoload.php';
use Dompdf\Dompdf;

//Major php codes run here
$our=$_POST['name'];
GLOBAL $our;
$cls=$_POST['class'];
GLOBAL $cls;
$term=$_POST['term'];
GLOBAL $term;

//$connect=new mysqli('localhost','root','','rose of sharon');
$connect=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
$sql="SELECT *FROM mathematics WHERE fullnames='$our' and term='$term' ";
$result=mysqli_query($connect,$sql);
if($result==false){
    echo '';
}


$our=$_POST['name'];
GLOBAL $our;

$cls=$_POST['class'];
GLOBAL $cls;
$term=$_POST['term'];
GLOBAL $term;

//instatiate and use the dompdf
$dompdf=new Dompdf();
ob_start();
require('rose.php');
$html=ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);

//Optional, set the paper size and its orientation
$dompdf->setPaper('A4','portrait');

//Render the HTML as pdf;
$dompdf->render();

//Output the generated PDF to the browser
$dompdf->stream("student-results.pdf",['Attachment'=>false]);


?>