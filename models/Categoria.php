<?php

    class Categoria extends Conectar{

        public function get_categoria(){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM webservicepostmanphp.categoria where cat_estado=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_categoria_x_id($cat_id){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM webservicepostmanphp.categoria where cat_id=$cat_id;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        
        public function insert_categoria($cat_nom,$cat_obs){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO webservicepostmanphp.categoria(cat_id,cat_nombre,cat_observacion,cat_estado) values (null,?,?,1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_nom);
            $sql->bindValue(2,$cat_obs);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_categoria($cat_id,$cat_nom,$cat_obs){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="UPDATE webservicepostmanphp.categoria set cat_nombre =? ,cat_observacion =?  where cat_id = ? ;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_nom);
            $sql->bindValue(2,$cat_obs);
            $sql->bindValue(3,$cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_categoria($cat_id){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="UPDATE webservicepostmanphp.categoria set cat_estado=0 where cat_id = ? ;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }


    }
