 <footer class="CustomFooter" style="background-image:url(<?php echo base_url('uploads/Front/images/bgtop.png')?>)">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h2>Who We Are?</h2>
                            <p>SpiceMum is a mobile App that connects customers to different  stores within the neighborhood, and have items delivered to the doorstep of the customers within minutes.</p>
                            <div class="SocialLinks"> 
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/spicemumapp/" target="_blank"><img class="ImgFix" src="<?php echo base_url('uploads/Front/images/fb.png')?>" title="Facebook"></a>
                                    </li> 
                                    <li>
                                        <a href="https://twitter.com/spicemumng?s=08" target="_blank"><img class="ImgFix" src="<?php echo base_url('uploads/Front/images/tweet.png')?>" title="Twitter"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/spicemumng/" target="_blank"><img class="ImgFix" src="<?php echo base_url('uploads/Front/images/insta.png')?>" title="Instagram"></a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h2>Quick Links</h2> 
                            <ul class="QuickLinks">
                                <li><a href="<?php echo base_url('Front/index'); ?>">Home</a></li>
                                <li><a href="<?php echo base_url('Front/aboutus'); ?>">About Us</a></li>
                                <li><a href="<?php echo base_url('Front/faq'); ?>">FAQ's</a></li>
                                <li><a href="<?php echo base_url('Front/howitworks'); ?>">How it Work?</a></li>
                                <li><a href="<?php echo base_url('Front/contactus'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h2>Contact Us</h2>
                            <p><img class="ImgFix1" src="<?php echo base_url('uploads/Front/images/email.png')?>"> <?php echo $contact_us->email_id; ?></p>
                            <p><img class="ImgFix1" src="<?php echo base_url('uploads/Front/images/phone.png')?>"> <?php echo $contact_us->contact_no; ?></p>
                            <p><img class="ImgFix1" src="<?php echo base_url('uploads/Front/images/location.png')?>"><?php echo $contact_us->address; ?></p>
                        </div>
                    </div>
                </div>
            </footer>
