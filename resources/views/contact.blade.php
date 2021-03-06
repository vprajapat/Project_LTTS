@include('body.header_login_register')

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Have you any question?</h2>
                    <p>There have an E-portal for internet ticket conformation portal there we can book our ticket directly and this is very efficient for coustomer. </p>
                </div>
                 <div id="form_status"></div>
                <div class="contact-form">
                    <form type="POST" id="Ticket-contact" onSubmit="return valid_datas( this );">
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name">
                            <input type="email" placeholder="Email" name="email" id="email">
                        </p>
                        <p>
                            <input type="tel" placeholder="Phone" name="phone" id="phone">
                            <input type="text" placeholder="Subject" name="subject" id="subject">
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Contact Address</h4>
                        <p>NSTI,banglore<br> Yeshwantpura, Banglore. <br> Country Name</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Query Hours</h4>
                        <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: +00 111 123 1234 <br> Email: support@ticketportal.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->


@include('body.footer')