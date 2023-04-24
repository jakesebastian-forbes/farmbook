<?php
 session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/134428d8b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/82727f4033.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'> 
 
    <title>Feed</title>

<style>
  .nav-menu-btn{
    width: 40px; 
    height: 40px;
      color: #FFDE59; 
      font-size: 25px;   
    }

    .nav-menu-btn:active{
      color: rgba(255,222,89,0.5) ;
    }

    .nav-menu-btn:hover{
      
      background-color: #889a80;
    }

  .messages1:hover{
    background-color: rgb(232, 230, 230);
  }

   /* =====================================================  */
   .send_btn{
      background-color: transparent;
      border: none;
    }
    .send_btn:active{
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
        }
  
   /* ======================================================= */
   .side-nav li:hover{
      background-color:#95b687;
    }
    .side-nav li:active{
      background-color:#57744B;
    }
   /* =================================================== */

   .friend-sidebar::-webkit-scrollbar{
      width: 0%;
    }

   /* =================================================== */

   .post_img{
      background-color: transparent;
      border: none;
   }
  .post_img:active{
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
    /* ================================================= */
    .post_img{
      /* background-color: rgb(224, 222, 222); */
      border: none;
      padding: 7px;
      border-radius: 10px;
      text-decoration: none;
      cursor: pointer;
    }
    .post_img:active{
      background-color: rgb(193, 190, 190);

    }
    .post_img:hover{
      background-color: rgb(193, 190, 190,0.5);
    }
    /* ================================================== */

    .like-btn{
      
      border-radius: 10px;
      border: none;
      background-color:transparent;
      color: black;
      padding: 5px 5px;
      font-size: 20px; /* Set a font size */
      cursor: pointer; /* Mouse pointer on hover */
      color: black;
      width: 100%;  
  }

  .like-btn:hover {
      Background-color:rgb(219, 219, 219)
  }

  .like-btn:active {
      Background-color:rgb(219, 219, 219,0.5);
      color: blue;
  }

  .comment-1:hover{
    Background-color:rgb(219, 219, 219);
    border-radius: 10px;
  }

  .comment-btn{
      
      border-radius: 10px;
      border: none;
      background-color:transparent;
      color: black;
      padding: 5px 5px;
      font-size: 20px; /* Set a font size */
      cursor: pointer; /* Mouse pointer on hover */
      color: black;
      width: 100%;
      
      
      
  }

  .comment-btn:hover {
      Background-color:rgb(219, 219, 219)
  }



  .comment-btn:active {
      Background-color:rgb(219, 219, 219,0.5);
      color: green;
  }

  .input-comment:hover{
    Background-color:rgb(219, 219, 219);
    border-radius: 10px;
  }
/* =================================== */
.days_forecast img{
    height: 40px;
    width: 40px;
}
.forecast_btn {
    height: 40px;
    width: 200px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: black;
    background-color:   #57744B;;
    border: none;
    border-radius: 15px;
    /* box-shadow: 0 5px #999; */
}

.forecast_btn:hover {
    background-color: rgba(87,116,75, 0.5);
}

.forecast_btn:active {
    background-color: rgba(87,116,75, 0.5);
    /* box-shadow: 0 5px #666; */
    transform: translateY(4px);
} 
</style>
 <!-- POST STYLE -->
 <style>
   
  #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
  }

  #myImg:hover {
      opacity: 0.7;
  }

  /* The Modal */

  .myModal {
    margin-top: 60px;
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 7;
      /* Sit on top */
      padding-top: 60px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
  }

  /* Modal Content (image) */

  .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
  }

  /* Caption of Modal Image */

  #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
  }

  /* Add Animation */

  .modal-content,
  #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0);
      }
      to {
        -webkit-transform: scale(1);
      }
  }

  @keyframes zoom {
      from {
        transform: scale(0);
      }
      to {
        transform: scale(1);
      }
  }

  /* The Close Button */

  .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
  }

  .close:hover,
  .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */

  @media only screen and (max-width: 700px) {
      .modal-content {
      margin-top: 120px;
        width: 100%;
      }
  }
</style>



  </head>
  <!-- <div class="container"> -->
    <body class=" position-relative" style="   background-color: #E4E4E4;">
      <!-- ================= Appbar ================= -->

      <?php 
     
      
