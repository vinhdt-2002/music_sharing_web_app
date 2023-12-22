<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
    <div class="profile-page">
        <!-- navigationbar -->
        <ul class="nav navigation-bar m-0 row">
            <li class="navigation-bar1 pr-0 col-4">
                <div class="logo mr-3">
                    <a href="home.html"><img src="assets/icons/Logo.img.svg" alt=""></a>
                </div>
                <div class="search-box">
                    <span><img class="search-icon ml-2" src="assets/icons/Search.svg"></span>
                    <input type="search" class="search-place" placeholder="Search in SOUNDHUB">
                </div>
            </li>
            <li class="navigation-bar2 p-0 col-4">
                <div class="nav-btn-1 ml-auto " data-toggle="toggle">
                    <a href="home.html"><img src="assets/icons/Home.svg" class="nav-icon"></a>
                </div>
                <div class="nav-btn-1 mx-5" data-toggle="toggle">
                    <a href="library.html"><img src="assets/icons/darhboard_alt.svg" class="nav-icon"></a>
                </div>
                <div class="nav-btn-1 mr-auto" data-toggle="toggle">
                    <a href="noti.html"><img src="assets/icons/Bell_pin.svg" class="nav-icon"></a>
                </div>
            </li>
            <li class="navigation-bar3 pl-0 col-4">
                <div class="dropdown nav-btn-2 ml-auto mx-2">
                    <img src="assets/icons/Info_fill.svg" class=" nav-icon-2 dropdown-toggle" data-toggle="dropdown">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="abtus.html">About us</a></li>
                        <li><a class="dropdown-item" href="legal.html">Legal</a></li>
                        <li><a class="dropdown-item" href="copyright.html">Copyright</a></li>
                        <li><a class="dropdown-item" href="support.html">Support</a></li>
                        <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">Signout</a></li>
                    </ul>
                </div>

                <div class="nav-btn-2 mx-2" data-toggle="toggle">
                    <a href="chat.html"><img src="assets/icons/Chat_alt_2_fill.svg" class="nav-icon-2"></a>
                </div>
                <div class="nav-btn-2 mx-2 active" data-toggle="toggle">
                    <a href="profile.html"><img src="assets/icons/User_cicrle_duotone.svg" class="nav-icon-3"></a>
                </div>
            </li>
        </ul>
        <!-- bodybar -->
        <div class="page-body-profile m-0 row">
            <div class="left-profile col-1"></div>
            <div class="feed-profile col-10">
                <div class="profile-frame">
                    <!-- Display user's avatar -->
                    <img class="avt-icon" src="php/get_avatar.php" alt="User Avatar">
                </div>
                <div class="share-frame-btn m-0 row">

                    <!-- Avatar Upload -->
                    <div class="share-btn mr-1">
                        <label for="avatar-upload" class="upload-btn">
                            <img class="upload-icon" src="assets/icons/Camera_fill.svg" alt="">
                            <div class="upload-title">Upload Avatar</div>
                        </label>
                        <!-- Input field for avatar upload -->
                        <input type="file" id="avatar-upload" style="display: none;">
                    </div>
                    
                    <!-- Background Upload -->
                    <div class="share-btn mr-auto">
                        <label for="background-upload" class="upload-btn">
                            <img class="upload-icon" src="assets/icons/Camera_fill.svg" alt="">
                            <div class="upload-title">Upload Background</div>
                        </label>
                        <!-- Input field for background upload -->
                        <input type="file" id="background-upload" style="display: none;">
                    </div>

                    <!--2 other buttons-->
                </div>
                <div class="share-btn mr-1">
                    <img class="share-icon " src="assets/icons/Edit_fill.svg" alt="">
                    <div class="share-title">Edit</div>
                </div>
                <div class="share-btn">
                    <img class="share-icon" src="assets/icons/External.svg" alt="">
                    <div class="share-title">Share</div>
                </div>
            </div>
            <div class="footer-frame m-0 row">
                <div class="track-frame p-0 col-7 mr-auto">
                    <div class="menu-frame-bar m-0 row">
                        <div class="menu-name p-0 col-2">All</div>
                        <div class="menu-name p-0 col-2">Popular Track</div>
                        <div class="menu-name p-0 col-2">Tracks</div>
                        <div class="menu-name p-0 col-2">Albums</div>
                        <div class="menu-name p-0 col-2">Playlists</div>
                        <div class="menu-name p-0 col-2">Reports</div>
                    </div>
                    <div class="track-frame-bar">
                        <div class="noti-track">
                            <img class="noti-icon my-5" src="assets/icons/Frame.svg" alt="">
                            <div class="noti-message-1 my-1">Seems a little quiet over here</div>
                            <div class="noti-message-2 my-1">Upload a track to share it with your followers</div>
                            <div class="upload-btn-track my-3">Upload now</div>
                        </div>
                    </div>
                </div>
                <div class="info-frame p-0 col-4">
                    <div class="show-info w-100">
                        <div class="info-title">Followers
                            <div class="info-number">100</div>
                        </div>
                        <div class="info-title">Following
                            <div class="info-number">200</div>
                        </div>
                        <div class="info-title">Tracks
                            <div class="info-number">300</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="right-profile col-1 "></div>
    </div>
    </div>
    <script>
        //jQuery
        $(document).ready(function () {
       $('#avatar-upload').change(function () {
           var file_data = $('#avatar-upload').prop('files')[0];
           var form_data = new FormData();
           form_data.append('avatar', file_data);

           // Send the file to the server using AJAX
           $.ajax({
               url: 'php/upload_avatar.php',
               dataType: 'text',
               cache: false,
               contentType: false,
               processData: false,
               data: form_data,
               type: 'post',
               success: function (response) {
                   // Update the user's avatar with the newly uploaded image
                   $('.avt-icon').attr('src', 'photo/avatars/' + response);
               },
           });
       });
   });

    </script>
</body>

</html>