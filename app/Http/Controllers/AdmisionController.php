<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmisionRequest;
use App\Http\Requests\UpdateAdmisionRequest;
use App\Repositories\AdmisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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

        return view('admisions.index')
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

        $admision = $this->admisionRepository->create($input);

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

        if (empty($admision)) {
            Flash::error('Admision not found');

            return redirect(route('admisions.index'));
        }

        return view('admisions.edit')->with('admision', $admision);
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
