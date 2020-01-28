<script>
    window.algoliaApi = {
        key: '{{ config('services.algolia.key') }}',
        index: '{{ config('services.algolia.index') }}'
    };
</script>

<!-- Javascript -->
<script src="{{ elixir('mayahn/plugins/jquery-3.4.1.min.js') }}"></script>
<script src="{{ elixir('mayahn/plugins/popper.min.js') }}"></script>
<script src="{{ elixir('mayahn/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script
<script src="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.js"></script>
<script src="{{ elixir('js/app.js') }}"></script>
