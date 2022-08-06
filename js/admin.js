document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
});

/**
   * checkbox
*/
$('#check').change(offerCheckking);
function offerCheckking() {
    if ($('#check').is(":checked")) {
        $("#offer").show();
    } else {
        $("#offer").hide();
    }
}
$('#ucheck').change(UpdateofferCheckking);
function UpdateofferCheckking() {
    if ($('#ucheck').is(":checked")) {
        $("#uoffer").show();
    } else {
        $("#uoffer").hide();
    }
}

/**
   * displayimage slider from selected file
*/
function getImage() {
    let uploadButton = document.getElementById('formFile');
    let chosenImg = document.querySelector('.sliderimg');

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        console.log(uploadButton.files[0]);
        reader.onload = () => {
            chosenImg.setAttribute("src", reader.result);
        }
    }
}

function UpdategetImage() {
    let uploadButton = document.getElementById('UpdateformFile');
    let chosenImg = document.querySelector('.Updatesliderimg');

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        console.log(uploadButton.files[0]);
        reader.onload = () => {
            chosenImg.setAttribute("src", reader.result);
        }
    }
}

/**
   * get product picture
*/
function getCategoryImage() {
    let uploadButton = document.getElementById('categoryformFile');
    let chosenImg = document.querySelector('.categoryimg');

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        console.log(uploadButton.files[0]);
        reader.onload = () => {
            chosenImg.setAttribute("src", reader.result);
        }
    }
}

/**
   * get admin profile pic
*/
function getAdminImage() {
    let uploadButton = document.getElementById('adminformFile');
    let chosenImg = document.querySelector('.adminProfileimg');

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        console.log(uploadButton.files[0]);
        reader.onload = () => {
            chosenImg.setAttribute("src", reader.result);
        }
    }
}
/**
   * get website logo
*/
function getWebLogo() {
    let uploadlogoButton = document.getElementById('webLogo');
    let chosenlogo = document.querySelector('.webLogoimpot');

    uploadlogoButton.onchange = () => {
        let logoreader = new FileReader();
        logoreader.readAsDataURL(uploadButton.files[0]);
        console.log(uploadlogoButton.files[0]);
        logoreader.onload = () => {
            chosenlogo.setAttribute("src", logoreader.result);
        }
    }
}
/**
   * show updated data in input field
*/
$(".editbtn").click(e => {

    let textvalues = displayData(e);
    let destinationImgPath = "../";
    console.log(textvalues);

    var UpdateShowImg = document.getElementById('UpdateShowImg');
    UpdateShowImg.src = destinationImgPath.concat(textvalues[3]);

    let id = $("input[name*='UpdatesliderId']");
    let img = $("input[name*='Updateselectimg']");
    let title = $("input[name*='Updatetitle']");
    let subtitle = $("input[name*='UpdatesubTitle']");
    let description = $("textarea[name*='Updatedescription']");
    let offer_price = $("input[name*='UpdateofferPrice']");
    let offer_name = $("input[name*='UpdateofferName']");

    id.val(textvalues[0]);
    title.val(textvalues[1]);
    subtitle.val(textvalues[2]);
    img.val(textvalues[3]);
    offer_price.val(textvalues[5]);
    offer_name.val(textvalues[6]);
    description.val(textvalues[7]);
});

function displayData(e) {
    let id = 0;
    const td = $("tbody tr td");
    let textvalues = [];

    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}

/**
   * show updated button when clicked
*/
$('.editbtn').click(function () {
    $("#submitSlider").hide();
    $("#updateSlider").show();
});

/**
   * Data Table
*/
$(document).ready(function () {
    $('#example').DataTable();
});

/**
   * Show admin image from databse in profile page
*/
function showAdminProfile(adminImgPath) {
    console.log(adminImgPath);
}



/**
   * add dynamicly input field
*/
// $(document).ready(function () {
//     var i = 1;
//     $('#addCategoryInputField').click(function () {
//         if (i <= 7) {
//             // $('#dynamic_field').append('<div id="row' + i + '"><label" for="member_' + i + '">Member ' + i + '</label><input type="text" name="member_' + i + '" value=""><button type="button" class="btn_remove" name="remove" id="' + i + '">X</button></div>')
//             $('#dynamic_field').append('<div class="d-flex align-middle gap-3 mb-3 inputfield ' + i + '"><input type="text" class="form-control" id="categirybnt ' + i + '" name="categirybnt ' + i + '" placeholder="add category name" value=""><span class="material-symbols-outlined donebtn categoryadd" id="' + i + '" style="cursor: pointer;">done</span><span class="material-symbols-outlined donebtn categoryremove" id="' + i + '" style="cursor: pointer;">disabled_by_default</span></div>')





//             i++;
//         }
//     });
//     $(document).on('click', '.categoryremove', function () {
//         // $(document).on('click', '.btn_remove', function () {
//         var button_id = $(this).attr("id");
//         i--;
//         $('#.inputfield' + button_id + '').remove();
//         // $('#row' + button_id + '').remove();
//     });
// });