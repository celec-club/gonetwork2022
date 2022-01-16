<?php

namespace App\Http\Livewire;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UserTable extends DataTableComponent {

    protected string $pageName = 'users';
    protected string $tableName = 'users';
    protected $queryString = [];

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function rowView(): string {
         return 'table';
    }

    public function exportSelected() {
        return Excel::download(new UsersExport, 'users-gonetwork.xlsx');
    }

    public function columns(): array {
        return [
            Column::make('id'),
            Column::make('fullname')->searchable(),
            Column::make('email')->searchable(),
            Column::make('phone'),
            Column::make('education_level'),
            Column::make('field'),
            Column::make('matricule'),
            Column::make('Usthb students', "is_usthb")->sortable(),
            Column::make('Celec memeber', "is_member")->sortable(),
            Column::make('Is Accepted', "accepted"),
            Column::make('Number of scans', "scanned_times"),
            Column::make('created_at')->sortable(),
        ];
    }

    public function query(): Builder {
        return User::orderByDesc("id");
    }

    public function reject(int $userId) {
        return User::findOrFail($userId)->update(["accepted" => false]);
    }

    public function accept(int $userId) {
        return User::findOrFail($userId)->update(["accepted" => true]);
    }

}
