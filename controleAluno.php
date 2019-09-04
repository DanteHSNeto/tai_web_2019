<?php
session_start();
include_once '../modelo/modeloAluno.php';
class controleAluno{
    public static function index(){
        echo "<script>window.location='../view/viewAluno.php'</script>";
    }
    public static function cadastrar(){
        echo "<script>window.location='../view</script>";
    }
    public static function alterar($id){
        $aluno = modeloAluno::findAluno($id);
        if (empty){

        }
    }
    public static function confirmar(){
        if($_POST['nome'] != "" && $_POST['curso'] != "" && $_POST['turma'] != ""){
            $dados_aluno = array(
                "id" => mb_strtoupper($_POST['id'], 'UTF-8'),
                "nome" => mb_strtoupper($_POST['nome'], 'UTF-8'),
                "curso" => mb_strtoupper($_POST['curso'], 'UTF-8'),
                "turma" => mb_strtoupper($_POST['turma'], 'UTF-8')
            );

            //inserir
            if (empty($_POST['id'])){
                modeloAluno::addAluno($dados_aluno);
            }
            //Alterar
            else {
                modeloALuno::upAluno($dados_aluno);
            }

            echo "<script>window.location='../view/viewAluno.php'</script>";

     
        };
    }
    public static function loadTabelaAlunos(){
        $alunos = modeloAluno::getAlunos();
        while ($objAluno = $aluno->fetchObject()) {
            echo "<tr><td>".$objAluno->id."</td><td>".$objAluno->nome."</td><td>".$objAluno->curso."</td><td>".$objAluno->turma."</td>";
            echo "<td>";
            echo "<a href='alterar/$objAluno->id' value='alterar/$objAluno->id' class></a>";
            echo "<button type ='submit' name='acao' value='alterar/$objAluno->id'>";
            echo "<span class='glyphicon glyphicon-pencil'></span>";
            echo "</button>";
            echo "&nbsp";
        }
    }

}
?>