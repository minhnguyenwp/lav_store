<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">

    <head>
        <title>@yield('page_title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @section('seo')
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
        @show

        <!-- FAVICON -->
        @if ($favicon = core()->getCurrentChannel()->favicon_url)
            <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
        @else
            <link rel="icon" sizes="16x16" href="{{ asset('/themes/acetheme/assets/images/static/v-icon.png') }}" />
        @endif

        <!-- CSS -->
        @include('shop::layouts.style')
          
        <script
          type="text/javascript"
          baseUrl="{{ url()->to('/') }}"
          src="{{ asset('themes/acetheme/assets/js/velocity.js') }}">
      </script>

        @yield('head')
        @stack('css')

        {!! view_render_event('bagisto.shop.layout.head') !!}
        @stack('headerstyles')
    </head>

    <body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif>
    <div class="site ace-ui">
        {!! view_render_event('bagisto.shop.layout.body.before') !!}

        @include('shop::UI.particals')

        <div id="app">
            {{-- <responsive-sidebar v-html="responsiveSidebarTemplate"></responsive-sidebar> --}}

            <product-quick-view v-if="$root.quickView"></product-quick-view>

            <div class="main-container-wrapper">

                @section('body-header')
                @include('shop::layouts.header.mobile-header')
                <header class="site__header d-lg-block d-none" v-if="!isMobile()">
                  <div class="site-header">
                    @include('shop::layouts.top-nav.index')

                    {!! view_render_event('bagisto.shop.layout.header.before') !!}

                        @include('shop::layouts.header.index')
                        @include('shop::layouts.header.menu')
                    {!! view_render_event('bagisto.shop.layout.header.after') !!}
                    
                </div></header>
                <!-- END: HEADER -->
                @show

               
                <div class="site__body">
                  {!! view_render_event('bagisto.shop.layout.content.before') !!}
                    @yield('content-wrapper')
                  {!! view_render_event('bagisto.shop.layout.content.after') !!}
                
                  {!! view_render_event('bagisto.shop.layout.full-content.before') !!}
                      @yield('full-content-wrapper')
                  {!! view_render_event('bagisto.shop.layout.full-content.after') !!}

                  @include('shop::common.brand-logos-widget')
                </div>
                
            </div>
        </div>

        <!-- below footer -->
        @section('footer')
            {!! view_render_event('bagisto.shop.layout.footer.before') !!}

                @include('shop::layouts.footer.index')

            {!! view_render_event('bagisto.shop.layout.footer.after') !!}
        @show

        {!! view_render_event('bagisto.shop.layout.body.after') !!}

        <div id="alert-container"></div>
    </div><!-- END: site -->
    @include('shop::layouts.header.mobile-menu')



        <script type="text/javascript">
            (() => {
                window.showAlert = (messageType, messageLabel, message) => {
                    if (messageType && message !== '') {
                        let alertId = Math.floor(Math.random() * 1000);

                        let html = `<div class="alert ${messageType} alert-dismissible" id="${alertId}">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>${messageLabel ? messageLabel + '!' : ''} </strong> ${message}.
                        </div>`;

                        $('#alert-container').append(html).ready(() => {
                            window.setTimeout(() => {
                                $(`#alert-container #${alertId}`).remove();
                            }, 5000);
                        });
                    }
                }

                let messageType = '';
                let messageLabel = '';

                @if ($message = session('success'))
                    messageType = 'alert-success';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.success') }}";
                @elseif ($message = session('warning'))
                    messageType = 'alert-warning';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.warning') }}";
                @elseif ($message = session('error'))
                    messageType = 'alert-danger';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.error') }}";
                @elseif ($message = session('info'))
                    messageType = 'alert-info';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.info') }}";
                @endif

                if (messageType && '{{ $message }}' !== '') {
                    window.showAlert(messageType, messageLabel, '{{ $message }}');
                }

                window.serverErrors = [];
                @if (isset($errors))
                    @if (count($errors))
                        window.serverErrors = @json($errors->getMessages());
                    @endif
                @endif

                window._translations = @json(app('Webkul\Velocity\Helpers\Helper')->jsonTranslations());
            })();
        </script>

        <script
            type="text/javascript"
            src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}">
        </script>


        @include('shop::layouts.script')   
        @stack('scripts')
    </body>
</html>
