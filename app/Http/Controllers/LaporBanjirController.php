<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class LaporBanjirController extends Controller
{
        public function create()
        {
            return view('lapor.create');
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'nama_pelapor' => 'required',
                'lokasi'       => 'required',
                'tinggi_air'   => 'required|numeric',
            ]);

            return view('lapor.konfirmasi', compact('data'));
        }

        public function index()
        {
            $laporan = [
                [
                    'nama_pelapor' => 'Ghariza Ghadiza',
                    'lokasi'       => 'Kopo',
                    'tinggi_air'   => 85, 
                    'waktu'        => '10 menit yang lalu'
                ],
                [
                    'nama_pelapor' => 'Azzalea Marsya',
                    'lokasi'       => 'Ciamis',
                    'tinggi_air'   => 50, 
                    'waktu'        => '40 menit yang lalu'
                ],
                [
                    'nama_pelapor' => 'Shafa Kirana',
                    'lokasi'       => 'Gedebage',
                    'tinggi_air'   => 20, 
                    'waktu'        => '1 jam yang lalu'
                ],
            ];

            return view('lapor.index', compact('laporan'));
        }
}