<?php 
    function connectAndQuery($dbname, $table, $query) {
        /* Function for connecting to a specified database.
         * Function will return the result of the query if no error was generated else will return the error generated.
         * This function can only be used to obtain result for a single object query.
         * ===================================================================================
         * Arguments passed:
         * $dbname -> Database that has to be connected to.
         * $table -> The table of the database that has to be queried.
         * $query -> The quer that has to be executed.
         * ===================================================================================
         * Returns:
         * A result of the query as object of the result if there is no error generated during the execution.
         * If an error is generated, the error string is returned instead of the result of query.
        */

        $servername = 'localhost';
        $username = 'root';
        $password = NULL;

        $response = ""
        $retval = array();

        if (!($conn = mysqli_connect($servername, $username, $password))) {
            $response = "Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn);
        }

        if (!mysqli_select_db($conn, $dbname)) {
            $response = "Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn);
        }

        if (!($select_res = mysqli_query($conn, $query))) {
            $response = "Retrieval of data from Database Failed - #".mysqli_errno($conn).": ".mysqli_error($conn);
        }
        
        if ($response == "") {
            return $select_res;
        }
        else {
            return $response;
        }
    }
?>