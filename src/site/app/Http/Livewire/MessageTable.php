<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class MessageTable extends DataTableComponent
{
    protected string $pageName = 'messages';
    protected string $tableName = 'messages';
    protected $queryString = [];
    public bool $showSearch = false;

    public function columns(): array
    {
        return [
            Column::make('name'),
            Column::make('message'),
            Column::make('email'),
            Column::make('created_at'),
        ];
    }

    public function query(): Builder
    {
        return Message::query();
    }
}
