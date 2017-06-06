<?php
$path = "../../../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../../../templates/vetor.php"); 
include '../../../templates/header.php';
?>


    <div class="container-fluid postGeral post5">
          <div class="row">

                        <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
         <div class="container">
         <div class="row">

             <h1 class="text-center" id="topo">Um passeio com Android Auto</h1>
             <div class="thumbnail container">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

             <img class="img-circle center-block" src="../../../img/mobile/IMG-20160118-WA0005.jpg" alt="..." id="minhafoto" class="img-responsive">

             </div>

             <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 caption">
                    <h3>Ketlin Moura</h3>

                      <p> Cusando o segundo semestre de sistemas para internet na Fatec, na cidade de São Roque, busca conhecimentos para empreender na área de TI, com o foco em WEB. Nas horas vagas gosta de viajar, de games em geral, passa algumas horas desenhando ou na jogatina e nos finais de semanas gosta de passar o tempo livre com a familia e amigos.

                      </p>
                        </div>
                        </div>
                      </div>
                      </div>
                      </section>

                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="conteudo">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <h2>Um passeio com Android Auto</h2>
                        
                        <h3>What Is Android Auto?</h3>
                        <p> Auto is Google’s in-car Heads Up Display (HUD) software. It’s the awesome Android OS you know, just in a new and revised form. Android Auto lets drivers interact with their messages, music, notifications, navigation and other elements without touching their phone.</p>
                        <img src="../../../img/mobile/android-auto-introduction.jpg"class="img-responsive" alt="..."> 
                        
                        <p>Auto works by connecting a device into your cars HUD via a USB cable. Once connected along side the Android Auto companion app, the phone will switch into auto mode, broadcasting the Auto OS onto the HUD. Your phone acts as a controller, all your interactions such as messages and music executed on your phone. The HUD just provides an easy to use and customized interface suitable for driving.</p>
                        
                           <p>Android Auto provides a tailored experience for your car. Out of the box you will be able to access navigation, your phone book, home button, music and miscellaneous car options. These are triggered by hardware buttons on your cars steering wheel or via the on-screen bottom menu.</p>
                        <img src="../../../img/mobile/android-auto-action-bar.jpg"  class="img-responsive" alt="...">
                        
                        
                        <h3>Where Can I Find Android Auto?</h3>
<p>Android Auto is still in it’s early years, but there are several manufacturers who are part of the Open Automotive Alliance, providing either dedicated Android Auto systems or a hybrid system where Auto is part of their on-board media systems. With this option you can choose to run Android Auto or use the manufacturer system.</p>

<p>Auto isn’t locked to new cars, you can buy aftermarket units from third party sound system providers. Pioneer offers a range of Android Auto enabled HUDs, some even support Auto and Car Play (Apple’s competing car system). They’re not cheap, but it’s possible to get these aftermarket units set up in almost any car.</p> 
                         <img src="../../../img/mobile/android_auto_companion_app.jpg"  class="img-responsive center-block" alt="...">
                        
                            </div>


                       <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <h3>   Getting up and Running with the Auto Desktop Head Unit</h3>
                        <p> Google recently released the Android Auto Desktop Head Unit to let developers test their apps without access to a real head unit. This emulator requires some setup, but is an easy way to ensure your app works on Auto./p>
                            <h2>Download the Head Unit</h2>
                              <p>Start by download the desktop head unit inside Android Studio. Open the SDK manager, switch to the SDK Tools tab and look for the Android Auto Desktop Head Unit Emulator. Install this and then potentially restart Android Studio.</p>
                           
                       <img src="../../../img/mobile/android-auto-shu-setup.jpg"  class="img-responsive" alt="...">
                           
                           <h3>Run the Emulator via Your Phone</h3>
                      
                           <p>To work with the head unit you need to connect your phone via USB to your computer. Once connected, enable developer options by clicking on the ‘Build Version’ number seven times. Then in the developer options section enable USB debugging.</p>
                      
                      <img src="../../../img/mobile/android-auto-dhu-debugging.jpg"  class="img-responsive" alt="...">
                      <h2>Set up Android Auto App and Emulator</h2>
<p>Install the Android Auto companion app onto your phone. Open the app and after set up you will reach the start screen.</p>

<p>You also need to unlock developer options inside this app to continue. Do this by tapping the ‘Android Auto’ text 10 times. Now the overflow menu to the right will have a new option, called Start Head Unit Server, click this to start the virtual server.</p>
                           
                            <img src="../../../img/mobile/android-auto-shu-app-set-up222.jpg"  class="img-responsive" alt="...">
                      <h2>Port Forwarding</h2>   
                           <p>You will need to port forward using the Android Developer Bridge (ADB), installed with Android Studio. Run the following command, remember this needs to be run every time you disconnect your phone.</p>
                      
                      </div>
                     
                    
                    </div>
                             
                            <div class="row">
                                  <h1 class="text-center">Start the Display Unit</h1>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
              <p>Now this is set up, you need to find the desktop-head-unit executable. This is the main application that will run the emulator and connect with your phone.</p>

<p>It will be in your /ANDROID_SDK_FOLDER/extras/google/auto folder. Run the application and the emulator should appear. Follow the beginner steps and the emulator will be ready to go. Try a few of the default apps, you can even talk to the emulator.</p>
                             <img src="../../../img/mobile/android-auto-setup-13333.jpg"  class="img-responsive center-block" alt="...">
              <h2>Serious about Safety</h2>
<p>Since users will be interacting with Android Auto as they drive, Google has focused heavily on safety, working with government departments such as the National Highway Traffic Safety Administration (NHTSA) and the U.S. Department of Transportation. Each member of the Open Automotive Alliance (who work with Google on implementation) works with the International Standards Organization (ISO) and Society of Automotive Engineers (SAE). For further information you can visit the Open Automotive Alliance website (they have FAQ section at the bottom).</p>

              <p>Google has tailored the Android experience to ensure that distractions are kept to a minimum and the user has access only to what they need.</p>
                        
<p>You can’t touch your phone when it’s connected to Android Auto. You can double press the multi-task switcher button and switch to another app, but the home button and back buttons won’t get you out of Android Auto. This is to stop people playing with their phones.</p>
                        
                        <img src="../../../img/mobile/android-auto-phone-connected.jpg"  class="img-responsive center-block" alt="...">
                        
                        <p>When interacting with Auto, for example selecting a music track, the UI will not let you drill down anymore than 6 steps. One of the core principals for Auto is ease of use and Google is putting a hard limit on how long you can scroll, click and interact with before you can’t go any further. The system overview drawer docs provide a more visual outline, here is how it looks to the end user.</p>
                        
                         <a href="https://www.sitepoint.com/taking-a-ride-with-android-auto/"> Fonte: sitepoint.com Autor: Simon Codrington Maio 10, 2016</a>
                     </div>
                    </div>




                      </div>
              </article>




               <a href="#topo" class="btn btn-warning" id="botao">Voltar ao topo</a>
           </div>
    </div>

<?php include '../../../templates/footer.php'; ?>
