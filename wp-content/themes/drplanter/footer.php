<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drplanter
 */

?>

	</div><!-- #content -->

<div id="contact-home-section">
      <div class="container">
        <h2>Reach out!</h2>
        <p><a href="contact"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Contact the Dr.!</a></p>
      </div>
</div>

<footer>
    <div class="container">
    <ul id="accordion-footer">
      <li><img class="logo_footer" src="<?php echo get_template_directory_uri().'/assets/img/FOOTER-LOGO.png';?>" alt="Dr. Planter"></li>
      <li>
        <h5 class="d-lg-none"><a href="#drplanter-footer" data-toggle="collapse">Dr. Planter</a></h5>
        <h5 class="d-none d-lg-block">Dr. Planter</h5>
        <ul id="drplanter-footer" class="collapse d-lg-block" data-parent="#accordion-footer">
          <li><a href="about">About Dr. Planter</a></li>
          <li><a href="dr-notes">Dr. "Notes"</a></li>
          <li><a href="faq">Faq</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </li>
      <li>
        <h5 class="d-lg-none"><a href="#services-footer" data-toggle="collapse">Services</a></h5>
        <h5 class="d-none d-lg-block">Services</h5>
        <ul id="services-footer" class="collapse d-lg-block" data-parent="#accordion-footer">
          <li><a href="plant-sales">Plant Sales</a></li>
          <li><a href="plant-installation">Plant Installation</a></li>
          <li><a href="plant-maintenance">Plant Maintenance</a></li>
        </ul>
      </li>
      <li>
        <h5 class="d-lg-none"><a href="#recources-footer" data-toggle="collapse">Gallery</a></h5>
        <h5 class="d-none d-lg-block">Gallery</h5>
        <ul id="recources-footer" class="collapse d-lg-block" data-parent="#accordion-footer">
          <li><a href="gallery">Fresh Ideas</a></li>
        </ul>
      </li>
    </ul>
    </div>

    <div class="last-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left pb-3 pb-md-0"><span class="d-none d-md-">FOLLOW US</span> <a target="_blank" href="https://www.facebook.com/doctorplanter/" title="Facebook">
                <div class="social-icon facebook-icon"></div></a> 
      <a target="_blank" href="https://www.instagram.com/doctorplanter" title="Instagram">
                <div class="social-icon instagram-icon"></div></a></div>
          <div class="col-sm-6 text-center"><i class="fa fa-map-marker" aria-hidden="true"></i> 6964 NW 50TH ST, MIAMI FLORIDA 33166 | <i class="fa fa-phone" aria-hidden="true"></i> 305.922.3813 <br><i class="fa fa-clock-o" aria-hidden="true"></i> M-F 9:00AM - 4:00PM | SAT. 9:00AM - 1:00PM</div>
        </div>
      </div>
    </div>
    <small class="copyright">
      &copy; 2019 All Rights Reserved. Dr. Planter | <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
    </small>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
