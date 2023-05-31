<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function studentPdf()
    {
        $data = Student::all();
        view()->share('data', $data);
        Pdf::setOption(['isRemoteEnabled' => true]);
        $pdf = PDF::loadView('pdf.studentPdf');
        return $pdf->download('StudentList.pdf');
    }

    public function teacherPdf()
    {
        $data = User::where('type', 'teacher')->get();
        view()->share('data', $data);
        $pdf = PDF::loadView('pdf.teacherPdf');
        return $pdf->download('teacherList.pdf');
    }

    public function classesPdf()
    {
        $data = SchoolClass::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('pdf.classesPdf');
        return $pdf->download('classesList.pdf');
    }

    public function teacherCardPdf($id)
    {
        $data = User::find($id);
        view()->share('data', $data);
        Pdf::setOption(['isRemoteEnabled' => true]);
        Pdf::setOption(['enable_php' => true]);
        $pdf = PDF::loadView('pdf.teacherCardPdf');
        return $pdf->download('teacherCard.pdf');
    }
}
