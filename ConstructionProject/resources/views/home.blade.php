<!DOCTYPE html>
<html lang="en">

<head>
    @include('homecss')
    <title>Construction</title>
</head>
<body>
    <!-- spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-house fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- spinner End -->

    <!--topbar starts-->
    @include('topbar')
    <!--topbar ends-->


    <!-- navbar Start -->
    @include('navbar')
    <!-- navbar End -->

    <!-- carousel Start -->
    @include('carousel')
    <!-- carousel End -->

    <!-- facts start -->
    @include('facts')
    <!-- facts End -->

    <!-- client starts -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Clients</h6>
            </div>
            <div class="owl-carousel client-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded p-4" style="max-width: 200px;">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 p-1" src="https://www.akijflour.com/assets/img/1123.png" alt="">
                    </div>
                </div>
                <div class="rounded p-4" style="max-width: 200px;">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 p-1" src="https://www.akijflour.com/assets/img/1123.png" alt="">
                    </div>
                </div>
                <div class="rounded p-4"  style="max-width: 200px;">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 p-1" src="https://www.akijflour.com/assets/img/1123.png" alt="">
                    </div>
                </div>
                <div class="rounded p-4"  style="max-width: 200px;">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 p-1" src="https://www.akijflour.com/assets/img/1123.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--client ends -->

    <!-- video Player Section-->
    <section class="video-player" id="video-player" >
        <div class="container text-center">
            <a href="https://www.youtube.com/watch?v=H1HZHvRW25k" class="glightbox play-btn"></a>
            <h3>Sed ut perspiciatis unde</h3>
            <p> r aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</p>
        </div>
    </section>
    <!-- End video Player Section -->

    <!-- about section -->
    <section id="about-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-6 col-md-6 col-sm-12 animate__animated animate__fadeInLeft animate__delay-2s d-flex">
                    <img class="img-fluid d-flex justify-content-center" src="images/user.png" alt="">
                </div>
				<div class="col-lg-6 col-md-6 col-sm-12 animate__animated animate__fadeInRight animate__delay-2s py-5 pl-md-5">
					<div class="row justify-content-center mb-4 pt-md-4">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading">Welcome to Shanta</span>
							<h2 class="mb-4">Shanta Is A Construction Company</h2>
							<div class="d-flex about">
								<h3>We're in this business since 2015 and We provide the best insdustrial services</h3>
							</div>
							<p class="text-muted">Shanta started its journey in 1988 in the ready-made garment (RMG) sector and became one of the forerunners in RMG export by establishing leading industries such as Shanta Garments Ltd, Shanta Industries Ltd, Shanta Washworks Ltd, GDS Chemicals Ltd and Shanta Denims Ltd.</p>
							<div class="d-flex video-image align-items-center mt-md-4">
								<h4 class="ml-4">This is how we work on our clients, Watch video</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- about section ends -->
      
    <!--isotope starts-->
    <div class="container-fluid pb-5" style="background-color: #F7F7F7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="item-menu">
                        <div class=" animate__animated animate__fadeInDown wow" data-wow-delay="0.9s">
                            <h1 class="text-center pt-5 fw-semibold">All Images</h1>
                        </div>
                        <ul class="text-center inline-block pb-5">
                            <li data-filter="*" class=" animate__animated animate__fadeInLeft rounded-pill wow" data-wow-delay="0.9s">All Categories</li>
                            <li data-filter=".software" class="animate__animated animate__fadeInLeft rounded-pill wow" data-wow-delay="0.9s">Software</li>
                            <li data-filter=".business" class="animate__animated animate__fadeInLeft rounded-pill wow" data-wow-delay="0.9s">Business, Science</li>
                            <li data-filter=".finance" class="animate__animated animate__fadeInRight rounded-pill wow" data-wow-delay="0.9s">Finance</li>
                            <li data-filter=".corporate" class="animate__animated animate__fadeInRight rounded-pill wow" data-wow-delay="0.9s">Corporate</li>
                        </ul>
                    </div>
                </div>
            </div>
    
                <div class="row item-details animate__animated animate__fadeInUp wow" data-wow-delay="0.9s">
                    @foreach($data as $data)
                    <div class="col-lg-4 col-md-4 col-sm-6 p-3 {{$data->imageType}}">
                        <div class="portfolio-wrap h-100">
                            <img src="/imageGallery/{{$data->image}}" class="mx-auto img-gallery img-fluid glightbox" alt="">
                            <h3 class="text-center mt-2">{{$data->title}}</h3>
                        </div>
                    </div>   
                    @endforeach                
                </div>
        </div>       
    </div>
    <!--isotope browse book ends-->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="display-6 mb-4">Hey! What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="images/user.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui </p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="images/user.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia </p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="images/user.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia </p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="images/user.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Form Start -->
    @include('contactUs')
    <!-- Form End -->

    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('homejs')
</body>

</html>