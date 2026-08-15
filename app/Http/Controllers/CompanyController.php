<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function home()
    {
        $services = [
            [
                'icon' => 'bi-code-slash',
                'title' => 'Web Development',
                'description' => 'High-performance websites and business platforms built for speed, scalability, and measurable results.',
            ],
            [
                'icon' => 'bi-phone',
                'title' => 'Mobile Development',
                'description' => 'Modern mobile applications designed around usability, reliability, and seamless customer experiences.',
            ],
            [
                'icon' => 'bi-palette',
                'title' => 'UI/UX Design',
                'description' => 'Clean and intuitive interfaces that turn complex ideas into simple and enjoyable digital experiences.',
            ],
        ];

        return view('pages.home', compact('services'));
    }

    public function about()
    {
        $values = [
            [
                'icon' => 'bi-bullseye',
                'title' => 'Purpose Driven',
                'description' => 'We build technology around real business goals and customer needs.',
            ],
            [
                'icon' => 'bi-lightning-charge',
                'title' => 'Innovation',
                'description' => 'We continuously explore better tools, ideas, and ways of solving problems.',
            ],
            [
                'icon' => 'bi-people',
                'title' => 'Collaboration',
                'description' => 'We believe strong results come from communication, trust, and shared ownership.',
            ],
            [
                'icon' => 'bi-shield-check',
                'title' => 'Integrity',
                'description' => 'We value transparency, responsible development, and long-term partnerships.',
            ],
        ];

        return view('pages.about', compact('values'));
    }

    public function services()
    {
        $services = [
            [
                'icon' => 'bi-code-slash',
                'title' => 'Web Development',
                'description' => 'Responsive corporate websites, portals, dashboards, and custom web applications.',
                'tag' => 'Laravel • PHP • JavaScript',
            ],
            [
                'icon' => 'bi-phone',
                'title' => 'Mobile Development',
                'description' => 'Cross-platform mobile applications with polished interfaces and dependable performance.',
                'tag' => 'Flutter • APIs • UX',
            ],
            [
                'icon' => 'bi-palette',
                'title' => 'UI/UX Design',
                'description' => 'Research-driven user experiences, design systems, wireframes, and high-fidelity interfaces.',
                'tag' => 'Figma • Prototyping',
            ],
            [
                'icon' => 'bi-cloud-check',
                'title' => 'Cloud Solutions',
                'description' => 'Cloud-ready architectures, deployment workflows, and scalable application infrastructure.',
                'tag' => 'Cloud • DevOps • APIs',
            ],
            [
                'icon' => 'bi-shield-lock',
                'title' => 'Cybersecurity',
                'description' => 'Security-minded development practices that help protect applications, data, and users.',
                'tag' => 'Security • Audits',
            ],
            [
                'icon' => 'bi-bar-chart-line',
                'title' => 'IT Consulting',
                'description' => 'Practical technology guidance that aligns systems, processes, and digital strategy.',
                'tag' => 'Strategy • Systems',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}