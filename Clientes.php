<?php

public function gestionarClientes() {
    while (true) {
        echo "Gestionar Clientes:\n";
        echo "1. Agregar Cliente\n";
        echo "2. Modificar Cliente\n";
        echo "3. Borrar Cliente\n";
        echo "4. Volver al Menú Principal\n";
        
        $choice = readline("Seleccione una opción (1-4): ");
        switch ($choice) {
            case '1':
                $this->agregarCliente();
                break;
            case '2':
                $this->modificarCliente();
                break;
            case '3':
                $this->borrarCliente();
                break;
            case '4':
                return;
            default:
                echo "Opción inválida.\n";
        }
    }
}
public function agregarCliente() {
    // Lógica para agregar un cliente
    echo "Cliente agregado exitosamente.\n";
}
public function modificarCliente() {
    // Lógica para modificar un cliente
    echo "Cliente modificado exitosamente.\n";
}
public function borrarCliente() {
    // Lógica para borrar un cliente
    echo "Cliente borrado exitosamente.\n";
}


?>

