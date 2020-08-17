<section class="contact-form-box flex-min-height-box" style="background-image:url(assets/images/backgrounds/pexels-photo-1287145.jpg)">
    <div class="bg-overlay"></div>
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- container start -->
        <div class="container small top-bottom-padding-120">
            <h4 class="small-title-oswald text-color-4 text-center">Lets Get In Touch!</h4>

            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="flex-container top-padding-90">
                @csrf

                <div class="six-columns">
                    <div class="content-right-margin-10">
                        <input type="text" name="firstname" placeholder="Enter your first name" class="contact-form-control pointer-small" required>
                    </div>
                </div>

                <div class="six-columns">
                    <div class="content-left-margin-10">
                        <input type="text" name="lastname" placeholder="Enter your last name" class="contact-form-control pointer-small" required>
                    </div>
                </div>
                
                <div class="six-columns">
                    <div class="content-right-margin-10">
                        <input type="email" name="email" placeholder="Enter your email address" class="contact-form-control pointer-small" required>
                    </div>
                </div>

                <div class="six-columns">
                    <div class="content-left-margin-10">
                        <input type="text" name="subject" placeholder="Enter message subject" class="contact-form-control pointer-small" required>
                    </div>
                </div>
                
                <div class="twelve-columns">
                    <textarea name="content" placeholder="Enter your message" class="contact-form-control pointer-small" required></textarea>
                </div>
                
                {{--@if(env('GOOGLE_RECAPTCHA_KEY'))
                    <div class="row">
                        <div class="columns-12-md text-right">
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                        </div>
                    </div>
                @endif--}}
                
                <div class="twelve-columns top-padding-20">
                    <div class="">
                        {!! app('captcha')->display() !!}
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="twelve-columns text-center top-padding-90">
                    <button type="submit" class="border-btn-box pointer-large">
                        <span class="border-btn-inner">
                            <span class="border-btn" data-text="submit">submit</span>
                        </span>
                    </button>

                    <!--<button
						class="g-recaptcha border-btn-box pointer-large"
						data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"
						data-callback="onSubmit">
						<span class="border-btn-inner">
                            <span class="border-btn" data-text="submit">submit</span>
                        </span>
					</button>-->
                </div><!-- column end -->
            </form>
        </div>
    </div>
</section>