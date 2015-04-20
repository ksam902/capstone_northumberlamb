<div class="container">
    <div class="row">
        <h2>
            <strong>Contact Information</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Contact</h3>
                    <p>
                        {$content.page.street_address}<br>{$content.page.city}, {$content.page.province} {$content.page.postal_code}<br>
                    </p>
                    <p><i class="fa fa-phone"></i>
                        <abbr title="Phone">P</abbr>: {$content.page.phone}</p>
                    <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email">E</abbr>: <a href="mailto:{$content.page.email}">{$content.page.email}</a>
                    </p>
<!--                     <p><i class="fa fa-clock-o"></i>
                        <abbr title="Hours">H</abbr>: {$content.page.hours}</p> -->
                    <br>
                    <p>Click on map to interact</p>
                </div>
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <div class="overlay"></div>
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Northumberland+Lamb+Marketing+Co-Op+Ltd,+Brookside+Branch+Road,+Bible+Hill,+NS,+Canada&amp;aq=0&amp;oq=Northumberland+Lamb+Marketing&amp;sll=37.0625,-95.677068&amp;sspn=59.769082,79.716797&amp;ie=UTF8&amp;hq=Northumberland+Lamb+Marketing+Co-Op+Ltd,&amp;hnear=Branch+Rd,+Nova+Scotia,+Canada&amp;ll=45.390059,-63.244085&amp;spn=0.105297,0.155697&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=7317000422442979290&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Northumberland+Lamb+Marketing+Co-Op+Ltd,+Brookside+Branch+Road,+Bible+Hill,+NS,+Canada&amp;aq=0&amp;oq=Northumberland+Lamb+Marketing&amp;sll=37.0625,-95.677068&amp;sspn=59.769082,79.716797&amp;ie=UTF8&amp;hq=Northumberland+Lamb+Marketing+Co-Op+Ltd,&amp;hnear=Branch+Rd,+Nova+Scotia,+Canada&amp;ll=45.390059,-63.244085&amp;spn=0.105297,0.155697&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=7317000422442979290" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                </div>

            </div>
        </div>
    </div>
<!-- CONTACT FORM -->
    <div class="row">
        <h2>
            <strong>Contact Form</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                    <div class="col-md-8">
                        <!-- Contact Details Column -->
                        <h3>Send us a Message</h3>
                        <form id="contactForm" method="post" action="../../functions.php">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="contactName" name="contactName" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone Number:</label>
                                    <input type="tel" class="form-control" id="contactPhone" name="contactPhone" placeholder="9025551234" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="email@example.com" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="contactMessage" name="contactMessage" required maxlength="500" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" name="contactSubmit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                <!-- /.row -->
            </div>
        </div>
    </div>

</div>
<!-- /.container -->