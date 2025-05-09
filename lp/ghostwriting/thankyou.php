<?php $page_title = "Thank You"; ?>
<?php $meta_keywords=""; ?>
<?php $thisPage='Thank You'; ?>
<?php include './include/header.php';?>
<style>
  .banner-heading { margin-top: 165px; z-index: 9999 !important; position: relative; } .thankyou-head{ color:#fff; font-size:55px; } .main-banner {
    padding-top: 10rem;
    padding-bottom: 10rem;
}

.modal{

   display:none !important

}
.twtS1{
   color :#fff;
}

.btn-back-thnk-y {border: 2px solid #272569;color: #fff;padding: 10px 20px;font-size: 14px;background: 0 0;position: relative;}

.btn-g-thankyou {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 28px;
}
.btn-back-thnk-y:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 0;
    background: #272569;
    top: 0;
    left: 0;
    transition: .7s;
    z-index: -1;
    bottom: 0;
}

.btn-back-thnk-y:hover:before {
    height: 100%;
}

.btn-back-thnk-y:hover {
    color: #fff;
}
</style>

<div class="inner-pages servicepg" id="banner">
      <section class="main-banner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-heading text-center">
                     <h2 class="thankyou-head">Thank you for Sign Up</h2>            
                     <p class="text-center twtS1" >Our customer service representative will contact you shortly.</p>
                    <div class="btn-g-thankyou">
                        <a href="https://oxfordbookus.com/lp/ghostwriting/" class="btn-back-thnk-y">Back To Home</a>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn-back-thnk-y">Chat Now</a>
                    </div>
                    </div>
                  </div>
               </div>
            </div>
      </section>
</div>
<?php include './include/footer.php';?>