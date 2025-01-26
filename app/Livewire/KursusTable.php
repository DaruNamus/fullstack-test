<?php

namespace App\Livewire;

use App\Models\Kursus;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class KursusTable extends PowerGridComponent
{
    public string $tableName = 'kursus-table-swadpe-table';

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Kursus::query()->find($id)->update([
            $field => e($value),
        ]);
    }

    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::exportable('export')
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV), 
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Kursus::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('nama_kursus')
            ->add('deskripsi')
            ->add('harga')
            ->add('status')
            ->add('jumlah_siswa', function (Kursus $kursus) {
                return $kursus->getJumlahSiswaAttribute();
            }); // Use a closure to retrieve jumlah_siswa
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Nama Kursus', 'nama_kursus')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Deskripsi', 'deskripsi')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Harga', 'harga')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Status', 'status')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Jumlah Siswa', 'jumlah_siswa'), // Ensure this column is set up correctly
            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete(string $rowId): void
    {
        Kursus::find($rowId)->delete();
    }

    public function actions(Kursus $row): array
    {
        return [
            Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('pg-btn-red dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('delete', ['rowId' => $row->id]),
        ];
    }

}
