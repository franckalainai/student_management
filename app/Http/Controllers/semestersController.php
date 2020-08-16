<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesemestersRequest;
use App\Http\Requests\UpdatesemestersRequest;
use App\Repositories\semestersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class semestersController extends AppBaseController
{
    /** @var  semestersRepository */
    private $semestersRepository;

    public function __construct(semestersRepository $semestersRepo)
    {
        $this->semestersRepository = $semestersRepo;
    }

    /**
     * Display a listing of the semesters.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semesters = $this->semestersRepository->all();

        return view('semesters.index')
            ->with('semesters', $semesters);
    }

    /**
     * Show the form for creating a new semesters.
     *
     * @return Response
     */
    public function create()
    {
        return view('semesters.create');
    }

    /**
     * Store a newly created semesters in storage.
     *
     * @param CreatesemestersRequest $request
     *
     * @return Response
     */
    public function store(CreatesemestersRequest $request)
    {
        $input = $request->all();

        $semesters = $this->semestersRepository->create($input);

        Flash::success('Semesters saved successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Display the specified semesters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.show')->with('semesters', $semesters);
    }

    /**
     * Show the form for editing the specified semesters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.edit')->with('semesters', $semesters);
    }

    /**
     * Update the specified semesters in storage.
     *
     * @param int $id
     * @param UpdatesemestersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesemestersRequest $request)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        $semesters = $this->semestersRepository->update($request->all(), $id);

        Flash::success('Semesters updated successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Remove the specified semesters from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        $this->semestersRepository->delete($id);

        Flash::success('Semesters deleted successfully.');

        return redirect(route('semesters.index'));
    }
}
