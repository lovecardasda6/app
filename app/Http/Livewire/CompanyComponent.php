<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompanyComponent extends Component
{

    public $companyId = "";
    public $companyName = "";
    public $address = "";
    public $contact1 = "";
    public $contact2 = "";
    public $isEdit = false;
    public $isAdd = true;

    public function addCompany()
    {
        $company = new Company();
        $company->name = $this->companyName;
        $company->address = $this->address;
        $company->contact1 = $this->contact1;
        $company->contact2 = $this->contact2;
        if($company->save())
            session()->flash('success', '<span class="font-bold">Add! </span>Company successfully added.');

        $this->resetInput();
    }

    function editCompany($id)
    {
        try {
            $company = Company::findOrFail($id);

            if (!$company):
                session()->flash('error', '<span class="font-bold">Edit! </span>Company profile not found! Please refresh and try again.');
            else:
                $this->companyId = $company->id;
                $this->companyName = $company->name;
                $this->address = $company->address;
                $this->contact1 = $company->contact1;
                $this->contact2 = $company->contact2;
                $this->isEdit = true;
                $this->isAdd = false;
            endif;
        } catch
        (\Exception $ex) {
            session()->flash('error', '<span class="font-bold">Edit! </span>Company profile not found! Please refresh and try again.');
        }
    }

    public function updateCompany()
    {
        $company = Company::findOrFail($this->companyId);
        $company->name = $this->companyName;
        $company->address = $this->address;
        $company->contact1 = $this->contact1;
        $company->contact2 = $this->contact2;
        $company->save();
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->companyId = "";
        $this->companyName = "";
        $this->address = "";
        $this->contact1 = "";
        $this->contact2 = "";
        $this->isEdit = false;
        $this->isAdd = true;
    }

    public function removeCompany($id){
        try{
            Company::findOrFail($id)->delete();
            session()->flash('success', '<span class="font-bold">Remove! </span>Company profile successfully remove.');
        }catch (\Exception $ex){

            session()->flash('error', '<span class="font-bold">Remove! </span>Company profile not found! Please refresh and try again.');
        }
    }

    public function render()
    {
        $companies = Company::all()->sortBy("name");
        return view('livewire.company-component', ["companies" => $companies]);
    }
}
