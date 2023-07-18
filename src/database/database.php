<?php

class Database
{
    private $host = 'localhost';
    private $db = 'projects_awph';
    private $uid = 'root';
    private $pwd = '';
    private $conn;

    public function read($q, $d = [])
    {
        try {
            $this->conn = null;
            $this->conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->db, $this->uid, $this->pwd, [PDO::ATTR_EMULATE_PREPARES => false]);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $this->conn->prepare($q);
            $sth->execute($d);
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            return 0;
        }
    }

    public function update($q, $d)
    {
        try {
            $this->conn = null;
            $this->conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->db, $this->uid, $this->pwd, [PDO::ATTR_EMULATE_PREPARES => false]);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $this->conn->prepare($q);
            $sth->execute($d);
            return 1;
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function err_msg_empty()
    {
        echo json_encode(
            [
                'status' => 204,
                'msg' => 'No data available',
                'data' => []
            ]
        );
    }

    public function suc_msg_get($d)
    {
        return json_encode(
            [
                'status' => 200,
                'msg' => 'Get Success...',
                'data' => $d
            ]
        );
    }

    public function VALIDATE_REQUEST($POST = [], $GET = [])
    {
        $request_type = false;

        if (isset($_GET)) {
            foreach ($GET as $key => $value) {
                $get_data = base64_decode($key);
                $get_data = json_decode($get_data, true);
                $request_type = $get_data['request_type'];
            }
        }

        if (isset($_POST)) {
            foreach ($POST as $key => $value) {
                $post_data = base64_decode($key);
                $post_data = json_decode($post_data, true);
                $request_type = $post_data['request_type'];
            }
        }

        return $request_type;
    }
}
