<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Contact</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main class="contact-page">
      <!-- Contact page-->
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-street-map"></div>
              </div>
              <h3>Address</h3>
              <p>13/25 New Avenue<br>New Heaven, Lalmatiya 73<br>Dhaka, <strong>Bangladesh</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-support"></div>
              </div>
              <h3>Call center</h3>
              <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+33 555 444 333</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-envelope"></div>
              </div>
              <h3>Electronic support</h3>
              <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul class="list-style-none">
                <li><strong><a href="mailto:">admin@floraaid.com</a></strong></li>
                <li><strong><a href="#">
                      Ticketio
                       - our ticketing support platform</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <header class="mb-5">
            <h2 class="heading-line">Contact form</h2>
          </header>
          <div class="row">
            <div class="col-md-7">
              <form id="contact-form" method="post" action="<?php echo e(route('contact-messages-send')); ?>" class="custom-form form">
                <?php echo csrf_field(); ?>
                <div class="controls">
                  <div class="form-group">
                    <label for="name" class="form-label">Your Name *</label>
                    <input type="name" name="name" id="name" placeholder="Enter your  name" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Your email *</label>
                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="message" class="form-label">Your message for us *</label>
                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-template" name="submit">Send message</button>
                </div>
              </form>
            </div>
            <div class="col-md-5">
              <h2> We’d love to hear from you</h2> <p style="text-align: justify;"> Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions. </p>

              <div class="social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/contact.blade.php ENDPATH**/ ?>