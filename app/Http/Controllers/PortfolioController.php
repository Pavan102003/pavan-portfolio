<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Internship;
use App\Models\Achievement;
use App\Models\ContactMessage;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio landing page.
     */
    public function index()
    {
        $experiences = Experience::orderBy('order', 'asc')->get();
        $projects = Project::where('is_featured', true)->orderBy('order', 'asc')->get();
        $skills = Skill::orderBy('order', 'asc')->get()->groupBy('category');
        $education = Education::orderBy('order', 'asc')->get();
        $certifications = Certification::orderBy('order', 'asc')->get();
        $internships = Internship::orderBy('order', 'asc')->get();
        $achievements = Achievement::orderBy('order', 'asc')->get();

        $stats = [
            'accuracy' => '93%',
            'role' => 'Backend Developer Intern',
            'company' => 'Questaron',
            'cgpa' => '8.1',
            'ieee_author' => 'IEEE Author'
        ];

        return view('portfolio.index', compact(
            'experiences',
            'projects',
            'skills',
            'education',
            'certifications',
            'internships',
            'achievements',
            'stats'
        ));
    }

    /**
     * Handle contact form submission via AJAX.
     */
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        $message = ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. Pavan will get back to you shortly.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
