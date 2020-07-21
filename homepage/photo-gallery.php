<section class="mb-2 bg-white photo-gallery">
    <div class="clearfix">
        <div class="float-left">
            <h5 class="text-success ml-2"><i class="fa fa-camera text-dark mr-2"></i>ফটো গ্যালারী</h5>
        </div>
        <div class="float-right photo-gallery-navigation">
            <a class="btn prev btn-success btn-sm border-0"><i class="fa fa-angle-left"></i></a>
            <a class="btn next btn-success btn-sm  border-0 "><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    
    <div id="photo-gallery" class="owl-carousel owl-theme">
      <?php for ($i=0; $i < 16; $i++) { ?>
        <div class="item" data-toggle="modal" data-target="#photo_gallery_modal">
            <a class="cursor-pointer" data-size="781x1172">
                <img class="img-fluid pl-2" src="assets/images/photo-gallery.jpg" alt="">
            </a>
        </div>
        <?php } ?>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="photo_gallery_modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Photo Caption</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                    <ol class="carousel-indicators">
                        <li data-target="#lightbox" data-slide-to="0"></li>
                        <li data-target="#lightbox" data-slide-to="1"></li>
                        <li data-target="#lightbox" data-slide-to="2"></li>
                        <li data-target="#lightbox" data-slide-to="3"></li>
                        <li data-target="#lightbox" data-slide-to="4"></li>
                        <li data-target="#lightbox" data-slide-to="5"></li>
                        <li data-target="#lightbox" data-slide-to="6"></li>
                        <li data-target="#lightbox" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                        <div class="carousel-item"><img src="assets/images/photo-gallery.jpg" class="img-fluid w-100"alt=""></div>
                    </div>
                    <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
    </div>
</div>