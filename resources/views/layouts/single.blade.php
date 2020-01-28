<!DOCTYPE html>
<html lang="en">
<head>
  @if (isset($currentDoc))
      <title>{{ $title }} - {{ $currentDoc['name'] }} {{ $currentVersion }} - {{ env('APP_NAME') }}</title>
  @else
      <title>{{ env('APP_NAME') }} Docs</title>
  @endif

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Olakunle Documentation derectory">
    <meta name="author" content="Olakunlevpn">
    <link rel="shortcut icon" href="{{ elixir('favicon.ico') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ elixir('mayahn/fontawesome/js/all.min.js') }}"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ elixir('mayahn/css/theme.css') }}">

</head>

<body class="docs-page">
    <header class="header fixed-top">
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible mr-2 d-xl-none" type="button">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
	                <div class="site-logo"><a class="navbar-brand" href="{{ route('show', [$currentDoc['id'], $currentVersion]) }}"><img class="logo-icon mr-2" src="{{ elixir('mayahn/images/coderdocs-logo.png') }}" alt="logo" style="width: 50px;"><span class="logo-text">{{ $currentDoc['name'] }}</span></a></div>
                </div><!--//docs-logo-wrapper-->
	            <div class="docs-top-utilities d-flex justify-content-end align-items-center">


<ul class="navbar-nav ml-md-auto">
  @if (isset($currentVersion))
           @if (count($versions) > 1)
               <li class="nav-item dropdown">
                  <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Version {{ $currentVersion }}
                   </a>
                <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                       @foreach ($versions as $version)
                           <a class="dropdown-item" href="{{ route('show', [$currentDoc['id'], $version]) }}">{{ $version }}</a>
                       @endforeach
                </div>
               </li>
           @else
               <li class="nav-item dropdown">
                   <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                 <a class="dropdown-item active" href="/docs/4.4/">{{ $currentVersion }}</a>
                </div>
               </li>
           @endif
       @endif


              </ul>


					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
            <li class="list-inline-item h3"><a href="https://github.com/olakunlevpn" target="_blank" ><i class="fab fa-github fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/olakunle_vpn" target="_blank" ><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://facebook.com/iamolakunlevpn" target="_blank" ><i class="fab fa-facebook-f fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://instagram.com/olakunle_vpn" target="_blank" ><i class="fab fa-instagram fa-fw"></i></a></li>
		            </ul><!--//social-list-->
                @if (isset($currentDoc['demo']))
                        <a href="{{ $currentDoc['demo'] }}" target="_blank" class="btn btn-success d-none d-lg-flex m-1">Demo</a>
                  @endif

                  @if (isset($currentDoc['demo']))
                          <a href="{{ $currentDoc['support'] }}" target="_blank" class="btn btn-primary d-none d-lg-flex m-1">Support</a>
              @else
               <a href="https://codecanyon.net/user/olakunlev" target="_blank" class="btn btn-primary d-none d-lg-flex">Support</a>
              @endif

               </div><!--//docs-top-utilities-->
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->





      @yield('content')





			    <footer class="footer">
				    <div class="container text-center py-5">
				        <small class="copyright"> Built with &nbsp; <a href="https://laravel.com/" target="_blank">Laravel</a> &nbsp;
                  and available on <a href="https://github.com/olakunlevpn/documenter" target="_blank">GitHub</a>.&nbsp;
                  © {{ date('Y') }} Olakunlevpn.</small>
				        <ul class="social-list list-unstyled pt-4 mb-0">
                  <li class="list-inline-item h3"><a href="https://github.com/olakunlevpn" target="_blank" ><i class="fab fa-github fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://twitter.com/olakunle_vpn" target="_blank" ><i class="fab fa-twitter fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://facebook.com/iamolakunlevpn" target="_blank" ><i class="fab fa-facebook-f fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://instagram.com/olakunle_vpn" target="_blank" ><i class="fab fa-instagram fa-fw"></i></a></li>
				        </ul><!--//social-list-->
				    </div>
			    </footer>
		    </div>
	    </div>
    </div><!--//docs-wrapper-->



    <!-- Javascript -->
    <script src="{{ elixir('mayahn/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ elixir('mayahn/plugins/popper.min.js') }}"></script>
    <script src="{{ elixir('mayahn/plugins/bootstrap/js/bootstrap.min.js') }}"></script>


    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{ elixir('mayahn/js/highlight-custom.js') }}"></script>
    <script src="{{ elixir('mayahn/plugins/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ elixir('mayahn/plugins/lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <script src="{{ elixir('mayahn/js/docs.js') }}"></script>


    @include('partials.ga')
</body>
</html>
