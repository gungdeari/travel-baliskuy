<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ url('frontend/images/logo.png') }}" alt="BALI SKUYY">
        </a>

        <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav" style="margin: 0 10px 0 auto;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detail') }}">Paket Travel</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Service
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonial</a>
              </li>
            </li>
          </ul>

          @guest
            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
              <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.prefentDefault(); location.href=' {{ url('login') }}'; ">
                  Login
              </button>
            </form>

            <!-- Desktop button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.prefentDefault(); location.href=' {{ url('login') }} '; ">
                  Login
              </button>
            </form>
          @endguest


          @auth
            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
              @csrf
              <button class="btn btn-login my-2 my-sm-0" type="submit">
                Logout
              </button>
            </form>

            <!-- Desktop button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
              @csrf
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                Logout
              </button>
            </form>
          @endauth

        </div>
      </div>
    </nav>
</div>