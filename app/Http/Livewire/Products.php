<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Products extends Component
{
    public string $param;
    public string $type;
    public array $data = [];

    public function render()
    {
        $template = $this->param == "list" ? $this->param : "form";
        $this->type = $this->param;

        return view("livewire.products.{$template}");
    }

    public function save(): void
    {
        $data = $this->data;

        $this->validateData();

        try {
            DB::beginTransaction();

            Product::create($data);

            DB::commit();
        } catch (Exception $e) {
            Log::error("Erro ao salvar produto: " . $e);
            DB::rollBack();
            session()->flash("error-message", "Ocorreu um comportamento inesperado, por favor, tente novamente.");
        }

        session()->flash("success-message", "Produto salvo com sucesso.");

        $this->reset();
    }

    private function validateData(): void
    {
        $this->validate(
            Product::getRules(),
            Product::getMessages()
        );
    }
}
