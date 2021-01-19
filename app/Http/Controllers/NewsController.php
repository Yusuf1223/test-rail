<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\News\NewsRequest;
use App\Models\Image;
use App\Models\News;
use App\Repositories\NewsRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $news = $this->newsRepository->all();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return \view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(NewsRequest $request)
    {
        $this->newsRepository->create($request->validated());
        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function show(News $news)
    {
        return \view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function edit(News $news)
    {
        return \view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param News $news
     * @return Application|RedirectResponse|Redirector
     */
    public function update(NewsRequest $request, News $news)
    {
        $this->newsRepository->update($request->validated(), $news);
        return redirect('news/' . $news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function destroy(News $news)
    {
        $this->newsRepository->delete($news);
        return redirect('news');
    }
}
