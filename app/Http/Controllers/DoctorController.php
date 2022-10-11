<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DoctorService;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function __construct(private DoctorService $DoctorService)
    {
    }

    public function index()
    {
        try {

            $doctors = $this->DoctorService->getAll();
            return view('', compact('doctors'));
        } catch (\Exception $ex) {

            return redirect()->route('')->withSuccess($ex->getMessage());
        }
    } //end of index

    public function store(DoctorRequest $request)
    {
        try {

            $this->DoctorService->create($request->validated());
            return redirect()->route('')->withSuccess('Doctor Saved Successfully');
        } catch (\Exception $ex) {
            return redirect()->route('')->withSuccess($ex->getMessage());
        }
    } //end of store

    public function show($id)
    {
        try {

            $doctor = $this->DoctorService->getById($id);
            return view('doctor.index', compact('doctor'));
        } catch (\Exception $ex) {

            return redirect()->route('')->withSuccess($ex->getMessage());
        }
    } //end of show

    public function edit($id)
    {
    } //end of edit

    public function update(DoctorRequest $request, $id)
    {
        try {

            $this->DoctorService->update($request->validated(), $id);
            return redirect()->route('')->withSuccess('Doctor updated Successfully');
        } catch (\Exception $ex) {
            return redirect()->route('')->withSuccess($ex->getMessage());
        }
    } //end of update

    public function destroy($id)
    {
        try {

            $this->DoctorService->delete($id);
            return redirect()->route('dashboard/index')->withSuccess('Doctor Deleted Successfully');
        } catch (\Exception $ex) {
            return redirect()->route('')->withSuccess($ex->getMessage());
        }
    } //end of destroy
}
