<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class employee extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $fillable = ['nameEN',"nameAR", 'address', 'mobile','email','branch','titleJob','socialContact','dateStart','section','supervisor','nationalID','steteAMP'];
}
