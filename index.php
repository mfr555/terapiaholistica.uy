<?php
  require 'vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
  $siteKey = htmlspecialchars($_ENV['RECAPTCHA_SITEKEY'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Terapia Holística | Bienestar Emocional - Reiki - Flores de Bach | Sebastián Durán</title>
  <meta name="description" content="Terapia Holística: Terapia floral, Reiki, Flores de Bach, esencias florales, bienestar emocional y energético en sesiones presenciales y virtuales.">
  <meta name="keywords" content="terapia holística, terapia floral, flores de Bach, Reiki, esencias florales, bienestar, salud emocional, sesiones virtuales, sesiones presenciales, Sebastián Durán">
 
  <?php include('template/head.php') ; ?>  

  <!-- Google ReCaptcha v3 script -->
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $siteKey; ?>"></script>
</head>

<body>
  <?php include('template/navbar.php') ; ?>

  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 align-self-center">
          <div class="header-text">
            <img class="logo-header" src="assets/logo/completo-extra.svg" alt="Terapia Holística Sebastián Durán">
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Contáctanos!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/hoja-toallas.webp" alt="Flores de Bach">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="our-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>SERVICIOS</h6>
            <h4>Terapia <em>Holística</em></h4>
            <p>Todo lo que necesitas saber sobre nuestras terapias.</p>
          </div>
        </div>

        <div class="d-flex justify-content-center row">
          <div class="card col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/images/flores-bach1.webp" class="left-image img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Terapia Floral Integrada</h4>
                  <h5>¿Qué es la Terapia Floral?</h5>
                  <!--p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p-->
                  <p>
                    La terapia floral es un método natural que utiliza esencias extraídas de flores silvestres para equilibrar emociones, pensamientos y estados de ánimo. No actúa sobre el cuerpo físico, sino sobre el campo energético y emocional de la persona, ayudando a armonizar desde adentro hacia afuera.
                    Es una herramienta segura, sin contraindicaciones ni efectos secundarios, compatible con cualquier tratamiento médico o terapéutico.
                  </p>
                  
                  <h5>¿Cómo trabajo?</h5>
                  <p>
                  En cada consulta, realizo una entrevista personalizada en un espacio de escucha y confianza. A partir de lo que la persona comparte, selecciono las esencias más adecuadas según su estado emocional y sus necesidades actuales.
                  </p>
                  <p>
                  Trabajo con tres sistemas florales reconocidos por su profundidad y especificidad:
                  </p>
                  <h5>Sistema Bach</h5>
                    <p>El sistema clásico, creado por el Dr. Edward Bach en Inglaterra. Se enfoca en armonizar emociones básicas como el miedo, la tristeza, la indecisión, la culpa o la falta de confianza.
                  </p>
                  <h5>Sistema California</h5>
                    <p>Más contemporáneo, este sistema trabaja emociones relacionadas con vínculos, autoestima, creatividad, trauma infantil o procesos de cambio profundo.
                  </p>
                  <h5>Sistema Bush (australiano)</h5>
                    <p>Especializado en emociones más actuales, dinámicas familiares, adaptación al entorno, claridad mental y conexión espiritual.
                  </p>
                  <p>
                    A veces uso un solo sistema, y en otros casos los combino según la complejidad de la consulta.
                  </p>
                  
                  <h5>¿Para qué puede ayudarte?</h5>
                  <ul>
                    <li>Ansiedad, estrés o insomnio</li>
                    <li>Cambios importantes en la vida</li>
                    <li>Duelos y pérdidas</li>
                    <li>Miedos o fobias</li>
                    <li>Baja autoestima o falta de motivación</li>
                    <li>Tristeza profunda o desgano</li>
                    <li>Dificultades en relaciones</li>
                    <li>Procesos de sanación física o emocional</li>
                  </ul>
                  
                  <h5>Modalidad de atención</h5>
                  <ul>
                    <li>Consultas presenciales y online</li>
                    <li>Atención personalizada y con seguimiento</li>
                    <li>Turnos coordinados previamente por WhatsApp o correo</li>
                  </ul>
                  
                  <h5>En palabras simples</h5>
                  <p>
                    La Terapia Floral no cambia lo que vivís, pero sí cómo lo vivís. Te ayuda a atravesar tus procesos con más claridad, serenidad y fuerza interior.
                  </p>
                  
                </div>
              </div>
            </div>
          </div>  
          
          <div class="card col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/images/reiki-hands.webp" class="left-image img-fluid" alt="Reiki">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Reiki</h4>
                  <h5>¿Qué es el Reiki?</h5>
                  <p>
                    Reiki es una técnica japonesa de sanación natural que utiliza la imposición de manos 
                    para canalizar energía vital. Esta energía actúa sobre el cuerpo físico, emocional, 
                    mental y espiritual, promoviendo la relajación profunda, el equilibrio interior y la 
                    activación de la capacidad natural de autosanación que todos tenemos.
                  </p>

                  <h5>La palabra Reiki significa:</h5>
                  <ul>
                    <li><b>Rei</b>: energía universal</li>
                    <li><b>Ki</b>: energía vital que fluye en todo ser vivo</li>
                  </ul>

                  <p>
                    Es una práctica segura, no invasiva y complementaria a cualquier tratamiento médico o psicológico.
                  </p>

                  <h5>¿Cómo funciona una sesión?</h5>

                  <p>
                    Durante la sesión, la persona se recuesta en una camilla y entra en un estado de relajación 
                    profunda mientras el terapeuta aplica sus manos en diferentes puntos del cuerpo, permitiendo 
                    que la energía fluya hacia donde más se necesita.
                  </p>

                  <h5>Cada sesión puede generar sensaciones como:</h5>
                  <ul>
                    <li>Calor o frío en ciertas zonas</li>
                    <li>Liberación emocional</li>
                    <li>Profunda paz interior</li>
                    <li>Sueño reparador</li>
                  </ul>

                  <p><i>Al finalizar, muchas personas expresan sentirse más livianas, centradas y en calma.</i></p>

                  <h5>Reiki presencial</h5>
                  <p>
                    Las sesiones presenciales se realizan en un ambiente tranquilo, con música suave y aromas 
                    que invitan al descanso y a la conexión con uno mismo.
                  </p>
                  <p>Es ideal si buscás:</p>
                  <ul>
                    <li>Reducir el estrés y la ansiedad</li>
                    <li>Acompañar procesos emocionales o físicos</li>
                    <li>Mejorar el descanso</li>
                    <li>Equilibrar tus centros energéticos (chakras)</li>
                  </ul>

                  <h5>Reiki a distancia</h5>
                  <p>
                    El Reiki no está limitado por el espacio. También puede enviarse a distancia, con la misma 
                    efectividad, ya que la energía no necesita contacto físico para actuar.
                  </p>
                  <p>Solo se requiere:</p>
                  <ul>
                    <li>Un nombre completo y una breve intención (motivo de la sesión)</li>
                    <li>Un horario acordado en el que la persona pueda estar tranquila y receptiva</li>
                  </ul>
                  
                  <p>
                    Se puede realizar desde cualquier lugar del mundo, y es especialmente útil en situaciones donde 
                    la persona no puede asistir presencialmente, o para niños, personas hospitalizadas o con movilidad reducida.
                  </p>
                  
                  <h5>Beneficios del Reiki</h5>
                  <ul>                    
                    <li>Relajación profunda</li>
                    <li>Alivio del dolor físico</li>
                    <li>Mejora del sueño</li>
                    <li>Claridad mental y emocional</li>
                    <li>Fortalecimiento del sistema inmunológico</li>
                    <li>Acompañamiento en procesos de duelo, crisis o enfermedad</li>
                  </ul>

                  <h5>Modalidad de atención</h5>
                  <ul>
                    <li>Presencial: en espacio terapéutico armonizado, con cita previa</li>
                    <li>A distancia: envío de energía programada, con preparación previa</li>
                    <li>Sesiones individuales o combinadas con Terapia Floral</li>
                  </ul>

                  <h5>Una experiencia de reconexión</h5>
                  <p>
                    Reiki te invita a detenerte, respirar y volver al centro. Es un regalo para vos mismo/a, 
                    una forma de volver a tu eje cuando la vida se desordena.  
                  </p>                  
                </div>
              </div>
            </div>
          </div>

          <div class="card col-12">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/images/combinada.jpg" class="left-image img-fluid" alt="Terapia combinada">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Sesiones combinadas</h4>
                  <h5>Un enfoque integrador para tu bienestar</h5>
                  <p>
                    Las sesiones combinadas integran dos herramientas terapéuticas complementarias: Reiki y Terapia Floral.  
                  </p>
                  <p>
                    Mientras el Reiki actúa sobre el campo energético y ayuda a liberar bloqueos o tensiones internas, 
                    las flores trabajan a nivel emocional, suavizando patrones de pensamiento y reacciones que nos generan malestar.
                  </p>
                  <p>Juntas, potencian el proceso de sanación de manera profunda, armoniosa y respetuosa.</p>
                  
                  <h5>¿Cómo es una sesión combinada?</h5>
                  <ul>
                    <li>Espacio de escucha: comenzamos con una conversación donde podés expresar lo que estás viviendo, cómo te sentís y qué necesitás.</li>
                    <li>Aplicación de Reiki: a continuación, realizo una sesión de Reiki (presencial o a distancia) para equilibrar tu energía y facilitar la conexión contigo mismo/a.</li>
                    <li>Selección de esencias florales: con base en lo conversado y en lo que se movilizó durante la sesión, selecciono una fórmula floral personalizada.</li>
                    <li>Seguimiento: las flores te acompañan por varias semanas, y el proceso puede continuar en sesiones futuras si lo deseás.</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>

  <section class="simple-cta" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/sd.jpeg" alt="Foto de Sebastián Durán" class="rounded-lg">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>Sobre mi</h4>
          <h6>Conectando con tu esencia desde la terapia integrativa</h6>
          <p>
            Mi nombre es <span>Sebastián Durán</span>. Me formé como terapeuta floral en los sistemas 
            Bach, California y Bush, y también como practicante de Reiki, una técnica 
            energética que promueve la armonía y el equilibrio en todos los niveles del ser.
          </p>

          <p>
            Trabajo desde un enfoque integrativo y personalizado, entendiendo que cada 
            persona es única y que las emociones influyen profundamente en nuestra salud. 
            Mi compromiso es acompañarte con respeto, empatía y escucha activa.  
          </p>
          <div class="white-button">
            <a href="https://wa.me/59898195126" target="_blank">WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services" id="faq">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Preguntas <em>Frecuentes</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>¿Qué necesito para una sesión?</h4>
                <p>Solo ganas de conectar contigo mismo/a. En el caso de sesiones online, un lugar tranquilo y sin interrupciones.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-medkit"></i>
                </div>
                <h4>¿Es compatible con otros tratamientos?</h4>
                <p>Sí. Las terapias que ofrezco son complementarias y no sustituyen tratamientos médicos, pero pueden acompañarlos eficazmente.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <h4>¿Cuántas sesiones necesito?</h4>
                <p>Depende del motivo de consulta y el proceso personal. En la primera entrevista evaluamos juntos un posible camino.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-heart"></i>
                </div>
                <h4>¿Qué sistema floral es mejor para mí?</h4>
                <p>Durante la sesión, elijo el sistema o la combinación más adecuada para vos, según tus emociones, vivencias y necesidades.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Contacto</h6>
            <h4>Comunícate ahora con <em>nosotros</em></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-12 row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row" id="contact">
              <div class="col-lg-6 col-12 mb-5">
                <h5>Puedes utilizar el formulario</h5>
                <p>Escríbenos para más información, estamos encantados de ayudarte.</p>
                <p>También tienes estos medios de contacto:</p>   
                <div class="row">
                  <div class="col-lg-10">
                    <a href="https://wa.me/59898195126" target="_blank" class="contact-info">
                      <div class="icon">
                        <i class="fa fa-whatsapp"></i>
                      </div>
                      <h4>Whatsapp</h4>
                      <span>098 195 126</span>
                    </a>
                  </div>
                  <div class="col-lg-10">
                    <a href="mailto:consultas@terapiaholistica.com" target="_blank" class="contact-info">
                      <div class="icon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <h4>Mail</h4>
                      <span>consultas@terapiaholistica.com</span>
                    </a>
                  </div>
                </div>         
              </div>

              <div class="col-lg-6 col-12">                
                <form id="form-contacto">
                  <input type="name" name="nombre" id="nombre" placeholder="Nombre Completo" autocomplete="on" required>
                  <input type="email" name="email" id="email" placeholder="Tu Correo Electrónico" required>
                  <textarea name="mensaje" placeholder="Tu Mensaje"></textarea>
                  
                  <button type="submit" id="form-submit" class="main-gradient-button">Enviar Mensaje</button>
                  
                  <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                  <div id="mensaje"></div>
                  <script>
                    const form = document.getElementById('form-contacto');
                    const mensajeDiv = document.getElementById('mensaje');

                    form.addEventListener('submit', function (e) {
                      e.preventDefault();
                      mensajeDiv.textContent = "Enviando...";
                      mensajeDiv.className = "";

                      grecaptcha.ready(function () {
                        grecaptcha.execute("<?php echo $siteKey; ?>", {action: 'formulario'}).then(function (token) {
                          const formData = new FormData(form);
                          formData.set('g-recaptcha-response', token);

                          fetch('procesar.php', {
                            method: 'POST',
                            body: formData
                          })
                          .then(res => res.json())
                          .then(data => {
                            if (data.success) {
                              mensajeDiv.textContent = data.message;
                              mensajeDiv.className = "text-success";
                              form.reset();
                            } else {
                              mensajeDiv.textContent = data.message;
                              mensajeDiv.className = "text-error";
                            }
                          })
                          .catch(err => {
                            mensajeDiv.textContent = "Ocurrió un error inesperado: " + err.message;
                            mensajeDiv.className = "text-error";
                          });
                        });
                      });
                    });
                  </script>

                </form>
              </div>
            </div>
        </div>
        <!--div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div-->
        <div class="col-lg-12">
          <p class="copyright">Copyright © <?php echo date("Y"); ?> Terapia Holística Sebastián Durán. Todos los derechos reservados.
          <br>Desarrollo web: <a rel="sponsored" href="https://mr.uy" target="_blank">mr.uy</a>
        </div>
      </div>      
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>