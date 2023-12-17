@extends('admin.layout.app')

@section('content')
    <h2 class="mt-2 mb-3">Dashbor</h2>
    @if(auth()->user()->role != 'Admin')
    <div class="col-lg-12 col-xl-12 pt-3">
        <div class="row gx-4">
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">Jumlah SKS</div>
                        <div class="">46</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">IPK</div>
                        <div class="">3.77</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">Semester</div>
                        <div class="">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="col-lg-12 col-xl-12 pt-3">
        <div class="row gx-4">
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">Total Mahasiswa</div>
                        <div class="">{{ $totalMahasiswa }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">Total Pendaftar</div>
                        <div class="">{{ $totalPendaftar }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between">
                        <div class="fw-bold">Total User</div>
                        <div class="">{{ $totalUser }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection