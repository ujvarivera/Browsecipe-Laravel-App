<?php

namespace App\Filament\Resources\RecipeResource\Pages;

use App\Filament\Resources\RecipeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRecipe extends CreateRecord
{
    protected static string $resource = RecipeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
