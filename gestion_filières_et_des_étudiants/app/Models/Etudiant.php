<?php

namespace App\Models;
use Database\Factories\EtudiantFactory;
use Database\Seeders\ClassesTableSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','sexe','filiere_id'];
    public function filiere(){
        return $this->belongsTo(filiere::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
