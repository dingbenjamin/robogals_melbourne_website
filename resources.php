<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <cms:embed 'head.inc' />
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <cms:embed 'nav.inc' />
      <div class="main">
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="assets/images/restaurant/cake_pastries_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Workshop Plans</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-6">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Workshop Lesson Plan A</h4>
                      <div class="menu-detail font-serif">Suited for primary school children</div>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Workshop Lesson Plan B</h4>
                      <div class="menu-detail font-serif">Suited for secondary school children</div>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Big Dog Video</h4>
                      <div class="menu-detail font-serif">Boston Dynamics</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Spaghetti Bridge Lesson Plan</h4>
                      <div class="menu-detail font-serif">Suited for primary school children</div>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Arduino Lesson Plan</h4>
                      <div class="menu-detail font-serif">Suited for secondary school children</div>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Engineering Presentation</h4>
                      <div class="menu-detail font-serif">Introduce students to what engineerg is</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <cms:embed 'footer.inc' />
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
      </div>
    </main>
    <cms:embed 'js.inc' />
  </body>
</html>
<?php COUCH::invoke(); ?>