<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ST-Line') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <meta name="Keywords" content="Кенгурятник, Дуга, Кенгурин, Обвес, Передняя защита, Губа, Обводка, Ус, Усы, ARP(Турция), St-line, автоакссесуары,front bumper protection, rear bumper protection, sills, roof rails, chandeliers, stainless steel products, стлайн, ст-лайн, stline"> 
    <meta name="author" content="eliz">
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/items.css') }}" rel="stylesheet">
   
</head>  
<body>
  <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="{{ url('/') }}"><i class="fas fa-balance-scale"></i></a>
    <a class="py-2 d-none d-md-inline-block" href="#">Tour <br> Tour</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
  </div>
    </nav>
     <nav class="sticky-top py-1  d-flex flex-row-reverse nav nav-masthead justify-content-right" style="position: fixed; right:10%;">
        <a href="#" data-toggle="modal" data-target="#exampleModal">
            <wrapper>
              <div class="container d-flex flex-column flex-md-row justify-content-right">
               <div class="dws ">
                  <div class="pulse">
                     <div class="phone"><i class="far fa-envelope"></i></div>
                     <div class="text">Write to us</div>
                  </div>
               </div>
               </div>
            </wrapper>
        </a>
    </nav> 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" id="text-center">
                <h5 class="modal-title" id="exampleModalLabel">Your message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="post" action="{{ url('/') }}">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" name="name" class="form-control" id="recipient-name"maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="num phone" class="col-form-label">Phone number:</label>
                    <input type="tel" name="phone"  placeholder=" format: 380934545363" class="form-control"  maxlength="12" pattern="[0-9]{12}" required >
                    </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea  name="message" class="form-control" id="message-text" maxlength="300" required></textarea>
                  </div>
                               <div class="form-group">
                                <div class="modal-footer">
                                {{csrf_field()}}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" class="form-control" >Send message</button>
              </div>
                     </div>
                </form>
              </div>

            </div>
          </div>
        </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="{{ asset('images/femida.png') }}" alt="">
        <h1 class="display-4 font-weight-normal">Punny headline</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        <div class="row">
          <div class="col-3 col-md"></div>
           <form method="get" action="{{ url('/search') }}"class="form-inline mt-2 mt-md-0">
            <div class="col-6 col-md">
                <input class="form-control mr-sm-2" type="text" name="docType" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-2 col-md"><button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button></div>
            </form>
            <div class="col-3 col-md"></div>
        </div>
      </div>
      <div class=" product-device shadow-sm d-none d-md-block"><img src="{{ asset('images/hammer1.png') }}" alt=""></div>
      <div class=" product-device product-device-2 shadow-sm d-none d-md-block"><img src="{{ asset('images/libra1.png') }}" alt=""></div>
    </   div>
    <main class="py-4" style="text-align: center;">
            @yield('content')
        </main>
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <i class="fas fa-balance-scale"></i>
          <small class="d-block mb-3 text-muted">&copy;2019</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>
