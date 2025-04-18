<?php

namespace App\Filament\Resources\StudentResource\Pages;

use Filament\Actions;
use App\Models\Student;
use App\Imports\ImportStudents;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StudentResource;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): ?View 
    {
        $data = Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file = '';
    
    public function save(){
        // Student::create([
        //     'nis' => '123',
        //     'name' => 'cobacoba',
        //     'gender' => 'Male'
        // ]);

        if ($this->file != ''){
            Excel::import(new ImportStudents, $this->file);
        }
    }

    public function getTabs(): array
{
    return [
        'all' => Tab::make(),
        'accept' => Tab::make()
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'accept')),
        'off' => Tab::make()
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'off')),
    ];
}


}
