<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 8/18/15
 * Time: 11:19 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Laravel5\HalJsonSerializer;

use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;

trait HalJsonResponseTrait
{
    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function errorResponse($json) {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ErrorResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourceCreatedResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourceCreatedResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourceDeletedResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourceDeletedResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourceNotFoundResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourceNotFoundResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourcePatchErrorResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourcePatchErrorResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourcePostErrorResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourcePostErrorResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourceProcessingResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourceProcessingResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function resourceUpdatedResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\ResourceUpdatedResponse($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function response($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\Response($json));
    }

    /**
     * @param string $json
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function unsupportedActionResponse($json)
    {
        return (new HttpFoundationFactory())
            ->createResponse(new \NilPortugues\Api\HalJson\Http\Message\UnsupportedActionResponse($json));
    }
}
