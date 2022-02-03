<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leauge of Legends</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>


    <link rel="icon" type="image/x-icon" href="img/navbar/favicon.ico">



{{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>



<body class="bg-own-lightgray ">

    <div class="relative">
        <x-nav.navbar-pc/>
    </div>

    <div class="relative top-36">
        @yield('content')
    </div>

    <div class="bg-black-lighter mt-64  ">
        <x-footer/>
    </div>


</body>
<script src="{{ asset('js/app.js') }}"></script>

<script>


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0px 0px";
    document.getElementById("navbar").style.backgroundColor = 'rgba(0, 1, 0, 0.95)';
    document.getElementById("logo").style.fontSize = "15px";
    document.getElementById("imgLogo").style.width = "160px";
    document.getElementById("hamburger").style.width = "50px";
    document.getElementById("hamburger").style.height = "50px";
  } else {
    document.getElementById("navbar").style.padding = "8px 0px";
    document.getElementById("navbar").style.backgroundColor = 'rgba(23,23,23, 0.95)';
    document.getElementById("logo").style.fontSize = "24px";
    document.getElementById("imgLogo").style.width = "220px";
    document.getElementById("hamburger").style.width = "64px";
    document.getElementById("hamburger").style.height = "64px";
  }
}



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

    function otherToggle() {
        var x = document.getElementById("otherLinks");
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

    function userToggle() {
        var x = document.getElementById("userLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }


    function mobileToggle() {
        var x = document.getElementById("mobileToggles");
        if (x.style.display === "block") {
            x.style.display = "none";
            x.style.backgroundColor = "lightblue";
        } else {
            x.style.display = "block";
        }
    }


    function colorToggle() {
        var x = document.getElementById("colorToggles");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }


    function houseToggle() {
        var x = document.getElementById("houseToggles");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }


</script>

</html>
