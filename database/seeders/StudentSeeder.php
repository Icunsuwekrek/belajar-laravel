<?php 
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    public function run()
{
    student::Factory()->count(5)->create();
}
}


?>