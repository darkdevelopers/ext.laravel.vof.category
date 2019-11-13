<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Vof\Admin\Models\Admin;
use Validator;
use Vof\Category\Models\Category;

/**
 * Class CategoryController
 * @package Vof\Category\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * UsermanagmentController constructor.
     */
    public function __construct()
    {
        $this->middleware(['web', 'auth:admin']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categorys = Category::with('categoryContent')->get();
        var_dump($categorys);
        exit;
        return view('vof.admin.category::index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return null;
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        return null;
    }

    public function update(Request $request, int $id)
    {
        return null;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(int $id)
    {
        return null;
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        return null;
    }
}
