<script>  
$(document).ready(function(){

  load_product();

  load_cart_data();
    
  function load_product()
  {
    $.ajax({
      url:"fetch_item.php",
      method:"POST",
      success:function(data)
      {
        $('#display_item').html(data);
      }
    });
  }

  function load_cart_data()
  {
    $.ajax({
      url:"fetch_cart.php",
      method:"POST",
      dataType:"json",
      success:function(data)
      {
        $('#cart_details').html(data.cart_details);
        $('.total_price').text(data.total_price);
        $('.badge').text(data.total_item);
      }
    });
  }

  $('#cart-popover').popover({
    html : true,
        container: 'body',
        content:function(){
          return $('#popover_content_wrapper').html();
        }
  });

  $(document).on('click', '.add_to_cart', function(){
    var product_id = $(this).attr("id");
    var product_name = $('#name'+product_id+'').val();
    var product_price = $('#price'+product_id+'').val();
    var featured_img = $('#featured_img'+product_id+'').val();
    var product_quantity = $('#quantity'+product_id).val();
    var action = "add";
    if(product_quantity > 0)
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, featured_img:featured_img, action:action},
        success:function(data)
        {
          // load_cart_data();
          // location.reload(); 
          alert("Item has been Added into Cart");
          location.reload();
        }
      });
    }
    else
    {
      alert("lease Enter Number of Quantity");
    }
  });

  $(document).on('click', '.delete', function(){
    var product_id = $(this).attr("id");
    var action = 'remove';
    if(confirm("Are you sure you want to remove this product?"))
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, action:action},
        success:function()
        {
          
          alert("Item has been removed from Cart");
          location.reload();
        }
      })
    }
    else
    {
      return false;
    }
  });

  $(document).on('click', '#clear_cart', function(){
    var action = 'empty';
    $.ajax({
      url:"action.php",
      method:"POST",
      data:{action:action},
      success:function()
      {
        alert("Your Cart has been clear");
        location.reload();
      }
    });
  });

// update cart

  $(document).on('click', '.update_cart', function(){
    var product_id = $(this).attr("id");
    var product_quantity = $('#quantity'+product_id).val();
    var action = 'update_cart';
    if(confirm("Want to update this product quantity?"))
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, action:action,product_quantity:product_quantity},
        success:function()
        {
          
          // alert("Cart update");
          location.reload();
        }
      })
    }
    else
    {
      return false;
    }
  });




    
});

</script>