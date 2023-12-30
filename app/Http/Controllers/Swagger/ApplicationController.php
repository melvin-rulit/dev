<?php

namespace App\Http\Controllers\Swagger;

use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="Api for test",
 *     version="1.0.0"
 * ),
 *
 * @OA\PathItem(
 *      path="/api/"
 * ),
 *
 * @OA\Get(
 *     path="/api/applications ",
 *     summary="Получить",
 *     tags={"Applications"},

 *     @OA\Response(
 *        response="200",
 *        description="ok",
 *        @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="id client"),
 *              @OA\Property(property="name", type="string", example="name client"),
 *              @OA\Property(property="email", type="string", example="email client"),
 *              @OA\Property(property="message", type="string", example="message client"),
 *              @OA\Property(property="comment", type="string", example="comment client"),
 *              @OA\Property(property="status", type="string", example="status client"),
 *
 *        ),
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/applications/{application} ",
 *     summary="Получить единичную",
 *     tags={"Applications"},
 *     @OA\Parameter(
 *          description="ID заявки",
 *          in="path",
 *          name="aplication",
 *          required=true,
 *          example=1
 *      ),
 *     @OA\Response(
 *        response="200",
 *        description="ok",
 *        @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="id client"),
 *              @OA\Property(property="name", type="string", example="name client"),
 *              @OA\Property(property="email", type="string", example="email client"),
 *              @OA\Property(property="message", type="string", example="message client"),
 *              @OA\Property(property="comment", type="string", example="comment client"),
 *              @OA\Property(property="status", type="string", example="status client"),
 *
 *        ),
 *     )
 * ),
 *
 * @OA\Post(
 *    path="/api/applications ",
 *    summary="Создать",
 *    tags={"Applications"},
 *
 *        @OA\RequestBody(
 *             @OA\JsonContent(
 *                  allOf={
 * *                    @OA\Schema(
 *                           @OA\Property(property="name", type="string", example="Примите мою заявку"),
 *                           @OA\Property(property="email", type="string", example="melvin@gmail.com"),
 *                           @OA\Property(property="message", type="string", example="Юрий"),
 *                      ),
 *                  }
 *             ),
 *        ),
 *
 *      @OA\Response(
 *          response="200",
 *          description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="id", type="integer", example="id client"),
 *                  @OA\Property(property="name", type="string", example="name client"),
 *                  @OA\Property(property="email", type="string", example="email client"),
 *                  @OA\Property(property="message", type="string", example="message client"),
 *                  @OA\Property(property="comment", type="string", example="comment client"),
 *                  @OA\Property(property="status", type="string", example="status client"),
 *              ),
 *       )
 * ),
 *
 * @OA\Patch(
 *     path="api/applications/{application}",
 *     summary="Обновить",
 *     tags={"Applications"},
 *          @OA\Parameter(
 *              description="ID заявки",
 *              in="path",
 *              name="aplication",
 *              required=true,
 *              example=1
 *          ),
 *
 *          @OA\Response(
 *              response="200",
 *              description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="message", type="bool", example="true"),
 *                  @OA\Property(property="description", type="string", example="updated"),
 *              ),
 *          ),
 * ),
 *
 *
 * * @OA\Delete(
 *     path="api/applications/{application}",
 *     summary="Удалить",
 *     tags={"Applications"},
 *          @OA\Parameter(
 *              description="ID заявки",
 *              in="path",
 *              name="aplication",
 *              required=true,
 *              example=1
 *          ),
 *
 *          @OA\Response(
 *              response="200",
 *              description="ok",
 *              @OA\JsonContent(
 *                  @OA\Property(property="message", type="bool", example="true"),
 *                  @OA\Property(property="description", type="string", example="destroy"),

 *              ),
 *          ),
 * ),
 */
class ApplicationController
{

}
