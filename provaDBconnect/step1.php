<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$codicefiscale="";

if(!isset($_SESSION['codicefiscale'])){
    
    $_SESSION['codicefiscale']="";
    
}

if(!isset($_POST['codicefiscale'])){
    
    $codicefiscale =$_SESSION['codicefiscale'];
    
    $_POST['codicefiscale']=$_SESSION['codicefiscale'];
}

?>

<title>prova database</title>

<form id="form_1" action="step2.php" method="post">
    
    
    codice_fiscale<input type="text" value="<?=$codicefiscale ?>" name="codicefiscale" id="codicefiscale">
    
    <input type="submit" value="step2">
    
    <a href="index.php">back</a>
    
</form>

<button onclick="hide_footer()">hide_footer</button>

<footer id="footer">
    <?php
    
    var_dump($_SESSION);
    
    var_dump($_POST);
    
    ?>
</footer>

<script> 
    
    function hide_footer(){
        
        var footer=document.getElementById("footer");
        
        if(footer.style.display!="none"){
            
            footer.style.display="none";
        
        }else{
            
            footer.style.display="inline";
        
        }
    
    }
    
</script>
