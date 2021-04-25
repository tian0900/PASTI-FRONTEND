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


<div class="items">
@foreach($feedback as $feedbacks)
    <div class="card col-md-12">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="template-demo">
                <p>{{$feedbacks->deskripsi}}</p>
            </div>
            <hr>
            <div class="row">
          
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">{{$feedbacks->nama}}</h4>
                        <p class="cust-profession"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="template-demo">
                <p>When you think of Apple you automatically think expensive if your anything like me. When purchasing this laptop I was skeptical on laptops i purchased.</p>
            </div>
            <hr>
            <div class="row">
          
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Tikoh Amin</h4>
                        <p class="cust-profession
">Salon Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="template-demo">
                <p>I’ve wanted a MacBook for a while now because of the build quality and the simplicity of the OS. I spend an average 6 hours a day using it for college and the battery still has a fair.</p>
            </div>
            <hr>
            <div class="row">
          
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Malachi Lensing</h4>
                        <p class="cust-profession
">Marketing Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="template-demo">
                <p>This MacBook has excellent processing speed. The screen is crystal clear and I really enjoy the touchbar. I set up the fingerprint reader.</p>
            </div>
            <hr>
            <div class="row">
          
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Christian Isla</h4>
                        <p class="cust-profession
">Android Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="template-demo">
                <p>For the last 10 years, I have owned an old Gateway laptop. Although it was amazing and lasted me, it was time for an upgrade. I own an Apple phone so I decided to look into a computer.</p>
            </div>
            <hr>
            <div class="row">
          
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Lori Charles</h4>
                        <p class="cust-profession
">Sales manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
             <img src="imgproduk/{{$produks->Gambar_Produk}}" alt=""width="80px" height="250px" >
              <div class="down-content">
                <h4>{{$produks->Nama_Produk}}</h4>
                <p>{{$produks->Produk_Deskripsi}}</p>
                <h6>@currency($produks->Harga_Produk)</h6>
                <button type="button" class="btn btn-primary col-md-4">Beli</button>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
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