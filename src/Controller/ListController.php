<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;

class ListController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/lists", name="get_lists")
     */
    public function getListsAction()
    {
        return [
            'message' => 'hellooooo'
        ];
    }
    /**
     * @Rest\Get("/list/{id}", name="get_list")
     */
    public function getListAction(int $id)
    {
        return [
            'message' => 'hellooooo'
        ];
    }
    /**
     * @Rest\Post("/lists", name="post_lists")
     */
    public function postListAction()
    {
        return [
            'message' => 'post lists action'
        ];
    }
    /**
     * @Rest\Put("/list", name="put_list")
     */
    public function putListAction()
    {
        return [
            'message' => 'post lists action'
        ];
    }
    /**
     * @Rest\Patch("/list/{id}", name="patch_list")
     */
    public function patchListAction(Request $request)
    {
        return [
            'message' => 'post lists action'
        ];
    }

    /**
     * @Rest\Get("/lists/{id}/task", name="get_lists_task")
     */
    public function getListsTaskAction(int $id)
    {
        return [
            'message' => 'Hello I m update method'
        ];
    }
}
