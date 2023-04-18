<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Option
 *
 * @property $id               // Property that represents the ID of the record in the options table
 * @property $description      // Property that represents the description of the option
 * @property $category_id      // Property that represents the ID of the category to which the option belongs
 * @property $created_at       // Property that represents the creation date of the record
 * @property $updated_at       // Property that represents the update date of the record
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder  // Indicates that the model can be used with Eloquent's query builder
 */
class Option extends Model
{
    
    static $rules = [                // Defines the validation rules for the model's fields
		'description' => 'required',      // The 'description' field is required
		'category_id' => 'required',      // The 'category_id' field is required
    ];

    protected $perPage = 20;           // Defines the number of records per page for result pagination

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','category_id'];     // Defines the fields that can be mass-updated through the 'create' or 'update' function


} 
