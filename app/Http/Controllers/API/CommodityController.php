<?php

namespace App\Http\Controllers\API;

use App\Models\Commodity;
use App\Repositories\CommodityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\CommodityResource;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CommodityController
 * @package App\Http\Controllers\API
 */

class CommodityController extends AppBaseController
{
    /** @var  CommodityRepository */
    private $commodityRepository;

    public function __construct(CommodityRepository $commodityRepo)
    {
        $this->commodityRepository = $commodityRepo;
    }

    /**
     * Display a listing of the Commodity.
     * GET|HEAD /commodities
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $commodities = $this->commodityRepository->all();
        $resource = CommodityResource::collection($commodities);
        return datatables()->of($resource)->toJson();
    }

}