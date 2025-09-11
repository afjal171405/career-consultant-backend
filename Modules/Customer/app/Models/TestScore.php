<?php

namespace modules\Customer\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YajTech\Crud\Traits\CrudModel;
use YajTech\Crud\Traits\CrudEventListener;
use Illuminate\Database\Eloquent\SoftDeletes;

class  TestScore extends Model
{
    use HasFactory, CrudModel, SoftDeletes, CrudEventListener;

    public static function getColumns(): array
    {
       return [
[
        'name' => 'sn',
        'label' => 'SN',
        'align' => 'left',
        'type' => 'text',
        'sortable' => false,
        ],
[
        'name' => '',
        'label' => '',
        'align' => 'left',
        'type' => 'text',
        'sortable' => false,
        ],
    ]
;
    }

    public static function getFields(): array
    {
       return [
[
        'name' => '',
        'label' => '',
        'type' => 'text',
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
    ]
;
    }

    public static function getTableMetas(): array
    {
       return [
             'add_button' => true,
             'refresh_button' => true,
             'export_button' => true,
             'filter_button' => true,
       ];
    }

    public static function getFilters(): array
    {
       return [
[
        'name' => '',
        'column' => '',
        'type' => 'text',
        'relation' => 'where',
        'dense' => true,
        'label' => '',
        'wrapper' => [
            'class' => 'col-3',
            ],
        ],
    ]
;
    }

    protected $fillable = [ 'extra' ];

    protected $casts = [
        'extra' => 'array'
    ];
}
