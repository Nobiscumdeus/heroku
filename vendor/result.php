<?php
$html="

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title> Generate HTML to PDF </title>
        <style>
        *{
            text-align:center;
        </style>
</head>
<body>
    <h1> Generating PDF from HTML </h1>
    <table border='1' cellpadding='10' cellspacing='0' width='100%'>
        <tr>
            <th>No </th>
            <th> Name </th>
            <th> School </th>
</tr>
<tr>
    <td> 1 </td>
    <td> Falade Ifeoluwa </td>
    <td> Obafemi Awolowo Ile-Ife </td>
</tr>
<tr>
<td> 2 </td>
    <td> John Akinkunmi </td>
    <td> Medical School Ondo City  </td>
</tr>
<tr>
<td> 3 </td>
    <td>Oyindamola Adeola</td>
    <td> University of Ibadan Medical School  </td>
</tr>
</table>
</body>
    </html>";

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf=new Dompdf();

//$dompdf->loadHtml("<h1> Hello world from Chasfat Projects </h1>");
$dompdf->loadHtml($html);
$dompdf->setPaper("A4","portrait");
$dompdf->render();

//$dompdf->stream("playerofcode",array("Attachment"=>0));
$dompdf->stream("playerofcode",array("Attachment"=>1));
//Attachment as 0 will not download directly whereas attachment as 1 will download as pdf directly
//The player of code will be the name of the pdf file 
?>