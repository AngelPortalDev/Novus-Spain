<?php

namespace App\Http\Controllers;

class PageController extends BaseController
{
    // homepage one
    public function index()
    {
        return $this->view('index', [
            'page_title' => 'Home',
        ]);
    }

    // homepage two
    public function indexTwo()
    {
        return $this->view('index', [
            'page_title' => 'Lms and University Laravel 12 Template',
        ]);
    }

    // homepage three
    public function indexThree()
    {
        return $this->view('index-three', [
            'page_title' => 'Lms and University Laravel 12 Template',
        ]);
    }

    // homepage four

    public function indexFour()
    {
        return $this->view('index-four', [
            'page_title' => 'Lms and University Laravel 12 Template',
        ]);
    }

    // homepage five
    public function indexFive()
    {
        return $this->view('index-five', [
            'page_title' => 'Lms and University Laravel 12 Template',
        ]);
    }

    // homepage school and college
    public function indexSc()
    {
        return $this->view('index-sc', [
            'page_title' => 'School and College Laravel 12 Template',
        ]);
    }

    // about school and college
    public function aboutSc()
    {
        return $this->view('about-sc', [
            'page_title' => 'School and College About Template',
        ]);
    }

    // Admission School and College
    public function admissionSc()
    {
        return $this->view('admission-sc', [
            'page_title' => 'School and College Admission Template',
        ]);
    }

    // Campus life school college
    public function campusLifeSc()
    {
        return $this->view('campus-life-sc', [
            'page_title' => 'School and College Campus Life Template',
        ]);
    }

    // campus life school and college
    public function tutionFeeSc()
    {
        return $this->view('tution-fee-sc', [
            'page_title' => 'School and College Tution Fee Template',
        ]);
    }

    // six form school and college
    public function sixFormSc()
    {
        return $this->view('six-form', [
            'page_title' => 'School and College Six Form Template',
        ]);
    }

    // single resouce school and college
    public function singleResourceSc()
    {
        return $this->view('single-resource', [
            'page_title' => 'School and College Single Resource Template',
        ]);
    }

    // senior school and college
    public function seniorSchool()
    {
        return $this->view('senior-school', [
            'page_title' => 'School and College Senior School Template',
        ]);
    }

    // primary school and college
    public function primarySchool()
    {
        return $this->view('primary-school', [
            'page_title' => 'School and College Primary School Template',
        ]);
    }

    // middle school
    public function middleSchool()
    {
        return $this->view('middle-school', [
            'page_title' => 'School and College Middle School Template',
        ]);
    }

    // About page
    public function about()
    {
        return $this->view('about', [
            'page_title' => 'About ',
        ]);
    }

    // academic area
    public function academicArea()
    {
        return $this->view('academic-area', [
            'page_title' => 'Academic Areas of study Template',
        ]);
    }

    // academic page
    public function academic()
    {
        return $this->view('academic', [
            'page_title' => 'Academic ',
        ]);
    }

    // admission page
    public function admission()
    {
        return $this->view('admission', [
            'page_title' => 'Admission ',
        ]);
    }

    // alumni page
    public function alumni()
    {
        return $this->view('alumni', [
            'page_title' => 'Alumni ',
        ]);
    }

    // athletics
    public function athletics()
    {
        return $this->view('athletics', [
            'page_title' => 'Athletics ',
        ]);
    }

    // blog details
    public function blogDetails()
    {
        return $this->view('blog-details', [
            'page_title' => 'Blog Details ',
        ]);
    }

    // blog grid
    public function blogGrid()
    {
        return $this->view('blog-grid', [
            'page_title' => 'Blog Grid ',
        ]);
    }

    // blog list
    public function blogList()
    {
        return $this->view('blog-list', [
            'page_title' => 'Blog List ',
        ]);
    }

    // blog standard
    public function blog()
    {
        return $this->view('blog', [
            'page_title' => 'Blog Standard ',
        ]);
    }

    // scholarship
    public function scholarship()
    {
        return $this->view('scholarship', [
            'page_title' => 'Scholarship ',
        ]);
    }

    // Program single
    public function programSingle()
    {
        return $this->view('program-single', [
            'page_title' => 'Program Single ',
        ]);
    }

    // notice details
    public function noticeDetails()
    {
        return $this->view('notice-details', [
            'page_title' => 'Notice Details ',
        ]);
    }

    // campus life
    public function campusLife()
    {
        return $this->view('campus-life', [
            'page_title' => 'Campus Life ',
        ]);
    }

    // contact
    public function contact()
    {
        return $this->view('contact', [
            'page_title' => 'Contact us ',
        ]);
    }

    // Department details
    public function departmentDetails()
    {
        return $this->view('department-details', [
            'page_title' => 'Department Details ',
        ]);
    }

    // event details
    public function eventDetails()
    {
        return $this->view('event-details', [
            'page_title' => 'Event Details ',
        ]);
    }

    // event
    public function event()
    {
        return $this->view('event', [
            'page_title' => 'Event ',
        ]);
    }

    // faculty details
    public function facultyDetails()
    {
        return $this->view('faculty-details', [
            'page_title' => 'Faculty Details ',
        ]);
    }

    // faculty sub details
    public function facultySubDetails()
    {
        return $this->view('faculty-sub-details', [
            'page_title' => 'Faculty Sub Details ',
        ]);
    }

    // faculty sub
    public function facultySub()
    {
        return $this->view('faculty-sub', [
            'page_title' => 'Faculty Sub ',
        ]);
    }

    // faculty
    public function faculty()
    {
        return $this->view('faculty', [
            'page_title' => 'Our Team',
        ]);
    }

    // tution fee
    public function tutionFee()
    {
        return $this->view('tution-fee',[
            'page_title' => 'Tution Fee ',
        ]);
    }

        // visa requirements
    public function visaRequirements()
    {
        return $this->view('visa-requirement',[
            'page_title' => 'Visa Requirements ',
        ]);
    }

          // Diploma Spanish Language
    public function diplomaSpanishLanguage()
    {
        return $this->view('diploma-spanish-language',[
            'page_title' => 'Diploma Spanish Language ',
        ]);
    }

          // Business English Course
    public function businessEnglishCourse()
    {
        return $this->view('business-english-course',[
            'page_title' => 'Business English Course ',
        ]);
    }

          // General English Course
    public function generalEnglishCourse()
    {
        return $this->view('general-english-course',[
            'page_title' => 'General English Course ',
        ]);
    }


}
