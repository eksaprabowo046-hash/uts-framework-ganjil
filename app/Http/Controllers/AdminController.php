<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the Admin Dashboard.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display Charts Chartjs page.
     */
    public function chartsChartjs()
    {
        return view('admin.charts_chartjs');
    }

    /**
     * Display Forms Elements page.
     */
    public function formsElements()
    {
        return view('admin.forms_elements');
    }

    /**
     * Display Tables DataTables page.
     */
    public function tablesDatatables()
    {
        return view('admin.tables_datatables');
    }

    /**
     * Display UI SweetAlerts page.
     */
    public function uiSweetalerts()
    {
        return view('admin.ui_sweetalerts');
    }

    /**
     * Display Login page.
     */
    public function login()
    {
        return view('admin.login');
    }
}