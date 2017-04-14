<?php
$path = "../../../";
include '../../../templates/header.php'; ?>


    <div class="container-fluid postGeral post6">
          <div class="row">


                               <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
         <div class="container">
         <div class="row">

             <h1 class="text-center" id="topo">Explorando Os Elementos UI Do Ubuntu Phone</h1>
             <div class="thumbnail container">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

             <img class="img-circle center-block" src="../../../img/mobile/IMG-20160118-WA0005.jpg" alt="..." id="minhafoto" class="img-responsive">

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
                        <h2>Explorando Os Elementos UI Do Ubuntu Phone</h2>
                      
                        <h3>Typography & Text</h3>
                        <p> 
Ubuntu Phone uses their own font, unsurprisingly called ‘Ubuntu’. It’s one of the most popular open fonts available and the chances are that you will stumble upon a new project or startup using the font from time to time.</p>
                        
                       <img src="../../../img/mobile/textubuntophone.jpg" alt="..." class="img-responsive center-block thumbnail">
                       
                        
                        
                        
<p>To keep in line with the style guide when using the Ubuntu font, you need to follow these rules:</p>

                        <p>‘Light weight’ is the primary weight for headers and body text.</p>
<p>Use ‘Medium’ to emphasize one or two words or to highlight an action, such as a warning in an alert box.</p>
<p>It’s recommended not to use italics in the UI, as according to Canonical, it looks ‘feeble’, and affects readability.</p>
<p>You are encouraged to use ‘Medium’ weight instead of ‘Bold’.</p>
                        
                         <img src="../../../img/mobile/ubuntophoneform.jpg" alt="..." class="img-responsive center-block thumbnail">
                        
                        <p>There’s a specification covering text inputs which you can read in detail in the Ubuntu style guide, but I’ll summarize the main elements.</p>

<p>There are several text input states, which is a common UX principle and almost identical to Android.</p>
<p>Text Fields allow users to input a single line of text, with or without data validation. They can be specific for passwords or numeric values or non-editable with a disabled text area. Read the API Documentation for Text fields for more details.</p>
<p>Text areas (Multi-line) automatically break to a new line for overflow text, creating more space for the user to write. Read more in its API Documentation.</p>
                       
             <p>Here’s a neat reference on the different sizes used for the text size, the default is ‘medium’.</p>           
                        <img src="../../../img/mobile/ubuntophonesize.jpg" alt="..." class="img-responsive center-block thumbnail">
                        
                        
                      </div>
                        <div  class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <h3>Colors</h3>
<p>There are certain colors used for core functions in Ubuntu, you can grab them from this table.</p>

<p>Once you have installed both, open the file structure for any project and point it to the Java 8 runtime.</p>
                        
                         <img src="../../../img/mobile/ubuntophonecolors.jpg" alt="..." class="img-responsive center-block thumbnail">
                           
                  
<p>You will stumble upon the ‘Aubergine’ color often in the style guide. It’s used to highlight nouns, such as a place or contact name. This makes the text stand out from the light gray background.</p>

<p>It’s important to use a light and neutral color for a background, so the content itself gets all the attention, not the background.</p>
           
                      </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">           
                <h3> Iconography</h3>

                <p>Ubuntu has a unique approach to icons, which is especially interesting for those who are not fans of the flat design philosophy popular for the past few years</p>

                 <img src="../../../img/mobile/ubntoiconcamera.png" alt="..." class="img-responsive thumbnail">
                
                <p>The key element here is the Ubuntu Shape, which is a square with rounded corners, and the icon is automatically clipped according to it. After clipping, an inner shadow is applied to make the icon appear debossed in the UI. The useful rectangular area must be opaque, but the two 16-pixel high strips at the top and bottom of the canvas can be transparent.</p>
                
<p>Icons in Ubuntu also consist of a ‘Paper Texture’ (The bitmap belongs to a specific layer called ‘Texture’) and a vertical background gradient that is two colors of the same hue. The brighter of the two is at the top edge where a subtle paper texture is overlaid on it.</p>

                <img src="../../../img/mobile/ubuntoicongradientes.jpg" alt="..." class="img-responsive center-block thumbnail"> 
                
                
<p>‘Folds’ are the defining features of the Suru icon theme. An application has one of three folds visible upon the background. Standard folds are vertical, horizontal or 45-degree oriented and run through the center of the icon. Their place and direction can vary to follow and highlight lines in the pictogram or the flat shapes. They can also be used as part of the story.</p>
                 <img src="../../../img/mobile/ubuntoiconletter.png" alt="..." class="img-responsive  thumbnail">
                <h3> Responsiveness</h3>
                
<p>In a unique move, Ubuntu has adapted a framework that retains a uniformed experience with measurement units defined by the grid. The grid unit defines a visual rhythm in Ubuntu and should be used for all measurements including sizes of elements, spacing and margins etc. All measurements should use multiples of 1 GU (Grid Unit), for most laptops that is 8px, retina laptops 16px, and for most mobile phones and tablets, 18px. The grid layout works by dividing the screen real estate into grid units.</p>
                
<p>Note: Dp (density independent pixel) is also available in case you need a smaller unit than GU. 1dp typically translates to 1 pixel on most devices.</p>

<p>Once you understand how to use Grid Units, you can make yourself familiar with the design philosophy about responsiveness, specified in the style guide.</p>

                 <h3> Ubuntufied?</h3>
                
<p>With Firefox OS for mobile phones abandoned by Mozilla, enthusiasm and confidence for Canonical’s plans aren’t exactly high. But to me, the idea of being locked into a Google-Apple duopoly is frightening, so it’s always refreshing to see new contenders with the courage to try something new.</p>  
                <p>What do you think of Ubuntu’s design specs?</p>
                        
                        
                
                
                <a href="www.sitepoint.com/ubuntu-phone-ui-elements/"> Fonte: sitepoint.com Autor: Elio Qoshi, Março 23, 2016.</a>
                      
                      </div> 
                        
                 
                        </div>
                

                      
                    

                  </div>


              </article>
  


                <a href="#topo" class="btn btn-warning" id="botao">Voltar ao topo</a>
           </div>
    </div>

<?php include '../../../templates/footer.php'; ?>
