<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'hire_date',
        'job_id',
        'salary',
        'department_id',
    ];



    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
