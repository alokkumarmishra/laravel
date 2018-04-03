<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use MyFun;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }
    public function addPortfolio()
    {
        return view('backend.add-portfolio');

    }
    public function example()
    {
        return view('backend.example');
    }
    public function addHomepageText(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            $formData = $request->input();
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            /** for upoad file **/
            if (!empty($request->file('image'))) {
                $filename = MyFun::uploadFile($request->file('image'), IMAGEURL);
                $formData['header_image'] = $filename;
            }

            $response = MyFun::save($formData, 'tbl_homepage_text');
            if ($response) {
                \Session::flash('success', 'Record successfully added');
                return redirect('admin/view-homepage-text');
            } else {
                \Session::flash('error', 'Sorry something is wrong');
            }
        }
        return view('backend.add-homepage-text');
    }
    public function editHomepageText(Request $request)
    {
        if ($request->method() == 'POST' || $request->method() == 'post' || $request->method() == 'PUT') {
            $formData = $request->input();
            /** for upoad file **/
            if (!empty($request->file('image'))) {
                $filename = MyFun::uploadFile($request->file('image'), IMAGEURL);
                $formData['header_image'] = $filename;
                /* for delete image */
                if ($formData['image2'] != '') {
                    unlink('data/images/' . $formData['image2']);
                }
            }
            $response = MyFun::update($formData, 'tbl_homepage_text', ['id' => $formData['id']]);
            if ($response) {
                \Session::flash('success', RECORDEDIT);
                return redirect('admin/view-homepage-text');
            } else {
                \Session::flash('error', 'Sorry something is wrong');
            }
        }
        $data = MyFun::findAll('tbl_homepage_text', ['id' => $request->id]);
        return view('backend.edit-homepage-text', ['data' => $data]);

    }

    public function viewHomepageText(Request $request)
    {
        /* for the delete */
        if (!empty($request->id) && $request->type == 'del') {
            $delete = MyFun::delete('tbl_homepage_text', ['id' => $request->id]);
            if ($delete) {
                \Session::flash('success', RECORDDELETE);
                return redirect('admin/view-homepage-text');
            }
        }
        /* for the deactive */
        if (!empty($request->id) && $request->type == 'dact') {
            $update = MyFun::update(['active' => 0], 'tbl_homepage_text', ['id' => $request->id]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/view-homepage-text');
            }
        }
        if (!empty($request->id) && $request->type == 'act') {
            $update = MyFun::update(['active' => 1], 'tbl_homepage_text', ['id' => $request->id]);
            if ($update) {
                \Session::flash('success', RECORDDEACTIVE);
                return redirect('admin/view-homepage-text');
            }
        }
        $data = DB::table('tbl_homepage_text')
            ->orderBy('orders', 'asc')
            ->get();
        //$data=MyFun::findAll('tbl_homepage_text',null);
        return view('backend.view-homepage-text', ['data' => $data]);
    }

    public function fileupload(Request $request)
    {
        $options = array(
            'delete_type' => 'POST',
            'upload_dir' => MULTIMGAGE,
        );
        require_once base_path() . '\vendor\fileupload\index.php';
        $upload_handler = new \CustomUploadHandler($options);
        die;
    }

    public function sorting(Request $request)
    {
        // prd($request->input(['type']));
        $formData = $request->input();
        if (isset($formData['orders'])) {
            $orders = explode('&', $formData['orders']);
            $array = array();
            foreach ($orders as $item) {
                $item = explode('=', $item);
                $array[] = $item[1];
            }
        }
        /***************  for category features  **************/
        if (isset($formData['type']) && $formData['type'] == 'category') {
            if (!empty($array)) {
                foreach ($array as $key => $value) {
                    $response = MyFun::update(['orders' => $key], 'categories', ['id' => $value]);

                }
                echo "success";
            }
        }
        /********  for the homepage text  *******/
        if (isset($formData['type']) && $formData['type'] == 'category') {
            if (!empty($array)) {
                foreach ($array as $key => $value) {
                    $response = MyFun::update(['orders' => $key], 'homepagetext', ['id' => $value]);
                }
                echo "success";
            }
        }

    }

}
