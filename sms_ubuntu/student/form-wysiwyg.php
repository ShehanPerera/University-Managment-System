<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Editor</title>
        <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/prettify.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/wysihtml5/lib/css/wysiwyg-color.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css"/>
        
        <link type="text/css" rel="stylesheet" href="../assets/css/Markdown.Editor.hack.css">
        
        <link type="text/css" rel="stylesheet" href="../assets/CLEditor1_4_3/jquery.cleditor.css">
        
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
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-th-large"></i></div>
                                            <h5>Basic Editor</h5>
                                            <ul class="nav pull-right">
                                                <li>
                                                    <div class="btn-group">
                                                        <a class="accordion-toggle btn btn-mini minimize-box" data-toggle="collapse"
                                                           href="#div-1">
                                                            <i class="icon-minus"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-mini close-box"><i
                                                                class="icon-remove"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </header>
                                        <div id="div-1" class="body collapse in">
                                            <form>
                                                <textarea id="wysihtml5" class="span12"></textarea>

                                                <div class="form-actions">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
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
                                            <h5>WYSIWYG Editor</h5>
                                            <ul class="nav pull-right">
                                                <li>
                                                    <div class="btn-group">
                                                        <a class="accordion-toggle btn btn-mini minimize-box" data-toggle="collapse"
                                                           href="#cleditorDiv">
                                                            <i class="icon-minus"></i>
                                                        </a>
                                                        <button class="btn btn-mini btn-danger close-box"><i
                                                                class="icon-remove"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </header>

                                        <div id="cleditorDiv" class="body collapse in">
                                            <form>
                                                <textarea id="cleditor"></textarea>

                                                <div class="form-actions no-margin-bottom" id="cleditorForm">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
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
                                            <h5>Markdown Editor</h5>
                                            <ul class="nav nav-tabs pull-right">
                                                <li class="active"><a href="#markdown" data-toggle="tab">Markdown</a></li>
                                                <li><a href="#preview" data-toggle="tab">Preview</a></li>
                                            </ul>
                                        </header>
                                        <div id="div-3" class="body tab-content">
                                            <div class="tab-pane fade active in" id="markdown">
                                                <div class="wmd-panel">
                                                    <div id="wmd-button-bar" class="btn-toolbar"></div>
                                                    <textarea class="span12 wmd-input" rows="10" name="description" id="wmd-input">
Free Admin Template with Twitter Bootstrap
------------------------------------------

### Installation

    $ git clone https://github.com/onokumus/Bootstrap-Admin-Template.git yourfoldername
    $ cd yourfoldername
    $ git submodule init
    $ git submodule update


### Demo
[http://demo.onokumus.com/metis/index.html][1]

### Licensing

Bootstrap Admin template is open-sourced software licensed under the [MIT License][2]


  [1]: http://demo.onokumus.com/metis/index.html
  [2]: http://opensource.org/licenses/MIT

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="preview">
                                                <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                                            </div>
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
        
        <script type="text/javascript" src="../assets/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
        <script type="text/javascript" src="../assets/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.min.js"></script>
        
        <script type="text/javascript" src="../assets/CLEditor1_4_3/jquery.cleditor.min.js"></script>
        
        <script type="text/javascript" src="../assets/pagedown-bootstrap/Markdown.Converter.js"></script>
        <script type="text/javascript" src="../assets/pagedown-bootstrap/Markdown.Sanitizer.js"></script>
        <script type="text/javascript" src="../assets/pagedown-bootstrap/Markdown.Editor.js"></script>

        <script type="text/javascript" src="../assets/js/main.js"></script>

        <script>
            $(function() {
                formWysiwyg();
            });
        </script>
        
        <script type="text/javascript" src="../assets/js/style-switcher.js"></script>
    </body>
</html>