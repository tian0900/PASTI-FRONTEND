@include('navbar')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

<!-- About -->
<div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-size:45px">About SIPALBAB</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h2 >Looking for the best products?</h2>
			  <p><strong>Lasroha Pharmacy</strong> provides all the necessities you need. From the need to calm a saturated mind, baby supplies, supplements and vitamins, and medicines</p>
			  <h3><strong>Why you must choose us?</strong></h3> 
			  <br>
              <ul class="featured-list">
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Have a health license </p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Products are guaranteed to be in the newest and best quality </p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Friendly service</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Has cooperated with local hospitals</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;The location is in the middle of the city so that it is easy to reach</p><br>
              </ul>
              <a href="/about" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- About Here -->


<!--Daftar Produk-->
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="/produk">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach($produk as $produks)
          <div class="col-md-4 card-produk">
            <div class="product-item">
             <img src="imgproduk/{{$produks->gambar}}" alt=""width="80px" height="250px" >
              <div class="down-content">
                <h4>{{$produks->nama}}</h4>
                <h6>@currency($produks->harga)</h6>
                  <a href="pesanan/{{$produks->produk_id}}" class="btn btn-success">Beli</a>
              </div>
              
            </div>
          </div>
          @endforeach
         
        </div>
      </div>
    </div>

  


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4><em>SOPANAGAMAN</em> &amp; <em>SIPALBAB</em> Products</h4>
                  <p>This Website was created for Apotek LASROHA</p>
                </div>
                <div class="col-md-4">
                  <a href="/loginCustomer" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')