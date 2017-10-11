<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hostel Management System - University of Jaffna</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pro_pic')
                        .attr('src', e.target.result)
                        // .width(150)
                        // .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Hostel Management System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li> 
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Register">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="HMS/index.php">Login</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.jpg" alt="">
                    <div class="intro-text">
                        <span class="name">University of Jaffna</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>As an udergraduate or a post graduate of University of Jaffna you can apply for accomadation online. Simply you can register here for the hostel and with considering on your application and rules and regulations of university we will give you accomadation .</p>
                </div>
                <div class="col-lg-4">
                    <p>Before you apply for hostels be kind to read conditions of hostel carefully. Once you've submitted you have agreed and bounded to conditions. You can read and understand conditions and rules by clicking below link.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="Hostel_Rules_and_conditions.pdf" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Read Conditions
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- Register Section -->
    <section id="Register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Register</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="alert alert-success">
                    <strong>Success!</strong> Your Data added successfully
                    </div>
                    <form name="RegistrationForm" id="RegistrationForm" action="STD_newApplicant.php" method="post" enctype="multipart/form-data">
                    <br>
                        <b>BASIC STUDENT DETAILS</b>
                        <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>University Registration No</label>
                                <input type="text" class="form-control" placeholder="University Registration No" name="regNo" required text="Please enter your registration number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Student's Full Name</label>
                                <input type="text" class="form-control" placeholder="Student's Full Name" name="name" required text="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name with initials</label>
                                <input type="text" class="form-control" placeholder="name with initial" name="iniName" required text="Please enter your name with initials.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>NIC No</label>
                                <input type="text" class="form-control" placeholder="NIC No" name="nic" required text="Please enter your NIC.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" placeholder="Date of Birth(YYYY-MM-DD)" name="DOB" required text="Please enter your date of birth.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>gender</label>
                                <select name="Gender" class="form-control" required text="Please select Gender.">
                                <optgroup label="Gender:">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </optgroup>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Faculty</label>
                                <select name="Faculty" class="form-control" required text="Please select Faculty.">
                    <optgroup label="Faculties:">
                    <option value="Agriculture">Agriculture</option>
                    <option value="Arts" checked>Arts</option>
                    <option value="Engineering">Engineering</option>
                    <option value="commerce">Management Studies & Commerce</option>
                    <option value="medicine" checked>Medicine</option>
                    <option value="science" checked>Science</option>
                    <option value="technology" checked>Technology</option>
                    </optgroup>
                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Course</label>
                                <input type="text" class="form-control" placeholder="Course of study" name="Course" required text="Please enter your Course.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Year of Study</label>
                                <input type="number" class="form-control" placeholder="Year of Study" name="year" required text="Please enter your Year of Study.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                            <br>
                            <b>STUDENT CONTACT DETAILS</b>
                            <br>
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required text="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address(example@email.com)" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required text="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>residential address</label>
                                <input type="text" class="form-control "placeholder="Student residential address" name="Saddress" required text="Please enter your residential address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>residential District</label>
                                <input type="text" class="form-control " placeholder="residentia District" name="SDistrict" required text="Please enter your residential District">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>GS Division</label>
                                <input type="text" class="form-control " placeholder="GS Division" name="GSD" required text="Please enter your GS Division.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>DS Division</label>
                                <input type="text" class="form-control " placeholder="DS Division" name="DSD" required text="Please enter your DS Division.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        <br>
                        <b>Gurdian Details</b>
                        <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Guardian name</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="Gname" required text="Please enter your Guardian's name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Relationship</label>
                                <input type="text" class="form-control" placeholder="Relationship" name="Relationship" required text="Please enter your relationship with Gurdian.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="Gaddress" required text="Please enter your Gurdian's address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>contact No.</label>
                                <input type="number" class="form-control" placeholder="Telephone" name="Gcontact" required text="Please enter Gurdian's contact no.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Police station near by hometown</label>
                                <input type="text" class="form-control" placeholder="Police station near by hometown" name="police" required text="Please Enter nearest police station">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <b>Emergency Contact Details</b>
                        <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="EName" required text="Please enter Emergency contactors name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>contact No.</label>
                                <input type="Number" class="form-control" placeholder="Telephone" name="Econtact" required text="Please enter Emergency contact no.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <b>UPLOAD A STUDENT PHOTOGRAPH</b>
                        <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                 <input name="pro_Picture" type="file" required text="Please upload a photograph."/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <b>I have read all the Rules and Regulations of the Hostel. I here by agree to follow the rules and regulations of the Hostel in force from time to time. I am liable for disciplinary action in case of any breach.</b>
                        <br>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg"">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>PO Box 57 
                            <br>Thirunalvely, Jaffna.
                            <br>Sri Lanka</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <p>
                       <ul>
                            <li>
                               Telephone:021-2226716
                            </li>
                            <li>
                                Fax:021-2226714
                            </li>
                            <li>
                                Email:<a>info@univ.jfn.ac.lk</a> 
                            </li>
                            <li>
                                Web:<a>www.jfn.ac.lk</a>
                            </li>
                            
                        </ul></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About site</h3>
                        <p>created by Team VRS3 according to the group project (2017) 
                        with guidance of Department of Computer Science (University of Jaffna).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; VRS3 - UoJ 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- registration Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/validateForm.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
