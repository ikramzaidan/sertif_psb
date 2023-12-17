@extends('admin.layout.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mt-2 mb-3">
    <div>
        <h2>Profil</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
        </nav>
    </div>
</div>
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-8">
                <form class="" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="InputName">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="InputName" value="{{ $user->name }}" placeholder="Name" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="InputEmail">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="InputEmail" value="{{ $user->email }}" placeholder="Email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="InputPhoto">Foto</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"
                            id="InputPhoto" placeholder="Photo" accept="image/*">
                        @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100 mb-3">
                        Simpan Profil
                    </button>
                    @if(auth()->user()->role == 'User')
                    <a href="{{ route('profile.print', $user->student->id) }}" class="btn btn-success w-100">Cetak Kartu</a>
                    @endif
                </form>
            </div>
            <div class="col-xl-4">
                <img src="{{ $user->photo ? asset('storage/uploads/' . $user->photo) : asset('assets/img/no-profile.png') }}" class="img-thumbnail" alt="Photo">
            </div>
        </div>
    </div>  
</div>


@endsection

@push('scripts')
    <script>
    const $photo = $('#InputPhoto');
    $photo.change(function(event) {
        const imageUrl = URL.createObjectURL(event.target.files[0])
        $('.img-thumbnail').attr('src', imageUrl)
    })
    </script>
@endpush