<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'mysql';

    protected $table = 'projects';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['project_title','category','type','description','url','starting_date','ending_date','remarks','assign_to',
                            'assign_by','team_member','image','status'];





}
