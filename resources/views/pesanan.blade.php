@include('navbar')
<style>
.row{
    padding:10px;
}
</style>
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
    
          <div class="col-mb-12">
    
            <div class="card border-primary mb-12 header-text" >
  <div class="card-header">Pesan</div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-4">
      <img src="{{url('imgproduk/'.$produks->gambar)}}" alt="" width="150px" height="200px">
    </div>
    <div class="col-sm-8">
    <form action="{{route('daftarproduk.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-12 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <label class=" col-form-label text-start">{{$produks->nama}}</label>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <label class=" col-form-label text-start">@currency($produks->harga)</label>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="harga" class="form-control" >
                        <input type="hidden" name="produk_id" class="form-control"
                                                value="{{$produks->produk_id}}">
                    </div>
                </div>
				<button type="button" class="btn btn-danger" onclick="window.location.href='/'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Pesan</button>
            </form>
    </div>
  </div>
    
 
  </div>
</div>
            </div>
          </div>
        </div>
      
    </div>


@include('footer')