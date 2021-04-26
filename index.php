
  <?php get_header()?>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">

          <!--chamando widget-wp -->
        <?php
          if(is_active_sidebar('banner')){
            dynamic_sidebar('banner');
          }
        ?>

        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="aboutme" class="section descripton">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center"> 
      <?php
        if(is_active_sidebar('about-me')){
          dynamic_sidebar('about-me');
        }
      ?>
    </div>
    <div class="col-md-10 col-md-offset-1 space">
      <?php 
      if(is_active_sidebar('abolt-me2')){
        dynamic_sidebar('abolt-me2');
      }
      ?>
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- portfolio section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-1.jpg" class="work-box"> <img src="images/work-1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="/images/work-2.jpg" class="work-box"> <img src="/images/work-2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-3.jpg" class="work-box"> <img src="/images/work-3.jpg alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Graphic Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- portfolio section --> 
<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
          
        <?php 

          if(is_active_sidebar('hire-me')){
            dynamic_sidebar('hire-me');
          }
       ?>
          
    </div>
  </div>

  <!--contact form end--> 

</section>
<!-- hire me section --> 



<section id="contact" class="section contact">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <div class="col-md-6 col-md-offset-3 conForm">
        <div id="message">
          <?php 
            if(is_active_sidebar('Contact')){
              dynamic_sidebar('Contact');
            }
          ?>

    </div>
    </div>

    </div>
  </div>
</section>
<?php get_footer()?>
