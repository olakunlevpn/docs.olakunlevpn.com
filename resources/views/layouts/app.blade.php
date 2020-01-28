<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')

        @if (isset($currentDoc))
            <title>{{ $title }} - {{ $currentDoc['name'] }} {{ $currentVersion }} - {{ env('APP_NAME') }}</title>
        @else
            <title>{{ env('APP_NAME') }} Docs</title>
        @endif
    </head>
<body class="docs-page">

            @yield('content')


            <section class="cta-section text-center py-5 theme-bg-dark position-relative">
              <div class="theme-bg-shapes-right"></div>
              <div class="theme-bg-shapes-left"></div>
              <div class="container">
                <h3 class="mb-2 text-white mb-3">Need support ?</h3>
                <div class="section-intro text-white mb-3 single-col-max mx-auto">Availability to answer questions, Answering technical questions about item’s features, Assistance with reported bugs and issues, Help with included 3rd party assets.</div>
                <div class="pt-3 text-center">
                  <a class="btn btn-light" href="https://olakunlevpn.com/contact">Get Support<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                </div>
              </div>
            </section><!--//cta-section-->



            <footer class="footer">

              <div class="footer-bottom text-center py-5">

                <ul class="social-list list-unstyled pb-4 mb-0">
                  <li class="list-inline-item h3"><a href="https://github.com/olakunlevpn" target="_blank" ><i class="fab fa-github fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://twitter.com/olakunle_vpn" target="_blank" ><i class="fab fa-twitter fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://facebook.com/iamolakunlevpn" target="_blank" ><i class="fab fa-facebook-f fa-fw"></i></a></li>
                      <li class="list-inline-item"><a href="https://instagram.com/olakunle_vpn" target="_blank" ><i class="fab fa-instagram fa-fw"></i></a></li>
                  </ul><!--//social-list-->

                  <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                    <p class="copyright">  Built with &nbsp; <a href="https://laravel.com/" target="_blank">Laravel</a> &nbsp;
                      and available on <a href="https://github.com/olakunlevpn/docs.olakunlevpn.com" target="_blank">GitHub</a>.&nbsp;
                      © {{ date('Y') }} Olakunlevpn.</p>


              </div>

            </footer>





        @include('partials.scripts')
        @include('partials.ga')

    </body>
</html>
