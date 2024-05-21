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
                    <h4 class="card-title">ALL Cart</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Images</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Quantity</th>
                            <th>Sub total</th>
                            <th>Total</th>
                            <th>Delivery Option</th>
                            <th>Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitems as $cartitem)

                          <tr>
                            <td class="py-1">
                              <img src="{{('uploads/' .$cartitem->img)}}" alt="image"/>
                            </td>
                            <td>{{$cartitem->name}}</td>
                            <td>₦{{$cartitem->amount}}</td>
                            <td>{{$cartitem->quantity}}</td>
                            <td>₦{{$cartitem->subtotal}}</td>
                            <td>₦{{$cartitem->total}}</td>
                            <td>₦{{$cartitem->deliveryOption}}</td>
                            
                            <td>
                                <form action="{{ route('cart.destroy', $cartitem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <button type="button" class="btn btn-success">success</button> --}}
                            </td>
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