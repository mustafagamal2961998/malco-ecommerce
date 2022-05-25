// Start Javascrip code

// Get [ Data ] for Product for edit from managment products
$(document).ready(function(){

    $('.testing').on('click',function(){
     
        var product_id = $(this).data('id');
            $.ajax({
                url:'/manage_products_view/'+product_id,
                dataType: "json",
                type:'GET',
                data:{
                    'product_id':product_id
                },
                success:function (data){
                    $('.edite-product-form-container').show();

                     $('#product_title').val(data.product_data.products_title);
                     $('#product_description').val(data.product_data.products_decrption);
                     $('#product_price').val(data.product_data.products_price);
                     $('#product_id').val(data.product_data.id);

                     $('#edit_close_btn').on('click',function(){

                        $('#edit_product').hide();
                    
                    });
                }
        });

    });

});


// Delete Product from managment products
$(document).ready(function(){

    $('.delete_product').on('click',function(){
      
        var product_id = $(this).data('id');
            $.ajax({
                url:'/delete_product/'+product_id,
                dataType: "json",
                type:'GET',
                data:{
                    'product_id':product_id
                },
                success:function (data){
                    $('.product_item[data-id='+product_id+']').hide();
                    console.log(data);

                }
        });

    });

});


// Update Product from managment products
$(document).ready(function(){

    $("#edit_form").submit(function(e){
        e.preventDefault();
    });
    $('#edite_product_btn').on('click',function(){
        
            var product_id = $("#product_id").val();
            var product_title = $("#product_title").val();
            var product_decription = $("#product_description").val();
            var product_price = $("#product_price").val();

            $.ajax({
                url:'/edit_product/'+product_id,
                dataType: "json",
                type:'GET',
                data:{
                    'product_id':product_id,
                    'product_title':product_title,
                    'product_decription':product_decription,
                    'product_price':product_price

                },
                success:function (data){
                    
                    $('#edit_product').hide();
                    $('.product-title[data-id='+product_id+']').text(product_title);
                    $('.product-decrption[data-id='+product_id+']').text(product_decription);
                    $('.product-price[data-id='+product_id+']').text(product_price);
                  
                    console.log(data.msg);
                    
                }
        });

    });

});


// Show Left Menu 
$(document).ready(function(){

    $('.show-left-menu-icon-content').on('click',function(){

        $(".content-container").toggle(200, function(){
            
            $('.show-left-menu-icon-container').css('left','293px');

            
          });

    });
});

