<?php
$path = "../../../";
include '../../../templates/header.php'; ?>

    <div class="container-fluid postGeral post2">
          <div class="row">
  
    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
         <div class="container">
         <div class="row">

             <h1 class="text-center">O que os desenvolvedores podem esperar em Android N?</h1>
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

                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="conteudo">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <h2>O que os desenvolvedores podem esperar em Android N?</h2>
                        <img src="../../../img/mobile/androidn_logo.jpg" class="img-responsive center-block" >
                        <h3>What’s There to Know about Android N?</h3>
                        <p> 
Usually Google announces the next version of Android during the I/O conference in May, but the timeline for Android N is different. Starting from March, Google will be releasing successive previews to give developers time to prepare their apps for a compatible N release. The finalization of Android N (and it’s official naming) won’t be completed until the third quarter of the year</p>
                        
                       <h3> Downloading and Installing the Preview</h3>
<p>Getting Android N involves several steps outlined in Google’s getting started guide, but here’s a quick summary based on my experiences.

Download Android Studio 2.1
Download Android Studio 2.1, which is currently in preview. Don’t download 2.0, it has issues with Java 8. If you want to keep your current Android Studio version (for example 1.5) but also test Android N, you should edit your existing Android Studio application name so you can run both.</p>
                        <p>Once you’ve installed the Android Studio preview, set automatic updates from the ‘Canary Channel’ so you can update your Android N image (and it will update regularly).</p>

<p>Download the Android N Image
Open up the SDK manager and search for the Android N image, choosing the Intel x86 Atom System Image version. Throughout my testing I could never get the Intel x86 Atom_64 System Image to work but your experiences may vary.</p>
                       
                        
                        <img src="../../../img/mobile/AndroidN_install_instructions_2.jpg" class="img-responsive center-block thumbnail">
                      </div>
                        <div  class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <h3>Get the Java 8 JDK / JRE</h3>
<p>To compile apps for Android N you will need the Java 8 Development Kit and the Java 8 Runtime Environment, as parts of Android Studio 2.1 require it.</p>

<p>Once you have installed both, open the file structure for any project and point it to the Java 8 runtime.</p>
                        
                         <img src="../../../img/mobile/1458556807AndroidN_install_instructions_3.jpg" class="img-responsive center-block thumbnail">
                           
                  <h3> Update Gradle</h3>
<p>Open up any new project inside of Android Studio 2.1 and open build.gradle to check you’re targeting Android N. For all my tests I found the easiest way was to specify that the app would only run with Android N:</p>
                        
                       <p> android {</p>
  <p>compileSdkVersion 'android-N'</p>
  <p>buildToolsVersion 24.0.0 rc1</p>
 <p> ...</p>

    <p>defaultConfig {</p>
     <p>minSdkVersion 'N'</p>
     <p>targetSdkVersion 'N'</p>
     <p>...</p>
 <p></p> }
  <p>...</p>
<p>}</p>
                      </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">           
         <h3> With this complete you should be able to build your app and see the glory that is Android N!</h3>

<p>New Features</p>
<p>Security Improvements</p>
<p>Google are trying hard to improve Android’s bad reputation for security including:</p>

<p>Direct Boot: A new mode for when a device is on, but locked. This allows certain apps access, but not others.
File Base Encryption: For fine grained encryption of individual folders and files, instead of complete disk blocks.
Media Framework Hardening: After the stagefright scare, media handling is broken up into individual components instead of one large component offering too many permissions to a device.</p>
<p>Multi-Window & Freeform Mode</p>
<p>Multi-Window support has been something that device manufacturers have wanted in Android for some time. Multi-Window (also know as Multi-Tasking) lets the user share the screen space by showing two or more apps simultaneously.</p>

<p>These apps can be shown side-by-side or one-above-the-other to let users switch back and forth between multiple tasks. For example, having a web browser open alongside a navigation app.</p>

<p>With Android N, Google is making this a native feature. Look at the screenshot below showing Chrome running side by side Google Maps in Split-screen mode.</p>              
                        
                        <img src="../../../img/mobile/1458556938AndroidN_multiwindow.jpg" class="img-responsive center-block">
                
                
                <a href="https://www.sitepoint.com/what-can-developers-expect-in-android-n/"> Fonte: sitepoint.com Autor: Codrington Simon Codrington, Maio 24, 2016
</a>
                      </div> 
                        
                 
                        </div>
                    </div>

                      


                  </div>


              </article>


               <a href="<?php echo $path; ?>/areas/mobile/index.php" class="btn btn-warning">Voltar</a>
            </div>
    </div>

<?php include '../../../templates/footer.php'; ?>
