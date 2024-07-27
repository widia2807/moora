<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<link rel="stylesheet" href="{{ asset('css/cardanimation.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<x-layout> 
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:role>{{ $role }}</x-slot:role>

  <header class="masthead  ">
    <div class="container mb-xl-5 mt">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5">
                <h1 class="mb-4">Selamat datang <i>{{ session('user_username') }}</i> di perhitungan SPK MOORA</h1>
                <h2 class="m-0">Dashboard ini merupakan halaman Awal dari Sistem Pendukung Keputusan pemilihan siswa penerima bantuan di PAUDQu Assabiqunal Awwalun</h2>
            </div>
            <div class="col-lg-5">
                <div class="py-5 px-4 masthead-cards">
                    <div class="d-flex justify-content-center">
                        <a href="/user/data-siswa" class="w-50 pr-3 pb-4" data-toggle="tooltip" title="Klik disini untuk melihat daftar siswa yang telah didaftarkan">
                            <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-table fa-4x my-2"></i>
                                    </div>
                                    Data Siswa
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('moora-proses') }}" class="w-50 pr-3" data-toggle="tooltip" title="Klik untuk melakukan perhitungan berdasarkan jumlah siswa yang telah didaftarkan dengan metode MOORA">
                            <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-4x fa-calculator my-2"></i>
                                    </div>
                                    Hitung !
                                </div>
                            </div>
                        </a>
                        <a href="/user/perangkingan" class="w-50 pl-3" data-toggle="tooltip" title="Klik untuk melihat peringkat dari hasil perhitungan dengan metode MOORA">
                            <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-4x fa-trophy my-2"></i>
                                    </div>
                                    Perangkingan
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>
    </div>
    <svg style="pointer-events: none" class="wave" width="100%" height="70px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
                .a {
                    fill: none;
                }
                
                .b {
                    clip-path: url(#a);
                }
                
                .c,
                .d {
                    fill: #f9f9fc;
                }
                
                .d {
                    opacity: 0.5;
                    isolation: isolate;
                }
            </style>
            <clipPath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
    </svg>
  </header>  
</x-layout>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
