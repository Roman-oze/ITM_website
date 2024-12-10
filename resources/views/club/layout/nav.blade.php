<a class="navbar-brand" href="#">
    <img src="{{asset('frontend/image/clubimage.png')}}" class="logo" alt="Club Logo">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="text-muted border-bottom" href="{{route('home')}}">ITM Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="" href="{{route('club')}}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="" href="{{route('committee')}}">Committee</a>
        </li>
        <li class="nav-item">
            <a class="" href="{{route('membership')}}">Membership</a>
        </li>
        <li class="nav-item">
            {{-- <a class="" href="{{route('events')}}">Upcoming Events</a> --}}
            <a class="" href="{{route('upcoming')}}">Upcoming Events</a>
        </li>
        <li class="nav-item">
            <a class="" href="#contact">Contact</a>
        </li>
        <li class="nav-item p-2">
          <li><a href="{{route('student.create')}}" class="link">Registration</a></li>

        </li>
    </ul>
</div>


