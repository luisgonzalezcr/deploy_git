<div class="container-fluid">
  <div class="container">
    <div class="text-center d-flex flex-md-row flex-column gap-2 justify-content-between align-items-center  py-4">
      <!-- logo -->
      <div class="d-flex flex-column flex-md-row align-items-center gap-4">
        <!-- darkMode -->
        <label class="toggler-wrapper style-1">

          <input type="checkbox" id="inputCk">
          <div class="toggler-slider">
            <div class="toggler-knob"></div>
          </div>

        </label>
        <a href="/">
          <img class="img-fluid" src="<?php echo DOMAIN ?>/img/logo.png" alt="logo" width="50">
           <img class="img-fluid" src="<?php echo DOMAIN ?>/img/letras.png" alt="logo" width="150">
        </a>
      </div>
      <!-- menu -->
      <div class="d-flex flex-column flex-md-row justify-content-end align-items-center gap-2 gap-md-5">

        <i class="fa fa-bars fs-3 fw-bold d-md-none" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-hidden="true"></i>

        <div id="collapseOne" class="accordion-collapse collapse d-md-block">

          <ul class="navbar-nav d-flex flex-column flex-md-row gap-1 gap-md-5">
            <li class="nav-item"><a class="nav-link hover_link <?php echo $_SERVER['REQUEST_URI'] == '/blog' ? 'active' : ''  ?> " href="https://aca.gonzacr.com/academia/blog/">Blog</a></li>
            <li class="nav-item"><a class="nav-link hover_link <?php echo $_SERVER['REQUEST_URI'] == '/cursos' ? 'active' : ''  ?>" href="https://aca.gonzacr.com/academia/cursos/">Cursos</a></li>
            <li class="nav-item"><a class="nav-link hover_link <?php echo $_SERVER['REQUEST_URI'] == '/productos' ? 'active' : ''  ?>" href="/productos">Productos</a></li>
          </ul>

        </div>

        <!-- buscar -->
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
          <i class="fa-solid fa-magnifying-glass fs-5 dropdown-toggle pointer" data-bs-toggle="dropdown" aria-hidden="true"></i>
          <div class="dropdown-menu border-0 container my-md-4 mx-0 bg-transparent">
            <form id="dark_form" class="ms-4" action="/buscar">

              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass-arrow-right" aria-hidden="true"></i></span>
                <input type="search" class="form-control" placeholder="Buscar Curso">
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>