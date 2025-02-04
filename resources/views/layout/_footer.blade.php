
<footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>
                Stay updated, join our newsletter for exclusive insights and
                offers.
              </p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-top">
        <div class="container">
          <div class="row">
            @foreach ($footers as $footer)
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>( I T M )</h3>
              <p>
                {{ $footer->address }} <br><br><strong>Phone:</strong>
                {{ $footer->phone }}
                <br>
                <strong>Email:</strong>{{ $footer->email }}<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Services</a>

                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="{{route('about')}}" target="_blank">Contact Us</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="{{ $footer->tuition_fees }}">Tuition fees</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="{{ $footer->course_download  }}" target="_blank">Download Course</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Reporting</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Feature</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>

              <img src="{{ asset('frontend/image/itmclub.png')}}" class="img-fluid" >

              <div class="social-links mt-3">
                <a href="{{ $footer->facebook }}" class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $footer->instragram }}" class="google-plus" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                <a href="{{ $footer->linkedin }}" class="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          © Copyright <strong><span>Roman Oze</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Maintained By
          <a href="https://github.com/Roman-oze/resume">Roman Oze</a>
        </div>
      </div>
    </footer>

