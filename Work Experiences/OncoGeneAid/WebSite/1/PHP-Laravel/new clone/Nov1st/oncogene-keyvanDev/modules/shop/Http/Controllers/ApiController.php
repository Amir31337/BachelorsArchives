<?php


namespace Modules\shop\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\catBrands\Repository\CatBrandRepositoryInterface;
use Modules\categories\Repository\CategoryRepositoryInterface;
use Modules\colors\Repository\ColorRepositoryInterface;
use Modules\filters\Repository\FilterRepositoryInterface;

class ApiController extends Controller
{
    public function filters(CategoryRepositoryInterface $repository,$cat_id)
    {
        $category=$repository->find($cat_id);

        if(file_exists(base_path('Modules/filters/Repository/FilterRepositoryInterface.php'))){
            $filterRepository=app(FilterRepositoryInterface::class);
            $parent_id=$category->getParent->id;
            $categories=[$category->id,$parent_id];
            $filter=$filterRepository->catFilters('getChild',['parent_id'=>0],$categories);
            $args['filter']=$filter;
        }

        if(file_exists(base_path('Modules/catBrands/Repository/CatBrandRepositoryInterface.php'))){
            $brandRepository=app(CatBrandRepositoryInterface::class);
            $brands=$brandRepository->getWithRelation('getBrand',['cat_id'=>$category->id]);
            $args['brands']=$brands;
        }

        if(file_exists(base_path('Modules/colors/Repository/ColorRepositoryInterface.php'))){
            $colorRepository=app(ColorRepositoryInterface::class);
            $checkHasColor=$colorRepository->getColorCategory($category->id);
            if($checkHasColor){
                $args['colors']=$colorRepository->all();
            }
        }

        return $args;
    }
}
