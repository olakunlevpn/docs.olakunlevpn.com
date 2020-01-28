@extends('layouts.single')

@section('content')


<div class="docs-wrapper">
  <div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
            <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
        </div>
    @if ($toc)
    <nav id="docs-nav" class="docs-nav navbar docs-toc" data-current-page="{{ $page }}">
      <ul class="section-items list-unstyled nav flex-column pb-3">
      	{!! $toc !!}
      </ul>

    </nav><!--//docs-nav-->
	@endif
  </div><!--//docs-sidebar-->






<div class="docs-content">
  <div class="container">
    <article class="docs-article">

   {!! $content !!}


    </article>



@stop
