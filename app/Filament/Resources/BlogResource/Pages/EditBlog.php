<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        
        return $data;
    }

    protected function afterSave(): void
    {
        // Aquí puedes obtener el ID del registro editado
        $editedRecordId = $this->record->id;
        // Hacer algo con el ID, por ejemplo, loguearlo
        \Log::info('Edited record ID: ' . $editedRecordId);
    }
}
