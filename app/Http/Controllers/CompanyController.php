<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $companies=Company::paginate(4);

       return view('admin.companies.index',get_defined_vars());    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              return view('admin.companies.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('companies', $newImageName, 'public');
        $data['image'] = $newImageName;
       Company::create($data);
        return redirect()->route('admin.companies.index')->with('success',__('keywords.company_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
       return view('admin.companies.show',get_defined_vars());
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
         $data=$request->validated();
          if ($request->hasFile('image')) {
       
                Storage::delete("public/companies/$company->image");
               
                $image = $request->image;
                
                $newImageName = time() . '-' . $image->getClientOriginalName();
                $image->storeAs('companies', $newImageName, 'public');
                $data['image'] = $newImageName;
          }
        $company->update($data);
        return redirect()->route('admin.companies.index')->with('success',__('keywords.company_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
       $company->delete();
        return redirect()->route('admin.companies.index')->with('success',__('keywords.company_deleted'));
    }
}