$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{

$query = "SELECT t1.id, t1.firstName, t1.lastName,t2.profileImg,t2.dateTime, t2.status 
FROM `accounts` as t1
INNER JOIN `profile_images` as t2
ON t1.id = t2.acc_id
WHERE (t1.firstName = 'Monkey' and t1.lastName = 'Luffy') AND status = 1";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {
      $profile = 'src=data:image/jpeg;base64,'.base64_encode( $rows['profileImg']) ;
    }
  }
      ?>
      <div class="d-flex align-items-center fixed-top shadow " style="min-height: 56px; z-index: 5; background-color: #57744B;">
        <div class="container-fluid">
          <div class="row align-items-center" style="background-color: #57744B; height: 80px;">
            <!-- search -->
            <div class="col-4  d-flex align-items-center">
              <!-- logo -->
         
              <!-- <h1  style="font-family: 'Archivo Black'; color: #FFDE59; ">FarmBook</h1>   -->
              <img src="../img/farmbook_logo.png" alt="" class="Logo rounded-circlep-1 mx-2 " style="width: 60px; height: 60px;border-color: black;">
              <!-- search bar -->
              <div class="input-group ms-1" type="button">
                <!-- mobile -->
                <span
                class="input-group-prepend d-lg-none"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-circle"
                  style="min-height: 40px"
                >
                  <i class="fas fa-search text-muted"></i>
                </div>
              </span>
                <!-- desktop -->
                <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div
                    class="input-group-text bg-gray border-0 rounded-pill"
                    style="min-height: 40px; min-width: 300px"
                  >
                    <i class="fas fa-search me-1 text-muted"></i>
                    <p class="m-0 fs-7 text-muted">Search Flexbook</p>
                  </div>
                </span>
                <!-- search menu -->
                <ul
                  class="dropdown-menu overflow-auto border-0 shadow p-3"
                  aria-labelledby="searchMenu"
                  style="width: 20em; max-height: 600px"
                >
                  <!-- search input -->
                  <li>
                    <input
                      type="text"
                      class="rounded-pill border-0 bg-gray dropdown-item"
                      placeholder="Search Flexbook..."
                      autofocus
                    />
                  </li>
                  <!-- search 1 -->
                  <li class="my-4">
                    <div class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                  <!-- search 2 -->
                  <li class="my-4">
                    <div
                      class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                  <!-- search 3 -->
                  <li class="my-4">
                    <div
                      class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
      
            <!-- menus -->
            <div class="col-8 d-flex align-items-center justify-content-end">
              <!-- avatar -->
              <!-- main menu -->
              <div class="nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3 "  type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-ellipsis"></i>
              </div>
              <!-- main menu dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3 overflow-auto"
                aria-labelledby="mainMenu"
                style="width: 23em; max-height: 600px"
              >
                <!-- menu -->
                <div>
                  <!-- header -->
                  <li class="p-1 mx-2">
                    <h2>Menu</h2>
                  </li>
                  <!-- search -->
               
                  <!-- social items -->
              
               
                  <!-- s1 -->
                  <li class="my-2 p-1">
                    <a href="#" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                        <i class="fa-solid fa-user-group "   style="font-size: 35px; object-fit: cover;"></i>
                      </div>
                   
                      <div>
                        <p class="m-0">Friends</p>
                        <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span>
                      </div>
                    </a>
                  </li>
                  <!-- s2 -->
                  <li class="my-2 p-1">
                    <a href="#" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                   
                        <i class="fas fa-cloud-sun "   style="font-size: 35px; object-fit: cover;"></i>
                        
                      </div>
                   
                      <div>
                        <p class="m-0">Weather</p>
                        <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span>
                      </div>
                    </a>
                  </li>
  
                   <!-- s3 -->
                   <li class="my-2 p-1">
                    <a href="#" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                   
                        <i class="fa-solid fa-book" style="font-size: 35px; object-fit: cover;"></i>
                        
                      </div>
                   
                      <div>
                        <p class="m-0">E-Learning</p>
                        <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span>
                      </div>
                    </a>
                  </li>
               
                
            
              </ul>
              <!-- chat -->
              <div class=" nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3 "  type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <!-- chat  dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3 overflow-auto"
                aria-labelledby="chatMenu"
                style="width: 23em; max-height: 600px"
              >
                <!-- header -->
                <li class="p-1">
                  <div class="d-flex justify-content-between">
                    <h2>Message</h2>
                    <div>
                      <!-- expand message -->
                      <i class="fas fa-expand-arrows-alt text-muted mx-2"  type="button" ></i>
                      <!-- new message -->
                      <i class="fas fa-edit text-muted mx-2" type="button"  data-bs-toggle="modal" data-bs-target="#newChat"></i>
                    </div>
                  </div>
                </li>
                <!-- search -->
                <li class="p-1">
                  <div
                    class="input-group-text bg-gray border-0 rounded-pill"
                    style="min-height: 40px; min-width: 230px"
                  >
                    <i class="fas fa-search me-2 text-muted"></i>
                    <input
                      type="text"
                      class="form-control rounded-pill border-0 bg-gray"
                      placeholder="Search Messenger"
                    />
                  </div>
                </li>
                <!-- message 1 -->
                
                <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat1">
                  <div class="d-flex align-items-center justify-content-between">
                    <!-- big avatar -->
                    <div class="d-flex align-items-center justify-content-evenly">
                      <div class="p-2">
                        <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                      </div>
                      <div>
                        <p class="fs-7 m-0">Izuku Midoriya</p>
                        <span class="fs-7 text-muted"
                          >Lorem ipsum &#8226; 7d
                        </span>
                      </div>
                    </div>
                    <!-- small avatar -->
                    <div class="p-2">
                      <img  src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                    </div>
                  </div>
                </li>
  
  
               <!-- message 2 -->
               <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat2">
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div>
                      <p class="fs-7 m-0">Frank Ocean</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d
                      </span>
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img  src="../img/profile pics/profile3.png" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                  </div>
                </div>
              </li>
            <!-- message 3 -->
            <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat3">
              <div class="d-flex align-items-center justify-content-between">
                <!-- big avatar -->
                <div class="d-flex align-items-center justify-content-evenly">
                  <div class="p-2">
                    <img src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                  </div>
                  <div>
                    <p class="fs-7 m-0">LeBron James</p>
                    <span class="fs-7 text-muted"
                      >Lorem ipsum &#8226; 7d
                    </span>
                  </div>
                </div>
                <!-- small avatar -->
                <div class="p-2">
                  <img  src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                </div>
              </div>
            </li>
       
               
              </ul>
              <!-- notifications -->
             
              <div class=" nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3" type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-bell"></i>
              </div>
              <ul
                class="dropdown-menu border-0 shadow p-3"
                aria-labelledby="notMenu"
                style="width: 29rem; max-height: 600px; overflow-y: auto"
              >
                <!-- header -->
                <li class="p-1">
                  <div class="d-flex justify-content-between">
                    <h2>Notifications</h2>
                    
                  </div>
                 
                </li>
                <!-- news -->
                <div class="d-flex justify-content-between mx-2">
                  <h5>New</h5>
                  <a href="#" class="text-decoration-none">See All</a>
                </div>
                <!-- news 1 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                <!-- news 2 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                <!-- news 3 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                
              </ul>
  
              <!-- secondary menu -->
              <div class=" rounded-circle p-1 d-flex  align-items-center  justify-content-center mx-2 " type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <img <?php echo $profile?> class="rounded-circle me-2" alt="avatar" style="width: 40px; height: 40px; object-fit: cover"
                id = "profile_navbar_right"/>
                
              </div>
              <!-- secondary menu dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3"
                aria-labelledby="secondMenu"
                style="width: 23em"
              >
                <!-- avatar -->
                <li class="dropdown-item p-1 rounded d-flex" type="button">
                 <img <?php echo $profile?> class="rounded-circle me-2" alt="avatar" style="width: 40px; height: 40px; object-fit: cover"
                 id = "dropdown_profile"/>
                
                  <div>
                    <p class="m-0"><?php echo $_SESSION['firstName']." ".$_SESSION['lastName']?></p>
                    <p class="m-0 text-muted">See your profile</p>
                  </div>
                </li>
           
              
                <li class="dropdown-item p-1 my-3 rounded" type="button">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a
                        href="../php_func/logout.php"
                        class="d-flex text-decoration-none text-dark"
                      >
                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                        <div
                          class="
                            ms-3
                            d-flex
                            justify-content-between
                            align-items-center
                            w-100
                          "
                        >
                          <p class="m-0">Log Out</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- end -->
            </div>
          </div>
        </div>
      </div>
      <!-- =============== New Chat Mobile =============== -->
      <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true" data-bs-backdrop="false">
        <div class="  modal-dialog modal-sm position-absolute bottom-0 end-0  w-80 shadow " style="transform: translateX(-70px)">
          <div class="modal-content border-0 w-100">
            <!-- head -->
            <div class="modal-header align-items-start">
              <div>
                <h6 class="modal-title text-dark mb-2" id="newChat1Label">
                  New Message
                </h6>
                <label class="text-dark">To:</label>
                <input type="text" class="border-0" />
              </div>
              <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <!-- body -->
           
            <!-- footer -->
            <div class="modal-footer border-0" style="min-height: 300px"></div>
          </div>
        </div>
      </div>
      <!-- ================= Chat Modal Mobile ================= -->
      <!-- chat 1 -->
      <div class="modal  fade mx-3 "   id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-70px)"
      >
        <div class="modal-content border-0 shadow w-100">
          <!-- head -->
          <div class="modal-header" style=" background-color:#FFDE59;">
            <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
              <!-- avatar -->
              <div class="position-relative">
                <img src="../img/profile pics/profile2.png"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Izuku Midoriya</p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
   
            <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
              <!-- message -->
              <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            </li>
  
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
              <!-- message -->
              <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile2.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
            </li>
           
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="/img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
  
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
         
            
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0 mb-2">
            <div class="d-flex">
              <div class="d-flex align-items-center mx-3" >
                <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
        
                <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
              </div>
  
              <div>
                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
              </div>
  
              <div class="d-flex align-items-center mx-2    ">
          
                <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
                 
              
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 2 -->
    <div class="modal fade mx-3"  id="singleChat2" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-70px)"
      >
        <div class="modal-content border-0 shadow w-100">
          <!-- head -->
          <div class="modal-header" style=" background-color:#FFDE59;">
            <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
              <!-- avatar -->
              <div class="position-relative">
                <img src="../img/profile pics/profile3.jpg"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Izuku Midoriya</p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
   
            <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
              <!-- message -->
              <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            </li>
  
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
              <!-- message -->
              <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
            </li>
           
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
  
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
         
            
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0 mb-2">
            <div class="d-flex">
              <div class="d-flex align-items-center mx-3" >
                <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
        
                <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
              </div>
  
              <div>
                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
              </div>
  
              <div class="d-flex align-items-center mx-2    ">
            
                <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- chat 3 -->
      <div class="modal fade mx-3"  id="singleChat3" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-70px)"
        >
          <div class="modal-content border-0 shadow w-100">
            <!-- head -->
            <div class="modal-header" style=" background-color:#FFDE59;">
              <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
                <!-- avatar -->
                <div class="position-relative">
                  <img src="../img/profile pics/profile4.jpg"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                  <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Izuku Midoriya</p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
     
              <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
                <!-- avatar -->
                <div>
                  <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
                </div>
                <!-- message -->
                <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              </li>
    
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
                <!-- message -->
                <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
                </div>
              </li>
             
          <!-- message l -->
          <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
            <!-- message -->
            <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          </li>
    
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
            <!-- message -->
            <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
          </li>
    
          <!-- message l -->
          <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
            <!-- message -->
            <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          </li>
    
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
            <!-- message -->
            <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
          </li>
           
              
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0 mb-2">
              <div class="d-flex">
                <div class="d-flex align-items-center mx-3" >
                  <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                  <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
          
                  <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
                </div>
    
                <div>
                  <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
                </div>
    
                <div class="d-flex align-items-center mx-2    ">
              
                  <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
                   
                
             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- chat 4 -->
      <div
        class="modal fade"
        id="singleChat4"
        tabindex="-1"
        aria-labelledby="singleChat4Label"
        aria-hidden="true"
        data-bs-backdrop="false"
      >
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-80px)"
        >
          <div class="modal-content border-0 shadow">
            <!-- head -->
            <div class="modal-header">
              <div
                class="dropdown-item d-flex rounded"
                type="button"
                data-bs-container="body"
                data-bs-toggle="popover"
                data-bs-placement="left"
                data-bs-content='
                        <div>
                          <div class="popover-body d-flex flex-column p-0">
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-comment me-3 fs-4"></i>
                              <p class="m-0">Open Messenger App</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-user me-3 fs-4"></i>
                              <p class="m-0">Open Messenger App</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="fas fa-fill-drip me-3 fs-4"></i>
                              <p class="m-0">Color</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-smile-beam me-3 fs-4"></i>
                              <p class="m-0">Emoji</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="fas fa-pencil-alt me-3 fs-4"></i>
                              <p class="m-0">Nicknames</p>
                            </div>
                          </div>
                        </div>
                        '
                data-bs-html="true"
              >
                <!-- avatar -->
                <div class="position-relative">
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                  <span
                    class="
                      position-absolute
                      bottom-0
                      translate-middle
                      p-1
                      bg-success
                      border border-light
                      rounded-circle
                    "
                    style="left: 75%"
                  >
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Tony <i class="fas fa-angle-down"></i></p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
              <i class="fas fa-video mx-2 text-muted pointer"></i>
              <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0">
              <div class="d-flex">
                <div class="d-flex align-items-center">
                  <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                  <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Aa"
                  />
                </div>
                <div class="d-flex align-items-center mx-2">
                  <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- chat 5 -->
      <div
        class="modal fade"
        id="singleChat5"
        tabindex="-1"
        aria-labelledby="singleChat5Label"
        aria-hidden="true"
        data-bs-backdrop="false"
      >
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-80px)"
        >
          <div class="modal-content border-0 shadow">
            <!-- head -->
            <div class="modal-header">
              <div
                class="dropdown-item d-flex rounded"
                type="button"
                data-bs-container="body"
                data-bs-toggle="popover"
                data-bs-placement="left"
                data-bs-content='
                            <div>
                              <div class="popover-body d-flex flex-column p-0">
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-comment me-3 fs-4"></i>
                                  <p class="m-0">Open Messenger App</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-user me-3 fs-4"></i>
                                  <p class="m-0">Open Messenger App</p>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="fas fa-fill-drip me-3 fs-4"></i>
                                  <p class="m-0">Color</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-smile-beam me-3 fs-4"></i>
                                  <p class="m-0">Emoji</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="fas fa-pencil-alt me-3 fs-4"></i>
                                  <p class="m-0">Nicknames</p>
                                </div>
                              </div>
                            </div>
                            '
                data-bs-html="true"
              >
                <!-- avatar -->
                <div class="position-relative">
                  <img
                    src="h../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                  <span
                    class="
                      position-absolute
                      bottom-0
                      translate-middle
                      p-1
                      bg-success
                      border border-light
                      rounded-circle
                    "
                    style="left: 75%"
                  >
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Phu <i class="fas fa-angle-down"></i></p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
              <i class="fas fa-video mx-2 text-muted pointer"></i>
              <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div> 
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0">
              <div class="d-flex">
                <div class="d-flex align-items-center">
                  <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                  <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Aa"
                  />
                </div>
                <div class="d-flex align-items-center mx-2">
                  <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- ================= Main ================= -->
      <div class="container">
        <div class="row justify-content-evenly ">
          <!-- ================= Sidebar ================= -->
          <div class="col-12 col-lg-3 position-relative"  >
            
            <div class="d-none justify-content-center d-xxl-block   position-fixed" style="max-width: 300px; width: 100%; z-index: 4;overflow: hidden; ">
             
              <div class="dropdown-itemrounded text-center    d-flex flex-column " style="margin-top: 90px;">
                <a href="#" class=" d-block align-items-center text-decoration-none text-dark" >
                  <div class="p-2">
                    <img <?php echo $profile?> alt="avatar"class="rounded-circle me-2"style="width: 80px; height: 80px; object-fit: cover"
                    id="profile_left"/>
                  </div>
                  <div>
                    <!-- <p class="m-0">Mac Miller</p> -->
                    <h3 class="m-0"><?php echo $_SESSION['firstName']." ".$_SESSION['lastName']?></h3>
                  </div>
                </a>
              </div>
              
              <ul class="navbar-nav side-nav mt-4 ms-3 d-flex flex-column  mb-3 bg-light rounded mx-2 my-1" >
              
                <li class="dropdown-item side-item-li p-1 rounded">
                  <a href="#" class=" d-flex align-items-center text-decoration-none text-dark ">
                    <div class="p-2">
                      <i class="fa-solid fa-user-group "   style="width: 40px; height: 40px; object-fit: cover;font-size: 40px;"></i>
                     
                    </div>
                    <div>
                      <h4 class="ms-2">Friends</h4>
                     
                    </div>
                  </a>
                </li>
                
                <!-- top 2 -->
                <li lass="dropdown-item side-item-li p-1 rounded">
                  <a href="#" class=" d-flex align-items-center text-decoration-none text-dark ">
                    <div class="p-2">
                      <i class="fas fa-cloud-sun "style="width: 50px; height: 50px; object-fit: cover;font-size: 40px;"></i>
                     
                    </div>
                    <div>
                      <h4 class="ms-2">Weather</h4>
                     
                    </div>
                  </a>
                </li>
         
                <!-- top 3 -->
                <li class="dropdown-item side-item-li p-1 rounded">
                  <a href="e-learning2.php" class=" d-flex align-items-center text-decoration-none text-dark ">
                    <div class="p-2">
                      <i class="fa-solid fa-book"style="width: 50px; height: 50px; object-fit: cover;font-size: 40px;"></i>
                     
                    </div>
                    <div>
                      <h4 class="ms-2">E-Learning</h4>
                     
                    </div>
                  </a>
                </li>
               
                <hr class="m-0" />
            
              
             
              </ul>
  
            <!--=========== sidebar friend request ========== -->
  
            <h4 class="mx-4">Friend Requests</h4>
           <div class="friend-sidebar mx-4" style="overflow: auto; overflow-y: scroll; height: 302px; width: 90%; ;" >
            <!-- request 1 -->
              <div class="requests d-block bg-light my-2 py-1 px-4 mx-1 rounded" style="height: 130px;">
                <div class="info d-flex my-1 gap-2 pt-2" >
                  <div class="req-profile-pic " >
                      <img src="../img/profile pics/profile6.jpg"  class="friend-req-prof rounded-circle " style="height: 50px; width: 50px;" >
                  </div>
                  <div class="">
                      <h5>Peter Parker</h5>
                      <p class="text-muted">8 mutual friends</p>
                      
                  </div>
              </div>
              <div class="action ">
                  <button class="btn btn-primary btn-sm">Accept</button>
                  <button class="btn btn-secondary btn-sm">Decline</button>
              </div>
              </div>
              <!-- request 2 -->
              <div class="requests d-block bg-light my-2 py-1 px-4 mx-1 rounded" style="height: 130px;">
                <div class="info d-flex my-1 gap-2 pt-2" >
                  <div class="req-profile-pic " >
                      <img src="../img/profile pics/profile6.jpg"  class="friend-req-prof rounded-circle " style="height: 50px; width: 50px;" >
                  </div>
                  <div class="">
                      <h5>Peter Parker</h5>
                      <p class="text-muted">8 mutual friends</p>
                      
                  </div>
              </div>
              <div class="action ">
                  <button class="btn btn-primary btn-sm">Accept</button>
                  <button class="btn btn-secondary btn-sm">Decline</button>
              </div>
              </div>

               <!-- request 2 -->
               <div class="requests d-block bg-light my-2 py-1 px-4 mx-1 rounded" style="height: 130px;">
                <div class="info d-flex my-1 gap-2 pt-2" >
                  <div class="req-profile-pic " >
                      <img src="../img/profile pics/profile6.jpg"  class="friend-req-prof rounded-circle " style="height: 50px; width: 50px;" >
                  </div>
                  <div class="">
                      <h5>Peter Parker</h5>
                      <p class="text-muted">8 mutual friends</p>
                      
                  </div>
              </div>
              <div class="action ">
                  <button class="btn btn-primary btn-sm">Accept</button>
                  <button class="btn btn-secondary btn-sm">Decline</button>
              </div>
              </div>
            
             
           </div>
  
  
  
  
            </div>
            
          </div>
          <!-- ================= Timeline ================= -->
          <div class="col-12 col-lg-6 pb-5" >
            <div class="d-flex flex-column justify-content-center w-100 mx-auto position-relative" style="padding-top: 56px; max-width: 680px; ">
             
              <!-- create post -->
              <div class="bg-white p-3 mt-5 rounded border shadow">
                <!-- avatar -->
                <div class="d-flex" type="button">
                  <div class="p-1"> 
                    <img <?php echo $profile?> alt="avatar" class="rounded-circle me-2"style="width: 38px; height: 38px; object-fit: cover"
                    id = "status_profile"/>
                  </div>
                  <input type="text"class="form-control rounded-pill border-0 bg-gray pointer" disabled placeholder="What's on your mind?"data-bs-toggle="modal"data-bs-target="#createModal"
                  />
                </div>
                <!-- create modal -->
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" data-bs-backdrop="false" >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                      <!-- head -->
                      <div class="modal-header align-items-center">
                        <h5 class="text-dark text-center w-100 m-0"id="exampleModalLabel">
                          Create Post
                        </h5>
                        <button type="button"class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                      </div>
                      <!-- body -->
                      <div class="modal-body my-1 px-3" >
                        <!-- <div class="my-1 p-1"> -->
                          <div class="d-flex flex-column">
                            <!-- name -->
                            <div class="d-flex align-items-center">
                              <div class="p-2">
                                <img src="../img/profile pics/profile.jpg" alt="from fb" class="rounded-circle" style=" width: 38px; height: 38px; object-fit: cover;"/>
                              </div>
                              <div>
                                <p class="m-0 fw-bold">Mac Miller</p>
                              
                              </div>
                            </div>
                            <!-- text -->
                            <div >
                              <textarea cols="30"rows="5" class="form-control border-1" placeholder="What's on your mind?" ></textarea>
                            </div>
                       
                            <!-- options -->
                            <div class=" d-flex justify-content-between border border-1 border-light rounded mt-2 mx-2">
                              
                              <style>
                              
                              </style>
  
                                <label for="post_img" class="post_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i> Photo/Video</label>
                                <input type="file" class="post_img"id="post_img" name="myfile" style="display: none; ">
                              
                              
                            
                          
                            </div>
                          <!-- </div> -->
                        </div>
  
                        <!-- end -->
                      </div>
                      <!-- footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-100">
                          Post
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr />
                <!-- actions -->
                <!-- image button style -->
                <style>
                 
                </style>
                <div class="d-flex flex-column flex-lg-row mt-3 justify-start">
                  <!-- a 1 -->
                  <div class=" dropdown-item roundedm d-flex align-items-center mx-2" >
                 
                      <label for="post_img" class="post_img " ><i class="fa-solid fa-image" style=" font-size: 20px;"></i> Photo/Video </label>
                      <input type="file" class="post_img"id="post_img" name="myfile" style="display: none; ">
                
                  </div>
  
                </div>
              </div>
       
              <!-- posts -->
  
             
  
  
  
  

