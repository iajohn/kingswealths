<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="assets/images/logo/logo-white.png" alt="logo">
    </div><!-- nav-logo end -->
    
    <!-- menu-close -->
    <div class="menu-close pointer-large"></div>

    <!-- dropdown-close-box start -->
    <div class="dropdown-close-box">
        <div class="dropdown-close pointer-large">
            <span></span>
        </div>
    </div><!-- dropdown-close-box end -->

    <!-- nav-menu start -->
    <ul class="nav-menu dark-bg-1">
        <!-- Home nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('home') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{ trans('website/nav/general.home') }}">{{ trans('website/nav/general.home') }}</span>
            </a>
            <div class="nav-bg" style="background-image: url(assets/images/backgrounds/home-nav.jpg);"></div>
        </li>

        <!-- About nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('about') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{ trans('website/nav/general.about') }}">{{ trans('website/nav/general.about') }}</span>
            </a>
            <div class="nav-bg" style="background-image: url(assets/images/backgrounds/about.jpg);"></div>
        </li>

        <!-- Services nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('services') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{ trans('website/nav/general.services') }}">{{ trans('website/nav/general.services') }}</span>
            </a>
            <div class="nav-bg" style="background-image: url(assets/images/backgrounds/banner.jpg);"></div>
        </li>

        <!-- Contact nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('contact') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{ trans('website/nav/general.contact') }}">{{ trans('website/nav/general.contact') }}</span>
            </a>
            <div class="nav-bg" style="background-image: url(assets/images/backgrounds/double-exposure-2390185_1920.jpg);"></div>
        </li>
        
        {{--
            <!-- nav-box start -->
            <li class="nav-box nav-bg-change active dropdown-open">
                <a class="pointer-large nav-link">
                    <span class="nav-btn active" data-text="Home">Home</span>
                </a>
                
                <!-- dropdown start -->
                <ul class="dropdown">
                    <li class="nav-box">
                        <a href="index.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Slider Home">Slider Home</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="video_home.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Video Bg">Video Bg</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="home_fullscreen.html" class="animsition-link pointer-large">
                            <span class="nav-btn active" data-text="Fullscreen Bg">Fullscreen Bg</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="home_particles.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Particles">Particles</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="home_typewriter.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Typewriter">Typewriter</span>
                        </a>
                    </li>
                </ul><!-- dropdown end -->
                
                <div class="nav-bg" style="background-image: url(assets/images/backgrounds/pexels-photo-1806031.jpg);"></div>
            </li>

            <!-- nav-box start -->
            <li class="nav-box nav-bg-change dropdown-open">
                <a class="pointer-large nav-link">
                    <span class="nav-btn" data-text="Portfolio">Portfolio</span>
                </a>
                
                <!-- dropdown start -->
                <ul class="dropdown">
                    <li class="nav-box">
                        <a href="portfolio.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Standard">Standard</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio_full_screen.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="FullScreen">FullScreen</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio_slider.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Slider 1">Slider 1</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio_columns_slider.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Slider 2">Slider 2</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio_filter.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Filter">Filter</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="project.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Single project">Single project</span>
                        </a>
                    </li>
                </ul><!-- dropdown end -->
                
                <div class="nav-bg" style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
            </li>
            <!-- nav-box end -->
            <!-- nav-box start -->
            <li class="nav-box nav-bg-change dropdown-open">
                <a class="pointer-large nav-link">
                    <span class="nav-btn" data-text="Blog">Blog</span>
                </a>
                
                <!-- dropdown start -->
                <ul class="dropdown">
                    <li class="nav-box">
                        <a href="blog.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Blog">Blog</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="single_post.html" class="animsition-link pointer-large">
                            <span class="nav-btn" data-text="Single post">Single post</span>
                        </a>
                    </li>
                </ul><!-- dropdown end -->
                
                <div class="nav-bg" style="background-image: url(assets/images/backgrounds/beautiful-black-close-up-1689731.jpg);"></div>
            </li>
            <!-- nav-box end -->
        --}}
        
    </ul><!-- nav-menu end -->
</nav>