
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header bg-success">
            <div class="header__container">
                <img src="Images/Hancie-Phago.jpg" alt="" class="header__img">

                <a href="Home" class="header__logo text-light">Welcome: <?php echo $_SESSION['name'];?></a>
    
               
    
                <div class="header__toggle">
                    <i class='bx bx-menu bx-md' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name"><?php echo $_SESSION['name'];?></span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <a href="Home" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                    <a href="Profile" class="nav__dropdown-item"><i class="bi bi-person-circle nav__icon"></i>Accounts</a>
                                    <a href="User_Password" class="nav__dropdown-item"><i class="bi bi-shield-lock-fill nav__icon"></i>Password</a>
                                        
                                    </div>
                                </div>
                            </div>

                            <a href="Message_Inbox" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>
                            

                            <!-- Contact Management Nav -->

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Contacts</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                    <a href="Contact_Management" class="nav__dropdown-item"><i class="bx bxs-contact nav__icon"></i>Store Contacts</a>
                                    <a href="Search_Contacts" class="nav__dropdown-item"><i class="bx bx-search-alt-2 nav__icon"></i>Search Contacts</a>
                                    <a href="Manage_Contacts" class="nav__dropdown-item"><i class="bx bx-edit nav__icon"></i>Manage Contacts</a>
                                    
                                        
                                    </div>
                                </div>

                        </div>
    
                       
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-folder nav__icon' ></i>
                                    <span class="nav__name">Tools</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        
                                        <a href="Activity_Log" class="nav__dropdown-item"><i class="bi bi-arrow-left-right nav__icon"></i>Activity Logs</a>
                                        <a href="Application_Dashboard" class="nav__dropdown-item"><i class="bi bi-window nav__icon"></i>Applications</a>
                                        <a href="NH_Online_Dictionary" class="nav__dropdown-item"><i class="bi bi-book nav__icon"></i>NH Online Dictionary</a>
                                        
                                    </div>
                                </div>

                            </div>




                          <!-- Services Section -->

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-street-view nav__icon' ></i>
                                    <span class="nav__name">Services</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="Budget_Dashboard" class="nav__dropdown-item"><i class='bx bx-credit-card nav__icon' ></i>Personal Budget</a>
                                        <a href="Events_Management" class="nav__dropdown-item"><i class="bi bi-calendar-event nav__icon"></i>Events Management</a>
                                        <a href="Project_Management" class="nav__dropdown-item"><i class="bi bi-kanban-fill nav__icon"></i>Projects Management</a>
                                        
                                    </div>
                                </div>

                                

                            </div>
                           


                           
                            <!-- Personal Notes Nav -->

                            <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-note nav__icon'></i>
                                    <span class="nav__name">Personal Notes</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="MyNote" class="nav__dropdown-item"><i class='bx bx-notepad nav__icon' ></i>Store Notes</a>
                                        <a href="Manage_Notes" class="nav__dropdown-item"><i class="bx bx-edit nav__icon"></i>Manage Notes</a>
                                  </div>  
                                    </div>
                                </div>



                            <!-- Personal Password Nav -->

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                <i class='bx bx-lock-alt bx-sm nav__icon'></i>
                                    <span class="nav__name">Personal Passwords</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="MyPasswords" class="nav__dropdown-item"><i class='bi bi-shield-lock-fill nav__icon' ></i>Store Passwords</a>
                                        <a href="Manage_Passwords" class="nav__dropdown-item"><i class="bx bx-edit nav__icon"></i>Manage Passwords</a>
                                  </div>  
                                    </div>
                                </div>

                            

                            <a href="Logout" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i> 
                    <span class="nav__name">Log Out</span>
                </a>
                        </div>
                    </div>
                </div>

                
            </nav>
        </div>


        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>