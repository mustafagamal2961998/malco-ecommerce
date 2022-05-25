<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Include Css File --}}
    <link rel="stylesheet" href="assist/style/add/new_product.css">
    <title>Add Products</title>
</head>
    <body>
       

        <div class="add-new-product-contaniner">
          <div class="add-new-product-content">
              <div class="add-new-product">
                <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())  
                    <div class="alert alert-ganger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach 
                        </ul>  
                     </div>          
                    @endif
                    <div class="product-input">
                        {{-- <label for="product_department">Product Department</label> <br> --}}
                        <select name="department" id="product_department">
                            <option value="default" selected>Department</option>    
                            <option value="skin_care">Skin Care</option>    
                            <option value="hair_care">Hair Care</option>    
                            <option value="body_care">Body Care</option>   
                            <option value="nail_care">Nail Care</option>   
                            <option value="make_up">Make Up</option>    
                            <option value="perfume">Perfume</option>    
                            <option value="womens_accessories">Women`s Accessories</option>    
                            <option value="ramadan_accessories">Ramadan Accessories</option>    
                            <option value="mans_accessories">Man`s Accessories</option>    
                            <option value="womens_bages">Women`s Bages</option>    
                            <option value="womens_clothes">Women`s Clothes</option> 
                            <option value="toys">Toys</option> 
                            <option value="gifts">Gifts</option>    
                        </select>
                    </div>
                    <div class="product-input">
                        {{-- <label for="product_title">Product Title</label><br> --}}
                        <input type="text" name="product_title"  id="product_title" placeholder="Title">
                    </div>
                    <br>
                  
                    <div class="product-input">
                        {{-- <label for="product_price">Product Price</label><br> --}}
                        <input type="number" name="product_price" id="product_price" placeholder="Price">
                    </div>
                   
                    <div class="product-input">
                        {{-- <label for="product_discount">Product Discount</label><br> --}}
                        <input type="number" name="product_discount" id="product_discount" placeholder="Discount">
                    </div>
                    <br>
                    <div class="product-input">
                        {{-- <label for="product_description">Product Decription</label><br> --}}
                        <textarea name="product_description" id="product_description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="product-input">
                        {{-- <label for="product_img">Product Image</label><br> --}}
                        <input type="file" name="product_img" class="drop-zone__input" id="product_img">
                    </div>
                    <br>
                    <div class="product-input">
                        <input type="submit" name="upload_product" value="Add Product">
                    </div>    
                </form>
              </div>
          </div>
        </div>
    </body>
</html>