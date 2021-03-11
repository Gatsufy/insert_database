<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if(isset($_POST['nome'])){
    $_SESSION['nome']=$_POST['nome'];
}

if(isset($_POST['cognome'])){
    $_SESSION['cognome']=$_POST['cognome'];
}



echo $_POST['codicefiscale'];

echo " ";

echo $_POST['nome'];

echo " ";

echo $_POST['cognome'];

?>

<title>prova database</title>

<a href="step2.php">back</a>

<a href="save.php">save</a>

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