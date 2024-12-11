{{-- <!-- Navigation Bar -->
    <!-- Logo -->
    <a class="navbar-brand" href="#">
        <img src="{{asset('frontend/image/clubimage.png')}}" class="logo" alt="Club Logo">
    </a>

    <!-- Navbar Toggle for Mobile View -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Home Link -->
            <li class="nav-item active">
                <a class="nav-link hover-effect" href="{{route('home')}}">ITM Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- About Us Link -->
            <li class="nav-item ">
                <a class="nav-link hover-effect" href="{{route('club')}}">About Us</a>
            </li>

            <!-- Committee Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect" href="{{route('committee')}}">Committee</a>
            </li>

            <!-- Membership Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect" href="{{route('membership')}}">Membership</a>
            </li>

            <!-- Events Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect" href="{{route('club.event')}}">Events</a>
            </li>

            <!-- Contact Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect" href="#contact">Contact</a>
            </li>

            <!-- Registration Link -->
            <li class="nav-item p-2">
                <a href="{{route('student.create')}}" class="btn btn-primary btn-rounded">Registration</a>
            </li>
        </ul>
    </div>


<style>
    /* Navbar Styling */
    .navbar {
        background-color: #f8f9fa; /* Light background color */
        border-bottom: 1px solid #ddd; /* Border at the bottom for separation */
        transition: background-color 0.3s ease-in-out; /* Smooth transition for background */
    }

    .navbar:hover {
        background-color: #e9ecef; /* Slightly darker background on hover */
    }

    .logo {
        max-height: 50px; /* Ensure the logo doesn't grow too large */
    }

    /* Navbar Item Styling */
    .nav-item {
        padding: 10px 15px; /* Add padding for spacing */
    }

    .nav-link {
        font-size: 16px;
        color: #495057; /* Dark text color */
        font-weight: 500; /* Slightly bold font for readability */
        transition: color 0.3s ease, border-color 0.3s ease; /* Smooth transitions */
    }

    .nav-link:hover {
        color: #007bff; /* Change text color to blue */
        border-color: #007bff; /* Add underline effect with border */
    }

    .nav-link.border-bottom:hover {
        border-bottom: 2px solid #007bff; /* Adding a bottom border on hover */
    }

    .nav-item.active .nav-link {
        color: #007bff; /* Highlight active menu item */
        border-bottom: 2px solid #007bff; /* Underline active item */
    }

    /* Button Styling for Registration */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 8px 20px; /* Button padding */
        font-size: 16px; /* Font size for button */
        border-radius: 30px; /* Rounded corners for the button */
        font-weight: 600;
        transition: background-color 0.3s, transform 0.3s; /* Smooth hover effect */
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
        transform: translateY(-3px); /* Lift effect on hover */
    }

    /* Navbar Toggle Button Styling */
    .navbar-toggler-icon {
        background-color: #007bff; /* Custom toggle icon color */
    }

    @media (max-width: 768px) {
        .navbar-nav {
            text-align: center; /* Center text on smaller screens */
        }

        .nav-link {
            font-size: 14px; /* Adjust font size on small screens */
        }

        .navbar-toggler {
            background-color: #007bff; /* Custom background color for toggle */
        }
    }

    /* Hover Effect for Navbar Links */
    .hover-effect:hover {
        color: #007bff;
    }

</style> --}}
<!-- Navigation Bar -->
    <!-- Logo -->
    <a class="navbar-brand" href="#">
        <img src="{{asset('frontend/image/clubimage.png')}}" class="logo" alt="Club Logo">
    </a>

    <!-- Navbar Toggle for Mobile View -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Home Link -->
            <li class="nav-item active">
                <a class="nav-link  hover-effect  text-white" href="{{route('home')}}">ITM Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- About Us Link -->
            <li class="nav-item ">
                <a class="nav-link hover-effect  text-white" href="{{route('club')}}">About Us</a>
            </li>

            <!-- Committee Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect  text-white" href="{{route('committee')}}">Committee</a>
            </li>

            <!-- Membership Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect  text-white" href="{{route('membership')}}">Membership</a>
            </li>

            <!-- Events Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect  text-white" href="{{route('club.event')}}">Events</a>
            </li>

            <!-- Contact Link -->
            <li class="nav-item">
                <a class="nav-link hover-effect text-white" href="#contact">Contact</a>
            </li>

            <!-- Registration Link -->
            <li class="nav-item p-2">
                <a href="{{route('student.create')}}" class="btn btn-primary link">Registration</a>
            </li>
        </ul>
    </div>


<style>
    /* Navbar Styling */
    .navbar {
        background-color: #f8f9fa; /* Light background color */
        border-bottom: 1px solid #ddd; /* Border at the bottom for separation */
        transition: background-color 0.3s ease-in-out; /* Smooth transition for background */
    }


    .logo {
        max-height: 50px; /* Ensure the logo doesn't grow too large */
    }

    /* Navbar Item Styling */
    .nav-item {
        padding: 10px 15px; /* Add padding for spacing */
    }

    .nav-link {
        font-size: 16px;
        color: #495057; /* Dark text color */
        font-weight: 500; /* Slightly bold font for readability */
        transition: color 0.3s ease, border-color 0.3s ease; /* Smooth transitions */
        padding: 8px 15px;
        border: 1px solid transparent; /* Initial border as transparent */
        border-radius: 25px; /* Rounded corners for nav items */
    }

    /* Hover effect: White border and text */
    .nav-link:hover {
        color: #fff; /* White text on hover */
        background-color: transparent; /* Transparent background */
        border: 1px solid #fff; /* White border on hover */
    }

    .nav-item.active .nav-link {
        color: #007bff; /* Highlight active menu item */
        border-bottom: 2px solid #007bff; /* Underline active item */
    }

    /* Button Styling for Registration */
    .btn-primary {
        padding: 8px 20px; /* Button padding */
        font-size: 16px; /* Font size for button */
        border-radius: 30px; /* Rounded corners for the button */
        font-weight: 600;
        text-decoration: none;
        border: 3px solid rgb(233, 174, 10);
        color: #f8f9fa;
        border-radius: 24px;
        background-image:linear-gradient(rgba(13, 148, 153, 0.589),#0f2469fd)     ;
        transition: background-color 0.3s, transform 0.3s; /* Smooth hover effect */
    }

    .btn-primary:hover {

        transform: translateY(-3px); /* Lift effect on hover */
        border: 3px solid rgb(253, 253, 253);
        background-image:linear-gradient(rgba(13, 148, 153, 0.589),#0f2469fd)     ;
        color:rgb(233, 174, 10);
        font-weight: bold;
    }

    /* Navbar Toggle Button Styling */
 

    @media (max-width: 768px) {
        .navbar-nav {
            text-align: center; /* Center text on smaller screens */
        }

        .nav-link {
            font-size: 14px; /* Adjust font size on small screens */
        }

        .navbar-toggler {
            background-color: #ebeff5; /* Custom background color for toggle */
        }
    }

    /* Hover Effect for Navbar Links */
    .hover-effect:hover {
        color: #fff;
        background-color: transparent;
        border: 1px solid #fff; /* White border and text color on hover */
    }

</style>
