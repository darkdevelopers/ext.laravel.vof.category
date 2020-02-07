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
use Vof\Category\Models\CategoryMeta;
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

        /** @var Collection $collectionCategory */
        $collectionCategory = Category::with('categoryContent')->get();

        return view('vof.admin.category::create', ['metaTypes' => $collectionMetaType, 'categories' => $collectionCategory]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        dd("edit");
        return null;
    }

    public function update(Request $request, int $id)
    {
        dd("update");
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:20|max:60',
            'description' => 'required|max:512',
            'categoryParents' => 'required',
            'metaTitle' => 'required|max:60',
            'metaType' => 'required'
        ]);

        if ($validator->fails()) {
            $failedRules = $validator->failed();
            dd($failedRules);
            if(isset($failedRules['title'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.titleempty'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['description'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.descriptionempty'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['metaTitle'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.metatitleempty'))->withInput()->withErrors($validator, 'error');
            }
            if (isset($failedRules['description']['Min'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.descriptionshort'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['description']['Max'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.descriptionlong'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['title']['Min'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.titleshort'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['title']['Max'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.titlelong'))->withInput()->withErrors($validator, 'error');
            }
            if(isset($failedRules['metaTitle']['Max'])) {
                return redirect(route('category.create'))->with('error', trans('vof.admin.category::category.create.errors.metatitlelong'))->withInput()->withErrors($validator, 'error');
            }
        }

        $categorie = Category::create([
            'parent_id' => $request->get('categoryParents'),
            'active' => true,
            'include_in_menu' => true,
        ]);

        dd();

        $categorieMeta = CategoryMeta::create([
            'category_id' => $categorie->id,
            'meta_title' => $request->get('metaTitle'),
            'meta_description' => $request->get('description')
        ]);
        return null;
    }
}
