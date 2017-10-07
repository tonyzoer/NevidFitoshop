/* Set rates + misc */
var taxRate = 0.00;
var shippingRate = 35.00;
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});

// $('#checkout').click(function(){
//   // simpleCart.checkout();
//   // sendMail();
// })
/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;

  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });

  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;

  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  var id=productRow[0].id;
  simpleCart.find(id).quantity(quantity);
  simpleCart.save();
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  // var id=productRow.getElementById("id");
  var id=productRow[0].id;
  simpleCart.find(id).remove();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    shopingCart.fing
    recalculateCart();
  });
}
function downloadFromSimpleCart (){
  var shopingCart=document.getElementById("cart");
  var columnLabels=document.getElementById("column-labels");
  var items=simpleCart.items();
  for (var i = 0; i < items.length; i++) {
      var productDiv=document.createElement("div");
      productDiv.className="product";

      var imgDiv= document.createElement("div");
      imgDiv.className="product-image";
      var imgimg=document.createElement("img");
      imgimg.src=items[i].get("imgsrc");
      imgDiv.appendChild(imgimg);
      productDiv.appendChild(imgDiv);

      var productDetailsDiv=document.createElement("div");
      productDetailsDiv.className="product-details";
      var productTitleDiv=document.createElement("div");
      productTitleDiv.className="product-title";
      productTitleDiv.innerHTML=items[i].get("name");
      productDetailsDiv.appendChild(productTitleDiv);

      var productTitleInputHidden=document.createElement("input");
      productTitleInputHidden.type="hidden";
      productTitleInputHidden.name="item_name_"+i;
      productTitleInputHidden.value=items[i].get("name");
      productDetailsDiv.appendChild(productTitleInputHidden);

      var productDescriptionP=document.createElement("p");
      productDescriptionP.className="product-description";
      // TODO: set DESC;
      // productDescriptionP.value=
      productDetailsDiv.appendChild(productDescriptionP);
      productDiv.appendChild(productDetailsDiv);

      var priceDiv=document.createElement("div");
      priceDiv.className="product-price";
      priceDiv.innerHTML=items[i].price();
      productDiv.appendChild(priceDiv);

      var priceInputHidden=document.createElement("input");
      priceInputHidden.type="hidden";
      priceInputHidden.name="item_price_"+i;
      priceInputHidden.value=items[i].price();
      productDiv.appendChild(priceInputHidden);

      var quantityDiv=document.createElement("div");
      quantityDiv.className="product-quantity";
      var quantityInput=document.createElement("input");
      quantityInput.type="number";
      quantityInput.min="1";
      quantityInput.value=items[i].quantity();
      quantityInput.name="item_quantity_"+i;
      quantityDiv.appendChild(quantityInput);
      productDiv.appendChild(quantityDiv);

      var removeDiv=document.createElement("div");
      removeDiv.className="product-removal";
      var removeButton=document.createElement("button");
      removeButton.className="remove-product";
      removeButton.type="button";
      removeButton.innerHTML="Видалити";
      removeDiv.appendChild(removeButton);
      productDiv.appendChild(removeDiv);


      var productLinePriceHIddenInput=document.createElement("input");
      productLinePriceHIddenInput.className="product-line-price-hidden-input";
      productLinePriceHIddenInput.innerHTML=items[i].price()*items[i].quantity();
      productLinePriceHIddenInput.type="hidden";
      productLinePriceHIddenInput.name="item_price_sum_"+i;
      productDiv.appendChild(productLinePriceHIddenInput);


      var productLinePriceDiv=document.createElement("div");
      productLinePriceDiv.className="product-line-price";
      productLinePriceDiv.innerHTML=items[i].price()*items[i].quantity();
      productDiv.appendChild(productLinePriceDiv);

      var productLinePriceInputHidden=document.createElement("input");
      productLinePriceInputHidden.type="hidden";
      productLinePriceHIddenInput.name="item_price_sum_"+i;
      productLinePriceHIddenInput.value= items[i].price()*items[i].quantity();
      productDiv.appendChild(productLinePriceHIddenInput);

      productDiv.id=items[i].id();
      shopingCart.insertBefore(productDiv,columnLabels.nextSibling);

  }
  var itemCount=document.createElement("input");
  itemCount.type="hidden";
  itemCount.name="itemCount";
  itemCount.value=simpleCart.items().length;
  shopingCart.insertBefore(itemCount,columnLabels.nextSibling);

  $('.product-quantity input').change( function() {
    updateQuantity(this);
  });

  $('.product-removal button').click( function() {
    removeItem(this);
  });
  recalculateCart();
};
downloadFromSimpleCart();

// function sendMail() {
//   var shopingCart=document.getElementById("cart");
//     var link = "mailto:okamanahi@gmail.com"
//              + "?cc=myCCaddress@example.com"
//              + "&subject=" + "Замовлення"
//              + "&body=" +"<html><head></head><body>"+  shopingCart.innerHTML+"</body></html>";
//
//     window.location.href = link;
// }
