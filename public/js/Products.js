//Like This Product
$(".Product-fav").on("click", function (e) {
    var id_Plant = $(this).find('.LikeProduct').val();
    alert(id_Plant);
    let product_added = false;
    product_added = $(e.currentTarget).hasClass('Product-fav-liked');
    product_added = product_added.toString();
    $.ajax({
        url: '../Product/' + id_Plant + '/Like',
        type: 'GET',
        data: { product_added: product_added },
        success: function (data) {
            $(e.currentTarget).toggleClass('Product-fav-liked');
        }
    });

});


//Add To Carte
$('.btn-AddCarte').on("click", function (e) {
    var id_Plant = $(this).find('.addCarte').val();
    let product_added = false;
    product_added = $(e.currentTarget).hasClass('btn-AddCarte-Added');
    product_added = product_added.toString();


    $.ajax({
        url: '../Product/' + id_Plant + '/AddCarte',
        type: 'GET',
        data: { product_added: product_added },
        success: function (data) {
            $(e.currentTarget).toggleClass('btn-AddCarte-Added');
        }

    });

    // if (product_added) {
    //     $(this).find('.Addme').hide();
    //     $(this).find('.Addedme').show();
    // }
    // else {
    //     $(this).find('.Addme').show();
    //     $(this).find('.Addedme').hide();
    // }



});

$("#btn-c-P-AddtoCart").click((e) => {
    $("#btn-c-P-AddtoCart").html('✓ Added to carte');
});
//     // $("#btn-c-P-AddtoCart").hide();
//     // $("#btn-c-P-AddtoCarts").show();

//     $("#btn-c-P-AddtoCart").html('✓ Added to carte');
//     // product_added = $(e.currentTarget).hasClass('btn-AddCarte-Added');
//     // if (product_added) {
//     //     $("#btn-c-P-AddtoCart").html('s');
//     // }
//     // else {
//     //     $("#btn-c-P-AddtoCart").html('✓ Added to carte');
//     // }
//     // $("#btn-c-P-AddtoCart").removeClass('Product-fav-liked');
//     // if ($("#btn-c-P-AddtoCart").html == "✓ Added") {
//     //     $("#btn-c-P-AddtoCart").html('d');
//     // }
// });







//     // 
//    
//     
//     //get Plant_Liked condition
//     var product_added = product_added.toString();
//     // $.ajax({
//     //     url: '/Product/' + id_Plant + '/AddCarte',
//     //     type: 'GET',
//     //     data: { product_added: product_added },
//     //     success: function (data) {
//     //         $(e.currentTarget).toggleClass('btn-AddCarte-Added');
//     //     }
//     // });
// });


//Tabbed Product Image-Cataloge
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.innerHTML = imgs.alt;
    var btns = document.getElementsByClassName("Product-image_dz");
    for (var i = 0; i < btns.length; i++) {
        btns[i].classList.remove("activeImg");
    }
    imgs.classList.add("activeImg");
}

//Delete From Carte
$(".Deletes").on("click", function (e) {
    // let myplant = parent.find('.quantity-wrp').val();
    var myplant = $(this).parent('.Product-Details').find('.myPlant').val();
    $.ajax({
        url: '../ShoppingCarte/' + myplant + '/remove',
        type: 'GET',
        data: { myplant: myplant },
        success: function (data) {
            $(e.currentTarget).parent('.Product-Details').hide();
        }
    });


});

// //Tabbed Product Image-Cataloge
// function myFunction(imgs) {
//     var expandImg = document.getElementById("expandedImg");
//     expandImg.src = imgs.src;
//     expandImg.innerHTML = imgs.alt;
//     var btns = document.getElementsByClassName("Product-image_dz");
//     for (var i = 0; i < btns.length; i++) {
//         btns[i].classList.remove("activeImg");
//     }
//     imgs.classList.add("activeImg");
// }