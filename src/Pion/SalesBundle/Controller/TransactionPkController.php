<?php

namespace Pion\SalesBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;



use Pion\SalesBundle\Form\TransactionPkType;
use Pion\SalesBundle\Entity\TransactionPk;




/**
 * TransactionPk controller.
 * AJAX Calls added for Jquerya
 * Total records stored in session cookie after first count to avoid recounting 
 * them each time an ajax call is made
 * 
 * @Route("/transaction")
 */
class TransactionPkController extends Controller
{
 
    private $default_param = array 
        (
        //Sheet title
        'title'        => 'Transaction',
        //D/SQL
        'manager'      => 'pionsales',        
        'orderby'      => 'id',
        'direction'    => 'asc',
        'query'        => 'PionSalesBundle:TransactionPk',
        //Template
        'show'         => 'transaction_show', 
        'edit'         => 'transaction_edit',
        'create'       => 'transaction_new',
        'ajax_index'   => 'transaction_ajax_index',
        'range'        => 10 //Default range of records to return
        );

    
    private function getSqlResults($page,$param)
    {
        $em = $this->getDoctrine()->getManager($param['manager']);
        /*
        * Only Call getTotal once 
        */
       $this->session = $this->getRequest()->getSession();
       $total_records=$this->session->get('my_total_records',-1);
       if ($total_records == -1){$total_records = $this->getSqlCount($param);};
          
       /*
        * Make sure we do not go over the max/min records
        */
       if ($total_records <= ($page-1)*$param["range"]){$page=intval($total_records/$param["range"]);};
       if ($page < 1){$page == 1;};
          
       /*
        * Make Query
        */
       $entities = $em->createQuery('SELECT p FROM '.$param['query'].' p ORDER BY p.'.$param['orderby'].' '.$param['direction']);
       $entities->setMaxResults($param['range']);
       $entities->setFirstResult( ($page -1 )*$param['range'] );  
       $iterableResult = $entities->getArrayResult();

 
          
      return array(
          'ent_group'      => $iterableResult,
          'page'           => $page,
          'total_records'  => $total_records
      );
    }

    private function getSqlCount($param)
    {
        
        $em = $this->getDoctrine()->getManager($param['manager']);

        /*
         *      findAll causes a timeout or a memoey issue
         *      This method will scan over objects and return them as needed.
        */
        
        $entities_count    = $em->createQuery('SELECT COUNT(p) FROM '.$param['query'].' p');
        $total = $entities_count->getSingleScalarResult();
   
        /*
         * Set total records so we do not need to run this in the future
        */
        $this->session = $this->getRequest()->getSession();
        $this->session->set('my_total_records', $total);      
        return $total;
    }
      
     /**
     * AJAX Lists all TransactionPk entities.
     * @Route("/ajax/index/", name="transaction_ajax_index")
     * @Method("GET")
     */
    public function ajaxAction()
    {
        $param       = $this->default_param;
        $request     = $this->getRequest();
        /*
         * Page number and records
         */
        $page        = $request->query->get('cur_page'); // get $page parameter
        $records     = $request->query->get('records_per_page'); // get $page parameter
        if(empty($page)){$page=1;};
        if(!empty($records)){$param['range']=$records;};

        /*
         * Sorting
         */
        $sortBy      = $request->query->get('sortBy');
        $direction   = $request->query->get('dir');
        if(!empty($sortBy)){$param['orderby']=$sortBy;};
        if(!empty($sortBy)){$param['direction']=$direction;};
 

        $sql_results = $this->getSqlResults($page,$param);
        $return=json_encode($sql_results);//jscon encode the array
        return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
    }
    
     /**
     * Lists all TransactionPk entities.
     *
     * @Route("/", name="transaction")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $param=$this->default_param;
        return array(
            'title'         => $param['title'],
         );        
    }
    
    
    
    /**
     * Creates a new TransactionPk entity.
     *
     * @Route("/", name="transaction_create")
     * @Method("POST")
     * @Template("PionSalesBundle:TransactionPk:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new TransactionPk();
        $form = $this->createForm(new TransactionPkType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager('pionsales');
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transaction_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new TransactionPk entity.
     *
     * @Route("/new", name="transaction_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TransactionPk();
        $form   = $this->createForm(new TransactionPkType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TransactionPk entity.
     *
     * @Route("/{id}", name="transaction_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager('pionsales');

        $entity = $em->getRepository('PionSalesBundle:TransactionPk')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TransactionPk entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TransactionPk entity.
     *
     * @Route("/{id}/edit", name="transaction_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager('pionsales');

        $entity = $em->getRepository('PionSalesBundle:TransactionPk')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TransactionPk entity.');
        }

        $editForm = $this->createForm(new TransactionPkType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing TransactionPk entity.
     *
     * @Route("/{id}", name="transaction_update")
     * @Method("PUT")
     * @Template("PionSalesBundle:TransactionPk:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager('pionsales');

        $entity = $em->getRepository('PionSalesBundle:TransactionPk')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TransactionPk entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TransactionPkType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transaction_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TransactionPk entity.
     *
     * @Route("/{id}", name="transaction_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager('pionsales');
            $entity = $em->getRepository('PionSalesBundle:TransactionPk')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TransactionPk entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('transaction'));
    }

    /**
     * Creates a form to delete a TransactionPk entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
