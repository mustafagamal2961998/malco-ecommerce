<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
    <body>
        <div class="delete-product">
        <div class="products-details-container">
            
                <div class="products-details-content">
                    <div class="products-detalis">
                        <div class="products-detalis-image">
                            <img src="../../{{$product_details->products_img}}" alt="Product Detalis Image">
                        </div>
                        <div class="products-detalis-title"><h4>{{$product_details->products_title}}</h4></div>
                        <div class="products-detalis-decription"><p>{{$product_details->products_decrption}}</p></div>
                        <div class="products-detalis-price">{{$product_details->products_price}}</div>
                    </div>
                </div>
        </div>
    </body>
</html>