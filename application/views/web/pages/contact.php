

<div class="main">
    <div class="content">
        <div class="support">
            <div class="support_desc">
               
            </div>
            <img src="<?php echo base_url()?>assets/web/images/contact.jpg" style="height: 100px; width: 120px; margin-left:1100px;" alt="" />
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form>
                        <div>
                            <span><label>NAME</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>E-MAIL</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>MOBILE.NO</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>SUBJECT</label></span>
                            <span><textarea> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" value="SUBMIT"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="company_address">
                    <h2>Company Information :</h2>
                    
                    <p>Phone:<?php echo get_option('company_number');?></p>
                    <p>Email:<a href="mailto:<?php echo get_option('company_email');?>"> <span><?php echo get_option('company_email');?></span></a></p>
                    <p>Follow on: <a href="<?php echo get_option('company_facebook');?>"><span>Facebook</span></a>,
                            <a href="<?php echo get_option('company_email');?>"><span>Twitter</span></a></p>
                </div>
            </div>
        </div>    	
    </div>
</div>
