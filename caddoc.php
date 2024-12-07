<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["laudo"]) && isset($_FILES["residencia"])) {
        // Diretório para armazenar os arquivos
        $docDir = "docs/";

        // Inicializa um array para armazenar os caminhos dos arquivos
        $filePaths = [];

        // Processa o arquivo de laudo
        $laudoFile = $_FILES["laudo"]["name"];
        $laudoPath = $docDir . basename($laudoFile);
        if (move_uploaded_file($_FILES["laudo"]["tmp_name"], $laudoPath)) {
            $filePaths['laudo'] = $laudoPath;
        } else {
            echo "<script>alert('Erro ao mover o arquivo de laudo.');</script>";
            exit;
        }

        // Processa o arquivo de residencia
        $residenciaFile = $_FILES["residencia"]["name"];
        $residenciaPath = $docDir . basename($residenciaFile);
        if (move_uploaded_file($_FILES["residencia"]["tmp_name"], $residenciaPath)) {
            $filePaths['residencia'] = $residenciaPath;
        } else {
            echo "<script>alert('Erro ao mover o arquivo de residência.');</script>";
            exit;
        }

        // Insere os dados na tabela 'doc'
        $sql = "INSERT INTO doc (laudo, residencia) VALUES ('$laudoPath', '$residenciaPath')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Documentos cadastrados com sucesso!'); window.location='docs.php';</script>";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "<script>alert('Certifique-se de preencher todos os campos no formulário.');</script>";
    }
}
?>