@extends('Layout.App')

@section('content')
    <div class="pages-careers">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXTDXX" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <div id="o-wrapper" class="wrapper">





            <div id="phone">
                <a href="tel:+1 (650) 233-6196"><img src="/assets/d4869f7f/img/button_phone.svg" alt="button_phone"></a>
            </div>
            <div class="newsletter">
                <div class="newsletter-title">
                    This website uses cookies to enhance site navigation and improve functionality, analyze site usage, and
                    assist in our marketing and advertising efforts. Please click "I accept cookies" to let us know you're
                    okay with our use of all cookies. For more information please see the cookies section of our <a
                        class="newsletter-link" href="/privacy-policy#cookies-section">Privacy Policy</a>.
                </div>
                <div class="newsletter-button">
                    <a class="popup-ok">i accept cookies</a>
                </div>
            </div>

            <div class="hero-slider--nav">
                <div class="hero-slider__item" style="background-image:url(/assets/d4869f7f/img/careers/slide_2.jpg)">
                    <div class="hero-slider__content">
                        <span class="title__preheader title__preheader--tag title__preheader--white">Company</span>
                        <h1 class="title title--uppercase title--margin-top white-text h1">
                            Join Our Forward-Thinking Innovators
                        </h1>
                        <p class="hero-slider__lead white-text lead-text">
                            We are an experienced, forward-thinking team of software engineers shaping a new reality with
                            exciting
                            ideas and cutting-edge technology. Join us and get new opportunities for career growth.
                        </p>
                    </div>
                </div>
            </div>
            <div id="map" class="map-scroll" style="background-image: url('{{ asset('assets/d4869f7f/img/bg-about-map.png') }}')">
                <section class="jobs">
                    <div class="container">
                        <h2 class="jobs__title">Open positions</h2>
                        <div id="jobsApp"></div>
                        <div class="jobs__cv-block">
                            <div class="jobs__cv-header">Haven’t found the position you’re interested in?</div>
                            <a class="button button--send-cv company-careers-send-cv"
                                href="https://intellectsoft.workable.com/jobs/585405" target="_blank">Send
                                Us Your CV</a>
                        </div>
                    </div>
                </section>
            </div>
            <section class="service-cta service-cta--about">
                <div class="service-cta__text-area service-cta__text-area--careers">
                    <h3 class="service-cta__title">Important Notice</h3>
                    <p class="service-cta__text">Intellectsoft and its representatives will never assign tasks or make
                        hires without
                        a preliminary face-to-face or video-call interview. Please be mindful and do not reveal any personal
                        information during unsolicited phone calls and text communications. If you have any additional
                        questions,
                        please contact us via e-mail:</p>
                    <a class="service-cta__link"
                        href="mailto:talent.acquisition@intellectsoft.net">talent.acquisition@intellectsoft.net</a>
                </div>
            </section>
            <div class="contacts-popup">
                <div class="contacts-popup__wrap contact-section">
                    <svg class="contacts-popup__close pop-up-close" width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.00009 10.121L13.3031 15.425C13.5845 15.7064 13.9661 15.8645 14.3641 15.8645C14.762 15.8645 15.1437 15.7064 15.4251 15.425C15.7065 15.1436 15.8646 14.762 15.8646 14.364C15.8646 13.9661 15.7065 13.5844 15.4251 13.303L10.1201 8L15.4241 2.697C15.5634 2.55767 15.6738 2.39227 15.7492 2.21025C15.8245 2.02823 15.8633 1.83315 15.8632 1.63615C15.8632 1.43915 15.8243 1.24409 15.7489 1.0621C15.6735 0.880117 15.5629 0.71477 15.4236 0.575503C15.2843 0.436236 15.1189 0.325777 14.9368 0.250431C14.7548 0.175086 14.5597 0.13633 14.3627 0.136376C14.1657 0.136423 13.9707 0.175271 13.7887 0.250702C13.6067 0.326133 13.4414 0.436671 13.3021 0.576004L8.00009 5.879L2.69709 0.576004C2.55879 0.432674 2.39333 0.318324 2.21036 0.239626C2.02739 0.160927 1.83058 0.119456 1.63141 0.117632C1.43224 0.115808 1.23471 0.153668 1.05033 0.229002C0.86595 0.304336 0.698421 0.415637 0.557516 0.556409C0.416611 0.697181 0.305153 0.864606 0.229644 1.04891C0.154136 1.23322 0.11609 1.43072 0.117726 1.62989C0.119363 1.82906 0.160648 2.02591 0.239174 2.20895C0.3177 2.39199 0.431894 2.55757 0.575092 2.696L5.88009 8L0.576093 13.303C0.294698 13.5844 0.136612 13.9661 0.136612 14.364C0.136612 14.762 0.294698 15.1436 0.576093 15.425C0.857487 15.7064 1.23914 15.8645 1.63709 15.8645C2.03504 15.8645 2.4167 15.7064 2.69809 15.425L8.00009 10.12V10.121Z"
                            fill="white" />
                    </svg>
                    <div class="contacts-popup__info">
                        <h2>Request a Free Quote</h2>
                        <div class="rating-items">
                            <div class="rating-items__item">
                                <svg width="66" height="66" viewbox="0 0 66 66" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="33" cy="33" r="33" fill="white"></circle>
                                    <path
                                        d="M41.2221 41.1917C39.1792 42.826 36.3192 44.0517 33.4592 44.0517C26.922 44.0517 22.4276 39.1488 22.4276 32.6116C22.4276 26.0744 26.922 21.5801 33.4592 21.5801C36.3192 21.5801 39.1792 22.3972 41.2221 24.4401L42.4478 25.6658L48.985 19.5372L47.3507 18.3115C43.6735 15.0429 38.7706 13 33.4592 13C22.019 13 13.439 21.5801 13.439 33.0202C13.439 44.4603 22.019 53.0404 33.4592 53.0404C38.7706 53.0404 43.6735 50.9975 47.3507 47.7289L48.985 46.5032L42.4478 39.966L41.2221 41.1917Z"
                                        fill="#343434"></path>
                                    <path
                                        d="M33.0499 39.5588C36.6603 39.5588 39.5871 36.632 39.5871 33.0216C39.5871 29.4112 36.6603 26.4844 33.0499 26.4844C29.4395 26.4844 26.5127 29.4112 26.5127 33.0216C26.5127 36.632 29.4395 39.5588 33.0499 39.5588Z"
                                        fill="#EF4335"></path>
                                </svg>
                                <div class="rating-items__text">
                                    <div class="stars">
                                        <span>4.9</span>
                                        <svg width="115" height="18" viewbox="0 0 115 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.47368 14.4663L15.3284 18L13.7747 11.34L18.9474 6.85895L12.1358 6.28105L9.47368 0L6.81158 6.28105L0 6.85895L5.17263 11.34L3.61895 18L9.47368 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M33.421 14.4663L39.2757 18L37.722 11.34L42.8946 6.85895L36.0831 6.28105L33.421 0L30.7588 6.28105L23.9473 6.85895L29.1199 11.34L27.5662 18L33.421 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M57.3682 14.4663L63.223 18L61.6693 11.34L66.8419 6.85895L60.0303 6.28105L57.3682 0L54.7061 6.28105L47.8945 6.85895L53.0672 11.34L51.5135 18L57.3682 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M81.316 14.4663L87.1707 18L85.617 11.34L90.7897 6.85895L83.9781 6.28105L81.316 0L78.6539 6.28105L71.8423 6.85895L77.0149 11.34L75.4612 18L81.316 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M105.263 14.4663L111.118 18L109.564 11.34L114.737 6.85895L107.925 6.28105L105.263 0L102.601 6.28105L95.7896 6.85895L100.962 11.34L99.4085 18L105.263 14.4663Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <span>Our rating on Clutch</span>
                                </div>
                            </div>
                            <div class="rating-items__item">
                                <svg width="43" height="43" viewbox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle cx="21.3634" cy="21.6368" r="20.927" fill="white" stroke="white"
                                        stroke-width="0.643909" />
                                    <rect x="7.84131" y="8.11532" width="27.0442" height="27.0442" rx="1.28782"
                                        fill="url(#pattern0)" />

                                </svg>
                                <div class="rating-items__text">
                                    <div class="stars">
                                        <span>5</span>
                                        <svg width="115" height="18" viewbox="0 0 115 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.47368 14.4663L15.3284 18L13.7747 11.34L18.9474 6.85895L12.1358 6.28105L9.47368 0L6.81158 6.28105L0 6.85895L5.17263 11.34L3.61895 18L9.47368 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M33.421 14.4663L39.2757 18L37.722 11.34L42.8946 6.85895L36.0831 6.28105L33.421 0L30.7588 6.28105L23.9473 6.85895L29.1199 11.34L27.5662 18L33.421 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M57.3682 14.4663L63.223 18L61.6693 11.34L66.8419 6.85895L60.0303 6.28105L57.3682 0L54.7061 6.28105L47.8945 6.85895L53.0672 11.34L51.5135 18L57.3682 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M81.316 14.4663L87.1707 18L85.617 11.34L90.7897 6.85895L83.9781 6.28105L81.316 0L78.6539 6.28105L71.8423 6.85895L77.0149 11.34L75.4612 18L81.316 14.4663Z"
                                                fill="white"></path>
                                            <path
                                                d="M105.263 14.4663L111.118 18L109.564 11.34L114.737 6.85895L107.925 6.28105L105.263 0L102.601 6.28105L95.7896 6.85895L100.962 11.34L99.4085 18L105.263 14.4663Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <span>Our rating on Business of Apps</span>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-popup__logos">
                            <div class="logos"></div>
                        </div>
                        <div class="contacts-popup__offices">
                            <h3>We have offices in:</h3>
                            <div class="contacts-popup__offices-wrap">
                                <span>San Francisco</span>
                                <span>Oslo</span>
                                <span>New York</span>
                                <span>London</span>
                            </div>
                        </div>
                    </div>
                    <div id="form-wrap-popup" class="form-wrap__flexbox form-contacts-popup">
                        <h2><span class="desk-text">Contact us</span> <span class="mob-text">Request a Free Quote</span>
                        </h2>
                        <form autocomplete="off" id="form-contacts-popup" style="display: flex"
                            class="form form--contact form--contact--rating contact-me-about" action="#"
                            method="post" enctype="multipart/form-data" data-handler data-form-id="form-contacts-popup"
                            data-type="ContactForm" data-id="98b78903-c3fa-45fe-9a4e-b57d7e95e4c9"
                            data-url="//traccoon.intellectsoft.net/forms/intellectsoft/contacts">
                            <div class="form-group">
                                <label class="label" for="name-popup">First Name*</label>
                                <input id="name-popup" type="text" class="form-control" name="name"
                                    maxlength="255">
                            </div>
                            <div class="form-group">
                                <label class="label" for="last_name-popup">Last Name*</label>
                                <input id="last_name-popup" type="text" class="form-control" name="last_name"
                                    maxlength="255">
                            </div>
                            <div class="form-group">
                                <label class="label" for="email-popup">Email*</label>
                                <input type="text" id="email-popup" class="form-control" name="email"
                                    maxlength="255">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone-number-popup" class="form-control" name="phone"
                                    maxlength="50">
                                <input id="country-popup" name="country" type="hidden" value>
                            </div>
                            <div class="form-group">
                                <label class="label" for="company-popup">Company</label>
                                <input type="text" id="company-popup" class="form-control" name="company"
                                    maxlength="255">
                            </div>
                            <div class="form-group form-group--description">
                                <label class="label" for="description-popup">Tell us about your project*</label>
                                <textarea class="form__textarea" id="description-popup" name="description" maxlength="65535"></textarea>
                                <div class="form__footer">
                                    <div class="form-group upload-wrapper js-emptyFiles">
                                        <input type="file" id="attach-popup" name="attach" data-label="Attach file">
                                        <button class="clear-attach">x</button>
                                        <label class="upload__label upload__label--white" for="attach-popup">
                                            <span class="uploaded__text">
                                                <i class="isoi-paper-clip"></i>Attach file </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form__footer form__footer--rating">
                                <div class="form-group no-validation-icon">
                                    <input type="hidden" name="send_nda" value="0">
                                    <input type="checkbox" id="send_nda-popup" class="form__checkbox" name="send_nda"
                                        value="0">
                                    <label class="form__checkbox-label" for="send_nda-popup">Request an NDA</label>
                                </div>
                                <div class="form-group privacy__text">
                                    By sending this form I confirm that I have read and accept Intellectsoft
                                    <a href="https://www.intellectsoft.net/privacy-policy">Privacy Policy</a>
                                </div>
                                <button
                                    class="form__submit form__submit--contact button--white-green send-get-in-touch pop-up-form-submit">
                                    Send
                                </button>
                            </div>
                            <input type="hidden" id="check-browse-popup" class="check-browse" name="check_ad_block">
                            <p class="contact__error">Something went wrong. Send form again, please.</p>
                            <div class="form-spinner">
                                <div class="rect1"></div>
                                <div class="rect2"></div>
                                <div class="rect3"></div>
                                <div class="rect4"></div>
                                <div class="rect5"></div>
                            </div>
                        </form>
                        <div class="js-thx thank thank--border-none text-white" style="display: none;">
                            <div class="thank__content thank__content--blue">
                                <h3 class="thank__title thank__title--big">Thank you for your message!</h3>
                                <p class="thank__text">We will get in touch with you regarding your request within one
                                    business day.</p>
                                <a id="clearStorage-popup" href class="button button--primary">Send again</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
