<?php

namespace ACEW\SalePolicy\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class SalePolicyDataGrid extends DataGrid
{
    protected $index = 'p_id';
    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('acesettings as st')
            ->addSelect('st.id as p_id', 'st.type as type', 'st.json_content as json_content', 'st.create_at');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'p_id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'type',
            'label'      => "Type",
            'type'       => 'string',           
            'sortable'   => true,  
            'searchable' => false,          
        ]);

        $this->addColumn([
            'index'      => 'json_content',
            'label'      => "Setting Content",
            'type'       => 'string',
            'searchable' => false,
            'closure'    => true,
            'wrapper'    => function($value) {
                return '<pre>'. $value->json_content .'</pre>';
            },
        ]);
    }

    public function prepareActions()
    {
        // $this->addAction([
        //     'title'  => trans('admin::app.datagrid.edit'),
        //     'method' => 'GET',
        //     'route'  => 'admin.users.edit',
        //     'icon'   => 'icon pencil-lg-icon',
        // ]);

        // $this->addAction([
        //     'title'  => trans('admin::app.datagrid.delete'),
        //     'method' => 'POST',
        //     'route'  => 'admin.users.delete',
        //     'icon'   => 'icon trash-icon',
        // ]);
    }
}