<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Admin | Dashboard
    </title>
    <link rel="shortcut icon" href="/images/logo-lv-black.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img id=¨logocomp¨ src="./images/logo-lv-black.svg" alt="Comapny logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./images/user-image.png" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    Not Logged In
                </div>
            </div>
            <button class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="https://dash.mcxleague.cf" class="active">
                    <i class='bx bx-home'></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="https://dash.mcxleague.cf/sales">
                    <i class='bx bx-shopping-bag'></i>
                    <span>Manage Database's</span>
                </a>
            </li>
            <li>
                <a href="https://dash.mcxleague.cf/analitics">
                    <i class='bx bx-chart'></i>
                    <span>analytic</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle'></i>
                    <span>account</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="https://auth.mcxleague.cf/account/profile>
                            edit profile
                        </a>
                    </li>
                    <li>
                        <a href="https://auth.mcxleague.cf/account/.settings">
                            account settings
                        </a>
                    </li>
                    <li>
                        <a href="https://auth.mcxleague.cf/account/billing">
                            manage
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>User Accounts</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="https://dash.mcxleague.cf/projects">
                            Account Moderation
                        </a>
                    </li>
                    <li>
                        <a href="https://dash.mcxleague.cf/projects/create">
                            View Accounts
                        </a>
                    </li>
                    <li>
                        <a href="https://dash.mcxleague.cf/projects/create">
                            Account Support
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>MCX League Store</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="https://dash.mcxleague.cf/producsts/">
                            Manage Products
                        </a>
                    </li>
                    <li>
                        <a href="https://dash.mcxleague.cf/products/new">
                            Create New product
                        </a>
                    </li>
                    <li>
                        <a href="https://dash.mcxleague.cf/products/purchases">
                            product purchases
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="https://ai.mcxleague.cf">
                    <i class='bx bx-mail-send'></i>
                    <span>Super Secret Button</span>
                </a>
            </li>
            <li>
                <a href="https://dash.mcxleague.cf/learning/dash">
                    <i class='bx bx-chat'></i>
                    <span>IT</span>
                </a>
            </li>
            <li>
                <a href="https://dash.mcxleague.cf/calander">
                    <i class='bx bx-calendar'></i>
                    <span>Calender</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>theam</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                MCX League Admin Dashboard
            </div>
        </div>
    </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>

</body>

</html>