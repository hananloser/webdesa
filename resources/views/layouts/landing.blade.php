<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Kit by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('assets2/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets2/css/paper-kit.css?v=2.2.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    @include('components.landing.Navbar')
    <!-- End Navbar -->
    <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/daniel-olahh.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1>Selamat Datang</h1>
                <h3>Web Desa Bangun Jaya</h3>
                <br />
            </div>
        </div>
    </div>



    <div class="main">
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Let's talk product</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your
                            product. Keep you user engaged by providing meaningful information. Remember that by this
                            time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you
                            want the user to see more.</h5>
                        <br>
                        <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-album-2"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Beautiful Gallery</h4>
                                <p class="description">Spend your time generating new ideas. You don't have to think of
                                    implementing.</p>
                                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-bulb-63"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">New Ideas</h4>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-chart-bar-32"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Statistics</h4>
                                <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-sun-fog-29"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Delightful design</h4>
                                <p>Find unique and handmade delightful designs related items directly from our sellers.
                                </p>
                                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-dark text-center">
            <div class="container">
                <h2 class="title">Let's talk about us</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Henry Ford</h4>
                                        <h6 class="card-category">Product Manager</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    Teamwork is so important that it is virtually impossible for you to reach the
                                    heights of your capabilities or make the money that you want without becoming very
                                    good at it.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="../assets/img/faces/joe-gardner-2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Sophie West</h4>
                                        <h6 class="card-category">Designer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    A group becomes a team when each member is sure enough of himself and his
                                    contribution to praise the skill of the others. No one can whistle a symphony. It
                                    takes an orchestra to play it.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="../assets/img/faces/erik-lucatero-2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Robert Orben</h4>
                                        <h6 class="card-category">Developer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    The strength of the team is each individual member. The strength of each member is
                                    the team. If you can laugh together, you can work together, silence isn’t golden,
                                    it’s deadly.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center">Keep in touch?</h2>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-email-85"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <label>Message</label>
                            <textarea class="form-control" rows="4"
                                placeholder="Tell us your thoughts and feelings..."></textarea>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer   footer-white ">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com" target="_blank">By Shadow.dev</a>
                        </li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by Hanan
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets2/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets2/js/paper-kit.js?v=2.2.0')}}" type="text/javascript"></script>
</body>

</html>