<?php


$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{
 $query = "SELECT CONCAT(accounts.firstName, ' ', accounts.lastName) AS `Account Owner`, caption, GROUP_CONCAT(posting_medias.media)
  AS `Medias`,dateTime AS `Date and Time` FROM postings INNER JOIN accounts ON postings.acc_id = accounts.id LEFT JOIN posting_medias 
 ON postings.id = posting_medias.posting_id GROUP BY postings.id;";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {

      
    ?>
  
              <!-- p 1 -->
              <div class="bg-white p-4 rounded shadow mt-3">
                <!-- author -->
                <div class="d-flex justify-content-between">
                  <!-- avatar -->
                  <div class="d-flex">
                    <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle me-2"  style="width: 38px; height: 38px; object-fit: cover"/>
                    <div>
                      <p class="m-0 fw-bold"><?php echo $rows['Account Owner']?></p>
                      <span class="text-muted fs-7"><?php echo $rows['Date and Time']?></span>
                    </div>
                  </div>
               
                </div>
                <!-- post content -->
                <div class="mt-3">
                  <!-- content -->
                  <div>
                    <p>
                    <?php echo $rows['caption']?>
                    </p>
                    <div class="row">
                      <div style = "display: flex; flex-wrap: wrap;">

                      <div style="display: flex; flex-direction: column; ">  
                          <!-- <?php// echo 'src=data:image/jpeg;base64,'.base64_encode( $rows['profileImg'])?> -->
                       <img <?php echo 'src=data:image/jpeg;base64,'.base64_encode( $rows['Medias'])?> id="myImg" alt="post image" 
                       class="img-fluid rounded " style = "aspect-ratio: 50/49; height: 200px;"/>
                      </div>
                     
                        
                      </div>
                    </div>
               
                  </div>
                  
                    <!-- The Modal -->
                      <div id="myModal" class="modal myModal px-5">
                        <span class="close">×</span>
                        <img class="modal-content " id="img01" />
                        <!-- <div id="caption"></div> -->
                    </div>
       
                   <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");
                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById("myImg");
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function() {
                       modal.style.display = "block";
                       modalImg.src = this.src;
                       captionText.innerHTML = this.alt;
                    };
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                       modal.style.display = "none";
                    };
                 </script>
  
                  <!-- likes & comments -->
                  <div class="post__comment mt-3 position-relative">
                 
                    <style>
                      
                         
                    </style>
                    <hr>
                    <!-- comments start-->
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0">
                      
                        <!-- <hr /> -->
                        <!-- comment & like bar -->
                        <div class="d-flex justify-content-around">
                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                            <button type="button" class="like-btn "> <span class="d-flex justify-content-center "><i class="fas fa-thumbs-up mt-1 mx-3"></i><p class="m-0" >Like</p></span></button>
                            
                            
                          </div>
                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                          <button type="button" class="comment-btn " data-bs-toggle="collapse"  data-bs-target="#collapsePost1" aria-expanded="false"   aria-controls="collapsePost1"> <span class="d-flex justify-content-center "><i class="fa-solid fa-comment mt-1 mx-3"></i><p class="m-0" >Comment</p></span></button>
                            
                            
                          </div>
                        </div>
                        <!-- comment expand -->
                        <div id="collapsePost1"  class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <hr />
                          <div class="accordion-body">
                            <!-- comment 1 -->
                            <div class="comment-1 d-flex align-items-center p-2">
                              <!-- avatar -->
                              <img src="../img/profile pics/profile5.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                              <!-- comment text -->
                              <div class="p-3 rounded comment__input w-100">
                                <!-- comment menu of author -->
                                <div class="d-flex justify-content-end">
                                  <!-- icon -->
                                  <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                  <!-- menu -->
                                  <ul
                                    class="dropdown-menu border-0 shadow"
                                    aria-labelledby="post1CommentMenuButton"
                                  >
                                   
                                    <li class="d-flex align-items-center">
                                      <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                        Delete Comment
                                      </a
                                      >
                                    </li>
                                  </ul>
                                </div>
                                <p class="fw-bold m-0">Paul Walker</p>
                                <p class="m-0 fs-7 bg-gray p-2 rounded">
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit.
                                </p>
                              </div>
                            </div>
                            <!-- comment 2 -->
                            <div class="comment-1 d-flex align-items-center p-2">
                              <!-- avatar -->
                              <img src="../img/profile pics/profile6.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                              <!-- comment text -->
                              <div class="p-3 rounded comment__input w-100">
                                <!-- comment menu of author -->
                                <div class="d-flex justify-content-end">
                                  <!-- icon -->
                                  <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                  <!-- menu -->
                                  <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton" >
                                   
                                    <li class="d-flex align-items-center">
                                      <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                        Delete Comment
                                      </a
                                      >
                                    </li>
                                  </ul>
                                </div>
                                <p class="fw-bold m-0">Peter Parker</p>
                                <p class="m-0 fs-7 bg-gray p-2 rounded">
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit.
                                </p>
                              </div>
                             
                            </div>
                            <!-- create comment -->
                            <form class="d-flex my-1">
                              <!-- avatar -->
                              <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;">
                              <div>
                                <img src="../img/profile pics/profile.jpg "alt=" avatar "class="rounded-circle me-2" style=" width: 38px;height: 38px;object-fit: cover;"/>
                              </div>
                              <!-- input -->
                              
                                <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                              </div>
                          
                            </form>
                            <!-- end -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end -->
                  </div>
                </div>
              </div>
  
