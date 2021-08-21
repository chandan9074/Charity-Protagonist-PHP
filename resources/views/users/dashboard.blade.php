<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- custom-css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboardpage/dashStyle.css')}}" />
</head>

<body>
    <section class="home-section">
        <nav class="container-fluid navbar navbar-light mb-5 mb-md-0 nav-fixed">
            <a class="navbar-brand text-uppercase text-white fs-2" href="#">Charity</a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <button type="button" class="btn btn-danger order-last order-md-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Donate
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button href="#" class="btn btn-dark btn-outline-secondary text-white">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </button>
                <div class="d-flex order-first order-md-last">
                    <input class="form-control border-1 border-secondary bg-body text-white me-2" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark btn-outline-secondary text-white" type="submit"><i
                            class='bx bx-search fw-bold'></i></button>
                </div>
            </div>
        </nav>
        <?php 
        $conn = mysqli_connect('localhost', 'root', '', 'save_charity') or die(mysqli_error($conn));
        $data= "SELECT name from admins";
        $result = $conn -> query($data) or die($conn->error);
        ?>


        <div class="container mx-auto row justify-content-between g-5 my-5 p-0">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="card content-size bg-color overflow-auto position-fixed">
                  <?php 
                       while ($row = $result->fetch_assoc()):
                   ?>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b><?php echo $row['name'] ?></b></h3>
                    </div>
                    <?php endwhile; ?>
                    <!-- <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Ek Takar Ahar</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Chironton</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Light House</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Manusher Jonno Foundation</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Direct Relief</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Food for the Poor</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>SAHYOG - Care For You</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Books For Africa</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Panthera</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Caritas</b></h3>
                    </div>
                    <div class="card-body list box-border bg-white bg-opacity-75">
                        <h3 class="card-title"><b>Liberty Sparks</b></h3>
                    </div> -->
                </div>
            </div>

            <div class="col-12 col-md-7 col-lg-7">
                <div class="row row-cols-1 g-5">
                    <div class="col my-5">
                        <div class="card h-100 bg-white bg-opacity-75">
                            <div class="card-body mt-3">
                                <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                                <p class="card-text"><small>3 days ago</small></p>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This card has even longer content than the first to show that equal height
                                    action.
                                </p>
                                <img src="/css/dashboardpage/images/post1.jpeg" class="w-100 rounded-3" alt="...">
                            </div>

                            <div class="card-footer bg-transparent border-0 mb-4">
                                <button type="button" class="btn btn-danger">Donate</button>
                            </div>
                        </div>
                    </div>
                    <div class="col my-5">
                        <div class="card h-100 bg-white bg-opacity-75">
                            <div class="card-body mt-3">
                                <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                                <p class="card-text"><small>3 days ago</small></p>
                                <p class="card-text post-caption">This is a wider card with supporting text below as a
                                    natural
                                    lead-in to
                                    additional
                                    content. This card has even longer content than the first to show that equal height
                                    action.
                                </p>
                                <img src="/css/dashboardpage/images/post2.jpeg" class="w-100 rounded-3" alt="...">
                            </div>
                            <div class="card-footer bg-transparent border-0 mb-4">
                                <button type="button" class="btn btn-danger">Donate</button>
                            </div>
                        </div>
                    </div>
                    <div class="col my-5">
                        <div class="card h-100 bg-white bg-opacity-75">
                            <div class="card-body mt-3">
                                <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                                <p class="card-text"><small>3 days ago</small></p>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This card has even longer content than the first to show that equal height
                                    action.
                                </p>
                                <img src="/css/dashboardpage/images/post3.jpeg" class="w-100 rounded-3" alt="...">
                            </div>
                            <div class="card-footer bg-transparent border-0 mb-4">
                                <button type="button" class="btn btn-danger">Donate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Charity</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="navigation-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltips">Search</span>
            </li>
            <li>
                <a href="{{url('/users/dashboard')}}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltips">Dashboard</span>
            </li>
            <li>
                <a href="{{url('/users/profile')}}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltips">Profile</span>
            </li>
            <li>
                <a href="{{url('/users/profile/create_post')}}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Create Post</span>
                </a>
                <span class="tooltips">Create Post</span>
            </li>
            <li>
                <a href="{{url('/about')}}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltips">About</span>
            </li>
            <li>
                <a href="{{url('/feedback')}}">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">FeedBack</span>
                </a>
                <span class="tooltips">FeedBack</span>
            </li>

            <li class="profile">
                <a href="{{url('/auth/login')}}">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="links_name">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="/js/dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>