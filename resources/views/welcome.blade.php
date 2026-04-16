<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AIRP Accounting Readiness Programme</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<style>
.ve-services-grid ul li {
    position: relative;
    padding-left: 25px; 
    margin-bottom: 8px;
    list-style: none; 
}
  .ve-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background: #ffffff !important;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.25);
    transition: var(--ve-trans);
}

.ve-services-grid ul li::before {
    content: "\f00c"; 
    font-family: "Font Awesome 5 Free", "Font Awesome 6 Free", "FontAwesome"; 
    font-weight: 900; 
    position: absolute;
    left: 0;
    top: 2px; 
    color: #28a745; 
    font-size: 14px;
}


.ve-enquiry-section {
    padding: 100px 0;
    background-color: var(--ve-navy);
    position: relative;
    overflow: hidden;
}

/* Background Design Element */
.ve-enquiry-section::after {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 300px;
    height: 300px;
    background: var(--ve-gold);
    opacity: 0.05;
    border-radius: 50%;
}

.ve-enquiry-features {
    list-style: none;
    padding: 0;
}

.ve-enquiry-features li {
    color: var(--ve-white);
    margin-bottom: 15px;
    font-size: 16px;
}

.ve-enquiry-features li i {
    color: var(--ve-gold2);
    margin-right: 10px;
}

/* Form Card Styling */
.ve-enquiry-card {
    background: var(--ve-white);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.ve-enquiry-card h3 {
    color: var(--ve-navy);
    margin-bottom: 25px;
    font-weight: 700;
    text-align: center;
}

.ve-form-group {
    margin-bottom: 20px;
}

.ve-form-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: var(--ve-navy);
    margin-bottom: 8px;
}

.ve-styled-form input, 
.ve-styled-form select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid var(--ve-border);
    border-radius: 8px;
    background-color: #f8fafc;
    transition: all 0.3s ease;
}

.ve-styled-form input:focus, 
.ve-styled-form select:focus {
    border-color: var(--ve-gold);
    outline: none;
    background-color: #fff;
    box-shadow: 0 0 0 3px rgba(212, 160, 23, 0.1);
}

