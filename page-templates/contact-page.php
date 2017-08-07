<?php 


/*
  ===================================================
    Contact Page
    Template Name: Contact Template
  ===================================================
*/
  get_header();
?>

<div class="container contact-page text-center">
  <h1>Contact Us</h1>
  <article>
    <section class="contact-info">
      <p>For your convenience, we offer our services in English and Mandarin operatering in the Vancouver and greater surrounding area.</p>
      <p>To find out more about how MiiX can help you, please contact us at:</p>
    </section>
  </article>

  <div id="map">
    <iframe frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:EjA2MTc4IEVsbWJyaWRnZSBXYXksIFJpY2htb25kLCBCQyBWN0MgNE4xLCBDYW5hZGE&key=AIzaSyDU64kblvG5hFtEVS1vtr7_THB1qHqUObQ" allowfullscreen></iframe>
  </div>

  <div class="contact-list col-sm-5">
    <ul>
      <li><i class="icon-location"></i>6178 Elmbridge Way, Richmond, B.C. 
      <br><span>(by appointment only)</span></li>
      <li><i class="icon-phone"></i>604-616-0316</li>
      <li><i class="icon-mail-alt"></i>miixinteriors@gmail.com</li>
    </ul>
  </div>
  <div class="contact-form col-sm-7">
    <div class="row">
      <form>
        <div class="input-col col-md-6">
          <div class="form-group">     
            <input type="text" class="form-control" id="emailName" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="emailSubject" placeholder="Subject">
          </div>
        </div>
        <div class="text-area-col col-md-6">
          <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-default">Submit</button>
          </div>  
        </div> 
      </form>
    </div>
  </div>

</div>

<?php get_footer(); ?>
