<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

{{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

<div class="relative bg-own-black">
    <x-navbar-mobile/>
    <x-navbar-pc/>
</div>

    <div class="w-10/12 m-auto lg:mt-1/12  ">
        @yield('content')
    </div>

    <div class="bg-gray-old mt-1/12">
        <x-footer/>
    </div>


</body>

    <script>

    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

/////////////////////////////////////////////////////

    // Get the modal
var opacity = document.getElementById("Opacity");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  opacity.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  opacity.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == opacity) {
    opacity.style.display = "none";
  }
}


/////////////////////////////////////////////////////


function hamburgerToggle() {
    var x = document.getElementById("hamburgerLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function champToggle() {
    var x = document.getElementById("champLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function vipToggle() {
    var x = document.getElementById("vipLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}



    </script>


</html>
