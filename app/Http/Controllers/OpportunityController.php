<?php

namespace App\Http\Controllers;

use App\Http\Resources\OpportunityResource;
use App\Repositories\OpportunityRepositoryInterface;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{

    private $opportunityRepository = null;

    public function __construct(OpportunityRepositoryInterface $opportunityRepository)
    {
        $this->opportunityRepository = $opportunityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OpportunityResource::collection($this->opportunityRepository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all('company_id', 'title', 'content', 'photo');
        try {
            $this->opportunityRepository->create($data);
            return response()->json([
                'success' => true
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $opportunity = $this->opportunityRepository->get($id);
            return new OpportunityResource($opportunity);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            return response()->json([
                'success' => true,
            ]);

        } catch (\Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage(),
                'success' => false
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->opportunityRepository->delete($id);
            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ]);
        }
    }
}
