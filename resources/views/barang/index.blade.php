@extends('template.layout')

@section('title')
    Barang
@endsection

@section('content')
<section class="section-header">
    Barang
</section>

<section class="section-header">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    Data Barang
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td style="width: 5%">#</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td style="width: 16%">Aksi</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-header">
                    Tambah Barang
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
