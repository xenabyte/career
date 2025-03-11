<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use App\Models\CareerProfile;
use App\Models\student;
use App\Models\JobVacancy;
use App\Models\JobApplication;

class WelcomeController extends Controller
{

    public function welcome (){
        $jobVacancies = JobVacancy::with('applications')->where('status', 'active')->orderBy('id', 'desc')->get();
        $workStudies =  JobVacancy::with('applications')->where('type', JobVacancy::TYPE_WORKSTUDY)->where('status', 'active')->take(6)->get();

        return view('welcome', [
            'jobVacancies' => $jobVacancies,
            'workStudies' => $workStudies,
        ]);
    }


    public function jobVacancy($slug){

        $jobVacancy = JobVacancy::with('applications')->where('slug', $slug)->first();

        $jobVacancies = JobVacancy::where('id', '!=', $jobVacancy->id)->orderBy('id', 'desc')->take(6)->get();

        return view('jobVacancyDetails', [
            'jobVacancy' => $jobVacancy,
            'jobVacancies' => $jobVacancies
        ]);
    }
}

