<link rel="stylesheet" href="css/main.css">
<title>Moulay Spot - Welcome</title>

<!-- Header Lyout -->
@extends('layouts.master')

@section('content')


    <!-- Hero -->
    <div id="Hero">
        <!-- <svg style="width:inherit;height:inherit;overflow:visible;">
            <rect fill="url(#Hero-image_fh_pattern)" width="100%" height="100%"></rect>
            <pattern elementId="Hero-image_fh" id="Hero-image_fh_pattern" x="0" y="0" width="100%" height="100%">
                <image x="0" y="0" width="100%" height="100%" href="Hero-image_fh_pattern.png"
                    xlink:href="Hero-image_fh_pattern.png"></image>
            </pattern>
            <img id="Hero-image" src="Hero-image.png" srcset="Hero-image.png 1x, Hero-image@2x.png 2x">
        </svg> -->
        <div id="hero-left">
            <!-- Hero Title -->
            <div id="hero-title">
                <h2><span>Safi</span> At The Spot</h2>
                <h1>Minimal & Friendly<br>Indoor - Outdoor<br><span>Plants</span>
                </h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas. </p>
            </div>
            <div id="Families">
                <h2>Find You next little family baby</h2>
                <div id="FamilyContainer">
                    <!-- Aloaceae -->
                    <div id="Family">
                        <div class="PicturePlant">
                            <img src="Images/Aloaceae-icon.png" alt="Aloaceae-icon">
                        </div>
                        <a href="../Shop/Aloaceae" class="FamilyName">Aloaceae</a>
                    </div>
                    <!-- Cactaceae -->
                    <div id="Family">
                        <div class="PicturePlant">
                            <img src="Images/cactus-icon.png" alt="Aloaceae-icon">
                        </div>
                        <a href="../Shop/Cactaceae" class="FamilyName">Cactaceae</a>
                    </div>
                    <!-- Araceae -->
                    <div id="Family">
                        <div class="PicturePlant">
                            <img src="Images/Monstera-icon.png" alt="Aloaceae-icon">
                        </div>
                        <a href="../Shop/Araceae" class="FamilyName">Araceae</a>
                    </div>
                    <!-- Sansevieria -->
                    <div id="Family">
                        <div class="PicturePlant">
                            <img src="Images/SnakePlants-icon.png" alt="Aloaceae-icon">
                        </div>
                        <a href="../Shop/Sansevieria" class="FamilyName">Sansevieria</a>
                    </div>
                </div>


            </div>
        </div>
        <img id="Hero-image" src="Images/Hero-image.png" alt="Hero Image">
    </div>

    <div class="_blank"></div>

    <section id="Recommended-Products">
        <h1>You Might Like</h1>
        <div class="Products">
        @foreach($Plants as $plant)
        <div class="Product">
                <img src="Images/Plants/{{$plant->reference}}" alt="Product-image">
                <div class="ProductInfo">
                    <div class="Left">
                        <a href="Product/{{$plant->id}}" class="ProductName">{{$plant->name}}</a><br>
                        <span class="Product-Family-Name">{{$plant->family}}</span>
                    </div>

                    <span class="Price">{{$plant->price}}</span>
                </div>
            </div>
        @endforeach
         
            <!-- Product -->
            <!-- <div class="Product">
                <img src="Images/Product-image.png" alt="Product-image">
                <div class="ProductInfo">
                    <div class="Left">
                        <span class="ProductName">Medium Size Cactus </span><br>
                        <span class="Product-Family-Name">Cactaceae</span>
                    </div>

                    <span class="Price">80DH</span>
                </div>
            </div> -->
            <!-- Product -->
            <!-- <div class="Product">
                <img src="Images/Product-image.png" alt="Product-image">
                <div class="ProductInfo">
                    <div class="Left">
                        <span class="ProductName">Medium Size Cactus </span><br>
                        <span class="Product-Family-Name">Cactaceae</span>
                    </div>
                    <span class="Price">80DH</span>
                </div>
            </div> -->


        </div>
        <div class="_blank"></div>

        <!-- Gallery -->
        <div id="Gallery">
            <h1>Gallery</h1>
            <div id="GalleryPhotos" onscroll='checkEdge()'>
                <img id="ImageChild1" src="Images/NoPath - Copy (19).png">
                <img id="ImageChild2" src="Images/NoPath - Copy (20).png">
                <img id="ImageChild3" src="Images/NoPath - Copy (21).png">
                <img id="ImageChild4" src="Images/NoPath - Copy (22).png">
                <img id="ImageChild5" src="Images/NoPath - Copy (23).png">
                <img id="ImageChild6"
                    src="Images/the-sill_faux-snake-plant-laurentii_gallery_medium_all_all_03_768x.png">

            </div>

        </div>

        <div class="_blank"></div>
    </section>

    <!-- Footer -->
    
    <!--  -->



    <!-- <script>
        var counter = 6;
        var childWidth = document.getElementById("ImageChild1").offsetWidth;
        function checkEdge(event) {
            var parent = document.getElementById("GalleryPhotos");
            if (parent.scrollLeft == parent.scrollWidth - parent.offsetWidth) {
                //Detected scroll to the edge of the right
                counter = ((counter + 1) % 11);
                parent.appendChild(document.getElementById("ImageChild" + (counter + 1)));
                parent.scrollLeft -= childWidth;
            }

            if (!parent.scrollLeft) {
                //Left edge
                counter = ((counter - 1) % 11);
                if (counter == -2) counter = 6;
                parent.insertBefore((document.getElementById("ImageChild" + (counter + 2))), parent.firstChild);
                parent.scrollLeft += childWidth;
            }
        }

    </script> -->

@endsection
