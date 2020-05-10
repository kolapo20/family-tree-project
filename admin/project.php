<!DOCTYPE html>
<html lang="en">

<?php

use function PHPSTORM_META\type;

require "../db/crud.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolawole Family</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- project css -->
    <link rel="stylesheet" href="../assets/css/project1.css">



</head>

<body style="background-color:#e0f2f1">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top scrolling-navbar" style="background-color: green">
        <div class="container">
            <a class="navbar-brand" href="#">

                <strong> Kolawole Family Tree </strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/PHP/login.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navbar End-->
    <!-- Full Page Intro -->
    <br>
    <br>
    <br>
    <div class="container" style="text-align: center">
        <img src="../assets/tree.gif" alt="tree" width="100px" height="100px" class="image">
        <h1>Kolawole's Family Tree</h1>
        <h4>Welcome to the Kolawole's family</h4><br>
    </div>


    <!-- registration form -->
    <div class="container">

        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Registration form</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Kindly register to join the family tree.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form action="../db/crud.php" method="post" enctype="">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="" name="title" class="form-control"required >
                                    <label for="name" class="">Title</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="Surname" class="form-control" required>
                                    <label for="name" class="">Surname</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="" name="Name" class="form-control"required>
                                    <label for="name" class="">Name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control"required>
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="date" id="date" name="birthdate" class="form-control"required>
                                <label for="date" class="">Date of Birth</label>
                            </div>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password"required>
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                        </div>

                        <!--Grid column-->
                        <!--Grid column-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="No" name="number" class="form-control"required>
                                    <label for="subject" class="">Phone number</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="" name="religion" class="form-control">
                                    <label for="subject" class="">Religion</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->



                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <br><input type="radio" name="gender" value="m"> <label>Male</label>

                                <br><input type="radio" name="gender" value="f"> <label>Female</label>

                            </div>
                        </div>
                        <!--Grid row-->

                        <!-- modified form fields -->
                        <div class="text-center text-md-center">
                          
                            <input class="btn btn-primary" type="submit" name="">
                          
                            <!-- <input class="btn btn-primary" type="submit" name=""> -->
                        </div>
                        <div class="status"></div>
                </div>
                <!--Grid column-->

                </form>


                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Brother Jerry's room</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+234 9068846558</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p> Koladedavid2@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->


    </div><br>
    <br>
    <br>


    <div class="container" style="text-align: center;">
        <h3>This is a formal template of the Kolawole's Family</h3>
        <?php

        ?>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>Title</strong></th>
                    <th><strong> Surname</strong></th>
                    <th><strong> Name</strong></th>
                    <th><strong> Telephone</strong></th>
                    <th><strong>Date created</strong></th>
                    <th colspan="2"><strong>Action</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (getAllUsers()) {
                    echo  "Congrats";
                    $values = getAllUsers();

                    while ($row = $values->fetch_assoc()) { ?>
                        <tr>
                            <td align="center"><?php echo $row["title"]; ?></td>
                            <td align="center"><?php echo $row["Surname"]; ?></td>
                            <td align="center"><?php echo $row["Name"]; ?></td>
                            <td align="center"><?php echo $row["number"]; ?></td>
                            <td align="center"><?php echo $row["time"]; ?></td>
                            <td>
                                <a href="../db/crud.php?action=editMe&editId=<?php echo $row['id']; ?>"><span title="edit" class='fa fa-edit' style='color:blue'></span></a>
                                <!-- <a href="../db/crud.php?action=editUser&editid=<?php //echo $row["id"]; 
                                                                                    ?>">Edit</a> -->
                            <!-- </span> -->
                            </td>
                            <td>
                                <!-- <span> -->
                                <a  href="../db/crud.php?deleteid=<?php echo $row["id"]; ?>"><span title="delete" class='fa fa-trash' style='color:red'></span></a>
                            <!-- <td><a href='../db/crud.php?deleteid=" . $row["id"]'> <i class='fa fa-trash' style='color:red'> </a></td> -->
                            <!-- <td align="center"> -->
                            </td>

                        </tr>
                <?php }
                }

                ?>
            </tbody>
        </table>
    </div>
    <br>
    <!-- Timeline -->
    <div class="row">
        <div class="col-md-12">
            <div class="timeline-main">
                <!-- Timeline Wrapper -->
                <ul class="stepper stepper-vertical timeline timeline-animated pl-0">

                    <li>
                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle default-color z-depth-1-half"><i class="fas fa-heart" aria-hidden="true"></i></span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content z-depth-1 ml-2 p-4">
                            <h4 class="font-weight-bold">Ut enim ad minim veniam</h4>
                            <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 11 hours ago via
                                Twitter</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle secondary-color z-depth-1-half"><i class="fas fa-users" aria-hidden="true"></i></span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content z-depth-1 mr-xl-2 p-4">
                            <h4 class="font-weight-bold">Duis aute irure dolor</h4>
                            <p class=" mt-4 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                sequi nesciunt.</p>
                        </div>
                    </li>
                    <li>
                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle primary-color z-depth-1-half"><i class="fas fa-cloud" aria-hidden="true"></i></span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content z-depth-1 ml-2 p-4">
                            <h4 class="font-weight-bold">Sed ut nihil unde omnis</h4>
                            <p class="mt-4 mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
                                dolorem eum fugiat quo voluptas nulla pariatur?</p>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle pink z-depth-1-half"><i class="fas fa-coffee" aria-hidden="true"></i></span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content z-depth-1 mr-xl-2 p-4">
                            <h4 class="font-weight-bold"> Quis autem vel eum voluptate</h4>
                            <p class="mt-4 mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                    </li>
                    <li>
                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle mdb-color z-depth-1-half"><i class="fab fa-instagram" aria-hidden="true"></i></span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content z-depth-1 ml-2 p-4">
                            <h4 class="font-weight-bold">Mussum ipsum cacilds</h4>
                            <p class="mt-4 mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum
                                hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                                perferendis doloribus asperiores repellat.</p>
                        </div>
                    </li>
                </ul>
                <!-- Timeline Wrapper -->
            </div>
        </div>
    </div>
    <!-- Timeline -->
    <br>
    <br>
    <br>





    <footer id="footer">
        <div>
            <div class="Copyright" style="background-color: rgb(66, 190, 190);" style="width: 100px">
                <h6 class="copy-text">(c) 2020 Kolade & Kolapo {Kolawole} </h6>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>


</body>

</html>