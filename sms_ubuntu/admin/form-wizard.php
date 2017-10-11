<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form Wizard</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/prettify.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/gritter/css/jquery.gritter.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/uniform/themes/default/css/uniform.default.css">
        
        <link rel="stylesheet" href="../assets/jasny-bootstrap/css/jasny-bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" />
        
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
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!-- BEGIN FILE UPLOAD -->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header class="dark">
                                            <div class="icons"><i class="icon-cloud-upload"></i></div>
                                            <h5>File Upload</h5>
                                        </header>
                                        <div class="body">
                                            <form class="form-horizontal">
                                                <div class="control-group">
                                                    <label class="control-label">Browser Default</label>
                                                    <div class="controls"><input type="file" /></div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Uniform Style</label>
                                                    <div class="controls">
                                                        <input type="file" id="fileUpload"/>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Bootstrap Style</label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="input-append">
                                                                <div class="uneditable-input span3">
                                                                    <i class="icon-file fileupload-exists"></i>
                                                                    <span class="fileupload-preview"></span>
                                                                </div>
                                                                <span class="btn btn-file">
                                                                    <span class="fileupload-new">Select file</span>
                                                                    <span class="fileupload-exists">Change</span>
                                                                    <input type="file" />
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label">No Input</label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                                            <span class="fileupload-preview"></span>
                                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Image Upload</label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                            <div>
                                                                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Pre Defined Image</label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                            <div>
                                                                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END FILE UPLOAD -->

                            <!-- BEGIN MULTIPLE FILE UPLOAD -->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <h5>Multiple Uploader</h5>
                                        </header>
                                        <div id="collapse2" class="block">
                                            <form>
                                                <div id="uploader"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MULTIPLE FILE UPLOAD -->


                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <h5>Wizard with Validation</h5>
                                        </header>
                                        <div id="div-2" class="body">
                                            <form id="wizardForm" method="post" action="" class="form-horizontal wizardForm">

                                                <fieldset class="step" id="first">
                                                    <h6 class="pull-right label label-important">Database Settings</h6>

                                                    <div class="control-group">
                                                        <label for="server_host" class="control-label">Database Server</label>

                                                        <div class="controls">
                                                            <input type="text" name="server_host" id="server_host">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="server_name" class="control-label">Database Name</label>

                                                        <div class="controls">
                                                            <input type="text" name="server_name" id="server_name">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="server_user" class="control-label">Database User</label>

                                                        <div class="controls">
                                                            <input type="text" name="server_user" id="server_user">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="server_password" class="control-label">User Password</label>

                                                        <div class="controls">
                                                            <input type="password" name="server_password" id="server_password">
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="step" id="second">
                                                    <h6 class="pull-right label label-warning">Table Settings</h6>

                                                    <div class="control-group">
                                                        <label for="table_prefix" class="control-label">Table Prefix</label>

                                                        <div class="controls">
                                                            <input type="text" name="table_prefix" id="table_prefix" value="nuro_">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="table_collation" class="control-label">Table Collation</label>

                                                        <div class="controls">
                                                            <select name="table_collation" id="table_collation">
                                                                <option value="">Collation</option>
                                                                <option value=""></option>
                                                                <optgroup label="utf8" title="UTF-8 Unicode">
                                                                    <option value="utf8_bin" title="Unicode (multilingual), Binary">
                                                                        utf8_bin
                                                                    </option>
                                                                    <option value="utf8_czech_ci" title="Czech, case-insensitive">
                                                                        utf8_czech_ci
                                                                    </option>
                                                                    <option value="utf8_danish_ci" title="Danish, case-insensitive">
                                                                        utf8_danish_ci
                                                                    </option>
                                                                    <option value="utf8_esperanto_ci"
                                                                            title="Esperanto, case-insensitive">utf8_esperanto_ci
                                                                    </option>
                                                                    <option value="utf8_estonian_ci"
                                                                            title="Estonian, case-insensitive">utf8_estonian_ci
                                                                    </option>
                                                                    <option value="utf8_general_ci"
                                                                            title="Unicode (multilingual), case-insensitive">
                                                                        utf8_general_ci
                                                                    </option>
                                                                    <option value="utf8_general_mysql500_ci"
                                                                            title="Unicode (multilingual)">utf8_general_mysql500_ci
                                                                    </option>
                                                                    <option value="utf8_hungarian_ci"
                                                                            title="Hungarian, case-insensitive">utf8_hungarian_ci
                                                                    </option>
                                                                    <option value="utf8_icelandic_ci"
                                                                            title="Icelandic, case-insensitive">utf8_icelandic_ci
                                                                    </option>
                                                                    <option value="utf8_latvian_ci"
                                                                            title="Latvian, case-insensitive">utf8_latvian_ci
                                                                    </option>
                                                                    <option value="utf8_lithuanian_ci"
                                                                            title="Lithuanian, case-insensitive">utf8_lithuanian_ci
                                                                    </option>
                                                                    <option value="utf8_persian_ci"
                                                                            title="Persian, case-insensitive">utf8_persian_ci
                                                                    </option>
                                                                    <option value="utf8_polish_ci" title="Polish, case-insensitive">
                                                                        utf8_polish_ci
                                                                    </option>
                                                                    <option value="utf8_roman_ci"
                                                                            title="West European, case-insensitive">utf8_roman_ci
                                                                    </option>
                                                                    <option value="utf8_romanian_ci"
                                                                            title="Romanian, case-insensitive">utf8_romanian_ci
                                                                    </option>
                                                                    <option value="utf8_sinhala_ci"
                                                                            title="unknown, case-insensitive">utf8_sinhala_ci
                                                                    </option>
                                                                    <option value="utf8_slovak_ci" title="Slovak, case-insensitive">
                                                                        utf8_slovak_ci
                                                                    </option>
                                                                    <option value="utf8_slovenian_ci"
                                                                            title="Slovenian, case-insensitive">utf8_slovenian_ci
                                                                    </option>
                                                                    <option value="utf8_spanish2_ci"
                                                                            title="Traditional Spanish, case-insensitive">
                                                                        utf8_spanish2_ci
                                                                    </option>
                                                                    <option value="utf8_spanish_ci"
                                                                            title="Spanish, case-insensitive">utf8_spanish_ci
                                                                    </option>
                                                                    <option value="utf8_swedish_ci"
                                                                            title="Swedish, case-insensitive">utf8_swedish_ci
                                                                    </option>
                                                                    <option value="utf8_turkish_ci"
                                                                            title="Turkish, case-insensitive">utf8_turkish_ci
                                                                    </option>
                                                                    <option value="utf8_unicode_ci"
                                                                            title="Unicode (multilingual), case-insensitive">
                                                                        utf8_unicode_ci
                                                                    </option>
                                                                </optgroup>
                                                                <optgroup label="utf8mb4" title="UTF-8 Unicode">
                                                                    <option value="utf8mb4_bin" title="unknown, Binary">
                                                                        utf8mb4_bin
                                                                    </option>
                                                                    <option value="utf8mb4_czech_ci"
                                                                            title="Czech, case-insensitive">utf8mb4_czech_ci
                                                                    </option>
                                                                    <option value="utf8mb4_danish_ci"
                                                                            title="Danish, case-insensitive">utf8mb4_danish_ci
                                                                    </option>
                                                                    <option value="utf8mb4_esperanto_ci"
                                                                            title="Esperanto, case-insensitive">utf8mb4_esperanto_ci
                                                                    </option>
                                                                    <option value="utf8mb4_estonian_ci"
                                                                            title="Estonian, case-insensitive">utf8mb4_estonian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_general_ci"
                                                                            title="unknown, case-insensitive">utf8mb4_general_ci
                                                                    </option>
                                                                    <option value="utf8mb4_hungarian_ci"
                                                                            title="Hungarian, case-insensitive">utf8mb4_hungarian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_icelandic_ci"
                                                                            title="Icelandic, case-insensitive">utf8mb4_icelandic_ci
                                                                    </option>
                                                                    <option value="utf8mb4_latvian_ci"
                                                                            title="Latvian, case-insensitive">utf8mb4_latvian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_lithuanian_ci"
                                                                            title="Lithuanian, case-insensitive">
                                                                        utf8mb4_lithuanian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_persian_ci"
                                                                            title="Persian, case-insensitive">utf8mb4_persian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_polish_ci"
                                                                            title="Polish, case-insensitive">utf8mb4_polish_ci
                                                                    </option>
                                                                    <option value="utf8mb4_roman_ci"
                                                                            title="West European, case-insensitive">utf8mb4_roman_ci
                                                                    </option>
                                                                    <option value="utf8mb4_romanian_ci"
                                                                            title="Romanian, case-insensitive">utf8mb4_romanian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_sinhala_ci"
                                                                            title="unknown, case-insensitive">utf8mb4_sinhala_ci
                                                                    </option>
                                                                    <option value="utf8mb4_slovak_ci"
                                                                            title="Slovak, case-insensitive">utf8mb4_slovak_ci
                                                                    </option>
                                                                    <option value="utf8mb4_slovenian_ci"
                                                                            title="Slovenian, case-insensitive">utf8mb4_slovenian_ci
                                                                    </option>
                                                                    <option value="utf8mb4_spanish2_ci"
                                                                            title="Traditional Spanish, case-insensitive">
                                                                        utf8mb4_spanish2_ci
                                                                    </option>
                                                                    <option value="utf8mb4_spanish_ci"
                                                                            title="Spanish, case-insensitive">utf8mb4_spanish_ci
                                                                    </option>
                                                                    <option value="utf8mb4_swedish_ci"
                                                                            title="Swedish, case-insensitive">utf8mb4_swedish_ci
                                                                    </option>
                                                                    <option value="utf8mb4_turkish_ci"
                                                                            title="Turkish, case-insensitive">utf8mb4_turkish_ci
                                                                    </option>
                                                                    <option value="utf8mb4_unicode_ci"
                                                                            title="Unicode (multilingual), case-insensitive">
                                                                        utf8mb4_unicode_ci
                                                                    </option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="step" id="last">
                                                    <h6 class="pull-right label label-info">User Settings</h6>

                                                    <div class="control-group">
                                                        <label for="username" class="control-label">Username</label>

                                                        <div class="controls">
                                                            <input type="text" name="username" id="username">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="usermail" class="control-label">E-mail</label>

                                                        <div class="controls">
                                                            <input type="text" name="usermail" id="usermail">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="pass" class="control-label">User Password</label>

                                                        <div class="controls">
                                                            <input type="password" name="pass" id="pass">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="pass2" class="control-label">Confirm Password</label>

                                                        <div class="controls">
                                                            <input type="password" name="pass2" id="pass2">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox"> Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="form-actions">
                                                    <input class="navigation_button btn" id="back" value="Back" type="reset"/>
                                                    <input class="navigation_button btn btn-primary" id="next" value="Next"
                                                           type="submit"/>
                                                </div>
                                            </form>
                                            <div id="data"></div>
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

        <script type="text/javascript" src="../assets/js/lib/bootstrap-progressbar.min.js"></script>
        
        <script type="text/javascript" src="../assets/js/lib/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="../assets/js/lib/prettify.js"></script>
        <script type="text/javascript" src="../assets/js/lib/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="../assets/formwizard/js/jquery.form.wizard.js"></script>
        <script type="text/javascript" src="../assets/validation/lib/jquery.form.js"></script>
        <script type="text/javascript" src="../assets/validation/jquery.validate.js"></script>
        <script type="text/javascript" src="../assets/validation/localization/messages_ja.js"></script>
        
        <script type="text/javascript" src="../assets/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
        <script type="text/javascript" src="../assets/plupload/js/plupload.full.min.js"></script>
        
        <script type="text/javascript" src="../assets/gritter/js/jquery.gritter.min.js"></script>
        
        <script type="text/javascript" src="../assets/uniform/jquery.uniform.min.js"></script>
        
        <script type="text/javascript" src="../assets/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

        <script type="text/javascript" src="../assets/js/main.js"></script>

        <script type="text/javascript">
            $(function() {
                formWizard();
            });
        </script>

        
        <script type="text/javascript" src="../assets/js/style-switcher.js"></script>
    </body>
</html>