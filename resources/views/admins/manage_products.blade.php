
@extends('admins.dashboard_layout.header')
@section('title','Management Products')

@section('management-products')
    <div class="management-products">
        
        <div class="view-container">
            <div class="view-content">
                <div class="view">
                <table>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Title</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Product Created At</th>
                        <th>Product Last Update</th>
                        <th>Product Control</th>
                    </tr>
                    @foreach ($management_prducts as $management_prducts_item)
                        <tr class="product_item" data-id="{{$management_prducts_item['id']}}">
                            <td><img style="width:100px; height:100px;" src="{{$management_prducts_item['products_img']}}" alt="Products Image"></td>
                            <td class="product-title" data-id="{{$management_prducts_item['id']}}">{{$management_prducts_item['products_title']}}</td> 
                            <td class="product-decrption" data-id="{{$management_prducts_item['id']}}">{{$management_prducts_item['products_decrption']}}</td>  
                            <td class="product-price" data-id="{{$management_prducts_item['id']}}">{{$management_prducts_item['products_price']}}</td>  
                            <td>{{$management_prducts_item['created_at']}}</td>  
                            <td class="product-last-update" data-id="{{$management_prducts_item['id']}}">{{$management_prducts_item['updated_at']}}</td> 
                            <td class="cotrol-btn">
                                <span style="color: #ffffff; background-color:blue; padding:10px; border-radius:5px; font-weight: bold; cursor: pointer;" class="testing" data-id="{{$management_prducts_item['id']}}">Edite  </span>
                             
                                <span style="color: #ffffff; background-color:red; padding:10px; border-radius:5px; font-weight: bold; cursor: pointer;" class="delete_product" data-id="{{$management_prducts_item['id']}}">Delete</span>    
                          </td> 
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('management-products-edit-form')

  <div class="edite-product-form-container" id="edit_product">
      <div class="edit-product-form-content">
        <form class="edit-form-box" id="edit_form">
            <div class="close-edit-product-form-box" id="edit_close_btn">
                X
            </div>
            <div class="edit-product-input">
                <input type="hidden" name="product_id" id="product_id" placeholder="Product ID">
            </div>

            <div class="edit-product-input">
                <input type="text" name="product_title" id="product_title" placeholder="Product Title">
            </div>
            <div class="edit-product-input">
                <textarea name="product_description" id="product_description" placeholder="Product Description"></textarea>
            </div>
            <div class="edit-product-input">
                <input type="number" name="product_price" id="product_price" placeholder="Product Price">
            </div>
            <div class="edit-product-input">
            <input type="submit" name="edite_product_btn" id="edite_product_btn" value="Save Chnage">
            </div>
        </form>
      </div>
  </div>
@endsection


@extends('admins.dashboard_layout.footer')
