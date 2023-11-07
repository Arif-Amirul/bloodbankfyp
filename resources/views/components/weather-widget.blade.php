
<style>
    img[src="https://weather-website-client.tomorrow.io/img/powered-by.svg"] {
    display: none;
}
</style>
<div  x-show="theme === 'light'">
    <div class="tomorrow" data-location-id="076497" data-language="EN" data-unit-system="METRIC" data-skin="light"
        data-widget-type="upcoming" style="padding-bottom:22px;position:relative;">
    </div>
</div>
<div x-show="theme === 'dark'">
    <div class="tomorrow" data-location-id="076497" data-language="EN" data-unit-system="METRIC" data-skin="dark"
        data-widget-type="upcoming" style="padding-bottom:22px;position:relative;">
    </div>
</div>
@push('js')
<script>
    (function(d, s, id) {
        if (d.getElementById(id)) {
            if (window.__TOMORROW__) {
                window.__TOMORROW__.renderWidget();
            }
            return;
        }
        const fjs = d.getElementsByTagName(s)[0];
        const js = d.createElement(s);
        js.id = id;
        js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";
        fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'tomorrow-sdk');
</script>
@endpush
