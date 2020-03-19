<?php
use App\Models\Employee;
use App\User;
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'uuid' => (String) Str::uuid(),
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        DB::beginTransaction();
        try{
            User::create($data);
            DB::commit();
        }
        catch(\Exception $e){
            DB::rollback();
            dd($e->getMessage());
        }
    }
}
