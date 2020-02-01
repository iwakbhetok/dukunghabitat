<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            {!! __('voyager::theme.footer_copyright') !!} <a href="https://www.iprospect.com" target="_blank">IProspect</a>
        @endif
        - {{ config('app.version', 'v0.0') }}
        
    </div>
</footer>
