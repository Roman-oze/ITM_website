 <section class="team-section">

     <div class="section-title ">
         <h2 class="text-white"> Team</h2>
         <div class="">
             <p class="modern-text">
                 Meet our dynamic team of experts, dedicated to delivering innovative solutions
                 tailored to your needs. With passion and expertise, we're here to empower your success journey.
             </p>
         </div>
     </div>

     <div class="container">

         <div class="section-heading">
             <h2>Board of Directors</h2>
             <p>Meet The Leadership Team</p>
         </div>


         <div class="row justify-content-center">
             @foreach ($boardOfDirectors as $teammember)
                 <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                     <div class="team-card">

                         <div class="team-image">
                             <img src="{{ asset($teammember->image) }}" alt="{{ $teammember->name }}">
                         </div>

                         <div class="team-content">

                             <h5>{{ $teammember->name }}</h5>

                             <span>
                                 {{ $teammember->designation }}
                             </span>

                             <button class="team-btn" data-bs-toggle="modal"
                                 data-bs-target="#facultyModal{{ $teammember->teammember_id }}">
                                 View Profile
                             </button>

                         </div>

                     </div>

                 </div>
             @endforeach
         </div>


         <div class="section-heading mt-5">
             <h2>Technical Team</h2>
             <p>Meet Our Expert Developers</p>
         </div>

         <div class="row justify-content-center">
             @foreach ($technicalTeam as $teammember)
                 <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                     <div class="team-card">

                         <div class="team-image">
                             <img src="{{ asset($teammember->image) }}" alt="{{ $teammember->name }}">
                         </div>

                         <div class="team-content">

                             <h5>{{ $teammember->name }}</h5>

                             <span>
                                 {{ $teammember->designation }}
                             </span>

                             <button class="team-btn" data-bs-toggle="modal"
                                 data-bs-target="#facultyModal{{ $teammember->teammember_id }}">
                                 View Profile
                             </button>

                         </div>

                     </div>

                 </div>
             @endforeach

             @foreach ($teammembers as $teammember)
                 <div class="modal fade team-modal" id="facultyModal{{ $teammember->teammember_id }}" tabindex="-1"
                     aria-labelledby="facultyModalLabel{{ $teammember->teammember_id }}" aria-hidden="true">

                     <div class="modal-dialog modal-lg modal-dialog-centered">

                         <div class="modal-content custom-modal">

                             <div class="modal-header border-0">

                                 <h5 class="modal-title" id="facultyModalLabel{{ $teammember->teammember_id }}">
                                     Team Member Profile
                                 </h5>

                                 <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                                 </button>

                             </div>

                             <div class="modal-body">

                                 <div class="row align-items-center">

                                     <div class="col-md-4 text-center">

                                         <div class="modal-profile-wrapper">
                                             <img src="{{ asset($teammember->image) }}" alt="{{ $teammember->name }}"
                                                 class="modal-profile-img">
                                         </div>

                                     </div>

                                     <div class="col-md-8">

                                         <h3 class="member-name">
                                             {{ $teammember->name }}
                                         </h3>

                                         <div class="member-role">
                                             {{ $teammember->designation }}
                                         </div>

                                         <div class="info-box">
                                             <i class="fa-solid fa-envelope"></i>
                                             <span>{{ $teammember->email }}</span>
                                         </div>

                                         <div class="info-box">
                                             <i class="fa-solid fa-phone"></i>
                                             <span>{{ $teammember->phone }}</span>
                                         </div>

                                         @if ($teammember->fb)
                                             <a href="{{ $teammember->fb }}" target="_blank" class="social-btn">
                                                 <i class="fa-brands fa-facebook-f"></i>
                                                 Visit Facebook
                                             </a>
                                         @endif

                                     </div>

                                 </div>

                                 @if (!empty($teammember->bio))
                                     <div class="bio-section">

                                         <h5>About</h5>

                                         <p>
                                             {{ $teammember->bio }}
                                         </p>

                                     </div>
                                 @endif

                             </div>

                         </div>

                     </div>
                 </div>
             @endforeach
         </div>
     </div>

 </section>
