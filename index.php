<?php

include "conexion.php";
session_start(); 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Referencia libería scroll Css -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Referencia de la hoja de estilo de Css -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/secInfo.css">
        <link rel="stylesheet" href="css/secPasion.css">
        <link rel="stylesheet" href="css/secAbaut.css">
        <link rel="stylesheet" href="css/secExperiencia.css">
        <link rel="stylesheet" href="css/secCursos.css">
        <link rel="stylesheet" href="css/secHistorial.css">
        <link rel="stylesheet" href="css/secContacto.css">
        
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Fonte del Proyecto Raleway -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bree+Serif&display=swap" rel="stylesheet">

  

        <title> Mi Portafolio </title>    
</head>
<body>

<section class="contenedor__principal"> 


        <section class="menu">            
            <div class="img_contenedor">            
                <i id="icon" class="fa-solid fa-bars hamburger icon"></i>                        
            </div>
            <div class="contenedor_enlaces-principal">
            <div class="contenedor_enlaces remove">
              <ul class="list_contenedor">
                <li><a href="#secInfo"> Inicio</a></li>
                <li><a href="#miPasion"> Mi pasión</a></li>
                <li><a href="#abaut"> Acerca de mí</a></li>
                <li><a href="#experiencia"> Experiencia laboral</a></li>
                <li><a href="#cursos"> Cursos y Certificaciones</a></li>
                <li><a href="#historial_academico"> Historal académico y skills</a> </li>
                <li><a href="#contacto"> Contacto</a></li> 
              </ul>          
            </div>
            </div>
            <div class="info fijo">
              <p>Ing. Mauricio Martínez</p>
            </div>
          </section>        

          <section id="secInfo" class="secInfo seccion">
            <div class="title">
            <p>Ing. en <span>Diseño y Desarrollo</span> Web</p>
            <h3>Frontend Developer / Designer UX/UI</h3>
            </div>

            <div class="log_img">
            <div class="perfil_img1">   
                <img src="/assets/foto.JPG"  alt="">         
            </div>
            <div class="log_name">
                <span class="nombre">Mauricio Martínez</span>
            </div>
            </div>

            <div class="text_contact">
            <h1>Desarrollo de Software y Diseño UX / UI <br>Transformando Ideas en Soluciones Digitales Intuitivas, Fusionando Creatividad y Tecnología</h1>
            <img class="perfil_img2" src="/assets/perfil.jpeg" alt="">
            <div class="boton">
                <a href="https://w.app/sO18C4">Contáctame</a>
            </div>
            </div>



        </section>


        <section  id="miPasion"   class="miPasion seccion" data-aos="fade-left" data-aos-duration="3000">
            <h2>Mi pasión</h2>
    
            <div id="contenedor" class="contenedor">
                <button id="botonTodos" class="seleccionado">Todos</button>
                <button id="botonHTML5">HTML5</button>
                <button id="botonCSS">CSS</button>
                <button id="botonJavaScript">JavaScript</button>
                <button id="botonReact">React</button>
                <button id="botonFigma">UX/IX Figma</button>
            </div>
    
            <div class="cards_content" >
    
            <div id="contenidoTodos" >    
                <div id="todos"  class="cards_seccion">
                    <div class="card">
                        <a href="">
                            <img src="/assets/portafolio.JPG" alt="">
                        </a>                
                    </div> 
                    <div class="card">
                        <a href="">
                            <img src="" alt="">
                        </a>                
                    </div>     
                    <div class="card">
                        <a href="">
                            <img src="" alt="">
                        </a>                
                    </div>
                    <div class="card">
                        <a href="">
                            <img src="" alt="">
                        </a>                
                    </div>
                </div>
            </div>
    
    
    
    
            <div id="contenidoHTML5">    
                <p>a</p>              
            </div>
    
            <div id="contenidoCSS">            
                <p>b</p>              
            </div>
    
            <div id="contenidoJavaScript">            
                <p>c</p>              
            </div>
    
            <div id="contenidoReact">            
                <p>d</p>              
            </div>
    
            <div id="contenidoFigma"> 
                <p>e</p>                         
            </div>

        </div>
        </section>



        <section  id="abaut" class="abaut seccion" data-aos="zoom-in" data-aos-duration="3000">
        
            <div class="abaut_info">
            <h2>Acerca de mí</h2>
            <p>Saludos, mi nombre es Mauricio, y soy Ingeniero en Desarrollo de Software con una certificación en Diseño UX/IX otorgada por Google. Soy una persona apasionada por el aprendizaje continuo y siempre estoy en busca de nuevos desafíos y oportunidades para crecer profesionalmente.</p>
            <p>Estoy aquí para ofrecer mis habilidades y experiencia en desarrollo de software y diseño a aquellos que buscan soluciones de calidad.</p>
            <p>Creo firmemente en la importancia de la colaboración y el trabajo en equipo, y estoy entusiasmado por la oportunidad de ser un recurso valioso para ti.</p>
            <p>Si estás interesado en mi perfil y crees que puedo ser de ayuda en tu proyecto, no dudes en contactarme. Estoy deseando colaborar y contribuir al éxito de tu iniciativa."   </p>
            </div>
    
            <div class="abaut_trayectoria">
                <table border="1">
                    <tr>
                        <th>Resumen de trayectoria</th>
                        <th>Experiencia</th>
                    </tr>
                    <tr>
                        <td>Atención a Cliente</td>
                        <td class="celda_centrada">9 años</td>
                    </tr>
                    <tr>
                        <td>Analista de Redes</td>
                        <td class="celda_centrada">3 años</td>
                    </tr>
                    <tr>
                        <td>Manejo de resguardo y archivo</td>
                        <td class="celda_centrada">3 años</td>
                    </tr>
                    <tr>
                        <td>Mesa de control</td>
                        <td class="celda_centrada">1 año</td>
                    </tr>
                    <tr>
                        <td>Ventas curzadas e intangibles</td>
                        <td class="celda_centrada">2 años</td>
                    </tr>
                    <tr>
                        <td>Programación</td>
                        <td class="celda_centrada">1 a 2 años</td>
                    </tr>
                    <tr>
                        <td>Diseño UX/IX</td>
                        <td class="celda_centrada">0 a 6 meses</td>
                    </tr>
                </table>
    
                <div class="abaut_link">
                    <span>Visita mi evaluación Online</span><a href="https://secure.plum.io/p/3OEYSEDl9dUHyw35pebg9g" target="_blank">Aquí</a>
                </div>
            </div>
    
        </section>  

    <section id="experiencia"  class="experiencia seccion" data-aos="fade-right" data-aos-duration="3000">
        <h2>Experiencia laboral</h2>

        <div id="contenedor_exp" class="contenedor_exp">
            <button id="btnTodos" class="seleccionado_exp">Todos</button>
            <button id="btnAtn">Atención a clientes</button>
            <button id="btnVentas">Ventas</button>
            <button id="btnMesa">Mesa de servicio</button>
            <button id="btnCapa">Capacitación</button>
            <button id="btnProf">Práctica Profesional</button>
            <button id="btnAnalist">Analista</button>
        </div>


        <div class="descripcion_exp">   
            <div id="contTodos" class="box_conteiner">   
                <div class="box_filter">

                    <div class="box_coment">
                        <p>Antes de emprender mi carrera de programación trabajaba en servicio a cliente, analista de contratos, archivo digital agente de contacto y ventas, en difernetes empresas.</p>
                    </div>

                    <div class="box_card" id="box_card">

                            <div class="card-container">
                                <div class="card_job">
                                    <div class="card_front">
                                        <img src="/assets/banamex.JPG" alt="">
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                    <div class="card_back">
                                        <h3>Banamex</h3>
                                            <div class="box_info">
                                                <p><span>Actividades:</span> Actividades</p>
                                                <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                                <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                                <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                            </div>                                        
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                </div>
                            </div>    

                            <div class="card-container">
                                <div class="card_job">
                                    <div class="card_front">
                                        <img src="/assets/banamex.JPG" alt="">
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                    <div class="card_back">
                                        <h3>AMEX</h3>
                                            <div class="box_info">
                                                <p><span>Actividades:</span> Actividades</p>
                                                <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                                <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                                <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                            </div>                                         
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                </div>
                            </div>    

                            <div class="card-container">
                                <div class="card_job">
                                    <div class="card_front">
                                        <img src="/assets/banamex.JPG" alt="">
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                    <div class="card_back">
                                        <h3>AMEX</h3>
                                            <div class="box_info">
                                                <p><span>Actividades:</span> Actividades</p>
                                                <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                                <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                                <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                            </div>                                         
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                </div>
                            </div>   


                            <div class="card-container">
                                <div class="card_job">
                                    <div class="card_front">
                                        <img src="/assets/banamex.JPG" alt="">
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                    <div class="card_back">
                                        <h3>AMEX</h3>
                                            <div class="box_info">
                                                <p><span>Actividades:</span> Actividades</p>
                                                <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                                <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                                <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                            </div>                                         
                                        <i class="fa-solid fa-right-long"></i>
                                    </div>
                                </div>
                            </div>   

                            </div>
                    </div>                    
                </div> 
            </div>


            <div id="contAtn"><span>

                <div class="box_filter">

                    <div class="box_coment">
                        <p>Cuento con experiencia en Atención a clientes desde hace más de 10 años.</p>
                    </div>

                    
                    <div class="box_card" id="box_card">

                        <div class="card-container">
                            <div class="card_job">
                                <div class="card_front">
                                    <img src="/assets/banamex.JPG" alt="">
                                    <i class="fa-solid fa-right-long"></i>
                                </div>
                                <div class="card_back">
                                    <h3>Banamex</h3>
                                        <div class="box_info">
                                            <p><span>Actividades:</span> Actividades</p>
                                            <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                            <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                            <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                        </div>                                        
                                    <i class="fa-solid fa-right-long"></i>
                                </div>
                            </div>
                        </div>    

                        <div class="card-container">
                            <div class="card_job">
                                <div class="card_front">
                                    <img src="/assets/banamex.JPG" alt="">
                                    <i class="fa-solid fa-right-long"></i>
                                </div>
                                <div class="card_back">
                                    <h3>AMEX</h3>
                                        <div class="box_info">
                                            <p><span>Las actividades que desempeñe fueron:</span> Actividades</p>
                                            <p><span>Trayectoria:</span> Únicamente de laboré de atención a clientes</p>
                                            <p><span>Periodo Laboral:</span> 2020 a 2024</p>
                                            <p><span>Motivo de separación:</span> Trabajo Temporal</p>
                                        </div>                                         
                                    <i class="fa-solid fa-right-long"></i>
                                </div>
                            </div>
                        </div>  

                    </div>
                </div>        
            </div> 



        </div>





        <div id="contVentas"><span>b</span></div> 
        <div id="contMesa"><span>c</span></div> 
        <div id="contCapa"><span>d</span></div> 
        <div id="contProf"><span>eeeeee</span></div> 
        <div id="contAnalist"><span>f</span></div> 


        <div class="exp_link">
            <span>Descarga mi CV: </span>
            <a href="/assets/CV-Mauricio-Tadeo-Martinez-Blanco_2023.pdf" download="Mi_CV_2023.pdf">Aquí</a>
        </div>


    </section>


   

    <section id="cursos" class="cursos seccion">
 
        <h2>Cursos y Certificaciones</h2>         
        <h3>ALURA / ORACLE</h3>          
       
        <div class="cont_cursos" data-aos="fade-left" data-aos-duration="3000">
            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            
            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

          

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            
            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

        </div>
   
        

        <h3>GOOGLE</h3>

        <div class="cont_cursos" data-aos="fade-right" data-aos-duration="3000">
            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">                    
                <p>React</p>
            </div>

            
            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

            <div class="card_cursos">
                <img src="/assets/portafolio.JPG" alt="">
                <p>React</p>
            </div>

        </div>
        
    </section>


    <section id="historial_academico" class="historial_academico seccion">

        <div class="historial" data-aos="flip-left" data-aos-duration="3000">
            <h2>Historial académico</h2>
            <div class="cont_academico">             
                <div class="card_academico">
                    <img src="/assets/Historial académico/unadm.jpg" alt="">
                    <div class="card_academico-info">
                    <p>UNADM</p>
                    <p>2018 - 2023</p>
                    </div>
                </div>

                <div class="card_academico">
                    <img src="/assets/Historial académico/oracle.JPG" alt="">
                    <div class="card_academico-info">
                    <p>Oracle</p>
                    <p>2022 - 2023</p>
                    </div>
                </div>

                <div class="card_academico">
                    <img src="/assets/Historial académico/inroads.JPG" alt="">
                    <div class="card_academico-info">
                    <p>Inroads</p>
                    <p>2022 - 2023</p>
                    </div>
                </div>

            </div>

            <h3>Otros programas:</h3> 

            <div class="cont_otros">

                <div class="card_otros">
                    <div class="card_otros-img">
                    <img src="/assets/Programas/camtasia.JPG" alt="">
                    </div>
                    <p>Camtasia Studio</p>
                </div>                    
                <div class="card_otros">
                    <div class="card_otros-img">
                    <img src="/assets/Programas/figma.JPG" alt="">
                    </div>
                    <p>Figma</p>
                </div>
                <div class="card_otros">
                    <div class="card_otros-img">
                    <img src="/assets/Programas/visual.JPG" alt="">
                    </div>
                    <p>Visual Studio Code</p>
                </div>
                <div class="card_otros">
                    <div class="card_otros-img">
                    <img src="/assets/Programas/google_suite.JPG" alt="">
                    </div>
                    <p>Google Suite</p>
                </div>
                <div class="card_otros">
                    <div class="card_otros-img">
                    <img src="/assets/Programas/microsoft_office.JPG" alt="">
                    </div>
                    <p>Microsoft Office</p>
                </div>

            </div>

        </div>

        <div class="skills" data-aos="flip-right" data-aos-duration="3000">
            <h2>Mis Skills</h2>

            <div class="cont_skill">

                <div class="card_skill">
                    <p>HYML: </p>
                    <div id="skill_avanzado" class="card_skill-barra">                            
                        <span>Avanzado</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>CSS: </p>
                    <div id="skill_avanzado" class="card_skill-barra">                            
                        <span>Avanzado</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>Javascript: </p>
                    <div id="skill_intermedio" class="card_skill-barra">                            
                        <span>Intermedio</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>PHP: </p>
                    <div id="skill_intermedio" class="card_skill-barra">                            
                        <span>Intermedio</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>SQL: </p>
                    <div id="skill_intermedio" class="card_skill-barra">                            
                        <span>Intermedio</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>React: </p>
                    <div id="skill_basico"  class="card_skill-barra">                            
                        <span>Básico</span>                        
                    </div>
                </div>

                <div class="card_skill">
                    <p>Inglés: </p>
                    <div id="skill_basico"  class="card_skill-barra">                            
                        <span>Básico</span>                        
                    </div>
                </div>

            </div>

        </div>
        
        </div>
    </section>



    
    <section id="contacto" class="contacto">
        <h2>Contacto y Redes sociales</h2>

            <div class="cont_redes">
                <div class="card_redes">
                    <a href="https://w.app/sO18C4">
                    <img src="/assets/Redes/watts.JPG" alt="">
                    </a>
                </div>
                <div class="card_redes">
                    <a href="https://www.behance.net/mauricimartine64" target="_blank">                        
                    <img src="/assets/Redes/behence.JPG" alt="">
                    </a>
                </div>
                <div class="card_redes">
                    <a href="https://www.linkedin.com/in/ing-mauricio-mtz/recent-activity/all/" target="_blank">
                    <img src="/assets/Redes/linkedin.JPG" alt="">
                    </a>
                </div>

                <div class="card_redes">
                    <img src="/assets/MiQR.svg" alt="">
                </div>

                <div class="cont_redes-info">
                <i class="fa-solid fa-envelope"></i>                    
                <p>ing.software.mauricio.martinez@gmail.com</p>
                </div>
            </div>
    </section>

  </section>


     <!-- Script del documento JavaScript -->

<script src="/js/funciones.js"></script>
<script src="/js/expLaboral.js"></script>
<script src="/js/cards.js"></script>


 <script src="https://kit.fontawesome.com/0b11d2741f.js" crossorigin="anonymous"></script> 
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
    AOS.init();
  </script>
</body>
</html>
