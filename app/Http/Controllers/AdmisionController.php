<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmisionRequest;
use App\Http\Requests\UpdateAdmisionRequest;
use App\Repositories\AdmisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Department;
use App\Models\Admision;
use App\Models\Faculty;
use App\Models\Batch;
use App\Roll;

class AdmisionController extends AppBaseController
{
    /** @var  AdmisionRepository */
    private $admisionRepository;

    public function __construct(AdmisionRepository $admisionRepo)
    {
        $this->admisionRepository = $admisionRepo;
    }

    /**
     * Display a listing of the Admision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admisions = $this->admisionRepository->all();

        $departments = Department::all();

        $faculties = Faculty::all();

        $student_id = Roll::max('roll_id');

        $batches = Batch::all();

        return view('admisions.index', compact('student_id', $student_id, 'batches', $batches, 'departments', $departments, 'faculties', $faculties))
            ->with('admisions', $admisions);
    }

    /**
     * Show the form for creating a new Admision.
     *
     * @return Response
     */
    public function create()
    {
        return view('admisions.create');
    }

    /**
     * Store a newly created Admision in storage.
     *
     * @param CreateAdmisionRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmisionRequest $request)
    {
        $input = $request->all();

        //$admision = $this->admisionRepository->create($input);

        $image = $request->file('image');
        $image_name = rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admissions_images'), $image_name);

        $admision = new Admision;

        $admision->first_name = $request->first_name;
        $admision->last_name = $request->last_name;
        $admision->first_name = $request->first_name;
        $admision->father_name = $request->father_name;
        $admision->mother_name = $request->mother_name;
        $admision->gender = $request->gender;
        $admision->email = $request->email;
        $admision->dob = $request->dob;
        $admision->phone = $request->phone;
        $admision->address = $request->address;
        $admision->nationality = $request->nationality;
        $admision->passport = $request->passport;
        $admision->status = $request->status;
        $admision->dateregistered = $request->dateregistered;

        $admision->image = $image_name;

        $admision->save();

        //dd($admision); die;

        Flash::success('Admision saved successfully.');

        return redirect(route('admisions.index'));
    }

    /**
     * Display the specified Admision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admision = $this->admisionRepository->find($id);

        if (empty($admision)) {
            Flash::error('Admision not found');

            return redirect(route('admisions.index'));
        }

        return view('admisions.show')->with('admision', $admision);
    }

    /**
     * Show the form for editing the specified Admision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admision = $this->admisionRepository->find($id);

        $admisions = $this->admisionRepository->all();

        $departments = Department::all();

        $faculties = Faculty::all();

        $student_id = Roll::max('roll_id');

        $batches = Batch::all();

        if (empty($admision)) {
            Flash::error('Admision not found');

            return redirect(route('admisions.index'));
        }

        return view('admisions.edit', compact('student_id', $student_id, 'batches', $batches, 'departments', $departments, 'faculties', $faculties))->with('admision', $admision);
    }

    /**
     * Update the specified Admision in storage.
     *
     * @param int $id
     * @param UpdateAdmisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmisionRequest $request)
    {
        $admision = $this->admisionRepository->find($id);

        if (empty($admision)) {
            Flash::error('Admision not found');

            return redirect(route('admisions.index'));
        }

        $admision = $this->admisionRepository->update($request->all(), $id);

        Flash::success('Admision updated successfully.');

        return redirect(route('admisions.index'));
    }

    /**
     * Remove the specified Admision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admision = $this->admisionRepository->find($id);

        if (empty($admision)) {
            Flash::error('Admision not found');

            return redirect(route('admisions.index'));
        }

        $this->admisionRepository->delete($id);

        Flash::success('Admision deleted successfully.');

        return redirect(route('admisions.index'));
    }
}
