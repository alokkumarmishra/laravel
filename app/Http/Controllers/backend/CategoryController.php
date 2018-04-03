<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            $this->validate($request, [
                'slug' => 'required',
            ]);
            $formData = $request->all();
            unset($formData['submit']);
            unset($formData['image']);
            $response = Category::create($formData);
            if ($response) {
                $request->session()->flash('success', RECORDADD);
                return redirect('admin/category/view');
            }
        }
        return view('backend/category/add');
    }
    public function view(Request $request)
    {
        /* for the delete */
        if (!empty($request->id) && $request->type == 'del') {
            $data = Category::find($request->id);
            $delete = $data->delete();
            if ($delete) {
                \Session::flash('success', RECORDDELETE);
                return redirect('admin/category/view');
            }
        }
        /* for the deactive */
        if (!empty($request->id) && $request->type == 'dact') {
            $update = Category::where(['id' => (int) $request->id])->update(['active' => 0]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/category/view');
            }
        }
        /* for the active */
        if (!empty($request->id) && $request->type == 'act') {
            $update = Category::where(['id' => (int) $request->id])->update(['active' => 1]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/category/view');
            }
        }
        $data = Category::orderBy('orders')->get();
        return view('backend/category/view', ['data' => $data]);
    }
    public function edit(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            $formData = $request->all();
            unset($formData['submit']);
            unset($formData['image']);
            unset($formData['_token']);
            unset($formData['_wysihtml5_mode']);
            $response = Category::where(['id' => (int) $request->id])->update($formData);
            //  if($response)
            //  {
            $request->session()->flash('success', RECORDEDIT);
            return redirect('admin/category/view');
            ///}

        }
        $data = Category::find($request->id);
        return view('backend/category/edit', ['data' => $data]);

    }

    //
}
