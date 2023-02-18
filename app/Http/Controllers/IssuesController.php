<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssuesController extends Controller
{
    /**
     * list issues by project or list issues by user
     * @param int $projectId
     * @param int $userId
     * @return void
     */
    public function list(int|null $projectId = null, int|null $userId = null)
    {

    }

    /**
     * issue detail page
     * @param int $id
     * @return void
     */
    public function detail(int $id)
    {

    }

    /**
     * issue add page
     * @param Request $request
     * @return void
     */
    public function add(Request $request)
    {

    }

    /**
     * issue edit page
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function edit(Request $request, int $id)
    {

    }

}
