<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type extends Model
{
    /** @use HasFactory<\Database\Factories\TypeFactory> */
    use HasFactory;

    protected $table = 'types';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    public $timestamps = false;

    //Relationship: Type - Shoe: 1 - n
    public function shoes(){
        return $this->hasMany(Shoe::class);
    }

    /* Query Builder
        public function getAllTypes(): \Illuminate\Support\Collection
        {
            $type = DB::table('types')
                ->get();
            return $type;
        }
     */
}
