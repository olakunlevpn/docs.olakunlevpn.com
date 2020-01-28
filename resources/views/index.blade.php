@extends('layouts.app')

@section('content')
<header class="header fixed-top">
    <div class="branding docs-branding">
        <div class="container-fluid position-relative py-2">
            <div class="docs-logo-wrapper">
              <div class="site-logo"><a class="navbar-brand" href="{{ url('/') }}"><img class="logo-icon mr-2" style="width: 50px;" src="{{ elixir('mayahn/images/coderdocs-logo.png') }}" alt="logo"><span class="logo-text">{{ env('APP_NAME') }}<span class="text-alt">Docs</span></span></a></div>
            </div><!--//docs-logo-wrapper-->
          <div class="docs-top-utilities d-flex justify-content-end align-items-center">

      <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
        <li class="list-inline-item h3"><a href="https://github.com/olakunlevpn" target="_blank" ><i class="fab fa-github fa-fw"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/olakunle_vpn" target="_blank" ><i class="fab fa-twitter fa-fw"></i></a></li>
            <li class="list-inline-item"><a href="https://facebook.com/iamolakunlevpn" target="_blank" ><i class="fab fa-facebook-f fa-fw"></i></a></li>
            <li class="list-inline-item"><a href="https://instagram.com/olakunle_vpn" target="_blank" ><i class="fab fa-instagram fa-fw"></i></a></li>
            </ul><!--//social-list-->
            <a href="https://codecanyon.net/user/olakunlev" target="_blank" class="btn btn-primary d-none d-lg-flex">Support</a>
          </div><!--//docs-top-utilities-->
        </div><!--//container-->
    </div><!--//branding-->
</header><!--//header-->


<div class="page-header theme-bg-dark py-5 text-center position-relative">
  <div class="theme-bg-shapes-right"></div>
  <div class="theme-bg-shapes-left"></div>
  <div class="container">
    <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
    <div class="page-intro single-col-max mx-auto">Find documentation you need about our product online.</div>
    <div class="main-search-box pt-3 d-block mx-auto">
             <div class="search-form w-100 search">
            <input type="text" id="search" placeholder="Search the docs..." name="search" aria-label="Search" class="form-control search-input">
            <spam class="btn search-btn" value="Search"><i class="fas fa-search"></i></span>
        </div>
         </div>
  </div>
</div><!--//page-header-->
<div class="page-content">
  <div class="container">
    <div class="docs-overview py-5">
      <div class="row justify-content-center">
        @foreach ($docs as $id => $doc)
            @if ($doc['id'] !== 'ajax-comment-system-laravel')
            <div class="col-12 col-lg-4 py-3">
              <div class="card shadow-sm">
                <div class="card-body">
                  <h5 class="card-title mb-3">
                    <span class="theme-icon-holder card-icon-holder mr-2">
                        <i class="fas fa-lightbulb"></i>
                      </span><!--//card-icon-holder-->
                      <span class="card-title-text">{{ $doc['name'] }}</span>
                  </h5>
                  <div class="card-text">
                  Find anything you need about.. <b>{{ $doc['name'] }}</b>!
                </div>
                  <a class="card-link-mask" href="{{ route('show', $id) }}"></a>
                </div><!--//card-body-->
              </div><!--//card-->
            </div><!--//col-->

            @endif
        @endforeach
      </div><!--//row-->
    </div><!--//container-->
</div><!--//container-->
</div><!--//page-content-->

@stop
