@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Welcome back Admin mylaptop</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Laptop Bekas dengan Metode SAW</h6>
            </div>
            <div class="card-body">
                <p><strong>Sistem Pendukung Keputusan (SPK) Menggunakan Metode Simple Additive Weighting (SAW)</strong></p>
                
                <p><strong>Deskripsi:</strong><br>
                Sistem Pendukung Keputusan (SPK) adalah alat yang membantu dalam proses pengambilan keputusan dengan menggunakan data dan model analitis. Salah satu metode yang sering digunakan dalam SPK adalah Simple Additive Weighting (SAW).</p>
                
                <p><strong>Metode Simple Additive Weighting (SAW):</strong></p>
                
                <p><strong>Langkah-langkah:</strong></p>
                <ol>
                    <li><strong>Identifikasi Kriteria:</strong>
                        <ul>
                            <li>Harga</li>
                            <li>Kondisi Fisik</li>
                            <li>Spesifikasi (CPU, RAM, dll.)</li>
                            <li>Daya Tahan Baterai</li>
                            <li>Usia Laptop</li>
                        </ul>
                    </li>
                    <li><strong>Normalisasi Matriks Keputusan:</strong>
                        <p>Lakukan normalisasi terhadap nilai kriteria untuk setiap alternatif (laptop bekas) agar semua nilai berada dalam skala yang sama.</p>
                    </li>
                    <li><strong>Pembobotan Kriteria:</strong>
                        <p>Tentukan bobot untuk masing-masing kriteria berdasarkan tingkat kepentingannya. Bobot ini biasanya dalam bentuk persentase atau skala 0-1.</p>
                    </li>
                    <li><strong>Perhitungan Nilai Akhir:</strong>
                        <p>Hitung nilai akhir untuk setiap alternatif dengan mengalikan nilai normalisasi dengan bobot kriteria, kemudian menjumlahkan hasilnya.</p>
                    </li>
                    <li><strong>Penentuan Peringkat:</strong>
                        <p>Alternatif dengan nilai tertinggi adalah yang terbaik sesuai dengan kriteria yang telah ditentukan.</p>
                    </li>
                </ol>
                
                <p><strong>Contoh Implementasi:</strong></p>
                <ol>
                    <li><strong>Kriteria dan Bobot:</strong>
                        <ul>
                            <li>Harga: 25%</li>
                            <li>Kondisi Fisik: 30%</li>
                            <li>Spesifikasi: 25%</li>
                            <li>Daya Tahan Baterai: 10%</li>
                            <li>Usia Laptop: 10%</li>
                        </ul>
                    </li>
                    <li><strong>Normalisasi dan Perhitungan:</strong>
                        <p>Lakukan normalisasi nilai kriteria untuk setiap laptop bekas.<br>
                        Hitung skor akhir dengan mengalikan nilai normalisasi dengan bobot.</p>
                    </li>
                    <li><strong>Peringkat Akhir:</strong>
                        <p>Laptop bekas dengan skor tertinggi adalah yang direkomendasikan untuk dipilih.</p>
                    </li>
                </ol>
                
                <p><strong>Keunggulan Metode SAW:</strong></p>
                <ul>
                    <li>Mudah dipahami dan diimplementasikan.</li>
                    <li>Fleksibel dalam penentuan kriteria dan bobot.</li>
                    <li>Cocok untuk keputusan dengan banyak alternatif dan kriteria.</li>
                </ul>
                
                <p>Dengan menggunakan metode SAW, proses pemilihan laptop bekas dapat dilakukan secara objektif dan sistematis, sehingga membantu pengguna dalam membuat keputusan yang tepat berdasarkan kriteria yang telah ditentukan.</p>
            </div>
        </div>
    </div>
</div>

@endsection