<?php
$path = "../";
include '../templates/header.php'; ?>
       <div class="container pagformulario">
     <div class="row">
            <div class="container textform col-xs-12 col-sm-12 col-md-8">
                <article>
         
                <h1>CONTATOs</h1>
                <p>Para maiores informações sobre essa equipe louca e apaixonada pelo que faz, tirar dúvidas, chamar para um café, batizado de criança, festa junina, ou mesmo um bico de faxina, entre em contato conosco.</p>
 
                <h3 class="titulos"3><strong>Telefones</strong></h3>
                <p>015 997 34 32 74</p>
                <p>011 40 20 24 24 (capitais e regiões metropolitanas)</p>

                <h3 class="titulos"><strong>Endereço</strong></h3>
                <p>Alameda Mamoré, 503 – Alphaville</p>
                <p>CEP: 06454-040 – Barueri/SP</p>

                <h3 class="titulos"><strong>E-mail</strong></h3>
                <p>a.amanda.altava@hotmail.com</p>
                </article>
            </div>
              
        <div class="formulario col-xs-12 col-sm-12 col-md-4">
        
            
                <h1>Envie um email</h1>
        <fieldset>
            <label for="name">Nome:</label>
            <input type="text" id="name" placeholder="Digite seu nome" />
            
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Digite seu email" />
            <br>
            <label for="message">Mensagem:</label>
            <textarea id="message" placeholder="O que você está pensando?"></textarea>
            
            <input type="submit" value="Enviar mensagem" />
            
        </fieldset>
        </div>
           </div>
</div>

 <?php include '../templates/footer.php'; ?>
