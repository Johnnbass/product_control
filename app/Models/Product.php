<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "name",
        "brand",
        "quantity",
        "description",
    ];

    public static function getRules()
    {
        return [
            "tags" => "required",
            "status" => "required",
            "name" => "required",
            "brand" => "required",
            "description" => "required",
        ];
    }

    public static function getMessages()
    {
        return [
            "tags.required" => "Este campo é de preenchimento obrigatório.",
            "status.required" => "Este campo é de preenchimento obrigatório.",
            "name.required" => "Este campo é de preenchimento obrigatório.",
            "brand.required" => "Este campo é de preenchimento obrigatório.",
            "description.required" => "Este campo é de preenchimento obrigatório.",
        ];
    }
}
