@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Edit Produk</h1>
        <div class="card-body">


            <form action="{{route('daftarproduk.update',$editproduks->ProdukID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="hidden" name="ProdukID" value="{{$editproduks->ProdukID}}">
                        <input type="text" required="required" id="nama" name="Nama_Produk" class="form-control" value="{{$editproduks->Nama_Produk}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="Jenis_Produk" aria-label="Default select example" >
                            <option value="{{$editproduks->Jenis_Produk}}">{{$editproduks->Jenis_Produk}}</option>
                            <option value="Asma">Asma</option>
                            <option value="Batuk">Batuk</option>
                            <option value="Demam">Demam</option>
                           
            
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="Harga_Produk" class="form-control"  value="{{$editproduks->Harga_Produk}}">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control"  required="required"  id="floatingTextarea2" style="height: 100px" name="Produk_Deskripsi" value="{{$editproduks->Produk_Deskripsi}}">{{$editproduks->Produk_Deskripsi}}</textarea>
        
                         </div>
                        </div>
                    </div>
               
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="Gambar_Produk" type="file" id="formFileMultiple" multiple value="{{$editproduks->Gambar_Produk}}" > {{$editproduks->Gambar_Produk}}
                    </div>
                </div>
                
				<button type="button" class="btn btn-danger" onclick="window.location.href='/daftarproduk'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Edit</button>
            </form>
            

        </div>
    </div>
</div>

@include('admin.footeradmin')