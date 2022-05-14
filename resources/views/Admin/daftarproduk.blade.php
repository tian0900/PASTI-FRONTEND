@include('admin.navadmin')


<!-- Section 1 -->
<br>
<div><button type="button" class="btn btn-info" onclick="window.location.href='daftarproduk/tambah'" style="width:160px ; position:absolute; left:11%;"><i class="fas fa-plus"></i> Tambah Produk</button></div>

<div class="tabel1" id="section-2">
  <div class="container-fluid">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Daftar Produk
      </div><br>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($produks as $produk)
              <tr>
                <td>{{$produk->produk_id}}</td>
                <td>{{$produk->nama}}</td>
                <td>{{$produk->kategori}}</td>
                <td>@currency($produk->harga)</td>
                <td>{{$produk->stok}}</td>
                <td><img src="{{url('imgproduk/'.$produk->gambar)}}" width="80px" height="80px" alt=""></td>
                <td width="20%"><button type="button" class="btn btn-primary" onclick="window.location.href='/daftarproduk/edit/{{$produk->produk_id}}'"><i class="fas fa-edit"></i>
                    Edit</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$produk->produk_id}}"><i class="fas fa-trash-alt"></i>
                    Hapus</button>
                </td>
              </tr>

              <!-- Modal -->
              <div class="modal fade" id="myModal{{$produk->produk_id}}" role="dialog">
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
                      <button type="button" class="btn btn-danger" onclick="window.location.href='daftarproduk/delete/{{$produk->produk_id}}'">Hapus</button>
                    </div>
                  </div>

                </div>
              </div>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>






@include('admin.footeradmin')