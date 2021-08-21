<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Profile</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- custom css for profile part  -->
    <link rel="stylesheet" href="/css/profilepage/profile.css"/>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- custom css for sidebar part  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboardpage/sideBarStyle.css')}}" />

  </head>

<body style="background-image: url(/css/profilepage/profileImage/bg2.jpg); background-repeat: no-repeat; background-size: 100% 100%;  width: 100%;">

    <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Charity</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{url('/users/dashboard')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{url('/users/profile')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <li>
       <a href="{{url('/users/profile/create_post')}}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Create Post</span>
       </a>
       <span class="tooltip">Create Post</span>
     </li>
     <li>
       <a href="{{url('/about')}}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
       <a href="{{url('/feedback')}}">
         <i class='bx bx-heart' ></i>
         <span class="links_name">FeedBack</span>
       </a>
       <span class="tooltip">FeedBack</span>
     </li>
     <li class="profile">
         <a href="{{url('/auth/login')}}">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="links_name">Logout</span>
                </a>
     </li>
    </ul>
  </div>
  <!-- <section class="home-section">
      <div class="text">Dashboard</div>
  </section> -->

  <!--Main container. Everything must be contained within a top-level container.-->
  <div class="container-fluid" id="profile-page">

    <!--First row (only row)-->
    <div class="row extra_margin">

      <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
      <div class="col-md-4 col-sm-12 col-xs-12 profile-info">

          <!-- Div to center the header image/name/social buttons -->
          <div class="text-center " style="margin-left: 7rem;">

              <!-- Placeholder image using Placeholder.com -->
              <img src="/css/profilepage/profileImage/profile.jpeg" class="profile-photo"/>
              <!-- Header text (Person's name) -->
              <h2><b>{{$LoggedUserInfo['name']}}</b></h2>
              <p class="text-muted">{{$LoggedUserInfo['st_date']}}- Running</p>

              <p class="text-center contact"> <span class="fas fa-phone"></span><b>{{$LoggedUserInfo['phone_no']}}</b></p>
              <button class="btn btn-donate">DONATE</button>
              <!-- Social buttons using anchor elements and btn-primary class to style -->
<p>
  <a class="btn btn-color fab fa-facebook-square" href="#" role="button"></a>
  <a class="btn btn-color fab fa-twitter" href="#" role="button"></a>
  <a class="btn btn-color fab fa-instagram-square" href="#" role="button"></a>
  <a class="btn btn-color fas fa-globe-americas" href="#" role="button"></a>
</p>
<hr style="width: 50%; margin-top: 50px; margin-bottom: 50px;">

<div class="grid " style="--bs-gap: .25rem 5rem;">

  <div class="g-col-8 g-col-md-8 g-col-sm-12 g-col-xs-12">
  <div class="description">
    <h3>About Us</h3>
    <hr style="width: 50%;">
    <p class="about">
    Prodeepti is a small organization running by a group of teenagers. We work in a significant area of Mirpur, Dhaka, Bangladesh. We are trying to help people with our small deposited money. It will be really a huge inspiration for us if you would like to connect with us to spread HUMANITY!</p>
  </div>
</div>
<!-- <div class="g-col-mid-1">

</div> -->
</div>
          </div>
<hr style="width: 50%; margin-top: 50px;margin-left: 7rem">
      </div> <!-- End Col 1 -->

      <!-- Second column - for small and extra-small screens, will use whatever # cols is available -->
      <div class="col-md-8 col-sm-12 col-xs-12 text-center">
       
     <div class="row hello">
               <div class="post col-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-body">
                      <div class="post-bg">
                        <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                        <p class="card-text"><small class="text-muted">3 days ago</small></p>
                      </div>
                      <p class="card-text post-caption">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     
                    </div>
                    <img src="/css/profilepage/profileImage/post1.jpeg" class="card-img-bottom" alt="..." style=" width: 100%;" >
                   
                    <div class="card-footer post-bg">
                        <a href="#" class="btn">Donate</a>
                      </div>
                  </div>
                <div class="card">
                    <div class="card-body">
                      <div class="post-bg">
                        <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                        <p class="card-text"><small class="text-muted">3 days ago</small></p>
                      </div>
                      <p class="card-text post-caption">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     
                    </div>
                    <img src="/css/profilepage/profileImage/post2.jpeg" class="card-img-bottom" alt="..." style=" width: 100%;" >
                   
                    <div class="card-footer post-bg">
                        <a href="#" class="btn">Donate</a>
                      </div>
                  </div>
                <div class="card">
                    <div class="card-body">
                      <div class="post-bg">
                        <h3 class="card-title"><b>{{$LoggedUserInfo['name']}}</b></h3>
                        <p class="card-text"><small class="text-muted">3 days ago</small></p>
                      </div>
                      <p class="card-text post-caption">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     
                    </div>
                    <img src="/css/profilepage/profileImage/post3.jpeg" class="card-img-bottom" alt="..." style=" width: 100%;" >
                   
                    <div class="card-footer post-bg">
                        <a href="#" class="btn">Donate</a>
                      </div>
                  </div>
               </div>
              </div>
        
        
        


      </div> <!-- End column 2 -->

    </div> <!-- End row 1 -->

  </div> <!-- End main container -->

    <!-- script file for profle part  -->
  <script src="https://kit.fontawesome.com/673896855a.js" crossorigin="anonymous"></script>

    <!-- script file for sidebar part  -->
  <script src="/js/sidebar.js"></script>
  <script src="/js/backBLur.js"></script>
</body>

</html>