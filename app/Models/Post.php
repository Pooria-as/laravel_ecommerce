<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable=['post_title_EN','post_title_FA','post_image','details_EN','details_FA'];
}
