<?php

namespace App\Services\Admin\CMS;

use App\Models\Social;
use Yajra\DataTables\Facades\DataTables;

class SocialService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getDatatable($request)
   {
        $data = Social::latest('id');
        return DataTables::of($data)
            ->addIndexColumn()
            
            ->addColumn('status', function ($data) {
                if($data->status == 1){
                    $status = '<span class="badge rounded-pill bg-label-success">Success</span>';
                }else{
                    $status = '<span class="badge rounded-pill bg-label-danger">Inactive</span>';
                }
                return $status;
            })
            ->addColumn('action', function($data){
                $actionButton ='';
                return $actionButton;
            })
            ->filter(function ($instance) use ($request) {
                if (!empty($request['search'])) {
                    $instance->where(function($w) use($request){
                        $search = $request['search'];
                        $w->orWhere('name', 'LIKE', "%$search%");
                    });
                }
            })
            ->rawColumns([
                'action',
                'status'
            ])
            ->make(true);
   }
}
