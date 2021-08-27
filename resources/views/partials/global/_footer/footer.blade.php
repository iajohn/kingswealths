<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">
        <!-- column start -->
        <div class="two-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="assets/images/logo/logo-white.png" alt="logo">
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-right-margin-10">
                <ul class="footer-menu text-color-4">
                    <li>
                        <a href="{{route('home')}}" class="pointer-small animsition-link small-title-oswald hover-color {{ (Request::is('homes') ? 'active' : '') }}">{{ trans('website/nav/general.home') }}</a>
                    </li>
                    
                    <li>
                        <a href="{{route('about')}}" class="pointer-small animsition-link small-title-oswald hover-color {{ (Request::is('about') ? 'active' : '') }}"  >{{ trans('website/nav/general.about') }}</a>
                    </li>
                    
                    <li>
                        <a href="{{route('services')}}" class="pointer-small animsition-link small-title-oswald hover-color {{ (Request::is('services') ? 'active' : '') }}">{{ trans('website/nav/general.services') }}</a>
                    </li>
                    
                    <!-- <li><a class="pointer-small animsition-link small-title-oswald hover-color" href="portfolio.html">Portfolio</a></li>
                    <li><a class="pointer-small animsition-link small-title-oswald hover-color" href="blog.html">Blog</a></li> -->
                    <li>
                        <a href="{{route('contact')}}" class="pointer-small animsition-link small-title-oswald hover-color {{ (Request::is('contact') ? 'active' : '') }}">{{ trans('website/nav/general.contact') }}</a>
                    </li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="four-columns bottom-padding-60">
            <div class="content-left-right-margin-10 footer-center-mobile">
                <ul class="footer-information text-color-4">
                    <li>
                        <i class="far fa-envelope"></i><a href="mailto:{{ trans('website/contact/general.gmail') }}" class="xsmall-title-oswald pointer-small">{{ trans('website/contact/general.gmail') }}</a>
                    </li>

                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <a href="tel:{{ trans('website/contact/general.phone') }}" class="small-title-oswald">
                            {{ trans('website/contact/general.phone') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="" class="small-title-oswald text-height-17">
                            {{ trans('website/contact/general.address_1') }}<br>
                            <span>{{ trans('website/contact/general.address_2') }}</span>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="" class="small-title-oswald text-height-17">
                            {{ trans('website/contact/general.address_3') }}<br>
                            <span>{{ trans('website/contact/general.address_4') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-margin-10">
                <ul class="footer-social">
                    <li>
                        <div class="flip-btn-box">
                            <a href="https://m.facebook.com/Nelson-Kingswealth-115505189076318/" target="_blank" class="flip-btn pointer-small" data-text="{{ trans('website/contact/social.facebook') }}">{{ trans('website/contact/social.facebook') }}</a>
                        </div>
                    </li>

                    <li>
                        <div class="flip-btn-box">
                            <a href="https://www.instagram.com/iamkingswealth/" target="_blank" class="flip-btn pointer-small" data-text="{{ trans('website/contact/social.instagram') }}">{{ trans('website/contact/social.instagram') }}</a>
                        </div>
                    </li>

                    <li>
                        <div class="flip-btn-box">
                            <a href="https://www.linkedin.com/in/prince-nelson-kingswealth-628031153" target="_blank" class="flip-btn pointer-small" data-text="{{ trans('website/contact/social.linkedIn') }}">{{ trans('website/contact/social.linkedIn') }}</a>
                        </div>
                    </li>

                    <li>
                        <div class="flip-btn-box">
                            <a href="https://twitter.com/iamkingswealth?s=08" target="_blank" class="flip-btn pointer-small" data-text="{{ trans('website/contact/social.twitter') }}">{{ trans('website/contact/social.twitter') }}</a>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="flip-btn-box">
                            <a href="#" class="flip-btn pointer-small" data-text="Spotify">Spotify</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="#" class="flip-btn pointer-small" data-text="Vimeo">Vimeo</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="#" class="flip-btn pointer-small" data-text="Behance">Behance</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright KINGSWEALTH. Designed by <a style="color: #51a2b8;" href="https://www.dudgital.com" >DUDGITAL</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer>