<?php

namespace App\Http\Controllers;

use App\Character;
use App\Models\CharacterOrganisation;
use App\Organisation;
use App\OrganisationMember;
use App\Http\Requests\StoreOrganisationMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CharacterOrganisationController extends Controller
{
    /**
     * @var string
     */
    protected $view = 'characters.organisations';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('campaign.member');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Character $character)
    {
        $this->authorize('create', OrganisationMember::class);
        return view($this->view . '.create', ['model' => $character]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganisationMember $request, Character $character)
    {
        $this->authorize('create', \App\OrganisationMember::class);
        $relation = OrganisationMember::create($request->all());
        return redirect()->route('characters.show', [$character->id, 'tab' => 'organisation'])
            ->with('success', trans($this->view . '.create.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character, OrganisationMember $organisationMember)
    {
        $this->authorize('view', $organisationMember);

        return view($this->view . '.show', ['model' => $character, 'member' => $organisationMember]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character, CharacterOrganisation $characterOrganisation)
    {
        $this->authorize('update', $characterOrganisation);

        return view($this->view . '.edit', ['model' => $character, 'member' => $characterOrganisation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrganisationMember $request, Character $character, CharacterOrganisation $characterOrganisation)
    {
        $this->authorize('update', $characterOrganisation);

        $characterOrganisation->update($request->all());
        return redirect()->route('characters.show', [$characterOrganisation->character_id, 'tab' => ' organisation'])
            ->with('success', trans($this->view . '.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrganisationMember  $organisationMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character, CharacterOrganisation $characterOrganisation)
    {
        $this->authorize('delete', $characterOrganisation);

        $characterOrganisation->delete();
        return redirect()->route('characters.show', [$characterOrganisation->character_id, 'tab' => 'organisation'])
            ->with('success', trans($this->view . '.destroy.success'));
    }
}
