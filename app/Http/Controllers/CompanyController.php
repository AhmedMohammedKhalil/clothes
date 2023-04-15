<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function showLoginForm() {
        return view('companies.login');
    }



    public function showAllCompanies() {
        $page_name = 'جميع الشركات';
        $companies = Company::all();
        return view('admins.companies.index',compact('page_name','companies'));
    }



    public function showAddCompanyForm() {
        return view('admins.companies.create',['page_name' => 'إضافة شركة جديدة']);
    }


    public function editCompany() {
        $page_name = 'تعديل بيانات الشركة';
        $companies = Company::all();
        return view('admins.companies.edit',compact('page_name','companies'));
    }


    public function showCompany(Request $r) {
        $company = Company::whereId($r->id)->first();
        $page_name = 'بيانات شركة '.$company->name;
        return view('admins.companies.show',compact('page_name','company'));
    }


    public function deleteCompany() {
    }




    public function profile() {
        return view('companies.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('companies.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('companies.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('company')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
