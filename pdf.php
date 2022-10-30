<?php
error_reporting(E_ALL);
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

//$connect=new mysqli('localhost','root','','school project');
$con=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
$civic="SELECT *FROM civic WHERE fullnames='$our' and term ='$term'";
$biology="SELECT *FROM biology WHERE fullnames='$our' and term ='$term'";
$marketing="SELECT *FROM marketing WHERE fullnames='$our' and term ='$term'";
$english="SELECT *FROM english WHERE fullnames='$our' and term ='$term'";
$mathematics="SELECT *FROM mathematics WHERE fullnames='$our' and term='$term'";
$physics="SELECT *FROM physics WHERE fullnames='$our' and term='$term'";
$literature="SELECT *FROM literature WHERE fullnames='$our' and term='$term'";
$government="SELECT *FROM government WHERE fullnames='$our' and term='$term'";
$chemistry="SELECT *FROM chemistry WHERE fullnames='$our' and term='$term'";
$yoruba="SELECT *FROM yoruba WHERE fullnames='$our' and term='$term'";
$computer="SELECT *FROM computer WHERE fullnames='$our' and term='$term'";
$crk="SELECT *FROM crk WHERE fullnames='$our' and term='$term'";
$french="SELECT *FROM french WHERE fullnames='$our' and term='$term'";
$agric="SELECT *FROM agric WHERE fullnames='$our' and term='$term'";
$basicscience="SELECT *FROM basicscience WHERE fullnames='$our' and term='$term'";
$homecons="SELECT *FROM homeecons WHERE fullnames='$our' and term='$term'";
$vocationalstudies="SELECT *FROM vocationalstudies WHERE fullnames='$our' and term='$term'";

$mth=mysqli_query($con,$mathematics);
$mar=mysqli_query($con,$marketing);
$eng=mysqli_query($con,$english);
$bio=mysqli_query($con,$biology);
$civ=mysqli_query($con,$civic);
$phy=mysqli_query($con,$physics);
$gov=mysqli_query($con,$government);
$lit=mysqli_query($con,$literature);
$chm=mysqli_query($con,$chemistry);
$yor=mysqli_query($con,$yoruba);
$crk=mysqli_query($con,$crk);
$frn=mysqli_query($con,$french);
$com=mysqli_query($con,$computer);
$agr=mysqli_query($con,$agric);
$bsc=mysqli_query($con,$basicscience);
$homecons=mysqli_query($con,$homecons);
$pvs=mysqli_query($con,$vocationalstudies);

if($mar==false||$eng==false||$civ==false||$mth==false||$phy==false||$gov==false||$lit==false||$chm==false||
$yor==false||$crk==false||$frn==false||$com==false||$agr==false||$bsc==false||$homecons==false||$pvs==false){
    echo '';
}


//Add options


//end of options
//instatiate and use the dompdf
$dompdf=new Dompdf();
$dompdf->set_option('isHtml5ParseEnabled',true);
$dompdf->set_option('isRemoteEnabled',true);

//justing adding this line 
$dompdf->getOptions()->setChroot(['https://github.com/Nobiscumdeus/heroku/blob/master/images/IMG-20221008-WA0004-removebg-preview.png']);

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
$dompdf->stream("roseofsharon-results.pdf",['Attachment'=>false]);


?>