<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ["category", "status"];

    public static function getRules()
    {
        return [
            "category_id" => "required",
            "status" => "required",
        ];
    }

    public static function getMessages()
    {
        return [
            "category_id.required" => "Este campo é de preenchimento obrigatório.",
            "status.required" => "Este campo é de preenchimento obrigatório.",
        ];
    }
}
