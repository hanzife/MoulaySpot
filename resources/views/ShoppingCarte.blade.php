<link rel="stylesheet" href="{{ asset('css/shoppingcart.css') }}">

    <title>Shopping carte</title>

    
<!-- Header Lyout -->
@extends('layouts.master')

<!-- myBody -->
@section('content')
     <!-- Container -->
 <div id="Container">
        <div id="ShoppingCarte-Details">
            <div id="carte-Top">
                <h2 id="left-h2">Shopping Carte</h2>
                <h2 id="right-h2">3 Plants</h2>
            </div>

            <div id="Products">
                <!-- Item In Carte -->
                @foreach($CarteItem as $item)
                <div class="Product-Details">
                    <img class="Product-image" src="/Images/plants/{{$item->reference}}">
                    <div class="MyProductname">
                        <span class="nameProduct">{{$item->name}}</span><br>
                        <span class="familyProduct">{{$item->family}}</span>
                    </div>
                    <div class="Price">
                        <span class="Prices">{{$item->price}} DH</span>
                    </div>
                    <input type="hidden" value="{{$item->id}}" class="myPlant">

                    <svg class="Deletes" viewBox="0.5 0 32.983 37.695">
                    <path class="Delete"
                            d="M 14.63555908203125 0 C 14.19815826416016 0.0002335868193767965 13.76945018768311 0.1222327724099159 13.3974494934082 0.3523335158824921 C 13.02547168731689 0.5824368596076965 12.72487926483154 0.9115527272224426 12.5293607711792 1.30282735824585 L 10.82367038726807 4.71185302734375 L 2.855926513671875 4.71185302734375 C 2.231087684631348 4.71185302734375 1.631857872009277 4.960073471069336 1.19003438949585 5.401880741119385 C 0.7482132911682129 5.843710422515869 0.5 6.442940711975098 0.5 7.067779541015625 C 0.5 7.692618370056152 0.7482132911682129 8.291848182678223 1.19003438949585 8.733678817749023 C 1.631857872009277 9.175485610961914 2.231087684631348 9.4237060546875 2.855926513671875 9.4237060546875 L 2.855926513671875 32.98297119140625 C 2.855926513671875 34.2325553894043 3.352344036102295 35.43101501464844 4.23600435256958 36.31472396850586 C 5.11964225769043 37.19842910766602 6.318125247955322 37.69482421875 7.567779541015625 37.69482421875 L 26.41519165039063 37.69482421875 C 27.66477584838867 37.69482421875 28.86323356628418 37.19842910766602 29.7469425201416 36.31472396850586 C 30.63065147399902 35.43101501464844 31.12704467773438 34.2325553894043 31.12704467773438 32.98297119140625 L 31.12704467773438 9.4237060546875 C 31.75183486938477 9.4237060546875 32.3511848449707 9.175485610961914 32.79291915893555 8.733678817749023 C 33.23465728759766 8.291848182678223 33.48297119140625 7.692618370056152 33.48297119140625 7.067779541015625 C 33.48297119140625 6.442940711975098 33.23465728759766 5.843710422515869 32.79291915893555 5.401880741119385 C 32.3511848449707 4.960073471069336 31.75183486938477 4.71185302734375 31.12704467773438 4.71185302734375 L 23.1593017578125 4.71185302734375 L 21.45361137390137 1.30282735824585 C 21.25809288024902 0.9115527272224426 20.95750045776367 0.5824368596076965 20.58552169799805 0.3523335158824921 C 20.21352195739746 0.1222327724099159 19.78481483459473 0.0002335868193767965 19.347412109375 0 L 14.63555908203125 0 Z M 9.9237060546875 14.13555908203125 C 9.9237060546875 13.51072025299072 10.17192649841309 12.91149044036865 10.61373329162598 12.46965980529785 C 11.05556392669678 12.02785301208496 11.65479373931885 11.77963256835938 12.27963256835938 11.77963256835938 C 12.9044713973999 11.77963256835938 13.50370121002197 12.02785301208496 13.94553184509277 12.46965980529785 C 14.38733863830566 12.91149044036865 14.63555908203125 13.51072025299072 14.63555908203125 14.13555908203125 L 14.63555908203125 28.2711181640625 C 14.63555908203125 28.89590835571289 14.38733863830566 29.49525833129883 13.94553184509277 29.9369945526123 C 13.50370121002197 30.37873077392578 12.9044713973999 30.62704467773438 12.27963256835938 30.62704467773438 C 11.65479373931885 30.62704467773438 11.05556392669678 30.37873077392578 10.61373329162598 29.9369945526123 C 10.17192649841309 29.49525833129883 9.9237060546875 28.89590835571289 9.9237060546875 28.2711181640625 L 9.9237060546875 14.13555908203125 Z M 21.70333862304688 11.77963256835938 C 21.07850074768066 11.77963256835938 20.47926902770996 12.02785301208496 20.03743934631348 12.46965980529785 C 19.59563255310059 12.91149044036865 19.347412109375 13.51072025299072 19.347412109375 14.13555908203125 L 19.347412109375 28.2711181640625 C 19.347412109375 28.89590835571289 19.59563255310059 29.49525833129883 20.03743934631348 29.9369945526123 C 20.47926902770996 30.37873077392578 21.07850074768066 30.62704467773438 21.70333862304688 30.62704467773438 C 22.32817649841309 30.62704467773438 22.9274787902832 30.37873077392578 23.36921501159668 29.9369945526123 C 23.81095123291016 29.49525833129883 24.05926513671875 28.89590835571289 24.05926513671875 28.2711181640625 L 24.05926513671875 14.13555908203125 C 24.05926513671875 13.51072025299072 23.81095123291016 12.91149044036865 23.36921501159668 12.46965980529785 C 22.9274787902832 12.02785301208496 22.32817649841309 11.77963256835938 21.70333862304688 11.77963256835938 Z">
                        </path>

                    </svg>


                </div>
                <div class="_miniBlank"></div>
                <!--  -->
                @endforeach



            </div>

            <div id="Total">
                <span>Total:</span><span style="font-size:35px;"> {{$totalPrice}}DH</span>
            </div>
        </div>

        <div id="Payment-Checkout">
            <span id="h2span">Card Details</span>
            <div id="CardDetails">
                <div class="VisaCard">
                </div>
                <!-- <div id="VisaCard">
                    <span id="CardBank">Card Info</span>
                    <div id="Digits-14">
                        <div id="">
                            <span>••••</span>
                        </div>
                        <div id="_da">
                            <span>••••</span>
                        </div>
                        <div id="_db">
                            <span>••••</span>
                        </div>
                        <div id="_dc">
                            <span>••••</span>
                        </div>
                    </div>
                    <div id="ID1220">
                        <span>12/20</span>
                    </div>
                    <div id="Jon_Due_de">
                        <span>Jon Due</span>
                    </div> 
                    <img id="visapng" src="visapng.png" srcset="visapng.png 1x, visapng@2x.png 2x">
                </div> -->

                <div id="CardFilling">
                    <form action="">
                        <label for="">Name On Card</label><br>
                        <input type="text" name="" id="" class="LongText" placeholder="Hon Due"><br>
                        <label for="" id="Card_Number">Card Number</label><br>
                        <input type="text" name="" id="" class="LongText" placeholder="•••• •••• •••• ••••"><br>
                        <div id="Dates">
                            <label for="" id="Expiration_Date">Expiration Date</label><br>
                            <select id="month" name="month">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>

                            <input type="number" name="" id="" class="" placeholder="yyyy">
                        </div>
                        <div id="SecurityCVV">
                            <label for="" id="Expiration_Date">CVV</label><br>
                            <input type="number" name="" id="cvv" class="" placeholder="xxx">
                        </div>
                        <div id="div-for-button">
                            <button>Complete Order</button>

                        </div>
                    </form>
                </div>

            </div>

            <!-- <svg class="Holder">
                <rect id="Holder" rx="10" ry="10" x="0" y="0" width="524" height="811">
                </rect>
            </svg> 
            <svg class="btn_cl">
                <linearGradient id="btn_cl" spreadMethod="pad" x1="0.5" x2="0.5" y1="1" y2="0.09">
                    <stop offset="0" stop-color="#077175" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#00a3a9" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="btn_cl" rx="15" ry="15" x="0" y="0" width="297" height="58">
                </rect>
            </svg> -->
            <!-- <div id="Buy_Now">
                <span>Buy Now</span>
            </div> -->

        </div>
</div>
    <div class="_blank"></div>

     <!-- Script -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/Products.js')}}"></script>
@endsection