<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 12/09/2017
 * Time: 21:57
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Keyword;
use AppBundle\Entity\Ranking;
use AppBundle\Form\KeywordType;
use AppBundle\Form\ProjectType;
use AppBundle\Form\RankingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;
use Goutte\Client;
use Symfony\Component\Validator\Constraints\DateTime;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;












class ProjectController extends Controller
{

    /**
     * @Route("/add", name="addProject")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {



        $project = new Project();
        $form = $this->createForm(ProjectType::class,$project);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $this->get('security.token_storage')->getToken()->getUser(); // get the current user
            $userId = $user->getId();
            $project->setOwnerId($userId); // set the current user id

            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        $formView = $form->createView();

        return $this->render('projectAdd.html.twig', array('form'=>$formView));


    }

    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function addProductData(Request $request)
    {
        //$this->checkRanking(array('mamcin'), 'dtp-ag.com');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Project');
        $user = $this->get('security.token_storage')->getToken()->getUser(); // get the current user


        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $domains = -1; // Si il est pas co on n'affiche rien
        } else {

            $userId = $user->getId();
            $domains = $repository->findBy(array('ownerId' => $userId));
        }

        return $this->render('default/index.html.twig', array('productsData'=>$domains));
        // $product = $repository->find($userId);

        // $product = $this->getDoctrine()
        //->getRepository('AppBundle:Project')
        // ->findAll();

    }

    /**
     * @Route("project/{id}", name="project")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function showProject(Request $request, $id)
    {


        $keyword = new Keyword();


        // KEYWORD
        $formKeyword = $this->createForm(KeywordType::class,$keyword);
        $formKeyword->handleRequest($request);
        $formViewKeyword = $formKeyword->createView();

        // RANKING
        //$formRanking = $this->createForm(RankingType::class,$ranking);
        //$formRanking->handleRequest($request);
        //$formViewRanking = $formRanking->createView();

        if ($formKeyword->isSubmitted()) {
            $keyword->setDomainId($id); // set the current user id
            $em = $this->getDoctrine()->getManager();
            $em->persist($keyword);
            $em->flush();

            $this->checkRanking($id);

            return $this->redirectToRoute('project', array('id' => $id));

        }

        else {


            // SIMPLE VISITE DES KW
            $keyword = $this->getDoctrine()
                ->getRepository(Keyword::class)
                ->findAll();

            $ranking = $this->getDoctrine()
                ->getRepository(Ranking::class)
                ->findBy(array('domainId' => $id));

            $project = $this->getDoctrine()
                ->getRepository(Project::class)
                ->findBy(array('id' => $id));


            $actualDate =  (new \DateTime("now"))->format('d.m.y');
            $previousDate =  (new \DateTime("yesterday"))->format('d.m.y');


/*
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository( 'AppBundle:Ranking');*/

