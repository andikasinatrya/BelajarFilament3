<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Models\User;
use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTableQuery(): ?Builder
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return parent::getTableQuery();
        }
    
        return parent::getTableQuery()
            ->whereDoesntHave('roles', function ($query) {
                $query->where('name', 'admin');
            });
    }
}
