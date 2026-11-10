<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nomor_surat' => 'SK-001/FT/X/2026',
                'tanggal' => '2026-10-14',
                'tujuan' => 'Fakultas Teknik',
                'perihal' => 'Pengantar Proposal',
                'keterangan' => 'Pengantar proposal kegiatan'
            ],
            [
                'nomor_surat' => 'SK-002/BA/X/2026',
                'tanggal' => '2026-10-15',
                'tujuan' => 'Biro Akademik',
                'perihal' => 'Laporan Kegiatan',
                'keterangan' => 'Laporan kegiatan bulan Oktober'
            ],
            [
                'nomor_surat' => 'SK-003/LPM/X/2026',
                'tanggal' => '2026-10-16',
                'tujuan' => 'LPM',
                'perihal' => 'Permohonan Data',
                'keterangan' => 'Permohonan data mutu akademik'
            ],
        ];

        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
