<header class="header-style-1 ">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('home') }}"> <img src="/wp-content/uploads/2019/02/logo222.png" alt="Ecova">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="menu-main-menu" class="navbar-nav mr-auto">
                    <li id="menu-item-2213"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2213"><a
                        href="{{ route('home') }}">Anasayfa </a></li>
                        <li id="menu-item-2213"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2213"><a
                        href="{{ route('services') }}">E-Atıklar </a></li>
                        <li id="menu-item-2213"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2213"><a
                        href="{{ route('about') }}">Hakkımızda </a></li>
                        <li id="menu-item-2213"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2213"><a
                        href="{{ route('contact') }}">İletişim </a></li>

            </ul>
            <ul class="float-right topside-menu">
                <li><a class="con" href="tel:{{ $phone }}">0 535 492 80 38
                </a>
                </li>
                <li>
                    <a href="https://wa.me/{{ $phone }}">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
