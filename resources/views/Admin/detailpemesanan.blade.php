@include('admin.navadmin')

<div class="edit">
    <div class="card">
    <h1>Detail Pemesanan </h1>
        <div class="card-body">
    
            <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Total Harga</th>
                            </tr><?php $nomor = 1;?>
                        </thead>
                        <tbody>
                        @foreach($order as $orders)
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td>{{$orders->nama}}</td>
                                <td>{{$orders->kuantitas_pesan}}</td>
                                <td>@currency($orders->total_harga)</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="button"  class="btn btn-primary"  onclick="window.location.href='/daftarpemesanan'"><i class="fas fa-edit"></i> Kembali</button>
                </div>
        
        </div>
    </div>
</div>


@include('admin.footeradmin')