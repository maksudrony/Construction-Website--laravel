<div class="container-fluid" id="contact">
    <div class="container py-5 px-lg-5">
        <div class="text-center wow fadeInUp" data-wow-delay="2s">
            <h5>Contact Us</h5>
            <h1 class="mb-5">Get In Touch!</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-center mb-4">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore</p>
                    <form action="{{url('contactUs')}}" method="post">

                        @csrf <!--for sending data to the database-->

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="phone">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="" name="email" class="form-control" id="email" placeholder="Your Phone">
                                    <label for="phone">Your Phone No</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>