.ve-submit-btn {
    width: 100%;
    background: var(--ve-gold);
    color: var(--ve-white);
    padding: 15px;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.ve-submit-btn:hover {
    background: var(--ve-navy);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Responsive adjustment */
@media (max-width: 768px) {
    .ve-enquiry-card {
        padding: 25px;
    }
}
@media (max-width: 767px) {
    .ve-hero-left h1 {
        font-size: 32px;
    }
}
</style>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
           <div class="ve-logo">
    <a href="{{ url('/') }}">
        <img src="{{ asset('img/logo.png') }}" alt="AIRP Logo" style="max-height: 72px; width: auto; margin-left: 10px">
    </a>
</div>

            <!-- Nav Links -->
            <!-- <nav class="ve-nav">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li class="has-drop">
                        <a href="{{ url('/about') }}">About <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/services') }}">Our Services</a></li>
                            <li><a href="{{ url('/elements') }}">UI Elements</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li class="has-drop">
                        <a href="#">Solutions <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="#">Wealth Management</a></li>
                            <li><a href="#">Retirement Plans</a></li>
                            <li><a href="#">Tax Advisory</a></li>
                            <li><a href="#">Risk Analysis</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/insights') }}">Insights</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav> -->

            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="#enquiry-form" class="ve-cta-btn">Get Started <i class="fa fa-arrow-right"></i></a>
                <!-- <a href="{{ url('/contact') }}" class="ve-cta-btn">Get Started <i class="fa fa-arrow-right"></i></a> -->
            </div>

            <!-- Mobile Toggle -->
            <!-- <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button> -->
        </div>

        <!-- Mobile Menu -->
        <!-- <div class="ve-mobile-menu" id="ve-mobile-menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="{{ url('/insights') }}">Insights</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div> -->
    </header>
    <section class="ve-hero">
    <div class="ve-hero-left">
        <span class="ve-hero-badge">Become Job-Ready. Build Real Skills. Launch Your Career.</span>
        <h1>Accounting Industry <br><span class="ve-highlight">Readiness</span> Programme</h1>
        <p>The Accounting Industry Readiness Programme is designed to bridge the gap between academic qualifications and real-world employment. Delivered in partnership of an ACCA approved chartered accounting firm, this programme equips aspiring this programme equips aspiring accountants with practical experience, digital expertise, and workplace readiness, transforming students into confident, job-ready professionals.</p>
        <p>Whether you’re currently studying or planning a career in accounting, this is your pathway to success in the modern finance industry.</p>
        
        <div class="ve-hero-btns">
            <!-- <a href="{{ url('/services') }}" class="ve-btn-primary">Apply Now</a> -->
             <a href="#enquiry-form" class="ve-btn-primary">Apply Now</a>
            <!-- <a href="{{ url('/about') }}" class="ve-btn-ghost">Learn More</a> -->
             <!-- <a href="#why-choose-us" class="ve-btn-ghost">Learn More</a> -->
              <a href="#" class="ve-btn-ghost" data-bs-toggle="modal" data-bs-target="#learnMoreModal">
    Learn More
</a>
        </div>

        <div class="ve-hero-stats">
            <div class="ve-stat">
                <strong>Practical</strong>
                <span>Experience</span>
            </div>
            <div class="ve-stat-divider"></div>
            <div class="ve-stat">
                <strong>Digital</strong>
                <span>Expertise</span>
            </div>
            <div class="ve-stat-divider"></div>
            <div class="ve-stat">
                <strong>Job</strong>
                <span>Ready</span>
            </div>
        </div>
    </div>

    <div class="ve-hero-right">
        <div class="ve-hero-img-main bg-img" style="background-image:url({{ asset('img/bg-img/1.jpg') }});"></div>
        <div class="ve-hero-img-accent bg-img" style="background-image:url({{ asset('img/bg-img/3.jpg') }});"></div>
        
        <div class="ve-float-card">
            <i class="fa fa-graduation-cap"></i>
            <div>
                <strong>Pathway</strong>
                <span>To Success</span>
            </div>
        </div>
    </div>
</section>



    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Fully Flexible </span>
            <span><i class="fa fa-check-circle"></i> 100% Practical</span>
            <span><i class="fa fa-users"></i> Real Business Files</span>
            <span><i class="fa fa-lock"></i> Guaranteed Work Experience </span>
            <span><i class="fa fa-trophy"></i> Internships & Jobs</span>
            <span><i class="fa fa-globe"></i> Experienced Accountants Team</span>
            <span><i class="fa fa-shield"></i> ACCA Approved Employers</span>
            <span><i class="fa fa-check-circle"></i> 12,000+ success stories</span>
            <!-- <span><i class="fa fa-users"></i> 50,000+ Clients Worldwide</span>
            <span><i class="fa fa-lock"></i> 256-bit Encryption</span> -->
        </div>
    </div>

<section id="why-choose-us" class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-12 col-lg-5">
                <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-whyus-img-main bg-img" style="background-image:url({{ asset('img/bg-img/5.jpg') }});"></div>
                    <div class="ve-whyus-badge">
                        <strong>Ready</strong>
                        <span>For the Job Market</span>
                    </div>
                </div>
            </div>
            <!-- Content Side -->
            <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">Value Proposition</span>
                    <h2>Why Choose This <span>Programme?</span></h2>
                    <p>In today’s competitive job market, qualifications alone are not enough. Employers are looking for candidates who can:</p>
                    
                    <div class="ve-checklist">
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Real-World Application</strong><p>Apply knowledge in real business scenarios</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Technical Proficiency</strong><p>Use accounting software confidently</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Data Mastery</strong><p>Analyse data and provide insights</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Future-Ready Finance</strong><p>Understand automation and AI in finance</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Soft Skills</strong><p>Communicate professionally in the workplace</p></div>
                        </div>
                    </div>
                    
                    <p class="mt-30"><strong>
Delivered in partnership of an ACCA approved chartered accounting firm, this programme is built to help you develop exactly those in-demand skills.</strong></p>
                    <!-- <a href="{{ url('/about') }}" class="ve-btn-primary mt-10">Discover Our Story</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="ve-section ve-services-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <h2 class="ve-section-tag">Your Roadmap to Success</h2>
        </div>
        <div class="ve-services-grid">
            <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-service-icon"><i class="fa fa-calculator"></i></div>
                <h4>1. Practical Accounting Experience</h4>
                <p>Gain hands-on experience in a chartered accounting firm environment, working on:</p>
                <ul style=" text-align: left; padding-left: 0px; font-size: 14px; color: #666;">
                    <li>Bookkeeping for limited companies</li>
                    <li>VAT returns and HMRC submissions</li>
                    <li>Statutory financial statements</li>
                    <li>Companies House submissions</li>
                    <li>Real-world use of Sage, QuickBooks, and Xero</li>
                </ul>
            </div>

            <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-service-icon"><i class="fa fa-line-chart"></i></div>
                <h4>2. Data Analytics for Finance</h4>
                <p>Develop powerful analytical skills to support decision-making:</p>
                <ul style=" text-align: left; padding-left: 0px; font-size: 14px; color: #666;">
                    <li>Excel Lookups & Pivot Tables</li>
                    <li>Advanced dashboards and reporting</li>
                    <li>Financial data interpretation</li>
                    <li>Introduction to Power BI</li>
                </ul>
            </div>

            <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-service-icon"><i class="fa fa-microchip"></i></div>
                <h4>3. AI in Accounting</h4>
                <p>Prepare for the future of finance by understanding how AI is transforming the industry:</p>
                <ul style=" text-align: left; padding-left: 0px; font-size: 14px; color: #666;">
                    <li>Automation of routine accounting tasks</li>
                    <li>Data processing and extraction</li>
                    <li>Generating financial insights</li>
                    <li>Understanding risks and ethical considerations</li>
                </ul>
            </div>

            <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-service-icon"><i class="fa fa-laptop"></i></div>
                <h4>4. Digital Finance & Automation</h4>
                <p>Learn how modern finance teams operate efficiently:</p>
                <ul style=" text-align: left; padding-left: 0px; font-size: 14px; color: #666;">
                    <li>Workflow automation</li>
                    <li>Bank feeds and cloud accounting</li>
                    <li>Process optimisation (invoicing, reconciliations, reporting)</li>
                    <li>Introduction to RPA (Robotic Process Automation)</li>
                </ul>
            </div>

            <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                <div class="ve-service-icon"><i class="fa fa-briefcase"></i></div>
                <h4>5. Employability & Career Development</h4>
                <p>Stand out to employers with professional skills and confidence:</p>
                <ul style=" text-align: left; padding-left: 0px; font-size: 14px; color: #666;">
                    <li>CV writing and LinkedIn optimisation</li>
                    <li>Interview preparation and mock interviews</li>
                    <li>Professional communication skills</li>
                    <li>Real-world “day in the life” simulations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

 <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('img/bg-img/6.jpg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Designed for <span>Future Finance Professionals</span></h2>
                    <p>This programme aligns with the evolving needs of the accounting profession, focusing on developing modern, digitally proficient finance professionals who are ready to thrive in today’s workplace.</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-right">
                    <!-- <a href="{{ url('/contact') }}" class="ve-btn-white">Join Now</a> -->
                     <a href="#enquiry-form" class="ve-btn-white">Join Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-section ve-testimonials-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Testimonials</span>
            <h2>Our Success <span>Stories</span></h2>
            <p>Trusted by Thousands of Aspiring Accountants</p>
        </div>
        <div class="ve-testi-grid">
            <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“Applying my accounting knowledge to real business scenarios made a huge difference. I finally understand how things work in practice.” — <strong>Olena</strong></p>
            </div>
            
            <div class="ve-testi-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“The programme gave me real hands-on experience alongside my studies, which boosted my confidence massively.” — <strong>Ayesha</strong></p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“I developed strong Excel, data analytics, and even AI skills something I didn’t expect from an accounting programme!” — <strong>Daniel</strong></p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“Using Sage, Xero, and QuickBooks regularly helped me feel confident and job ready from day one.” — <strong>Priya</strong></p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="500ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“I felt fully prepared for the workplace even before finishing my qualification. It gave me a real competitive edge.” — <strong>Emily</strong></p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="600ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“This programme genuinely improved my job prospects. I started getting interview calls soon after completing it.” — <strong>Ahmed</strong></p>
            </div>
        </div>
    </div>
</section>
<!-- 
    <section class="ve-section ve-testimonials-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Testimonials</span>
            <h2>Our Success <span>Stories</span></h2>
            <p>Trusted by Thousands of Aspiring Accountants</p>
        </div>
        <div class="ve-testi-grid">
            <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“Applying my accounting knowledge to real business scenarios made a huge difference. I finally understand how things work in practice.” — Olena</p>
            </div>
            
            <div class="ve-testi-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“The programme gave me real hands-on experience alongside my studies, which boosted my confidence massively.” — Ayesha</p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“I developed strong Excel, data analytics, and even AI skills something I didn’t expect from an accounting programme!” — Daniel</p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“Using Sage, Xero, and QuickBooks regularly helped me feel confident and job ready from day one.” — Priya</p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="500ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“I felt fully prepared for the workplace even before finishing my qualification. It gave me a real competitive edge.” — Emily</p>
            </div>

            <div class="ve-testi-card wow fadeInUp" data-wow-delay="600ms">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>“This programme genuinely improved my job prospects. I started getting interview calls soon after completing it.” — Ahmed</p>
            </div>
        </div>
    </div>
</section> -->
   
    <!-- ===== LATEST INSIGHTS ===== -->
    <!-- <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blog &amp; News</span>
                <h2>Latest Financial <span>Insights</span></h2>
                <p>Stay ahead with expert commentary, market analysis, and actionable financial tips.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Investment</span>
                            <h5><a href="{{ url('/single-post') }}">5 Smart Investment Strategies for 2025</a></h5>
                            <p>Discover the top strategies seasoned investors are using to grow wealth in volatile markets.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="{{ url('/single-post') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Credit</span>
                            <h5><a href="{{ url('/single-post') }}">Understanding Your Credit Score in 2025</a></h5>
                            <p>Learn the key factors that influence your credit score and how to improve it fast.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 20</span>
                                <a href="{{ url('/single-post') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Savings</span>
                            <h5><a href="{{ url('/single-post') }}">Building Wealth in Your 30s — A Full Guide</a></h5>
                            <p>The financial habits and investment moves that set you up for lifelong prosperity.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="{{ url('/single-post') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ===== NEWSLETTER ===== -->
  <section class="ve-newsletter-section">
    <div class="container">
        <div class="ve-newsletter-wrap">
            <div class="ve-nl-left">
                <i class="fa fa-envelope-o"></i>
                <div>
                    <h3>Start Your Journey Today</h3>
                    <p>Take the next step towards your accounting career. Enquire now and become a job-ready professional.</p>
                </div>
            </div>
            <!-- <div class="ve-nl-right">
                <form class="ve-nl-form" action="#" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name" required>
                    
                    <input type="email" name="email" placeholder="Email Address" required>
                    
                    <input type="text" name="phone" placeholder="Phone Number" required>

                    <select name="qualification" required style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; margin-bottom: 10px; width: 100%;">
                        <option value="" disabled selected>Select Qualification</option>
                        <option value="ACCA">ACCA</option>
                        <option value="CA">CA / ICAP</option>
                        <option value="Bachelors">Bachelors (B.Com/BBA)</option>
                        <option value="Masters">Masters (MBA/M.Com)</option>
                        <option value="Other">Other</option>
                    </select>

                    <button type="submit">Enquire Now</button>
                </form>
            </div> -->
        </div>
    </div>
</section>
<!-- ===== ENQUIRY FORM SECTION ===== -->
<section class="ve-enquiry-section mt-5" id="enquiry-form">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-12 col-lg-12">
                <div class="ve-enquiry-card wow fadeInRight" data-wow-delay="200ms">
                    <h3>Enquire Now</h3>
                    <!-- <form action="#" method="post" class="ve-styled-form"> -->
                        <form action="{{ route('enquiry.store') }}" method="post" class="ve-styled-form">
                        @csrf
                        <div class="ve-form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="e.g. John Doe" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ve-form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="john@example.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ve-form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="phone" placeholder="+1 234 567 89" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
    <div class="col-md-6">
        <div class="ve-form-group">
            <label>Educational Institute</label>
            <input type="text" name="institute" placeholder="e.g. Oxford University" required>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="ve-form-group">
            <label>Postal Code</label>
            <input type="text" name="postal_code" placeholder="e.g. W3 0TJ" required>
        </div>
    </div>
</div>

                        <button type="submit" class="ve-submit-btn">Send Enquiry <i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ===== FOOTER (dark, 4-column) ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand -->
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="{{ url('/') }}" class="ve-footer-logo">
                            <span class="ve-logo-icon">A</span>
                            <span class="ve-logo-text">AIR<strong>P</strong></span>
                        </a>
                        <p>Designed for Future Finance Professionals</p>
                        <!-- <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
                <!-- <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/insights') }}">Insights</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div> -->
                <!-- Col 3: Services -->
                <!-- <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links">
                        <li><a href="#">Investment Planning</a></li>
                        <li><a href="#">Wealth Management</a></li>
                        <li><a href="#">Retirement Plans</a></li>
                        <li><a href="#">Tax Advisory</a></li>
                        <li><a href="#">Risk Management</a></li>
                    </ul>
                </div> -->
                <!-- Col 4: Contact -->
               <div class="col-12 col-sm-6 col-lg-3 mb-50">
    <h5 class="ve-footer-title">Get In Touch</h5>
    <ul class="ve-footer-contact">
        <li>
            <i class="fa fa-map-marker"></i> 
            1 Concord Business Centre, Concord Road, London, W3 0TJ
        </li>
        <li>
            <i class="fa fa-phone"></i> 
            +44 (0)20 3744 2794
        </li>
        <li>
            <i class="fa fa-envelope"></i> 
            waqas.yaqoob@kbmgroup.co.uk
        </li>
        <li>
            <i class="fa fa-clock-o"></i> 
            Mon–Sat: 09:00 AM - 06:00 PM
        </li>
        <!-- <li>
            <i class="fa fa-calendar-check-o"></i> 
            Sat–Sun: 09:00 AM - 06:00 PM
        </li> -->
    </ul>
</div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                    <p>Copyright &copy; {{ date('Y') }} AIRP. All Rights Reserved </p>
                    <ul>
                        <!-- <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Cookie Policy</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="learnMoreModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Programme Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <img src="{{ asset('img/Accounting Industry Readiness Programme.png') }}" 
                     alt="Programme Image" 
                     class="img-fluid">
            </div>

        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>