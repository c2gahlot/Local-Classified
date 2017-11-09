<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Repositories\AdvertisementRepository;
use Illuminate\Http\Request;

/**
 * Class AdvertisementController
 * @package App\Http\Controllers\Store
 */
class AdvertisementController extends Controller
{

    /**
     * @var AdvertisementRepository
     */
    public $advertisementRepository;

    /**
     * AdvertisementController constructor.
     *
     * @param AdvertisementRepository $advertisementRepository
     */
    public function __construct(AdvertisementRepository $advertisementRepository)
    {
        $this->advertisementRepository = $advertisementRepository;
    }

    /**
     * Create Advertisement.
     *
     * @return mixed
     */
    public function create()
    {
        return view('advertisement.create');
    }

    /**
     * Store Advertisement Details.
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        $advertisement = $this->advertisementRepository->save($request->all());

        return view('advertisement.show', compact('advertisement'));
    }

    /**
     * Show Advertisement Details.
     *
     * @return mixed
     */
    public function show($id)
    {
        $advertisement = $this->advertisementRepository->find($id);

        return view('advertisement.show', compact('advertisement'));
    }

    /**
     * Edit Advertisement.
     *
     * @return mixed
     */
    public function edit($id)
    {
        $advertisement = $this->advertisementRepository->find($id);

        return view('advertisement.edit', compact('advertisement'));
    }

    /**
     * Update Advertisement Details.
     *
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $advertisement = $this->advertisementRepository->update($request->all(), $id);

        return view('advertisement.show', compact('advertisement'));
    }
}
