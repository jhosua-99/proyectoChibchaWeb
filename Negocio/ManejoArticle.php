<?php
    /**
     * Import classes
     */	
    require_once ("/home/u999386215/public_html/proyectoLibreria/Persistencia/ArticleDAO.php");
    require_once ("/home/u999386215/public_html/proyectoLibreria/Persistencia/Util/Conexion.php");
	

	class ManejoArticle{
		
        /**
         * Atribute for the connection to  the database
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultArticle($codArticle){

            $articleDAO = ArticleDAO::getArticleDAO(self::$conexionBD);
            $article = $articleDAO->consult($codArticle);
            return $article;
        }

        /**
         * Create an article
         * @param Article Article to create
         * @return void
         */
        public static function createArticle($article){
            $articleDAO=ArticleDAO::getArticleDAO(self::$conexionBD);
            $articleDAO->create($article);
        }

        /**
         * Modify an article
         * @param Article Article to modify
         * @return void
         */
        public static function modifyArticle($article){
            $articleDAO=ArticleDAO::getArticleDAO(self::$conexionBD);
            $articleDAO->modify($article);
        }
        /**
         * Delete an article
         * @param Article Article to modify
         * @return void
         */
        public static function deleteArticle($article){
            $articleDAO=ArticleDAO::getArticleDAO(self::$conexionBD);
            $articleDAO->delete($article);
        }

        /**
         * List of Article
         * @return Article[] List of all the articles in the Data Base
         */
        public  static function getList(){
            $articleDAO=ArticleDAO::getArticleDAO(self::$conexionBD);
            $article=$articleDAO->getList();
            return $article;
        }

	    /**
	    * Change the conexion
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
