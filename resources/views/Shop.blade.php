<link rel="stylesheet" href="{{ asset('css/Product.css') }}">
<title>Shop</title>

<!-- Header Lyout -->
@extends('layouts.master')

<!-- myBody -->
@section('content')
    <!-- Selector -->
    <div id="Families">
        <h2>Find You next little family baby</h2>
       
        <div id="FamilyContainer">
            <!-- Selected -->
            @if($selectedSelector == "All Families")
            <?php $selected_Selector='selected' ?>
            <?php $showme='PlantActive' ?>
            <?php $hideme='PlantNotActive' ?>
            @else
            <?php $showme='PlantNotActive' ?>
            <?php $hideme='PlantActive' ?>
            @endif
            
            <a href="../Shop">
            <div class="Family {{$selected_Selector ?? '' }}">
                <div class="PicturePlant">
                    <img class="{{$showme ?? ''}}" src="{{ asset('Images/Icons/All.png')}}" alt="All Families">
                    <img class="{{$hideme ?? ''}}" src="{{ asset('Images/Icons/AllnotActive.png')}}" alt="All Families">
                </div>
                <a href="" class="FamilyName">All</a>
            </div>
            </a>
            <!-- Aloaceae -->
            @if($selectedSelector == "Aloaceae")
            <?php $AloaceaeSelected='selected' ?>
            <?php $showme='PlantActive' ?>
            <?php $hideme='PlantNotActive' ?>
            @else
            <?php $showme='PlantNotActive' ?>
            <?php $hideme='PlantActive' ?>
            @endif
            <a href="../Shop/Aloaceae">
            <div class="Family {{$AloaceaeSelected ?? '' }}">
                <div class="PicturePlant">
                    <img class="{{$showme ?? ''}}" src="{{ asset('Images/Icons/Aloaceae-white.png')}}" alt="Aloaceae-icon">
                    <img class="{{$hideme ?? ''}}" src="{{ asset('Images/Icons/Aloaceae-icon.png')}}" alt="Aloaceae-icon">
                </div>
                <a class="FamilyName">Aloaceae</a>
            </div>
            </a>

            <!-- Cactaceae -->
            @if($selectedSelector == "Cactaceae")
            <?php $CactaceaeSelected='selected' ?>
            <?php $showme='PlantActive' ?>
            <?php $hideme='PlantNotActive' ?>
            @else
            <?php $showme='PlantNotActive' ?>
            <?php $hideme='PlantActive' ?>
            @endif
            <a href="../Shop/Cactaceae">
            <div class="Family  {{$CactaceaeSelected ?? '' }}">
                <div class="PicturePlant">
                    <img class="{{$showme ?? ''}}" src="{{ asset('Images/Icons/cactus-white.png')}}" alt="Aloaceae-icon">
                    <img class="{{$hideme ?? ''}}" src="{{ asset('Images/Icons/cactus-icon.png')}}" alt="Aloaceae-icon">
                </div>
                <a class="FamilyName">Cactaceae</a>
            </div>
            </a>
            <!-- Araceae -->
            @if($selectedSelector == "Araceae")
            <?php $AraceaeSelected='selected' ?>
            <?php $showme='PlantActive' ?>
            <?php $hideme='PlantNotActive' ?>
            @else
            <?php $showme='PlantNotActive' ?>
            <?php $hideme='PlantActive' ?>
            @endif
            <a href="../Shop/Araceae">
            <div class="Family {{$AraceaeSelected ?? '' }}">
                <div class="PicturePlant">
                    <img class="{{$showme ?? ''}}" src="{{ asset('Images/Icons/Monstera-white.png')}}" alt="Aloaceae-icon">
                    <img class="{{$hideme ?? ''}}" src="{{ asset('Images/Icons/Monstera.png')}}" alt="Aloaceae-icon">
                </div>
                <a class="FamilyName">Araceae</a>
            </div>
            </a>
            <!-- Sansevieria -->
            @if($selectedSelector == "Sansevieria")
            <?php $SansevieriaSelected='selected' ?>
            <?php $showme='PlantActive' ?>
            <?php $hideme='PlantNotActive' ?>
            @else
            <?php $showme='PlantNotActive' ?>
            <?php $hideme='PlantActive' ?>
            @endif
            <a href="../Shop/Sansevieria">
            <div class="Family {{$SansevieriaSelected ?? '' }}">
                <div class="PicturePlant">
                    <img class="{{$showme ?? ''}}" src="{{ asset('Images/Icons/SnakePlants-white.png')}}" alt="Aloaceae-icon">
                    <img class="{{$hideme ?? ''}}" src="{{ asset('Images/Icons/SnakePlants.png')}}" alt="Aloaceae-icon">
                </div>
                <a   class="FamilyName">Sansevieria</a>
            </div>
            </a>
        </div>
    </div>
    <!--  -->
    <div class="_blank"></div>
    
    <h2>We have {{$CountPlants}} plants from {{$selectedSelector}}</h2>
    <section id="ShowProducts">
    @foreach($Plants as $plant)
        <div class="Product">
            <!-- <button class="Product-fav">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                        stroke="#676878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button> -->

            <img src="/Images/Plants/{{$plant->reference}}" class="MainProductImage" alt="Product-image">

            <div class="ProductInfo">
                <div class="Left">
                    <span class="ProductName"><a href="../Product/{{$plant->id}}">{{$plant->name}}</a></span><br>
                    <span class="Product-Family-Name">{{$plant->family}}</span>
                    <!-- Add To Carte -->
                    <!-- <button class="btn-AddCarte">
                        <img src="/Images/btn-AddToCart.png" class="Addme" alt="">
                        <img src="/Images/Added.png" class="Addedme" alt="">
                    </button> -->
                </div>

                <span class="Price">{{$plant->price}}</span>


            </div>

        </div>
    @endforeach    
    </section>
@endsection
