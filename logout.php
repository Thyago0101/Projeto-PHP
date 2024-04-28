<?php
session_start();
session_destroy(); // Destroi todas as variáveis de sessão
header("Location: index.html"); // Redireciona para a página de login após sair
exit();
