<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Models are here to interact with the database and to set what
    // The Primary Key, Table Name is and what are the fillables

    // To disable audit timestamps
    public $timestamps = false;

    // Table Name
    protected $table = 'customer_table';

    // Primary Key
    protected $primaryKey = 'cust_id';

    // Fillables are basically the columns that you can change, edit, or add into
    protected $fillable = [
        'cust_name',
        'cust_address'
    ];
}