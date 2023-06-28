<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\MorphToSelect;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TagForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $data;

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            MorphToSelect::make('taggable')
                ->types([
                    MorphToSelect\Type::make(User::class)
                        ->getOptionLabelFromRecordUsing(fn (User $record): string => $record->name),
                ]),
        ];
    }

    public function submit(): void
    {
        // ...
    }

    public function render(): View
    {
        return view('livewire.tag-form');
    }

    protected function getFormModel(): Tag|string
    {
        return $this->splitter ?? Tag::class;
    }
}
