<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
  use HasFactory;

  protected $fillable = [
    'country',
    'total_cases',
    'new_cases',
    'total_deaths',
    'new_deaths',
    'total_recovered',
    'active_cases',
    'critical',
    'total_in_1M',
    'deaths_in_1M',
    'population',
    'case_in_x_ppl',
    'death_in_x_ppl',
    'test_in_x_ppl',
    'daysbefore'
  ];
}
