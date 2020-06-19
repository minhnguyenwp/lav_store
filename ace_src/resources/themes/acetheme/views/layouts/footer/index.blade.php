<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    @include('shop::layouts.footer.contact-info')
                    @include('shop::layouts.footer.footer-menu-one')
                    @include('shop::layouts.footer.footer-menu-two')
                    @include('shop::layouts.footer.newsletter')
                </div>
            </div>
            @include('shop::layouts.footer.copyright')
        </div>
        @include('shop::common.scroll-top')
    </div>
</footer>