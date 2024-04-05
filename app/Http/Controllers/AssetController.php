<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetType;
use Illuminate\Http\Request;
use App\Exports\AssetsExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Maatwebsite\Excel\Excel as ExcelType;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;


class AssetController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $assets = Asset::paginate(10);
        return view('assets.index', compact('assets','user'));
    }

    public function create()
    {
        $assetTypes = AssetType::all();
        return view('assets.create', compact('assetTypes'));
    }

    public function store(Request $request)
    {
        Asset::create($request->all());
        return redirect()->route('assets.index')->with('success', 'Asset created successfully');
    }

    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    public function edit(Asset $asset)
    { 
        $assetTypes = AssetType::all();
        return view('assets.edit', compact('asset', 'assetTypes'));
    }

    public function update(Request $request, Asset $asset)
    {
        $asset->update($request->all());
        return redirect()->route('assets.index')->with('success', 'Asset updated successfully');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully');
    }

    public function export(Request $request, $format)
    {
        // Logic for handling export based on the specified format
        $startDate = $request->input('from_date');
        $endDate = $request->input('to_date');

        // Your export logic based on the selected format (PDF, CSV, XLSX)
        $export = new AssetsExport($startDate, $endDate);

        // Return the exported file based on the format
        if ($format === 'pdf') {
            $assets = $export->collection1();
            $headings = $export->headings();

            // Create a new Dompdf instance
            $pdf = new Dompdf();

            // Optional: set the options for PDF generation
            $options = new Options();
            // Set any options if needed
            // For example:
            // $options->set('defaultFont', 'Arial');
            $pdf->setOptions($options);

            // Load the HTML view into Dompdf
            $html = view('exports.assets', compact('assets', 'headings'))->render();
            $pdf->loadHtml($html);

            // Render the PDF
            $pdf->render();

            // Return the PDF as a downloadable file
            return $pdf->stream('assets.pdf');
        } elseif ($format === 'csv') {
            return Excel::download($export, 'assets.csv');
        } elseif ($format === 'xlsx') {
            return Excel::download($export, 'assets.xlsx');
        } else {
            // Handle unsupported format
            abort(404);
        }
    }
    public function filter(Request $request)
    {
        echo "nakib";
        
        //// Validate request data
        // $request->validate([
        //     'from_date' => 'nullable|date',
        //     'to_date' => 'nullable|date',
        // ]);

        // // Retrieve assets based on the date range if provided
        // $query = Asset::query();
        
        // if ($request->filled('from_date')) {
        //     $query->where('purchase_date', '>=', $request->from_date);
        // }
    
        // if ($request->filled('to_date')) {
        //     $query->where('purchase_date', '<=', $request->to_date);
        // }
    
        // $assets = $query->paginate(10);
        // $assets = $query->get();

        // // Return the filtered assets to the index view
        // return view('assets.index', compact('assets'));
    }


        
}
