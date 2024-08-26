@extends('layouts.guestLayout')

@section('content')
    
<main>

    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <div class="hero-text">
                        <div class="hero-title-wrap d-flex align-items-center mb-4">
                            <img src="images/mebright.png"
                                class="avatar-image avatar-image-large img-fluid" alt="">

                            <h1 class="hero-title ms-3 mb-0">Hello friend!</h1>
                        </div>

                        <h2 class="mb-4" style="color: #ff5733">I'm available for freelance work.</h2>
                        <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                    </div>
                </div>

                {{-- <div class="col-lg-5 col-12 position-relative">
                    <div class="hero-image-wrap"></div>
                    <img src="images/IMG_3679-removebg-preview.png"
                        class="hero-image img-fluid" alt="">
                </div> --}}

            </div>
        </div>

        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00000" fill-opacity="1"
                d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
            </path>
            {

        </svg> --}}
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000000" fill-opacity="1" d="M0,320L48,304C96,288,192,256,288,240C384,224,480,224,576,234.7C672,245,768,267,864,266.7C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg> --}}

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
            <path class="wave-animation" fill="#000000" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,213.3C672,224,768,224,864,213.3C960,203,1056,181,1152,170.7C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
          </svg>

          
        
    </section>


    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb">

                        <div class="section-title-wrap d-flex  align-items-center mb-4">
                           

                            <img src="images/IMG_3679.JPG" class="avatar-image img-fluid" alt="">
                            <h2 class="text-white me-4 mb-0">My Story</h2>
                        </div>

                        <h3 class="pt-2 mb-3">Meet Austin Opia <br/> Digital Architect and Code Composer</h3>

                        <p>Austin Opia is a Full Stack Software Engineer with over 7 years of experience in crafting innovative digital solutions. Specializing in PHP and Laravel, Austin has a proven track record of developing scalable web applications, from e-commerce platforms handling millions of transactions to learning management systems rivaling industry giants. His expertise spans the entire development lifecycle, with a particular knack for optimizing performance and creating intuitive user experiences.</p>

                        <p>
                            Driven by a passion for technology and its power to transform businesses, Austin approaches every project as an opportunity to push the boundaries of what's possible in web development. His unique blend of technical prowess, creative problem-solving, and commitment to continuous learning makes him an invaluable asset to any team. Whether he's leading cross-functional groups or diving deep into code, Austin's goal remains constant: to deliver elegant, efficient solutions that make a real-world impact.
                        </p>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-12">
                   
                        <div class="about-thumb">
                            <div class="row">
                                <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                    <strong class="featured-numbers">6+</strong>
    
                                    <p class="featured-text">Years of Experiences</p>
                                </div>
    
                                <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                    <strong class="featured-numbers">245</strong>
    
                                    <p class="featured-text">Happy Customers</p>
                                </div>
    
                                <div class="col-lg-6 col-6 pt-4">
                                    <strong class="featured-numbers">20+</strong>
    
                                    <p class="featured-text">Project Finished</p>
                                </div>
    
                                <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                    <strong class="featured-numbers">72+</strong>
    
                                    <p class="featured-text">Digital Awards</p>
                                </div>
                            </div>
                        </div>
                    
                </div> --}}

                <div class="col-lg-4 col-12 d-flex align-items-center">
                    <div class="about-thumb mx-auto">
                        <div class="row">
                            <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                <strong class="featured-numbers">6+</strong>
                                <p class="featured-text">Years of Experiences</p>
                            </div>
                
                            <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                <strong class="featured-numbers">245</strong>
                                <p class="featured-text">Happy Customers</p>
                            </div>
                
                            <div class="col-lg-6 col-6 pt-4">
                                <strong class="featured-numbers">20+</strong>
                                <p class="featured-text">Project Finished</p>
                            </div>
                
                            <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                <strong class="featured-numbers">72+</strong>
                                <p class="featured-text">Digital Awards</p>
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>
        </div>
    </section>

   

    <section class="clients section-padding">
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
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <img src="images/handshake.png"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">Services</h2>
                    </div>

                    <div class="row pt-lg-5">
                        @foreach($services as $service)
                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                    <h3 class="mb-0">{{ $service->name }}</h3>
                                    <div class="services-price-wrap ms-auto">
                                        <p class="services-price-text mb-0">${{ number_format($service->price, 2) }}</p>
                                        <div class="services-price-overlay"></div>
                                    </div>
                                </div>
                                <p>{{ $service->description }}</p>
                                <a href="#" class="custom-btn custom-border-btn btn mt-3" style="color: #000000">Discover More</a>
                                <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div>
                                {{-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    @if($service->image)
                                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="services-icon">
                                    @else
                                        <i class="services-icon bi-globe"></i>
                                    @endif
                                </div> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    {{-- <section class="projects section-padding" id="section_4">
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

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Branding</small>

                            <h3 class="projects-title">Zoik agency</h3>
                        </div>

                        <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                            <img src="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Photography</small>

                            <h3 class="projects-title">The Watch</h3>
                        </div>

                        <a href="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                            <img src="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Website</small>

                            <h3 class="projects-title">Polo</h3>
                        </div>

                        <a href="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                            <img src="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="projects section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 ms-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                        <img src="images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid" alt="">
                        <h2 class="text-white ms-4 mb-0">Projects</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="projects-thumb">
                            <div class="projects-info">
                                {{-- <small class="projects-tag">{{ $project->category }}</small> --}}
                                <h3 class="projects-title">{{ $project->title }}</h3>
                                <p style="color: white">{{ Str::limit($project->description, 100) }}</p>
                                @if($project->url)
                                    <a href="{{ $project->url }}" target="_blank" class="btn btn-sm btn-primary mb-5">View Project</a>
                                @endif
                            </div>
                            <a href="{{ asset($project->image) }}" class="popup-image">
                                <img src="{{ asset($project->image) }}" class="projects-image img-fluid" alt="{{ $project->name }}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="contact section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-8 col-12">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
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

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ecommerce</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">SEO</a></li>
                        </ul>

                        <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                        <ul class="social-icon">
                            <li class="social-icon-item"><a href="https://twitter.com/minthu"
                                    class="social-icon-link bi-twitter"></a></li>

                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                            <li class="social-icon-item"><a href="https://www.youtube.com/developia"
                                    class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                        <p class="mb-0">I'm available for freelance projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                    <div class="contact-info d-flex flex-column">
                        <strong class="site-footer-title d-block mb-3">About</strong>

                        <p class="mb-2">
                            Joshua is a professional web developer. Feel free to get in touch with me.
                        </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                        <p>
                            <a href="mailto:opiaaustin@gmail.com"  style="color: #000000">
                               opiaaustin@gmail.com
                            </a>
                        </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                        <p class="mb-0">
                            <a href="tel: +2348128138169"  style="color: #000000">
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
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="custom-form contact-form" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                    
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                    
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">
                                        <i class="bi-globe form-check-icon"></i>
                                        <span class="form-check-label-text">Websites</span>
                                    </label>
                                </div>
                            </div>
                    
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">
                                        <i class="bi-lightbulb form-check-icon"></i>
                                        <span class="form-check-label-text">Branding</span>
                                    </label>
                                </div>
                            </div>
                    
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">
                                    <label class="form-check-label" for="inlineCheckbox3">
                                        <i class="bi-phone form-check-icon"></i>
                                        <span class="form-check-label-text">Ecommerce</span>
                                    </label>
                                </div>
                            </div>
                    
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline me-0">
                                    <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">
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
                                <button type="submit" class="form-control"  style="color: #000000">Send</button>
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