            /*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                $domainLinks = -1; // Si il est pas co on n'affiche rien
            } else {
                //$domainLinks = $repository->findBy(array('domainId' => $id));
                $ranking = $repository->findBy(array('domainId' => $id));

            }*/
            //print_r((array('domainLinks' => $domainLinks)));
            //return $this->render('projectList.html.twig', array('domainDatas' => $ranking ,'form'=>$formViewKeyword, 'domainDatas' => $ranking ,'form'=>$formViewKeyword ));
            return $this->render('projectList.html.twig', array('keyword' => $keyword, 'domainData' => $ranking, 'form'=>$formViewKeyword, 'project'=>$project, 'actualDate'=>$actualDate, 'previousDate'=>$previousDate));
        }
    }



    /**
     * @Route("data/{id}", name="data")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function checkRanking($id)
    {

        $domainID = $id;
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Keyword');
        $keywords = $repository->findBy(array('domainId' => $id));

        // Sert à définir le targetRD
        $domainNameCall = $this->getDoctrine()
            ->getRepository(Project::class)
            ->findOneBy(array('id' => $id));
        $domainName = $domainNameCall->getDomain();


        $targetRD = $domainName;

        foreach ($keywords as $value) {

        $keyword = $value->getKeyword();
            //print_r($keyword);
            $keywordId = $value->getId();

        //foreach($keywords as $keyword){

            $css_selector = "#ires cite";
            $thing_to_scrape = "_text";
            $firstnresults = 50;
            $actualRanking = 0;
            $pages = ceil($firstnresults / 10);

            for($p = 0; $p < $pages; $p++){ // Pour chaque page
                $start = $p * 10;

                $client = new Client();

                $baseurl = "https://www.google.fr/search?q=".$keyword."&oq=".$keyword.".&sourceid=chrome&ie=UTF-8&start=".$start;
                $crawler = $client->request('GET', $baseurl);

               // print_r($crawler);
                $output = $crawler->filter($css_selector)->extract($thing_to_scrape);


                $count = $crawler->filter('_text')->count();

                for ($i = 0; $i < count($output); $i++) { // Pour chaque resultat

                    if (strpos($output[$i], $targetRD) !== false) {
                        $urlSerp = $output[$i];
                        if ($urlSerp == null) {
                            $urlSerp == "NA";
                        }
                        //print $targetRD." - ".$keyword." - position actuelle : ".($i+1+$start)."<br />"; // Position sur la page + 1 + Numero page
                        $actualRanking = $i+1+$start;


                        break;

                    }
                }
            }

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Ranking');
            $rank = $repository->findOneBy(
                array('keywordId' => $keywordId),
                array('id' => 'DESC')
        );
            $actualDate =  (new \DateTime("now"))->format('d.m.y'); // Date actuelle

            if (isset($rank)) { //  Si le keywordId  trouvable on  check la lastdate
                $keywordLastDate = date($rank->getDay()->format('d.m.y')); // Date BDD


                if ($keywordLastDate == $actualDate) { // Si le jour est le même on update juste la pos
                    $rank->setRank($actualRanking);
                    print($id);
                    $em->flush();

                } else {
                    /** @var $rank Ranking */

                    // Update quoi qu'il arrive
                    $ranking = new Ranking();
                    $ranking->setDomainId($id); // set the current user id
                    $ranking->setKeywordId($keywordId);
                    $ranking->setRank($actualRanking);
                    $ranking->setDay(new \DateTime("now"));
                    $ranking->setUrlSerp($urlSerp);

                    $em->persist($ranking);
                    $em->flush();


                }

            } else {
                /** @var $rank Ranking */

                // Update quoi qu'il arrive
                $ranking = new Ranking();
                $ranking->setDomainId($id); // set the current user id
                $ranking->setKeywordId($keywordId);
                $ranking->setRank($actualRanking);
                $ranking->setDay(new \DateTime("now"));
                $ranking->setUrlSerp($urlSerp);

                $em->persist($ranking);
                $em->flush();


            }
        }

        return $this->redirect($this->generateUrl('project', array('id' => $domainID)));

    }

    /**
     * @Route("/chart/{id}", name="chart")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function statAction($id)
    {




        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Ranking');
        $products = $repository->findBy(array('keywordId' => $id));



        foreach ($products as $value) {

            $rankArray[] = $value->getRank();
             $v1 = $value->getDay()->format('d.m.y');

            $dayArray[] = $v1;



        }




        // Chart
        $sellsHistory = array(
            array(
                "name" => "Total des ventes",
                "data" => $rankArray
            ),
            /*array(
                "name" => "Ventes en France",
                "data" => array(467, 321, 56, 698, 134, 344, 452)
            ),*/

        );



        $dates = $dayArray;

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur

        $ob->chart->renderTo('linechart');
        $ob->title->text('Vente du 21/06/2013 au 27/06/2013');

        $ob->yAxis->title(array('text' => "Ventes (milliers d'unité)"));

        $ob->xAxis->title(array('text'  => "Date du jours"));
        $ob->xAxis->categories($dates);
        $ob->yAxis->reversed(true);
        $ob->yAxis->floor(0);
        $ob->yAxis->ceiling(100);


        $ob->series($sellsHistory);


        return $this->render('projectChart.html.twig', array(
                'piechart' => $ob));
    }

}