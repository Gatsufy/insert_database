<?php
    /* 
    * To change this license header, choose License Headers in Project Properties.
    * To change this template file, choose Tools | Templates
    * and open the template in the editor.
    */

session_start();

$codicefiscale="";

$nome="";

$cognome="";

if(isset($_SESSION['codicefiscale'])){
    
    $codicefiscale=$_SESSION['codicefiscale'];  
    
}

if(isset($_SESSION['nome'])){
    
    $nome=$_SESSION['nome'];  
    
}

if(isset($_SESSION['cognome'])){
    
    $cognome=$_SESSION['cognome'];  
    
}

echo $codicefiscale;

echo " ";


echo $nome;

echo " ";


echo $cognome;

echo "<br />";



        $ser="localhost";
        
        $user="root";
        
        $pass="";
        
        $db="marco";
        
        $connect = mysqli_connect($ser ,$user ,$pass ,$db) or die("Connection Failed");
               
        echo "Connected! <br />";
        
        
        $query_in= "INSERT INTO persona (CODICE_FISCALE,NOME,COGNOME) VALUES ('$codicefiscale','$nome','$cognome')";
                
        if(mysqli_query($connect, $query_in)){
           
            echo "Records inserted successfully.";
            
        } else{
            
            echo "ERROR: Could not able to execute $query_in. " . mysqli_error($connect);
}

// Close connection

mysqli_close($connect);
        
        ?>

<footer>
    
    <a href="index.php">turn back</a>
    
</footer>
