<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\User;
use App\Video;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session; //this is to check Hash Password

class AdminController extends Controller
{

    public function dashboard(){
        
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin' => '1'])->first();
        if(Hash::check($current_password, $check_password->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password, $check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/admin/settings')->with('flash_message_error','Password failed to Update!');
            }
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Logged out successfully');
    }

    public function Users()
    {
        $users = User::all();
        return view('admin/clients/manageuser',compact('users'));
        # code...
    }

    public function editUser(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            User::where(['id'=>$id])->update(['name'=>$data['name'], 'email'=>$data['email'], 'password'=>$data['password']]);
            return redirect('/admin/manage-users')->with('flash_message_success', 'User updated Successfully!');
        }
        $UserDetails = User::where('id', $id)->first();
        // $levels = User::where(['parent_id'=>0])->get();

        return view('admin.clients.edit_user')->with(compact('UserDetails'));
    }

    public function deleteUser($id = null){
        if (!empty($id)){
            User::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'User deleted Successfully!');
        }
    }

    public function addImage()
    {
        $category = Category::all();
        return view('admin.images.add_image', compact('category'));
    # code...
    }    

    public function addVideo()
    {
        $category = Category::all();
        return view('admin.videos.add_video', compact('category'));
    # code...
    }

    public function ManageImages()
    {
        // $id = Auth::user()->id;
        $images = Image::all();
        return view('admin.images.manage_images', compact('images'));
    }   

    public function ManageVideos()
    {
        // $id = Auth::user()->id;
        $videos = Video::all();
        return view('admin.videos.manage_videos', compact('videos'));
    }



}
