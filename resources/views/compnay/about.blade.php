@extends('Layout.App')

@section('content')
    <div class="pages-about">
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

            <section id="heroAbout" class="hero hero--full video-section">
                <div class="video-wrapper">
                    <video class="video-bg" autoplay loop muted playsinline
                        poster="/assets/d4869f7f/img/about-page/bg-poster.jpg">
                        <source src="/assets/d4869f7f/video/about-bg-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="container about-header">
                    <div class="hero__content">
                        <div class="title__preheader title__preheader--tag">Company</div>
                        <h1 class="title title--uppercase">
                            About Intellectsoft </h1>
                        <p class="hero__lead">We are a digital transformation consultancy and engineering company that
                            delivers cutting edge solutions for global organisations and technology startups. Since 2007 we
                            have been helping companies and established brands reimagine their business through
                            digitalisation.</p>
                    </div>
                </div>
            </section>
            <div id="map" class="map-scroll" style="background-image: url('{{ asset('assets/d4869f7f/img/bg-about-map.png') }}')">
                <div class="container mission-vision">
                    <div class="grid grid--column grid--center">
                        <h2 class="title title--black title--medium title--uppercase">Mission & Vision</h2>
                        <p class="text text--w-large text--s-small">Our mission is to help enterprises accelerate adoption
                            of new technologies, untangle complex issues that always emerge during digital evolution, and
                            orchestrate ongoing innovation. Whether it is a consumer-oriented app or a transformative
                            enterprise-class solution, the company leads the process from ideation and concept to delivery,
                            and provides ongoing support through its IS360 framework.</p>
                    </div>
                </div>
                <section id class=" cemetery__title--center cemetery cemetery-about hide">
                    <div class="container">
                        <div class="cemetery__title cemetery__title--center">
                            <h2>Our clients</h2>
                            <p class="description">For over 10 years, Intellectsoft has been helping Fortune 500 companies
                                and established brands build solid software foundations for their businesses.</p>
                        </div>
                        <div id="cemetery" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/universal.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/griffins.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/hoosbaa.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/nestle.svg"></div>
                            </div>
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/nhs.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/land-rover.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/af-gruppen.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/clinique.svg"></div>
                            </div>
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/guinness.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/jaguar.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/wynn.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/harley.svg"></div>
                            </div>
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/eurostar.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/walt-disney.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/melco.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/gulls.svg"></div>
                            </div>
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/ey.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/guest-services.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/euro-accident.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/audi.svg"></div>
                            </div>
                            <div class="item">
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/kjk.svg">
                                </div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/cirrus.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/bombardier.svg"></div>
                                <div class="cemetery__image owl-lazy lazyload"
                                    data-src="/assets/d4869f7f/img/clients-logo/giant.svg"></div>
                            </div>
                        </div>
                        <a class="all-link all-link-about" href="/contacts">Let’s discuss your next project <i
                                class="isoi-angle-right"></i></a>
                    </div>
                </section>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                <symbol id="hexagon" viewbox="0 0 184 161">
                    <polygon points="184 80.5 138 161 46 161 0 80.5 46 0 138 0"></polygon>
                    <path d="M6,168.5 L30.5,153.5 L6,168.5 Z"></path>
                </symbol>
            </svg>
            <section class="enterprise-core-mob">
                <div id="particles" style="background-image: url('{{asset('assets/d4869f7f/img/home-offers/bg-offers.webp')}}')"></div>
                <div class="divider-t-50">
                    <div class="container">
                        <div class="grid grid--column grid--center">
                            <h2 class="title title--black title--medium title--uppercase">Technology excellence</h2>
                        </div>
                    </div>
                </div>
                <div class="tech-container">
                    <div class="tech-item main">
                        <svg class="tech-triangle up" xmlns="http://www.w3.org/2000/svg" width="276" height="40"
                            viewbox="0 0 276 40">
                            <polygon fill="#1476F2" fill-rule="evenodd" points="276 40 0 40 134.979 0" />
                        </svg>
                        <input type="checkbox" class="read-more-state" id="post-0" />
                        <div class="read-more-wrap">
                            <h3>ENTERPRISE CORE</h3>
                            <p>We offer comprehensive tech expertise and enterprise IT support. Our software development
                                services include strategy consulting, CX design, engineering, and lifecycle management of
                                custom products, as well as system integration.</p>
                        </div>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="40"
                            viewbox="0 0 276 40">
                            <polygon fill="#1476F2" fill-rule="evenodd" points="276 0 134.979 40 0 0" />
                        </svg>
                        <label for="post-0" class="read-more-trigger main"></label>
                        <div class="bg-cube"></div>
                    </div>
                    <div class="tech-item">
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/blockchain-technology.svg" alt="Blockchain">
                            <figcaption style="text-align: center">
                                <h4>
                                    <a href="https://blockchain.intellectsoft.net/">Blockchain</a>
                                </h4>
                            </figcaption>
                        </figure>
                        <input type="checkbox" class="read-more-state" id="post-1" />
                        <ul class="item-list read-more-wrap">
                            <li>Public and private blockchains</li>
                            <li>Distributed transaction platforms</li>
                            <li>Smart contracts</li>
                            <li>Cryptocurrencies, wallets, and exchanges</li>
                            <li>Blockchains and cryptocurrencies forks</li>
                            <li>
                                <a href="https://blockchain.intellectsoft.net/">learn more<i
                                        class="isoi-angle-right"></i></a>
                            </li>
                        </ul>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="42"
                            viewbox="0 0 276 42">
                            <path fill="#FFF" fill-rule="evenodd" stroke="#AAC7ED" d="M276 1L138 41 0 1" />
                        </svg>
                        <label for="post-1" class="read-more-trigger"></label>
                    </div>
                    <div class="tech-item">
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/augmented-reality.svg" alt="XR">
                            <figcaption style="text-align: center">
                                <h4><a href="https://ar.intellectsoft.net/">XR</a></h4>
                            </figcaption>
                        </figure>
                        <input type="checkbox" class="read-more-state" id="post-2" />
                        <ul class="item-list read-more-wrap">
                            <li>Mixed reality applications</li>
                            <li>Industrial AR/VR solutions</li>
                            <li>3D modelling and prototyping</li>
                            <li>Installations and trainings</li>
                            <li>
                                <a href="https://ar.intellectsoft.net/">learn more<i class="isoi-angle-right"></i></a>
                            </li>
                        </ul>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="42"
                            viewbox="0 0 276 42">
                            <path fill="#FFF" fill-rule="evenodd" stroke="#AAC7ED" d="M276 1L138 41 0 1" />
                        </svg>
                        <label for="post-2" class="read-more-trigger"></label>
                    </div>
                    <div class="tech-item">
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/page.svg" alt="UX">
                            <figcaption style="text-align: center">
                                <h4><a href="/services/ui-ux-design-services">UX</a>
                                </h4>
                            </figcaption>
                        </figure>
                        <input type="checkbox" class="read-more-state" id="post-3" />
                        <ul class="item-list read-more-wrap">
                            <li>UI / Front-end design</li>
                            <li>CX and digital journeys</li>
                            <li>Low-code mobile platforms</li>
                            <li>App management and analytics</li>
                            <li>
                                <a href="/services/ui-ux-design-services">learn more<i class="isoi-angle-right"></i></a>
                            </li>
                        </ul>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="42"
                            viewbox="0 0 276 42">
                            <path fill="#FFF" fill-rule="evenodd" stroke="#AAC7ED" d="M276 1L138 41 0 1" />
                        </svg>
                        <label for="post-3" class="read-more-trigger"></label>
                    </div>
                    <div class="tech-item">
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/artificial-intelligence.svg" alt="AI">
                            <figcaption style="text-align: center">
                                <h4><a href="https://ai.intellectsoft.net/">AI</a></h4>
                            </figcaption>
                        </figure>
                        <input type="checkbox" class="read-more-state" id="post-4" />
                        <ul class="item-list read-more-wrap">
                            <li>Cloud based AI models</li>
                            <li>Machine learning algorithms</li>
                            <li>Data management and analysis</li>
                            <li>Visual information processing</li>
                            <li>
                                <a href="https://ai.intellectsoft.net/">learn more<i class="isoi-angle-right"></i></a>
                            </li>
                        </ul>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="42"
                            viewbox="0 0 276 42">
                            <path fill="#FFF" fill-rule="evenodd" stroke="#AAC7ED" d="M276 1L138 41 0 1" />
                        </svg>
                        <label for="post-4" class="read-more-trigger"></label>
                    </div>
                    <div class="tech-item">
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/internet-of-things.svg" alt="IoT">
                            <figcaption style="text-align: center">
                                <h4><a href="https://iot.intellectsoft.net/">IoT</a>
                                </h4>
                            </figcaption>
                        </figure>
                        <input type="checkbox" class="read-more-state" id="post-5" />
                        <ul class="item-list read-more-wrap">
                            <li>Interconnected smart devices</li>
                            <li>Distributed sensor data applications</li>
                            <li>Embedded platforms</li>
                            <li>Remote monitoring and management</li>
                            <li>
                                <a href="https://iot.intellectsoft.net/">learn more<i class="isoi-angle-right"></i></a>
                            </li>
                        </ul>
                        <svg class="tech-triangle" xmlns="http://www.w3.org/2000/svg" width="276" height="42"
                            viewbox="0 0 276 42">
                            <path fill="#FFF" fill-rule="evenodd" stroke="#AAC7ED" d="M276 1L138 41 0 1" />
                        </svg>
                        <label for="post-5" class="read-more-trigger"></label>
                    </div>
                </div>
            </section>
            <section class="enterprise-core">
                <div id="particles"></div>
                <div class="divider-t-50">
                    <div class="container">
                        <div class="grid grid--column grid--center">
                            <h2 class="title title--black title--medium title--uppercase">Technology excellence</h2>
                        </div>
                    </div>
                </div>
                <div class="hexa-container">
                    <div class="item item-top">
                        <svg class="hex hex-outer" viewbox="0 0 232 203">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 1.000000)" stroke="#AAC7ED">
                                    <polygon points="230 100.5 172.5 201 57.5 201 0 100.5 57.5 0 172.5 0"></polygon>
                                    <path d="M114,233.538767 L114,201"></path>
                                </g>
                            </g>
                        </svg>
                        <svg class="hex hex-inner">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/blockchain-technology.svg" alt="Blockchain">
                            <figcaption style="text-align: center">
                                <h3><a href="https://blockchain.intellectsoft.net/">Blockchain<i
                                            class="isoi-angle-right"></i></a>
                                </h3>
                            </figcaption>
                        </figure>
                        <ul class="item-list item-list-top">
                            <li>Public and private blockchains</li>
                            <li>Distributed transaction platforms</li>
                            <li>Smart contracts</li>
                            <li>Cryptocurrencies, wallets, and exchanges</li>
                            <li>Blockchains and cryptocurrencies forks</li>
                        </ul>
                    </div>
                    <div class="item item-right-top">
                        <svg class="hex hex-outer" viewbox="0 0 232 203">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 1.000000)" stroke="#AAC7ED">
                                    <polygon points="230 100.5 172.5 201 57.5 201 0 100.5 57.5 0 172.5 0"></polygon>
                                    <path d="M6,168.5 L30.5,153.5 L6,168.5 Z"></path>
                                </g>
                            </g>
                        </svg>
                        <svg class="hex hex-inner">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/augmented-reality.svg" alt="XR">
                            <figcaption style="text-align: center">
                                <h3>
                                    <a href="https://ar.intellectsoft.net/">XR<i class="isoi-angle-right"></i></a>
                                </h3>
                            </figcaption>
                        </figure>
                        <ul class="item-list item-list-top-right">
                            <li>Mixed reality applications</li>
                            <li>Industrial AR/VR solutions</li>
                            <li>3D modelling and prototyping</li>
                            <li>Installations and trainings</li>
                        </ul>
                    </div>
                    <div class="item item-right-bottom">
                        <svg class="hex hex-outer" viewbox="0 0 232 203">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 1.000000)" stroke="#AAC7ED">
                                    <polygon points="230 100.5 172.5 201 57.5 201 0 100.5 57.5 0 172.5 0"></polygon>
                                    <path d="M26.5,52.5 L3,38"
                                        transform="translate(15.000000, 45.500000) scale(-1, -1) translate(-15.000000, -45.500000)">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <svg class="hex hex-inner">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/page.svg" alt="UX">
                            <figcaption style="text-align: center">
                                <h3>
                                    <a href="/services/ui-ux-design-services"><i class="isoi-angle-right"></i>UX</a>
                                </h3>
                            </figcaption>
                        </figure>
                        <ul class="item-list item-list-bottom-right">
                            <li>UI / Front-end design</li>
                            <li>CX and digital journeys</li>
                            <li>Low-code mobile platforms</li>
                            <li>App management and analytics</li>
                        </ul>
                    </div>
                    <div class="item item-left-bottom">
                        <svg class="hex hex-outer" viewbox="0 0 232 203">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 1.000000)" stroke="#AAC7ED">
                                    <polygon points="230 100.5 172.5 201 57.5 201 0 100.5 57.5 0 172.5 0"></polygon>
                                    <path d="M226.5,52.5 L202.5,38"
                                        transform="translate(214.500000, 45.500000) scale(1, -1) translate(-214.500000, -45.500000) ">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <svg class="hex hex-inner">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/artificial-intelligence.svg" alt="AI">
                            <figcaption style="text-align: center">
                                <h3>
                                    <a href="https://ai.intellectsoft.net/">AI<i class="isoi-angle-right"></i></a>
                                </h3>
                            </figcaption>
                        </figure>
                        <ul class="item-list item-list-bottom-left">
                            <li>Cloud based AI models</li>
                            <li>Machine learning algorithms</li>
                            <li>Data management and analysis</li>
                            <li>Visual information processing</li>
                        </ul>
                    </div>
                    <div class="item item-left-top">
                        <svg class="hex hex-outer" viewbox="0 0 232 203">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 1.000000)" stroke="#AAC7ED">
                                    <polygon points="230 100.5 172.5 201 57.5 201 0 100.5 57.5 0 172.5 0"></polygon>
                                    <path d="M224.5,168.5 L199.5,153.5"></path>
                                </g>
                            </g>
                        </svg>
                        <svg class="hex hex-inner">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media">
                            <img src="/assets/d4869f7f/img/home-offers/internet-of-things.svg" alt="IoT">
                            <figcaption style="text-align: center">
                                <h3>
                                    <a href="https://iot.intellectsoft.net/">IoT<i class="isoi-angle-right"></i></a>
                                </h3>
                            </figcaption>
                        </figure>
                        <ul class="item-list item-list-bottom-left">
                            <li>Interconnected smart devices</li>
                            <li>Distributed sensor data applications</li>
                            <li>Embedded platforms</li>
                            <li>Remote monitoring and management</li>
                        </ul>
                    </div>
                    <div class="item item-center">
                        <svg class="hex">
                            <use xlink:href="#hexagon" />
                        </svg>
                        <figure class="hex-media hex-media-center" style="background-image: url('{{ asset('assets/d4869f7f/img/about-page/cube.png') }}')">
                            <figcaption style="text-align: center">
                                <h3>ENTERPRISE CORE</h3>
                                <p>We offer comprehensive tech expertise and enterprise IT support. Our software development
                                    services include strategy consulting, CX design, engineering, and lifecycle management
                                    of custom products, as well as system integration.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <div class="divider-t-70 about-news">
                <div class="container">
                    <div class="grid grid--column grid--center">
                        <h2 class="title title--black title--medium title--uppercase">Intellectsoft News</h2>
                        <p class="text text--w-large text--s-small">Read about our latest projects, partnerships,
                            appointments, events, and other news.</p>
                    </div>
                </div>
            </div>
            <div class="posts-container divider-b-75 about-news">
                <div class="container">
                    <div id="newsPosts">
                         <div data-reactroot="" class="grid no-padding-20 m-right-md-none js-show">
    <div class="posts-container posts-container--news .divider-b-75">
        <a href="https://www.intellectsoft.net/blog/events-new-clutch-awards-forbes-and-other-intellectsoft-news/" class="blog-feed__item blog-feed__item--news">
            <div class="blog-feed__content blog-feed__content--news">
                <a
                    class="blog-feed__link blog-feed__link--news"
                    href="https://www.intellectsoft.net/blog/events-new-clutch-awards-forbes-and-other-intellectsoft-news/"
                    style="background-image: url('https://www.intellectsoft.net/blog/wp-content/uploads/Company-news-nay-600x346.jpg');"
                ></a>
                <div class="blog-feed__content__wrapper">
                    <div class="blog-feed__preheader"><span class="blog-feed__date blog-feed__date--news">May 25, 2023</span><span class="blog-feed__tag blog-feed__tag--news">News</span></div>
                    <a class="blog-feed__title-link" href="https://www.intellectsoft.net/blog/events-new-clutch-awards-forbes-and-other-intellectsoft-news/">
                        <h3 class="blog-feed__title blog-feed__title--news">Events, New Clutch Awards, Forbes, and Other Intellectsoft News</h3>
                    </a>
                    <p class="blog-feed__lead">For the last few months, we worked hard on our projects, yet we didn’t forget about other activit...</p>
                </div>
            </div>
        </a>
        <a href="https://www.intellectsoft.net/blog/intellectsoft-recognized-by-goodfirms-as-the-best-company-to-work-with/" class="blog-feed__item blog-feed__item--news">
            <div class="blog-feed__content blog-feed__content--news">
                <a
                    class="blog-feed__link blog-feed__link--news"
                    href="https://www.intellectsoft.net/blog/intellectsoft-recognized-by-goodfirms-as-the-best-company-to-work-with/"
                    style="background-image: url('https://www.intellectsoft.net/blog/wp-content/uploads/blog-is-1-3-600x252.jpg');"
                ></a>
                <div class="blog-feed__content__wrapper">
                    <div class="blog-feed__preheader"><span class="blog-feed__date blog-feed__date--news">November 22, 2022</span><span class="blog-feed__tag blog-feed__tag--news">News</span></div>
                    <a class="blog-feed__title-link" href="https://www.intellectsoft.net/blog/intellectsoft-recognized-by-goodfirms-as-the-best-company-to-work-with/">
                        <h3 class="blog-feed__title blog-feed__title--news">Intellectsoft Recognized by GoodFirms as the Best Company to Work With</h3>
                    </a>
                    <p class="blog-feed__lead">Product development and mobile app development involve complex processes with numerous intricacie...</p>
                </div>
            </div>
        </a>
        <a href="https://www.intellectsoft.net/blog/ceo-alexander-radchenko-leads-intellectsoft-by-focusing-on-people-and-technology/" class="blog-feed__item blog-feed__item--news">
            <div class="blog-feed__content blog-feed__content--news">
                <a
                    class="blog-feed__link blog-feed__link--news"
                    href="https://www.intellectsoft.net/blog/ceo-alexander-radchenko-leads-intellectsoft-by-focusing-on-people-and-technology/"
                    style="background-image: url('https://www.intellectsoft.net/blog/wp-content/uploads/Radchenko-3-600x252.jpg');"
                ></a>
                <div class="blog-feed__content__wrapper">
                    <div class="blog-feed__preheader"><span class="blog-feed__date blog-feed__date--news">November 15, 2022</span><span class="blog-feed__tag blog-feed__tag--news">News</span></div>
                    <a class="blog-feed__title-link" href="https://www.intellectsoft.net/blog/ceo-alexander-radchenko-leads-intellectsoft-by-focusing-on-people-and-technology/">
                        <h3 class="blog-feed__title blog-feed__title--news">CEO Alexander Radchenko Leads Intellectsoft by Focusing on People and Technology</h3>
                    </a>
                    <p class="blog-feed__lead">Incorporated in 2007 and headquartered in New York, Intellectsoft is a digital transformation con...</p>
                </div>
            </div>
        </a>
    </div>
