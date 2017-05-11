<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
	{
		$categories = [
		    '0' => [
		        'id' => '1',
                'code' => 'beers',
                'label' => 'Bieres'
            ],
            '1' => [
                'id' => '2',
                'code' => 'wines',
                'label' => 'Vins'
            ],

        ];

		$test = 'hello';

		return view('admin.categories.index', compact('categories', 'test'));
	}

	public function create()
    {
        return view('admin.categories.create');
    }

    public function save(Request $request)
    {
        Category::create($request->all());
        return $request->all();
    }
}
