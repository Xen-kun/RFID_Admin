<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomModel;
use App\Models\collegeModel;


class RoomController extends Controller
{
    public function display(){
        return view('layouts.form');
    }

    public function rooms($id = 0){
        // dd($id);
        // if there exists in database
        if($id != 0){ 
            $college = collegeModel::find($id);
            $rooms = roomModel::where('college_id',$id)->get();

            return view('layouts.rooms',compact('rooms','college'));

        } 
            return view('layouts.rooms',compact('rooms'));  
        
    }
    
    public function roomsForm($id, $college_id){
        $college = collegeModel::find($college_id);
        $data = [
            'id' => $id,
            'room' => '',
            'type' => ''

        ];
        if($id != 0){
            $room = roomModel::find($id);
            // $data['id'] = $id;
            // $data['studNum'] = $name->studNum;
            $data['id'] = $room->id;
            $data['room'] = $room->name;
            $data['type'] = $room->type;
            // $data['dateOfBirth'] = $name->dateOfBirth;
            // $data['course'] = $name->course;
            // $data['year'] = $name->year;
            // $data['cpNum'] = $name->cpNum;
            // $data['gender'] = $name->gender;
            // $data['email'] = $name->email;
            
        } 
        return view('rooms.form', compact('college','data'));  
    }
    public function saveForm(Request $request){
        // dd($req->all());
        if($request->id != 0){
            $room = roomModel::find($request->id);
        }else{
            $room = new roomModel;
        }
        // $new_name->studNum = $request->studNum;
        $room->college_id = $request->college_id;
        $room->name = $request->room;
        $room->type = $request->type;
        
        $room->status = 1;
        $room->token = md5($request->room);
        // $new_name->dateOfBirth = $request->dateOfBirth;
        // $new_name->course = $request->course;
        // $new_name->year = $request->year;
        // $new_name->cpNum = $request->cpNum;
        // $new_name->gender = $request->gender;
        // $new_name->email = $request->email;

        $res = $room->save();
        return $res;
    }
    public function attendance($token, $in_out){
        $room = roomModel::where('token', $token)->join('colleges', 'rooms.college_id', 'colleges.id')->select(['name', 'college', 'token'])->first();
        // dd($room);
        return view('rooms.attendance', compact('room', 'in_out'));
    }

    public function deleteName(Request $request){
        return roomModel::where('id', $request->id)->delete();
    }
}
