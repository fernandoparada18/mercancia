<?php

namespace App\Http\Controllers;

use App\DataTables\CommodityDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommodityRequest;
use App\Http\Requests\UpdateCommodityRequest;
use App\Repositories\CommodityRepository;
use App\Imports\CommoditiesImport;
use Flash;
use Excel;
use App\Http\Controllers\AppBaseController;
use Response;

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
     *
     * @param CommodityDataTable $commodityDataTable
     * @return Response
     */
    public function index(CommodityDataTable $commodityDataTable)
    {
        return $commodityDataTable->render('commodities.index');
    }

    /**
     * Show the form for creating a new Commodity.
     *
     * @return Response
     */
    public function create()
    {
        return view('commodities.create');
    }

    /**
     * Store a newly created Commodity in storage.
     *
     * @param CreateCommodityRequest $request
     *
     * @return Response
     */
    public function store(CreateCommodityRequest $request)
    {
        $input = $request->all();

        $commodity = $this->commodityRepository->create($input);

        Flash::success('Commodity saved successfully.');

        return redirect(route('commodities.index'));
    }

    /**
     * Display the specified Commodity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commodity = $this->commodityRepository->find($id);

        if (empty($commodity)) {
            Flash::error('Commodity not found');

            return redirect(route('commodities.index'));
        }

        return view('commodities.show')->with('commodity', $commodity);
    }

    /**
     * Show the form for editing the specified Commodity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commodity = $this->commodityRepository->find($id);

        if (empty($commodity)) {
            Flash::error('Commodity not found');

            return redirect(route('commodities.index'));
        }

        return view('commodities.edit')->with('commodity', $commodity);
    }

    /**
     * Update the specified Commodity in storage.
     *
     * @param  int              $id
     * @param UpdateCommodityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommodityRequest $request)
    {
        $commodity = $this->commodityRepository->find($id);

        if (empty($commodity)) {
            Flash::error('Commodity not found');

            return redirect(route('commodities.index'));
        }

        $commodity = $this->commodityRepository->update($request->all(), $id);

        Flash::success('Commodity updated successfully.');

        return redirect(route('commodities.index'));
    }

    /**
     * Remove the specified Commodity from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commodity = $this->commodityRepository->find($id);

        if (empty($commodity)) {
            Flash::error('Commodity not found');

            return redirect(route('commodities.index'));
        }

        $this->commodityRepository->delete($id);

        Flash::success('Commodity deleted successfully.');

        return redirect(route('commodities.index'));
    }

    /**
     * Show the form for import a new Excel of Commodities.
     *
     * @return Response
     */
    public function importForm()
    {
        return view('import.index');
    }

    /**
     * Import excel for new commodities.
     *
     * @param CreateCommodityRequest $request
     *
     * @return Response
     */
    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new CommoditiesImport, $file);
        Flash::success('<strong>En hora buena!</strong> Importación de mercancia completada con exito.');

        return back();
    }
}
