<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Repositories\AdvertisementRepository;

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
     * Show Advertisement Details.
     *
     * @return mixed
     */
    public function show($id)
    {
        $advertisement = $this->advertisementRepository->find($id);

        return view('advertisement.show', compact('advertisement'));
    }
}
