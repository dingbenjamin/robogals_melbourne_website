<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <cms:embed 'head.inc' />
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <cms:embed 'nav.inc' />
      <div class="main">
        <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/images/testimonial_bg.jpg">
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">It's important that the engineers who create our world are as diverse as the people who are in it</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Marita Cheng</div>
                          <div class="testimonial-descr">2012 Young Australian of the Year</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image" data-background="assets/images/section-14.jpg"></div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Our office</h2>
                  <div class="module-subtitle font-serif align-left">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                  <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-60" data-background="assets/images/section-6.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Scoreboard</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-wallet"></span></div>
                  <h3 class="count-to font-alt" data-countto="6543"></h3>
                  <h5 class="count-title font-serif">Dollars raised for charity</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-wine"></span></div>
                  <h3 class="count-to font-alt" data-countto="8"></h3>
                  <h5 class="count-title font-serif">Cups of wine consumed</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-camera"></span></div>
                  <h3 class="count-to font-alt" data-countto="184"></h3>
                  <h5 class="count-title font-serif">Photographs taken</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-map-pin"></span></div>
                  <h3 class="count-to font-alt" data-countto="32"></h3>
                  <h5 class="count-title font-serif">Locations covered</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image col-md-offset-6" data-background="assets/images/section-14.jpg"></div>
            <div class="col-xs-12 col-md-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Our office</h2>
                  <div class="module-subtitle font-serif align-left">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                  <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-d">
        <cms:embed 'footer.inc' />
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <cms:embed 'js.inc' />
  </body>
</html>
<?php COUCH::invoke(); ?>