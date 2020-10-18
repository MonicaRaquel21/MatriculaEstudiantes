<?php
    class Database
    {
        const DBHOSTNAME = "localhost";
        const DBUSER = "root";
        const DBPASS = "";
        const DBDATABASE = "matricula";
        const CHARSET = "utf8";


        public function create_connection()
        {
            try
            {
                @$connection = new PDO("mysql:host=" . self::DBHOSTNAME . ";dbname=" . self::DBDATABASE . ";charset=" . self::CHARSET, self::DBUSER, self::DBPASS);

                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $connection;
            }
            catch (PDOException $e)
            {
                echo "Error en la conexión: ", $e->getMessage();
            }
        }

        public function close_connection($connection)
        {
            $connection = null;
        }
    }
?>