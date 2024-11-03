<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterMisi;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterMisi::factory()->create([
            'isi' => 'Menyelenggarakan lembaga pendidikan, pelatihan, sosial dan keagamaan yang berkualitas, mandiri dan berdaya saing.',
        ]);

        MasterMisi::factory()->create([
            'isi' => 'Melakukan kegiatan antar lembaga, Instansi, untuk meningkatkan pelayanan kepada masyarakat',
        ]);

        MasterMisi::factory()->create([
            'isi' => 'Menghasilkan SDM yang unggul dan memiliki akhlak mulia dengan nilai-nilai keimanan dan ketaqwaan kepada Allah SWT.',
        ]);

        MasterMisi::factory()->create([
            'isi' => 'Melaksanakan tata kelola lembaga yang baik, dinamis, akuntabel, trasparan dan menjaga nilai-nilai kemanusian.',
        ]);
    }
}