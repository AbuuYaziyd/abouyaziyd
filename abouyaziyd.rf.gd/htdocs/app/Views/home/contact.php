<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <?= form_open('contact') ?>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="email" type="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="phone" type="tel" placeholder="255123456789">
                        <label for="phone">Phone number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <button class="btn btn-primary btn-xl w-100" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>