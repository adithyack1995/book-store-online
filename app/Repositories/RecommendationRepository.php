<?php

namespace App\Repositories;

use App\Constants\LeadSubmission;
use App\Models\Book;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class RecommendationRepository
{
    public function recommendations()
    {
        $user = auth()->user();
        // Retrieve user's purchased books
        $purchasedBooks = $user->purchases->pluck('book');
        // Example: Recommend books from the same genre
        $recommendedBooks = Book::whereIn('genre', $purchasedBooks->pluck('genre')->unique())
            ->whereNotIn('id', $purchasedBooks->pluck('id'))
            ->take(5)
            ->get();
        return $recommendedBooks;
    }
}
