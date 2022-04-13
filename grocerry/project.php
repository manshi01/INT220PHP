<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Cart</title>
    <style >
        body {
  padding-top: 80px;
}

.show-cart li {
  display: flex;
}
.card {
  margin-bottom: 20px;
}
.card-img-top {
  width: 200px;
  height: 200px;
  align-self: center;
}
    </style>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



</head>
<body>

    <!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></button></div>
    </div>
</nav>


<!-- Main -->
<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="haldi.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Turmeric</h4>
    <p class="card-text">Price: Rs 20</p>
    <a href="#" data-name="turmeric" data-price="20" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="Pulse.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Pulse</h4>
    <p class="card-text">Price: Rs 200</p>
    <a href="#" data-name="pulse" data-price="200" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="Rice.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Rice</h4>
    <p class="card-text">Price: Rs 1600</p>
    <a href="#" data-name="rice" data-price="1600" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>





    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="salt.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Salt</h4>
    <p class="card-text">Price: Rs 20</p>
    <a href="#" data-name="salt" data-price="20" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="sugar.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">sugar</h4>
    <p class="card-text">Price: Rs 80</p>
    <a href="#" data-name="sugar" data-price="80" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="eggs.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Eggs</h4>
    <p class="card-text">Price: Rs 180</p>
    <a href="#" data-name="eggs" data-price="180" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>




       <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="dahi.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Yogurt</h4>
    <p class="card-text">Price: Rs 40</p>
    <a href="#" data-name="dahi" data-price="40" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="ketchup.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Ketchup</h4>
    <p class="card-text">Price:Rs 80</p>
    <a href="#" data-name="ketchup" data-price="80" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="milk.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Milk</h4>
    <p class="card-text">Price: Rs 40</p>
    <a href="#" data-name="milk" data-price="40" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>




</div>

  
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='register.php';">Order now</button>
      </div>
    </div>
  </div>
</div> 
    

<script>


    

var shoppingCart = (function() {

  cart = [];
  
  // Constructor
  function Item(name, price, count) {
    this.name = name;
    this.price = price;
    this.count = count;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  
  var obj = {};
  
  
  obj.addItemToCart = function(name, price, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }

  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  
  return obj;
})();


$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(name, price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>" 
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = " 
      + "<td>" + cartArray[i].total + "</td>" 
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();

</script>



</body>
</html>