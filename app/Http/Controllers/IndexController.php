<?php


namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\DragData;
use App\Models\Drags;
use App\Models\Test;
use App\Models\TestData;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function prequiz(){
        $next = 'pre-quiz-1';
        $before = '/';
        return view('prequiz', compact('next', 'before'));
    }
    public function afterquiz(){
        $next = 'after-quiz-answer';
//        $before = '/answer-3';
        return view('afterquiz', compact('next', ));
    }
    public function afterquiz1(){
        $next = 'after-quiz-answer-1';
//        $before = '/answer-3';
        return view('afterquiz1', compact('next', ));
    }
    public function after_answer_1(){
        $next = 'after-quiz-1';
        return view('after_answer1', compact('next'));
    }
    public function after_answer_2(){
        $next = 'case-interview';
        return view('after_answer2', compact('next'));
    }

    public function prequiz1(){
        $next = 'interview';
        $before = 'pre-quiz';
        return view('prequiz1', compact('next', 'before'));
    }

    public function interview()
    {
        $next = 'quz-tests';
        return view('interview', compact('next' ));
    }

    public function diagnosis(){
        $next = 'stage';
        return view('diagnosis', compact('next'));
    }
    public function diagnosis1 (){
        $next = 'stage';
        return view('diagnosis-answer', compact('next'));
    }

    public function stage(){
        $next = 'quiz-1';
        return view('stage', compact('next'));
    }
    public function quiz_1(){
        $next = 'answer-1';
        return view('quiz1', compact('next'));
    }
    public function answer_1(){
        $next = 'orders';
        return view('answer1', compact('next'));
    }
    public function quiz_2(){
        $next = 'answer-2';
        return view('quiz2', compact('next'));
    }
    public function answer_2(){
        $next = 'quiz-3';
        return view('answer2', compact('next'));
    }
    public function quiz_3(){
        $next = 'answer-3';
        return view('quiz3', compact('next'));
    }
    public function answer_3(){
        $next = 'after-quiz';
        return view('answer3', compact('next'));
    }

    public function page6(){
        $next = 'page7';
        return view('page6', compact('next'));
    }

    public function page6_fact(){
        $next = 'page7';
        return view('page6-fact', compact('next'));
    }

    public function page7(){
        $next = 'lasttest';
        return view('page7', compact('next'));
    }
//    public function introduction()
//    {
//        $next = 'quz-tests';
//        return view('introduction', compact('next'));
//    }
    public function complete_answer(Request $request){
        TestData::truncate();
        $testData = Test::all();

        foreach ($testData as $data) {
            if($data->result1 != ""){
                $data = array(
                    'test_id' => $data->id,
                    'visible' => $request->visible,
                );
                TestData::create($data);
            }
        }
        return redirect()->route('tests', ['flag' => true]);
    }
    public function complete_answer_2(Request $request){
        TestData::truncate();
        $testData = Test::all();
        foreach ($testData as $data) {
            if($data->result1 != ""){
                $data = array(
                    'test_id' => $data->id,
                    'visible' => $request->visible
                );
                TestData::create($data);
            }
        }
        return redirect()->route('lasttest', ['flag' => true]);
    }
    public function complete_drag(){
        DragData::truncate();
        $dragdata = Drags::all();
        foreach ($dragdata as $data) {
            if($data->prompt != ""){
                if(strpos($data->prompt, 'Incorrect') !== 0) {
                    $data = array(
                        'drag_id' => $data->id
                    );
                    DragData::create($data);
                }
            }
        }
        return redirect()->route('orders', ['flag' => true]);
    }
    public function tests()
    {
        $next = 'diagnosis';
        $flag = false;
        $returndata = [];
        $testData = TestData::where('visible', '1')->get();
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->test;
            array_push($returndata, $d);
        }
        return view('tests', compact('next', 'returndata', 'flag'));
    }

    public function quz(){
        $next = "case-interview";
        return view('quiz', compact('next'));
    }

    public function lasttest(){
        $next = "quiz-2";
        $returndata = [];
        $testData = TestData::where('visible', '2')->get();
        if(count($testData) > 0){
//            TestData::truncate();
        }
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->test;
            array_push($returndata, $d);
        }
        return view('lasttest', compact('next', 'returndata'));
    }

    public function orders(){
        $next = 'page6';
        $returndata = [];
        $dragdata = DragData::all();
        foreach ($dragdata as $data) {
            $d['data'] = $data->drag;
            array_push($returndata, $d);
        }
        return view('orders', compact('next', 'returndata'));
    }

    public function caseInterview(){
        $next = "case-interview";
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
        $drags = Drags::all();
        return view('view', compact('tests', 'diagnosis', 'drags'));
    }

    public function uploadDia(Request $request){
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
                        "prompt" => $importData[1]);
                    $test = Diagnosis::create($insertData);
                }
            }
            return redirect()->route('views');
        }
    }

    public function uploadDrag(Request $request){
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
                        "result" => $importData[2]);
                    $test = Drags::create($insertData);
                }
            }
            return redirect()->route('views');
        }
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
    public function searchDia(Request $request){
        $key = $request->key;
        $tests = Diagnosis::query()
            ->where('name', 'LIKE', "%{$key}%")
            ->take(30)
            ->get();
        return response()->json($tests);
    }
    public function searchDrag(Request $request)
    {
        $key = $request->key;
        $tests = Drags::query()
            ->where('name', 'LIKE', "%{$key}%")
            ->take(30)
            ->get();
        return response()->json($tests);
    }




    public function saveTest(Request $request)
    {
        $id = $request->id;
        $visible = $request->visible;
        $existData = TestData::where('test_id', $id)->get();
        $returndata = [];
        $data = array(
            'test_id' => $id,
            'visible' => $visible
        );
        TestData::create($data);
        $testData = TestData::where('visible', $visible)->get();
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->test;
            array_push($returndata, $d);
        }
        return response()->json($returndata);
    }
    public function saveDrag(Request $request)
    {
        $id = $request->id;
        $existData = DragData::where('drag_id', $id)->get();
        $returndata = [];
        if (count($existData) == 0) {
            $data = array(
                'drag_id' => $id
            );
            DragData::create($data);
        } else {
            DragData::where('drag_id', $id)->update(array('visible' => 1));
        }
        $testData = DragData::all();
        foreach ($testData as $data) {
            $d['visible'] = $data['visible'];
            $d['data']= $data->drag;
            array_push($returndata, $d);
        }
        return response()->json($returndata);
    }

    public function deleteTest($testId){
        TestData::where('test_id', $testId)->delete();
        return redirect()->route('tests', ['flag' => true]);
    }
    public function deleteTest2($testId){
        TestData::where('test_id', $testId)->delete();
        return redirect()->route('lasttest' , ['flag' => true]);
    }

    public function deleteDrag($dragId){
        DragData::where('drag_id', $dragId)->delete();
        return redirect()->route('orders', ['flag' => true]);
    }

}
