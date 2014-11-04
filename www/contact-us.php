<?php require_once('includes/header.php'); ?>
        <section class="landing collapsed contact-us">
            <?php require_once('includes/logo_slogan.php'); ?>
        </section>
        <div class="main" id="main" role="main">
            <section class="content-block contact">
                <h1>Get in touch</h1>
                <div class="content">
                    <p>If you'd like to find out what we can do for you, get in touch and we'll book some time to see if we can plan something exceptional together.</p>
                    <div class="contact-details col" itemscope itemtype="http://schema.org/LocalBusiness">
                        <h2>No time to chat?</h2>
                        <p>Fill out our short contact form and we will put together a plan of action. We'll get in touch at a time which works best for you.</p>
                        <h2>Prefer the personal touch?</h2>
                        <div class="for-print">
                            <p>You can call us on: <strong>0238 098 6981</strong></p>
                            <p>You can email us at: <strong>sayhi@bbqdigital.com</strong></p>
                        </div>
                        <p class="no-print">You can call us on: <a class="phone-number" href="tel:02380986981" itemprop="telephone">0238 098 6981</a><br /> You can email us:<a href="mailto:sayhi@bbqdigital.com?subject=Enquiry%20from%20website" itemprop="email"><strong> sayhi@bbqdigital.com</strong></a></p>
                        <p><time itemprop="openingHours" datetime="Mo-Fr 09:00-17:00">Our office hours are: <br /> Monday to Friday 9am to 5pm. </time></p>
                    </div>
                    <div class="col contact-details">
                        <h2>Like a little formality?</h2>
                        <p>You can visit us or write to us at:
                            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <strong itemprop="name">BBQ Digital Limited</strong> <br />
                                <span itemprop="streetAddress">Ocean Village Innovation Centre <br />
                                Ocean Village </span><br />
                                <span itemprop="addressLocality">Southampton</span> <br />
                                <span itemprop="postalCode">SO14 3JZ</span>
                            </address>
                        </p>
                        <h2>Favour tradition?</h2>
                        <p>We can accept carrier pigeon and have supplied a map for the plucky little fellow but we respectfully suggest you reconsider whether a website is really for you.</p>
                    </div>
                    <div class="col form disabled">
                        <div class="warning">The browser you are using is not secure and I\'m afraid we cannot allow you to continue. <br /> <a href="http://browsehappy.com/?locale=en">Please update to a new version of your browser</a> and try completing the form again</div>
                        <form action="/mailer.php" method="post">
                            <fieldset>
                                <legend>contact BBQ</legend>
                                <div class="inputContainer">
                                    <label for="name">Hi, my name is*: </label>
                                    <input type="text" name="yourname" class="v-text required" id="name" placeholder="Insert your name" data-validation="Please enter your full name" disabled>
                                </div>
                                <div class="inputContainer">
                                    <label for="enquiry">and I'd like to speak to you about the following*:</label>
                                    <textarea name="enquiry" id="enquiry" class="required" cols="30" rows="10" placeholder="Write about your query" data-validation="We need to know how to help you! Please write a message for us" disabled></textarea>
                                </div>
                                <div class="inputContainer">
                                    <label for="email">If you need to get in touch with me, you can email me at*: </label>
                                    <input type="email" name="email" id="email" class="v-email required" placeholder="Enter a valid email address" data-validation="Please enter a valid email address " disabled>
                                </div>
                                <div class="inputContainer">
                                    <label for="tel">or call me on: </label>
                                    <input type="tel" name="tel" id="tel" class="v-phone" placeholder="Enter your telephone number" data-validation="Please enter a valid UK Landline or mobile number" disabled>
                                </div>
                                <div class="inputContainer">
                                    <label for="website">I also have a website, here is the address (must include 'www'): </label>
                                    <input type="url" name="website" id="website" class="v-url" placeholder="Enter your website address" data-validation="Please enter a valid web address (must include 'www')" disabled>
                                </div>
                                <div class="inputContainer">
                                    <label for="time">the best time to contact me is: </label>
                                    <select name="time" id="time">
                                        <option>Any time is fine</option>
                                        <option value="am">Morning only</option>
                                        <option value="pm">Afternoon only</option>
                                    </select>
                                </div>

                                <div class="inputContainer">
                                    <label for="consent"><input type="checkbox" name="consent" id="consent" class="required" value="I agree" data-validation="We cannot contact you if you do not provide consent" disabled/>By ticking this box, you agree to be contacted by BBQ Digital Limited and allow us to store your contact details for this purpose. For more information, please view our <a href="/privacy-policy.html">Privacy Policy</a>*</label>
                                </div>
                                <button type="submit" value="submit" name="submitform" disabled>Send message</button>
                                <p>* required field</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </section>
            <section class="content-block map" itemscope itemtype="http://schema.org/LocalBusiness">
                <h1>How to find us</h1>
                <iframe width="100%" height="450" frameborder="0" style="border:0" itemprop="hasMap" src="https://www.google.com/maps/embed/v1/place?q=BBQ%20Digital%2C%20Innovation%20Centre%2C%20Ocean%20Village%2C%20Southampton%2C%20SO14%203JZ&key=AIzaSyCu3T0xS9RmyCb6p8t7FDtfEuHDL3zc4BI"></iframe>
            </section>
        </div>
<?php require_once('includes/footer.php'); ?>
