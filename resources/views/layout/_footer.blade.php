{{-- <footer>


<div class="row footer_page mt-5">

<div class="left">
    <img src="{{ asset('frontend/image/itmclub.png')}}" class="img-fluid" >

    <a class="p-1 navbar_text" href="https://www.facebook.com/diu.itm"><i class="fa-brands fa-facebook fa-2x text-dark"></i></a>
    <a class="text-dark p-1" href="https://www.facebook.com/itmclub.daffodilvarsity"><i class="fa-brands fa-linkedin fa-2x text-dark"></i></a>
    <a class="text-dark p-1" href="mailto:itmoffice@daffodilvarsity.edu.bd"><i class="fa-solid fa-envelope fa-2x text-dark"></i></a>
    <a class="text-dark p-1" href="tel:01847-140039"><i class="fa-solid fa-square-phone fa-2x text-dark"></i></a>

  </div>

  <div class="main-left ">
    <h2 class="ftco-heading-2">Get in Touch</h2>
    <p><a target="_blank" class="text-dark " href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Home</a></p>
                               <p><a target="_blank" class="text-dark " href="https://daffodilvarsity.edu.bd/department/itm/local-tuition">Tuition Fee</a></p>
                               <p><a target="_blank" class="text-dark " href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Download</a></p>
                               <p><a target="_blank" class="text-dark " href="#">About</a></p>
                               <p><a target="_blank" class="text-dark " href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Service</a></p>
  </div>

  <div class="main-right">
    <h2 class="ftco-heading-2">Support</h2>
    <p>FAQ</p>
    <p>How it</p>
    <p>Features</p>
    <p>Contact</p>
    <p>Reporting</p><br>
  </div>

  <div class="right text-center">
    <h2 class="ftco-heading-2">Message</h2>
    <form action="{{route('viwer.store')}}" method="POST" >
        @csrf
        <div class="wrap-input200 validate-input" >
            <input class="input100 " type="text" name="message" placeholder="message">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-message" aria-hidden="true"></i>
            </span>
        </div>
          <div id="gallery" class=" text-center">
            <button type="submit" class="btn btn-success ">
                <i class="fas fa-paper-plane"></i> Send
            </button>
        </div>
      </form>
</div>
<div class="text-center small p-2 text-muted footer-dark">
    Designed &amp; Developed by <a href="https://github.com/Roman-oze/resume" class="text-reset font-weight-bold" target="_blank" rel="noopener">RomanOze</a>
</div>
</div>
</footer> --}}

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
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>( I T M )</h3>
            <p>
              AB-4 Building (6th Floor), <br>Khagan,Ashulia
              <br>Dhaka. <br><br><strong>Phone:</strong> +01847140039
              55<br>
              <strong>Email:</strong>  itmoffice@daffodilvarsity.edu.bd<br>
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
                <i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">Contact Us</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="https://daffodilvarsity.edu.bd/department/itm/local-tuition">Tuition fees</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Download Course</a>
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
              <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="google-plus"><i class="fa-solid fa-envelope"></i></a>
              <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
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


  
{{-- <footer id="footer">
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
    </footer> --}}
