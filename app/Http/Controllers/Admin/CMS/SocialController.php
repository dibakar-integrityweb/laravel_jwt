<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CMS\SocialRequest;
use App\ResponseTrait;
use App\Services\Admin\CMS\SocialService;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    use ResponseTrait;
    private $socialService;

    public function __construct(SocialService $socialService)
    {
        $this->socialService = $socialService;
    }
    public function index(Request $request)
    {
        if( $request->ajax() ){
            return $this->socialService->getDatatable($request->all());
        }
        return view('admin.cms.social.index');
    }

    public function create()
    {
        return view('admin.cms.social.create');
    }

    public function store(SocialRequest $request)
    {
        return $this->success('','Social link has been created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.cms.social.edit');
    }

    public function update(SocialRequest $request, string $id)
    {
        return $this->success('','Social link has been updated successfully.');
    }

    public function destroy(string $id)
    {
        //
    }

    public function status(Request $request)
    {
        //
    }

    public function action(Request $request)
    {
        //
    }

}
