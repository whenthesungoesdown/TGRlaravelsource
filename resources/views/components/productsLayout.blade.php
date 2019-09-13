
<div class="pt-3 mt-3">
    <h3 class="text-center">FEATURED PRODUCTS</h3>
    <P class="text-center">Featured collection curated by our experts</P>
</div>



<div class="conatiner-fluid pr-4 mr-4">
    @foreach($products->chunk(4) as $items)
        <div class="row justify-content-around">
            @if(count($items) > 0)
                @foreach($items as $item)
                    <div class="col-sm-12 col-md-4 col-lg-2">
                        <div class="product-img">
                            <a href="{{route('product_page',$item->id)}}">
                                <img class="productimage" src="{{$item->pic1}}" alt="">
                            </a>
                        </div>
                        <a href="#">
                            <ion-icon name="cart" class="hover-img__icons hover-img__icons-cart"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="heart-empty" class="hover-img__icons hover-img__icons-wishlist"></ion-icon>
                        </a>
                        <h5 class="producttitle text-center">{{$item->title}}</h5>
                        <p class="text-center price">₹{{$item->price}}.00</p>
                    </div>
                @endforeach
            @else
                <p>no products</p>
                
            @endif
        </div>
    @endforeach
</div>