<?php

namespace Pion\SalesBundle\Controller;

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
        'range'        => 10 //Range of records to return
        );
    
    private function getSqlResults($start,$sql_data)
    {

        $em = $this->getDoctrine()->getManager($sql_data['manager']);

         //     findAll causes a timeout or a memoey issue
         //This method will scan over objects and return them as needed.
          $entities = $em->createQuery('SELECT p FROM '.$sql_data['query'].' p ORDER BY p.'.$sql_data['orderby'].' '.$sql_data['direction']);
          $iterableResult = $entities->iterate(array(),\Doctrine\ORM\Query::HYDRATE_ARRAY);
          $ent_group=NULL;

          $i=0;

          while (($row = $iterableResult->next()) !== false) 
          {
           $i++;
           if($i >= $start){$ent_group[]=$row;}

           //echo var_dump($ent_group);
           //$user = $row[0]->fetchOne(array(), Doctrine_Core::HYDRATE_ARRAY);
           //echo var_dump(get_class_vars("Pion\SalesBundle\Entity\TransactionPk"));
           //\Doctrine\Common\Util\Debug::dump($row);
           
           //Detach this result from Doctrine

           if($i===$sql_data['range']+$start){$em->clear();break;}
          }
        //echo var_dump($ent_group[0][0]);
      return array(
          'ent_group' => $ent_group
          );
    }

    private function getSqlCount($sql_data)
    {

        $em = $this->getDoctrine()->getManager($sql_data['manager']);

         //     findAll causes a timeout or a memoey issue
         //This method will scan over objects and return them as needed.
          $entities_count    = $em->createQuery('SELECT COUNT(p) FROM '.$sql_data['query'].' p');
          $total = $entities_count->getSingleScalarResult();
      return $total;
    }
  
     /**
     * AJAX Lists all TransactionPk entities.
     * @Route("/ajax/index/", name="transaction_ajax_index")
     * Route("/ajax/index/", name="transaction_ajax_index", defaults={"_format": "json"})
     * @Method("GET")
     */
    public function ajaxAction($start=0)
    {
        $param=$this->default_param;
        $sql_results=$this->getSqlResults($start,$param);

        $return=json_encode($sql_results['ent_group']);//jscon encode the array
        return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
    }
    
     /**
     * Lists all TransactionPk entities.
     *
     * @Route("/{start}", name="transaction")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($start=0)
    {
        $param=$this->default_param;
        $sql_results=$this->getSqlResults($start,$param);
        return array(
            'entities'      => $sql_results['ent_group'],
            'display'       => array_keys($sql_results['ent_group'][0][0]),
            'title'         => $param['title'],
            'tp_paths'      => $param,
            'total'         => $this->getSqlCount($param),
            'start'         => $start,
            'range'         => $param['range']
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
