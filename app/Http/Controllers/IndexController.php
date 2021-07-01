<?php


namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Test;
use App\Models\TestData;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function interview()
    {
        $next = 'introduction';
        return view('interview', compact('next'));
    }

    public function introduction()
    {
        $next = 'quz-tests';
        return view('introduction', compact('next'));
    }

    public function tests()
    {
        $next = 'diagnosis';
        $returndata = [];
        $testData = TestData::all();
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->test;
            array_push($returndata, $d);
        }
        return view('tests', compact('next', 'returndata'));
    }

    public function quz(){
        $next = "case-interview";
        return view('quiz', compact('next'));
    }

    public function orders(){
        $next = 'quz';
        $returndata = [];
        $testData = Test::all();
        foreach ($testData as $data) {
            array_push($returndata, $data);
        }
        return view('orders', compact('next', 'returndata'));
    }

    public function caseInterview(){
        $next = "caseInterview";
        return view('case', compact('next'));
    }


    public function upload()
    {
        return view('upload');
    }

    public function views()
    {
        $tests = Test::all();
        $diagnosis = Diagnosis::all();
        return view('view', compact('tests', 'diagnosis'));
    }

    public function uploadfile(Request $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $tempPath = $file->getRealPath();
        $fileSize = $file->getSize();
        $mimeType = $file->getMimeType();

        $valid_extension = array("csv");
        if (in_array(strtolower($extension), $valid_extension)) {
            $location = 'uploads';
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);
            $file = fopen($filepath, "r");
            $importData_arr = array();
            $i = 0;

            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                /*if($i == 0){
                   $i++;
                   continue;
                }*/
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata [$c];
                }
                $i++;
            }
            fclose($file);
            foreach ($importData_arr as $index => $importData) {
                if ($index != 0) {
                    $insertData = array(
                        "name" => $importData[0],
                        "project_id" => 1,
                        "prompt" => $importData[1],
                        "result1" => $importData[2],
                        "result2" => $importData[3]);
                    $test = Test::create($insertData);
                }
            }
            return redirect()->route('views');
        }
    }

    public function search(Request $request)
    {
        $key = $request->key;
        $tests = Test::query()
            ->where('name', 'LIKE', "%{$key}%")
            ->take(30)
            ->get();
        return response()->json($tests);
    }

    public function saveTest(Request $request)
    {
        $id = $request->id;
        $existData = TestData::where('test_id', $id)->get();
        $returndata = [];
        if (count($existData) == 0) {
            $data = array(
                'test_id' => $id
            );
            TestData::create($data);
        } else {
            TestData::where('test_id', $id)->update(array('visible' => 1));
        }
        $testData = TestData::all();
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->test;
            array_push($returndata, $d);
        }
        return response()->json($returndata);
    }

    public function deleteTest($testId){
        TestData::where('test_id', $testId)->delete();
        return redirect()->route('tests');
    }

}
