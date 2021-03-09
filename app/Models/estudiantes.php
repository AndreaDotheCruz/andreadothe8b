<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class estudiantes extends Model
{
protected $table ='estudiantes';  
protected $primaryKey="Matricula";
protected$fillable = [
	'Nombre','Direccion','created_at','updated_at'
	];  
}
