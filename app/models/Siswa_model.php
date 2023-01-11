<?php


class Siswa_model
{

    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // private $sis = [
    //     [
    //         "nama" => "Sano Manjiro",
    //         "nip" => "012345678",
    //         "email" => "sanoman@gmail.com",
    //         "jurusan" => "Teknik Otomotif"
    //     ],
    //     [
    //         "nama" => "Takemichi",
    //         "nip" => "012345679",
    //         "email" => "takemichi@gmail.com",
    //         "jurusan" => "Teknik Bangunan"
    //     ],
    //     [
    //         "nama" => "Narumi",
    //         "nip" => "012345680",
    //         "email" => "narumi@gmail.com",
    //         "jurusan" => "Teknik Kecantikan"
    //     ]
    // ];

    public function getAllSiswa()
    {

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();

        // $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $this->sis;
    }

    public function getSiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSiswa($data) {
        $query = "INSERT INTO siswa(nama,nip,email,jurusan)
                    VALUES
                (:nama, :nip, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id) {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data) {
        $query = "UPDATE siswa
                    SET
                nama = :nama,
                nip = :nip,
                email = :email,
                jurusan = :jurusan
                WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSiswa() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}
