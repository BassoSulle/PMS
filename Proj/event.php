
<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PMS | Events</title>
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

     <h3>Event</h3>

     <div class="col mb-5">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="float: right;">+ Add Event</button>
                      <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add project events Information </h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path></svg><!-- <span class="fas fa-times fs-9"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <div class="modal-body">
      
                                <div class="form-group">
                                    <label  class="form-label">Title </label>
                                    <input class="form-control mb-2" type="text" placeholder="Write title here...">
                                </div>

                                    <div class="form-group">
                                          <label  class="form-label">Description</label>
                                          <textarea class="tinymce form-control  mb-2" name="content"  aria-hidden="true"></textarea>
                                    </div>

                                        
                                <div class="form-group">
                                    <label  class="form-label">Date </label>
                                    <input class="form-control mb-2" type="date" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label  class="form-label">Time </label>
                                    <input class="form-control mb-2" type="time" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label  class="form-label">Location </label>
                                    <input class="form-control mb-2" type="text" placeholder="Tanzania, Dar es salaam">
                                </div>

                                <div class="form-group">
                                    <label  class="form-label">Venue </label>
                                    <input class="form-control mb-2" type="text" placeholder="JK Hall">
                                </div>

                                <div class="form-group">
                                    <label  class="form-label">Status </label>
                                    <select class="form-select" aria-label="Default select example">
                                    <option value="1">On Plan</option>
                                    <option value="2">Completed</option>
                                    <option value="3">Progress</option>
                                    <option value="4">Failed</option>
                                 </select>
                                </div><br>

                                    <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                                    </div>
                                </div>
                            </div>
                    </div>
 
   
          
     <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;description&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="search-box mb-3 mx-auto">
                          <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                          </form>
                        </div>
                        <div class="table-responsive">
                          <table class="table  table-sm fs-9 mb-0">
                            <thead>
                              <tr>
                                <th class="sort border-top border-translucent ps-3" data-sort="name">Title</th>
                                <th class="sort border-top" data-sort="description">Decsription</th>
                                <th class="sort border-top" data-sort="date">Date</th>
                                <th class="sort border-top" data-sort="">Time</th>
                                <th class="sort border-top" data-sort="">Location</th>
                                <th class="sort border-top" data-sort="">Venue</th>
                                <th class="sort border-top" data-sort="">Status</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col" style="display: flex; align-items: center;">Action</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                                
                            <tr>
                                <td class="align-middle ps-3 name">Data collection</td>
                                <td class="align-middle description">This provide the description</td>
                                <td class="align-middle date">25 May 2024</td>
                                <td class="align-middle">16:00</td>
                                <td class="align-middle">Tanzania, Dar es salaam</td>
                                <td class="align-middle">JK hall</td>
                                <td class="align-middle"><span class="badge badge-phoenix badge-phoenix-success">Completed</span></td>
                                <td class="align-middle time white-space-nowrap ps-0 py-4">
                                    <div style="display: flex; align-items: center;">
                                    <button title="View" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-eye"></span></button>
                                    <button title="Edit" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-edit"></span></button>
                                    <button title="Delete" class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                                    </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="align-middle ps-3 name">Data collection</td>
                                <td class="align-middle description">This provide the description</td>
                                <td class="align-middle date">25 May 2024</td>
                                <td class="align-middle">16:00</td>
                                <td class="align-middle">Tanzania, Dar es salaam</td>
                                <td class="align-middle">JK hall</td>
                                <td class="align-middle"><span class="badge badge-phoenix badge-phoenix-secondary">Progress</span></td>
                                <td class="align-middle time white-space-nowrap ps-0 py-4">
                                    <div style="display: flex; align-items: center;">
                                    <button title="View" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-eye"></span></button>
                                    <button title="Edit" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-edit"></span></button>
                                    <button title="Delete" class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                                    </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="align-middle ps-3 name">Data collection</td>
                                <td class="align-middle description">This provide the description</td>
                                <td class="align-middle date">25 May 2024</td>
                                <td class="align-middle">16:00</td>
                                <td class="align-middle">Tanzania, Dar es salaam</td>
                                <td class="align-middle">JK hall</td>
                                <td class="align-middle"><span class="badge badge-phoenix badge-phoenix-danger">Failed</span></td>
                                <td class="align-middle time white-space-nowrap ps-0 py-4">
                                    <div style="display: flex; align-items: center;">
                                    <button title="View" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-eye"></span></button>
                                    <button title="Edit" class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0" ><span class="fas fa-edit"></span></button>
                                    <button title="Delete" class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                                    </div>
                                </td>
                              </tr>
                              

                              
                              
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Events of </span>43</span>
                          <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                            <ul class="mb-0 pagination"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li><li class="disabled"><button class="page" type="button">...</button></li></ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
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