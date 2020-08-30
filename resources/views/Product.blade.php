<link rel="stylesheet" href="{{ asset('css/PlantProfile.css')}}" />
<title>Plant Profile</title>
   <!-- Header Lyout -->
@extends('layouts.master')
<!-- ------ -->
@section('content')
    <!-- Contaner -->
    @foreach($Plant as $rowPlant)
  
    <section id="Container">

        <!-- Left Side -->
        <div id="c-Product">
            <!-- Product Image -->
            <div id="c-Image">
                <!-- <img id="Product-image_ec" src="/Images/Haworthia Attenuata.jpg"> -->
                <img class="Product-image_ec" id="expandedImg" src="/Images/Plants/{{$rowPlant->reference}}">   
            </div>
            @if(Auth::check())
             <button id="btn-c-P-AddtoCart" class="btn-AddCarte">
                <input type="hidden" class="addCarte" value="{{$rowPlant->id}}">
                <span class="Addme"><span>{{$rowPlant->price}}</span> - Add to Cart</span> 
                <span class="Addedme">✓ Added to carte</span> 
            </button>
<!--
            <button style="display:none;" id="btn-c-P-AddtoCarts" class="btn-AddCarte btn-AddCarte-Added">
                <input type="hidden" class="addCarte" value="{{$rowPlant->id}}">
                added
            </button> -->

            <!-- @foreach($shopping_cartes as $shopping_carte)
            @if($shopping_carte->id_plants == $rowPlant->id && $shopping_carte->id_User ==  Auth::id() )
            <button id="btn-c-P-AddtoCart" class="btn-AddCarte btn-AddCarte-Added">
                <input type="hidden" class="addCarte" value="{{$rowPlant->id}}">
                added
            </button>
           
            @endif
            @endforeach -->
