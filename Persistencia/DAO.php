<?php
/**
 * Interfaz para los patrones DAO
 */
interface DAO {

    /**
     * Consulta un elemento de una tabla a partir de su código
     *
     * @param int $codigo
     * @return Object
     */
    public function consult($codigo);

    /**
     * Crea un elemento en una tabla de la base de datos
     *
     * @param Object $elemento
     * @return void
     */
    public function create($elemento);

    /**
     * Modifica un elemento en una tabla de la base de datos
     *
     * @param Object $elemento
     * @return void
     */
    public function modify($elemento);

        /**
     * Elimina un elemento en una tabla de la base de datos
     *
     * @param Object $elemento
     * @return void
     */
    public function delete($elemento);

    /**
     * Obtiene una lista de elementos de una tabla de la base de datos
     *
     * @return Object[]
     */
    public function getList();
}
?>