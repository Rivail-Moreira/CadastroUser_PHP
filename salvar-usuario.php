<?php 
  switch (@$_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
        VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $res = $conn->query($sql);
        if ($res==true) {
          print "<script>alert('O Cadastro foi realizado com sucesso!'); </script>";
          print "<script>location.href='?page=listar';</script>";
        }else{
          print "<script>alert('Não foi possível fazer o cadastro!'); </script>";
          print "<script>location.href='?page=listar';</script>";
        }
    break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET
              nome='{$nome}',
              email='{$email}',
              senha = '{$senha}',
              data_nasc= '{$data_nasc}'
          WHERE
              id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res==true) {
          print "<script>alert('O Cadastro foi atualizado com sucesso!'); </script>";
          print "<script>location.href='?page=listar';</script>";
        }else{
          print "<script>alert('Não foi possível fazer o cadastro!'); </script>";
          print "<script>location.href='?page=listar';</script>";
        }
    break;
    case 'excluir':
      $sql = "DELETE FROM usuarios WHERE id=" .$_REQUEST["id"];
      $res = $conn->query($sql);
      if ($res==true) {
        print "<script>alert('O Cadastro foi excluído com sucesso!'); </script>";
        print "<script>location.href='?page=listar';</script>";
      }else{
        print "<script>alert('Não foi possível excluir o cadastro!'); </script>";
        print "<script>location.href='?page=listar';</script>";
      }
    break;
    default: 
      print "<h1>Tente mais tarde!</h1>";
        break;
  } 

?>