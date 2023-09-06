$(document).ready(function(){

    //validation
    //adding asset img
    $(".asset_file_img").change(function(){
        var imgPath = $(this).val();
        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

        if(ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg"){
            if(typeof(FileReader) != "undefined"){
                var image_holder = $(".asset_Img_Prev");
                image_holder.empty();

                var reader = new FileReader();
                reader.onload = function(e){

                    $("<img />", {
                        "src": e.target.result,
                        "class": "actl_asset_img_src"
                    }).appendTo(image_holder);

                    $(".actl_asset_img_src_ph").css("display","none");
                    $(".actl_asset_img_src").css("display","block");
                }

                reader.readAsDataURL($(this)[0].files[0]);
            }
            else {
                alert("This browser does not support FileReader.");
            }
        }
        else {
            alert("Pls select only images");
        }


    });
    //end of adding  asset img


    $("#actl_asset_img_src_ph, #actl_asset_img_src").click(function(){
        $("#asset_file_img").trigger('click');
    });

    $(".actl_asset_img_src").click(function(){
        $("#asset_file_img").trigger('click');
    });




    //toggle close button
    $(".close_add_product").click(function(){
        if(isHidden == 0){
            add_button.show();
            $(this).hide();
            addProductsForm.css({"opacity" : "0", "transform" : "translateY(-10000%)"});
            isHidden = 1;
        }
    });

    //select image
    $(".pr_image_input").change(function(){
        var imgPath = $(this).val();

        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

        if(ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg"){

            if(typeof(FileReader) != "undefined"){

                var image_holder = $(".actual_image_preview_wrapper");
                var preview_default = $(".image_preview");
                image_holder.empty();

                var reader = new FileReader();

                reader.onload = function(e){
                    $("<img />", {
                        "src": e.target.result,
                        "class": "actual_image_preview_src"
                    }).appendTo(image_holder);

                }
                image_holder.show();
                preview_default.hide();
                reader.readAsDataURL($(this)[0].files[0]);
            }
            else {
                alert("This browser does not support FileReader.");
            }
        }
        else {
            alert("Pls select only images");
        }
    });

    //submit upload button
    $("#uploadAssets").submit(function(e){
        e.preventDefault();

        var upload_link = $("#uploadAssetsLink").val();

        var assets_file_rar = $("#asset_file").prop("files")[0];
        var assets_img = $("#asset_file_img").prop("files")[0];
        var assets_name = $("#asset_name").val();
        var asset_desc = $("#asset_desc").val();


        var new_form_data = new FormData();
        new_form_data.append("asset_file_rar", assets_file_rar);
        new_form_data.append("asset_img", assets_img);
        new_form_data.append("asset_name", assets_name);
        new_form_data.append("asset_desc", asset_desc);

        $.ajax({
            url: upload_link,
            method:'POST',
            data:new_form_data,
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
              $('#process_msg').html(data);
            }
          });
    });

     //End Of submit upload button
});