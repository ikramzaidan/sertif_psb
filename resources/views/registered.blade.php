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
    
</head>

<body>

    <div class="container py-5">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center">

            <div class="col-xl-6 col-lg-8">
                <div class="card o-hidden border-0 shadow-lg mb-3">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h1 text-cs font-weight-bold font-italic mb-4">University of Bekasi</h1>
                                @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                @if($student->status == 0)
                                <div class="alert alert-warning fade show">Menunggu kelulusan, cetak <a href="{{ route('register.print', $student->id) }}">bukti pendaftaran</a>.</div>
                                @else
                                <div class="alert alert-success fade show">Selamat kamu diterima, silahkan <a href="/login">login</a>.</div>
                                @endif
                            </div>
                            <form class="">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="InputName">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        id="InputName" value="{{ $student->name }}" placeholder="Name" required disabled>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputEmail">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        id="InputEmail" value="{{ $student->email }}" placeholder="Email" required disabled>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputPhone">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        id="InputPhone" value="{{ $student->phone }}" placeholder="Phone" required disabled>
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputAddressByID">Alamat KTP</label>
                                    <textarea class="form-control @error('address_by_idc') is-invalid @enderror" name="address_by_idc"
                                        id="InputAddressByID" placeholder="Alamat KTP" required disabled>{{ $student->address_by_idc }}</textarea>
                                    @error('address_by_idc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputAddress">Alamat (saat ini)</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                        id="InputAddress" placeholder="Alamat" required disabled>{{ $student->address }}</textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputProvince">Provinsi</label>
                                    <input type="text" class="form-control @error('province') is-invalid @enderror" name="province"
                                        id="InputProvince" value="{{ $student->province }}" placeholder="Province" required disabled>
                                    @error('province')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputRegency">Kabupaten/Kota</label>
                                    <input type="text" class="form-control @error('regency') is-invalid @enderror" name="regency"
                                        id="InputRegency" value="{{ $student->regency }}" placeholder="Regency" required disabled>
                                    @error('regency')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputDistrict">Kecamatan</label>
                                    <input type="text" class="form-control @error('district') is-invalid @enderror" name="district"
                                        id="InputDistrict" value="{{ $student->district }}" placeholder="Province" required disabled>
                                    @error('district')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputCitizenship">Kewarganegaraan</label>
                                    <select name="citizenship" id="InputCitizenship" class="form-select" aria-label="Default select example" disabled>
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
                                        id="InputNationality" value="Indonesia" placeholder="Kebangsaan" required disabled>
                                    @error('nationality')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputBirthDay">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"
                                        id="InputBirthDay" value="{{ $student->birth_date }}" placeholder="Tanggal Lahir" required disabled>
                                    @error('birth_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputBirthPlace">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place"
                                        id="InputBirthPlace" value="{{ $student->birth_place }}" placeholder="Tempat Lahir" required disabled>
                                    @error('birth_place')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="InputGender">Jenis Kelamin</label>
                                    <select name="gender" id="InputGender" class="form-select" aria-label="Default select example" disabled>
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
                                    <select name="marriage_status" id="InputMarriage" class="form-select" aria-label="Default select example" disabled>
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
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            // Event listener for province select change
            $('#InputProvince').on('change', function () {
                var provinceId = $(this).val();
                
                // Make an AJAX request to get regencies based on provinceId
                $.ajax({
                    type: 'GET',
                    url: '/getCities/' + provinceId, // Replace with your actual route
                    success: function (data) {
                        // Clear existing options
                        $('#InputRegency').empty();
                        
                        // Add new options based on the data received
                        $.each(data, function (key, value) {
                            $('#InputRegency').append('<option value="' + value.code + '">' + value.name + '</option>');
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>

</html>