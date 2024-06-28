
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav">
          <li class="nav-logo mr-5">
            <a class="nav-link" href="#">
                <img src="" alt="Your Logo" class="img-fluid nav-logo" style="width: 35px; height: 35px;">  OES
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mr-4" aria-current="page" href="" style="font-size: 18px;">Acceuil</a>
          </li>

          @guest
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="" style="font-size: 18px;">Se connecter</a>
            </li>
          @endguest
            
          
          
            @auth
              <li class="nav-item">
                <a class="nav-link active" href="" style="font-size: 18px;">Settings</a>
              </li>
            @endauth
          
          
        </ul>
        
      </div>
      @auth
        <div class="d-flex flex-row-reverse p-1">
          <div class="btn-group dropdown">
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="">Se deconnecter</a></li>
            </ul>
            <a type="button" class="btn btn-secondary" href="">
              
              
            </a>
          </div>
        </div>
        @endauth
    </div>
  </nav>
  
