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

    public function charts()
    {
        return $this->chartsChartjs();
    }

    /**
     * Display Forms Elements page.
     */
    public function formsElements()
    {
        return view('admin.forms_elements');
    }

    public function forms()
    {
        return $this->formsElements();
    }

    /**
     * Display Tables DataTables page.
     */
    public function tablesDatatables()
    {
        return view('admin.tables_datatables');
    }

    public function tables()
    {
        return $this->tablesDatatables();
    }

    /**
     * Display UI SweetAlerts page.
     */
    public function uiSweetalerts()
    {
        return view('admin.ui_sweetalerts');
    }

    public function sweetalerts()
    {
        return $this->uiSweetalerts();
    }

    public function alerts()
    {
        return $this->uiSweetalerts();
    }

    /**
     * Display Login page.
     */
    public function login()
    {
        return view('admin.login');
    }
}
