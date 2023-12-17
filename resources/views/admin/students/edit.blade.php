@extends('admin.layout.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mt-2 mb-3">
    <div>
        <h2>Mahasiswa</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/students">Mahasiswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
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
        <form class="" action="{{ route('students.update', $student) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label for="InputName">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="InputName" value="{{ $student->name }}" placeholder="Name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="InputEmail" value="{{ $student->email }}" placeholder="Email" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputPhone">Nomor Telepon</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    id="InputPhone" value="{{ $student->phone }}" placeholder="Phone" required>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputAddressByID">Alamat KTP</label>
                <textarea class="form-control @error('address_by_idc') is-invalid @enderror" name="address_by_idc"
                    id="InputAddressByID" placeholder="Alamat KTP" required>{{ $student->address_by_idc }}</textarea>
                @error('address_by_idc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputAddress">Alamat (saat ini)</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                    id="InputAddress" placeholder="Alamat" required>{{ $student->address }}</textarea>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputProvince">Provinsi</label>
                <select name="province" id="InputProvince" class="form-select" aria-label="Default select example">
                    @foreach($provinces as $province)
                    <option value="{{ $province->name }}" {{ $student->province === $province->name ? 'selected' : '' }}>{{ $province->name }}</option>
                    @endforeach
                </select>
                @error('province')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputRegency">Kabupaten/Kota</label>
                <select name="regency" id="InputRegency" class="form-select" aria-label="Default select example">
                    @foreach($regencies as $regency)
                    <option value="{{ $regency->name }}" {{ $student->regency === $regency->name ? 'selected' : '' }}>{{ $regency->name }}</option>
                    @endforeach
                </select>
                @error('regency')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputDistrict">Kecamatan</label>
                <select name="district" id="InputDistrict" class="form-select" aria-label="Default select example">
                    @foreach($districts as $district)
                    <option value="{{ $district->name }}" {{ $student->district === $district->name ? 'selected' : '' }}>{{ $district->name }}</option>
                    @endforeach
                </select>
                @error('district')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputCitizenship">Kewarganegaraan</label>
                <select name="citizenship" id="InputCitizenship" class="form-select" aria-label="Default select example">
                    <option value="WNI" {{ $student->citizenship === 'WNI' ? 'selected' : '' }}>WNI</option>
                    <option value="WNI Keturunan" {{ $student->citizenship === 'WNI Keturunan' ? 'selected' : '' }}>WNI Keturunan</option>
                    <option value="WNA" {{ $student->citizenship === 'WNA' ? 'selected' : '' }}>WNA</option>
                </select>
                @error('citizenship')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2 d-none">
                <label for="InputNationality">Kebangsaan</label>
                <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                    id="InputNationality" value="Indonesia" placeholder="Kebangsaan" required>
                @error('nationality')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputBirthDay">Tanggal Lahir</label>
                <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"
                    id="InputBirthDay" value="{{ $student->birth_date }}" placeholder="Tanggal Lahir" required>
                @error('birth_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputBirthPlace">Tempat Lahir</label>
                <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place"
                    id="InputBirthPlace" value="{{ $student->birth_place }}" placeholder="Tempat Lahir" required>
                @error('birth_place')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputGender">Jenis Kelamin</label>
                <select name="gender" id="InputGender" class="form-select" aria-label="Default select example">
                    <option value="Male" {{ $student->marriage_status === 'Male' ? 'selected' : '' }}>Pria</option>
                    <option value="Female" {{ $student->marriage_status === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="InputMarriage">Status Pernikahan</label>
                <select name="marriage_status" id="InputMarriage" class="form-select" aria-label="Default select example">
                    <option value="0" {{ $student->marriage_status === 0 ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="1" {{ $student->marriage_status === 1 ? 'selected' : '' }}>Menikah</option>
                    <option value="2" {{ $student->marriage_status === 2 ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('marriage_status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="InputReligion">Agama</label>
                <select name="religion" id="InputReligion" class="form-select" aria-label="Default select example">
                    @foreach($religions as $religion)
                    <option value="{{ $religion->name }}" {{ $student->religion === $religion->name ? 'selected' : '' }}>{{ $religion->name }}</option>
                    @endforeach
                </select>
                @error('religion')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block w-100">
                Daftar
            </button>
        </form>
    </div>  
</div>

<div class="modal fade" id="active-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Aktifasi Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4 pt-3">
                <form action="{{ route('users.store') }}" method="POST">
                @csrf
                    <input type="hidden" id="studentId" name="student_id" value="">
                    <input type="hidden" id="studentName" name="name" value="">
                    <input type="hidden" id="studentEmail" name="email" value="">
                    <div class="mb-3 text-center">
                        <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                        </svg>
                        <span class="fs-4 d-block">Aktifkan mahasiswa?</span>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary w-full">Iya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <div class="modal-body px-4 pb-4 pt-3">
                    <div class="mb-3 text-center">
                        <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                        </svg>
                        <span class="fs-4 d-block">Are you sure you want to delete this user?</span>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary w-full">Yes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>

        function bindingDelete(id) {
            $('#delete-form').attr('action', `{{ url('users') }}/${id}`)
        }

        function bindingActive(id, name, email) {
            $('#studentId').attr('value', `${id}`);
            $('#studentName').attr('value', `${name}`);
            $('#studentEmail').attr('value', `${email}`);
        }
    </script>
@endpush