</div>

                    </div>
                </div>
            </div>
            <div class="ranking">
                <div class="container">
                    <h2 class="ranking__title">Awards & Recognition</h2>
                    <div class="owl-carousel" id="ranking">
                        <div class="ranking__item item">
                            <a href="https://www.expertise.com/ny/nyc/software-development">
                                <img width="67px" height="54px" style="max-width: 67px" class="ranking__img lazyload"
                                    data-src="/assets/d4869f7f/img/ratings-logos/ny_nyc_software-development_2022.png"
                                    alt="Best Software Development Companies in New York City!">
                            </a>
                        </div>
                        <div class="ranking__item item">
                            <a href="https://www.designrush.com/agency/software-development">
                                <img width="90px" height="39px" class="ranking__img lazyload"
                                    data-src="/assets/d4869f7f/img/ratings-logos/Design-Rush-Accredited-Badge3.png"
                                    alt="Design Rush Accredited">
                            </a>
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="60px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/iOS-App-Developers_2021-300x200.png"
                                alt="TOP IOS APP DEVELOPERS 2021">
                        </div>
                        <div class="ranking__item item">
                            <img width="60px" height="60px" style="max-width: 67px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/new-badge.png" alt="TOP SOFTWARE DEVELOPER">
                        </div>
                        <div class="ranking__item item">
                            <img width="67px" height="72px" style="max-width: 67px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img//form-ratings/B2B_Companies_2021.png"
                                alt="B2B Companies 2021">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/regionals.png" alt="Ratings">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/clutch-global-2018.png"
                                alt="Clutch Global 2018">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/iaop.png" alt="IAOP">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/inc-5000.png" alt="Inc 5000">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/stevies.png" alt="The Stevies">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/top-design.png" alt="Top Design Firms">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/goodfirms-software.png"
                                alt="Goodfirms Software">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/clutch-blockchain.png"
                                alt="Clutch Blockchain">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/techies.png" alt="Techies">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/itfirms.png" alt="IT Firms">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/business-apps.png" alt="Business of Apps">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/goodfirms.png" alt="Goodfirms">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/clutch-2017.png" alt="Clutch 2017">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/appindex.png" alt="Appindex">
                        </div>
                        <div class="ranking__item item">
                            <img width="90px" height="77px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/ibm.png" alt="IBM Essentials">
                        </div>
                        <div class="ranking__item item">
                            <img width="55px" height="77px" style="height: 77px;width: 55px;"
                                class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/App-Modernization.png"
                                alt="App Modermization Companies">
                        </div>
                        <div class="ranking__item item">
                            <img width="55px" height="77px" style="height: 77px;width: 55px;"
                                class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/goodfirms-best-company-to-work-badge.png"
                                alt="Goodfirms">
                        </div>
                        <div class="ranking__item item">
                            <img width="164px" height="54px" style="height: 54px;width: 164px;"
                                class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/TB-trusted-on-transparent-light-bg.svg"
                                alt="TB-trusted">
                        </div>
                        <div class="ranking__item item">
                            <img width="85px" height="85px" class="ranking__img lazyload"
                                data-src="/assets/d4869f7f/img/ratings-logos/top-app-developers-2023.png"
                                alt="TOP APP DEVELOPERS 2023">
                        </div>
                    </div>
                </div>
            </div>
            <section class="service-cta service-cta--about" style="background-image: url('{{ asset('assets/d4869f7f/img/about-page/our-work.webp') }}')">
                <div class="service-cta__text-area service-cta__text-area--it-consulting">
                    <p class="service-cta__white">At Intellectsoft we help business build an intelligently designed digital
                        future. Tell us about your idea, and we’ll offer the most fitting technological solution.</p>
                    <a class="get-touch btn btn--about-news" href="/contacts">Talk to us</a>
                </div>
            </section>
            <div class="divider-t-70 divider-b-80 our-work-wrapper">
                <div class="our-work">
                    <div class="our-work__item">
                        <h3>OUR CLIENTS</h3>
                        <p>See how we helped our clients succeed in Digital Transformation.</p>
                        <a href="clients">learn more<i class="isoi-angle-right"></i></a>
                    </div>
                    <div class="our-work__item">
                        <h3>OUR TEAM</h3>
                        <p>Meet the leadership and talents propelling Intellectsoft’s progress.</p>
                        <a href="team">learn more<i class="isoi-angle-right"></i></a>
                    </div>
                    <div class="our-work__item">
                        <h3>OUR CAREERS</h3>
                        <p>Explore current career opportunities in our offices around the world.</p>
                        <a href="careers">learn more<i class="isoi-angle-right"></i></a>
                    </div>
                </div>
            </div>
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
                                    <a href="/privacy-policy">Privacy Policy</a>
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
