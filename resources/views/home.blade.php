@extends('layouts.guestLayout')

@section('content')

    <main>

        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="hero-text">
                            <div class="hero-title-wrap d-flex align-items-center mb-4">
                                
                                <img src="images/mebright.png" class="avatar-image img-fluid" alt="Austin Opia - Full Stack Developer Profile Picture" loading="lazy">

                                <h1 class="hero-title ms-3 mb-0">Hello friend!</h1>
                            </div>

                            <h2 class="mb-4" style="color: #ff5733">I'm available for freelance work.</h2>
                            <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
                <path class="wave-animation" fill="#000000" fill-opacity="1"
                    d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,213.3C672,224,768,224,864,213.3C960,203,1056,181,1152,170.7C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>






        </section>



        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/about2.png" class="about-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">

                            <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                <h2 class="text-white me-4 mb-0">My Story</h2>

                                <img src="images/IMG_3679.JPG" class="avatar-image img-fluid" alt="">
                            </div>

                         
                            <h3 class="pt-2 mb-3">Meet Austin Opia </h3>
                            <p>With over 7 years as a Full Stack Software Engineer, I transform complex ideas into sleek web solutions. Specializing in PHP and Laravel, I build scalable applications that handle millions of transactions, giving industry giants a run for their money.</p>
                            <p>I thrive on optimizing performance and crafting intuitive user experiences, from e-commerce platforms to cutting-edge learning management systems. Each project is an opportunity to push the boundaries of web development and deliver digital magic.</p>
                            <p>Driven by innovation and a passion for continuous learning, I blend technical wizardry with creative problem-solving. Let’s team up to create something extraordinary!</p>

                        
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="clients section-padding" style="background:#f9f9f9;">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12">
                        <h3 class="text-center mb-5">Companies I've worked For</h3>
                    </div>

                    <div class="col-lg-2 col-4 ms-auto clients-item-height">
                        <img src="images/clients/c1.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/c2.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/c3.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="images/clients/c4.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 me-auto clients-item-height">
                        <img src="images/clients/c5.png" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 me-auto clients-item-height">
                        <img src="images/clients/c6.png" class="clients-image img-fluid" alt="">
                    </div>
                    {{-- <div class="col-lg-2 col-4 me-auto clients-item-height">
                    <img src="images/clients/c7.png" class="clients-image img-fluid" alt="">
                </div> --}}

                </div>
            </div>
        </section>


        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5" style="background: #ff5733;">
                            <img src="images/handshake.png" class="avatar-image img-fluid" alt="">
                            <h2 class="text-white ms-4 mb-0">Services</h2>
                        </div>

                        <div class="row pt-lg-5">
                            @if ($services->isEmpty())
                                <div class="col-12 text-center">
                                    {{-- <img src="images/empty2.svg" alt="No Services" class="img-fluid mb-4" style="max-width: 200px;"> --}}
                                    <h3 class="text-white">No Services Available Yet</h3>
                                    <p class="text-white">Please check back later for updates.</p>
                                </div>
                            @else
                                @foreach ($services as $service)
                                    <div class="col-lg-6 col-12">
                                        <div class="services-thumb">
                                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                                <h3 class="mb-0">{{ $service->name }}</h3>
                                                <div class="services-price-wrap ms-auto">
                                                    <p class="services-price-text mb-0">
                                                        ${{ number_format($service->price, 2) }}</p>
                                                    <div class="services-price-overlay"></div>
                                                </div>
                                            </div>
                                            <p>{{ $service->description }}</p>
                                            <a href="#" class="custom-btn custom-border-btn btn mt-3"
                                                style="color: #000000">Discover More</a>
                                            <div
                                                class="services-icon-wrap d-flex justify-content-center align-items-center">
                                                <i class="services-icon {{ $service->icon_class }}"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="projects section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12 ms-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <img src="images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid"
                                alt="">
                            <h2 class="text-white ms-4 mb-0">Projects</h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @if ($projects->isEmpty())
                        <div class="col-12 text-center">
                            <img src="images/empty.jpg" alt="No Projects" class="img-fluid mb-4"
                                style="max-width: 200px;">
                            <h3 class="text-white">No Projects Available Yet</h3>
                            <p class="text-white">We are working on new projects. Stay tuned!</p>
                        </div>
                    @else
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="projects-thumb">
                                    <div class="projects-info">
                                        {{-- <small class="projects-tag">{{ $project->category }}</small> --}}
                                        <h3 class="projects-title">{{ $project->title }}</h3>
                                        <p style="color: white">{{ Str::limit($project->description, 100) }}</p>
                                        @if ($project->url)
                                            <a href="{{ $project->url }}" target="_blank"
                                                class="btn btn-sm btn-primary mb-5">View Project</a>
                                        @endif
                                    </div>
                                    <a href="{{ asset($project->image) }}" class="popup-image">
                                        <img src="{{ asset($project->image) }}" class="projects-image img-fluid"
                                            alt="{{ $project->name }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>


        <section class="contact section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5"
                            style="background: #ff5733;">
                            <img src="images/aerial-view-man-using-computer-laptop-wooden-table.jpg"
                                class="avatar-image img-fluid" alt="">

                            <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">Services</strong>

                            <ul class="footer-menu">
                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Websites</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Branding</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ecommerce</a>
                                </li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">SEO</a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                            <ul class="social-icon">
                                <li class="social-icon-item"><a href="https://x.com/SirAlexthomson"
                                        class="social-icon-link bi-twitter"></a></li>

                                <li class="social-icon-item"><a href="https://www.instagram.com/austinopia/"
                                        class="social-icon-link bi-instagram"></a></li>

                                <li class="social-icon-item"><a href="https://www.linkedin.com/in/developia/"
                                        class="social-icon-link bi-linkedin"></a></li>

                                <li class="social-icon-item"><a href="https://www.threads.net/@austinopia"
                                        class="social-icon-link bi-threads"></a></li>
                            </ul>

                            <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                            <p class="mb-0">I'm available for freelance projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                        <div class="contact-info d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3">About</strong>

                            <p class="mb-2">
                                Austin is a professional web developer. Feel free to get in touch with me.
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                            <p>
                                <a href="mailto:opiaaustin@gmail.com" style="color: #000000">
                                    opiaaustin@gmail.com
                                </a>
                            </p>

                            <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                            <p class="mb-0">
                                <a href="tel: +2348128138169" style="color: #000000">
                                    +2348128138169
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">

                        {{-- <form action="#" method="get" class="custom-form contact-form" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                        required="">

                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required="">

                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="website" type="checkbox" class="form-check-input"
                                        id="inlineCheckbox1" value="1">

                                    <label class="form-check-label" for="inlineCheckbox1">
                                        <i class="bi-globe form-check-icon"></i>
                                        <span class="form-check-label-text">Websites</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="branding" type="checkbox" class="form-check-input"
                                        id="inlineCheckbox2" value="1">

                                    <label class="form-check-label" for="inlineCheckbox2">
                                        <i class="bi-lightbulb form-check-icon"></i>
                                        <span class="form-check-label-text">Branding</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="ecommerce" type="checkbox" class="form-check-input"
                                        id="inlineCheckbox3" value="1">

                                    <label class="form-check-label" for="inlineCheckbox3">
                                        <i class="bi-phone form-check-icon"></i>
                                        <span class="form-check-label-text">Ecommerce</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline me-0">
                                    <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4"
                                        value="1">

                                    <label class="form-check-label" for="inlineCheckbox4">
                                        <i class="bi-google form-check-icon"></i>
                                        <span class="form-check-label-text">SEO</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Tell me about the project"></textarea>

                                    <label for="floatingTextarea">Tell me about the project</label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-12 ms-auto">
                                <button type="submit" class="form-control">Send</button>
                            </div>

                        </div>
                    </form> --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="custom-form contact-form"
                            role="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name" required="">
                                        <label for="name">Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required="">
                                        <label for="email">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="website" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">
                                            <i class="bi-globe form-check-icon"></i>
                                            <span class="form-check-label-text">Websites</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="branding" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">
                                            <i class="bi-lightbulb form-check-icon"></i>
                                            <span class="form-check-label-text">Branding</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="ecommerce" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">
                                            <i class="bi-phone form-check-icon"></i>
                                            <span class="form-check-label-text">Ecommerce</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline me-0">
                                        <input name="seo" type="checkbox" class="form-check-input"
                                            id="inlineCheckbox4" value="1">
                                        <label class="form-check-label" for="inlineCheckbox4">
                                            <i class="bi-google form-check-icon"></i>
                                            <span class="form-check-label-text">SEO</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                        <label for="message">Tell me about the project</label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-12 ms-auto">
                                    <button type="submit" class="form-control" style="color: #000000">Send</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            </div>
        </section>

    

    </main>


@endsection
