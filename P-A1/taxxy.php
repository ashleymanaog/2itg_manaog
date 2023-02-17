<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="style.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>TAXXY:Tax Calculator</title>

</head>

<body>  
   
    <img src="iconcalcu.jpg" alt="icon" style="width;150px; height: 200px;">
    
    <h1>Taxxy: A Tax Calculator</h1>
    <form action="taxxy.php" method="post">
        <div class="box">
            
            <label>Salary:</label>
        
            <div class="salary">
                <input type="text" class="salary" name="salary" placeholder="">
            </div>
               
            <div class="form-flex">
            
            <label>Type:</label>

                <label>
                        <input type="radio" name="user_type" value="Bi-Monthly" checked="checked" style="margin-left: 2rem;" />
                        <span class="sub-link">Bi-Monthly</span>                       
                </label>

                <label>
                        <input type="radio" name="user_type" value="Monthly" checked="checked" style="margin-left: 2rem;"  />
                        <span class="sub-link">Monthly</span>
                </label>
        </div>
            <div class="button">
		    <button type="compute" name ="btn btn-warning" class="btn btn-warning">Compute</button>
            </div>
        </div>
</form>
</div>
<div class="box">

<?php
if(isset($_POST['btn btn-warning'])) 
{
                    $salary = $_GET["salary"] ;
                    $salaryType = $_GET["user_type"];
                    $excess;
                    $annualTax;
                    $monthlyTax;
                    
                
                    if($salaryType == "Monthly" )
                    {
                        $salary*=12;
                        if($salary<=250000.0)
                        {
                            $monthlyTax = 0.0;
                            $annualTax = 0.0;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >250000.0 && $salary <= 400000.0)
                        {
                            $excess =  $salary-250000.0;
                            $annualTax = $excess*0.2;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >400000.0 && $salary <= 800000.0)
                        {
                            $excess =  $salary-400000.0;
                            $annualTax = 30000+$excess*0.25;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >800000.0 && $salary <= 2000000.0)
                        {
                            $excess =  $salary-800000.0;
                            $annualTax = 130000+$excess*0.30;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >2000000.0 && $salary <= 8000000000.0)
                        {
                            $excess =  $salary-2000000.0;
                            $annualTax = 490000+$excess*0.32;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >8000000.0)
                        {
                            $excess =  $salary-8000000.0;
                            $annualTax = 2410000+$excess*0.35;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                    }
                    if($salaryType == "Bi-Monthly" )
                    {
                        $salary*=24;
                        if($salary<=250000.0)
                        {
                            $monthlyTax = 0.0;
                            $annualTax =0.0;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >250000.0 && $salary <= 400000.0)
                        {
                            $excess =  $salary-250000.0;
                            $annualTax = $excess*0.2;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >400000.0 && $salary <= 800000.0)
                        {
                            $excess =  $salary-400000.0;
                            $annualTax = 30000+$excess*0.25;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >800000.0 && $salary <= 2000000.0)
                        {
                            $excess =  $salary-800000.0;
                            $annualTax = 130000+$excess*0.30;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >2000000.0 && $salary <= 8000000000.0)
                        {
                            $excess =  $salary-2000000.0;
                            $annualTax = 490000+$excess*0.32;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                        if($salary >8000000.0)
                        {
                            $excess =  $salary-8000000.0;
                            $annualTax = 2410000+$excess*0.35;
                            $monthlyTax = $annualTax/12;
                        }
                        echo "Annual Salary: PHP $salary<br>"; 
                        echo "Est Annual Tax: PHP $annualTax<br>";
                        echo "Est Monthly Tax: PHP $monthlyTax<br>" ;
                    }
                        
}
    ?>
</div>       
    
</body>
</html>
    
   