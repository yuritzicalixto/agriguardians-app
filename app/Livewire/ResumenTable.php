<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\GameSummary;

class ResumenTable extends DataTableComponent
{
    protected $model = GameSummary::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            // Column::make("Id", "id")
            //     ->sortable(),
            Column::make("User id", "user_id")
                ->sortable(),
            Column::make("Niveles completados", "niveles_completados")
                ->sortable(),
            Column::make("Tiempo total jugado", "tiempo_total_jugado")
                ->sortable(),
            Column::make("Tiempo maximo", "tiempo_maximo")
                ->sortable(),
            Column::make("Estado", "estado")
                ->sortable(),
            Column::make("Fecha", "fecha")
                ->sortable(),
            // Column::make("Created at", "created_at")
            //     ->sortable(),
            // Column::make("Updated at", "updated_at")
            //     ->sortable(),
        ];
    }
}
