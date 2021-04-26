@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Edit Produk</h1>
        <div class="card-body">


            <form action="{{route('daftarproduk.update',$editproduks->id_produk)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="hidden" name="id_produk" value="{{$editproduks->id_produk}}">
                        <input type="text" required="required" id="nama" name="nama_produk" class="form-control" value="{{$editproduks->nama_produk}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="jenis_produk" aria-label="Default select example" >
                            <option value="{{$editproduks->jenis_produk}}">{{$editproduks->jenis_produk}}</option>
                            <option value="Sirup">Sirup</option>
                            <option value="Popok Bayi">Popok Bayi</option>
                            <option value="Tablet">Tablet</option>
                           
            
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="harga_produk" class="form-control"  value="{{$editproduks->harga_produk}}">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control"  required="required"  id="floatingTextarea2" style="height: 100px" name="deskripsi_produk" value="{{$editproduks->deskripsi_produk}}">{{$editproduks->deskripsi_produk}}</textarea>
        
                         </div>
                        </div>
                    </div>
               
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar_produk" type="file" id="formFileMultiple" multiple value="{{$editproduks->gambar_produk}}" > {{$editproduks->gambar_produk}}
                    </div>
                </div>
                
				<button type="button" class="btn btn-danger" onclick="window.location.href='/daftarproduk'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Edit</button>
            </form>
            

        </div>
    </div>
</div>

@include('admin.footeradmin')