<?php
/**
 * Part of fruit project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace fruit\Controller\Home;

use Windwalker\Core\Controller\AbstractController;
use Windwalker\Core\View\HtmlView;

/**
 * The GetController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class GetController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     * @throws \ReflectionException
     * @throws \Exception
     */
    protected function doExecute()
    {
        $view = $this->getView('', 'html', 'edge');

        $view['fruit'] = ['Name' => 'Apple', 'Year' => '18'];

        return $view->setLayout('home')->render();
    }
}
