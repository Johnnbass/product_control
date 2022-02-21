<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index", [
        "title" => "Home",
        "page" => "home",
        "param" => "list"
    ]);
})->name("home");

Route::prefix("produtos")->group(function () {
    Route::get("/", function () {
        return view("index", [
            "title" => "Produtos",
            "page" => "products",
            "param" => "list"
        ]);
    })->name('products.list');
    Route::get("/novo", function () {
        return view("index", [
            "title" => "Novo Produto",
            "page" => "products",
            "param" => "new"
        ]);
    })->name('products.new');
    Route::get("/editar", function () {
        return view("index", [
            "title" => "Editar Produto",
            "page" => "products",
            "param" => "edit"
        ]);
    })->name('products.edit');
});

Route::prefix("tags")->group(function () {
    Route::get("/", function () {
        return view("index", [
            "title" => "Tags",
            "page" => "tags",
            "param" => "list"
        ]);
    })->name('tags.list');
    Route::get("/novo", function () {
        return view("index", [
            "title" => "Nova Tag",
            "page" => "tags",
            "param" => "new"
        ]);
    })->name('tags.new');
    Route::get("/editar", function () {
        return view("index", [
            "title" => "Editar Tag",
            "page" => "tags",
            "param" => "edit"
        ]);
    })->name('tags.edit');
});

Route::prefix("relatorios")->group(function () {
    Route::get("/", function () {
        return view("index", [
            "title" => "Relatórios",
            "page" => "reports",
            "param" => "list"
        ]);
    })->name('reports.list');
    Route::get("/gerar", function () {
        return view("index", [
            "title" => "Gerar Relatório",
            "page" => "reports",
            "param" => "generate"
        ]);
    })->name('reports.generate');
});
