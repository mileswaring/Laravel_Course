<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// : array is explicilty an array
class Job extends Model{
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}

?>