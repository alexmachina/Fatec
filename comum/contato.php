<?php
$path = "../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../templates/vetor.php"); 
include '../templates/header.php';
?>
       <div class="container pagformulario">
     <div class="row">
            <div class="container textform col-xs-12 col-sm-12 col-md-8">
                <article>
         
                <h1><?php echo $vetIdioma[17]; ?></h1>
                <p><?php echo $vetIdioma[18]; ?></p>
 
                <h3 class="titulos"><strong><?php echo $vetIdioma[19]; ?></strong></h3>
                <p>015 997 34 32 74</p>
                <p>011 40 20 24 24 <?php echo $vetIdioma[20]; ?></p>

                <h3 class="titulos"><strong><?php echo $vetIdioma[21]; ?></strong></h3>
                <p>Alameda Mamoré, 503 – Alphaville</p>
                <p>CEP: 06454-040 – Barueri/SP</p>

                <h3 class="titulos"><strong>E-mail</strong></h3>
                <p>a.amanda.altava@hotmail.com</p>
                </article>
            </div>
              
        <div class="formulario col-xs-12 col-sm-12 col-md-4">
        
            
                <h1><?php echo $vetIdioma[22]; ?></h1>
        <fieldset>
            <label for="name"><?php echo $vetIdioma[23]; ?></label>
            <input type="text" id="name" placeholder="<?php echo $vetIdioma[24]; ?>" />
            
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="<?php echo $vetIdioma[25]; ?>" />
            <br>
            <label for="message"><?php echo $vetIdioma[26]; ?></label>
            <textarea id="message" placeholder="<?php echo $vetIdioma[27]; ?>"></textarea>
            
            <input type="submit" value="Enviar mensagem" />
            
        </fieldset>
        </div>
           </div>
</div>

 <?php include '../templates/footer.php'; ?>
