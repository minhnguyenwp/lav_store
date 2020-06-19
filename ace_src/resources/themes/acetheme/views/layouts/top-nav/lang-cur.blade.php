<div class="topbar__item">
    <div class="topbar-dropdown">
        <button class="topbar-dropdown__btn" type="button">
            Ngôn ngữ: <span class="topbar__item-value">EN</span>
            <svg width="7px" height="5px">
                <use xlink:href="{{ asset('/themes/acetheme/assets/images/sprite.svg') }}#arrow-rounded-down-7x5"></use>
            </svg>
        </button>
        <div class="topbar-dropdown__body">
            <!-- .menu -->
            <div class="menu menu--layout--topbar  menu--with-icons ">
                <div class="menu__submenus-container"></div>
                <ul class="menu__list">
                    <li class="menu__item">
                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                        <div class="menu__item-submenu-offset"></div>
                        <a class="menu__item-link" href="">
                            <div class="menu__item-icon">
                                <img
                                    src={{ asset('/themes/acetheme/assets/images/languages/language-1.png') }} 
                                    srcset={{ asset('/themes/acetheme/assets/images/languages/language-1.png') }} 
                                    alt="lang EN">
                            </div>
                            English
                        </a>
                    </li>
                    <li class="menu__item">
                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                        <div class="menu__item-submenu-offset"></div>
                        <a class="menu__item-link" href="">
                            <div class="menu__item-icon">
                                <img
                                    src={{ asset('/themes/acetheme/assets/images/languages/language-1.png') }} 
                                    srcset={{ asset('/themes/acetheme/assets/images/languages/language-1.png') }} 
                                    alt="lang EN">
                            </div>
                            Việt Nam
                        </a>
                    </li>
                </ul>
        </div></div>
</div></div>