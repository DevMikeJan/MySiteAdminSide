<nav class = "main_nav">
    <!--Grid1-->
    <div class = "flex_item1">
        <div class = "flex_item1_wrapper">
            <div class = "ham_wrapper">
                <div class = "flex1_item" id = "flex1_item">
                    <div class = "ham ham_line_1"></div>
                    <div class = "ham ham_line_2"></div>
                    <div class = "ham ham_line_3"></div>
                </div>
            </div>
            
            <div class = "side_nav" id = "side_nav">
                <div class = "side_nav_item1" >
                    <span id = "side_nav_item1_toggle">DahshBoard</span>
                    <div class = "dashBoard_dropdown" id = "dashBoard_dropdown">
                        <ul>
                            <li>
                                <a href="<?php echo URLROOT . '/';?>">Dashboard</a>
                            </li>
                            <li>
                                <a href="">Downloads</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class = "side_nav_item2">
                    <span id = "side_nav_item2_toggle">Users</span>
                    <div class = "user_dropdown" id = "user_dropdown">
                        <ul>
                            <li>
                                <a href="">Add User</a>
                            </li>
                            <li>
                                <a href="">All Users</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class = "side_nav_item3">
                    <span id = "side_nav_item3_toggle">Assets</span>
                    <div class = "assets_dropdown" id = "assets_dropdown">
                        <ul>
                            <li>
                                <a href="<?php echo URLROOT . '/Assets';?>">Show Assets</a>
                            </li>
                            <li>
                                <a href="<?php echo URLROOT . '/UploadAssets';?>">Upload Assets</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Icons Section-->
         </div>
            <div class = "flex_item1_Icon_wrapper" id = "flex_item1_Icon_wrapper">
                <div class = "Dashboard_icon_wrapper">
                    <span class="Dashboard_icon" id = "Dashboard_icon">
                        <img src="<?php echo URLROOT . '/public/icons/';?>Dashboard.png" alt="">
                    </span>
                </div>

                <div class = "User_icon_wrapper">
                    <span class="User_icon" id = "User_icon">
                        <img src="<?php echo URLROOT . '/public/icons/';?>user.png" alt="">
                    </span>
                </div>

                <div class = "Assets_icon_wrapper">
                    <span class="Assets_icon" id = "Assets_icon">
                        <img src="<?php echo URLROOT . '/public/icons/';?>Assets.png" alt="">
                    </span>
                </div>
               
            </div>
        </div>
    <!--End Of Icons Section-->

        <!--End of Grid1-->

    <!--Grid2-->
    <div class = "flex_item2">
        <div class = "top_nav">
            <div class = "flex_item2_wrapper">
                <div class = "top_nav_top_items"></div>
                <div class = "top_nav_bottom_items">
                    <div class = "white_space">
                    </div>
                    <div class = "notification_toggle">
                        <span>
                            <img src="<?php echo URLROOT . '/public/icons/';?>Notify.png" alt="">
                        </span>
                    </div>
                    <div class = "settings_toggle">
                        <span>
                            <img src="<?php echo URLROOT . '/public/icons/';?>Settings.png" alt="">
                        </span>
                    </div>
                    <div class = "user_loggedin_toggle">
                        <span>
                            <img src="<?php echo URLROOT . '/public/icons/';?>Profile.png" alt="">
                            Sign-in 
                        </span>
                    </div>
                </div>
                
           </div>
        </div>
       
       
       
    <!--End of Grid2-->