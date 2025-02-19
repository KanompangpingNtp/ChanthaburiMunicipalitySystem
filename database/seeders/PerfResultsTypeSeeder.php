<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PerfResultsType;

class PerfResultsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'แผนและความก้าวหน้าในการดำเนินงานและการใช้จ่ายงบประมาณประจำปี'],
            ['type_name' => 'แผนดำเนินงานและการใช้งบประมาณประจำปี'],
            ['type_name' => 'รายงานการกำกับติดตามการดำเนินงานและการใช้งบประมาณประจำปีรอบ6เดือน'],
            ['type_name' => 'รายงานผลการดำเนินงานประจำปี'],
            ['type_name' => 'แผนอัตรากำลัง3ปี'],

            ['type_name' => 'โอนเงินงบประมาณรายจ่าย'],
            ['type_name' => 'งบทดลอง'],
            ['type_name' => 'ข้อมูลสาระสำคัญในสัญญา'],
            ['type_name' => 'รายรับ/รายจ่าย'],
            ['type_name' => 'สัญญาจ้าง/สัญญาซื้อ'],
        ];

        foreach ($data as $item) {
            PerfResultsType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
