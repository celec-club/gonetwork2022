<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  @if(Request::is("archive/*"))
    <link rel="stylesheet" href="{{asset('css/archive.css')}}" />
  @else

    <link rel="stylesheet" href="{{url('css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  @endif
    <link rel="stylesheet" href="{{url('css/all.min.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
  rel="stylesheet"
  />
  <link
  rel="icon"
  type="image/svg"
  sizes="32x32"
  href="{{ url('images/Landing.svg') }}"
  />
  <title>CELEC - Go Network</title>
  
</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <a href="{{ url('/') }}"><img src="{{url('images/Celec_Logo_Blue.svg')}}" alt="CELEC Logo" /></a>
      </div>
      <nav>
        <ul>
          <li><a href="@if(Request::is('/')) #former @else {{url('/#former')}} @endif">Former</a></li>
          <li><a href="@if(Request::is('/')) #register @else {{url('/#register')}} @endif">Register</a></li>
          <li><a href="@if(Request::is('/')) #archive @else {{url('/#archive')}} @endif">Archive</a></li>
          @if(!Auth::check())
            <li><a href="#connection">Sign In</a></li>
          @else
            <li><a href="{{ url('account') }}">account</a></li>
          @endif
        </ul>
      </nav>
    </div>
  </header>
  @yield("content")

  <footer>
    
    <div class="container">
      <div class="cisco-logo">
        <img src="{{url('images/go_network_logo_b.png')}}" alt="">
      </div>
      <div class="social-media">
        <a href="https://www.linkedin.com/company/celecusthb/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://web.facebook.com/CELECUSTHB "><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/celec_usthb"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/CELEC-USTHB-CLUB/gonetwork2022"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </footer>
</div>
<div class="connect">
  <div class="container">
    @if(!Request::is("archive/*"))
      <div class="text">
        <h3>Do you have an account?</h3>
      </div>
      @if ($errors->any())
        <div style="padding: 1%; background: #fab6b6; width: 40%; text-align: initial; font-weight: bolder; border-radius: 5px;">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ url('users/login') }}" method="POST" id="connect-form">
        @csrf
        <div class="form">
          <div class="input-info">
            <input
            name="email"
            type="email"
            id="connection-email"
            class="form-input"
            placeholder=" "
            required
            />
            <label for="connection-email">email</label>
          </div>
          <div class="input-info">
            <input
            name="password"
            type="password"
            id="connection-password"
            class="form-input"
            placeholder=" "
            required
            />
            <label for="connection-password">Password</label>
          </div>
        </div>
        <div class="submit-btn">
          <button type="submit" form="connect-form" value="Submit">
            Sign In
          </button>
        </div>
      </form>
    @endif
  </div>
</div>
<script src="{{url('js/main.js')}}"></script>
@if(Request::is("archive/*"))
  <script src="{{url('js/gallerie.js')}}"></script>
@endif
@if($errors->has("login"))
  <script type="text/javascript">
      pageContent.classList.add('inactive')
      connectPage.classList.add('show')
  </script>
@endif
@include('sweetalert::alert')
</body>
</html>
