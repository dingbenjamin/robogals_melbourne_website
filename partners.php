<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <cms:embed 'head.inc' />
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <cms:embed 'nav.inc' />
      <div class="main">
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/portfolio/portfolio_header_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt mb-0">Partners</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Gold Sponsors</h2>
              </div>
            </div>
            <div class="row">
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">National Australia Bank</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words. </p>
                  </div>
                </div>
              </div>
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">Harris C4i</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Silver Sponsors</h2>
              </div>
            </div>
            <div class="row">
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">National Australia Bank</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words. </p>
                  </div>
                </div>
              </div>
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">Harris C4i</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Bronze Sponsors</h2>
              </div>
            </div>
            <div class="row">
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">National Australia Bank</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words. </p>
                  </div>
                </div>
              </div>
              <div class ="col-sm-6">
                <div class="col-sm-6 col-md-8 col-lg-8"><img src="assets/images/section-1.jpg" alt="Title of Image"/></div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="work-details">
                    <h5 class="work-details-title font-alt">Harris C4i</h5>
                    <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module bg-light">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Affiliations</h2>
              </div>
            </div>
            <ul class="works-grid works-grid-gut works-grid-5 works-hover-w" id="works-grid">
              <li class="work-item illustration webdesign">
                  <img src="assets/images/portfolio/grid-portfolio1.jpg" alt="Portfolio Item"/>
              <li class="work-item marketing webdesign">
                  <img src="assets/images/portfolio/grid-portfolio6.jpg" alt="Portfolio Item"/>
              <li class="work-item illustration webdesign">
                  <img src="assets/images/portfolio/grid-portfolio8.jpg" alt="Portfolio Item"/>
              <li class="work-item illustration webdesign">
                  <img src="assets/images/portfolio/grid-portfolio8.jpg" alt="Portfolio Item"/>
              <li class="work-item illustration webdesign">
                  <img src="assets/images/portfolio/grid-portfolio8.jpg" alt="Portfolio Item"/>
            </ul>
          </div>
        </section>
        </div>
        <cms:embed 'footer.inc' />
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <cms:embed 'js.inc' />
  </body>
</html>
<?php COUCH::invoke(); ?>