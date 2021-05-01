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
  <div class="card-header">Checkout</div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-12">
    <form action="{{route('pesanan.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @foreach($pesan as $pesan)
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Nama</label>
                    <label class=" col-form-label text-start">{{$pesan->nama}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Quantity</label>
                    <label class=" col-form-label text-start">{{$pesan->jumlah}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Total Harga</label>
                    <label class=" col-form-label text-start">@currency($pesan->total_detail)</label>
                </div>
                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                <hr>
                @endforeach
				<button type="button" class="btn btn-danger" onclick="window.location.href='/'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Bayar</button>
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