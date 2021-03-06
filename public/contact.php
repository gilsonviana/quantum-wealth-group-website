<?php include('partials/header.php'); ?>
    
    <div class="contact">

        <section class="sec-header">            
            <div class="container">
                <div class="content text-center">
                    <h1 class="text-uppercase">contact us</h1>
                    <p class="lead">Let's talk</p>
                </div>
            </div>
        </section>

        <section class="sec-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="content">
                            <h6>let's work together</h6>
                            <h1>How Can We Help?</h1>
                            <div class="line" data-aos="fade-right"></div>
                            <p>
                                Please fill out the request form and someone from Quantum Wealth Group will contact you momentarily.
                                Thank you for your interest.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">                        
                        <form id="contact-form">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" maxlength="120">                               
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" maxlength="120">                               
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" title="US phone" placeholder="xxx xxx xxxx">                                
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message" maxlength="500"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block">Send</button>
                            </div>
                        </form>
                    </div>
                </div>                                   
            </div>

            <section class="sec-address">
                <div class="container">
                    <div class="content text-center"
                            data-aos="fade-up"
                            data-aos-anchor-placement="bottom">
                        <h3>Corporate Office</h3>
                        <p>36 mill plain road suite 403 Danbury CT 06811</p>
                        <p><span class="glyphicon glyphicon-phone"></span> 800-985-2510</p>
                    </div>
                </div>
            </section>
        </section>        

    <!-- gold, silver, polithium, platinum, ripple -->

    </div>

<?php include('partials/footer.php'); ?>