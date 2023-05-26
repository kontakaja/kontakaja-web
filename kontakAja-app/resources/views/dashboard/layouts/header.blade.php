<header class="header">
    <div class="header__inner">
        <div class="container-fluid">
            <div class="header__row row justify-content-between">
                <div class="header__col-left col d-flex align-items-center">
                    <div class="header__left-toggle">
                        <button class="header__toggle-menu toggle-sidebar" type="button">
                            <svg class="icon-icon-menu">
                                <use xlink:href="#icon-menu"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="header__col-right col d-flex align-items-center">
                    <div class="header__profile dropdown">
                        @auth
                            <a class="header__profile-toggle dropdown__toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false" title="Name">
                                <div class="header__profile-image"><span
                                        class="header__profile-image-text">MA</span>
                                    <img src="{{ asset('img/content/humans/item-4.jpg') }}" alt="Image profile {{ $user }}" />
                                </div>
                                <div class="header__profile-text"><span>{{ $user }}</span>
                                </div><span class="icon-arrow-down">
                                    <svg class="icon-icon-arrow-down">
                                        <use xlink:href="#icon-arrow-down"></use>
                                    </svg></span>
                            </a>
                            <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a
                                    class="profile-dropdown__item dropdown-menu__item" href="#"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-user">
                                            <use xlink:href="#icon-user"></use>
                                        </svg></span><span>My Profile</span></a><a
                                    class="profile-dropdown__item dropdown-menu__item" href="#"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-chat">
                                            <use xlink:href="#icon-chat"></use>
                                        </svg></span><span>My chat</span></a><a
                                    class="profile-dropdown__item dropdown-menu__item" href="#"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-task">
                                            <use xlink:href="#icon-task"></use>
                                        </svg></span><span>Tasks</span></a><a
                                    class="profile-dropdown__item dropdown-menu__item" href="#"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-settings">
                                            <use xlink:href="#icon-settings"></use>
                                        </svg></span><span>Settings</span></a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <div class="dropdown-menu__divider"></div>
                                    <button type="submit" class="profile-dropdown__item dropdown-menu__item"
                                        tabindex="0">
                                        <span class="profile-dropdown__icon">
                                            <svg class="icon-icon-logout">
                                                <use xlink:href="#icon-logout"></use>
                                            </svg>
                                        </span><span>Logout</span>
                                    </button>
                                </form>
                            @else
                                <a href="/login"
                                    class="nav-link text-decoration-none mx-2 text-dark link-primary">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
