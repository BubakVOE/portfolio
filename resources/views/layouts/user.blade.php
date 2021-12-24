<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

{{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

<div class="relative bg-black-lighter">

    <x-nav.navbar-mobile/>
    <x-nav.navbar-pc/>
</div>

    <div class=" bg-white relative">
        @yield('content')
    </div>

    <div class="bg-gray-old">
        <x-footer/>
    </div>


</body>
<script src="{{ asset('js/app.js') }}"></script>

<script>
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
