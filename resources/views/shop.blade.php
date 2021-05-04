@include('navbar')

<style>
.row{
    padding:10px;
}
.card{
    margin: 0  auto;
}
</style>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
    
          <div class="col-mb-12">
          
          <div class="card" style="margin-bottom:40px">
  <div class="card-body">
  <div class="mb-12 row">
  @foreach($bio as $pesans)
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <label class=" col-form-label text-start">{{$pesans->namauser}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">No Telepon </label>
                    <label class=" col-form-label text-start">{{$pesans->no_telepon}}</label>
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Alamat </label>
                    <label class=" col-form-label text-start">{{$pesans->alamat}}</label>
                </div>
                @endforeach
                @foreach($join as $joins)
                <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Total Harga</label>
                    <label class=" col-form-label text-start">@currency($joins->total)</label>
                    <input type="hidden" required="required" name="total" class="form-control" value="{{$joins->total}}">
                </div>
                @endforeach
  </div>
</div>
            <div class="card border-primary mb-12 header-text" >
          
  <div class="card-header">Checkout</div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-12">
  

   
           
                
                <div class="mb-12 row">
                    <label class="col-sm-4 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-8">
                    <input class="form-control" id="formFileMultiple"  name="bukti_bayar" type="file" id="formFileMultiple" multiple value="" >           
                    </div>
                    <hr>
                </div>
                
                <hr size="9px">
                <hr>
                @foreach($pesan as $pesan)
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Nama</label>
                    <label class=" col-form-label text-start">{{$pesan->nama}}</label>
                    <input type="hidden" required="required" name="produk_id" class="form-control" value="{{$pesan->produk_id}}">
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Quantity</label>
                    <label class=" col-form-label text-start">{{$pesan->jumlah}}</label>
                    <input type="hidden" required="required" name="jumlah" class="form-control" value="{{$pesan->jumlah}}">
                </div>
                <div class="mb-12 row">
                    <label class="col-sm-5 col-form-label">Total Harga</label>
                    <label class=" col-form-label text-start">@currency($pesan->total_detail)</label>
                    <input type="hidden" required="required" name="total_detail" class="form-control" value="{{$pesan->total_detail}}">
                </div>
                <hr>
                @endforeach
                <div class="card-footer">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Bayar</button>
                </div>
				
            </form>
        
    </div>
  </div>
  </div>
</div>
            </div>
          </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Anda ingin menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" onclick="window.location.href='/shop/delete/{{$pesan->checkout_id}}'">Hapus</button>
        </div>
      </div>
      
    </div>
  </div>

  
@include('footer')