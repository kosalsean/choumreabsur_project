<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="style/fontawesome-free-5.3.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hanuman|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="left-header">
        1
    </div>
    <div class="right-header">
        <i class="fas fa-bars " id="sideBar"></i>
        <div class="title">
            <span>My Title</span>
        </div>
        <div class="user-email">
            <span>
                example@gamail.com.kh.edu
            </span>
        </div>
        <div class="user-icon">
            <ul>
                <li><img src="image/user-image.png"></li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="left-menu">
        <div class="menu">
            <ul>
                <li data-opt = "0" >
                 <i class="fas fa-align-center"></i>&nbsp;Menu
                </li>
                <li>
                    <i class="fas fa-book"></i>&nbsp;Content
                </li>
                <li>
                    <i class="fas fa-ad"></i>&nbsp;Advertise
                </li>
                <li id = "setting">
                    <i class="fas fa-cog"></i>&nbsp;Setting<i class="fas fa-chevron-down arrow-down-right"></i>
                </li>
                 <div class="submenu">
                        <ul>
                            <li>
                                <i class="far fa-user"></i>&nbsp;User
                            </li>
                             <li>
                                <i class="fas fa-parking"></i>&nbsp;Permission
                            </li>
                             <li>
                                <i class="fas fa-unlock-alt"></i>&nbsp;Change Password
                            </li>
                             <li>
                                <i class="fab fa-cuttlefish"></i>&nbsp;Theme
                            </li>
                        </ul>
                </div>
            </ul>
        </div>
    </div>
    <div class="small-left-menu">
        <div class="menu-icon">
            <ul>
                <li data-opt = "0" >
                    <i class="fas fa-align-center"></i>
                </li>
                <li>
                    <i class="fas fa-book"></i>
                </li>
                <li>
                    <i class="fas fa-ad"></i>
                </li>
                <li id="setting-icon">
                    <i class="fas fa-cog"></i>
                </li>
                <div class="small-submenu">
                        <ul>
                            <li>
                                <i class="far fa-user"></i>
                            </li>
                             <li>
                                <i class="fas fa-parking"></i>
                            </li>
                             <li>
                                <i class="fas fa-unlock-alt"></i>
                            </li>
                             <li>
                                <i class="fab fa-cuttlefish"></i>
                            </li>
                        </ul>
                    </div>
            </ul>
        </div>
    </div>    
    <div class="content">
        <div class="pagination">
            <div class="left-action">
            <ul>
                <li><i class="fas fa-plus-square x2"></i> Add</li>
            </ul>
        </div>
        <div class="right-action">
            <ul>
                <li>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li><i class="fas fa-angle-left x2"></i></li>
                <li class="num-filter">
                   <span>1/1/5</span> 
                </li>
                <li><i class="fas fa-angle-right x2"></i></li>
            </ul>
        </div>
        </div>
       
    </div>
</div>
<div class="user-box">
    <div class="profile-box">
        <div class="profile">
            <div class="profile-image">
                <img src="image/user-image.png">
            </div>
        </div>
        <div class="user-detail">
            <span>Kosal User</span>
            <p>kosal@gmail.com.kh.edu</p>
        </div>
    </div>
    <div class="activity-box">
        <div class="btnChange">
            Change account
        </div>
         <div class="btnSignout">
            Sign out
         </div>
    </div>
</div>
<script src="js/app.js"></script>
</body>
</html>