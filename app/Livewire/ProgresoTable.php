<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\GameProgress;

class ProgresoTable extends DataTableComponent
{
    protected $model = GameProgress::class;

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
            Column::make("Level", "level")
                ->sortable(),
            Column::make("Time played", "time_played")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
