<?php>
  //error_reporting(0);
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
       
       
    
        </style>
    </head>
    <body>
        <div class='head'> 
            <h3 id='eh'> Rose of Sharon Group of Schools </h3>
           
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
                    <!-- Inline Php codes to out put the results -->
                    <?php
                       while($info=$result->fetch_assoc()){
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
    <tr>
       
    </tr>
    <tr>
        <td>Elementary Science </td>
        <td> </td> 
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td></td>
        <td></td>
        <td> </td>
        <td> </td>
    </tr>
    <tr>
        <td> Social Studies/RNV </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td></td>
        <td></td>
        <td> </td>
        <td> </td>

        <td> </td>
    </tr>
    <tr>
        <td> Yoruba </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td></td>
        <td> </td>
        <td> </td>
    </tr>
    <tr>
        <td> Agric Science </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      
        <td> </td>
    </tr>
    <tr>
        <td> Commerce/Physics</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>

        <td> </td>
    
    </tr>

    <tr>
        <td> Biology </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
      
        <td> </td>
    </tr>
    <tr>
        <td>Marketing </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
       
        <td> </td>
    </tr>
    <tr>
        <td> French/Biology </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    
        <td> </td>
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
                
            </div>
      
    </body>

</html>

