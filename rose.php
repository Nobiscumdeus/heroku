<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'/>
        <title>Rose of Sharon-results page </title>
      
        <style type='text/css'>
           
            *{
                margin:0;
                padding:0;
               
            }
         
            .right-side{
                background-color:white;
                margin:5px;
                transform:scale(0.9);
                text-align:center;
            }
            .content{
          
          padding:5px;
          margin:10px;
          text-align:center;
          
          text-align:left;
      }
            
        .our{
            border-bottom:1px dashed black;
            border-bottom-width:thin;
            letter-spacing:5px;
            text-transform:uppercase;
            width:100px;
          
          
                  
        }
        table{
            transform:scale(1.1) translateY(20px);
        }
        table td{
            text-align:center;
        }
      
        h6{
            display:inline-block;
            margin-right:15px;
        }
      
        #im{
            width:80px;
            height:80px;
            float:left;
            
        }
       
       
        .head h3{
            color:black;
            text-align:center;
            text-transform:uppercase;
            font-weight:bold;
            line-height:70px;
            font-size:25px;
            letter-spacing:5px;
            margin-top:20px;
        }
        #second-table{
            margin-top:10%;
            border-collapse:collapse;
            border:1px solid black;
            margin-left:5%;



        }
       #second-table td{
        padding:20px;
        text-align:justify;
        
       }
       
    
        </style>
    </head>
    <body>
        <div class='head'> 
            
        <img src="./images/IMG-20221008-WA0004-removebg-preview.png" width="80px" height="80px" />


            <h3 id='eh'> Rose of Sharon Group of Schools Akure</h3>
           
        </div>
        <div class='cover'>
          

            <div class='right-side'> 
                <div class="content">

            <h3>
            STUDENT NAME<span class='our'><b> <?php echo $our ?> </b></span>
            </h3>
            <br/>

            <h3> CONTINUOUS ASSESSMENT FOR 
                <span class='our'><b> <?php echo $term?> </b> </span>
            </h3>
            <br/>
            <h3>
            CLASS <span class='our'><b> <?php echo $cls?> </b></span>
            </h3>
            <br/>
            <h3>
            ATTENDANCE <span class='our'><b> 200 out of 300</b></span>
            </h3>
            <br/>

            <h3>
            POSITION IN CLASS <span class='our'><b> 1<sup>st</sup></b></span>
            </h3>
            <br/>
            <h3>
            ACADEMIC SESSION<span class='our'><b> 2022/2023 SESSION</b></span>
            </h3>
            
    </div>
                


                <table id='tab' border="1" cellpadding="10px" cellspacing="0">
                    <tr>

                    <td> SUBJECTS </td>
                    <td> <span id='first-span'>(a)</span> 
                    <span id='second-span'>
                         Periodic <br/> Test 1 <br/>20
                        </span>
                    </td>


                    <td> <span id='first-span'>(b)</span>
                    <span id='second-span'> 
                        Periodic <br/>Test 2 <br/>20
                    </span>
                    </td>

                    <td> <span id='first-span'>(c)</span> 
                    <span id='second-span'>  
                        Periodic <br/>Test 3 <br/>20
                    </span>
                    </td>

                    <td> <span id='first-span'>(d)</span>
                        <span>  A+B+C <br/>60 </span>
                    </td>

                    <td> <span id='first-span'>(e)</span> <br/>
                    <span> End of <br/>Term Exam<br/>40
                    </span>
                    </td>

                    <td> <span id='first-span'>(f)</span> <br/>
                        <span> D + E <br/>100</span>
                    </td>

                    <td> <span id='first-span'>(g)</span> <br/>
                        <span>  Last term<br/>Cum b/f</span>
                    </td>
                    <td> <span id='first-span'>(h)</span> <br/>
                        <span> Cum Score </span>
                    </td>
                    <td> <span id='first-span'>(i)</span> <br/>
                        <span> Grade </span>
                    </td>
                    
                    <td> 
                        <span> Teacher's Remarks </span>
                    </td>
    </tr>
                  
    <!-- For English Scores -->
    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$eng->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  English</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
      




       <!-- For English Scores -->
    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$mar->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Marketing</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!---------- for Civic Scores ----->

 <!-- For English Scores -->
    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$bio->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Biology</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!--------   Civic Education --------->
 <!-- For English Scores -->
    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$civ->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Civic Education</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!--------- Mathematics---------->

    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$mth->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Mathematics</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!------ Literature ---->
 <!-- For English Scores -->
    <!-- Inline Php codes to out put the results -->
    <?php
                       while($info=$phy->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Physics</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
<!-- Biology---->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$bio->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Biology</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
<!--- Civic Education------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$civ->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Civic Education</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!---- Government ------>
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$gov->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Government</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-- Literature ---->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$lit->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Literature</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!----- Chemistry ------>
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$chm->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td>  Chemistry</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
<!----- Yoruba ----->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$yor->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Yoruba </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-------- Crk --------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$crk->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Yoruba </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!------ crk ------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$yor->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Yoruba </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-------- Crk --------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$crk->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Chrisitan Religious Knowledge </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
<!------ French   -------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$yor->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Yoruba </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-------- Crk --------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$frn->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> French</td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!---- Computer--------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$yor->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Yoruba </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-------- Crk --------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$com->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Computer </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!------ Agric ------>
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$agr->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Agricultural Science </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!-------- Crk --------->
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$bsc->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Basic Science </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>

<!----- Home Economics ------>
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$homecons->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Home Economics </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>


<!----- Prevocational Studies ------>
   <!-- Inline Php codes to out put the results -->
   <?php
                       while($info=$pvs->fetch_assoc()){
                        //using case to change the Teacher's remarks 

                       
                    ?>
            <tr>
                  
        <td> Prevocational Studies </td>
        <td> <?php echo "{$info['first_test']}";?></td>
        <td> <?php echo "{$info['second_test']}";?></td>
        <td> <?php echo "{$info['third_test']}";?></td>
        <td> <?php echo "{$info['total_tests']}";?></td>
        <td> <?php echo "{$info['exams']}";?></td>
        <td> <?php echo "{$info['final_scores']}";?></td>
        <td>----</td>
        <td>----</td>
        <td> <?php $remarks="{$info['grades']}"; echo $remarks; GLOBAL $remarks?></td>
        <td> 
        <?php
        if($remarks=='A'){
                            $res='Excellent';
                            GLOBAL $res;
                        }elseif($remarks=='B'){
                            $res='Good';
                            GLOBAL $res;
                        }elseif($remarks=='C'){
                            $res='Average';
                            GLOBAL $res;
                        }elseif($remarks=='D'){
                            $res='Poor';
                            GLOBAL $res;
                        }elseif($remarks=='E'){
                            $res='Very Poor';
                            GLOBAL $res;
                        }elseif($remarks='F'){
                            $res='Failure';
                            GLOBAL $res;
                        }
                        
            echo $res; ?></td>

                
   

    </tr>
    <?php
}
?>
<?php
if($info=""){
    echo "<p> Sorry, no results yet </p>";
}
?>
       

</table> 
    <table id="second-table">
        <style>
            ul{
                list-style-type:none;
            }
            </style>
        <tr>
            <td>
                <h4> PSYCHOMOTOR SKILLS</h4>
                <ul>
                    <li> Creativity <span> ____</span></li> 
                    <li> Verbal Fluency <span> ____</span></li>
                    <li> Games <span> ____</span></li>
                    <li> Handling Tools <span> ____</span></li>
                    <li> Drawing and Paiting <span> ____</span></li>
</ul>
                 </td>
            <td> 
                <h4> GRADES </h4>
                <ol>
                    <li> Excellent A (70%-100%) </li>
                    <li> Good B (60%-69%)</li>
                    <li> Average C (50%-59%) </li>
                    <li> Fair D (40%-49%) </li>
                    <li> Poor E (30%-39%) </li>
                </ol>
            </td>
            <td> 
                <h4> OTHERS </h4>
                <ul>
                    <li> Date of Vacation <span> _______ </span></li>
                    <li> Date of Resumption <span> _______ </span></li>
                    <li> Class Teacher Comment <span>_______  </span></li>
                    <li> Head Teacher's Comment <span> _______ </span></li>
                    <li> Proprietor's Signature <span> _______ </span></li>
                    
</ul>
            </td>
        </tr>

</table>   
            <p>
                <!-- If third terh -- Write PROMOTED TO NEXT CLASS WITH CODES> -->  </p>
                
            </div>
            <footer>
                <style>
                    footer{
                        letter-spacing:5px;
                        text-align:center;
                        margin-top:20%;
                    }
                </style>
                <i>Developed by Chasfat_Project$ @2022 </i>
        </footer>
      
    </body>

</html>

