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

/**
   * Slider Image Rename Massege show
*/
function imageNameCheck() {
    var renameSliderImage = document.getElementById("renameImage").innerHTML = "Rename your image. Because the image with the same name already exists in the database.";
    return false;

    // if (!email.match(emailRegex)) {
    //     document.getElementById("erroremail").innerHTML = "Email is Invalid";
    //     return false;
    // }
}

/**
   * Data Table
*/
$(document).ready(function () {
    $('#example').DataTable();
});
