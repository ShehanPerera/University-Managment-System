<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form Validation</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/prettify.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/validation-engine/css/validationEngine.jquery.css"/>
        
        <link rel="stylesheet" href="../assets/css/theme.css">
        
        <script type="text/javascript" src="../assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
    </head>
    <body>
        <!-- #wrap -->
        <div id="wrap">
            <!-- #navbar -->
			<?php include("navbar.php"); ?>		
			<!-- /#navbar -->

            <!-- #content -->
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header class="dark">
                                            <div class="icons"><i class="icon-ok"></i></div>
                                            <h5>Popup Validation</h5>
                                            <div class="toolbar">
                                                <ul class="nav">
                                                    <li>
                                                        <div class="btn-group">
                                                            <a class="accordion-toggle btn btn-mini minimize-box" data-toggle="collapse"
                                                               href="#collapse2">
                                                                <i class="icon-chevron-up"></i>
                                                            </a>
                                                            <button class="btn btn-mini btn-danger close-box"><i class="icon-remove"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </header>
                                        <div id="collapse2" class="body collapse in">
                                            <form class="form-horizontal" id="popup-validation">
                                                <div class="control-group">
                                                    <label class="control-label">Required</label>

                                                    <div class="controls">
                                                        <input type="text" class="validate[required] text-input" name="req" id="req" data-prompt-position="bottomLeft" >
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Select</label>

                                                    <div class="controls">
                                                        <select name="sport" id="sport" class="validate[required]">
                                                            <option value="">Choose a sport</option>
                                                            <option value="option1">Tennis</option>
                                                            <option value="option2">Football</option>
                                                            <option value="option3">Golf</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Multiple Select</label>

                                                    <div class="controls">
                                                        <select name="sport2" id="sport2" multiple class="validate[required]">
                                                            <option value="">Choose a sport</option>
                                                            <option value="option1">Tennis</option>
                                                            <option value="option2">Football</option>
                                                            <option value="option3">Golf</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Url</label>

                                                    <div class="controls">
                                                        <input value="http://" class="validate[required,custom[url]] text-input" type="text"
                                                               name="url1" id="url1"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">E-mail</label>

                                                    <div class="controls">
                                                        <input class="validate[required,custom[email]] text-input" type="text" name="email1"
                                                               id="email1"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Password</label>

                                                    <div class="controls">
                                                        <input class="validate[required] text-input" type="password" name="pass1" id="pass1"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Confirm Password</label>

                                                    <div class="controls">
                                                        <input class="validate[required,equals[pass1]] text-input" type="password" name="pass2"
                                                               id="pass2"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Minimum field size (6)</label>

                                                    <div class="controls">
                                                        <input value="" class="validate[required,minSize[6]] text-input" type="text" name="minsize1"
                                                               id="minsize1"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Maximum field size, optional</label>

                                                    <div class="controls">
                                                        <input value="0123456789" class="validate[optional,maxSize[6]] text-input" type="text"
                                                               name="maxsize1" id="maxsize1"/>
                                                        <span class="help-inline">note that the field is optional - it won't fail if it has no value</span>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Number</label>

                                                    <div class="controls">
                                                        <input value="-33.87a" class="validate[required,custom[number]] text-input" type="text"
                                                               name="numbe2r" id="number2"/>
                                                        <span class="help-inline">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">IP</label>

                                                    <div class="controls">
                                                        <input value="192.168.3." class="validate[required,custom[ipv4]] text-input" type="text"
                                                               name="ip" id="ip"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Date</label>

                                                    <div class="controls">
                                                        <input value="201-12-01" class="validate[required,custom[date]] text-input" type="text"
                                                               name="date3" id="date3"/>
                                                        <span class="help-inline">ISO 8601 dates only YYYY-mm-dd</span>
                                                    </div>
                                                </div>


                                                <div class="control-group">
                                                    <label class="control-label">Date Earlier</label>

                                                    <div class="controls">
                                                        <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] text-input"
                                                               type="text" name="past" id="past"/>
                                                        <span class="help-inline">Please enter a date ealier than 2012/09/13</span>
                                                    </div>
                                                </div>

                                                <div class="form-actions no-margin-bottom">
                                                    <input type="submit" value="Validate" class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-th-large"></i></div>
                                            <h5>Block Validation</h5>
                                            <div class="toolbar">
                                                <ul class="nav">
                                                    <li>
                                                        <div class="btn-group">
                                                            <a class="accordion-toggle btn btn-mini minimize-box" data-toggle="collapse"
                                                               href="#collapseOne">
                                                                <i class="icon-chevron-up"></i>
                                                            </a>
                                                            <button class="btn btn-mini btn-danger close-box">
                                                                <i class="icon-remove"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </header>
                                        <div id="collapseOne" class="accordion-body collapse in body">
                                            <form action="#" class="form-horizontal" id="block-validate">
                                                <div class="control-group">
                                                    <label class="control-label">Required</label>

                                                    <div class="controls">
                                                        <input type="text" id="required2" name="required2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">E-mail</label>

                                                    <div class="controls">
                                                        <input type="email" id="email2" name="email2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Password</label>

                                                    <div class="controls">
                                                        <input type="password" id="password2" name="password2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Confirm Password</label>

                                                    <div class="controls">
                                                        <input type="password" id="confirm_password2" name="confirm_password2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Date</label>

                                                    <div class="controls">
                                                        <input type="date" id="date2" name="date2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Url</label>

                                                    <div class="controls">
                                                        <input type="url" id="url2" name="url2"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Digits Only</label>

                                                    <div class="controls">
                                                        <input type="text" id="digits" name="digits"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Range [6,16]</label>

                                                    <div class="controls">
                                                        <input type="text" id="range" name="range"/>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">Please agree to our policy</label>

                                                    <div class="controls">
                                                        <input type="checkbox" id="agree2" name="agree2"/>
                                                    </div>
                                                </div>
                                                <div class="form-actions no-margin-bottom">
                                                    <input type="submit" value="Validate" class="btn btn-primary">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-ok"></i></div>
                                            <h5>Inline Validation</h5>
                                            <div class="toolbar">
                                                <ul class="nav">
                                                    <li>
                                                        <div class="btn-group">
                                                            <a class="accordion-toggle btn btn-mini minimize-box" data-toggle="collapse"
                                                               href="#collapse3">
                                                                <i class="icon-chevron-up"></i>
                                                            </a>
                                                            <button class="btn btn-mini btn-danger close-box"><i class="icon-remove"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </header>
                                        <div id="collapse3" class="accordion-body collapse in body">
                                            <form action="#" class="form-horizontal" id="inline-validate">
                                                <div class="control-group">
                                                    <label class="control-label">Required</label>

                                                    <div class="controls">
                                                        <input type="text" id="required" name="required" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">E-mail</label>

                                                    <div class="controls">
                                                        <input type="email" id="email" name="email" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Password</label>

                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Confirm Password</label>

                                                    <div class="controls">
                                                        <input type="password" id="confirm_password" name="confirm_password" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Date</label>

                                                    <div class="controls">
                                                        <input type="date" id="date" name="date" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Url</label>

                                                    <div class="controls">
                                                        <input type="url" id="url" name="url" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Please agree to our policy</label>

                                                    <div class="controls">
                                                        <input type="checkbox" id="agree" name="agree"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Minimum 3 Chars</label>

                                                    <div class="controls">
                                                        <input type="text" id="minsize" name="minsize" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Maximum 6 Chars</label>

                                                    <div class="controls">
                                                        <input type="text" id="maxsize" name="maxsize" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Minimum 3 </label>

                                                    <div class="controls">
                                                        <input type="text" id="minNum" name="minNum" class="span6">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Maximum 16 </label>

                                                    <div class="controls">
                                                        <input type="text" id="maxNum" name="maxNum" class="span6">
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <input type="submit" value="Validate" class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
            <!-- #push do not remove -->
            <div id="push"></div>
            <!-- /#push -->
        </div>
        <!-- /#wrap -->

        <div class="clearfix"></div>
        <div id="footer">
            <p>2013 © Metis Admin</p>
        </div>



        <!-- #helpModal -->
        <div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
             aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- /#helpModal -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>



        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="../assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>


        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script type="text/javascript" src="../assets/js/lib/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/prettify.js"></script>

        <script type="text/javascript" src="../assets/validation-engine/js/jquery.validationEngine.js"></script>        
        <script type="text/javascript" src="../assets/validation-engine/js/languages/jquery.validationEngine-tr.js"></script>
        
        <script type="text/javascript" src="../assets/validation/jquery.validate.js"></script>
        <script type="text/javascript" src="../assets/validation/localization/messages_tr.js"></script>

        <script type="text/javascript" src="../assets/js/main.js"></script>

        <script>
            $(function() {
                formValidation();
            });
        </script>
        
        <script type="text/javascript" src="../assets/js/style-switcher.js"></script>
    </body>
</html>
