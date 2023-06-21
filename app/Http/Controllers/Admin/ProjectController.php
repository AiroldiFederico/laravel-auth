<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
use Illuminate\Support\Str;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('guest.index', compact('projects'));
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\Projects\create');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();



        // Creazione di un nuovo progetto con i dati validati
        $project = new Project;
        $project->title = $form_data['title'];
        $project->slug = Str::slug($form_data['title']);
        $project->github = $form_data['github'];
        $project->link = $form_data['link'];
        $project->languages = $form_data['languages'];
        $project->save();




        // Reindirizzamento alla pagina di visualizzazione del progetto appena creato
        return redirect()->route('projects.index');


    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('guest.show', compact('project'));
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }








    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();

        $project->title = $form_data['title'];
        $project->slug = Str::slug($form_data['title']);
        $project->github = $form_data['github'];
        $project->link = $form_data['link'];
        $project->languages = $form_data['languages'];
        $project->save();
    
        return redirect()->route('admin.projects.show', $project->id);
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
