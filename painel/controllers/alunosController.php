<?php
class alunosController extends controller {

    public function __construct() {
        parent::__construct();

         $usuarios = new Usuarios();
       		 if(!$usuarios->isLogged()){
        		header("Location: ".BASE."login");
        	 }

        }



    public function index(){
    	$dados = array(
    		'alunos' => array()
    	);

    	$alunos = new Alunos();
    	$dados['alunos'] = $alunos->getAlunos();

    	$this->loadTemplate('alunos', $dados);
    }

     public function excluir($id){
        $sql = "DELETE FROM aluno_curso WHERE id_aluno = '$id'";
        $this->db->query($sql);

        $sql = "DELETE FROM alunos WHERE id = '$id'";
        $this->db->query($sql);

        header("Location: ".BASE."alunos");
    }
    public function adicionar(){
        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);


            $this->db->query("INSERT INTO alunos SET nome = '$nome', email = '$email', senha = '$senha'");

                    header("Location: ".BASE."alunos");
                
            
        }

        $this->loadTemplate('alunos_add', $dados);

    }
      public function editar($id){
        $dados = array(
            'aluno'=> array(),
            'modulos'=>array()
        );

        if(isset($_POST['nome']) && !empty($_POST['nome'])){

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            $cursos = $_POST['cursos'];


            $this->db->query("UPDATE alunos SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'");

            $this->db->query("DELETE FROM aluno_curso WHERE id_aluno = '$id' ");



            foreach ($cursos as $curso) {

            	$this->db->query("INSERT INTO aluno_curso SET id_aluno = '$id', id_curso = '$curso'");
            }

        }

        $alunos = new Alunos();
        $cursos = new Cursos();
        $dados['alunos'] = $alunos->getAluno($id);
        $dados['cursos'] = $cursos->getCursos();
        $dados['inscritos'] = $cursos->getCursosInscritos($id);


        $this->loadTemplate("alunos_edit", $dados);
    }

}
  


?>