@include('navbar')

<style>
  .row {
    padding: 10px;
  }

  .card {
    margin: 0 auto;
  }
</style>

<!-- Page Content -->
<div class="page-heading contact-heading header-text">
  <div class="container">
    @if(empty($pesan) || count($pesan) == 0)
    <div class="col-md-12">
      <div class="card" style="margin-bottom:40px">
        <div class="card-body">
          <div class="mb-12">
            <h3>
              <center>Belum Ada Pesanan</center>
            </h3>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="col-mb-12">
      <div class="card" style="margin-bottom:40px ">
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
      <div class="card border-primary mb-12 header-text">

        <div class="card-header">Checkout</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">


            <div class="file-upload">
            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

            <div class="image-upload-wrap">
              <input class="file-upload-input" name="bukti_bayar" type='file' onchange="readURL(this);" accept="image/*" />
              <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
              </div>
            </div>
            <div class="file-upload-content">
              <img class="file-upload-image" src="#" alt="your image" />
              <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
              </div>
              
            </div>
          </div>

              <hr size="9px">
              <hr>
              @foreach($pesan as $pesan)
              <div class="col-md-6">
                <div class="mb-12 row">
                  <label class="col-sm-5 col-form-label">Nama</label>
                  <label class=" col-form-label text-start">{{$pesan->nama}}</label>
                  <input type="hidden" required="required" name="produk_id" class="form-control" value="{{$pesan->produk_id}}">
                </div>
                <div class="mb-12 row">
                  <label class="col-sm-5 col-form-label">Quantity</label>
                  <label class=" col-form-label text-start">{{$pesan->kuantitas}}</label>
                  <input type="hidden" required="required" name="kuantitas" class="form-control" value="{{$pesan->kuantitas}}">
                </div>
                <div class="mb-12 row">
                  <label class="col-sm-5 col-form-label">Total Harga</label>
                  <label class=" col-form-label text-start">@currency($pesan->total)</label>
                  <input type="hidden" required="required" name="total" class="form-control" value="{{$pesan->total}}">
                </div>
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$pesan->produk_id}}"><i class="fas fa-times"></i> Batal</button>
              </div>
              <hr>
              <!-- Modal -->
              <div class="modal fade" id="myModal{{$pesan->produk_id}}" role="dialog">
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
                      <button type="button" class="btn btn-danger" onclick="window.location.href='/shop/delete/{{$pesan->id_keranjang}}'">Hapus</button>
                    </div>
                  </div>

                </div>
              </div>
              @endforeach
              <div class="card-footer">
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


@endif

@include('footer')