<?php

    namespace ACEW\SalePolicy\Http\Controllers;

    use Illuminate\Http\Request;

    class SalePolicyController extends Controller
    {
        protected $_config;

        public function __construct()
        {
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