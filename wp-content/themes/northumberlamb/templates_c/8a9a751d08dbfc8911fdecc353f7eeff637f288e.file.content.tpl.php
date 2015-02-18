<?php /* Smarty version Smarty-3.1.18, created on 2015-02-18 15:48:25
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/contact/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210567381554db79601be840-21149286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9a751d08dbfc8911fdecc353f7eeff637f288e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/contact/content.tpl',
      1 => 1424274503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210567381554db79601be840-21149286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54db79601e3ad5_64438557',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db79601e3ad5_64438557')) {function content_54db79601e3ad5_64438557($_smarty_tpl) {?><div class="container">
    <div class="row">
        <h2>
            <strong>Contact Information</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Contact Details</h3>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['street_address'];?>
<br><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['province'];?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['postal_code'];?>
<br>
                    </p>
                    <p><i class="fa fa-phone"></i>
                        <abbr title="Phone">P</abbr>: <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['phone'];?>
</p>
                    <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email">E</abbr>: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['content']->value['page']['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['email'];?>
</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i>
                        <abbr title="Hours">H</abbr>: <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['hours'];?>
</p>
                </div>
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;fb=1&amp;cid=7317000422442979290&amp;q=Northumberland+Lamb+Marketing+Co-Op+Ltd&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=45.390059,-63.244085&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?ie=UTF8&amp;fb=1&amp;cid=7317000422442979290&amp;q=Northumberland+Lamb+Marketing+Co-Op+Ltd&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=45.390059,-63.244085&amp;spn=0.006295,0.006295&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                <!-- /.row -->
            </div>
        </div>
    </div>

</div>
<!-- /.container --><?php }} ?>
