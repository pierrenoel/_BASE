<?php

namespace app\controllers;

class HomeController extends Controller
{

    /**
     * @return void
     */
    public function index() : void
    {
        $this->view('posts/index');
    }

    /**
     * @param $id
     * @return void
     */
    public function show($id) : void
    {
        // Process to check if the id exists ....
        // If not please, redirect to a 404 page
        $this->view('posts/show',['id' => $id]);
    }

    /**
     * @return void
     */
    public function create(): void
    {
        $this->view('posts/create');
    }

    /**
     * @param array $items
     * @return void
     */
    public function store(array $items): void
    {
        var_dump($items);
    }

    /**
     * @param $id
     * @return void
     */
    public function edit($id): void
    {
        // Process to check if the id exists ....
        // Get the post into the database
        // Sent it to the view

        $items = [
            'id' => $id,
            'post' => [
                'title' => 'Ceci est un titre'
            ]
        ];

        $this->view('posts/edit',$items);
    }

    /**
     * @param array $items
     * @return void
     */
    public function update(array $items): void
    {
        var_dump($items);
    }
}