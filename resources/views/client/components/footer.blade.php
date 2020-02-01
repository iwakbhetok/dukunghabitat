
<footer>
    <div class="uk-container-expand footer-style ">
        <div class="uk-container uk-visible@m" style="display:{{ $desktop }};">
            @include('client.components.footer-desktop')
        </div>
        <div class="uk-container uk-hidden@m" style="display:{{ $mobile }};">
            @include('client.components.footer-mobile')
        </div>
    </div>
</footer>