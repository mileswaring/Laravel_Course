<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
// : array is explicilty an array
class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}

?>