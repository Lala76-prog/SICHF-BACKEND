<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>SICHF - Venta de Calzado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <header>
    <div class="container-hero">
        <div class="container hero">
           <div class="customer-support">
             <i class="fa-solid fa-headset"></i>
              <div class="content-customer-support">
            <span class="text">soporte al cliente</span>
            <span class="number">123-456-7890</span>
        </div>
        </div>

     
      <div class="container-user">
        <a href="Login y Registro/index.php"><i class="fa-solid fa-user"></i> </a>
        <div class="content-shopping-cart">
          <div class="container-cart">
            <a href="carrito/index.html"><i class="fa-solid fa-basket-shopping"></i></a>
            
            </div>
        </div>
        
        </a>
        
        </div>
      </div>
      </div>

    </div>
    <div class="container-navbar">
      <nav class="navbar container">
        <i class="fa-solid fa-bars"></i>
        <ul class="menu">
         <li><a href="index.html">inicio</a></li>
         <li><a href="hombres.html">hombre</a></li>
         <li><a href="mujeres.html">mujer</a></li>
         <li><a href="niños.html">niño</a></li>
         <li><a href="nosotros.html">Nosotros</a></li>
        </ul>
        
        <div class="container-logo">
          <i class="fa-solid fa-shoe-prints"></i>
         <h1 class="logo"><a href="index.html">SICHF</a></h1>
        </div>

        

        <form class="search-form">
        <input type="search" placeholder="Buscar..." />
        <buton class="btn-search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </buton>
      </form>
      </nav>
    </div>
    </header>
    <script src="https://kit.fontawesome.com/62fcb3b66f.js" crossorigin="anonymous"></script>
    


    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        
        <div class="carousel-item active d-item">
          <img src="Carrusel/jordan-zapatillas-recurso-948.jpg" class="d-block w-100 d-img" alt="">
        </div>
        <div class="carousel-item active d-item">
          <img src="Carrusel/08888a9581814a46fdaa5b3350f975f9403faf56.jpeg" class="d-block w-100 d-img" alt="">
        </div>
        <div class="carousel-item active d-item">
          <img src="Carrusel/adidas-forum-mid-mnr-3-sneakers-wallpaper-preview.jpg" class="d-block w-100 d-img" alt="">
        </div>
        <div class="carousel-caption top-0 mt-4">
             <p class="mt-5 fs-3 text-uppercase">
              Descubre aqui
             </p>
             <h1 class="display-1 fw-bolder text-capitalize">Calzado para todos</h1>
             <button class="btn">Comprar ahora</button>


        </div>

       
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <main>
      

    
       

        
        
      
  
      <section class="productos">
        <h2>Productos populares</h2>
        <ul>
          <li>
            <a href="Plantilla producto/index.html">
              <img src="Imagenes_calzado_hombre/campus_toallin_men.jpg" alt="Zapato de hombre">
              <h3>Zapato de hombre</h3>
              <p>$1,065,012</p>
            </a>
          </li>
          <li>
            <a href="Plantilla producto/index.html">
              <img src="Imagenes_calzado_mujer/AMIRI_Skel_rosa_women.jpg" alt="Zapato de mujer">
              <h3>Zapato de mujer</h3>
              <p>$3,822,289</p>
            </a>
          </li>
          <li>
            <a href="Plantilla producto/index.html">
              <img src="Imagenes_calzado_niño/Nike_Dunk_CoopperSwoosh_kid_men2.jpg" alt="Zapato de niño">
              <h3>Zapato de niño</h3>
              <p>$682,125</p>
            </a>
          </li>
        </ul>
      </section>
      
      
    </main>
    
    <section class="contenido">
      <div class="mostrador" id="mostrador">
          <div class="fila">
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/1.png" alt="">
                  </div>
                  <p class="descripcion">NIKE AIR 97</p>
                  <span class="precio">$ 130.000</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/2.png" alt="">
                  </div>
                  <p class="descripcion" id>NIKE RUNNING TERRA </p>
                  <span class="precio">$ 130.000</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/3.png" alt="">
                  </div>
                  <p class="descripcion">NIKE WINFLO 8
                  </p>
                  <span class="precio">$ 3.600</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/4.png" alt="">
                  </div>
                  <p class="descripcion">NIKE LOW-TOP</p>
                  <span class="precio">$ 180.000</span>
              </div>
          </div>
          <div class="fila">
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/5.png" alt="">
                  </div>
                  <p class="descripcion">NIKE BLAZER 97</p>
                  <span class="precio">$ 130.000</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/6.png" alt="">
                  </div>
                  <p class="descripcion">NIKE LEGEND ESENTIAL</p>
                  <span class="precio">$ 200.000</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/7.png" alt="">
                  </div>
                  <p class="descripcion">NIKE AIR ZOOM</p>
                  <span class="precio">$ 250.000</span>
              </div>
              <div class="item" onclick="cargar(this)">
                  <div class="contenedor-foto">
                      <img src="img/8.png" alt="">
                  </div>
                  <p class="descripcion">NIKE TERRA KING</p>
                  <span class="precio">$ 100.000</span>
              </div>
          </div> 
      </div>
      <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
      <div class="seleccion" id="seleccion">
          <div class="cerrar" onclick="cerrar()">
              &#x2715
          </div>
          <div class="info">
              <img src="img/1.png" alt="" id="img">
              <h2 id="modelo">NIKE MODEL 1</h2>
              <p id="descripcion">Descripción Modelo 1</p>

              <span class="precio" id="precio">$ 130.000</span>

              <div class="fila">
                  <div class="size">
                      <label for="">SIZE</label>
                      <select name="" id="">
                          <option value="">40</option>
                          <option value="">42</option>
                          <option value="">44</option>
                          <option value="">46</option>
                      </select>
                  </div>
                  <button>AGREGAR AL CARRITO</button>
              </div>
          </div>
      </div>
  </section>
  

  <script src="script.js"></script>


  <footer class="footer">
    <div class="container container-footer">
      <div class="menu-footer">
        <div class="contact-info">
          <p class="title-footer">Información de Contacto</p>
          <ul>
            <li>
              Dirección: 71 Pennington Lane Vernon Rockville, CT
              06066
            </li>
            <li>Teléfono: 123-456-7890</li>
            <li>Fax: 55555300</li>
            <li>EmaiL: baristas@support.com</li>
          </ul>
          <div class="social-icons">
            <span class="facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </span>
            <span class="twitter">
              <i class="fa-brands fa-twitter"></i>
            </span>
            <span class="youtube">
              <i class="fa-brands fa-youtube"></i>
            </span>
            <span class="pinterest">
              <i class="fa-brands fa-pinterest-p"></i>
            </span>
            <span class="instagram">
              <i class="fa-brands fa-instagram"></i>
            </span>
          </div>
        </div>

        <div class="information">
          <p class="title-footer">Información</p>
          <ul>
            <li><a href="#">Acerca de Nosotros</a></li>
            <li><a href="#">Información Delivery</a></li>
            <li><a href="#">Politicas de Privacidad</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Contactános</a></li>
          </ul>
        </div>

        <div class="my-account">
          <p class="title-footer">Mi cuenta</p>

          <ul>
            <li><a href="#">Mi cuenta</a></li>
            <li><a href="#">Historial de ordenes</a></li>
            <li><a href="#">Lista de deseos</a></li>
            <li><a href="#">Boletín</a></li>
            <li><a href="#">Reembolsos</a></li>
          </ul>
        </div>

        <div class="newsletter">
          <p class="title-footer">Boletín informativo</p>

          <div class="content">
            <p>
              Suscríbete a nuestros boletines ahora y mantente al
              día con nuevas colecciones y ofertas exclusivas.
            </p>
            <input type="email" placeholder="Ingresa el correo aquí...">
            <a href="crud sichf/sichf_crud_union.html"><button></button></a>
          </div>
        </div>
      </div>

      <div class="copyright">
        <p>
          Desarrollado por Proyect Your Sofware &copy; 2024
        </p>

        <img src="img/payment.png" alt="Pagos">
      </div>
    </div>
  </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>


