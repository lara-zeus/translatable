<?php

namespace Filament\Resources\Pages\ViewRecord\Concerns;

use Filament\Resources\Concerns\HasActiveLocaleSwitcher;
use Filament\Resources\Pages\Concerns\HasTranslatableFormWithExistingRecordData;
use Filament\Resources\Pages\Concerns\HasTranslatableRecord;
use Illuminate\Support\Arr;

trait Translatable
{
    use HasActiveLocaleSwitcher;
    use HasTranslatableFormWithExistingRecordData;
    use HasTranslatableRecord;

    public function updatingActiveLocale(): void
    {
        $this->oldActiveLocale = $this->activeLocale;
    }

    public function getTranslatableLocales(): array
    {
        return static::getResource()::getTranslatableLocales();
    }
}
