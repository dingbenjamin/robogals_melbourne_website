<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <cms:embed 'head.inc' />
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <cms:embed 'nav.inc' />
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" id="home" data-background="assets/images/main_bg_faded.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="mb-40 titan-title-size-4 robogals-blue">inspiring female engineers</div>
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-shield"></span></div>
                  <h3 class="features-title font-alt">Integrity</h3>We are committed to our role in society and stand up for what we commit to achieve. 
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-chat"></span></div>
                  <h3 class="features-title font-alt">Community</h3>Robogals is a family. Whether you are an executive, volunteer, partner or supporter, we work together to make our vision a reality. 
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="features-title font-alt">Innovation</h3>All members of our organisation have the chance to innovate and bring new ideas to the table. We encourage individualism and interests to shine.
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-heart"></span></div>
                  <h3 class="features-title font-alt">Passion</h3>We are dedicated to diversity and inclusion in engineering and related fields. We are determined to make a difference. 
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image" data-background="assets/images/section-14.jpg"></div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Robogals Melbourne</h2>
                  <div class="module-subtitle font-serif align-left">Our goal is to inspire, engage and empower young women into engineering and related fields. </div>
                  <p>We are the Melbourne based chapter of Robogals, an international, not-for-profit, student run organisation that aims to increase female participation in Science, Technology, Engineering and Mathematics through fun and educational initiatives aimed at girls in primary and secondary school. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark" id="button">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Learn More</h2>
                <div class="module-subtitle font-serif">Find out how you can get involved, as either a student or as parents/teachers.</div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-2 text-center bottom10">
                <button class="btn btn-border-w btn-circle" onclick="location.href='volunteer.php'">Volunteer </button>
              </div>
              <div class="col-sm-4 text-center bottom10">
                <button class="btn btn-border-w btn-circle" onclick="location.href='contact.php'">Contact Us </button>
              </div>            
            </div>
        </section>
        <hr class="divider-w">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="font-alt mb-30">Frequently Asked Questions</h4>
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Do I have to be a girl to volunteer for Robogals?</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="support1">
                      <div class="panel-body">Absolutely all students, of all backgrounds, ages, courses, and gender, are welcome. While our aim is to increase female participation in STEM, we're open - and encourage! - anyone to volunteer for this cause.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Do I have to be a girl to attend Robogals workshops?</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support2">
                      <div class="panel-body">No, there are no restrictions on who can attend and learn from our workshops. Of course, we try to have as high of a ratio of females as possible, but we do not exclude anyone from our curriculum.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support3">Does it cost anything to join Robogals?</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support3">
                      <div class="panel-body">There is absolutely no cost involved to join. All training and equipment is provided, and there is no prior knowledge of robotics or engineering required.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support4">Is there any way I can donate to your cause?</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support4">
                      <div class="panel-body">Certainly! Although we provide our services free of charge, donations are enormously appreciated to keep our equipment up to date and our workshops as accessible as possible. Please contact our partnerships manager (MELBOURNE.PARTNERSHIPS@ROBOGALS.ORG) if you would like to make a donation or sponsor us.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="widget">
                  <h5 class="widget-title font-alt">Sponsored By</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <cms:embed 'footer.inc' />
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <cms:embed 'js.inc' />
  </body>
</html>
<?php COUCH::invoke(); ?>