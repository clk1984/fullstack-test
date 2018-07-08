<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Interlocutor;
use App\Mission;
class InterlocutorTest extends TestCase
{
  public function setUp()
  {
    parent::setUp();
  }

  public function test_mission()
  {
    //Get only a mission with users
    $mission = Mission::whereHas("user")->firstOrFail();
    //Test relations
    $this->a_mission_has_a_user($mission);
    //Test scope
    $this->a_mission_works_with_title_scope($mission);
  }

  //------------Relations------------//

  public function a_mission_has_a_user($mission)
  {
    $this->assertNotEmpty($mission->user());
  }

  //------------Scopes------------//

  public function a_mission_works_with_title_scope()
  {
    $missions = Mission::notDefaultTitles()->get();
    foreach ($missions as $mission) {
      print_r($mission->title);
         $this->assertNotEquals('Mission title', $mission->title);
    }
    
  }

}
