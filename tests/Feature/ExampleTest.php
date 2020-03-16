<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_uri()
    {
        $res = $this->get('/');
        $res->assertStatus(500);

    }

    public function test_get_login_tanapa_login()
    {
        $response = $this->get('/admin/layanan');
        $response->assertStatus(302);
    }

    public function test_get_login_ke_bumdes()
    {
        $response = $this->get('/admin/bumdes');
        $response->assertStatus(302);
    }

    public function test_get_landing_layanan(){
        $response = $this->get('/landing/layanan');
        $response->assertStatus(302);
    }


}
