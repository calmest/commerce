<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addAds(Request $request){
        if($request->isMethod('post')){

            $avatar = $request->avatar;
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path().'/storage/products', $filename);

            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $ad = new Ads;
            $ad->name = $data['ad_name'];
            $ad->image = $filename;
            $ad->description = $data['ad_description'];
            $ad->url = $data['ad_url'];

            $ad->save();
            return redirect('/admin/view-ads')->with('flash_message_success', 'Ad created Successfully!');
        }
        return view('admin.ads.add_ad');
    }

    public function editAds(Request $request, $id = null){
        if($request->isMethod('post')){

            $data = $request->all();

            Ads::where(['id'=>$id])->update(['name'=>$data['ad_name'], 'description'=>$data['ad_description'], 'image'=>$filename, 'url'=>$data['ad_url']]);
            return redirect('/admin/view-ads')->with('flash_message_success', 'Ad updated Successfully!');
        }
        $adDetails = Ads::where('id', $id)->first();
        //$levels = Ads::where(['parent_id'=>0])->get();

        return view('admin.ads.edit_ad')->with(compact('adDetails'));
    }

    public function deleteAds($id = null){
        if (!empty($id)){
            Ads::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Ad deleted Successfully!');
        }
    }

    public function viewAds(){
        //echo "test"; die;
        $ads = Ads::get();
        //$categories = json_decode(json_encode($categories));
        //echo "<pre>"; print_r($categories); die;
        return view('admin.ads.view_ads')->with(compact('ads'));
    }
}
