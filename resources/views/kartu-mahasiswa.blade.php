<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Mahasiswa - Prognet Laravel</title>
    <link href="{{ asset('lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    
</head>
<body>

    
    <div class="container" style="">
        <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('icon/soft-star-red.svg')}}" alt="" width="72" height="57">
            <h2>Kartu Mahasiswa</h2>
            <p class="lead">Hasil dari submit form</p>
            <a class="btn btn-primary btn-sm" href="/tambah-mahasiswa">Tambah data</a>
        </div>
    
        <div class="row g-5">

            @foreach ( $data as $mahasiswa )

            <div class="col-md-6 col-lg-6 col-sm-12">
                
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">

                        @if (!empty($mahasiswa->link_gambar_profil))
                            
                        <div class="flex-shrink-0">
                            <img class="mb-3"  src="{{$mahasiswa->link_gambar_profil}}"
                            alt="Generic placeholder image" class="img-fluid"
                            style="width: 180px; border-radius: 10px;">
                        </div>
                        
                        @endif
                        <div class="flex-grow-1 ms-3">
                            <h3 class="mb-4">
                                {{
                                    $mahasiswa->first_name
                                }}
                                <span class="font-weight-italic">
                                    {{
                                        $mahasiswa->last_name
                                    }}
                                </span>
                            </h3>
                            <div>
                                <p class="small text-muted mb-1">NIM</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        {{
                                            $mahasiswa->nim
                                        }}
                                    </p>
                                </p>
                            </div>
                            <div>
                                <p class="small text-muted mb-1">Jenis Kelamin</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        {{
                                            $mahasiswa->jenkel
                                        }}
                                    </p>
                                </p>
                            </div>
                            <div>
                                <p class="small text-muted mb-1">Email</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        {{
                                            $mahasiswa->email
                                        }}
                                    </p>
                                </p>
                            </div>
                            <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                            style="background-color: #F6F7F9;">
                                <div>
                                    <p class="small text-muted  mb-1">Fakultas</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            {{
                                                $mahasiswa->fakultas
                                            }}
                                        </p>
                                    </p>
                                </div>
                                <div class="px-3">
                                    <p class="small text-muted mb-1">Prodi</p>
                                    <p class="mb-0">
                                        <p class="mb- pb-1" style="color: #2b2a2a;">
                                            {{
                                                $mahasiswa->prodi
                                            }}
                                        </p>
                                    </p>
                                </div>
                            </div>
                            
                            <div>
                                <p class="small text-muted mb-1 ">Alamat Tinggal</p>
                                <p class="mb-0">
                                    <p class="mb- pb-1" style="color: #2b2a2a;">
                                        {{
                                            $mahasiswa->alamat
                                        }} 
                                    </p>
                                </p>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm mr-2 d-block" href="/edit-mahasiswa/{{$mahasiswa->id_mahasiswa}}">Edit data</a>
                                <div class="mx-2"></div>

                                <form action="/hapus-mahasiswa/{{$mahasiswa->id_mahasiswa}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ml-2 d-block">Hapus data</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
                
            @endforeach


        </div>
        </main>
    
        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">&copy; Reva Prasetya</p>
        </footer>
    </div>

    
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>