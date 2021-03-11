

<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

$nome="";

$codicefiscale="";

$cognome="";



if(isset($_POST['codicefiscale'])){
    
    $codicefiscale=$_POST['codicefiscale'];
    
    $_SESSION['codicefiscale']=$_POST['codicefiscale'];       
    
}

if(!isset($_SESSION['nome'])){
    $_SESSION['nome']="";
}

if(!isset($_POST['nome'])){
    $nome=$_SESSION['nome'];
    $_POST['nome']=$_SESSION['nome'];
}

if(!isset($_SESSION['cognome'])){
    $_SESSION['cognome']="";
}

if(!isset($_POST['cognome'])){
    $cognome=$_SESSION['cognome'];
    $_POST['cognome']=$_SESSION['cognome'];
}


?>

<title>prova database</title>

<form id="form_2" action="final.php" method="post">    
    
    nome<input type="text" value="<?= $nome ?>" name="nome" id="nome">
    
    cognome<input type="text" value="<?= $cognome ?>" name="cognome" id="cognome">
    
        <input type="hidden" value="<?= $codicefiscale ?>" name="codicefiscale" id="codicefiscale">
             
         <input type="submit" value="final">
         
         <a href="step1.php">back</a>
    
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
