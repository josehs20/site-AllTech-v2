<header class="home-background" style="height: fit-content">
      <div class="d-flex justify-content-center" style="background-color: #fff; border: 1px solid; border-color: #ED750A">
          <ul class="nav">
              <li class="nav-item">
                  <a class="nav-link-icon" href="https://www.facebook.com/alltechsistemas/"><span class="mai-logo-facebook"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link-icon" href="https://api.whatsapp.com/send?phone=5522999238245&text=Olá, gostaria de mais informações."><span class="mai-logo-instagram"></span></a>
              </li>
          </ul>
      </div>

      <nav class="container-fluid navbar navbar-expand-lg navbar-transparent">
          <div class="container-fluid">
              <img src="{{ url('/assets/img/logo.png') }}" style="border-radius: 10px" />
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mai-menu"></span>
              </button>

              <div class="navbar-collapse collapse mx-auto" id="navbarContent">
                  <ul class="navbar navbar-nav ml-auto mx-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ route('home') }}">Página inicial</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('quem-somos') }}">Quem somos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('solucao') }}">Soluções</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('downloads') }}">Downloads</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link-whatsapp" href="">Fale conosco <i class="mai-logo-whatsapp"></i></a>
                      </li>
                  </ul>

                  <div class="navbar navbar-nav">
                      <a class="btn btn-custom ml-lg-2" href="">ÁREA DO CLIENTE</a>
                  </div>
              </div>
          </div>
      </nav>
  </header>