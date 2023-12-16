<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Functional\Controller;

use Nelmio\ApiDocBundle\Tests\Functional\TestKernel;
use Symfony\Component\Routing\Annotation\Route;

if (TestKernel::isAnnotationsAvailable()) {
    /**
     * @Route("/api", name="api_", host="api.example.com")
     */
    class ApiController extends ApiController80
    {
    }
} else {
    #[Route('/api', name: 'api_', host: 'api.example.com')]
    class ApiController extends ApiController81
    {
    }
}
