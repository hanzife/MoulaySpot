//Like This Product
$(".Product-fav").click((e) => {
    let profile_liked = false;
    //#region Replace this code with a request to check wether this profile is liked or not
    profile_liked = $(e.currentTarget).hasClass('Product-fav-liked');
    //#endregion
    // send a request to update DB data based on profile_liked status, upon success execute the code below
    $(e.currentTarget).toggleClass('Product-fav-liked');
});

//Add To Carte
$(".btn-AddCarte").click((e) => {
    let product_added = false;
    product_added = $(e.currentTarget).hasClass('btn-AddCarte-Added');
    $(e.currentTarget).toggleClass('btn-AddCarte-Added');
});

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