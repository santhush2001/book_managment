<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use TCPDF;

class ReportController extends Controller
{
    public function form()
    {
        return view('report.form');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date'
        ]);

        $books = Book::with('author')
            ->whereBetween('publish_date', [$request->from_date, $request->to_date])
            ->get();

        // Create PDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('dejavusans', '', 12);

        $html = '<h2>Book Report</h2>';
        $html .= "<p>From: {$request->from_date} To: {$request->to_date}</p>";
        $html .= '<table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <th><strong>Title</strong></th>
                            <th><strong>Author</strong></th>
                            <th><strong>Publish Date</strong></th>
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($books as $book) {
            $html .= '<tr>
                        <td>' . $book->title . '</td>
                        <td>' . $book->author->name . '</td>
                        <td>' . $book->publish_date . '</td>
                      </tr>';
        }
        $html .= '</tbody></table>';

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('book_report.pdf', 'I'); // 'I' = inline in browser, 'D' = force download
    }
}
