<?php
if(isset($_POST['submit'])){
$email= $_POST['email'];
$host = 'localhost';
$user = 'root';
$pass='';
$dbname ='voyagedata';
$conn = mysqli_connect($host, $user, $pass, $dbname);
$sql ="INSERT INTO voyagetable( email) values ( '$email')";
mysqli_query($conn, $sql);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voyage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light ps-5 pe-5" id="nav_bar">
        <div class="container-fluid justify-content-evenly">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="image not found" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="toggle_menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav_middle justify-content-evenly">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item  ms-5 me-5">
                            <a class="nav-link active" aria-current="page" href="#cont_1">Home</a>
                        </li>
                        <li class="nav-item ms-5 me-5">
                            <a class="nav-link" href="#cont_2">Menu</a>
                        </li>
                        <li class="nav-item  ms-5 me-5">
                            <a class="nav-link" href="#cont_3">Offers</a>
                        </li>
                        <li class="nav-item  ms-5 me-5">
                            <a class="nav-link" href="#cont_4">Contact Us</a>
                        </li>


                    </ul>
                   
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid" id="cont_1">
        <img src="img1.png" class="img-fluid" alt="img not found" id="img_1">
        <div class="container-fluid " id="cont1-cont">
            <div class="row justify-content-evenly " id="cont1_row1">
                <div class="col-4 " id="cont1_col">


                    <h3 id="img_text1" class="h3_1 ">It's Time</h3><br>
                    <h3 id="img_text2" class="h3_1 ">For Hiking</h3>
                    <button id="cont1_btn" class="mt-5 mb-5  btn btn-dark pt-3 pb-3 pe-3 ps-3 ">Read More</button>
                    <p id="cont1_para" class="mt-4 ">Hiking is a long, vigorous walk, usually on trails or footpaths in the countryside. Walking for pleasure developed in Europe during the eighteenth century. Religious pilgrimages have existed much longer but they involve walking long distances for a spiritual purpose associated with specific religions.</p>

                </div>
            </div>
        </div>


        <div class="container-fluid d-block" id="cont_2">
            <div class="row justify-content-evenly">
                <div class="col-4 text-center align-self-center mt-5 mb-5">
                    <h2 id="cont2_h2">Let's Go</h2>
                    <p class="mt-4 d-none d-md-block" id="cont2_para">"Hiking" is the preferred term in Canada and the United States; the term "walking" is used in these regions for shorter, particularly urban walks.s</p>
                </div>
            </div>
            <div class="row justify-content-evenly mt-5 mb-5" id="cont2_row2">
                <div class="col-10 col-md-4 col-lg-2 mt-3 cards">
                    <div class="card pb-3 pe-3 pt-3 ps-3" style="width: 18rem; border: 2px solid #01071b;">
                        <img src="img2.jpg" class="card-img-top" alt="image not found">
                        <div class="card-body pt-4 pb-4 pe-4 ps-4 text-light" style="background-color: #01071b;">
                            <p class="card-text">In the United Kingdom and the Republic of Ireland, the word "walking" describes all forms of walking, whether it is a walk in the park or backpacking in the Alps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-4 col-lg-2  mt-3 cards">
                    <div class="card pb-3 pe-3 pt-3 ps-3" style="width: 18rem;  border: 2px solid #01071b;">
                        <img src="img3.jpg" class="card-img-top" alt="image not found">
                        <div class="card-body pt-4 pb-4 ps-4 pe-4 text-light" style="background-color:#01071b;">
                            <p class="card-text">The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England). </p>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-4 col-lg-2 mt-3 cards" id="card_3">
                    <div class="card pb-3 pe-3 pt-3 ps-3" style="width: 18rem;  border: 2px solid #01071b;">
                        <img src="img4.jpg" class="card-img-top" alt="image not found">
                        <div class="card-body pt-4 pb-4 pe-4 ps-4 text-light" style="background-color: #01071b">
                            <p class="card-text"> The term bushwalking is endemic to Australia, having been adopted by the Sydney Bush Walkers club in 1927.[2] In New Zealand a long, vigorous walk or hike is called tramping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid " style="background-color:#01071b;" id="cont_3">
            
            <div class="row justify-content-evenly pt-5" id="cont3_row">
                <div class="col-10 col-xl-4 mt-5">
                    <img src="img5.jpg" class="img-fluid" alt="image not found" id="cont3_img">
                </div>
                <div class="col-10 col-xl-4 mt-5 text-light text-center" id="cont3_text">
                    <p>Discount Up To 50% All Excursions</p>
                </div>
            </div>
        </div>


        <div class="container-fluid" id="cont_4">
            <div class="row text-center pt-5" id="cont4_row_1">
                <div class="col-12 ali mt-5" id="cont4_col_1">
                    <h3 id="cont4_h3">
                        Get Registred !
                    </h3>
                </div>
            </div>
            <div class="row text-center d-none d-md-flex justify-content-center" id="cont4_row_2">
                <div class="col-6" id="cont4_col_2">
                    <p id="cont4_para">
                        If you have any concerns, feel free to contact us at <b> 'mayureshmuluk28@gmail.com'</b>  We look forward to a long-term association with you. We will be pleased to have your registration and exploration . Thank You !!!
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-10 col-md-8 col-lg-4">
                    <form class="d-flex" role="search" action="#" method="POST">
                        <input id="email-ph" class="form-control me-2 rounded-pill bg-secondary text-light"
                            type="text" placeholder="Enter Email" aria-label="Search" name="email">
                        <input class="btn btn-outline-danger rounded-pill" type="submit" value="Subscribe" name="submit" >
                    </form>
                </div>
            </div>
        </div>

        <div class="contianer-fluid pt-md-5 pb-md-5" style="background-color: #01071b;" id="cont_5">
            <div class="row justify-content-evenly pt-5 mt-md-5" id="cont5_row">
                <div class="col-10 col-md-4 col-xl-4 mt-5 pt-5 ">
                    <h4 style="font-size: 60px; color:whitesmoke; font-weight: 400; letter-spacing: 3px;">Address</h4>
                    <p style="font-size:20px; color:whitesmoke;" class="mt-5">2300 Traverwood Dr.
                        Ann Arbor, MI 48105
                        United States
                        Phone: +1 734-332-6500
                        Directions</p>

                    <div class="row mt-5 pt-md-5">
                        <div class="col-10" id="icon_col">

                            <span class="ms-3 me-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16"
                                    style="color: whitesmoke;">
                                    <path class="icon_class"
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></span>
                            <span class="ms-3 me-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"
                                    style="color: whitesmoke;">
                                    <path  class="icon_class"
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></span>
                            <span class="ms-3 me-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"
                                    style="color: whitesmoke;">
                                    <path  class="icon_class"
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></span>
                            <span class="ms-3 me-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-github" viewBox="0 0 16 16"
                                    style="color: whitesmoke;">
                                    <path  class="icon_class"
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></span>

                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-3 col-xl-2 mt-5 mb-5 pt-md-5 pb-md-5" id="last_block_1">
                    <div class="row mt-3 ">
                        <div class="col-10 ">

                            <span style="color:whitesmoke;">About</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">History</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Our Team</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Technicians</span>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-3  col-xl-2 mt-5 mb-5 pt-md-5 pb-md-5" id="last_block_2">

                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Privacy Policy</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Terms And Conditionsy</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Documents</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">

                            <span style="color:whitesmoke;">Legal</span>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>