<header class="site__header d-lg-none">
    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
    <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
        <div class="mobile-header__panel">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button">
                        <svg width="18px" height="14px">
                            <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg')}}#menu-18x14"></use>
                        </svg>
                    </button>
                    <a class="mobile-header__logo" href="javascript:;">
                        <!-- mobile-logo -->
                        <img src="{{ asset('/themes/acetheme/assets/images/logos/ace_logo_w.png')}}" alt="ace logo" class="img__logo"/>
                        <!-- mobile-logo / end -->
                    </a>
                    <div class="search search--location--mobile-header mobile-header__search">
                        <div class="search__body">
                            <form class="search__form" action="">
                                <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button search__button--type--submit" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg')}}#search-20"></use>
                                    </svg>
                                </button>
                                <button class="search__button search__button--type--close" type="button">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg')}}#cross-20"></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                            <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                        </div>
                    </div>
                    <div class="mobile-header__indicators">
                        <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                            <button class="indicator__button">
                                <span class="indicator__area">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg')}}#search-20"></use>
                                    </svg>
                                </span>
                            </button>
                        </div>
                       
                        <div class="indicator indicator--mobile">
                            <a href="javascript:;" class="indicator__button">
                                <span class="indicator__area">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg')}}#cart-20"></use>
                                    </svg>
                                    <span class="indicator__value">3</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

