@extends('frontend.layouts.master')
@section('content')
<br>
<br>
<br>


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product list</h2>
          <hr>
   
        </div>

      </div>
    </section><!-- End About Section -->

      <!-- Product -->
  <section class="bg0 p-t-23 p-b-140">
    <div class="container">
      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
      

          <a href=" {{route('produc.list')}} "  class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1"> All Products</a>

                @foreach($categories as $category)
                          <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" href="{{route('category.wise.product',$category->category_id)}}" > {{$category['category']['name']}} </a>
                @endforeach
         
        </div>

        <div class="flex-w flex-c-m m-tb-10">
          <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
             Filter
          </div>

          <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Search
          </div>
        </div>
        
        <!-- Search product -->
        <div class="dis-none panel-search w-full p-t-10 p-b-15">
          <div class="bor8 dis-flex p-l-15">
            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>

            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
          </div>  
        </div>

        <!-- Filter -->
        <div class="dis-none panel-filter w-full">
          <div class="wrap-filter flex-w w-full" style="background-color: #858585;">
                <div>
                    <div style="padding: 20px; font-size: 25px; color: #fff">
                        Brands
                    </div>

                    <div style="padding: 0px 20px 20px 20px;">
                      @foreach($brands as $brand)
                    <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" href="{{route('brand.wise.product',$brand->brand_id)}}" class="filter-link stext-106 trans-04" style="color: #fff">
                       {{$brand['brand']['name']}}
                    </a>
                      @endforeach


                    </div>

                </div>
            </div>
        </div>
      </div>

      <div class="row isotope-grid">
        @foreach($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
          <!-- Block2 -->
          <div class="block2" style="border: 2px; background-color: #3333;padding: 5px;">
            <div class="block2-pic hov-img0">
              <img src="{{url('public/upload/product_image/'.$products->image)}}" width="100px" height="350px" alt="IMG-PRODUCT">

              <a href=" {{route('product.details.info',$products->slug)}} " class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                Add to Card
              </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  {{$products->name}}
                </a>
                    <h6 href="" class="text-right">Brand:  &nbsp; {{$products['brand']['name']}}</h6>

                <span class="stext-105 cl3">
                 {{$products->price}} TK
                </span>
              </div>

            </div>
          </div>
        </div>
        @endforeach
      </div>
                   {{$product->links()}}
    </div>
  </section>



@endsection('content')