<?php
    }
  }
?>
              
            </div>
          </div>
          <!-- ================= Chatbar ================= -->
          
          <div class="col-12 col-lg-3 position-relative" >
            <div class="d-none d-xxl-block  overflow-hidden scrollbar position-fixed " style=" max-width: 300px;  width: 100%; z-index: 4;padding-top: 56px; left: initial !important;" >
              <div class="p-3 mt-4">
                <!-- sponsors -->
                <h5 class="text-muted">Weather</h5>
                <!-- s 1 -->
                <li class="dropdown-item my-2 d-flex justify-content-between">
                  <div class="card text-center" style="color: #4B515D; border-radius: 10px; width: 20rem; margin-top: 20px;">
                    <div class="card-body p-4">
          
                      <div class="d-flex">
                        <h6 class="flex-grow-1">Nasugbu, Batangas</h6>
                        
                      </div>
          
                      <div class="d-flex flex-column text-center mt-2 mb-4">
                        <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> 28°C </h6>
                        <span class="small" style="color: #868B94">Sunny</span>
                      </div>
                      <!-- <div class="forecast d-flex"> -->
                      <div class="days_forecast d-flex justify-content-center p-2">
                            <div class="day1 d-block text-center p-1 mx-2" style="border: solid  rgb(40, 38, 38,0.5); width: 80px;border-radius: 10px;">
                                <img class="1st_day_img" src="../img/Weather/Sunny.png" alt="">
                                <div class="dets d-block">
                                  <small>Mon</small><br>
                                  <small>25°C </small>
                                </div>
                                
                            </div>
                            <div class="day2 d-blocktext-center p-1 mx-2" style="border: solid rgb(40, 38, 38,0.5);width: 80px; border-radius: 10px;">
                                <img class="2nd_day_img" src="../img/Weather/Sunny.png" alt="">
                                <div class="dets d-block">
                                  <small>Mon</small><br>
                                  <small>25°C </small>
                                </div>
                            </div>
                            <div class="day3 d-block p-1 mx-2" style="border: solid  rgb(40, 38, 38,0.5); width: 80px; border-radius: 10px;">
                                <img class="3rd_day_img" src="../img/Weather/Sunny.png" alt="">
                                <div class="dets d-block">
                                  <small>Mon</small><br>
                                  <small>25°C </small>
                                </div>
                            </div>
                       
                     
                      </div>
                    <!-- </div> -->
                      <button type="button" class="forecast_btn mt-3">See full forecast</button>
          
                    </div>
                  </div>
                </li>
                <!-- s 2 -->
                
             
                <hr class="m-0" />
             
                <!-- friend 1 -->
  
              </div>
            </div>
          </div>
        </div>
      </div>
  
   
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"
      ></script>
      <script src="./main.js"></script>
    </body>
  </div>
  
</html>


<!-- ****

SELECT t1.id, t1.firstName, t1.lastName,t2.profileImg,t2.dateTime, t2.status
FROM `accounts` as t1
INNER JOIN `profile_images` as t2
ON t1.id = t2.acc_id
WHERE (t1.firstName = 'Monkey' and t1.lastName = 'Luffy') AND status = 1
 -->