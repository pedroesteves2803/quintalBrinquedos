<?php

namespace App\Http\Controllers;

use App\Enums\SubjectTypeEnum;
use App\Models\AboutUs;
use App\Models\Budget;
use App\Models\Catalog;
use App\Models\Client;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Counters;
use App\Models\CredibilityStatements;
use App\Models\Home;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $home = Home::first();
        $counters = Counters::first();
        $aboutUs = AboutUs::first();

        $catalog = Catalog::first();
        $products = Product::all();

        $credibilityStatements = CredibilityStatements::first();
        $budget = Budget::first();
        $client = Client::first();

        $contacts = Contact::limit(3)->where(['active' => 1, 'subject_type' => SubjectTypeEnum::Message->value])->get();

        $config = Config::first();

        return view('index', compact(
            'home',
            'counters',
                'aboutUs',
                'catalog',
                'products',
                'credibilityStatements',
                'budget',
                'client',
                'contacts',
                'config'
            )
        );
    }
}
