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


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ALL PRODUCT</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Product Images</th>
                            <th>Product Name</th>
                            <th>Product Amount</th>
                            <th>Product Sold</th>
                            <th>Product Descripion</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($allWatchs as $allWatch)

                          <tr>
                            <td class="py-1">
                              <img src="{{('uploads/' .$allWatch->imgs)}}" alt="image"/>
                            </td>
                            <td>{{$allWatch->name}}</td>
                            <td>₦{{$allWatch->amount}}</td>
                            <td>{{$allWatch->sold}}</td>
                            <td>{{$allWatch->discription}}</td>
                            <td>
                                <a href="{{ route('watch.edit', $allWatch->id) }}" class="btn btn-primary">Edit</a>

                            </td>
                            <td><button type="button" class="btn btn-success">success</button></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
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