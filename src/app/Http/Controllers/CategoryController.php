<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Vof\Admin\Models\Admin;
use Validator;
use Vof\Category\Http\Helpers\CategoryHelper;
use Vof\Category\Models\Category;
use Vof\Category\Models\CategoryMetaType;

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
        /** @var Collection $collection */
        $collection = Category::with('categoryContent')->get();

        return view('vof.admin.category::index', ['categorys' => $collection]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        /** @var Collection $collectionMetaType */
        $collectionMetaType = CategoryMetaType::all();

        return view('vof.admin.category::create', ['metaTypes' => $collectionMetaType]);
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
        Category::where('id', $id)->delete();

        return redirect(route('category'))->with('success', trans('vof.admin.category::category.index.partials.table.category-delete-success'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        return null;
    }
}
