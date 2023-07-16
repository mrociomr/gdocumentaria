<?php
namespace Database\Seeders;

use App\Models\Administrado;
use App\Models\Asignacion;
use App\Models\Indicacion;
use App\Models\Movimiento;
use App\Models\Oficina;
use App\Models\Procedimiento;
use App\Models\TipoDocumento;
use App\Models\TipoPersona;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        
        TipoPersona::create([
            'nombre' => 'Persona Natural'
        ]);

        TipoPersona::create([
            'nombre' => 'Persona Júridica'
        ]);

        // Administrado::factory()->count(10)->create();
        // TipoDocumento::factory()->count(10)->create();
        // Indicacion::factory()->count(10)->create();
        // Procedimiento::factory()->count(10)->create();
        // Oficina::factory()->count(10)->create();
        // Asignacion::factory()->count(10)->create();

    }
}
