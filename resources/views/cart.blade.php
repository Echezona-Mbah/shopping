
@include('head')

<body>
    @include('navbar')


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


      


        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/jewerly 4.avif" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Jollof Rice</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">5,000</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">5,000</p>
                                </td>
                                <td>
                                    <button class="btn btn-md rounded-circle bg-light border mt-4" >
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>
                            
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/Jewellry 2.jpg" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Cocktail</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">2,000</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">2,000</p>
                                </td>
                                <td>
                                    <button class="btn btn-md rounded-circle bg-light border mt-4" >
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/jewelry 3.webp" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Jollof Spaghetti</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">4,500</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">4,500</p>
                                </td>
                                <td>
                                    <button class="btn btn-md rounded-circle bg-light border mt-4" >
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                

                <div class="container mt-5" style="max-width: 700px;">
                    <div class="card mb-3 border-0">
                      <div class="text-center card-header" style="background-color: rgb(41, 41, 41); color: white; border-radius: 10px;font-weight: 600; font-size: larger;">
                        Checkout
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5>Subtotal:</h5>
                            <p>$100.00</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <h5>Delivery Options:</h5>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="deliveryOption" id="standard" value="standard" checked>
                              <label class="form-check-label" for="standard">
                                Within Owerri (2,000)
                              </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="deliveryOption" id="standard" value="standard" checked>
                                <label class="form-check-label" for="standard">
                                  Outside Owerri (4,000)
                                </label>
                              </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="card-footer" style="background-color: rgb(41, 41, 41); color: white; border-radius: 10px;">
                        <h5 style="color: white;">Total:</h5>
                        <p>$100.00</p>
                      </div>
                    </div>
                  </div>
                  
                  

                  
                
                  <div class="btn-container">
                    <button id="openModalBtn" class="paymentbtn">Show Payment Types</button>
                  </div>
                  

                    <div id="myModal" class="modal">
                    <div class="modal-content">
                    <span class="close">&times;</span>
                     <p style="font-size: 40px; font-weight: bolder; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center;">Available payment Types</p>
                     <p style="font-size: 20px; font-weight: bolder; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center;">(GT Bank) Ozurumba izuchukwu blessing</p>
                        
                     <div class="paymentcontainer">
                        <ul>
                            <li>
                                <span style="padding-bottom: 0%;font-weight:bolder;font-size: 20px; margin-right: 45px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">BANK TRANSFER</span>
                                <input class="typeinput" type="text" value="0239489136 " id="bankTransferInput">
                                <button class="copy-button" onclick="copyText('bankTransferInput')">Copy text</button><br>
                            </li>
                            <li>
                                <span style="padding-bottom: 0%;font-weight:bolder;font-size: 20px; margin-right: 24px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">BITCOIN PAYMENT</span>
                                <input class="typeinput" type="text" value="1D4FXYLpEtb3bPDr9SVzmJyv2iqftwdGZv" id="bitcoinInput">
                                <button class="copy-button" onclick="copyText('bitcoinInput')">Copy text</button><br>
                            </li>
                            <li>
                                <span style="padding-bottom: 0%;font-weight:bolder;font-size: 20px; margin-right: 24px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">USDT PAY ( TRC 20)</span>
                                <input class="typeinput" type="text" value="TZB86rGziRwBZFibLLT7P3No82XCg9wKha" id="usdtTRC20Input">
                                <button class="copy-button" onclick="copyText('usdtTRC20Input')">Copy text</button><br>
                            </li>
                            <li>
                                <span style="padding-bottom: 0%;font-weight:bolder;font-size: 20px; margin-right: 24px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">USDT PAY ( ERC 20)</span>
                                <input class="typeinput" type="text" value="0x53af55618b07d2c34682146a2460d721af4230dd" id="usdtERC20Input">
                                <button class="copy-button" onclick="copyText('usdtERC20Input')">Copy text</button><br>
                            </li>
                        </ul>
                        
                     </div>
                            
                     
                     <div class="btn-container">
                        <button id="closeModalBtn" class="paymentbtn">OK</button>
                      </div>
                      
                              <p style="font-size: 14px; font-weight: bolder; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center;">Only click this when you have made the transfer</p>
                            
            </div>
        </div>




                  

                  
        <!-- Cart Page End -->


  @include('footer')