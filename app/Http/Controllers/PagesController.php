<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use GrahamCampbell\Markdown\Facades\Markdown;


class PagesController extends Controller
{
    public function about()
    {
        $data = [
            'pageTitle' => 'About',
        ];

        return view('pages.about', $data);
    }

    public function contribute()
    {
        $markdownFilePath = resource_path('views/pages/contribute.md');

        // Check if the file exists
        if (File::exists($markdownFilePath)) {
            // Read the contents of the Markdown file
            $markdownContent = File::get($markdownFilePath);

            // Convert Markdown to HTML
            $htmlContent = Markdown::convertToHtml($markdownContent);

            // Pass the HTML content to your view
            return view('pages.contribute', compact('htmlContent'));
        }

        // Handle the case where the file doesn't exist
        abort(404, 'Markdown file not found');
    }
}
