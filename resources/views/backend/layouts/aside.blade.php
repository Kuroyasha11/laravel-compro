<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/Kuroyasha.png') }}"
                    alt="Kuroyasha" style="width: 46px; height: 46px; object-fit: contain;">
            </span>
            <span
                class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase fs-4">{{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Kuroyasha' }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Company Profile -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Company Profile</span>
        </li>
        <li class="menu-item {{ Request::is('company-profile/home*') ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('company-profile/features*') ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layer"></i>
                <div data-i18n="Features">Features</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('company-profile/pricing*') ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-purchase-tag-alt"></i>
                <div data-i18n="Pricing">Pricing</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('company-profile/blog*') ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Blog">Blog</div>
            </a>
        </li>

        <!-- Utilities -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">utilities</span></li>
        <!-- Company -->
        <li class="menu-item {{ Request::is('utilities/company*') ? 'active' : '' }}">
            <a href="{{ route('company.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Company">Company</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('utilities/footer*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Footer">Footer</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('utilities/footer/social-media*') ? 'active' : '' }}">
                    <a href="{{ route('footer.social-media.index') }}" class="menu-link">
                        <div data-i18n="Social Media">Social Media</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('utilities/footer/navigation*') ? 'active' : '' }}">
                    <a href="{{ route('footer.navigation.index') }}" class="menu-link">
                        <div data-i18n="Navigation">Navigation</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li> --}}
            </ul>
        </li>
    </ul>
</aside>