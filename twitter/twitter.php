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
            background-color: black;
        }

        .pagina_principal {
            background-color: rgba(255, 255, 255, 0.603);
            border: 2px solid rgba(0, 0, 0, 0.068);
            padding: 10px;
            margin: auto;
            max-width: 800px; 
        }

        .postagem {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px; /* Espaçamento entre postagens */
            padding: 15px; /* Padding interno */
            border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Linha sutil entre postagens */
        }

        .postagem:last-child {
            border-bottom: none; /* Remove a linha da última postagem */
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

<div class="pagina_principal">
    <?php
        
        $postagens = [
            1 => [
                "nome" => 'Batata',
                "foto" => 'imgs/batata_perfil.png',
                "arroba" => '@batata_evil',
                "mensagem" => 'Fui Cancelado!!'
            ],
            2 => [
                "nome" => 'Cenoura',
                "foto" => 'imgs/cenoura_perfil.png',
                "arroba" => '@cenoura_vida',
                "mensagem" => 'Hoje eu virei um purê'
            ],
            3 => [
                "nome" => 'Tomate',
                "foto" => 'imgs/tomate_perfil.png',
                "arroba" => '@tomate_frutinha',
                "mensagem" => 'Tomate é fruta ou legume?'
            ]
        ];

        
        foreach ($postagens as $postagem) {
            echo '<div class="postagem">';
            echo '<img src="' . $postagem['foto'] . '" alt="foto de perfil">';
            echo '<div>';
            echo '<div class="postagem_user">';
            echo '<p>' . $postagem['nome'] . ' <a href="#">' . $postagem['arroba'] . '</a></p>';
            echo '</div>';
            echo '<div class="publicacao">';
            echo $postagem['mensagem'];
            echo '</div>';
            echo '<div class="icones_postagem">';
            echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANlJREFUSEvt1bFtwkAYhuGHMisQCSlCgqzBBLSsQB2aNNShiVJmBCbIAIxAAR0iEmIFGiLgpJxkLIdzsKiwGxfn/33t706fG258NW7MlxX08YbnitIlRvgKnKxgg8eK8Di+QjsvOPyuVo3tjJOF1YKYfx1R8iDXEd1zRN9o/RFArJQePtFJBLXGU77sQl1P0C0YbuIdg+QOMMdrUV0XzcYzvTvJHxDuY3xgX0J29j+4JAhrU7xgWwYcn0l1f/iCBYaY/QdcVhDeOMTxcw08v8nXMi7OpSKqLD0CklUxGTEyAQkAAAAASUVORK5CYII="/>';
            echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPJJREFUSEvtlD0KwkAQRl8Kr2DhHUSwUhDRw/jTeCC19CCKWIiNhYcQtLFXUAZ2ZVmzOxtEYpFtNoSZefNNvkzGj0/24/pUAHXCpY1oZFpbOi0+lXY3wNCPyVPQAbYmsA/szbMGkLCPev6LOnAC5JZzAZrmjgmw8CigZjoXBe4RBaLkHiEkAebAOFBkAUy+Bbj5wY4CkCQFfweQsVk7+8Jk3NNcW3mWjP2IYgoxQNurfgB61hShAqnfoAEcHVufgRZwtVANEPO+zRVb74AH0DXAd14IsAYGympwc2fADVilrAp1QxYJKG2bFmkyGlspUEf5ApB5Jxly46MkAAAAAElFTkSuQmCC"/>';
            echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAehJREFUSEvV1MvLTWEYBfDfF5kiRK6lMFCSgUsuSWJKMVBymbiM/CtGLhlhQlEMzMj9UlIMFCkRBi6lpAwIe329R+ds+5yz++pL3jqdwbvftZ71POtZI8b5jIwzvn9GsBvbsQq/cAfncako3oH81jJa5ANcwLl6R+oKZuAstvZpXYgmYWWf+yvYj4+d+26CCbiNNfiAg7iHH9iAU5heHgbgAG5hYrk/gWkFYyN+5ttugkM4js9Yhre1KufiamnZZryr3c+v2voEU7AXZ+oEj7AC+3B6jO6KqpO4iajoUfC9yE0lb8ZIsBjP8R6z+hHMa2hPW74leFbeB6dHwX2sxp7ipLag3d8dxjFcxrY6wZFqQEfxqfL78oYhDiOcg6eYXP3vLHvRoyD+jooM+gXWl14OA879zGLPRdW7a9VixmWjp75oGUwckGG1JUnl1xHwDDg7kz1qJOhUkwVbWM3jZXlQ93znfcDvYkEBX1da/Ed1v7CL5CiJK16XzKmTdIOn9/F95tdzBqVpYiHZ00TSDf64ioxNJQH+mtewuA7JDSztUpLsibq05WEZ6Jd+ThhGkHdTC0ny6VVJ09nFcVvwdZDN2hB0SJK0UZITEyTSB4I32XRQMVFyEWnHLnxrsyBtFbq8JNZTz2swAAAABJRU5ErkJggg=="/>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>
</div>

</body>
</html>
