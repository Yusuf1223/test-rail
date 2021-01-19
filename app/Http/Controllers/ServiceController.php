<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\Service\ServiceRequest;
use App\Models\Service;
use App\Repositories\ServiceRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * @
     */
    private $serviceRepository;

    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $services = $this->serviceRepository->all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return RedirectResponse
     */
    public function store(ServiceRequest $request)
    {
        $this->serviceRepository->create($request->validated());

        return redirect('services');
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return Application|Factory|View
     */
    public function show(Service $service)
    {
        $service->load('image');
//
//        dd($service);

        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return Application|Factory|View
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Service $service
     * @return Application|RedirectResponse|Redirector
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $this->serviceRepository->update($request->validated(), $service);

        return redirect('services/' . $service->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Service $service)
    {
        $this->serviceRepository->delete($service);

        return redirect('services');
    }

}

