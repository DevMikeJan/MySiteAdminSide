$(document).ready(function(){
    var isSideNavToggle = 1;
    var isDashboardToggle = 1;
    var isUserToggle = 1;
    var isAssetToggle = 1;

    $("#flex1_item").click(function(){
      if (isSideNavToggle == 1) {
        hideAndShow(isSideNavToggle);
        dashBoardToggle(0);
        userToggle(0);
        assetToggle(0);
        
      }
      else if (isSideNavToggle == 0) {
        hideAndShow(isSideNavToggle);
      }
      
    });
    
    //dashboard toggle
    $("#side_nav_item1_toggle").click(function(){
      if (isDashboardToggle == 1) {
        dashBoardToggle(isDashboardToggle);
      }
      else if (isDashboardToggle == 0) {
        dashBoardToggle(isDashboardToggle);
      }
    });
   

    $(".dashBoard_dropdown").mouseleave(function(){
      if (isDashboardToggle == 0) {
          dashBoardToggle(isDashboardToggle);
      }
    });

  

     //end dashboard toggle

    //User toggle
    $("#side_nav_item2_toggle").click(function(){
      if (isUserToggle == 1) {
        userToggle(isUserToggle);
      }
      else if (isUserToggle == 0) {
        userToggle(isUserToggle);
      }
    });

    $(".user_dropdown").mouseleave(function(){
      if (isUserToggle == 0) {
          userToggle(isUserToggle);
      }
    });
    //end User toggle

     //Asset toggle
     $("#side_nav_item3_toggle").click(function(){
      if (isAssetToggle == 1) {
        assetToggle(isAssetToggle);
      }
      else if (isAssetToggle == 0) {
        assetToggle(isAssetToggle);
      }
    });

    $("#assets_dropdown").mouseleave(function(){
      if (isAssetToggle == 0) {
        assetToggle(isAssetToggle);
      }
    });
    //end Asset toggle

    //toggle dashboard icon
    $("#Dashboard_icon").click(function(){
      if (isSideNavToggle == 1) {
        hideAndShow(isSideNavToggle)
        dashBoardToggle(0);
      }
      else if (isSideNavToggle == 0) {
        hideAndShow(isSideNavToggle)
        dashBoardToggle(1);
      }
    });

    //end toggle dashboard icon

    //toggle user icon
    $("#User_icon").click(function(){
      if (isSideNavToggle == 1) {
        hideAndShow(isSideNavToggle)
        userToggle(0);
        isSideNavToggle = 0;
      }
      else if (isSideNavToggle == 0) {
        hideAndShow(isSideNavToggle)
        userToggle(1);
        isSideNavToggle = 1;
      }
    });
    //end toggle user icon

      //toggle asset icon
      $("#Assets_icon").click(function(){
        if (isSideNavToggle == 1) {
          hideAndShow(isSideNavToggle)
          assetToggle(0);
          isSideNavToggle = 0;
        }
        else if (isSideNavToggle == 0) {
          hideAndShow(isSideNavToggle)
          assetToggle(1);
          isSideNavToggle = 1;
        }
      });
      //end toggle asset icon

    //side nav toggle function
    function hideAndShow(isToggle){
      if (isToggle == 1) {
        $(".main_nav").css("display", "grid");
        $(".main_nav").css("grid-template-columns", "3% 97%");
        $(".flex1_item").css("right", "10px");
        $(".flex_item1_wrapper").css("width", "3%");
        $(".side_nav").css("width", "0");
        $(".ham_line_1").css("transform", "translate(0,0) rotate(0)");
        $(".ham_line_2").css("transform", "translate(0,0)");
        $(".ham_line_3").css("transform", "translate(0px,0px) rotate(0)");
        $(".flex_item1_Icon_wrapper").css("width", "3%");
        $(".top_nav_bottom_items").css("grid-template-columns", "70% 3% 3% 20%");
        isSideNavToggle = 0;
        
      }
      else if (isToggle == 0) {
        $(".main_nav").css("display", "grid");
        $(".main_nav").css("grid-template-columns", "10% 90%");
        $(".flex1_item").css("right", "1px");
        $(".flex_item1_wrapper").css("width", "10%");
        $(".side_nav").css("width", "100%");
        $(".ham_line_1").css("transform", "translate(0px,7px) rotate(-45deg)");
        $(".ham_line_2").css("transform", "translate(-50px,0)");
        $(".ham_line_3").css("transform", "translate(0px,-7px) rotate(45deg)");
        $(".flex_item1_Icon_wrapper").css("width", "0");
        $(".top_nav_bottom_items").css("grid-template-columns", "65% 3% 3% 20%");
        isSideNavToggle = 1;
      }
    }
     //end of side nav toggle function

     function dashBoardToggle(isToggle) {
      if (isToggle == 1) {
        $(".dashBoard_dropdown").css("height", "auto");
        isDashboardToggle = 0;
      }
      else if (isToggle == 0) {
        $(".dashBoard_dropdown").css("height", "0");
        isDashboardToggle = 1;
      }
     }

     function userToggle(isToggle) {
      if (isToggle == 1) {
        $(".user_dropdown").css("height", "auto");
        isUserToggle= 0;
      }
      else if (isToggle == 0) {
        $(".user_dropdown").css("height", "0");
        isUserToggle= 1;
      }
     }

     function assetToggle(isToggle) {
      if (isToggle == 1) {
        $(".assets_dropdown").css("height", "auto");
        isAssetToggle= 0;
      }
      else if (isToggle == 0) {
        $(".assets_dropdown").css("height", "0");
        isAssetToggle= 1;
      }
     }
   
});

