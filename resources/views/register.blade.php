<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMB - Univerity of Bekasi</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/extras.css') }}">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<body>

    <div class="container py-5">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center">

            <div class="col-xl-6 col-lg-6">
                <div class="card o-hidden border-0 shadow-lg mb-3">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h1 text-cs font-weight-bold font-italic mb-4">University of Bekasi</h1>
                                @if(session()->has('status'))
                                <div class="alert alert-success alert-dismissible fade show">{{ session('status') }}</div>
                                @endif

                                @if(session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show">{{ session('error') }}</div>
                                @endif
                            </div>
                            <form class="" action="/register" method="post">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="InputName">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        id="InputName" value="{{ old('name') }}" placeholder="Name" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputEmail">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        id="InputEmail" value="{{ old('email') }}" placeholder="Email" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputPhone">Nomor Telepon</label>
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        id="InputPhone" value="{{ old('phone') }}" placeholder="Phone" required>
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputAddressByID">Alamat KTP</label>
                                    <textarea class="form-control @error('address_by_idc') is-invalid @enderror" name="address_by_idc"
                                        id="InputAddressByID" placeholder="Alamat KTP" required>{{ old('address_by_idc') }}</textarea>
                                    @error('address_by_idc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputAddress">Alamat (saat ini)</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                        id="InputAddress" placeholder="Alamat" required>{{ old('address') }}</textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputProvince">Provinsi</label>
                                    <select name="province" id="InputProvince" class="form-select address" aria-label="Default select example">
                                    </select>
                                    @error('province')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputRegency">Kabupaten/Kota</label>
                                    <select name="regency" id="InputRegency" class="form-select address" aria-label="Default select example">
                                    </select>
                                    @error('regency')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputDistrict">Kecamatan</label>
                                    <select name="district" id="InputDistrict" class="form-select address" aria-label="Default select example">
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
                                        <option value="WNI">WNI</option>
                                        <option value="WNI Keturunan">WNI Keturunan</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                    @error('citizenship')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div id="formHidden" class="form-group mb-2">
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
                                        id="InputBirthDay" value="{{ old('birth_date') }}" placeholder="Tanggal Lahir" required>
                                    @error('birth_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputBirthPlace">Tempat Lahir</label>
                                    <select name="birth_place" id="InputBirthPlace" class="form-select address" aria-label="Default select example">
                                        @foreach($regencies as $regency)
                                        <option value="{{ $regency->name }}">{{ $regency->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('birth_place')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputGender">Jenis Kelamin</label>
                                    <select name="gender" id="InputGender" class="form-select" aria-label="Default select example">
                                        <option value="Male">Pria</option>
                                        <option value="Female">Female</option>
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
                                        <option value="0">Belum Menikah</option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Lainnya</option>
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
                                        <option value="{{ $religion->name }}">{{ $religion->name }}</option>
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
                </div>

                <div class="card o-hidden border-0 shadow-lg mt-2">
                    <div class="card-body py-3">
                        <div class="text-center small">
                            Sudah pernah mendaftar? <a href="/login">Login</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>
        

        $( '.form-select.address' ).select2( {
            theme: 'bootstrap-5'
        } );

        $(document).ready(function() {
            // Sembunyikan form-group nationality saat halaman dimuat
            $('#formHidden').hide();

            // Deteksi perubahan pada elemen select
            $('#InputCitizenship').change(function() {
            // Ambil nilai yang dipilih pada select
            var selectedValue = $(this).val();

            // Periksa jika nilai yang dipilih adalah 'WNA'
            if (selectedValue === 'WNA') {
                // Tampilkan form-group nationality
                $('#formHidden').show();
                $('#InputNationality').val('');
            } else {
                // Sembunyikan form-group nationality jika nilai yang dipilih bukan 'WNA'
                $('#formHidden').hide();
                $('#InputNationality').val('Indonesia');
            }
            });
        });

        $(document).ready(function () {
            $.ajax({
                url: '/getProvinces',
                type: "GET",
                dataType: "json",
                success: function (data) {
                    var select = $('#InputProvince');
                    $.each(data, function (key, value) {
                        select.append('<option data-id="' + value.id + '" value="' + value.name + '">' + value.name + '</option>');
                    });
                }
            });

            $('#InputProvince').on('change', function () {
                var provinceId = $(this).find(':selected').data('id');
                if (provinceId) {
                    // Load regencies based on province id
                    $.ajax({
                        url: '/getCities/' + provinceId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            var selectRegency = $('#InputRegency');
                            selectRegency.empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                            $.each(data, function (key, value) {
                                selectRegency.append('<option data-id="' + value.id + '" value="' + value.name + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#InputRegency').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                }
            });

            $('#InputRegency').on('change', function () {
                var regencyId = $(this).find(':selected').data('id');
                if (regencyId) {
                    // Load regencies based on province id
                    $.ajax({
                        url: '/getDistricts/' + regencyId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            var selectDistrict = $('#InputDistrict');
                            selectDistrict.empty().append('<option value="">Pilih Kecamatan</option>');
                            $.each(data, function (key, value) {
                                selectDistrict.append('<option data-id="' + value.id + '" value="' + value.name + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#InputDistrict').empty().append('<option value="">Pilih Kecamatan</option>');
                }
            });
        });
    </script>
</body>

</html>