<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <cms:embed 'head.inc' />
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <cms:embed 'nav.inc' />
      <div class="main" id="content">
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/about_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Volunteer</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module smallpadding">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="font-alt mb-0">Join us!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum, enim tincidunt pretium faucibus, nulla ex consequat nunc, id consequat odio velit a libero. Aliquam dapibus quam risus, in pharetra augue sagittis quis.</p>
              </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <hr class="divider-w mt-10 mb-20">
                <form class="form" role="form">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Phone"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email"/>
                  </div>
                  <textarea class="form-control" rows="7" placeholder="Message"></textarea>
                  <button class="btn btn-g btn-circle top15" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </section>
        <cms:embed 'footer.inc' />
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <cms:embed 'js.inc' />
  </body>
</html>
<?php COUCH::invoke(); ?>