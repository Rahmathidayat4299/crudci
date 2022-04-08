<?Php
Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class M_Mahasiswa Extends CI_Model {

    Function GetDataMahasiswa() {
        $this->db->select('*');
        $this->db->from("tb_mahasiswa");
        $query = $this->db->get();
        return $query->result();
    }

    Function InsertDataMahasiswa($Data) {
        $this->Db->Insert('tb_mahasiswa', $Data);
    }
}

/* End Of File M_Mahasiswa.Php */
/* Location: ./Application/Models/M_Mahasiswa.Php */