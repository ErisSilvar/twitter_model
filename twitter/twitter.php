<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter | Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .pagina_principal {
            background-color: rgba(0, 0, 0, 0.11);
            border: 2px solid rgba(0, 0, 0, 0.068);
            padding: 10px;
            margin: auto;
            max-width: 800px; 
        }

        .postagem {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .postagem img {
            border-radius: 50%;
            margin-right: 10px;
            width: 60px; 
            height: 60px;
        }

        .postagem_user {
            margin-top: 0;
        }

        .publicacao {
            margin-top: 10px;
        }

        .icones_postagem {
            margin-top: 10px;
        }

        .icones_postagem img {
            margin-right: 10px;
            width: 24px; 
            height: 24px;
        }

        @media (max-width: 768px) {
            .postagem img {
                width: 50px;
                height: 50px;
            }

            .icones_postagem img {
                width: 20px;
                height: 20px;
            }
        }

        @media (max-width: 480px) {
            .postagem img {
                width: 40px;
                height: 40px;
            }

            .icones_postagem img {
                width: 15px;
                height: 15px;
            }
        }
    </style>
</head>
<body>
    <?php
        $postagem = <<<POSTAGEM
    <div class="pagina_principal"> 
        <div class="postagem">
            <img src="imgs/batata_perfil.png" alt="foto de perfil">
            <div>
                <div class="postagem_user">
                    <p>Batata <a href="#">@batata_evil</a></p>
                </div>
                <div class="publicacao">
                    Fui Cancelado!!
                </div>
POSTAGEM;
    ?>

    <?php
        $postagens = [
            1 => [
                "nome" => 'Batata',
                "foto" => 'imgs/batata_perfil.png',
                "arroba" => '<a href="#">@batata_evil</a>',
                "mensagem" => '%s'
            ],
        ];

         foreach($postagens as $valor){
            print_r ($valor);
         }   

    ?>
</body>
</html>