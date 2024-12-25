<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .detail-box{
          padding: 15px;
        }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    
    <!-- end header section -->
  </div>

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach($product as $products)


        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            
              <div class="img-box">
              <img src="{{ asset('product/' . $products->image) }}" height="120px" width="120px" alt="Product Image">
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6>
                <h6>
                  Price
                  <span>{{$products->price}}</span>
                </h6>
              </div>
              <div style="padding: 15px"><a class="btn btn-danger" href="{{url('product_details',$products->id)}}">Details</a>
            <a href="{{url('add_cart', $products->id)}}" class="btn btn-primary">Add to cart</a>
            </div>
            
          </div>
        </div>
@endforeach


              </div>
    </div>
  </section>

</body>

</html>