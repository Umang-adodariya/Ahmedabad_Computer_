<form action="mail.php" method="POST" class="th-team-form bg-smoke ajax-contact mt-50 mt-lg-0" id="instructorForm">
                            <div class="form-title mb-30 text-center">
                                <h3 class="fw-semibold mt-n1">Quick Contact</h3>
                                <p>Feel free to contact us through Twitter or Facebook if you prefer!</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="hidden" name="form" value="quick_contact_form"> 
                                        <input type="text" placeholder="Your Name" class="form-control style-white" id="name" name="name" required>
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="instructor_name_error" id="instructor_name_error" style="color: red;"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" id="email" placeholder="Your Email" class="form-control style-white" name="email" required>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="instructor_email_error" id="instructor_email_error" style="color: red;"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="number" id="number" placeholder="Contact Number" class="form-control style-white" nmame="number" required>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="instructor_number_error" id="instructor_number_error" style="color: red;"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea placeholder="Write Message..." class="form-control style-white" id="message" name="message" required></textarea>
                                        <i class="fal fa-pencil"></i>
                                    </div>
                                    <div class="instructor_message_error" id="instructor_message_error" style="color: red;"></div>
                                </div>
                                <div class="col-12">
                                    <div class="captcha-container">
                                    <div class="g-recaptcha" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="th-btn w-100 form_submit">Send Massage <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>

                        </form>