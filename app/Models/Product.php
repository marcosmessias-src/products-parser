<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_t';
    const UPDATED_AT = 'last_modified_t';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "code",
        "status",
        "imported_t",
        "url",
        "creator",
        "product_name",
        "quantity",
        "brands",
        "categories",
        "labels",
        "cities",
        "purchase_places",
        "stores",
        "ingredients_text",
        "traces",
        "serving_size",
        "serving_quantity",
        "nutriscore_score",
        "nutriscore_grade",
        "main_category",
        "image_url"
    ];
}
