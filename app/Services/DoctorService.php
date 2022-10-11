<?php

namespace App\Services;


use App\Exceptions\UserNotFoundException;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;

class DoctorService extends BaseService
{

    public function create($data)
    {
        $doctor = Doctor::create($data);
        return $doctor;

    }//end of create

    public function getAll()
    {
        return Doctor::get();

    }//end of getAll

    public function getById($id)
    {
        return Doctor::where('id',$id)->get();

    }//end of getById

    public function update($data , $id)
    {
        $doctor = Doctor::find($id);
        $doctor->update($data);
        return $doctor;
        
    }//end of update

    public function delete($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

    }//end of delete
}