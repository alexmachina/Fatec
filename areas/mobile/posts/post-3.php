<?php
$path = "../../../";
include '../../../templates/header.php'; ?>


    <div class="container-fluid postGeral post3">
          <div class="row">

                    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
         <div class="container">
         <div class="row">

             <h1 class="text-center" id="topo">Gerenciamento de dependência com o Gerenciador de Pacotes Swift</h1>
             <div class="thumbnail container">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

             <img class="img-circle center-block img-responsive" src="../../../img/mobile/IMG-20160118-WA0005.jpg" alt="..." id="minhafoto" class="img-responsive">

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
                        <h2>Gerenciamento de dependência com o Gerenciador de Pacotes Swift</h2>
                        
                        <p> 
Swift’s journey into a fully fledged cross-platform language continues as it’s contributors focus on the version 3 release. Any language that wants a long-term existence needs a way of adding functionality that doesn’t require the core developers to add every request. This is typically in the form of package or dependency management, and the Swift Package Manager (SPM) will be one of the many features added to Swift 3.</p>
                        
                       
<p>But something not being officially released has never stopped inquisitive developers experimenting in the past. In this article I will introduce the SPM, show you how to install it and existing packages, and how to create your own.
                        </p>
                        
                        <h3>Living on the Edge with the Swift Package Manager</h3>

<p>The SPM is not part of the current official Swift release and you will need to install trunk development snapshots of V3 to use it. This is not too difficult and you can find instructions here.</p>
                        
                        
<p>As installing this snapshot could break your setup for production app development, I recommend you install swiftenv, which lets you switch between installed versions of Swift and is super useful for experimenting with Swift versions. Once you have installed swiftenv and you have a trunk development release active, check you have the package manager by running:</p>
                        
                        <p>You will hopefully see something like Apple Swift Package Manager 0.1.</p>

<p>If you want to use XCode instead then it will manage different Swift versions for you. Open XCode -> Preferences and set the Toolchains under the Components section.You will hopefully see something like Apple Swift Package Manager 0.1.</p>

<p>If you want to use XCode instead then it will manage different Swift versions for you. Open XCode -> Preferences and set the Toolchains under the Components section.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                         <img src="../../../img/mobile/1461757420Screenshot-2016-04-27-13.40.51.png" class="img-responsive center-block thumbnail">
                        
                        
                  
<p>Note: Swift is undergoing rapid development and things change all the time, breaking projects. For this tutorial I used the February 8th snapshot for greater compatibility. Now you can see why I mentioned how to switch versions and you will do it a lot until version 3.</p>
                                <a href="https://www.sitepoint.com/introducing-the-swift-package-manager/"> Fonte: sitepoint.com Autor: Chris Ward Abril 27, 2016</a>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <h3 class="text-center">Using Existing Packages</h3>
                        
                       <p>Many existing Swift packages are available, but currently no central listings service like NPM exists, so finding them can be hard. One option is The IBM Swift Package Catalog, but it contains a mixture of CocoaPods, Carthage and Swift packages. I expect there will be an ‘official’ list sometime in the future.

To add an existing package as a dependency to a project, create a file named Package.swift and add the following:</p>
                        
               <h3 class="text-center">Creating Your Own Package</h3>         
  <p></p>
                        
  <p>You construct a Swift package in the same way as a ‘normal’ application. But a package generally consists of and includes source files located in a Sources directory. The sample application provided by Apple is a great example to learn the potential.</p>
 <p>In this example, the PlayingCard package defines a PlayingCard. Then the DeckofPlayingCards package imports the PlayingCard package and uses it’s methods and objects to create a randomly shuffled Deck of PlayingCards.</p>
                     
  
                            </div>
                            

                       
                          
                    
                        </div>
                    </div>

                      


                  </div>


              </article>
        
        
         <a href="#topo" class="btn btn-warning" id="botao">Voltar ao topo</a>
            </div>
    </div>

<?php include '../../../templates/footer.php'; ?>
