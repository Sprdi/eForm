<?php

namespace App\Exports;

use App\Models\Pemohon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemohonsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Pemohon::select(
            'nama',
            'nik',
            'email',
            'divisi',
            'grup',
            'kebutuhan',
            'akses',
            'koneksiAplikasi',
            'mulai',
            'sampai',
            'ipSource',
            'ipDestination',
            'port',
            'initiateConnection',
            'lampiran'
        )->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama',
            'NIK',
            'Email',
            'Divisi',
            'Grup',
            'Kebutuhan',
            'Akses',
            'Koneksi Aplikasi',
            'Mulai',
            'Sampai',
            'IP Source',
            'IP Destination',
            'Port',
            'Initiate Connection',
            'Lampiran'
        ];
    }
}
