<?php
header("Content-type: application/json; charset=utf-8");
$json = file_get_contents('php://input');
$mensaje = json_decode($json);
$mensajeUsuario = $mensaje->{'mensaje'};
$userid = $mensaje->{'userid'};

if($mensajeUsuario == '') {
    echo json_encode('mensaje no recibido');
} else {
    $proccess = "pgrep python";
    $result_process = shell_exec($proccess);
    $flag = True;

    while(strlen($result_process) == 0 && $flag) {
        // activar variable env conda
        // $run_ada = 'python3 chat_function.py "'.$mensajeUsuario . '" ' . $userid;
        $run_ada = 'sudo /opt/anaconda3/envs/chatbot/bin/python3 chat_function.py "'.$mensajeUsuario . '" ' . $userid;
        $run_command = shell_exec($run_ada);
        $flag = False;
    }
    ////////////////Ya se lee y devuelve mensaje de usuario
    // $response = explode("Reply: ", $run_command);
    echo json_encode($run_command);
}
?>
