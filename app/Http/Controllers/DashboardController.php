<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Purchase;
use App\Models\User;
use App\Repositories\RecommendationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public $recommendationRepository;

    public function __construct(RecommendationRepository $recommendationRepository)
    {
        $this->recommendationRepository = $recommendationRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recommendedBooks = $this->recommendationRepository->recommendations();
        return view('user.dashboards-analytics', compact('recommendedBooks'));
    }
}
