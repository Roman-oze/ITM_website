<footer>


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
</footer>
