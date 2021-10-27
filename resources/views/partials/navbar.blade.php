        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-size: 1.5rem;">
                    <img src="img/logo.png" alt="" width="55" height="55" class="d-inline-block align-text-center">
                    <strong>Creative Corner</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mx-3" id="navbarsMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Club
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/club"><i class="bi bi-brush"></i> Design
                                        Graphic
                                    </a></li>
                                <li><a class="dropdown-item" href="/club2"> <i class="bi bi-laptop"></i> Web
                                        Design
                                    </a></li>
                                <li><a class="dropdown-item" href="/club3"><i class="bi bi-camera-video"></i>
                                        Video Editing
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booking">Booking</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-layout-text-sidebar-reverse"></i>
                                        New Post</a></li>
                                <li>
                                <li><a class="dropdown-item" href="/profile"><i class="bi bi-file-person"></i>
                                        Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else

                            <li class="nav-item">
                                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                                    Login</a>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </nav>
        <hr class="p-0 m-0">
@yield('body-container')