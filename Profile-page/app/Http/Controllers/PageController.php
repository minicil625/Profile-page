<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        $contact = [
            'phone' => '+62 811-227-336',
            'email' => 'benediktus.darmawan001@binus.ac.id',
            'location' => 'Jakarta, Indonesia'
        ];
        return view('profile_page', compact('contact'));
    }

    public function project()
    {        
        $projects = [
            [
                'name' => 'CV Improver',
                'description' => 'An AI-powered tool that analyzes and enhances resumes, offering personalized suggestions to improve structure, wording, and impact for job applications.',
                'url' => 'https://github.com/AnangAyman/AI-CV-Optimizer'
            ],
            [
                'name' => 'Financial Budgeting and Tracking System',
                'description' => 'A smart finance management platform that helps users plan budgets, track expenses, and visualize spending trends for better financial control.',
                'url' => 'https://github.com/DivenDechal/ChiCom-Fillows'
            ],
            [
                'name' => 'SignLingo',
                'description' => 'An interactive learning app designed to teach sign language through gamified lessons, real-time feedback, and visual recognition technology.',
                'url' => 'https://github.com/minicil625/Signlingo'
            ]
        ];


        $contact = [
            'phone' => '+62 811-227-336',
            'email' => 'benediktus.darmawan001@binus.ac.id',
            'location' => 'Jakarta, Indonesia'
        ];

        return view('project_page', compact('contact', 'projects'));
    }
}
