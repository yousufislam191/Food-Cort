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