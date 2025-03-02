
<?php 
include(__DIR__ . '/../templates/header.php');
?>

   

    <section class="sectionOne">
        <Section class="sectionOne-Container">
            <section class="sectionOne-Text">
                <div class="sectionOne-Text-Container">
                    <span class="ticket">
                    </span>
                    <h1 id="h1">Agencia  Digital</h1>
                    <h2 class="paragrafHeader">Posicionamos tu marca donde merece estar: en la cima del mundo digital.</h2>
                </div>
                <button style="--clr: #7808d0" class="button exploreCta" href="#">
                <span class="button__icon-wrapper">
                    <svg
                    width="10"
                    class="button__icon-svg"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 15"
                    >
                    <path
                        fill="currentColor"
                        d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                    ></path>
                    </svg>

                    <svg
                    class="button__icon-svg button__icon-svg--copy"
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    fill="none"
                    viewBox="0 0 14 15"
                    >
                    <path
                        fill="currentColor"
                        d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                    ></path>
                    </svg>
                </span>
                Explorar Todo
                </button>

            </section>
        </Section>
            <div class="content-button-scroll">
                <button class="btn-scroll">
                    <div class="scroll"> </div>
                </button>
            </div>
    </section>
    <section class="sectionTwo">
        <section class="sectionTwo-container">
            <article class="sectionTwo-paragraf">
                <h2 class="paragrafPrincipal">
                <span class="spanH2">Todo el mundo quiere ser escuchado.</span> <br><br>
                Con una rara combinación de experiencia práctica en diseño,
                vídeos, desarrollo y diseño de software enfocado a webs, Ux Desing 
                y Ui Desing que abarcan casi una decada, nos especializamos en
                proporcionando soluciones creativas que interrumpen
                la estática. <br>
                Si quieres que tu mensaje Destaque en lugar de que se 
                Pierda en el ruido, <br><br> <span class="spanH22">quizás nosotros también podamos ayudarte.</span>
                </h2>
            </article>
        </section>
    </section>
    <section class="sectionTwo-Experience">
                <h2 class="title-section-Experience">
                    habilidades profecionales
                </h2>
                <section class="section-display-two">
                    <div class="section-two-Video-content">
                        <section class="videoProductos">
                            <img src="../assets/img/smile.jpg" class="video"></img>
                        </section>
                    </div>
                    <div class="container-SectionTwo-experience">
                            <section class="sectionTwo-product visual">
                                <p class="title-sections titleVisual">visual</p>
                                <article class="div-Photo">
                                    <h3>Photo Producto</h3>
                                </article>
                                <article class="div-Video">
                                    <h3>videoMaker</h3>
                                </article>
                            </section>

                            <section class="sectionTwo-product desing">
                                <p class="title-sections">Diseño</p>
                                <article class="div-Diseñoweb">
                                    <h3>Diseño web</h3>
                                </article>
                                <article class="div-branding">
                                    <h3>Branding</h3>
                                </article>
                            </section>

                            <section class="sectionTwo-product words">
                                <p class="title-sections">words</p>
                                <article class="div-Seo" >
                                    <h3>Seo</h3>
                                </article>
                                <article class="div-Socialmedia">
                                    <h3>Social Media</h3>
                                </article>
                            </section>
                        </div>
                </section>
    </section>

    <section class="sectionThree">
        
        <section class="experience-sectionThree">
            
            <div class="sectionThree-content">

                <section class="hero-sectionThree">
                    <div class="title-sectionthree">
                        <h3>Servicios</h3>
                    </div>
                    <span></span>
                    <div class="">
                        <p>Lo que ofrecemos.</p>
                    </div>
                </section>
               
                <div class="sectionthree-skills">
                   
                    <article class="divContentSkills">
                        <h4>Diseño Web <span id="arrowSpan"></span> </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto tenetur porro eligendi eveniet, vero earum?</p>
                    </article>
                    
                    <article class="divContentSkills">
                        <h4>Auditoria Seo <span id="arrowSpan"></span> </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto tenetur porro eligendi eveniet, vero earum?</p>
                    </article>
                    
                    <article class="divContentSkills">
                        <h4>Dirección Audiovisual <span id="arrowSpan"></span> </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto tenetur porro eligendi eveniet, vero earum?</p>
                    </article>
                    
                    <article class="divContentSkills">
                        <h4>Marketing Digital <span id="arrowSpan"></span> </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto tenetur porro eligendi eveniet, vero earum?</p>
                    </article>
                    
                
                </div>
            
            </div>
        
        </section>
    
    </section>
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- la propiedad __DIR__ nos permite agregar de manera satisfactoria, el llamado de la carpeta, teniendo en cuenta que muchos servidores de host tiene diferentes maneras de solicitar o hcer el llamado de estos archivos -->
    <?php include(__DIR__ . '/../templates/footer.php'); ?> 