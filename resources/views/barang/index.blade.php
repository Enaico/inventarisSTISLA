@extends('template.layout')

@section('title')
    Barang
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Barang</h1>
    </div>

    <div class="section-body">
        <div class="row">

            <!-- Data Barang -->
            <div class="col-12 col-md-7 col-lg-7">
                <div class="card">
                    <!-- Judul -->
                    <div class="card-header">
                        <h4>Data Barang</h4>
                    </div>

                    <!-- Tabel -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td style="width: 5%;">No</td>
                                    <td>Kode</td>
                                    <td>Nama</td>
                                    <td>Kategori</td>
                                    <td>Tempat</td>
                                    <td>Stok</td>
                                    <td>Keterangan</td>
                                    <td style="width: 15%;">Aksi</td>
                                    <td scope="col" style="width: 5%;">No</td>
                                    <td scope="col">Kode</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">Kategori</td>
                                    <td scope="col">Tempat</td>
                                    <td scope="col">Stok</td>
                                    <td scope="col">keterangan</td>
                                    <td scope="col" style="width: 15%;">Aksi</td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Tambah Barang -->
            <div class="col-12 col-md-5 col-lg-5">
                <div class="card">
                    <!-- Judul -->
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>

                    <div class="form-group" id="formTambah">
                        <form action="{{ route('barang.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <!-- Add Nama -->
                                <label class="" for="nama">Nama Barang</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama')}}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- Add Kategori -->
                                <label class="mt-2" for="nama">Kategori</label>
                                <select type="text" name="kategori" id="kategori"
                                    class="form-control @error('kategori') is-invalid @enderror">
                                    @error('kategori')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <option value="Makanan" selected>Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>

                                <!-- Add Tempat -->
                                <label class="mt-2" for="nama">Tempat</label>
                                <select type="text" name="tempat" id="tempat"
                                    class="form-control @error('tempat') is-invalid @enderror">
                                    @error('tempat')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <option value="Rak A" selected>Rak A</option>
                                    <option value="Rak B">Rak B</option>
                                    <option value="Rak C">Rak C</option>
                                    <option value="Rak C">Rak C</option>
                                </select>

                                <!-- Add Stok -->
                                <label class="mt-2" for="nama">Stok Barang</label>
                                <input type="number" name="stok" id="stok" value="{{ old('stok')}}"
                                    class="form-control @error('stok') is-invalid @enderror">
                                @error('stok')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- Add Keterangan -->
                                <label for="nama" class="mt-2">Keterangan</label>
                                <textarea type="text" name="keterangan" id="keterangan" value="{{ old('keterangan') }}"
                                    class="form-control @error('keterangan') is-invalid @endrror">
                                @error('keterangan')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>      
                                @enderror
                                </textarea> 

                                <!-- Tombol simpan dan batal -->
                                <div class="footer mt-2">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('script')
<script>
    // Data Tables
    let table;
    $(function() {
        table = $('.table').DataTable({
            proccesing: true,
            autowidth: false,
            ajax: {
                url: '{{ route('barang.data') }}'
            },
            columns: [
                {data: 'DT_RowIndex'},
                {data: 'kode'},
                {data: 'nama'},
                {data: 'kategori_id'},
                {data: 'tempat_id'},
                {data: 'stok'},
                {data: 'keterangan'},
                {data: 'aksi'}
            ]
        });
    })
    $('#formTambah').on('submit', function(e){
            if(! e.preventDefault()){
                $.post($('#formTambah form').attr('action'), $('#formTambah form').serialize())
                .done((response) => {
                    $('#formTambah form')[0].reset();
                    table.ajax.reload();
                    iziToast.success({
                        title: 'Sukses',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    })
                })
                .fail((errors) => {
                    iziToast.error({
                        title: 'Gagal',
                        message: 'Data gagal disimpan',
                        position: 'topRight'
                    })
                    return;
                })
            }
        })
    </script>
@endpush