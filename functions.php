<?php
function validarCPF($cpf) {
    return preg_match("/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/", $cpf);
}
?>
