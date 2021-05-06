@include('navbar')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Welcome to Las Roha</h4>
            <h2>SIPALBAB</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>We serve you the best service</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Offer Your Last Chances</h4>
            <h2>Grab The Products For Your Health</h2>
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
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Toko obat Berizin</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Produk Berkualitas</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Pelayanan Terbaik</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Menerima resep Dokter</p><br>
			 <p class="fa fa-check" aria-hidden="true"></i>&nbsp;Berada di Pusat kota Balige</p><br>
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


<div class="items">
@foreach($feedback as $feedbacks)
    <div class="card" style="width: 10000px;">
        <div class="card-body" >
            <h4 class="card-title"></h4>
            <p>{{$feedbacks->deskripsi}}</p>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="profile">
                        <h4 class="cust-name">{{$feedbacks->name}}</h4>
                        <p class="cust-profession">{{$feedbacks->subjek}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



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
                <a href="pesanan/{{$produks->produk_id}}"  class="btn btn-primary col-md-4">Beli</a>
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
                  <h4>Creative &amp; SIPA<em>LBAB</em> Products</h4>
                  <p>Lasroha Pharmacy provides all the necessities you need. From the need to calm a saturated mind, baby supplies, supplements and vitamins, and medicines</p>
                </div>
                <div class="col-md-4">
                  <a href="/shop/{customer_id}" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')
