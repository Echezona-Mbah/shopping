
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
                <h2>Shopping Cart</h2>
        
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            
                @if($cart)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $id => $details)
                            <tr data-id="{{ $id }}">
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('uploads/' . $details['img']) }}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">{{ $details['name'] }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ number_format($details['amount'], 2) }}</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 150px;">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-minus rounded-circle bg-light border">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="number" name="quantity" class="form-control form-control-sm text-center border-0 quantity-input" value="{{ $details['quantity'] }}" data-price="{{ $details['amount'] }}" min="1">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4 item-total">{{ number_format($details['amount'] * $details['quantity'], 2) }}</p>
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p>Your cart is empty</p>
                @endif

                <div class="container mt-5" style="max-width: 700px;">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <div class="card mb-3 border-0">
                            <div class="text-center card-header" style="background-color: rgb(41, 41, 41); color: white; border-radius: 10px; font-weight: 600; font-size: larger;">
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5>Subtotal:</h5>
                                        <p id="subtotal">0.00</p>
                                        <input type="hidden" name="subtotal" id="hiddenSubtotal">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h5>Delivery Options:</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOption" id="withinOwerri" value="2000" checked>
                                            <label class="form-check-label" for="withinOwerri">Within Owerri (2,000)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOption" id="outsideOwerri" value="4000">
                                            <label class="form-check-label" for="outsideOwerri">Outside Owerri (4,000)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: rgb(41, 41, 41); color: white; border-radius: 10px;">
                                <h5 style="color: white;">Total:</h5>
                                <p id="total">0.00</p>
                                <input type="hidden" name="total" id="hiddenTotal">
                                {{-- <button type="submit" class="btn btn-primary">Checkout</button> --}}
                            </div>
                        </div>
                    </form>
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


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const quantityInputs = document.querySelectorAll('.quantity-input');
                const subtotalElement = document.getElementById('subtotal');
                const totalElement = document.getElementById('total');
                const deliveryOptions = document.querySelectorAll('input[name="deliveryOption"]');
                const hiddenSubtotal = document.getElementById('hiddenSubtotal');
                const hiddenTotal = document.getElementById('hiddenTotal');
        
                function calculateSubtotal() {
                    let subtotal = 0;
                    document.querySelectorAll('.quantity-input').forEach(input => {
                        const quantity = parseFloat(input.value);
                        const price = parseFloat(input.getAttribute('data-price'));
                        const itemTotalElement = input.closest('tr').querySelector('.item-total');
                        const itemTotal = price * quantity;
                        itemTotalElement.textContent = itemTotal.toFixed(2);
                        subtotal += itemTotal;
                    });
                    subtotalElement.textContent = subtotal.toFixed(2);
                    hiddenSubtotal.value = subtotal.toFixed(2);
                    calculateTotal(subtotal);
                }
        
                function calculateTotal(subtotal) {
                    const deliveryCharge = parseFloat(document.querySelector('input[name="deliveryOption"]:checked').value);
                    const total = subtotal + deliveryCharge;
                    totalElement.textContent = total.toFixed(2);
                    hiddenTotal.value = total.toFixed(2);
                }
        
                function updateQuantity(button, increment) {
                    const input = button.closest('.input-group').querySelector('.quantity-input');
                    let quantity = parseInt(input.value);
                    quantity += increment;
                    if (quantity < 1) quantity = 1;
                    input.value = quantity;
                    calculateSubtotal();
                }
        
                quantityInputs.forEach(input => {
                    input.addEventListener('input', calculateSubtotal);
                });
        
                document.querySelectorAll('.btn-plus').forEach(button => {
                    button.addEventListener('click', () => updateQuantity(button, 1));
                });
        
                document.querySelectorAll('.btn-minus').forEach(button => {
                    button.addEventListener('click', () => updateQuantity(button, -1));
                });
        
                deliveryOptions.forEach(option => {
                    option.addEventListener('change', () => {
                        const subtotal = parseFloat(subtotalElement.textContent);
                        calculateTotal(subtotal);
                    });
                });
        
                calculateSubtotal(); // Initial calculation
            });
        </script>
        
        

  @include('footer')