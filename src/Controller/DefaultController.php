<?php

namespace App\Controller;

use App\Util\Car;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        // modifying the code using vars template and args
        $template = 'default/index.html.twig';
        $args = ['controller_name' => 'DefaultController'];

        return $this->render($template, $args);
    }

    /**
     * @Route("/limerick", name="limerick")
     */
    public function limerick(): Response
    {
        // modifying the code using vars template and args
        $template = 'default/limerick.html.twig';
        $args = ['controller_name' => 'DefaultController'];

        return $this->render($template, $args);
    }

    /**
     * @Route("/subtract/{num1}/{num2}", name="subtract")
     */
    public function subtract($num1, $num2, $result): Response
    {
        // modifying the code using vars template and args
        $template = 'default/subtract.html.twig';
        $result = $num1 - $num2;
        $args = ['num1' => $num1, 'num2' => $num2, $result];

        return $this->render($template, $args);
    }

    /**
     * @Route("/car", name="car")
     */
    public function car(): Response
    {
        $car1 = new Car();
        $car1->setMakeModel('Ford Mondeo');
        $car1->setFuel('diesel');

        $car2 = new Car();
        $car2->setMakeModel('Jaguar XF');
        $car2->setFuel('petrol');

        $car3 = new Car();
        $car3->setMakeModel('Nissan Leaf');
        $car3->setFuel('electric');


        $template = 'default/car.html.twig';
        $args = [
            'cars' => [$car1, $car2, $car3]
        ];

        return $this->render($template, $args);
    }
}
