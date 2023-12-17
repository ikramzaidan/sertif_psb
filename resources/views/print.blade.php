<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMB - Univerity of Bekasi</title>

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h2 style="text-align: center">Form Pendaftaran</h2>
        <h3 style="text-align: center">University of Bekasi</h3>
        <form class="">
            @csrf
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="InputName">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="InputName" value="{{ $student->name }}" placeholder="Name" required disabled>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="InputEmail">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="InputEmail" value="{{ $student->email }}" placeholder="Email" required disabled>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="InputPhone">Nomor Telepon</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        id="InputPhone" value="{{ $student->phone }}" placeholder="Phone" required disabled>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 
            </div>
            
            <div class="form-group mb-3">
                <label for="InputAddressByID">Alamat KTP</label>
                <textarea class="form-control @error('address_by_idc') is-invalid @enderror" name="address_by_idc"
                    id="InputAddressByID" placeholder="Alamat KTP" required disabled>{{ $student->address_by_idc }}</textarea>
                @error('address_by_idc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputAddress">Alamat (saat ini)</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                    id="InputAddress" placeholder="Alamat" required disabled>{{ $student->address }}</textarea>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputProvince">Provinsi</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                    id="InputProvince" value="{{ $student->province }}" placeholder="Province" required disabled>
                @error('province')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputRegency">Kabupaten/Kota</label>
                <input type="text" class="form-control @error('regency') is-invalid @enderror" name="regency"
                    id="InputRegency" value="{{ $student->regency }}" placeholder="Regency" required disabled>
                @error('regency')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputDistrict">Kecamatan</label>
                <input type="text" class="form-control @error('district') is-invalid @enderror" name="district"
                    id="InputDistrict" value="{{ $student->district }}" placeholder="Province" required disabled>
                @error('district')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputCitizenship">Kewarganegaraan</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                    id="InputProvince" value="{{ $student->citizenship }}" placeholder="Province" required disabled>
                @error('citizenship')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputNationality">Kebangsaan</label>
                <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                    id="InputNationality" value="Indonesia" placeholder="Kebangsaan" required disabled>
                @error('nationality')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputBirthDay">Tanggal Lahir</label>
                <input type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"
                    id="InputBirthDay" value="{{ $student->birth_date }}" placeholder="Tanggal Lahir" required disabled>
                @error('birth_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputBirthPlace">Tempat Lahir</label>
                <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place"
                    id="InputBirthPlace" value="{{ $student->birth_place }}" placeholder="Tempat Lahir" required disabled>
                @error('birth_place')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputGender">Jenis Kelamin</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                    id="InputProvince" value="{{ $student->gender }}" placeholder="Province" required disabled>
                @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputMarriage">Status Pernikahan</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                    id="InputProvince" value="{{ $student->marriage_status == 0 ? 'Belum menikah' : 'Menikah' }}" placeholder="Province" required disabled>
                @error('marriage_status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="InputReligion">Agama</label>
                <input type="text" class="form-control @error('religion') is-invalid @enderror" name="religion"
                    id="InputReligion" value="{{ $student->religion }}" placeholder="Religion" required disabled>
                @error('religion')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </form>
    </div>

</body>