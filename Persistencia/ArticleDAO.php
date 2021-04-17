<?php

require_once ("/home/u999386215/public_html/proyectoLibreria/Negocio/Article.php");
require_once ("/home/u999386215/public_html/proyectoLibreria/Persistencia/Util/Conexion.php");
require_once ("/home/u999386215/public_html/proyectoLibreria/Persistencia/DAO.php");

/**
 *Represents the DAO of the article entity
 */
class ArticleDAO implements DAO
{

    /**
     * Reference to the connection with the database
     * @var Object
     */
    private $conexion;

    /**
     * Reference to an articleDAO object
     * @var articleDAO
     */
    private static $articleDAO;

    //------------------------------------------
    // Builder
    //------------------------------------------

    /**
     * Builder of the class
     *
     * @param Object $conexion
     */
    private function __construct($conexion)
    {
        #mysqli_set_charset($this->conexion, "utf8");
        $this->conexion = $conexion;
    }

    /**
     * Method to query an article by his code type
     *
     * @param int $codArticle
     * @return Article
     */
    public function consult($cod_documento)
    {

        $sql = "SELECT * FROM ARTICULO WHERE cod_documento = ".$cod_documento;

        if (!$resultado = pg_query($this->conexion, $sql)) die();
        $row = pg_fetch_array($resultado);

        $article = new Article();

        $article->setCod_documento($row[0]);
        $article->setFecha_publicacion($row[1]);
        $article->setSsn($row[2]);

        return $article;
    }

    /**
     * Method to create a new article
     *
     * @param Article $article
     * @return void
     */
    public function create($article)
    {

        $sql = "insert into ARTICULO values (" . $article->getCod_documento() . ",
                                            '" . $article->getFecha_publicacion() . "',
                                            '" . $article->getSsn() . "'
                                        );";

        pg_query($this->conexion, $sql);
    }

    /**
     * Method that modifies an article entered by parameter
     *
     * @param Article $article
     * @return void
     */
    public function modify($article)
    {

        $sql = "UPDATE ARTICULO SET cod_documento = " . $article->getCod_documento() . ",
                                   fecha_publicacion = '" . $article->getFecha_publicacion() . "',
                                   ssn = '" . $article->getSsn() . "'                                  
                                   where cod_documento = " . $article->getCod_documento() . "
                                ;";
        pg_query($this->conexion, $sql);
    }

    /**
     * Method to delete a new article
     *
     * @param Article $article
     * @return void
     */

    public function delete($cod_documento)
    {
        $sql = "DELETE FROM ARTICULO WHERE cod_documento = " . $cod_documento;

        pg_query($this->conexion, $sql);
    }
    /**
     * Method to get an ArticleDAO object
     *
     * @param Object $conexion
     * @return ArticleDAO
     */
    public function getList()
    {

        $sql = "SELECT * FROM ARTICULO";

        if (!$resultado = pg_query($this->conexion, $sql)) die();

        $article = array();

        while ($row = pg_fetch_array($resultado)) {
            $article->setCod_documento($row[0]);
            $article->setFecha_publicacion($row[1]);
            $article->setSsn($row[2]);

            $articles[] = $article;
        }
        return $articles;
    }



    /**
     * Gets the object of this class. In case it is null, create it
     *
     * @param Object $conexion
     * @return ArticleDAO
     */
    public static function getArticleDAO($conexion)
    {
        if (self::$articleDAO == null) {
            self::$articleDAO = new ArticleDAO($conexion);
        }

        return self::$articleDAO;
    }
}
