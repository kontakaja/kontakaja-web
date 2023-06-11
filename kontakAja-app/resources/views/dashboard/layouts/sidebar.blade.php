<aside class="sidebar">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__container">
        <div class="sidebar__top">
            <div class="container container--sm">
                <a class="sidebar__logo" href="/" onclick="toggleLogo(event)">
                    <img class="sidebar__logo-icon logo-display" src="{{ asset('assets/img/logo.svg') }}"
                        alt="Logo KontakAja!" />
                    <img src="{{ asset('assets/img/logo-scroll.svg') }}" class="logo-scrolled" alt="Logo">
                </a>
            </div>
        </div>
        <div class="sidebar__content" data-simplebar="data-simplebar">
            <nav class="sidebar__nav">
                <ul class="sidebar__menu">
                    <li class="sidebar__menu-item"><a class="sidebar__link {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="/dashboard" aria-expanded="true"><span
                                class="sidebar__link-icon">
                                <svg class="icon-icon-dashboard">
                                    <use xlink:href="#icon-dashboard"></use>
                                </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link {{ 'dashboard/contacts' == request()->path() ? 'active' : '' }}" href="/dashboard/contacts"
                            aria-expanded="true"><span class="sidebar__link-icon">
                                <svg class="icon-icon-contacts">
                                    <use xlink:href="#icon-contacts"></use>
                                </svg></span><span class="sidebar__link-text">Kontak</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link {{ 'dashboard/todo' == request()->path() ? 'active' : '' }}" href="/dashboard/todo"
                            aria-expanded="true"><span class="sidebar__link-icon">
                                <svg class="icon-icon-todo">
                                    <use xlink:href="#icon-todo"></use>
                                </svg></span><span class="sidebar__link-text">Todo</span></span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