<!--            
            
            <button id="btn-c-P-AddtoCart" class="btn-AddCarte">
                <input type="hidden" class="addCarte" value="{{$rowPlant->id}}">
                <span>{{$rowPlant->price}}</span> - Add to Cart
            </button>
           

           -->

            @else
            <button id="btn-c-P-AddtoCart">
            Sign Up
            </button>
            @endif
        </div>
        <!-- Right Side -->

        <div id="c-Details">
            <h1>{{$rowPlant->name}}</h1>
            <div id="description">
                <span>{{$rowPlant->description}}</span>
            </div>

            <div id="c-Conditions">

                <h2 id="Conditions">Conditions</h2>

                <div id="Conditions_c">
                    @foreach($conditions as $condition)
                    <div class="Info">
                        <img src="/Images/Icons/{{$condition->Hardiness_img}}" alt="">
                        <span>{{$condition->Hardiness}}</span>
                    </div>
                    <div class="Info">
                        <img src="/Images/Icons/{{$condition->Position_img}}" alt="">
                        <span>{{$condition->Position}}</span>
                    </div>
                    @endforeach
                    

                   
                    <div class="Info">
                        <img src="/Images/heart.png" alt="">
                        <span>{{$CountLikes}}</span>
                    </div>
                </div>

            </div>

            <div id="c-Images">
                <h2>More photos</h2>
                <div id="Images">
                    @foreach($Images as $image)
                    <img id="Product-image_dz" class="Product-image_dz"  onclick="myFunction(this);" src="/Images/Plants/{{$image->reference}}">
                    <!-- <img id="Product-image_dz" src="/Images/Product-image2.png">
                    <img id="Product-image_dz" src="/Images/Product-image3.png">
                    <img id="Product-image_dz" src="/Images/Product-image4.png"> -->
                    @endforeach
                    <!-- <svg class="Overlay">
                        <rect id="Overlay" rx="10" ry="10" x="0" y="0" width="177" height="178">
                        </rect>
                    </svg>
                    <svg class="Overlay_d">
                        <rect id="Overlay_d" rx="10" ry="10" x="0" y="0" width="177" height="178">
                        </rect>
                    </svg>
                    <svg class="Overlay_ea">
                        <rect id="Overlay_ea" rx="10" ry="10" x="0" y="0" width="177" height="178">
                        </rect>
                    </svg> -->
                </div>
               
            </div>
        </div>

    </section>
    @endforeach

    <div class="_blank"></div>

    <!-- Plants Related to the same family -->
    <div id="Related-Container">
        <div id="R-Title">
            <h2>More {{$myfamily}} Plants</h2>
            <a href="../Shop/{{$myfamily}}">Browse all</a>
        </div>

        <div id="Products-related">
            <!-- Select from db -->
            @foreach($RelatedPlants as $related)
            <div class="r-Product">
                <div class="ProductImage">
                    <div class="PlantProfile-img">
                        <img class="Product-image"   src="/Images/Plants/{{$related->reference}}">
                        @if(Auth::check())
                        <button class="Product-fav">
                            <input type="hidden" class="LikeProduct" value="{{$related->id}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                    stroke="#676878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        @foreach($favorites as $favorite)
                        <?php $className='Product-fav Product-fav-liked' ?>
                        @if($favorite->id_plants == $related->id && $favorite->id_User ==  Auth::id() )
                        <?php $className .= ' Product-fav-liked' ?>
                        <button class="{{$className}}">
                            <input type="hidden" class="LikeProduct" value="{{$related->id}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                    stroke="#676878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        @endif
                        @endforeach
                        <button class="btn-AddCarte">
                            <input type="hidden" class="addCarte" value="{{$related->id}}">
                            <img src="/Images/btn-AddToCart.png" class="Addme" alt="">
                            <img src="/Images/Added.png" class="Addedme" alt="">
                        </button>
                        @foreach($shopping_cartes as $shopping_carte)
                        <?php $classCarte='btn-AddCarte btn-AddCarte-Added' ?>
                        @if($shopping_carte->id_plants == $related->id && $shopping_carte->id_User == Auth::id() )
                        <?php $classCarte .= ' btn-AddCarte-Added' ?>
                        <button class="{{$classCarte}}">
                            <input type="hidden" class="addCarte" value="{{$related->id}}">

                            <img src="/Images/btn-AddToCart.png" class="Addme" alt="">
                            <img src="/Images/Added.png" class="Addedme" alt="">
                        </button>
                        @endif
                        @endforeach
                        @endif

                    </div>
                    <a href="../Product/{{$related->id}}"><h3>{{$related->name}}</h3></a>
                </div>
            </div>
            @endforeach
          


        </div>
        <!-- <div id="btn-AddToCarte">
            <svg class="Ellipse_4_b">
                <linearGradient id="Ellipse_4_b" spreadMethod="pad" x1="0.5" x2="0.5" y1="0" y2="1">
                    <stop offset="0" stop-color="#00a2a7" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#06787c" stop-opacity="1"></stop>
                </linearGradient>
                <ellipse id="Ellipse_4_b" rx="16.5" ry="16.5" cx="16.5" cy="16.5">
                </ellipse>
            </svg>
            <img id="icons8_plus_math_100px" src="icons8_plus_math_100px.png"
                srcset="icons8_plus_math_100px.png 1x, icons8_plus_math_100px@2x.png 2x">
        </div>
        <svg class="heart" viewBox="3 5 24.987 21.328">
            <path id="heart"
                d="M 4.829664707183838 6.829664707183838 C 4.249589920043945 7.409726142883301 3.78945255279541 8.098367691040039 3.475517749786377 8.856268882751465 C 3.161583185195923 9.614169120788574 3 10.42648410797119 3 11.24682331085205 C 3 12.06717586517334 3.161583185195923 12.87953472137451 3.475517749786377 13.63733673095703 C 3.78945255279541 14.39527702331543 4.249589920043945 15.08395195007324 4.829664707183838 15.66392803192139 L 15.4935359954834 26.32785797119141 L 26.1574649810791 15.66392803192139 C 27.32908058166504 14.49245071411133 27.98721313476563 12.90355014801025 27.98721313476563 11.24682331085205 C 27.98721313476563 9.590069770812988 27.32908058166504 8.001169204711914 26.1574649810791 6.829664707183838 C 24.98598861694336 5.658159732818604 23.39708709716797 5.000013828277588 21.74030494689941 5.000013828277588 C 20.08366012573242 5.000013828277588 18.49476051330566 5.658159732818604 17.32314300537109 6.829664707183838 L 15.4935359954834 8.659273147583008 L 13.6639289855957 6.829664707183838 C 13.08395290374756 6.249589443206787 12.39527797698975 5.78945255279541 11.63737773895264 5.475517749786377 C 10.87948036193848 5.161582946777344 10.06716346740723 5 9.246825218200684 5 C 8.426484107971191 5 7.614168643951416 5.161582946777344 6.856268882751465 5.475517749786377 C 6.098369598388672 5.78945255279541 5.409725666046143 6.249589443206787 4.829664707183838 6.829664707183838 Z">
            </path>
        </svg> -->
        <!-- </div> -->


    </div>

    <div class="_blank"></div>
    <div class="_blank"></div>
    <div class="_blank"></div>
    <div class="_blank"></div>


    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/Products.js')}}"></script>
@endsection