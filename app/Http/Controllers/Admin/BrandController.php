<?php

namespace App\Http\Controllers\Admin;
<<<<<<< HEAD
=======

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
use App\Models\Brand;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Requests\BrandRequest;
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
=======
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
 */
public function index()
{
    if (request()->ajax()) {
        $query = Brand::query();

        return DataTables::of($query)
            ->addColumn('action', function ($brand) {
                return '
                    <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline" 
                        href="' . route('admin.brands.edit', $brand->id) . '">
                        Sunting
                    </a>
                    <form class="block w-full" onsubmit="return confirm(\'Apakah anda yakin?\');" -block" action="' . route('admin.brands.destroy', $brand->id) . '" method="POST">
                    <button class="w-full px-2 py-1 text-xs text-white transition duration-500 bg-red-500 border border-red-500 rounded-md select-none ease hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Hapus
                    </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
            })
            ->rawColumns(['action'])
            ->make();
    }

    return view('admin.brands.index');
}

=======
    public function index()
    {
        if (request()->ajax()) {
            $query = Brand::query();
    
            return DataTables::of($query)
                ->addColumn('action', function ($brand) {
                    return '
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline" 
                            href="' . route('admin.brands.edit', $brand->id) . '">
                            Sunting
                        </a>
                        <form class="block w-full" onsubmit="return confirm(\'Apakah anda yakin?\');" -block" action="' . route('admin.brands.destroy', $brand->id) . '" method="POST">
                        <button class="w-full px-2 py-1 text-xs text-white transition duration-500 bg-red-500 border border-red-500 rounded-md select-none ease hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->rawColumns(['action'])
                ->make();
        }
    
        return view('admin.brands.index');
    }

>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
<<<<<<< HEAD
{
    $data = $request->all();
    $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

    Brand::create($data);

    return redirect()->route('admin.brands.index');
}
=======
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

        Brand::create($data);

        return redirect()->route('admin.brands.index');
    }

>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    /**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Brand  $brand
 * @return \Illuminate\Http\Response|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
 */
public function edit(Brand $brand)
{
    return view('admin.brands.edit', [
        'brand' => $brand,
    ]);
}
=======
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', [
            'brand' => $brand,
        ]);
    }

>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
<<<<<<< HEAD
{
    $data = $request->all();
    $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

    $brand->update($data);

    return redirect()->route('admin.brands.index');
}
=======
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

        $brand->update($data);

        return redirect()->route('admin.brands.index');
    }

>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
<<<<<<< HEAD
{
    $brand->delete();

    return redirect()->route('admin.brands.index');
}
=======
    {
        $brand->delete();

        return redirect()->route('admin.brands.index');
    }
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
}
