<?php

namespace App\Filament\Resources\StudentHasClassResource\Pages;

use App\Filament\Resources\StudentHasClassResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentHasClass extends CreateRecord
{
    protected static string $resource = StudentHasClassResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        dd($data['classrooms_id']); 
        return $data;
    }
}
