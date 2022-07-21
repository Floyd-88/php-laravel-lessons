<?php
namespace App\Http\Controllers\Hobbie;

use App\Models\Hobbie;
use App\Http\Filters\HobbieFilter;
use App\Http\Requests\Hobbie\FilterRequest;
use App\Http\Controllers\Hobbie\BaseController;
use App\Http\Resources\Hobbie\HobbieResource;

class IndexController extends BaseController
{
public function __invoke(FilterRequest $request)
{
    // $this->authorize('view', auth()->user());
    $data = $request->validated();
    $filter = app()->make(HobbieFilter::class, ['queryParams' => array_filter($data)]);

    // $hobbie = Hobbie::filter($filter)->get();
    $page = $data['page'] ?? 1;
    $perPage = $data['per_page'] ?? 10;
    
    $hobbie = Hobbie::filter($filter)->paginate($perPage, ['*'], 'page', $page);
    // return HobbieResource::collection($hobbie);
    return view('hobbie.index', compact('hobbie'));

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
