<?php
namespace Middleware\Web;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Pes\Http\Response;
use Pes\Http\Request\RequestParams;
use Pes\View\View;
use Pes\Container\Container;

use Container\ContextContainerConfigurator;
use Model\Pribehy;
use Model\Kraje;
use Model\NabidkaPrace;

use Pes\Logger\FileLogger;
use Pes\View\View;
use Pes\View\Template\PhpTemplate;


class Application implements MiddlewareInterface {
    /**
     * 
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return Response
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler=NULL): ResponseInterface {

        $logger = FileLogger::getInstance('Logs', 'ApplicationLogger.log', FileLogger::APPEND_TO_LOG);
$logger->info('Start!!!');
        $contextContainer = (new ContextContainerConfigurator())->configure(new Container());
        $template = (new PhpTemplate('contents/layout.php'));

        $requestParams = new RequestParams();
        $mainTemplate = 'mainTemplate';
        $pribeh = $requestParams->getParam($request, 'pribeh', '');  // druhý parametr je default hodnota
        $kraj = $requestParams->getParam($request, 'kraj', '');        
        $data = [
            'mainTemplate' => $mainTemplate,
            'mainTemplate' => $requestParams->getParam($request, 'main', 'uvod'),  // default uvod
            'mainAttributes' => ['class'=>$mainTemplate],
            'pribehStudenta' => (new Pribehy())->getPribehStudenta($pribeh),
            'perexy' =>  (new Pribehy())->findPribehyPerexyOstatni($pribeh),
            'kraje' => (new Kraje())->getVyberKraje($kraj),
            'nabidkaPraceVKraji' => (new NabidkaPrace())->findPodleIdKraje($kraj),
                 ];   
        $view = (new View())->setTemplate($template)->setData([]); //array_merge($data, $contextContainer->get('contents/layout.php')));
$logger->debug($view->getString());

        $response = new Response(200);
        $size = $response->getBody()->write($view->getString());
        return $response;
    }

}