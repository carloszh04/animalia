<header id="header-wrap" class="relative">     
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                	<span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                          	<a class="page-scroll {{ request()->routeIs('animals') ? 'active' : '' }}" href="{{ route('animals') }}">Animales</a>
                        </li>
                        <li class="nav-item">
                          	<a class="page-scroll {{ request()->routeIs('doctors') ? 'active' : '' }}" href="{{ route('doctors') }}">Doctores</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>