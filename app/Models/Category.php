<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['category_name','parent_id'];

/**
* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
*/
 public function parent() {
    return $this->belongsTo(Category::class,'parent_id');
} 

/**
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function childs() {
    return $this->hasMany(Category::class,'parent_id','id');
}

public function products()
{
    return $this->belongsToMany(Product::class, 'product_category', 'product_id', 'category_id');
}

}
