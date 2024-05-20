@include('admin.head')
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <!-- partial -->



    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial:partials/_sidebar.html -->
    @include('admin.nav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Product</h4>
                    <p class="card-description">
                        Update Product
                    </p>
                    <form method="POST" action="{{ route('watch.update', $editWatch->id) }}" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$editWatch->name}}" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Amount</label>
                        <input type="text"  name="amount" class="form-control" id="exampleInputName1" value="{{$editWatch->amount}}" placeholder="Amount">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Sold</label>
                        <input type="text" name="sold" class="form-control" id="exampleInputName1" value="{{$editWatch->sold}}" placeholder="sold">
                      </div>

                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img" class="file-upload-default" id="fileInput">
                        <div class="input-group col-xs-12">
                            <input type="text" name="img" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button" onclick="document.getElementById('fileInput').click()">Upload</button>
                            </span>
                        </div>
                    </div>
                    


                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="discription" id="exampleTextarea1" rows="4">{{ $editWatch->discription }}</textarea>
                    </div>
                    
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
            </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.<br>
                        
                          Distributed By: <a href="https://www.themewagon.com/" class="text-muted" target="_blank">ThemeWagon</a>
                        
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
                    </div>
                </div>    
            </div>        
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('admin.footer')