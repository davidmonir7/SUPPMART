@extends('site.layout.layout')

{{-- {{dd($product)}} --}}
@section('body')

    <!-- end header -->
<div class="product">
    <div class="container">
        <div class="details">
            <h2>{{$product->name}}</h2>
            <p class="product-detail">
                details: Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laudan
            </p>
            <p>price: <span> 50 L.E</span></p>
            <a href="#">add to cart</a>
            <div class="social-media">
                <h3>share via social media</h3>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.samirandaly.com/default/242112510.html"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.samirandaly.com/default/242112510.html&amp;text=قلم رصاص بدون استيكةFC جولد فابر رقم1221 F"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
        <div class="image">
            <img src="images/pencil.jpg" alt="">
        </div>
    </div>
</div>
 <!-- start footer -->
<div class="footer">
<div class="container">
&copy;2023 <span> SuppMart </span> All Right Reserved

<div class="social">
    Find Us On Social Networks <br>
    <i class="fa-brands fa-youtube"></i>
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-twitter"></i>
</div>
  </div>
</div>
@endsection