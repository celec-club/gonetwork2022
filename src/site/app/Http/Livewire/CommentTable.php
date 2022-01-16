<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CommentTable extends DataTableComponent
{
    protected string $pageName = 'messages';
    protected string $tableName = 'messages';
    protected $queryString = [];
    public bool $showSearch = false;
    public function columns(): array
    {
        return [
            Column::make('comment'),
            Column::make('event'),
            Column::make('created_at'),
        ];
    }

    public function query(): Builder
    {
        return Comment::query();
    }
}
