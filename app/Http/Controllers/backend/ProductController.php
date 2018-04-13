<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use MyFun;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function add(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            // $this->validate($request, [
            //     'slug' => 'required',
            // ]);
            $formData = $request->all();
            if ($request->hasFile('image')) {
                $file_name = MyFun::uploadFile($request->file('image'), null);
                $formData['featured_image'] = $file_name;
            }
            unset($formData['submit']);
            unset($formData['image']);
            unset($formData['_token']);
            unset($formData['_wysihtml5_mode']);
            /* for slug */
            if ($formData['slug'] == '') {
                $formData['slug'] = MyFun::slug($formData['name']);
            }

            $response = Product::create($formData);
            //prd($formData);
            if ($response) {
                $request->session()->flash('success', RECORDADD);
                return redirect('admin/product/view');
            }
        }
        return view('backend/product/add', ['data' => Common::getCategory()]);
    }
    public function view(Request $request)
    {
        /* for the delete */
        if (!empty($request->id) && $request->type == 'del') {
            // $data = Category::find($request->id);
            // $delete = $data->delete();
            $delete = Product::where(['id' => (int) $request->id])->update(['active' => 'del']);
            if ($delete) {
                \Session::flash('success', RECORDDELETE);
                return redirect('admin/product/view');
            }
        }
        /* for the deactive */
        if (!empty($request->id) && $request->type == 'dact') {
            $update = Product::where(['id' => (int) $request->id])->update(['active' => 0]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/product/view');
            }
        }
        /* for the active */
        if (!empty($request->id) && $request->type == 'act') {
            $update = Product::where(['id' => (int) $request->id])->update(['active' => 1]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/product/view');
            }
        }
        $data = Product::where('active', '<>', 'del')->orderBy('orders')->get();
        return view('backend/product/view', ['data' => $data]);
    }
    public function edit(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            $formData = $request->all();
            if ($request->hasFile('image')) {               
                $file_name = MyFun::uploadFile($request->file('image'), null);
                $formData['featured_image'] = $file_name;
            }
            else{
                $formData['featured_image'] = $formData['image2'];
            }            
            unset($formData['submit']);
            unset($formData['image']);
            unset($formData['_token']);
            unset($formData['_wysihtml5_mode']);
            unset($formData['image2']);
            /* for slug */
            if ($formData['slug'] == '') {
                $formData['slug'] = MyFun::slug($formData['name']);
            }

            $response = Product::where(['id' => (int) $request->id])->update($formData);
            //  if($response)
            //  {
            $request->session()->flash('success', RECORDEDIT);
            return redirect('admin/product/view');
            ///}

        }
        $data = Product::find($request->id);
        return view('backend/product/edit', ['data' => $data]);

    }

    //
}
