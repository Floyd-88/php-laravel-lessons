<?php
namespace App\Http\Controllers\Admin\Hobbie;


use App\Models\Hobbie;
use App\Http\Filters\HobbieFilter;
use App\Http\Requests\Hobbie\FilterRequest;
use App\Http\Controllers\Hobbie\BaseController;

class IndexController extends BaseController
{
public function __invoke(FilterRequest $request)
{
    $data = $request->validated();
    $filter = app()->make(HobbieFilter::class, ['queryParams' => array_filter($data)]);

    // $hobbie = Hobbie::filter($filter)->get();
    $hobbie = Hobbie::filter($filter)->paginate(15);
    return view('admin.hobbie.index', compact('hobbie'));

    // $hobbie = Hobbie::find(1);
    // dd($hobbie->category_hobbie);

    // $category = Categoryhobbie::find(1);
    // dd($category->hobbies);

    // $tag = TagHobbie::find(2);
    // dd($tag->hobbie);

    // $tag = Hobbie::find(2);
    // dd($tag->hobbies);
}
   
}
