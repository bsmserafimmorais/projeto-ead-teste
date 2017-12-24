<?php
class Alunos extends model {

   public function getAlunos(){
      $array = array();

      $sql = "SELECT 
      *,
      (SELECT count(*) FROM aluno_curso WHERE aluno_curso.id_aluno = alunos.id) as qtcursos
       FROM alunos ";
      $sql = $this->db->query($sql);

      if($sql->rowCount() > 0){
         $array = $sql->fetchAll();
      }

      return $array;

   }

   public function getAluno($id){
      $array = array();

         $sql = "SELECT * FROM alunos WHERE id='$id'";
         $sql = $this->db->query($sql);

         if($sql->rowCount() > 0){
            $array = $sql->fetch();
         }

      return $array;
   }

}
?>