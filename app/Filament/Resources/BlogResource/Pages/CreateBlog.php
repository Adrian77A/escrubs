<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Models\Blog;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        
        return $data;
    }

    protected function afterCreate(): void
    {
        // Aquí puedes obtener el ID del registro creado
        $createdRecordId = $this->record->id;
        // Hacer algo con el ID, por ejemplo, loguearlo
        \Log::info('Created record ID: ' . $createdRecordId);
    }
}
