<?php
namespace ACEW\GeneralSetting\Http\Controllers;

use Illuminate\Http\Request;
//use ACEW\SalePolicy\Repositories\AceSettingsRepository;

class GeneralSettingController extends Controller
{
    protected $_config;
    //protected $aceSettingsRepository;

    public function __construct()
    {
        //$this->aceSettingsRepository = $aceSettingsRepository;
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
}