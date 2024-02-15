<?php

namespace Database\Factories;

use App\Models\Recurso;
use App\Models\Tipo;
use App\Models\Stack;
use App\Models\Extra;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recurso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Obtener IDs válidos de los modelos relacionados
        $tipoId = Tipo::inRandomOrder()->value('id');
        $stackId = Stack::inRandomOrder()->value('id');
        $extraId = Extra::inRandomOrder()->value('id');

        return [
            'id_tipos' => $tipoId,
            'titulo' => $this->faker->sentence(),
            'id_stacks' => $stackId,
            'responsable' => $this->faker->name(),
            'grabacion' => $this->faker->text(100),
            'presentacion' => $this->faker->text(100),
            'repo' => $this->faker->url(),
            'id_extras' => $extraId,
            
        ];
    }
}