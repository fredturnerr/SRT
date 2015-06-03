<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sereteli</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/app.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.css" />
    <script src="<?=base_url()?>bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <div class="contain-to-grid sticky">
      <nav class="top-bar fixed" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#"><img src="<?=base_url()?>assets/img/logo.png" alt="logo" class="logo-header" /></a></h1>
          </li>
          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li class=""><a href="<?=base_url()?>index.php/welcome">Inicio</a></li>
            <li class=""><a href="<?=base_url()?>index.php/servicios">Servicios</a></li>
            <li class=""><a href="<?=base_url()?>index.php/nosotros">Nosotros</a></li>
            <li class=""><a href="<?=base_url()?>/blog">Blog</a></li>
            <li class="active"><a href="<?=base_url()?>index.php/contacto">Contacto</a></li>
          </ul>

        </section>
      </nav>
    </div>
    <!-- <header>

    </header>
    -->
    <ul class="example-orbit" data-orbit>
      <li>
        <img src="<?=base_url()?>assets/img/bg3.png" alt="slide 1" />

    </li>


</ul>

<div class='titulo'>
  <div class="row">
    <div class="small-12 medium-6 large-6 columns">Contacto</div>
  </div>
</div>

<div class="contacto">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h1>¿Tienes alguna duda o sugerencia?</h1>
      <h2>Llena el siguiente formulario para hacernos llegar tus comentarios y en breve un representante de Sereteli se pondrá en contacto contigo.</h2>
      <hr>
    </div>
  </div>



  <div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <form>
          <div class="row">
            <div class="large-12 columns">
              <label>Nombre(s)
                <input type="text" placeholder="Nombre(s)" />
              </label>
            </div>
          </div>


          <div class="row">
            <div class="large-12 columns">
              <label>Asunto
                <input type="text" placeholder="Asunto" />
              </label>
            </div>
          </div>


          <div class="row">
            <div class="large-12 columns">
              <label>Correo
                <input type="email" placeholder="Correo" />
              </label>
            </div>
          </div>


          <div class="row">
            <div class="large-6 columns">
              <label>Teléfono
                <input type="number" placeholder="Teléfono" />
            </div>

            <div class="large-6 columns">
              <label>Celular
                <input type="number" placeholder="Celular" />
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <label>Mensaje
                <textarea rows="10" placeholder="..."></textarea>
              </label>
            </div>
          </div>
          <input type="submit" class="button expand" value="Enviar formulario"/>
    </form>



    </div>
    <div class="small-12 medium-6 large-6 columns">
      <div><b>Dirección</b></div>
      <div> Av. Universidad 580-22, Col. Vértiz Narvarte C.P. 03600 Del. Benito Juárez, México D.F.</div>

      <br>
      <div><b>Teléfono</b></div>
      <div>(55) 65 52 44 55</div>


      <br>
      <div><b>Correo</b></div>
      <div>contacto@sereteli.com.mx</div>

    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 medium-12 large-12 columns">

    <div class="aviso">
      <h1>AVISO DE PRIVACIDAD</h1>
      <hr>
      <ul>
        <li>• Servicios Especializados en Teleinformática S.A. de C.V., (Sereteli), con domicilio en Avenida Universidad 580-22, Col. Vértiz Narvarte, C.P. 03600 Delegación Benito Juárez, México D.F. utilizará sus datos personales recabados para Administración y operación de los servicios que como cliente contrata con nosotros;
 La creación, seguimiento, actualización del historial de compras y facturación de servicios;
 Comunicación y contacto para seguimiento de los servicios contratados</li>
      </ul>
      <p>Para mayor información acerca del tratamiento y de los derechos que puede hacer valer, usted puede acceder al aviso de privacidad integral a través de <a href="<?=base_url()?>index.php/Privacidad">www.sereteli.com.mx</a></p>
      <hr>
    </div>

  </div>
</div>


<footer>
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
    <center>
      <ul class="button-group">
    <!-- Button Color Classes: [secondary alert success] -->
    <!-- Button Size Classes: [tiny small large] -->
        <li><a href="" class="button">Derechos reservados Sereteli</a></li>
        <li><a href="http://coredev.io" class="button">Diseñado y desarrollado por Coredev</a></li>
        <li><a href="<?=base_url()?>index.php/Privacidad" class="button">Aviso de privacidad</a></li>
        <li><a href="https://www.facebook.com/sereteli.sadecv?fref=ts" target="_blank" class="button"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="#" class="button"><i class="fa fa-twitter-square"></i></a></li>
      </ul>
      </center>
    </div>
  </div>
</footer>
<div class="footer2">
  <div class="row">
    <div class="small-6 medium-6 large-6 columns"></div>
    <div class="small-6 medium-6 large-6 columns">(55) 65 52 44 55 - contacto@sereteli.com.mx</div>
  </div>
</div>

<script src="<?=base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>bower_components/foundation/js/foundation.min.js"></script>
<script src="<?=base_url()?>assets/js/app.js"></script>
</body>
</html>
