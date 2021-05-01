@include('navbar')
<style>
.row{
    padding:10px;
    
}
.card{
    margin:0 auto;
}
</style>
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
    
          <div class="col-mb-12">
    
            <div class="card border-primary mb-12 header-text" >
  <div class="card-header">Pembayaran</div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-12">
    <form action="{{route('pesanan.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @foreach($pesan as $pesans)
                <div class="mb-12 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <label class=" col-form-label text-start">{{$pesans->namacustomer}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-3 col-form-label">No Telepon </label>
                    <label class=" col-form-label text-start">{{$pesans->no_telepon}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-3 col-form-label">Alamat </label>
                    <label class=" col-form-label text-start">{{$pesans->alamat}}</label>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Total Harga</label>
                    <label class=" col-form-label text-start">)</label>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                    <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" multiple value="" > 
                        <input type="hidden" name="produk_id" class="form-control" value="">
                        <input type="hidden" name="harga" class="form-control" value="">
                        
                    </div>
                    <hr>
                </div>
                
                @endforeach
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