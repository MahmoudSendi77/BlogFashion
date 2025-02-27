<?php

namespace ProductBundle\Repository {

    /**
     * ProductRepository
     *
     * This class was generated by the Doctrine ORM. Add your own custom
     * repository methods below.
     */
    class ProductRepository extends \Doctrine\ORM\EntityRepository
    {
        public function findProductByUser($id)
        {
            $query =$this->createQueryBuilder('p')
                ->innerJoin('p.id','u')
                ->where('u.id =:id ')
                ->setParameters(array(
                    'id'=>$id
                ))
                ->getQuery();
            return $query->getResult();
        }
        public function findProductById($id)
        {
            $query =$this->createQueryBuilder('p')
                ->where('p.productid =:id ')
                ->setParameters(array(
                    'id'=>$id
                ))
                ->getQuery();
            return $query->getResult();
        }
    }
}
