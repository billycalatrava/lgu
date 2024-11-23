<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!--material cdn -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!--style -->
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="profile.webp" alt="">
                    <h2>LGU<span class="danger"> 4 </span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <!--sidebar -->
            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">receipt_long</span>                    
                    <h3>Announcement</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Submit feedback</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">mail_outline</span>
                    <h3>Messeges</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Services</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">report_gmailerrorred</span>
                    <h3>Contact us</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add user</h3>
                </a>
                <a href="login.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!--end sidebar -->

        <!--main-->
        <main>
            
            <h1>Dashboard</h1>

            <div class="recent-orders">
                <h2>Recent User's</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Benedict</td>
                            <td>0123</td>
                            <td>manila</td>
                            <td class="warning">pending</td>
                            <td class="primary">details
                                <span class="material-symbols-outlined">visibility</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Benedict</td>
                            <td>0123</td>
                            <td>manila</td>
                            <td class="warning">pending</td>
                            <td class="primary">details
                                <span class="material-symbols-outlined">visibility</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Benedict</td>
                            <td>0123</td>
                            <td>manila</td>
                            <td class="warning">pending</td>
                            <td class="primary">details
                                <span class="material-symbols-outlined">visibility</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Benedict</td>
                            <td>0123</td>
                            <td>manila</td>
                            <td class="warning">pending</td>
                            <td class="primary">details
                                <span class="material-symbols-outlined">visibility</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Benedict</td>
                            <td>0123</td>
                            <td>manila</td>
                            <td class="warning">pending</td>
                            <td class="primary">details
                                <span class="material-symbols-outlined">visibility</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!--end main-->

        <!--topbar-->
        <div class="right">
            <div class="top">
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Admin</b></p>
                        <small class="text-muted">Tang ina mo!</small>
                    </div>
                </div>
                <div class="profile-photo">
                    <img src="./image/profile.jpg" alt="">
                </div>
            </div>
            <!--end top bar-->

            

            <!--right sales analytics-->
            <div class="sales-analytics">
                <h2>User's</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>New User's</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+37%</h5>
                        <h3>241</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Inactive User's</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">-13%</h5>
                        <h3>121</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Active User's</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+50%</h5>
                        <h3>638</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add User's</h3>
                </div>
            </div>
            <!--end right sales analytics-->
        </div>
        <!--end right-->
    </div>
    <script src="./assets/css/index.js"></script>
</body>
</html>