<?php
$path = "../../../";
include '../../../templates/header.php'; ?>

    <div class="container-fluid postGeral post1 ">
          <div class="row">

<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
         <div class="container">
         <div class="row">

             <h1 class="text-center">Criando uma aplicação Mobile com Reapp</h1>
             <div class="thumbnail container">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

             <img class="img-circle center-block img-responsive" src="../../../img/mobile/IMG-20160118-WA0005.jpg" alt="...">

             </div>

             <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 caption">
                      <h3>Eclair Pereria</h3>

                      <p> Cusando o segundo semestre de sistemas para internet na Fatec, na cidade de São Roque, busca conhecimentos para empreender na área de TI, com o foco em WEB. Nas horas vagas gosta de viajar, de games em geral, passa algumas horas desenhando ou na jogatina e nos finais de semanas gosta de passar o tempo livre com a familia e amigos.

                      </p>
                        </div>
                        </div>
                      </div>
                      </div>
                      </section>
     <article class="col-xs-12 col-sm-12 col-md-12  col-lg-12  center-block" id="conteudo">
                <div class="container">
                  <div class="row">
                    <div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <p>This post was updated in May 2016 to reflect changes in React and Reapp.</p>
                <p>React is a JavaScript library focused on building user interfaces. It’s increase in popularity has been helped in part by the fact that it’s created, used and maintained by Facebook.

                </p>
                <h3>Why React ?</h3>
                <p>React works on the concept of the “virtual DOM” which makes it different to other JS libraries. When a change occurs it updates the virtual DOM instead of updating the actual DOM. When there are changes in the virtual DOM, it makes a single update, avoiding frequent updates to DOM.</p>
                <p>Introducing Reapp.io Reapp is a platform to create mobile apps. It provides a UI kit of components, optimized and customizable for creating mobile apps.</p>

                        </div>
                           <div class="">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                         <img class="center-block thumbnail img-responsive" src="../../../img/mobile/1430115560reapp_demo_screen.png" alt="...">

                               </div>
                               <hr/>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <h3>What You’ll Create</h3>
                        <p>In this tutorial, you’ll learn how to create a mobile app using Reapp. The app will help a user save different locations, making use of the Google Maps API. It will use Firebase as a back end to save data.</p>

                        <h3>Getting Started</h3>
                        <p>Start by installing reapp and create a project called ReactApp.</p>
                        <p>npm install -g reapp</p>
                        <p>reapp new ReactApp</p>
                        <p>Open the project directory, run reapp and the app should be running at http://localhost:3010.</p>
                        <p>cd ReactApp && reapp run</p>
                        <p>Here is the resulting project structure.</p>
                               </div>
                               </div>
                            
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <img class="center-block thumbnail img-responsive" src="../../../img/mobile/1430115552folde_str.png" alt="...">
                        
                        </div>
                        <div class="row"></div>
                        <p>Inside the project directory is the app folder which contains the app.js file. The app.js file defines different routes for the application. The components folder contains the different components rendered when requesting a particular route.</p>
                       
                         <a href="https://www.sitepoint.com/creating-mobile-application-reapp/"> Fonte: sitepoint.com Autor: Raj Jay Maio 20, 2016</a>
                      </div>
                      </div>

                    </div>
              </article>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <a href="<?php echo $path; ?>/areas/mobile/index.php" class="btn btn-warning">Voltar</a>
            </div>    
        </div>
    </div>


<?php include '../../../templates/footer.php'; ?>
