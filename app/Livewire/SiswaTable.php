<?php

namespace App\Livewire;

use App\Models\Siswa;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class SiswaTable extends PowerGridComponent
{
    public string $tableName = 'siswa-table-zdojsk-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Siswa::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('nama_siswa')
            ->add('nama_kursus')
            ->add('tanggal_pendaftaran')
            ->add('status_pembayaran');

    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Nama siswa', 'nama_siswa')
                ->sortable()
                ->searchable(),

            Column::make('Nama kursus', 'nama_kursus')
                ->sortable()
                ->searchable(),

            Column::make('Tanggal pendaftaran', 'tanggal_pendaftaran')
                ->sortable()
                ->searchable(),

            Column::make('Status pembayaran', 'status_pembayaran')
                ->sortable()
                ->searchable(),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }


    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
