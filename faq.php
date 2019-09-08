<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('Front/Header'); ?>

<body>

    <div class="SpiceMum">

        <div class="CustomTop" style="background-image:url(<?php echo base_url('uploads/Front/images/bgtop.png')?>)">
            <div class="container">
                <p class="ContactText"><img src="<?php echo base_url('uploads/Front/images/iphone.png')?>"> Call Us Now : <span><?php echo $contact_us->contact_no; ?></span></p>
            </div>
            <div class="CustomNavbar">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('uploads/Front/images/Logo.png')?>" title="SpiceMum"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url('Front/index'); ?>">Home</a></li>
                                <li><a href="<?php echo base_url('Front/aboutus'); ?>">About Us</a></li>
                                <li><a href="<?php echo base_url('Front/faq'); ?>">FAQ's</a></li>
                                <li><a href="<?php echo base_url('Front/howitworks'); ?>">How it Work?</a></li>
                                <li><a href="<?php echo base_url('Front/contactus'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="BreaScrumHeader" style="background-image:url(<?php echo base_url('uploads/Front/images/breadcrumb.png')?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>FAQ's</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="BodyContent">
            <div class="Faqs">
                <div class="container">
                    <div class="row">
                        <h2>FAQ's</h2>
                        <div class="col-lg-12">
                            <!-- Right-aligned media object -->
                            <div class="media">
                                <div class="media-body">
                                    <p><?php echo $faq->description; ?>
                                    </p>
                                </div>
                                <!--<div class="media-right">-->
                                <!--    <img src="<?php echo base_url('uploads/Front/images/question-mark.png')?>" class="media-object" style="width:60px">-->
                                <!--</div>-->
                            </div>
                            <!--<h4>Account Related</h4>-->
                            <!--<br>-->
                            <!--<strong>• What is Spicemum?</strong>-->
                            <!--<p>Spicemum is a mobile App that connects customers to sellers for convenient shopping from stores e.g, Supermarket Stores, Pharmacy Stores, Restaurants, etc.-->
                            <!--</p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• Where do I download the SpicemumApp? </strong>-->
                            <!--<p>You can download the Spicemum App from Android playstore and Apple store.</p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• How do I use the Spicemum App?</strong>-->
                            <!--<p>You can use the Spicemum App as a vendor (store owner)or as a user (customer).</p>-->

                            <!--<p>You will have to download the Spicemum App from either an Android playstore or an Apple Store. As a vendor, fill the registration form and choose a category for your store, choose a shopper someone that will help you deliver your items to the users (customers), when you are done you will start receiving orders from customers. As a user, fill the registration form, enter your delivery location and request an order then call a shopper to request your items from a vendor’s store.</p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• Who is a vendor? </strong>-->
                            <!--<p>A vendor is the store owner who sells the items to users (Customers). </p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• Who is a user? </strong>-->
                            <!--<p>A user is someone who request an order to buy from a vendor (store owner).</p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• Who is a shopper?</strong>-->
                            <!--<p>A shopper is someone thatdelivers items to users (customers), most shoppers work with registered vendors in their stores. </p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• How do I become a vendor?</strong>-->
                            <!--<p>Download the Spicemum App from Android playstore or Apple store, then register a vendor account on the spicemum App, choose your store category e.g, Supermarket or Pharmacy etc then start receiving sales order through a phone call from users. </p>-->
                            <!--<hr class="customBorder">-->
                            <!--<strong>• How do I become a user?</strong>-->
                            <!--<p>Download the Spicemum App from Android playstore or Apple store Fill the user registration form, set your delivery location and request your order from a vendor store within your neighborhood. </p>-->
                            <!--<hr class="customBorder">-->

                            <!--<strong>• How do I become a shopper?</strong>-->
                            <!--<p>You can become a shopper by working with a vendor (store) within a certain location. </p>-->
                            <!--<hr class="customBorder">-->

                            <!--<strong>•  How do i/we make money with Spicemum App? </strong>-->
                            <!--<p>You can make money with the Spicemum App. Any store that serves as a vendor with a registered account with the spicemum app will get 0.5% from the delivery charge of any item delivery! </p>-->
                            <!--<hr class="customBorder">-->

                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
           <?php $this->load->view('Front/footer'); ?>

            <div class="BottomFix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <p>© SpiceMum All Rights Reserved 2019 | Developed by <a href="#" target="_blank">SpiceMum Technologies</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
