 <section id="contact" class="contact ">
     <div class="container aos-init aos-animate" data-aos="fade-up">
         <div class="section-title">
             <h2>Contact</h2>
             <p>
                 Connect with our department for inquiries, support, or collaboration opportunities. We are
                 here to
                 assist with academic, administrative, or program-specific concerns.
             </p>
         </div>

         <div class="row">
             <div class="col-lg-5 d-flex align-items-stretch">
                 <div class="info">

                     <div class="address">
                         <i class="fa-solid fa-map-location-dot"></i>
                         <h4>Location:</h4>
                         <p>{{ $contact->address ?? 'No address available' }}</p>
                     </div>

                     <div class="email">
                         <i class="fa-regular fa-envelope"></i>
                         <h4>Email:</h4>
                         <p>{{ $contact->email ?? 'No email available' }}</p>
                     </div>

                     <div class="phone">
                         <i class="fa-solid fa-phone"></i>
                         <h4>Call:</h4>
                         <p>{{ $contact->phone ?? 'No phone available' }}</p>
                     </div>

                     <iframe
                         src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd"
                         style="border:0; width:100%; height:290px" allowfullscreen loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade">
                     </iframe>

                 </div>
             </div>

             <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                 @if (session('success'))
                     {
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                     }
                 @endif
                 @if (session('error'))
                     {
                     <div class="alert alert-success">
                         {{ session('error') }}
                     </div>
                     }
                 @endif

                 <form action="{{ route('notifications.store') }}" method="post" role="form" class="php-email-form">
                     @csrf
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label for="name">Your Name</label>
                             <input type="text" name="name" class="form-control" id="name" required>
                         </div>
                         <div class="form-group col-md-6">
                             <label for="email">Your Email</label>
                             <input type="email" class="form-control" name="email" id="email" required>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="subject">Subject</label>
                         <input type="text" class="form-control" name="subject" id="subject" required>
                     </div>
                     <div class="form-group">
                         <label for="message">Message</label>
                         <textarea class="form-control" name="message" rows="5" required></textarea>
                     </div>
                     <div class="my-3">
                         <div class="loading d-none">Loading...</div>
                         <div class="alert alert-danger d-none error-message"></div>
                         <div class="alert alert-success d-none sent-message">Your message has been sent.
                             Thank you!
                         </div>
                     </div>
                     <div class="text-center">
                         <button type="submit" class="btn btn-dark">
                             <i class="fa-regular fa-paper-plane fa-lg text-white"></i> Send Message
                         </button>
                     </div>
                 </form>


             </div>
         </div>
     </div>
 </section>
