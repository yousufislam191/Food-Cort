// for admin profile image submit
$("#adminImgSubmit").click(function (e) {
    e.preventDefault();

    let form_data = new FormData();
    let img = $("#adminformFile")[0].files;

    if (img.length > 0) {
        form_data.append('my_image', img[0]);
        $.ajax({
            method: "POST",
            url: "../serverSite/adminProfileSubmit.php",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (data) {
                alert(data);
                // $("#showMessage").html(data);
            }
        });
    }
    else {
        alert('Not selected any image');
    }
});

// for web logo submit
$("#webLogoSubmit").click(function (e) {
    e.preventDefault();

    let form_data = new FormData();
    let img = $("#webLogo")[0].files;

    if (img.length > 0) {
        form_data.append('web_logo', img[0]);
        $.ajax({
            method: "POST",
            url: "../serverSite/adminProfileSubmit.php",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (data) {
                alert(data);
                // $("#showMessage").html(data);
            }
        });
    }
    else {
        alert('Not selected any image');
    }
});

// for Website Name submit
$(".websiteName").click(function () {
    let websiteName = $("#websiteName").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { websiteName: websiteName },
        success: function (data) {
            alert(data);
            $(".websiteName").css("color", "green");
        }
    });
});

// for admin fb url submit
$(".facebook").click(function () {
    let fburl = $("#facebook").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { fburl: fburl },
        success: function (data) {
            $(".facebook").css("color", "green");
        }
    });
});
// for admin instagram url submit
$(".instagram").click(function () {
    let insturl = $("#instagram").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { insturl: insturl },
        success: function (data) {
            $(".instagram").css("color", "green");
        }
    });
});
// for admin linkedin url submit
$(".linkedin").click(function () {
    let linkurl = $("#linkedin").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { linkurl: linkurl },
        success: function (data) {
            $(".linkedin").css("color", "green");
        }
    });
});
// for admin twitter url submit
$(".twiter").click(function () {
    let twiturl = $("#twiter").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { twiturl: twiturl },
        success: function (data) {
            $(".twiter").css("color", "green");
        }
    });
});
// for admin skype url submit
$(".skype").click(function () {
    let skyurl = $("#skype").val();

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { skyurl: skyurl },
        success: function (data) {
            $(".skype").css("color", "green");
        }
    });
});


// for product category name submit
$("#addCategoryInputField").click(function () {
    let addTableName = $("#categoryInputField").val();
    // alert(skyurl);

    $.ajax({
        method: "POST",
        url: "../serverSite/adminProfileSubmit.php",
        data: { addTableName: addTableName },
        success: function (data) {
            // alert(data);
            $("#showDatabaseMessage").html(data);
        }
    });
});