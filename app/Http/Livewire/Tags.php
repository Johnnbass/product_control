<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Tags extends Component
{
    public string $param;
    public string $type;
    public array $data = [];

    public function render()
    {
        $template = $this->param == "list" ? $this->param : "form";
        $this->type = $this->param;

        return view("livewire.tags.{$template}");
    }

    public function save(): void
    {
        $data = $this->data;

        $this->validateData();

        try {
            DB::beginTransaction();

            Tag::create($data);

            DB::commit();
        } catch (Exception $e) {
            Log::error("Erro ao criar tag: " . $e);
            DB::rollBack();
            session()->flash("error-message", "Ocorreu um comportamento inesperado, por favor, tente novamente.");
        }

        session()->flash("success-message", "Tag criada com sucesso.");

        $this->reset();
    }

    private function validateData(): void
    {
        $this->validate(
            Tag::getRules(),
            Tag::getMessages()
        );
    }
}
