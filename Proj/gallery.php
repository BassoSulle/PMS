
<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Project name | Gallery</title>
    <?php include("top-style-script/script-link.php")?>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <script>
          var navbarStyle = window.config.config.phoenixNavbarStyle;
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
          }
        </script>

    <!-- ===============================================-->
    <!--    Side navigation-->
    <!-- ===============================================-->
    <?php include('side-nav/side_nav.php');?>

    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
     <?php include('top-nav/top-nav.php');?>
     <?php include('top-nav/script-nav.php');?>
        
          <div class="content">

          <div class="col mb-5">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="float: right;">+ Add image</button>
                      <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add Image </h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path></svg><!-- <span class="fas fa-times fs-9"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <div class="modal-body">
      
                            <label  class="form-label"> Image Title</label>
                            <input class="form-control mb-5" type="text" placeholder="Write title here...">
                                <div class="mb-6">
                                            <label  class="form-label"> Image Description</label>
                                            <textarea class="tinymce form-control  mb-5" name="content"  aria-hidden="true"></textarea>
                                            <div class="mb-3">
                                                <label for="formImage" class="form-label">Upload images</label>
                                                <input class="form-control" type="file" id="formImage">
                                                </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                                    </div>
                                </div>
                            </div>
                    </div>
 
          <div class="col p-5">
            <h3>Photos</h3>
              <div class="d-flex pb-4 align-items-end">
              <h3 class="flex-1 mb-0"></h3>
                <a class="fw-bold fs-9 me-4 " href="#!">Albums</a
                ><a class="fw-bold fs-9" href="#!">See all</a>
              </div>
                          
              <div class="row g-3">
                <div class="col-3">
                  <a
                    href="images/n1.jpg"
                    data-gallery="gallery-photos"
                    >
                    <div class="card text-white overflow-hidden" style="max-width:30rem;">
                      <img class="card-img-top img-fluid" src="images/n1.jpg" alt="...">
                      <div class="card-img-overlay d-flex align-items-end">
                        <div>
                          <h4 class="card-title text-white">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  
                </a>
                </div>

                <div class="col-3">
                  <a
                    href="images/n1.jpg"
                    data-gallery="gallery-photos"
                    >
                    <div class="card text-white overflow-hidden" style="max-width:30rem;">
                      <img class="card-img-top img-fluid" src="images/n1.jpg" alt="...">
                      <div class="card-img-overlay d-flex align-items-end">
                        <div>
                          <h4 class="card-title text-white">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  
                </a>
                </div>

                
                <div class="col-3">
                  <a
                    href="images/n1.jpg"
                    data-gallery="gallery-photos"
                    >
                    <div class="card text-white overflow-hidden" style="max-width:30rem;">
                      <img class="card-img-top img-fluid" src="images/n1.jpg" alt="...">
                      <div class="card-img-overlay d-flex align-items-end">
                        <div>
                          <h4 class="card-title text-white">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  
                </a>
                </div>

                
                <div class="col-3">
                  <a
                    href="images/n1.jpg"
                    data-gallery="gallery-photos"
                    >
                    <div class="card text-white overflow-hidden" style="max-width:30rem;">
                      <img class="card-img-top img-fluid" src="images/n1.jpg" alt="...">
                      <div class="card-img-overlay d-flex align-items-end">
                        <div>
                          <h4 class="card-title text-white">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  
                </a>
                </div>

                <div class="col-3">
                  <a
                    href="images/n3.jpg"
                    data-gallery="gallery-photos"
                    >
                    <div class="card text-white overflow-hidden" style="max-width:30rem;">
                      <img class="card-img-top img-fluid" src="images/n3.jpg" alt="...">
                      <div class="card-img-overlay d-flex align-items-end">
                        <div>
                          <h4 class="card-title text-white">Card title</h4>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  
                </a>
                </div>


              </div>
            </div>

          </div>
    <?php include('mainchat.php')?>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include('customization.php')?>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
  
  <?php include('script-bottom/script-bottom.php')?>
  </body>
  
</html>