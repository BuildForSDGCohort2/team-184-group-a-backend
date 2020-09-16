<?php $__env->startSection('content'); ?>

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="single-food" >
                        <div class="food-content" id="rcorners2">
                              <a href="">
                            <img src="images/meat.svg" class="img-fluid" alt="">
                            </a>
                            <div class="d-flex justify-content-between" id="inlinespace" style="margin-top: 10px;">
                                <h5>Breakfast</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="single-food" >
                        <div class="food-content" id="rcorners2">
                            <img src="images/jamaican-jerk-chicken.svg" class="img-fluid" alt="">
                            <div class="d-flex justify-content-between" id="inlinespace" style="margin-top: 10px;" >
                                <h5>Lunch</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="single-food" >
                        <div class="food-content" id="rcorners2">
                            <img src="images/burger.svg" class="img-fluid" alt="">
                            <div class="d-flex justify-content-between" id="inlinespace" style="margin-top: 10px;">
                                <h5>Dinner</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <hr style="width: 850px; size: 10px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-auto">
                    <div class="single-food">
                        <div class="food-content" id="rcorners">
                            <img src="assets/images/food1.jpg" style="width: 265px;  border-top-right-radius: 25px; margin-top: -30.2px; border-top-left-radius: 25px;margin-left: -30.5px;" alt="">
                            <div class="d-flex justify-content-between">
                                <h5>Mexican Eggrolls</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <button class="btn btn-outline-secondary btn-sm" data-target="#" data-toggle="modal"><span>View Product</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-content" id="rcorners">
                            <img src="assets/images/food2.jpg" style="width: 265px;  border-top-right-radius: 25px; margin-top: -30.2px; border-top-left-radius: 25px;margin-left: -30.5px;" alt="">
                            <div class="d-flex justify-content-between">
                                <h5>chicken burger</h5>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <button class="btn btn-outline-secondary btn-sm" data-target="#" data-toggle="modal"><span>View Product</span></button>

                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="single-food mt-5 mt-md-0">

                        <div class="food-content" id="rcorners">
                            <img src="assets/images/food3.jpg" style="width: 265px;  border-top-right-radius: 25px; margin-top: -30.2px; border-top-left-radius: 25px;margin-left: -30.5px;" alt="">
                            <div class="d-flex justify-content-between">
                                <h5>topu lasange</h5>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <button class="btn btn-outline-secondary btn-sm" data-target="#" data-toggle="modal"><span>View Product</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="single-food mt-5 mt-md-0">

                        <div class="food-content" id="rcorners">
                            <img src="assets/images/food4.jpg" style="width: 265px;  border-top-right-radius: 25px; margin-top: -30.2px; border-top-left-radius: 25px;margin-left: -30.5px;" alt="">
                            <div class="d-flex justify-content-between">
                                <h5>pepper potatoas</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <button class="btn btn-outline-secondary btn-sm" id="myBtn"><span>View Product</span></button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
                <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>Modal Header</h2>
                </div>
                <div class="modal-body">
                  <p>Some text in the Modal Body</p>
                  <p>Some other text...</p>
                </div>
                <div class="modal-footer">
                  <h3>Modal Footer</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->
    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/royalhotel/resources/views/frontpages/index.blade.php ENDPATH**/ ?>