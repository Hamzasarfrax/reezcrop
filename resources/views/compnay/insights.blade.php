@extends('Layout.App')

@section('content')
<link rel="stylesheet" href="{{ asset('Asset/Css/automize.css') }}">
<div class="page-template page-template-templates page-template-template-insights page-template-templatestemplate-insights-php page page-id-17652 group-blog">
     <noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXTDXX" height="0" width="0" style="display: none; visibility: hidden;"></iframe> </noscript>
     <div id="o-wrapper" class="site">
         
         <div id="content" class="site-content">
             <section
                 class="lazyload hero insights-hero"
                 data-bg="{{asset('assets/d4869f7f/img/insights.jpg')}}"
                 style="background-image: url('{{asset('assets/d4869f7f/img/insights.jpg')}}');"
             >
                 <div class="container">
                     <div class="page-title"><h1>Insights</h1></div>
                     <div class="page-content text--center">
                         <p><span style="font-weight: 400;">Gain unique insights into the technology and software industry with our in-depth content based on real-life projects and unique expertise of our developers.</span></p>
                     </div>
                     <aside class="sidebar">
                         <form id="search-form" role="search" method="get" class="search-form" action="https://www.intellectsoft.net/blog/">
                             <button class="search-submit" type="submit">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14">
                                     <path
                                         fill="#323232"
                                         fill-rule="evenodd"
                                         d="M13.743 12.574L9.91 8.74a5.426 5.426 0 0 0 1.05-3.232A5.531 5.531 0 0 0 5.46 0 5.436 5.436 0 0 0 0 5.468a5.532 5.532 0 0 0 5.5 5.508 5.409 5.409 0 0 0 3.242-1.061l.004-.003 3.83 3.831a.826.826 0 1 0 1.167-1.169zM5.496 9.878a4.426 4.426 0 0 1-4.4-4.406 4.35 4.35 0 0 1 4.368-4.374 4.426 4.426 0 0 1 4.4 4.406 4.35 4.35 0 0 1-4.368 4.374z"
                                         opacity=".5"
                                     />
                                 </svg>
                             </button>
                             <input type="hidden" name="post_type" value="insights" /> <input type="search" class="search-field" maxlength="80" autocomplete="off" placeholder="Search" value name="s" />
                             <svg class="search-form__close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20">
                                 <g fill="none" fill-rule="evenodd">
                                     <circle cx="10" cy="10" r="10" fill="#323232" />
                                     <g stroke="#FFF" stroke-linecap="round" stroke-linejoin="round"><path d="M6 13.778L13.778 6M13.778 13.778L6 6" /></g>
                                 </g>
                             </svg>
                         </form>
                     </aside>
                 </div>
             </section>
             <div class="insights">
                 <div class="breadcrumb">
                     <div class="container">
                         <ul>
                             <li><a href="https://www.intellectsoft.net/">Home</a></li>
                             <li class="ellipsis">Insights</li>
                         </ul>
                     </div>
                 </div>
                 <div class="container container-nopadd">
                     <div class="columns medium-3">
                         <div class="insights__sidebar">
                             <h2>Types</h2>
                             <ul class="insights__sidebar--cat">
                                 <li class="insights__sidebar--link all"><a href="https://www.intellectsoft.net/insights">All</a></li>
                                 <li class="insights__sidebar--link ebooks"><a href="https://www.intellectsoft.net/insights/ebooks/">Ebooks</a></li>
                                 <li class="insights__sidebar--link videos"><a href="https://www.intellectsoft.net/insights/videos/">Conferences</a></li>
                                 <li class="insights__sidebar--link webinars"><a href="https://www.intellectsoft.net/insights/webinars/">Webinars</a></li>
                                 <li class="insights__sidebar--link case-studies"><a href="https://www.intellectsoft.net/insights/case-studies/">Case Studies</a></li>
                             </ul>
                             <div class="insights__sidebar--external">
                                 <div class="insights__sidebar--case"><a href="https://www.intellectsoft.net/cases" target="_blank" class="button btn-blue">Clients Success </a></div>
                                 <div class="insights__sidebar--blog"><a href="https://www.intellectsoft.net/blog" target="_blank" class="button btn-blue">Blog </a></div>
                             </div>
                             <div class="insights__sidebar--topics">
                                 <h2>Tags</h2>
                                 <div class="insights__sidebar--tags">
                                     <form action="?" method="post" class="form-filter">
                                         <div><input type="checkbox" name="item[]" id="hospitality" data-slug="hospitality" class="br" /> <label for="hospitality">Hospitality</label></div>
                                         <div><input type="checkbox" name="item[]" id="fintech" data-slug="fintech" class="br" /> <label for="fintech">Fintech</label></div>
                                         <div><input type="checkbox" name="item[]" id="insuranse" data-slug="insuranse" class="br" /> <label for="insuranse">Insuranse</label></div>
                                         <div><input type="checkbox" name="item[]" id="healthcare" data-slug="healthcare" class="br" /> <label for="healthcare">Healthcare</label></div>
                                         <div><input type="checkbox" name="item[]" id="technologies" data-slug="technologies" class="br" /> <label for="technologies">Technologies</label></div>
                                         <div><input type="checkbox" name="item[]" id="construction" data-slug="construction" class="br" /> <label for="construction">Construction</label></div>
                                         <div><input type="checkbox" name="item[]" id="blockhain" data-slug="blockhain" class="br" /> <label for="blockhain">Blockhain</label></div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="columns medium-9">
                         <div class="insights__list">
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/blog/future-software-development-2022-2025/">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Insightsfuture-of-software-1.png" alt="Insightsfuture of software 1" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Insightsfuture-of-software-1.png"
                                                     alt="Insightsfuture of software 1"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>The Future of Software Development: Trends, Technologies, and Key Challenges 2022-2025</h2></div>
                                         <div class="insights__list--excerpt"><p>Discover the major challenges and trends in software development that will define the course of the industry in 2022 and beyond.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/blog/future-software-development-2022-2025/" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/blog/healthcare-industry-big-data-2022/">
                                                 <div class="webinar-image">
                                                     <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Big-data-healthcare-insights.png" alt="Healthcare Industry webinars" /></noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Big-data-healthcare-insights.png"
                                                         alt="Healthcare Industry webinars"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>How the Healthcare Industry Can Leverage Big Data in 2022</h2></div>
                                         <div class="insights__list--excerpt"></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/blog/healthcare-industry-big-data-2022/" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/44/webinar-digitalization-construction-2021">
                                                 <div class="webinar-image">
                                                     <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/34df7853-16d9-4a09-b8a3-a9aab75ef350.jpg" alt="webinars" /></noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/34df7853-16d9-4a09-b8a3-a9aab75ef350.jpg"
                                                         alt="webinars"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>End-to-end Process Digitalization in Construction</h2></div>
                                         <div class="insights__list--excerpt"><p>How to drastically improve efficiency and boost performance</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/44/webinar-digitalization-construction-2021" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/43/future-of-healthcare">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/book.png" alt="Healthcare Ebook" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/book.png"
                                                     alt="Healthcare Ebook"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Strategic Trends to Prepare for the New Era in Healthcare: Comprehensive Guide</h2></div>
                                         <div class="insights__list--excerpt"><p>Learn more about the current state of healthcare and the best practices of digital transformation to effectively enhance your business in 2021.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/43/future-of-healthcare" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/42/webinar-retail-industry-2021">
                                                 <div class="webinar-image">
                                                     <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/retail.png" alt="retail" /></noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/retail.png"
                                                         alt="retail"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>5 Strategies Retailers</h2></div>
                                         <div class="insights__list--excerpt"><p>Should Adopt to Fully Digitize and Grow Business in 2021</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/42/webinar-retail-industry-2021" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/41/engagement-models-billing-plans">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights-1.jpg" alt="intellectsoft ebooks" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights-1.jpg"
                                                     alt="intellectsoft ebooks"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Extensive Guide to IT Outsourcing: Engagement Models &#038; Billing Plans Explained</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Effective software development outsourcing is based on fundamental engagement models and billing plans. Learn more about each of them to make a suitable and cost-efficient&#8230;</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/41/engagement-models-billing-plans" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/39/integrated-resorts-hospitality-case-study">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/preview-insights.png" alt="preview insights" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/preview-insights.png"
                                                     alt="preview insights"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Hospitality</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Major Integrated Resorts Reinventing Post-Digital Guest Experience</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Read the story of the major Integrated Resorts in Macau that sought digital collaboration to develop a single-platform solution for addressing several business challenges through&#8230;</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/39/integrated-resorts-hospitality-case-study" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/38/webinar-future-of-fintech">
                                                 <div class="webinar-image">
                                                     <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Fintech-2021-webinar.png" alt="Fintech 2021 webinar" /></noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Fintech-2021-webinar.png"
                                                         alt="Fintech 2021 webinar"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                             <div class="insights__list--tag"><span>Fintech</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>The Future of FinTech</h2></div>
                                         <div class="insights__list--excerpt"><p>Insights, Trends, and Use Cases Defining the Industry in 2021</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/38/webinar-future-of-fintech" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/37/insurtech-vision-2021">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights-2.jpg" alt="Insights 2" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights-2.jpg"
                                                     alt="Insights 2"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Insuranse</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Insurtech Vision for Serving Tomorrow’s Insurance Customers</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Being digital is no longer a competitive advantage. Technology has already become an inextricable part of the human experience. What today’s focus of modern insurance&#8230;</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/37/insurtech-vision-2021" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview case-studies">
                                             <a href="https://www.intellectsoft.net/l/35/dental-clinic-healthcare-case-study">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/6-1-3.jpg" alt="intellectsoft case studies" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/6-1-3.jpg"
                                                     alt="intellectsoft case studies"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="case-studies"> Case Studies </span></div>
                                             <div class="insights__list--tag"><span>Healthcare</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Leading Dental Clinic Enables Digital Customer Experience Transformation</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Read the story of a nationwide medical equipment &amp; supplies laboratory who sought collaboration on addressing a number of critical business challenges through digital innovation.</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/35/dental-clinic-healthcare-case-study" class="btn">Get The Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview case-studies">
                                             <a href="https://www.intellectsoft.net/l/34/euro-accident-healthcare-insurance-provider-case-study">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/6-1-4.jpg" alt="intellectsoft success stories" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/6-1-4.jpg"
                                                     alt="intellectsoft success stories"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="case-studies"> Case Studies </span></div>
                                             <div class="insights__list--tag"><span>Healthcare</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Euro Accident: Becoming Customer-Centric in the Digital World</h2></div>
                                         <div class="insights__list--excerpt"><p>Learn how leading European healthcare insurance provider transformed customer experience with an innovative cloud-based mobile solution</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/34/euro-accident-healthcare-insurance-provider-case-study" class="btn">Get The Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://intellectsoft.net/l/33/ebook-digital-health-strategy">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/healthcare-mini.jpg" alt="healthcare mini" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/healthcare-mini.jpg"
                                                     alt="healthcare mini"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Healthcare</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Digital Health Strategy</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>A definitive guide to key industry insights on how healthcare organizations can employ digital technologies and strategically transform their businesses.</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://intellectsoft.net/l/33/ebook-digital-health-strategy" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/32/ebook-driving-strategic-it-cost-optimization">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/7-5.jpg" alt="software industry Insights" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/7-5.jpg"
                                                     alt="software industry Insights"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Technologies</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>DRIVING STRATEGIC IT COST OPTIMIZATION</h2></div>
                                         <div class="insights__list--excerpt"><p>A definitive guide to key initiatives for driving real value through cost-effective digital transformation in the enterprise in uncertain times</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/32/ebook-driving-strategic-it-cost-optimization" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/31/webinar-digital-healthcare">
                                                 <div class="webinar-image">
                                                     <noscript>
                                                         <img
                                                             src="https://www.intellectsoft.net/blog/wp-content/uploads/digital-health-strategy-leveraging-emerging-technologies-in-healthcare.png"
                                                             alt="digital health strategy leveraging emerging technologies in healthcare"
                                                         />
                                                     </noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/digital-health-strategy-leveraging-emerging-technologies-in-healthcare.png"
                                                         alt="digital health strategy leveraging emerging technologies in healthcare"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                             <div class="insights__list--tag"><span>Healthcare</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Digital Health Strategy</h2></div>
                                         <div class="insights__list--excerpt"><p>Leveraging Emerging Technologies in Healthcare</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/31/webinar-digital-healthcare" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/29/webinar-digital-transformation-in-construction">
                                                 <div class="webinar-image">
                                                     <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/digital_transformation_in_construction.png" alt="digital transformation in construction" /></noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/digital_transformation_in_construction.png"
                                                         alt="digital transformation in construction"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                             <div class="insights__list--tag"><span>Construction</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Digital Transformation in Construction</h2></div>
                                         <div class="insights__list--excerpt"><p>How digitalization helps the industry reborn during a crisis, and why to act now.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/29/webinar-digital-transformation-in-construction" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/l/24/webinar-digital-transformation-in-hospitality">
                                                 <div class="webinar-image">
                                                     <noscript>
                                                         <img
                                                             src="https://www.intellectsoft.net/blog/wp-content/uploads/digital_transformation_in_hospitality__entertainment_casws.jpg"
                                                             alt="digital transformation in hospitality entertainment casws"
                                                         />
                                                     </noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/digital_transformation_in_hospitality__entertainment_casws.jpg"
                                                         alt="digital transformation in hospitality entertainment casws"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                             <div class="insights__list--tag"><span>Hospitality</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Digital Transformation In Hospitality &#038; Entertainment + Cases</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>From smart rooms to blockchain-based loyalty systems, our top experts explain how hotels use a set of different technologies to transform for the digital age.</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/24/webinar-digital-transformation-in-hospitality" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/27/digital-transformation-hospitality-tech-guide">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights.jpg" alt="Insights" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/Insights.jpg"
                                                     alt="Insights"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Hospitality</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Digital Transformation In Hospitality &#038; Entertainment</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>From smart rooms to artificial intelligence to blockchain, learn how to perform a full-scale digital transformation with an ebook based on unique real-life projects.</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/27/digital-transformation-hospitality-tech-guide" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/0jHfE_pxeNk?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-12.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Workshop: Blockchain POC Development for the Enterprise</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>
                                                 At our workshops, certified blockchain experts will explain the types and differences of centralized and distributed solutions, including public and private blockchains, and lead
                                                 participants&#8230;
                                             </p>
                                         </div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Tim Kozak and Nick Kurat, Intellectsoft Blockchain Lab<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/0jHfE_pxeNk?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/docs/user-acquisition-strategy">
                                                 <noscript>
                                                     <img
                                                         src="https://www.intellectsoft.net/blog/wp-content/uploads/user_acquisition_explained_a_Cost_effective_Strategy_for_finding_the_audience_your_app_deserves.png"
                                                         alt="user acquisition explained a Cost effective Strategy for finding the audience your app deserves"
                                                     />
                                                 </noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/user_acquisition_explained_a_Cost_effective_Strategy_for_finding_the_audience_your_app_deserves.png"
                                                     alt="user acquisition explained a Cost effective Strategy for finding the audience your app deserves"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Technologies</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>User Acquisition Explained</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>From pinpointing your app’s key qualities to selecting the right features to perfecting your app store profile, learn everything you need to know about user&#8230;</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/docs/user-acquisition-strategy" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview webinars">
                                             <a class="webinar-link" href="https://www.intellectsoft.net/docs/webinar-tokenization">
                                                 <div class="webinar-image">
                                                     <noscript>
                                                         <img
                                                             src="https://www.intellectsoft.net/blog/wp-content/uploads/transforming_the_enterprise_with_blockchain_tokenization.png"
                                                             alt="transforming the enterprise with blockchain tokenization"
                                                         />
                                                     </noscript>
                                                     <img
                                                         class="lazyload"
                                                         src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                         data-src="https://www.intellectsoft.net/blog/wp-content/uploads/transforming_the_enterprise_with_blockchain_tokenization.png"
                                                         alt="transforming the enterprise with blockchain tokenization"
                                                     />
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="webinars"> Webinars </span></div>
                                             <div class="insights__list--tag"><span>Blockhain</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Transforming The Enterprise With Blockchain Tokenization</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Learn why tokenization outlasted other blockchain concepts and the real value it brings to enterprises in a talk with the industry’s leading experts.</p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/docs/webinar-tokenization" class="btn">Watch the webinar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/K4adssmkQqo?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-10.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>The Whole is Greater than the Sum of its Parts</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>Hyperledger was formed with the vision of establishing a community where we could bring together the smartest minds to solve the challenges of delivering blockchain&#8230;</p>
                                         </div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Christopher Ferris, IBM<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/K4adssmkQqo?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/3K9hnt5b9Ck?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-8.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>The state of trust: can DLT really help re-building it?</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>In a world where trust has become one of the leading values, enabling our digital lifestyle, how well is the financial industry positioned to support&#8230;</p>
                                         </div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Mariana Gómez de la Villa, ING<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/3K9hnt5b9Ck?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/docs/staff-augmentation">
                                                 <noscript>
                                                     <img
                                                         src="https://www.intellectsoft.net/blog/wp-content/uploads/staff_augmentation_an_intelligent_solution_for_supplementing_нour_software_teams.png"
                                                         alt="staff augmentation an intelligent solution for supplementing нour software teams"
                                                     />
                                                 </noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/staff_augmentation_an_intelligent_solution_for_supplementing_нour_software_teams.png"
                                                     alt="staff augmentation an intelligent solution for supplementing нour software teams"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag">
                                                 <span>Blockhain</span> <span>Construction</span> <span>Fintech</span> <span>Healthcare</span> <span>Hospitality</span> <span>Insuranse</span> <span>Technologies</span>
                                             </div>
                                         </div>
                                         <div class="insights__list--title"><h2>Staff Augmentation: An Intelligent Solution For Supplementing Your Software Teams</h2></div>
                                         <div class="insights__list--excerpt"><p>If you want to hire top experts using staff augmentation, learn everything you need to know about the service in our concise ebook.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/docs/staff-augmentation" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/faMZDLEkbrs?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-13.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Open source blockchain for the energy industry</h2></div>
                                         <div class="insights__list--excerpt"></div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Ana Trbovich, Grid Singularity<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/faMZDLEkbrs?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/0tJMfoopzC4?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-7.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Making Enterprise Blockchain a Reality</h2></div>
                                         <div class="insights__list--excerpt">
                                             <p>After all the experimentation with blockchain in prior years, are the enterprises ready to go live? What do enterprises need to succeed with blockchain projects,&#8230;</p>
                                         </div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Joost Volker, Oracle<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/0tJMfoopzC4?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/jf9Ie812M4c?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-9.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Insights from Enterprise Blockchain Engineering</h2></div>
                                         <div class="insights__list--excerpt"></div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Nick Kurat, Intellectsoft Blockchain Lab<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/jf9Ie812M4c?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/l/22/how-to-create-a-mobile-app-guide">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/how_to_create_mobile_app.jpg" alt="how to create mobile app" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/how_to_create_mobile_app.jpg"
                                                     alt="how to create mobile app"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag">
                                                 <span>Blockhain</span> <span>Construction</span> <span>Fintech</span> <span>Healthcare</span> <span>Hospitality</span> <span>Insuranse</span> <span>Technologies</span>
                                             </div>
                                         </div>
                                         <div class="insights__list--title"><h2>How To Create A Mobile App: Step-by-Step Guide</h2></div>
                                         <div class="insights__list--excerpt"><p>Build a solid mobile product that will appeal to its audience with our descriptive guide to every step of the mobile app development process.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/l/22/how-to-create-a-mobile-app-guide" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/docs/cost-to-make-a-mobile-app">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/how_much_does_it_cost_to_create_mobile_app.png" alt="how much does it cost to create mobile app" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/how_much_does_it_cost_to_create_mobile_app.png"
                                                     alt="how much does it cost to create mobile app"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag">
                                                 <span>Blockhain</span> <span>Construction</span> <span>Fintech</span> <span>Healthcare</span> <span>Hospitality</span> <span>Insuranse</span> <span>Technologies</span>
                                             </div>
                                         </div>
                                         <div class="insights__list--title"><h2>How Much Does It Cost To Create A Mobile App?</h2></div>
                                         <div class="insights__list--excerpt"><p>Discover how different stages of mobile app development influence the budget of applications, why marketing is key, and more.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/docs/cost-to-make-a-mobile-app" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview videos">
                                             <a class="various" href="https://www.youtube.com/embed/KqYFHDoVt_k?enablejsapi=1">
                                                 <div
                                                     class="lazyload"
                                                     data-bg="https://www.intellectsoft.net/blog/wp-content/uploads/Artboard-Copy-11.jpg"
                                                     style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);"
                                                 ></div>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="videos"> Conferences </span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Forks: Eroding the Trust Infrastructure of Blockchain</h2></div>
                                         <div class="insights__list--excerpt"></div>
                                         <div class="insights__list--additional">
                                             <p>
                                                 Kristen Stone, Coinbase<br />
                                                 Rethink Trust Conference 2018
                                             </p>
                                         </div>
                                         <div class="insights__list--button">
                                             <a href="https://www.youtube.com/embed/KqYFHDoVt_k?enablejsapi=1" class="btn various">Watch the Video <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="insights__list--box insight-home">
                                 <div class="row">
                                     <div class="columns medium-4">
                                         <div class="insights__list--preview ebooks">
                                             <a href="https://www.intellectsoft.net/docs/blockchain-technology-guide">
                                                 <noscript><img src="https://www.intellectsoft.net/blog/wp-content/uploads/blockchain_Revolution_-you_can’t_stop.png" alt="blockchain Revolution you can’t stop" /></noscript>
                                                 <img
                                                     class="lazyload"
                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                     data-src="https://www.intellectsoft.net/blog/wp-content/uploads/blockchain_Revolution_-you_can’t_stop.png"
                                                     alt="blockchain Revolution you can’t stop"
                                                 />
                                             </a>
                                         </div>
                                     </div>
                                     <div class="columns medium-8 padd-left">
                                         <div class="insights__list--heading">
                                             <div class="insights__list--cat"><span class="ebooks"> Ebooks </span></div>
                                             <div class="insights__list--tag"><span>Blockhain</span></div>
                                         </div>
                                         <div class="insights__list--title"><h2>Blockchain – A Revolution You Can’t Stop</h2></div>
                                         <div class="insights__list--excerpt"><p>Get front-row insights from our blockchain experts to discover why blockchain is becoming a powerful driver in enterprise operations.</p></div>
                                         <div class="insights__list--button">
                                             <a href="https://www.intellectsoft.net/docs/blockchain-technology-guide" class="btn">Get the ebook <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <script>
                                 var ajaxurl = "https://www.intellectsoft.net/blog/wp-admin/admin-ajax.php";
                                 var true_posts =
                                     'a:66:{s:9:"post_type";s:8:"insights";s:5:"order";s:4:"DESC";s:7:"orderby";s:4:"date";s:14:"posts_per_page";i:30;s:5:"error";s:0:"";s:1:"m";s:0:"";s:1:"p";i:0;s:11:"post_parent";s:0:"";s:7:"subpost";s:0:"";s:10:"subpost_id";s:0:"";s:10:"attachment";s:0:"";s:13:"attachment_id";i:0;s:4:"name";s:0:"";s:8:"pagename";s:0:"";s:7:"page_id";i:0;s:6:"second";s:0:"";s:6:"minute";s:0:"";s:4:"hour";s:0:"";s:3:"day";i:0;s:8:"monthnum";i:0;s:4:"year";i:0;s:1:"w";i:0;s:13:"category_name";s:0:"";s:3:"tag";s:0:"";s:3:"cat";s:0:"";s:6:"tag_id";s:0:"";s:6:"author";s:0:"";s:11:"author_name";s:0:"";s:4:"feed";s:0:"";s:2:"tb";s:0:"";s:5:"paged";i:0;s:8:"meta_key";s:0:"";s:10:"meta_value";s:0:"";s:7:"preview";s:0:"";s:1:"s";s:0:"";s:8:"sentence";s:0:"";s:5:"title";s:0:"";s:6:"fields";s:0:"";s:10:"menu_order";s:0:"";s:5:"embed";s:0:"";s:12:"category__in";a:0:{}s:16:"category__not_in";a:0:{}s:13:"category__and";a:0:{}s:8:"post__in";a:0:{}s:12:"post__not_in";a:0:{}s:13:"post_name__in";a:0:{}s:7:"tag__in";a:0:{}s:11:"tag__not_in";a:0:{}s:8:"tag__and";a:0:{}s:12:"tag_slug__in";a:0:{}s:13:"tag_slug__and";a:0:{}s:15:"post_parent__in";a:0:{}s:19:"post_parent__not_in";a:0:{}s:10:"author__in";a:0:{}s:14:"author__not_in";a:0:{}s:14:"search_columns";a:0:{}s:19:"ignore_sticky_posts";b:0;s:16:"suppress_filters";b:0;s:13:"cache_results";b:1;s:22:"update_post_term_cache";b:1;s:22:"update_menu_item_cache";b:0;s:19:"lazy_load_term_meta";b:1;s:22:"update_post_meta_cache";b:1;s:8:"nopaging";b:0;s:17:"comments_per_page";s:2:"50";s:13:"no_found_rows";b:0;}';
                                 var current_page = 1;
                                 var max_pages = "2";
                             </script>
                             <div id="true_loadmore_insight">Load more</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="newsletter_new">
                 <div class="container container-nopadd">
                     <div class="columns large-7 medium-6 matchHeight">
                         <div class="form-info">
                             <div class="form-info__image"><div></div></div>
                             <div class="form-info__descr">
                                 <h4 class="title">Sign Up For Our Newsletter</h4>
                                 <p class="description">Get front-row industry insights with our monthly newsletter</p>
                             </div>
                         </div>
                     </div>
                     <div class="columns large-5 medium-6 matchHeight">
                         <div class="newsletter-form">
                             <form autocomplete="off" method="post" class="subscribe-form">
                                 <input type="email" name="email" required placeholder="Email" /> <button class="subscribe-btn" onclick="ga('send', 'event', 'subscribe', 'click', 'blog')" type="submit">Subscribe</button>
                             </form>
                             <span class="success">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewbox="0 0 25 20"><path fill="none" fill-rule="nonzero" stroke="#FFF" stroke-width="3" d="M1 9.253L8.833 17 24 2" /></svg>
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
             <section id="contact-section" class="form-wrap form-wrap--contact section">
                 <div class="container">
                     <div class="contact-section">
                         <div id="form-wrap" class="form-wrap__flexbox">
                             <h3>Contact Us</h3>
                             <form
                                 id="form-contacts"
                                 class="form form--contact form--contact--rating"
                                 action="#"
                                 method="post"
                                 autocomplete="off"
                                 enctype="multipart/form-data"
                                 data-form-id="contact"
                                 data-handler
                                 data-type="ContactForm"
                                 data-portal="98b78903-c3fa-45fe-9a4e-b57d7e95e4c9"
                                 data-url="//traccoon.intellectsoft.net/forms/intellectsoft/contacts"
                                 style="display: flex;"
                             >
                                 <div class="form-group form-group-radio">
                                     <div class="form__radio">
                                         <input type="radio" id="app-development" name="interest" value="App Development" checked /> <label for="app-development" class="selected">App Development</label>
                                         <input type="radio" id="custom-development" name="interest" value="Custom Development" /> <label for="custom-development">Custom Development</label>
                                         <input type="radio" id="Partnership" name="interest" value="Partnership" /> <label for="Partnership">Partnership</label>
                                         <input type="radio" id="worksop-discovery" name="interest" value="Workshop\Discovery" /> <label for="worksop-discovery">Workshop\Discovery</label>
                                         <input type="radio" id="Other" name="interest" value="Other" /> <label for="Other">Other</label>
                                     </div>
                                 </div>
                                 <div class="form__box" data-style="display: flex;">
                                     <div class="form-group"><label class="label" for="name">First Name*</label> <input id="name" type="text" class="form-control" name="name" maxlength="255" /></div>
                                     <div class="form-group"><label class="label" for="last_name">Last Name*</label> <input id="last_name" type="text" class="form-control" name="last_name" maxlength="255" /></div>
                                 </div>
                                 <div class="form-group"><label class="label" for="email">Email*</label> <input type="text" id="email" class="form-control" name="email" maxlength="255" /></div>
                                 <div class="form-group"><input type="text" id="phone-number" class="form-control" name="phone" maxlength="50" /></div>
                                 <div class="form-group"><label class="label" for="company">Company</label> <input type="text" id="company" class="form-control" name="company" maxlength="255" /></div>
                                 <div class="form-group border"><label class="label" for="country">Country*</label> <input type="text" class="form-control" id="country" name="country" maxlength="255" /></div>
                                 <div class="form-group form-group--description">
                                     <label class="label" for="description">How we can help you?*</label><textarea class="form__textarea" id="description" name="description" maxlength="65535"></textarea>
                                     <div class="form__footer">
                                         <div class="form-group upload-wrapper js-emptyFiles">
                                             <input type="file" id="attach" name="attach" data-label="Attach file" /> <button class="clear-attach">x</button>
                                             <label class="upload__label upload__label--white" for="attach">
                                                 <span class="uploaded__text"> <i class="isoi-paper-clip"></i>Attach file </span>
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group privacy__text">By sending this form I confirm that I have read and accept Intellectsoft <a href="https://www.intellectsoft.net/privacy-policy">Privacy Policy</a></div>
                                 <div class="form__footer form__footer--rating">
                                     <div class="form-group no-validation-icon">
                                         <input type="hidden" name="send_nda" value="0" /> <input type="checkbox" id="send_nda" class="form__checkbox" name="send_nda" value="0" />
                                         <label class="form__checkbox-label" for="send_nda">Send NDA</label>
                                     </div>
                                     <button class="form__submit form__submit--contact button--white-green send-get-in-touch">Send</button>
                                 </div>
                                 <input type="hidden" id="check-browse" class="check-browse" name="check_ad_block" value="0" />
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
                                     <p class="thank__text">We will get in touch with you regarding your request within one business day.</p>
                                     <a id="clearStorage" href class="button button--primary">Send again</a>
                                 </div>
                             </div>
                         </div>
                         <div class="contact-information">
                             <h4>What happens next?</h4>
                             <ul>
                                 <li>Our sales manager reaches you out within a few days after analyzing your business requirements</li>
                                 <li>Meanwhile, we sign an NDA to ensure the highest privacy level</li>
                                 <li>Our pre-sale manager presents project estimates and approximate timeline</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
       
         <div class="contacts-popup">
             <div class="contacts-popup__wrap contact-section">
                 <svg class="contacts-popup__close pop-up-close" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         fill-rule="evenodd"
                         clip-rule="evenodd"
                         d="M8.00009 10.121L13.3031 15.425C13.5845 15.7064 13.9661 15.8645 14.3641 15.8645C14.762 15.8645 15.1437 15.7064 15.4251 15.425C15.7065 15.1436 15.8646 14.762 15.8646 14.364C15.8646 13.9661 15.7065 13.5844 15.4251 13.303L10.1201 8L15.4241 2.697C15.5634 2.55767 15.6738 2.39227 15.7492 2.21025C15.8245 2.02823 15.8633 1.83315 15.8632 1.63615C15.8632 1.43915 15.8243 1.24409 15.7489 1.0621C15.6735 0.880117 15.5629 0.71477 15.4236 0.575503C15.2843 0.436236 15.1189 0.325777 14.9368 0.250431C14.7548 0.175086 14.5597 0.13633 14.3627 0.136376C14.1657 0.136423 13.9707 0.175271 13.7887 0.250702C13.6067 0.326133 13.4414 0.436671 13.3021 0.576004L8.00009 5.879L2.69709 0.576004C2.55879 0.432674 2.39333 0.318324 2.21036 0.239626C2.02739 0.160927 1.83058 0.119456 1.63141 0.117632C1.43224 0.115808 1.23471 0.153668 1.05033 0.229002C0.86595 0.304336 0.698421 0.415637 0.557516 0.556409C0.416611 0.697181 0.305153 0.864606 0.229644 1.04891C0.154136 1.23322 0.11609 1.43072 0.117726 1.62989C0.119363 1.82906 0.160648 2.02591 0.239174 2.20895C0.3177 2.39199 0.431894 2.55757 0.575092 2.696L5.88009 8L0.576093 13.303C0.294698 13.5844 0.136612 13.9661 0.136612 14.364C0.136612 14.762 0.294698 15.1436 0.576093 15.425C0.857487 15.7064 1.23914 15.8645 1.63709 15.8645C2.03504 15.8645 2.4167 15.7064 2.69809 15.425L8.00009 10.12V10.121Z"
                         fill="white"
                     />
                 </svg>
                 <div class="contacts-popup__info">
                     <h2>Request a Free Quote</h2>
                     <div class="rating-items">
                         <div class="rating-items__item">
                             <svg width="66" height="66" viewbox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="33" cy="33" r="33" fill="white"></circle>
                                 <path
                                     d="M41.2221 41.1917C39.1792 42.826 36.3192 44.0517 33.4592 44.0517C26.922 44.0517 22.4276 39.1488 22.4276 32.6116C22.4276 26.0744 26.922 21.5801 33.4592 21.5801C36.3192 21.5801 39.1792 22.3972 41.2221 24.4401L42.4478 25.6658L48.985 19.5372L47.3507 18.3115C43.6735 15.0429 38.7706 13 33.4592 13C22.019 13 13.439 21.5801 13.439 33.0202C13.439 44.4603 22.019 53.0404 33.4592 53.0404C38.7706 53.0404 43.6735 50.9975 47.3507 47.7289L48.985 46.5032L42.4478 39.966L41.2221 41.1917Z"
                                     fill="#343434"
                                 ></path>
                                 <path
                                     d="M33.0499 39.5588C36.6603 39.5588 39.5871 36.632 39.5871 33.0216C39.5871 29.4112 36.6603 26.4844 33.0499 26.4844C29.4395 26.4844 26.5127 29.4112 26.5127 33.0216C26.5127 36.632 29.4395 39.5588 33.0499 39.5588Z"
                                     fill="#EF4335"
                                 ></path>
                             </svg>
                             <div class="rating-items__text">
                                 <div class="stars">
                                     <span>4.9</span>
                                     <svg width="115" height="18" viewbox="0 0 115 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M9.47368 14.4663L15.3284 18L13.7747 11.34L18.9474 6.85895L12.1358 6.28105L9.47368 0L6.81158 6.28105L0 6.85895L5.17263 11.34L3.61895 18L9.47368 14.4663Z" fill="white"></path>
                                         <path d="M33.421 14.4663L39.2757 18L37.722 11.34L42.8946 6.85895L36.0831 6.28105L33.421 0L30.7588 6.28105L23.9473 6.85895L29.1199 11.34L27.5662 18L33.421 14.4663Z" fill="white"></path>
                                         <path d="M57.3682 14.4663L63.223 18L61.6693 11.34L66.8419 6.85895L60.0303 6.28105L57.3682 0L54.7061 6.28105L47.8945 6.85895L53.0672 11.34L51.5135 18L57.3682 14.4663Z" fill="white"></path>
                                         <path d="M81.316 14.4663L87.1707 18L85.617 11.34L90.7897 6.85895L83.9781 6.28105L81.316 0L78.6539 6.28105L71.8423 6.85895L77.0149 11.34L75.4612 18L81.316 14.4663Z" fill="white"></path>
                                         <path d="M105.263 14.4663L111.118 18L109.564 11.34L114.737 6.85895L107.925 6.28105L105.263 0L102.601 6.28105L95.7896 6.85895L100.962 11.34L99.4085 18L105.263 14.4663Z" fill="white"></path>
                                     </svg>
                                 </div>
                                 <span>Our rating on Clutch</span>
                             </div>
                         </div>
                         <div class="rating-items__item">
                             <svg width="43" height="43" viewbox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <circle cx="21.3634" cy="21.6368" r="20.927" fill="white" stroke="white" stroke-width="0.643909" />
                                 <rect x="7.84131" y="8.11532" width="27.0442" height="27.0442" rx="1.28782" fill="url(#pattern0)" />
                            
                             </svg>
                             <div class="rating-items__text">
                                 <div class="stars">
                                     <span>5</span>
                                     <svg width="115" height="18" viewbox="0 0 115 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M9.47368 14.4663L15.3284 18L13.7747 11.34L18.9474 6.85895L12.1358 6.28105L9.47368 0L6.81158 6.28105L0 6.85895L5.17263 11.34L3.61895 18L9.47368 14.4663Z" fill="white"></path>
                                         <path d="M33.421 14.4663L39.2757 18L37.722 11.34L42.8946 6.85895L36.0831 6.28105L33.421 0L30.7588 6.28105L23.9473 6.85895L29.1199 11.34L27.5662 18L33.421 14.4663Z" fill="white"></path>
                                         <path d="M57.3682 14.4663L63.223 18L61.6693 11.34L66.8419 6.85895L60.0303 6.28105L57.3682 0L54.7061 6.28105L47.8945 6.85895L53.0672 11.34L51.5135 18L57.3682 14.4663Z" fill="white"></path>
                                         <path d="M81.316 14.4663L87.1707 18L85.617 11.34L90.7897 6.85895L83.9781 6.28105L81.316 0L78.6539 6.28105L71.8423 6.85895L77.0149 11.34L75.4612 18L81.316 14.4663Z" fill="white"></path>
                                         <path d="M105.263 14.4663L111.118 18L109.564 11.34L114.737 6.85895L107.925 6.28105L105.263 0L102.601 6.28105L95.7896 6.85895L100.962 11.34L99.4085 18L105.263 14.4663Z" fill="white"></path>
                                     </svg>
                                 </div>
                                 <span>Our rating on Business of Apps</span>
                             </div>
                         </div>
                     </div>
                     <div class="contacts-popup__logos"><div class="logos"></div></div>
                     <div class="contacts-popup__offices">
                         <h3>We have offices in:</h3>
                         <div class="contacts-popup__offices-wrap"><span>San Francisco</span> <span>Oslo</span> <span>New York</span> <span>London</span></div>
                     </div>
                 </div>
                 <div id="form-wrap-popup" class="form-wrap__flexbox form-contacts-popup">
                     <h2><span class="desk-text">Contact us</span> <span class="mob-text">Request a Free Quote</span></h2>
                     <form
                         autocomplete="off"
                         id="form-contacts-popup"
                         style="display: flex;"
                         class="form form--contact form--contact--rating contact-me-about"
                         action="#"
                         method="post"
                         enctype="multipart/form-data"
                         data-handler
                         data-form-id="form-contacts-popup"
                         data-type="ContactForm"
                         data-id="98b78903-c3fa-45fe-9a4e-b57d7e95e4c9"
                         data-url="//traccoon.intellectsoft.net/forms/intellectsoft/contacts"
                     >
                         <div class="form-group"><label class="label" for="name-popup">First Name*</label> <input id="name-popup" type="text" class="form-control" name="name" maxlength="255" /></div>
                         <div class="form-group"><label class="label" for="last_name-popup">Last Name*</label> <input id="last_name-popup" type="text" class="form-control" name="last_name" maxlength="255" /></div>
                         <div class="form-group"><label class="label" for="email-popup">Email*</label> <input type="text" id="email-popup" class="form-control" name="email" maxlength="255" /></div>
                         <div class="form-group"><input type="text" id="phone-number-popup" class="form-control" name="phone" maxlength="50" /> <input id="country-popup" name="country" type="hidden" value /></div>
                         <div class="form-group"><label class="label" for="company-popup">Company</label> <input type="text" id="company-popup" class="form-control" name="company" maxlength="255" /></div>
                         <div class="form-group form-group--description">
                             <label class="label" for="description-popup">Tell us about your project*</label><textarea class="form__textarea" id="description-popup" name="description" maxlength="65535"></textarea>
                             <div class="form__footer">
                                 <div class="form-group upload-wrapper js-emptyFiles">
                                     <input type="file" id="attach-popup" name="attach" data-label="Attach file" /> <button class="clear-attach">x</button>
                                     <label class="upload__label upload__label--white" for="attach-popup">
                                         <span class="uploaded__text"> <i class="isoi-paper-clip"></i>Attach file </span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class="form__footer form__footer--rating">
                             <div class="form-group no-validation-icon">
                                 <input type="hidden" name="send_nda" value="0" /> <input type="checkbox" id="send_nda-popup" class="form__checkbox" name="send_nda" value="0" />
                                 <label class="form__checkbox-label" for="send_nda-popup">Request an NDA</label>
                             </div>
                             <div class="form-group privacy__text">By sending this form I confirm that I have read and accept Intellectsoft <a href="https://www.intellectsoft.net/privacy-policy">Privacy Policy</a></div>
                             <button class="form__submit form__submit--contact button--white-green send-get-in-touch pop-up-form-submit">Send</button>
                         </div>
                         <input type="hidden" id="check-browse-popup" class="check-browse" name="check_ad_block" />
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
                             <p class="thank__text">We will get in touch with you regarding your request within one business day.</p>
                             <a id="clearStorage-popup" href class="button button--primary">Send again</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
@endsection