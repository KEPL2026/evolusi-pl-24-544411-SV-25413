<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskTest extends TestCase
{
    public function test_tasks_page_loads(): void
    {
        $response = $this->get('/tasks');
        $response->assertStatus(200);
    }

    public function test_can_add_task(): void
    {
        $response = $this->post('/tasks', ['title' => 'Belajar Laravel']);
        $response->assertRedirect('/tasks');
    }
}