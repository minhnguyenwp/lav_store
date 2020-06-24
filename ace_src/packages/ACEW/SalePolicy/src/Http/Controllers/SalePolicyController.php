<?php
namespace ACEW\SalePolicy\Http\Controllers;

use Illuminate\Http\Request;
use ACEW\SalePolicy\Repositories\AceSettingsRepository;

class SalePolicyController extends Controller
{
    protected $_config;
    protected $aceSettingsRepository;

    public function __construct(
        AceSettingsRepository $aceSettingsRepository
    )
    {
        $this->aceSettingsRepository = $aceSettingsRepository;
        $this->_config = request('_config');
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = $this->aceSettingsRepository->findOrFail($id);

        return view($this->_config['view'], compact('content'));
    }

    /**
     * Edit the previously created slider item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
        $this->validate(request(), [
            'type'      => 'string|required',
            'title' => 'required',
            'image.*'    => 'sometimes|mimes:jpeg,bmp,png,jpg',
        ]);

        if ( is_null(request()->image)) {
            session()->flash('error', trans('salepolicy::app.sale-policy.update-fail'));
            
            return redirect()->back();
        }

        $result = $this->aceSettingsRepository->updateItem(request()->all(), $id);

        if ($result) {
            session()->flash('success', trans('salepolicy::app.sale-policy.update-success'));
        } else {
            session()->flash('error', trans('salepolicy::app.sale-policy.update-fail'));
        }

        return redirect()->route($this->_config['redirect']);
    }
}