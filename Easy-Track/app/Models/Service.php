<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_abonement extends Model
{
    use HasFactory;
    protected $table="services";
    protected $fillable =[
        "id",
        "prix",
        "Date_abonnement",
        "nom"
    ];}
